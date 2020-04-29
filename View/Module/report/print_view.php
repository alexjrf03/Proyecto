<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Reporte de Aplicación</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>

            * {
                font-size: 10px;
            }

            .titulo{
                color: blue;
            }

            #container {
                width: 500px;
            }
           
        </style>

    </head>
    <body>

        <div id="container">

            <div class="padding">
                <!-- <img src="../../img/barra.png"/> -->
            </div>

            <?php

                print_r($app);

            ?>

        </div>

    </body>
</html>