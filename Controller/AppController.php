<?php

class AppController {

    static public function consultarApp($table,$item,$value){  
  
      $respt = new App();
      $resp = $respt->consultarApp($table,$item,$value);
      
      return $resp;  
    }

    static public function create(){
            
      if(isset($_POST['nombre_proveedor'])){
        
        if ($_POST['select-ambiente'] && $_POST['name-app']) {

                $tabla='aplicacion';
                $date = date(DATE_RFC2822); //fecha actual
                
                $data_app = array(
                    'nombre' => trim($_POST['name-app']),
                    'usuario_final' => trim($_POST['final_user']),
                    'url' => trim($_POST['url']),
                    'uso' => trim($_POST['uso']),
                    'archivo_conexion' => trim($_POST['file-conect']),
                    'manejo_firma' => trim($_POST['signature-management']),
                    'archivo_adjunto' => trim($_POST['attached-files']),
                    'metodo_autenticacion' => trim($_POST['authentication-method']),
                    'descripcion_app' => trim($_POST['description-app']),
                    'date' => trim($date) 
                );

                $app = App::insertarApp($tabla, $data_app);

                if (!empty($app)) {

                  $data_lenguaje = array(
                    'app_id' => trim($app['max']),
                    'nombre_lenguaje' => trim($_POST['nomb-leng']),
                    'version' => trim($_POST['version-leng'])
                  );
                  
                  $data_serviceWeb = array (
                    'app_id' => trim($app['max']),
                    'nombre_serviweb' => trim($_POST['web_service']),
                    'version_serviweb' => trim($_POST['version-sw'])
                  );

                  $data_so = array(
                    'app_id' => trim($app['max']),
                    'nombre_so' => trim($_POST['so']),
                    'version_so' => trim($_POST['version-so'])
                  );

                  $data_env = array(
                    'app_id' => trim($app['max']),
                    'nombre' => trim($_POST['select-ambiente']),
                  );

                  $data_device = array(
                    'app_id' => trim($app['max']),
                    'nombre_disp' => trim($_POST['nomb-disp']),
                    'descripcion_disp' => trim($_POST['device'])
                  );

                  $data_db = array(
                    'app_id' => trim($app['max']),
                    'nombre_bd' => trim($_POST['nombre_bd']),
                    'descripcion_bd' => trim($_POST['description_database']),
                    'estatus' => trim($_POST['select-bd']),
                    'manejador_bd' => trim($_POST['manejador']),
                    'version_bd' => trim($_POST['version_manejador'])

                  );

                  $data_provider = array(
                    'app_id' => trim($app['max']),
                    'nombre_proveedor' => trim($_POST['nombre_proveedor']),
                    'telefono' => trim($_POST['phone']),
                    'correo' => trim($_POST['correo'])
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
        
      if(isset($_POST['id_app_update'])){

        $id = $_POST['id_app_update'];
        
        if($_POST['select-ambiente'] && $_POST['name-app']){

          $tabla='aplicacion';
          
          $data_app = array(
              'nombre' => trim($_POST['name-app']),
              'usuario_final' => trim($_POST['final_user']),
              'url' => trim($_POST['url']),
              'uso' => trim($_POST['uso']),
              'archivo_conexion' => trim($_POST['file-conect']),
              'manejo_firma' => trim($_POST['signature-management']),
              'archivo_adjunto' => trim($_POST['attached-files']),
              'metodo_autenticacion' => trim($_POST['authentication-method']),
              'descripcion_app' => trim($_POST['description-app']),
              'app_id' => trim($_POST['id_app_update'])
          );

          $data_lenguaje = array(
            'id_lenguaje' => trim($_POST['id_lenguaje']),
            'nombre_lenguaje' => trim($_POST['nomb-leng']),
            'version' => trim($_POST['version-leng'])
          );
          
          $data_serviceWeb = array (
            'id_serviweb' => trim($_POST['id_serviweb']),
            'nombre_serviweb' => trim($_POST['web_service']),
            'version_serviweb' => trim($_POST['version-sw'])
          );

          $data_so = array(
            'id_so' => trim($_POST['id_so']),
            'nombre_so' => trim($_POST['so']),
            'version_so' => trim($_POST['version-so'])
          );

          $data_env = array(
            'id_amb' => trim($_POST['id_amb']),
            'nombre' => trim($_POST['select-ambiente']),
          );

          $data_device = array(
            'id_disp' => trim($_POST['id_disp']),
            'nombre_disp' => trim($_POST['nomb-disp']),
            'descripcion_disp' => trim($_POST['device'])
          );

          $data_db = array(
            'id_tbd' => trim($_POST['id_tbd']),
            'id_bd' => trim($_POST['id_bd']),
            'nombre_bd' => trim($_POST['nombre_bd']),
            'descripcion_bd' => trim($_POST['description_database']),
            'estatus' => trim($_POST['select-bd']),
            'manejador_bd' => trim($_POST['manejador']),
            'version_bd' => trim($_POST['version_manejador'])
          );

          $data_provider = array(
            'id_proveedor' => trim($_POST['id_proveedor']),
            'nombre_proveedor' => trim($_POST['nombre_proveedor']),
            'telefono' => trim($_POST['phone']),
            'correo' => trim($_POST['correo'])
          );

          $app = App::updateApp($tabla, $data_app);
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
                          window.location = "index.php?r=home&id='.$id.'";
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