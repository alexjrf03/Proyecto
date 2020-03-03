<div class="container">
	<h5 class="text-center">Modificar Aplicacion</h5>
	
	<form action="" method="post">

<?php 

	$table = 'aplicacion';
	$item = "id";
	$value = $_GET['id'];
	
	$resp = AppController::consultarApp($table,$item,$value);

	$database = explode(",", $resp['database']);
	$provider = explode(",", $resp['provider_data']);

	do{
		echo'
    
        <div class="container text-center">
            <h4 id="registrar" data-ix="slowfade-scroll-bigs">Aplicacion</h4>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="from-group">                
                    <label for="name">Nombre</label>
                    <input type="text" value="'.trim($resp['name']).'" name="name" placeholder="Ingresa Nombre" class="form-control" required>
                </div>
                <div class="from-group">                
                    <br><label for="usuario-final">Usuario Final</label>
                    <input type="text" value="'.trim($resp['final_user']).'" name="final_user" placeholder="Usuario Final" class="form-control" required>
                </div>
                <div class="from-group">                
                    <br><label for="url">URL</label>
                    <input type="text" value="'.trim($resp['url']).'" name="url" placeholder="Ingresa URL" class="form-control" required>
                </div>
                <div class="from-group">
                    <br><label for="uso">Uso</label>
                    <input type="text" value="'.trim($resp['uso']).'" name="uso" placeholder="Ingresa Uso" class="form-control" required>
                </div>
                <div class="from-group">
                    <br><label for="archivo-conex">Archivo de Conexión</label>
                    <input type="text" value="'.trim($resp['conection_file']).'" name="conection_file" placeholder="Ingresa Archivo Conexión" class="form-control" required>
                </div>
            </div>
            <div class="col-6">
                <div class="from-group">
                    <label for="firms">Manejo de Firmas</label>
                    <input type="text" value="'.trim($resp['firms']).'" name="firms" placeholder="Ingresa Manejo de Firmas" class="form-control" required>
                </div>
                <div class="from-group">
                    <br><label for="adjuntos">Archivos Adjuntos</label>
                    <input type="text" value="'.trim($resp['attached_files']).'" name="attached_files" placeholder="Ingresa Archivo Adjunto" class="form-control" required>
                </div>
                <div class="from-group">
                    <br><label for="autenticacion">Método de Autenticación</label>
                    <input type="text" value="'.trim($resp['authentication_method']).'" name="authentication_method" placeholder="Describe Método de Autenticación" class="form-control" required>
                </div>
                <div class="from-group">
                    <br><label for="mensaje">Descripción</label>
                    <textarea rows="5" name="description" class="form-control" required>'.trim($resp['description']).'</textarea>
                </div> 
            </div>
        </div>
        <div class="container text-center">
            <h4 id="registrar" data-ix="slowfade-scroll-bigs">Lenguaje</h4>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="from-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" value="'.trim($resp['languaje']).'" name="languaje" placeholder="Ingresa el nombre del lenguaje" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <h4 id="registrar" data-ix="slowfade-scroll-bigs">Base de datos</h4>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="from-group">
                    <label for="nombre_bd">Nombre</label>
                    <input type="text" value="'.$database[0].'" name="nombre_bd" placeholder="Ingresa el nombre de la base de datos" class="form-control" required>
                </div>
                <div class="input-text">
                    <br> <label for="">Estatus</label>
                    <br> <input type="radio" value="'.$database[1].'" name="status" checked> Activo
                    <br> <input type="radio" value="'.$database[1].'" name="status" checked> Inactivo
                </div>
            </div>
            <div class="col-6">
                <div class="from-group">
                    <label for="servidor">Servidor de Base de Datos</label>
                    <input type="text" value="'.$database[2].'" name="servidor" placeholder="Describa el Servidor" class="form-control" required>
                </div>
                <div class="from-group">
                    <br><label for="descripcion-bd">Descripción Base de Datos</label>
                    <textarea rows="3" name="descripcion-bd" class="form-control" required>'.$database[3].'</textarea>
                </div>
            </div>
        </div>
        <div class="container text-center">
        <h4 id="registrar" data-ix="slowfade-scroll-bigs">Proveedor</h4>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="from-group">
                    <label for="nombre-proveedor">Nombre Proveedor</label>
                    <input type="text" value="'.$provider[0].'" name="nombre_proveedor" placeholder="Ingrese el nombre del proveedor" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="from-group">
                    <label for="tlfn">Teléfono</label>
                    <input type="text" value="'.$provider[1].'" name="phone" placeholder="Ingrese el teléfono" class="form-control">
                </div>
            </div>
            <div class="col-12">
                <div class="from-group">
                    <br><label for="correo">Correo</label>
                    <input type="text" value="'.$provider[2].'" name="correo" placeholder="Ingrese el correo" class="form-control">
                </div>
            </div>
        </div>
        <div class="container text-center">
            <h4 id="registrar" data-ix="slowfade-scroll-bigs">Servidor Web</h4>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="from-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" value="'.trim($resp['web_service']).'" name="web_service" placeholder="Ingresa el nombre del servidor web" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <h4 id="registrar" data-ix="slowfade-scroll-bigs">Sistema Operativo</h4>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="from-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" value="'.trim($resp['so']).'" name="so" placeholder="Ingresa el nombre del sistema operativo" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <h4 id="registrar" data-ix="slowfade-scroll-bigs">Dispositivo</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="from-group">
                    <label for="device">Descripción</label>
                    <textarea rows="5" name="device" placeholder="" class="form-control">'.trim($resp['device']).'</textarea>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <h4 id="registrar" data-ix="slowfade-scroll-bigs">Ambiente</h4>
        </div>
        <div class="row">
            <div class="col-4 text-center">
                <div class="from-group">
                    <br><input type="radio" value="'.trim($resp['environment']).'" name="environment" value="Producción" checked> Producción
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="from-group">
                <br><input type="radio" value="'.trim($resp['environment']).'" name="environment" value="Prueba" checked> Prueba
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="from-group">
                    <br><input type="radio" value="'.trim($resp['environment']).'" name="environment" value="Desarrollo" checked> Desarrollo
                </div>
            </div>
        </div>

        <div class="col-12 text-center mt-5 mb-4">
            <a class="btn btn-info" href="index.php?r=mostrar">Atras</a>
            <input type="hidden" name="id" value="'.trim($resp['id']).'">
            <button class="btn btn-success">actualizar</button>
        </div>';
		// no necesario incrementar $resp ++;
	}while($resp < 1);
	
	$insertar = new AppController();
	$insertar->update();

?>

    </form>    
</div>