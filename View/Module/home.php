<?php

  echo '<section class="content">';
          include 'history.php';
          include 'list_app.php';
  echo '</section>';
  
  if ($_SESSION['admin'] == 't') {

    echo '<div class="container"> 
            <form action="" method="post">';
              
              include "form/aplicacion.php";
              include "form/lenguaje.php";
              include "form/servidor.php.";
              include "form/so.php";
              include "form/env.php";
              include "form/device.php";
              include "form/base_datos.php";
              include "form/proveedor.php";

              $insertar = new AppController();
              !isset($_GET['id']) ? $insertar->create() : $insertar->update();             
              $id = (!isset($_GET['id'])) ? '' : $_GET['id'];

              if (isset($_GET['id'])) {
                ob_start();
                require_once 'form/ids.php';
                $html = ob_get_clean();
                echo $html;
              }
    echo '   
            <div class="col-12 text-center mt-5 mb-4">
              <button class="btn btn-success">Enviar</button>
            </div>
          </form>    
        </div>';
  } else {

    echo '<h1 class="text-center">¡ Bienvenido ! '.$_SESSION['user'].'</h1>';

  }

?>