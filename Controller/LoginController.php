<?php

class LoginController {
    
    static public function Login(){

		if(isset($_POST["username"])){

			if($_POST["username"] && preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])) {
                
				$item = "Correo";
				$value = $_POST["username"];

				$respuesta = Login::ingresar($item, $value);

				if($respuesta["Correo"] == $_POST["username"] && $respuesta["Password"] == md5($_POST["password"])) {
					// trim() : se usa para quitar los espacios vacios de las variables
					$_SESSION["iniciar"] = "ok";
					$_SESSION["user"] = trim($respuesta['Correo']);
					$_SESSION["ultima"] = $respuesta['Ultima_conexion'];
					$_SESSION["admin"] = $respuesta['Admin'];

					//registrar fecha y hora del login
					date_default_timezone_set('America/Caracas');

					$fecha = date('Y-m-d');
					$hora = date('H:i:s');

					$fechaact = $fecha.' '.$hora;

					$item1 = "ultima_conexion";
					$value1 = $fechaact;

					$item2 = "Correo";
					$value2 = $respuesta["Correo"];

					$ultimo = Login::actualizar($item1 , $value1, $item2, $value2);

					if($ultimo == "ok"){
					  
					echo '<script>
						  	window.location = "index.php";
						 </script>';
              
      				}   

				} else {

					echo '
	                <script>  
	                  swal({
	                      type: "error",
	                      title: "Error al ingresar, usuario o clave incorrecta. vuelve a intentarlo",
	                      showConfirmButton: true,
	                      confirmButtonText: "ok",
	                      closeOnConfirm: false
	                      }).then((result) => {
	                        if (result.value) {
	                          window.location = "index.php";
	                        }
	                  })    
	                </script>';

				}
			}
		}
  	}

} 