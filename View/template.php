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

		    if($_GET["r"] == "home" || $_GET["r"] == "logout" || $_GET["r"] == "mostrar") {

		      		if (($_GET["r"] == "new_user" || $_GET["r"] == "listar_user" || $_GET["r"] == "modificar_user" ||  $_GET["r"] == "insertar_p" ||  $_GET["r"] == "insertar_c") && $_SESSION['admin'] == 'f') {

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
  	<script src="View/js/bootstrap.js"></script>
	<script src="View/js/ajax.js"></script>
	<script>
		window.onload = (function(){
    try{
        
        // $("#siguiente").on('keyup', function(){
        function ajaxForm () {
            alert('hola');
            let buscar = document.getElementById('form').value;                    

            function httpQuest()
            {
                try{
                req=new XMLHttpRequest();
                }catch(err1){
                    try{
                        req=new ActiveXObject("Msxml2.XMLHTTP");
                        }catch (err2){
                        try{
                            req=new ActiveXObject("Microsoft.XMLHTTP");
                            }catch (err3){
                            req=false;
                            }
                        }
                }
                return req;
            }

            function getBusqueda(buscar){
                    var http=httpQuest();
                
                if(buscar != ""){
                    if (http.readyState==4 || http.readyState==0) {
                        var myRand=parseInt(Math.random()*999999999999);

                        http.open("GET","../IVPA/Ajax/consultasAjax.php?myRand="+myRand+"&buscar="+buscar,true);         
                        http.onreadystatechange=function(){           
                        if ((http.readyState==4 && http.status==200)) {
                            
                            var retorno = http.responseText;

                            document.getElementById('respuesta').innerHTML= retorno;
                                
                            }
                        } 
                }
                http.setRequestHeader("Content-Type","application/x-www-formurlencoded");
                http.send(null);

                } else {
                    
                    var error = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>¡Aviso!</strong> No puede buscar si el campo esta vacío. Intentar nuevamente<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                    
                    document.getElementById('respuesta').innerHTML = error;

                }
                
            }  

            getBusqueda(buscar);
        }
        // }).keyup();

    } catch(e) { console.log(e) }
});
	</script>

</body>
</html>