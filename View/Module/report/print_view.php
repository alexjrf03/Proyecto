<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Reporte de Aplicación</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>            
            #container {
                width: 100vh;
            }
            .width {
                width: 1000px !important
            }
            .th {
                background-color: #354757;
                color: #fff;
                text-align:center;
            }
            table {
                font-size: 15px
            }
            .nro_comprobante {
                text-align: right;
                color: red;
                font-weight: bold
            }
            h3 {
                color: blue; 
            }
        </style>

    </head>
    <body>

        <div id="container">

            <div class="barra">
                <img src="../../img/barra.png" height="30px"/>
            </div>

            <?php

                $nro_comprobante = rand(10,4);
                
                echo '
                <p class="nro_comprobante">N° Comprobante: '.$nro_comprobante.'</p>
                <h3 style="text-align: center;">Sistema de Gestión de Inventario de Aplicaciones</h3>
                
                <h4>Datos de la Aplicación:</h4>
            
                <table class="width" border="1" style="padding:5px 10px;">
                    
                    <tr>
                        <th class="th">Nombre</th>
                        <th class="th">Usuario Final</th>
                        <th class="th">URL</th>
                        <th class="th">Uso</th>
                    </tr>
                        
                    <tr>
                        <td>'.$app['name'].'</td>
                        <td>'.$app['final_user'].'</td>
                        <td>'.$app['url'].'</td>
                        <td>'.$app['uso'].'</td>
                    </tr> 

                    <tr>
                        <th class="th">Archivo Conexión</th>
                        <th class="th">Manejo de Firmas</th>
                        <th class="th">Archivos Adjuntos</th>
                        <th class="th">Método de Autenticación</th>
                    </tr>

                    <tr>
                        <td>'.$app['conection_file'].'</td>
                        <td>'.$app['firms'].'</td>
                        <td>'.$app['attached_files'].'</td>
                        <td>'.$app['authentication_method'].'</td>
                    </tr> 

                    <tr>
                        <th colspan="4" class="th">Descripción</th>
                    </tr>

                    <tr>
                        <td colspan="4">'.$app['description'].'</td>
                    </tr>
                        
                </table>';

                

            ?>

        </div>

    </body>
</html>