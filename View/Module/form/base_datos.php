<div class="container text-center">
  <h4 id="registrar" data-ix="slowfade-scroll-bigs">
   Base de datos
  </h4>
</div>

<div class="row">
    <div class="col-6">
        <div class="from-group">

            <label for="nombre_bd">Nombre</label>
            <input type="text" name="nombre_bd" placeholder="Ingresa el nombre de la base de datos" class="form-control" required>
        
        </div>

        <div class="input-text">
            <br> <label for="">Estatus</label>
            <br> <input type="radio" name="status" value="activo" checked> Activo
            <br> <input type="radio" name="status" value="inactivo" checked> Inactivo
        </div>

    </div>

    <div class="col-6">
        <div class="from-group">
            <label for="servidor">Servidor de Base de Datos</label>
            <input type="text" name="servidor" placeholder="Describa el Servidor" class="form-control" required>
        </div>

        <div class="from-group">
            <br><label for="descripcion-bd">Descripción Base de Datos</label>
            <textarea rows="3" name="descripcion-bd" class="form-control" required></textarea>
        </div>
    </div>
</div>