
from flask import Flask, render_template, request, redirect, url_for, flash
from flask_mysqldb import MySQL

app = Flask(__name__)

app.secret_key = 'clave_papeleria'

app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'crud_papeleria'

mysql = MySQL(app)


# CONSULTAR ARTICULOS
@app.route('/')
def index():

    cursor = mysql.connection.cursor()

    cursor.execute("SELECT * FROM tb_articulos")

    listaArticulos = cursor.fetchall()

    cursor.close()

    return render_template('index.html', listaArticulos=listaArticulos)


# REGISTRAR ARTICULO
@app.route('/guardar', methods=['POST'])
def guardar():

    nombre = request.form['nombre_producto']
    descripcion = request.form['descripcion']
    precio = request.form['precio']
    stock = request.form['stock']

    cursor = mysql.connection.cursor()

    cursor.execute(
        "INSERT INTO tb_articulos (nombre_producto, descripcion, precio, stock) VALUES (%s, %s, %s, %s)",
        (nombre, descripcion, precio, stock)
    )

    mysql.connection.commit()

    cursor.close()

    flash('Artículo registrado correctamente')

    return redirect(url_for('index'))


# SELECCIONAR ARTICULO PARA EDITAR
@app.route('/seleccionar_editar', methods=['POST'])
def seleccionar_editar():

    id_articulo = request.form['id_articulo']

    cursor = mysql.connection.cursor()

    cursor.execute(
        "SELECT * FROM tb_articulos WHERE id = %s",
        (id_articulo,)
    )

    articulo = cursor.fetchone()

    cursor.close()

    if articulo:
        return render_template('editarArticulo.html', articulo=articulo)

    flash('No se encontró el artículo')

    return redirect(url_for('index'))


# ACTUALIZAR ARTICULO
@app.route('/actualizar/<int:id>', methods=['POST'])
def actualizar(id):

    nombre = request.form['nombre_producto']
    descripcion = request.form['descripcion']
    precio = request.form['precio']
    stock = request.form['stock']

    cursor = mysql.connection.cursor()

    cursor.execute(
        "UPDATE tb_articulos SET nombre_producto = %s, descripcion = %s, precio = %s, stock = %s WHERE id = %s",
        (nombre, descripcion, precio, stock, id)
    )

    mysql.connection.commit()

    cursor.close()

    flash('Artículo actualizado correctamente')

    return redirect(url_for('index'))


# SELECCIONAR ARTICULO PARA ELIMINAR
@app.route('/seleccionar_eliminar', methods=['POST'])
def seleccionar_eliminar():

    id_articulo = request.form['id_articulo']

    cursor = mysql.connection.cursor()

    cursor.execute(
        "SELECT * FROM tb_articulos WHERE id = %s",
        (id_articulo,)
    )

    articulo = cursor.fetchone()

    cursor.close()

    if articulo:
        return render_template('eliminarArticulo.html', articulo=articulo)

    flash('No se encontró el artículo')

    return redirect(url_for('index'))


# ELIMINAR ARTICULO
@app.route('/eliminar/<int:id>', methods=['POST'])
def eliminar(id):

    cursor = mysql.connection.cursor()

    cursor.execute(
        "DELETE FROM tb_articulos WHERE id = %s",
        (id,)
    )

    mysql.connection.commit()

    cursor.close()

    flash('Artículo eliminado correctamente')

    return redirect(url_for('index'))


if __name__ == '__main__':
    app.run(debug=True)
