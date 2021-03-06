<div class="container text-center">
  <h4 class="titulo-form" data-ix="slowfade-scroll-bigs">
   Base de datos
  </h4>
</div>

<div class="row">
    <div class="col-6">
        <div class="from-group">

            <label for="nombre_bd">Nombre</label>
            <input type="text" name="nombre_bd" id="nombre_bd" placeholder="Ingresa el nombre de la base de datos" class="form-control input-form" required>
        
        </div>

        <br> <label for="">Estatus</label>
        <select class="custom-select input-form" name="select-bd" id="select-bd">
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>
    

    </div>

    <div class="col-6">
        <div class="from-group">
            <label for="servidor">Manejador</label>
            <select class="custom-select input-form" name="manejador" id="manejador">
                <option value="1">Postgres</option>
                <option value="2">Mysql</option>
            </select>
        </div> <br>

        <div class="from-group">
            <label for="servidor">Versión del Manejador</label>
            <input type="text" name="version_manejador" id="version_manejador" placeholder="Describa la versión del manejador" class="form-control input-form" required>
        </div> <br>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="from-group">
            <label for="device-bd">Descripción de la Base de Datos</label>
            <textarea rows="5" name="description_database" id="description_database" placeholder="" class="form-control input-form"></textarea>
            </div>
        </div>
</div>