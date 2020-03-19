<?php

class LoginController {
    
    static public function Login(){

		if(isset($_POST["username"])){

			if($_POST["username"] && preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])) {
				$item = "correo";
				$value = $_POST["username"];

				$respuesta = Login::ingresar($item, $value);

				if($respuesta["correo"] == $_POST["username"] && $respuesta["password"] == md5($_POST["password"])) {
					// trim() : se usa para quitar los espacios vacios de las variables
					$_SESSION["iniciar"] = "ok";
					$_SESSION["user"] = trim($respuesta['correo']);
					$_SESSION["ultima"] = $respuesta['ultima_conexion'];
					$_SESSION["admin"] = $respuesta['admin'];
					$_SESSION["estatus"] = $respuesta['estatus'];

					if ($_SESSION["estatus"] == 't') {
						
						//registrar fecha y hora del login
						date_default_timezone_set('America/Caracas');
						$fecha = date('Y-m-d');
						$hora = date('H:i:s');
						$fechaact = $fecha.' '.$hora;
						$item1 = "ultima_conexion";
						$value1 = $fechaact;
						$item2 = "correo";
						$value2 = $respuesta["correo"];
						$ultimo = Login::actualizar($item1 , $value1, $item2, $value2);

						if($ultimo == "ok"){
						  
						echo '<script>
							  	window.location = "index.php";
							 </script>';
	              
	      				}

					} else {
						
						echo '<script>
								swal({
			                      type: "error",
			                      title: "Error usuario Inactivo, debe ser reactivado por el Administrador",
			                      showConfirmButton: true,
			                      confirmButtonText: "ok",
			                      closeOnConfirm: false
			                      }).then((result) => {
			                        if (result.value) {
			                          window.location = window.location = "View/Module/logout.php";
			                        }
			                  	})
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
	  
	  static public function query($item, $value) 
	  {
		$respuesta = Login::ingresar($item, $value);
		return $respuesta;
	  }

	  static public function create ()
	  {
		  if(isset($_POST['correo'])){
			
		  if( $_POST['correo'] && $_POST['pass'] && $_POST['pass_c'] ){

			if($_POST['pass'] == $_POST['pass_c']) {				
			
				$tabla='usuario';
				$ultima_conexion = date('Y-m-d');
				
				$data = array(	'correo'=>  $_POST['correo'],
								'pass'=> $_POST['pass'],
								'ultima_conexion'=> $ultima_conexion 
				);
			
				$ultima = $_SESSION["ultima"] = date("Y");
				
				$resp1 = Login::createUser($tabla, $data);
				$resp = $resp1;
				
				if($resp == "ok") {
				
					echo '<script>
					swal({
						type: "success",
						title: "Se registro correctamente",
						showConfirmButton: true,
						confirmButtonText: "Listo",
						closeOnConfirm: false
					}).then((result) => {
						if (result.value) {
							window.location = "index.php";
						}
					});  
					</script>'; 
				}
			} else {
				echo '<script>
			swal({
				type: "error",
				title: "La contraseña no coinciden",
				showConfirmButton: true,
				confirmButtonText: "Listo",
				closeOnConfirm: false
			}).then((result) => {
				if (result.value) {
					window.location = "index.php?r=register";
				}
			})    
			</script>';
			}
			
		}else{
			echo '<script>
			swal({
				type: "error",
				title: "El formulario no puede estar vacio! o contener caractares especiales",
				showConfirmButton: true,
				confirmButtonText: "Listo",
				closeOnConfirm: false
			}).then((result) => {
				if (result.value) {
					window.location = "index.php?r=register";
				}
			})    
			</script>';
		}
	}  
}

static public function update(){
        
	if(isset($_POST['correo'])){
	  
	  if($_POST['correom'] && $_POST['pass']){

			  $tabla='usuario';
			  
			  $data = array('correo' => $_POST['correo'],
							'correom' => $_POST['correom'],
							'pass' => $_POST['pass'],
							'estatus' => $_POST['estatus'] 
						  );  
			
			$resp = Login::updateUser($tabla, $data);
			
			if($resp=="ok"){  
			  echo '<script>  
					  swal({
						  type: "success",
						  title: "Los datos se actualizarón correctamente !",
						  showConfirmButton: true,
						  confirmButtonText: "Listo",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {
								window.location = "index.php?r=listar_user";
							}
					  })    
					</script>';                   
			}
		
	}else{
	   echo '<script>
				swal({
					type: "error",
					title: "El formulario no puede estar vacio! o contener caractares especiales",
					showConfirmButton: true,
					confirmButtonText: "Listo",
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

	  static public function delete(){
        
        if(isset($_GET['correo'])){
              
			$tabla = 'usuario';
            $data = array('correo' => $_GET['correo'] );
            
            $resp = Login::deleteUser($tabla,$data); 
              
              if($resp == "ok"){  
                  echo '<script>  
                          swal({
                              type: "success",
                              title: "Los datos se eliminaron correctamente !",
                              showConfirmButton: true,
                              confirmButtonText: "Listo",
                              closeOnConfirm: false
                              }).then((result) => {
                                if (result.value) {
                                  window.location = "index.php?r=listar_user";
                                }
                          })    
                        </script>';     
              }else{
           echo '<script>
                    swal({
                        type: "error",
                        title: "Error al eliminar el usuario",
                        showConfirmButton: true,
                        confirmButtonText: "Listo",
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