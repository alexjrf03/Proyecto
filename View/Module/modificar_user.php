<div class="container">
	<h5 class="text-center">Modificar Usuario</h5>
	<div class="row">
		<div class="col-md-12">		
		<form method="POST" enctype="multipart/form-data">

<?php 

	$item = 'correo';
	$value = $_GET['correo'];
            
	$resp = LoginController::query($item,$value);

	$active = $resp['estatus'] == 't' ? 'selected' : '';
    $desactive = $resp['estatus'] == 'f' ? 'selected' : '';
                	
do{
	echo'
	<div class="col-12">	
		<div class="form-row">

			<div class="form-group col-md-3">
			  <label for="name">Correo</label>
			  <input type="text" class="form-control" value="'.trim($resp['correo']).'" name="correom" placeholder="Nombre" required>
			</div>

			<div class="form-group col-md-3">
			  <label for="surname">Password</label>
			  <input type="password" class="form-control" name="pass" placeholder="nueva clave" required>
			</div>
			<div class="col-6" id="search">
				<label for="estatus">Activar o desactivar:</label>
				<select class="form-control" id="estatus" name="estatus">
					<option value="t" '.$active.'>Activar</option>
					<option value="f" '.$desactive.'>Desactivar</option>
				</select> 
			</div>

		</div>
	</div>

	<div class="col-md-12 text-center">
		<input type="hidden" value="'.$_GET['correo'].'" name="correo">
		<button class="btn btn-warning boton" type="submit" name="editar">
			Actualizar
		</button>
	    <a class="btn btn-primary" href="index.php?r=listar_user">Atras</a>
	</div>';

	// no necesario incrementar $resp ++;
}while($resp < 1);
	
	$insertar = new LoginController();
	$insertar->update();

?>     
		</form>	
		</div>
	</div>
</div>