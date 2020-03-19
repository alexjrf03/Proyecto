<?php

  echo '<section class="content">';
          include 'history.php';
          include 'list_app.php';
  echo '</section>';
  
  if ($_SESSION['admin'] == 't') {

    echo '<div class="container"> 
            <form action="" method="post">';
              include "form/aplicacion.php";
              include "form/base_datos.php";
              include "form/proveedor.php";

              $insertar = new AppController();
  			      $insertar->create();
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