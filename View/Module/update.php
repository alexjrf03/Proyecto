<div class="container">
	<h5 class="text-center">Modificar Aplicacion</h5>
	<div class="row">
		<div class="col-md-12">		
		<form method="POST" enctype="multipart/form-data">

<?php 

$table = 'aplicacion';
$item = "id";
$value = $_GET['id'];
 
$resp = AppController::consultarApp($table,$item,$value);
                	
do{
	echo'
	<div class="col-12">	
		<div class="form-row">

			<div class="form-group col-md-3">
			  <label for="name">Nombre</label>
			  <input type="text" class="form-control" value="'.trim($resp['name']).'" name="name" placeholder="Nombre" required>
			</div>

			<div class="form-group col-md-3">
			  <label for="surname">Apellido</label>
			  <input type="text" class="form-control" value="'.trim($resp['final_user']).'" name="surname" placeholder="Apellido" required>
			</div>

			<div class="form-group col-md-6">
			  <label for="address">Dirección</label>
			  <input type="text" class="form-control" value="'.trim($resp['url']).'" name="address" placeholder="Dirección" required autofocus>
			</div>

		</div>
		
		<div class="form-row">
			<div class="form-group col-md-3">
			  <label for="phone">Teléfono</label>
			  <input type="number" class="form-control" value="'.trim($resp['uso']).'" name="phone" placeholder="Teléfono" required>
			</div>

			<div class="form-group col-md-3">
			  <label for="email">Correo</label>
			  <input type="email" class="form-control" value="'.trim($resp['firms']).'" name="email" placeholder="Correo" required>
			</div>

			<div class="form-group col-md-3">
			  <label for="id">Cédula</label>
			  <input type="number" class="form-control" value="'.trim($resp['conection_file']).'" name="id" placeholder="Cédula" required>
			</div>

			<div class="form-group col-md-3">
			  <label for="date">Fecha de nacimiento</label>
			  <input type="text" class="form-control" value="'.trim($resp['environment']).'" name="date" placeholder="Fecha de nacimiento" required>
			</div>
			<div class="form-group col-md-3">
			  <label for="date">Fecha de nacimiento</label>
			  <input type="text" class="form-control" value="'.trim($resp['attached_files']).'" name="date" placeholder="Fecha de nacimiento" required>
			</div>
			<div class="form-group col-md-3">
			  <label for="date">Fecha de nacimiento</label>
			  <input type="text" class="form-control" value="'.trim($resp['authentication_method']).'" name="date" placeholder="Fecha de nacimiento" required>
			</div>
			<div class="form-group col-md-3">
			  <label for="date">Fecha de nacimiento</label>
			  <input type="text" class="form-control" value="'.trim($resp['description']).'" name="date" placeholder="Fecha de nacimiento" required>
			</div>
			<div class="form-group col-md-3">
			  <label for="date">Fecha de nacimiento</label>
			  <input type="text" class="form-control" value="'.trim($resp['device']).'" name="date" placeholder="Fecha de nacimiento" required>
			</div>
			<div class="form-group col-md-3">
			  <label for="date">Fecha de nacimiento</label>
			  <input type="text" class="form-control" value="'.trim($resp['languaje']).'" name="date" placeholder="Fecha de nacimiento" required>
			</div>
			<div class="form-group col-md-3">
			  <label for="date">Fecha de nacimiento</label>
			  <input type="text" class="form-control" value="'.trim($resp['web_service']).'" name="date" placeholder="Fecha de nacimiento" required>
			</div>
			<div class="form-group col-md-3">
			  <label for="date">Fecha de nacimiento</label>
			  <input type="text" class="form-control" value="'.trim($resp['so']).'" name="date" placeholder="Fecha de nacimiento" required>
			</div>
			<div class="form-group col-md-3">
			  <label for="date">Fecha de nacimiento</label>
			  <input type="text" class="form-control" value="'.trim($resp['provider_data']).'" name="date" placeholder="Fecha de nacimiento" required>
			</div>
			<div class="form-group col-md-3">
			  <label for="date">Fecha de nacimiento</label>
			  <input type="text" class="form-control" value="'.trim($resp['database']).'" name="date" placeholder="Fecha de nacimiento" required>
			</div>

		</div>

		
	</div>
	
	<div class="col-md-12 text-center">
		<button class="btn btn-warning boton" type="submit" name="editar">
			Actualizar
		</button>
		<button  class="btn btn-primary my-2 my-sm-0" name="person">
	            <a class="boton" href="index.php?r=listar_user">Atras</a>
	    </button>
	</div>';

	// no necesario incrementar $resp ++;
}while($resp < 1);
	
	$insertar = new AppController();
	$insertar->update();

?>     
		</form>	
		</div>
	</div>
</div>