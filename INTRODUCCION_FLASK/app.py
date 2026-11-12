# Importamos las librerías necesarias de Flask
from flask import Flask, redirect, render_template, request, url_for, session, flash

# Importamos la librería de MySQL para Flask
from flask_mysqldb import MySQL

# Importamos las funciones para generar y comprobar contraseñas cifradas
from werkzeug.security import generate_password_hash, check_password_hash

# Creamos una instancia del proyecto
app = Flask(__name__)

# Permite cargar las vistas cuando se modifican
app.config["TEMPLATES_AUTO_RELOAD"] = True

# Configuración de la conexión a la base de datos
app.config["MYSQL_HOST"] = "localhost"
app.config["MYSQL_USER"] = "root"
app.config["MYSQL_PASSWORD"] = ""
app.config["MYSQL_DB"] = "flaskdb"
app.secret_key = "mysecretkey"

mysql = MySQL(app)


# Página de inicio
@app.route("/")
def home():
    # Si ya inició sesión, lo enviamos a su panel
    if "id_usuario" in session:
        if session.get("rol") == "Administrador":
            return redirect(url_for("admin"))
        return redirect(url_for("usuario"))

    return render_template("login.html")


# REGISTRO DE USUARIOS
@app.route("/registro", methods=["GET", "POST"])
def registro():
    if request.method == "GET":
        return render_template("registro.html")

    nombre = request.form["nombre"].strip()
    apellido_p = request.form["apellido_p"].strip()
    apellido_m = request.form["apellido_m"].strip()
    correo = request.form["correo"].strip().lower()
    password = request.form["password"]
    id_rol = request.form["id_rol"]

    # Generamos el hash de la contraseña antes de guardarla
    password_hash = generate_password_hash(password)
    cursor = mysql.connection.cursor()

    try:
        # Comprobamos si el correo ya está registrado
        cursor.execute(
            "SELECT id FROM usuarios WHERE correo = %s",
            (correo,)
        )

        if cursor.fetchone():
            flash("Ese correo ya está registrado. Intenta iniciar sesión.", "error")
            return render_template("registro.html")

        # Insertamos el nuevo usuario
        cursor.execute(
            """
            INSERT INTO usuarios
            (nombre, apellido_p, apellido_m, correo, password_hash, id_rol)
            VALUES (%s, %s, %s, %s, %s, %s)
            """,
            (nombre, apellido_p, apellido_m, correo, password_hash, id_rol)
        )

        mysql.connection.commit()
        flash("Registro completado. Ahora puedes iniciar sesión.", "success")
        return redirect(url_for("home"))

    except Exception:
        mysql.connection.rollback()
        app.logger.exception("Error al registrar el usuario.")
        flash("No fue posible completar el registro. Verifica la base de datos.", "error")
        return render_template("registro.html")

    finally:
        cursor.close()


# INICIO DE SESIÓN
@app.route("/login", methods=["GET", "POST"])
def login():
    if request.method == "GET":
        return redirect(url_for("home"))

    correo = request.form["correo"].strip().lower()
    password = request.form["password"]
    cursor = mysql.connection.cursor()

    try:
        # Buscamos el usuario y el nombre de su rol
        cursor.execute(
            """
            SELECT usuarios.id, usuarios.nombre, usuarios.password_hash,
                   roles.nombre
            FROM usuarios
            INNER JOIN roles ON usuarios.id_rol = roles.id_rd
            WHERE usuarios.correo = %s
            """,
            (correo,)
        )
        usuario_encontrado = cursor.fetchone()
    finally:
        cursor.close()

    # Verificamos la contraseña con el hash almacenado
    if usuario_encontrado and check_password_hash(usuario_encontrado[2], password):
        session.clear()
        session["id_usuario"] = usuario_encontrado[0]
        session["nombre"] = usuario_encontrado[1]
        session["rol"] = usuario_encontrado[3].strip()

        if session["rol"] == "Administrador":
            return redirect(url_for("admin"))
        return redirect(url_for("usuario"))

    flash("Correo o contraseña incorrectos.", "error")
    return redirect(url_for("home"))


# PANEL DE ADMINISTRADOR
@app.route("/admin")
def admin():
    if "id_usuario" not in session:
        return redirect(url_for("home"))

    if session.get("rol") != "Administrador":
        flash("No tienes permiso para acceder a esa página.", "error")
        return redirect(url_for("usuario"))

    return render_template("administrador.html", nombre=session["nombre"])


# PANEL DE USUARIO
@app.route("/usuario")
def usuario():
    if "id_usuario" not in session:
        return redirect(url_for("home"))

    if session.get("rol") != "Usuario X":
        flash("No tienes permiso para acceder a esa página.", "error")
        return redirect(url_for("admin"))

    return render_template("usuarios.html", nombre=session["nombre"])


# CERRAR SESIÓN
@app.route("/logout")
def logout():
    session.clear()
    flash("Has cerrado sesión.", "success")
    return redirect(url_for("home"))


# Ejecutar el proyecto en el puerto 5000
if __name__ == "__main__":
    app.run(port=5000, debug=True)


# ==================================================
# Autor: Perez Juarez Javier Antonio
# Materia: Aplicaciones Web
# Actividad: Introducción a Flask
# Descripción: Desarrollo de la aplicación web con Flask.
# ==================================================