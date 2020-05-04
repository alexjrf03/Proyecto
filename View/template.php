<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- title -->
    <title>
      <?php 
        echo isset($_SESSION["iniciar"]) ? "Bienvenido al Sistema de Gestión de Aplicaiones (SGAI)" : "Login";
      ?>
	  </title>
    <!-- all styles -->
    <link rel="stylesheet" href="View/css/bootstrap.css">
	<link rel="stylesheet" href="View/css/estilos.css">
	<!-- alertas suaves styles and logic js-->
	<script src="View/js/sweetalert2.all.js"></script>

</head>
<body>

<?php
	//si existe una variable de sesión activa llamada iniciar
	if(isset($_SESSION["iniciar"]) && $_SESSION["iniciar"] == "ok") {
	    echo '<div class="wrapper">';
	    //incluye la cabecera 
		include "Module/navbar.php";

		//si existe un valor por el metodo get comparalo e incluyelo 
    	if(isset($_GET["r"])) {

			if(	$_GET["r"] == "home" ||
				$_GET["r"] == "logout" ||
				$_GET["r"] == "mostrar" ||
				$_GET["r"] == "update" ||
				$_GET["r"] == "new_user" ||
				$_GET["r"] == "listar_user" ||
				$_GET["r"] == "modificar_user" ) {

		      		if (($_GET["r"] == "new_user" || $_GET["r"] == "listar_user" || $_GET["r"] == "modificar_user" || $_GET["r"] == "update" ) && $_SESSION['admin'] == 'f') {

		      			include "Module/acceso_denegado.php";

		      		} else {

						include "Module/".$_GET["r"].".php";
		      		}
		        	

	      	} else {
      			//si no coincide incluye la vista de error
        		include "Module/404.php";

      		}

	    } else {
    		// si no existe valor pasado por el metodo get incluye el home
	      	include 'Module/home.php';
	    }
	    echo '<div class="push"></div>
	    	</div>';

	    // incluye el pie de pagina 
	    include "Module/footer.php";

	} else {

		if(isset($_GET["r"])) {

			if ($_GET["r"] == "register") {
				include "Module/".$_GET["r"].".php";				
			} elseif ($_GET["r"] == "change_password") {
				include "Module/change_password.php";
			}

		} else {
			// si no existe una variable de sesión iniciada o activa incluye el login
			include 'Module/login.php';
		}	  	
	}
?>
    <!-- script -->
    <script src="View/js/jquery-3.1.0.min.js"></script>
  	<script src="View/js/bootstrap.js"></script>

</body>
</html>