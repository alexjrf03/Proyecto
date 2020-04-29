<?php

class AppController {

    static public function consultarApp($table,$item,$value){  
  
      $respt = new App();
      $resp = $respt->consultarApp($table,$item,$value);
      
      return $resp;  
    }

    static public function create(){
            
      if(isset($_POST['nombre_proveedor'])){

        print_r($_POST);
        die();
        
        if ($_POST['select-ambiente'] && $_POST['name']) {

                $tabla='aplicacion';
                $date = date(DATE_RFC2822); //fecha actual
                
                $data_app = array(
                    'name' => $_POST['name'],
                    'final_user' => $_POST['final_user'],
                    'url' => $_POST['url'],
                    'uso' => $_POST['uso'],
                    'conection_file' => $_POST['conection_file'],
                    'firms' => $_POST['firms'],
                    'attached_files' => $_POST['attached_files'],
                    'authentication_method' => $_POST['authentication_method'],
                    'description' => $_POST['description'],
                    'date' => $date,             
                );

                $app = App::insertarApp($tabla, $data_app);

                if (!empty($app)) {

                  $data_lenguaje = array(
                    'app_id' => $app['max'],
                    'languaje' => $_POST['languaje'],
                  );
                  
                  $data_serviceWeb = array (
                    'app_id' => $app['max'],
                    'web_service' => $_POST['web_service']
                  );

                  $data_so = array(
                    'app_id' => $app['max'],
                    'so' => $_POST['so'],
                  );

                  $data_env = array(
                    'app_id' => $app['max'],
                    'environment' => $_POST['select-ambiente'],
                  );

                  $data_device = array(
                    'app_id' => $app['max'],
                    'device' => $_POST['device'],
                  );

                  $data_db = array(
                    'app_id' => $app['max'],
                    'nombre' => $_POST['nombre_bd'],
                    'estatus' => $_POST['select-bd'],
                    'servidor' => $_POST['servidor'],
                    'descripcion' => $_POST['descripcion-bd']
                  );

                  $data_provider = array(
                    'app_id' => $app['max'],
                    'nombre' => $_POST['nombre_proveedor'],
                    'telefono' => $_POST['phone'],
                    'correo' => $_POST['correo']
                  );

                  $lenguaje = Lenguaje::create($data_lenguaje);
                  $serviceWeb = Service::create($data_serviceWeb);
                  $so = Sistema::create($data_so);
                  $env = Env::create($data_env);
                  $device = Device::create($data_device);
                  $db = Database::create($data_db);
                  $provider = Provider::create($data_provider);
                  
                }

                if(!empty($app) && $lenguaje == "ok" && $serviceWeb == "ok" && $so == "ok" && $env == "ok" && $db == "ok" && $provider == "ok"){
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
          
          $data_app = array(
              'name' => $_POST['name'],
              'final_user' => $_POST['final_user'],
              'url' => $_POST['url'],
              'uso' => $_POST['uso'],
              'conection_file' => $_POST['conection_file'],
              'firms' => $_POST['firms'],
              'attached_files' => $_POST['attached_files'],
              'authentication_method' => $_POST['authentication_method'],
              'description' => $_POST['description'],
              'id' => $_POST['id']
          );

          $data_lenguaje = array(
            'app_id' => $_POST['id'],
            'languaje' => $_POST['languaje'],
          );
          
          $data_serviceWeb = array (
            'app_id' => $_POST['id'],
            'web_service' => $_POST['web_service']
          );

          $data_so = array(
            'app_id' => $_POST['id'],
            'so' => $_POST['so'],
          );

          $data_env = array(
            'app_id' => $_POST['id'],
            'environment' => $_POST['select-ambiente'],
          );

          $data_device = array(
            'app_id' => $_POST['id'],
            'device' => $_POST['device'],
          );

          $data_db = array(
            'app_id' => $_POST['id'],
            'nombre' => $_POST['nombre_bd'],
            'estatus' => $_POST['select-bd'],
            'servidor' => $_POST['servidor'],
            'descripcion' => $_POST['descripcion-bd']
          );

          $data_provider = array(
            'app_id' => $_POST['id'],
            'nombre' => $_POST['nombre_proveedor'],
            'telefono' => $_POST['phone'],
            'correo' => $_POST['correo']
          );

          $app = App::updateApp($tabla, $data);
          $lenguaje = Lenguaje::update($data_lenguaje);
          $serviceWeb = Service::update($data_serviceWeb);
          $so = Sistema::update($data_so);
          $env = Env::update($data_env);
          $device = Device::update($data_device);
          $db = Database::update($data_db);
          $provider = Provider::update($data_provider);

          if($app == "ok" && $lenguaje == "ok" && $serviceWeb == "ok" && $so == "ok" && $env == "ok" && $db == "ok" && $provider == "ok"){
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