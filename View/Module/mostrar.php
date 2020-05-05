<div class="grand-title" id="servicio">
    <h4 data-ix="slowfade-scroll-bigs">Registro de Aplicaciones</h4>
</div>

<?php  

    $item = null;
    $value = null;
    $table = 'aplicacion';

    $aplicaciones = AppController::consultarApp($table,$item,$value);
    
    if ($aplicaciones[0] != '') {

        echo '<div class="contenedor">
                <table class="table" style="text-align:center;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Usuario Final</th>
                            <th scope="col">URL</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>';

                    foreach ($aplicaciones as $key => $value) {

                      echo '
                        <tr>
                            <th scope="row">'.($key+1).'</th>
                            <td>'.$value['nombre'].'</td>
                            <td>'.$value['usuario_final'].'</td>
                            <td>'.$value['url'].'</td>
                            <td>'.$value['descripcion_app'].'</td>
                            <td>';
                            
                            if ($_SESSION['admin'] == 't') {

                                echo '
                                <a href="index.php?r=home&id='.$value['id_app'].'" class="btn btn-warning">Modificar</a>
                                <a class="btn btn-info" href="index.php?r=mostrar&id='.$value['id_app'].'">Eliminar</a>';
                            }

                      echo '
                                <a class="btn btn-danger" href="View/Module/report/index.php?facturaN='.$value['id_app'].'" target="_blank">PDF</a>
                            </td>
                        </tr'; 
                    }
                    
                   echo '</tbody>
                </table>
            </div>
         ';

    } else {
        echo "<span class'text-center'>No hay registros</span>";
    }

    $eliminar = new AppController();
    $eliminar->delete();

?>