<div class="row">
    <div class="col-6">
        <div class="from-group">

            <label for="nombre_bd">Nombre</label>
            <input type="text" name="nombre_bd" placeholder="Ingresa el nombre de la base de datos" class="form-control" required>
        
        </div>

        <div class="input-text">
            <br> <label for="">Estatus</label>
            <br> <input type="radio" name="estatus" value="activo" checked> Activo
            <br> <input type="radio" name="estatus" value="inactivo" checked> Inactivo
        </div>

    </div>

    <div class="col-6">
        <div class="from-group">
            <label for="servidor">Servidor de Base de Datos</label>
            <input type="text" name="servidor" placeholder="Describa el Servidor" class="form-control">
        </div>

        <div class="from-group">
            <br><label for="descripcion-bd">Descripción Base de Datos</label>
            <textarea rows="3" name="descripcion-bd" class="form-control" required></textarea>
        </div>
    </div>

    <div class="col-12 text-center mt-5 mb-4">
            
      <a class="btn btn-info" href="home.php?form=lenguaje">Volver</a>
      <a class="btn btn-success" href="home.php?form=proveedor">Siguente</a>

    </div>
</div>