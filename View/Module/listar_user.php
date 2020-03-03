<div class="container">
	<h5 class="text-center">Todos los usuarios</h5>
		
	<div class="row">
		<div class="col-md-12 text-center">
			<a href="index.php" class="btn btn-primary">Atras</a>
		</div>
		<div class="col-md-12">
			  <tbody>
<?php	
		$item = null;
        $value = null;
            
		$usuario = LoginController::query($item,$value);

		if($value['estatus'] == 1 || true ){
			$status = 'Activo';
		} else {
			$status = 'Inactivo';
		}

		if($value['admin'] == 1 || true ){
			$admin = 'Administrador';
		} else {
			$admin = 'Normal';
		}

            if ($usuario[0] != '') {
                
			echo '<table class="table table-hover" style="margin: 30px auto; font-size: 12px; position:relative; padding: 2px;">
			  <thead>
			    <tr>
			      <th scope="col">N°</th>
			      <th scope="col">Correo</th>
			      <th scope="col">Estatus</th>
			      <th scope="col">Administrador</th>
				  <th scope="col">Ultima conexión</th>
				  <th scope="col">Opciones</th>
			    </tr>
			  </thead>';
          
          
	            foreach($usuario as $key => $value) {			  	
				
				echo '
				    <tr>
				      <td>'.($key+1).'</td>
				      <th scope="row">'.$value['correo'].'</th>
				      <td>'.$status.'</td>
				      <td>'.$admin.'</td>
				      <td>'.$value['ultima_conexion'].'</td>
					  <td>';
					  if ($value['correo'] != 'admin@gmail.com') {
			            echo '<a class="btn btn-danger" href="index.php?r=listar_user&correo='.$value['correo'].'">eliminar</a>			        	
							<a class="btn btn-warning" href="index.php?r=modificar_user&correo='.$value['correo'].'"><i>editar</i></a>'; 
					  }
				      echo'</td>
				    </tr> ';
	  			}
	  		}             
?>
			  </tbody>
			</table>
		</div>
	</div>
</div>

<?php
	$eliminar = new LoginController();
	$eliminar->delete();
?>