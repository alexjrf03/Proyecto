<?php

class AppController {

    static public function consultarApp($table,$item,$value){  
  
      $respt = new App();
      $resp = $respt->consultarApp($table,$item,$value);
      
      return $resp;  
    }

    static public function create(){
            
      if(isset($_POST['nombre_proveedor'])){

        $database = $_POST['nombre_bd'].','.$_POST['select-bd'].','.$_POST['servidor'].','.$_POST['descripcion-bd'];
        $provider = $_POST['nombre_proveedor'].','.$_POST['phone'].','.$_POST['correo'];
        $date = date(DATE_RFC2822);
        // funcion que detine programa: die();
        
        if ($_POST['select-ambiente'] && $_POST['name']) {

                $tabla='aplicacion';
                
                $data = array('environment' => $_POST['select-ambiente'],
                              'name' => $_POST['name'],
                              'final_user' => $_POST['final_user'],
                              'url' => $_POST['url'],
                              'uso' => $_POST['uso'],
                              'conection_file' => $_POST['conection_file'],
                              'firms' => $_POST['firms'],
                              'attached_files' => $_POST['attached_files'],
                              'authentication_method' => $_POST['authentication_method'],
                              'description' => $_POST['description'],
                              'device' => $_POST['device'],
                              'languaje' => $_POST['languaje'],
                              'web_service' => $_POST['web_service'],
                              'so' => $_POST['so'],
                              'provider_data' => $provider,
                              'database' => $database,
                              'date' => $date
                            );             
                
                $resp = App::insertarApp($tabla, $data);
                
                if($resp=="ok"){
                    echo '<script>  
                            swal({
                                type: "success",
                                title: "Los datos se registraron correctamente",
                                showConfirmButton: true,
                                confirmButtonText: "Listo",
                                closeOnConfirm: false
                                }).then((result) => {
                                if (result.value) {
                                   window.location = "index.php?r=mostrar";
                                }
                            })    
                        </script>'; 
                }
            
        } else {
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

  static public function update(){
        
      if(isset($_POST['nombre_proveedor'])){
        
        $database = $_POST['nombre_bd'].','.$_POST['status'].','.$_POST['servidor'].','.$_POST['descripcion-bd'];
        $provider = $_POST['nombre_proveedor'].','.$_POST['phone'].','.$_POST['correo'];             
        
        if($_POST['environment'] && $_POST['name']){

                $tabla='aplicacion';
                
                $data = array('id' => $_POST['id'],
                              'environment' => $_POST['environment'],
                              'name' => $_POST['name'],
                              'final_user' => $_POST['final_user'],
                              'url' => $_POST['url'],
                              'uso' => $_POST['uso'],
                              'conection_file' => $_POST['conection_file'],
                              'firms' => $_POST['firms'],
                              'attached_files' => $_POST['attached_files'],
                              'authentication_method' => $_POST['authentication_method'],
                              'description' => $_POST['description'],
                              'device' => $_POST['device'],
                              'languaje' => $_POST['languaje'],
                              'web_service' => $_POST['web_service'],
                              'so' => $_POST['so'],
                              'provider_data' => $provider,
                              'database' => $database
                            );  
              
              $resp = App::updateApp($tabla, $data);
              
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
                                window.location = "index.php?r=mostrar";
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
        
      if(isset($_GET['id'])){
            
            $tabla = 'aplicacion';
            $data = array('id' => $_GET['id'] );
            
            $resp = App::deleteApp($tabla,$data);
            
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
                                window.location = "index.php?r=mostrar";
                            }
                        })    
                      </script>';     
            } else {
                  echo '<script>
                    swal({
                      type: "error",
                      title: "Error al eliminar el app",
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
?>