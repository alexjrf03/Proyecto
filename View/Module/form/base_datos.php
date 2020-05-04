<div class="container text-center">
  <h4 class="titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">
   Base de datos
  </h4>
</div>

<div class="row">
    <div class="col-6">
        <div class="from-group">

            <label for="nombre_bd">Nombre</label>
            <input type="text" name="nombre_bd" placeholder="Ingresa el nombre de la base de datos" class="form-control input-form" required>
        
        </div>

        <br> <label for="">Estatus</label>
        <select class="custom-select input-form" name="select-bd" id="">
            <option value="seleccione">Seleccione..</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>
    

    </div>

    <div class="col-6">
        <div class="from-group">
            <label for="servidor">Manejador</label>
            <input type="text" name="manejador" placeholder="Describa el manejador de la base de datos" class="form-control input-form" required>
        </div> <br>

        <div class="from-group">
            <label for="servidor">Versión del Manejador</label>
            <input type="text" name="version_manejador" placeholder="Describa la versión del manejador" class="form-control input-form" required>
        </div> <br>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="from-group">
            <label for="device-bd">Descripción de la Base de Datos</label>
            <textarea rows="5" name="description_database" placeholder="" class="form-control input-form"></textarea>
            </div>
        </div>
</div>