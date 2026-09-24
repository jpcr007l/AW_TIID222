<?php

echo "Hola Mundo";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        /* ================================= */
        /* Texto                             */
        /* ================================= */

        h1 {
            color: blue;
        }


        /* ================================= */
        /* PADDING - VERSIÓN CORTA           */
        /* ================================= */

        .padding-corta {
            background: lightblue;

            /* Padding - versión corta */
            padding: 20px 40px;

            margin: 20px;
        }


        /* ================================= */
        /* PADDING - VERSIÓN LARGA           */
        /* ================================= */

        .padding-larga {
            background: lightblue;

            /* Padding - versión larga */
            padding-top: 20px;
            padding-right: 40px;
            padding-bottom: 20px;
            padding-left: 40px;

            margin: 20px;
        }


        /* ================================= */
        /* MARGIN - VERSIÓN CORTA            */
        /* ================================= */

        .margin-corta {
            background: lightgreen;

            /* Padding */
            padding: 20px 40px;

            /* Margin - versión corta */
            margin: 20px;
        }


        /* ================================= */
        /* MARGIN - VERSIÓN LARGA            */
        /* ================================= */

        .margin-larga {
            background: lightpink;

            /* Padding */
            padding: 20px 40px;

            /* Margin - versión larga */
            margin-top: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
            margin-left: 20px;
        }


        /* ================================= */
        /* MARGIN - DIFERENTES MEDIDAS       */
        /* ================================= */

        .margin-diferentes {
            background: lightyellow;

            /* Padding */
            padding: 20px 40px;

            /* Margin - diferentes medidas */
            margin-top: 20px;
            margin-right: 30px;
            margin-bottom: 40px;
            margin-left: 50px;
        }


        /* ================================= */
        /* BORDER - DIFERENTES ESTILOS       */
        /* ================================= */

        .borde-solid {
            border: 5px solid black;
            padding: 10px;
            margin: 10px;
        }

        .borde-dashed {
            border: 5px dashed black;
            padding: 10px;
            margin: 10px;
        }

        .borde-dotted {
            border: 5px dotted black;
            padding: 10px;
            margin: 10px;
        }

        .borde-double {
            border: 5px double black;
            padding: 10px;
            margin: 10px;
        }

        .borde-groove {
            border: 5px groove black;
            padding: 10px;
            margin: 10px;
        }

        .borde-ridge {
            border: 5px ridge black;
            padding: 10px;
            margin: 10px;
        }

        .borde-inset {
            border: 5px inset black;
            padding: 10px;
            margin: 10px;
        }

        .borde-outset {
            border: 5px outset black;
            padding: 10px;
            margin: 10px;
        }

        .borde-none {
            border: 5px none black;
            padding: 10px;
            margin: 10px;
        }

        .borde-hidden {
            border: 5px hidden black;
            padding: 10px;
            margin: 10px;
        }


        /* ================================= */
        /* COLORES CLAROS                    */
        /* ================================= */

        .color-lightgreen {
            background-color: lightgreen;
            padding: 20px;
            margin: 10px;
        }

        .color-lightblue {
            background-color: lightblue;
            padding: 20px;
            margin: 10px;
        }

        .color-lightpink {
            background-color: lightpink;
            padding: 20px;
            margin: 10px;
        }

        .color-lightgray {
            background-color: lightgray;
            padding: 20px;
            margin: 10px;
        }


        /* ================================= */
        /* COLORES OSCUROS                   */
        /* ================================= */

        .color-darkgreen {
            background-color: darkgreen;
            padding: 20px;
            margin: 10px;
        }

        .color-darkblue {
            background-color: darkblue;
            padding: 20px;
            margin: 10px;
        }

        .color-darkred {
            background-color: darkred;
            padding: 20px;
            margin: 10px;
        }

        .color-darkgray {
            background-color: darkgray;
            padding: 20px;
            margin: 10px;
        }

    </style>

</head>

