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
                    'nombre' => $_POST['name'],
                    'usuario_final' => $_POST['final_user'],
                    'url' => $_POST['url'],
                    'uso' => $_POST['uso'],
                    'archivo_conexion' => $_POST['conection_file'],
                    'manejo_firma' => $_POST['firms'],
                    'archivo_adjunto' => $_POST['attached_files'],
                    'metodo_autenticacion' => $_POST['authentication_method'],
                    'descripcion_app' => $_POST['description'],
                    'date' => $date,             
                );

                $app = App::insertarApp($tabla, $data_app);

                if (!empty($app)) {

                  $data_lenguaje = array(
                    'app_id' => $app['max'],
                    'nombre_lenguaje' => $_POST['nomb-leng'],
                    'version' => $_POST['version-leng']
                  );
                  
                  $data_serviceWeb = array (
                    'app_id' => $app['max'],
                    'nombre_serviweb' => $_POST['web_service'],
                    'version_serviweb' => $_POST['version-sw']
                  );

                  $data_so = array(
                    'app_id' => $app['max'],
                    'nombre_so' => $_POST['so'],
                    'version_so' => $_POST['version-so']
                  );

                  $data_env = array(
                    'app_id' => $app['max'],
                    'nombre' => $_POST['select-ambiente'],
                  );

                  $data_device = array(
                    'app_id' => $app['max'],
                    'nombre_disp' => $_POST['nomb-disp'],
                    'descripcion_disp' => $_POST['device']
                  );

                  $data_db = array(
                    'app_id' => $app['max'],
                    'nombre_bd' => $_POST['nombre_bd'],
                    'descripcion_bd' => $_POST['description_database'],
                    'estatus' => $_POST['select-bd'],
                    'manejador_bd' => $_POST['manejador'],
                    'version_bd' => $_POST['version_manejador']

                  );

                  $data_provider = array(
                    'app_id' => $app['max'],
                    'nombre_proveedor' => $_POST['nombre_proveedor'],
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
        
        if($_POST['environment'] && $_POST['name']){

          $tabla='aplicacion';
          
          $data_app = array(
              'nombre' => $_POST['name'],
              'usuario_final' => $_POST['final_user'],
              'url' => $_POST['url'],
              'uso' => $_POST['uso'],
              'archivo_conexion' => $_POST['conection_file'],
              'manejo_firma' => $_POST['firms'],
              'archivo_adjunto' => $_POST['attached_files'],
              'metodo_autenticacion' => $_POST['authentication_method'],
              'descripcion_app' => $_POST['description'],
              'app_id' => $_POST['id']
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