<body>

    <!-- ================================= -->
    <!-- TÍTULOS                           -->
    <!-- ================================= -->

    <h1>Texto de Ejemplo</h1>

    <h2>Texto de Ejemplo</h2>
    <h3>Texto de Ejemplo</h3>
    <h4>Texto de Ejemplo</h4>
    <h5>Texto de Ejemplo</h5>
    <h6>Texto de Ejemplo</h6>


    <!-- ================================= -->
    <!-- PADDING - VERSIÓN CORTA           -->
    <!-- ================================= -->

    <div class="padding-corta">

        <h2>Padding - versión corta</h2>

        <p>Este es un ejemplo utilizando padding en su versión corta.</p>

    </div>


    <!-- ================================= -->
    <!-- PADDING - VERSIÓN LARGA           -->
    <!-- ================================= -->

    <div class="padding-larga">

        <h2>Padding - versión larga</h2>

        <p>Este es un ejemplo utilizando padding en su versión larga.</p>

    </div>


    <!-- ================================= -->
    <!-- MARGIN - VERSIÓN CORTA            -->
    <!-- ================================= -->

    <div class="margin-corta">

        <h2>Margin - versión corta</h2>

        <p>Este es un ejemplo utilizando margin en su versión corta.</p>

    </div>


    <!-- ================================= -->
    <!-- MARGIN - VERSIÓN LARGA            -->
    <!-- ================================= -->

    <div class="margin-larga">

        <h2>Margin - versión larga</h2>

        <p>Este es un ejemplo utilizando margin en su versión larga.</p>

    </div>


    <!-- ================================= -->
    <!-- MARGIN - DIFERENTES MEDIDAS       -->
    <!-- ================================= -->

    <div class="margin-diferentes">

        <h2>Margin - diferentes medidas</h2>

        <p>Este es un ejemplo utilizando diferentes medidas de margin.</p>

    </div>


    <!-- ================================= -->
    <!-- BORDER - SOLID                    -->
    <!-- ================================= -->

    <div class="borde-solid">

        <h2>Solid</h2>

        <p>Este es un borde solid.</p>

    </div>


    <!-- ================================= -->
    <!-- BORDER - DASHED                   -->
    <!-- ================================= -->

    <div class="borde-dashed">

        <h2>Dashed</h2>

        <p>Este es un borde dashed.</p>

    </div>


    <!-- ================================= -->
    <!-- BORDER - DOTTED                   -->
    <!-- ================================= -->

    <div class="borde-dotted">

        <h2>Dotted</h2>

        <p>Este es un borde dotted.</p>

    </div>


    <!-- ================================= -->
    <!-- BORDER - DOUBLE                   -->
    <!-- ================================= -->

    <div class="borde-double">

        <h2>Double</h2>

        <p>Este es un borde double.</p>

    </div>


    <!-- ================================= -->
    <!-- BORDER - GROOVE                   -->
    <!-- ================================= -->

    <div class="borde-groove">

        <h2>Groove</h2>

        <p>Este es un borde groove.</p>

    </div>


    <!-- ================================= -->
    <!-- BORDER - RIDGE                    -->
    <!-- ================================= -->

    <div class="borde-ridge">

        <h2>Ridge</h2>

        <p>Este es un borde ridge.</p>

    </div>


    <!-- ================================= -->
    <!-- BORDER - INSET                    -->
    <!-- ================================= -->

    <div class="borde-inset">

        <h2>Inset</h2>

        <p>Este es un borde inset.</p>

    </div>


    <!-- ================================= -->
    <!-- BORDER - OUTSET                   -->
    <!-- ================================= -->

    <div class="borde-outset">

        <h2>Outset</h2>

        <p>Este es un borde outset.</p>

    </div>


    <!-- ================================= -->
    <!-- BORDER - NONE                     -->
    <!-- ================================= -->

    <div class="borde-none">

        <h2>None</h2>

        <p>Este es un borde none.</p>

    </div>


    <!-- ================================= -->
    <!-- BORDER - HIDDEN                   -->
    <!-- ================================= -->

    <div class="borde-hidden">

        <h2>Hidden</h2>

        <p>Este es un borde hidden.</p>

    </div>


    <!-- ================================= -->
    <!-- COLORES CLAROS                    -->
    <!-- ================================= -->

    <div class="color-lightgreen">

        <h2>Light Green</h2>

        <p>Este es un ejemplo de lightgreen.</p>

    </div>


    <div class="color-lightblue">

        <h2>Light Blue</h2>

        <p>Este es un ejemplo de lightblue.</p>

    </div>


    <div class="color-lightpink">

        <h2>Light Pink</h2>

        <p>Este es un ejemplo de lightpink.</p>

    </div>


    <div class="color-lightgray">

        <h2>Light Gray</h2>

        <p>Este es un ejemplo de lightgray.</p>

    </div>


    <!-- ================================= -->
    <!-- COLORES OSCUROS                   -->
    <!-- ================================= -->

    <div class="color-darkgreen">

        <h2>Dark Green</h2>

        <p>Este es un ejemplo de darkgreen.</p>

    </div>


    <div class="color-darkblue">

        <h2>Dark Blue</h2>

        <p>Este es un ejemplo de darkblue.</p>

    </div>


    <div class="color-darkred">

        <h2>Dark Red</h2>

        <p>Este es un ejemplo de darkred.</p>

    </div>


    <div class="color-darkgray">

        <h2>Dark Gray</h2>

        <p>Este es un ejemplo de darkgray.</p>

    </div>

</body>

</html>