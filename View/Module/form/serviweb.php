<div class="container text-center">
  <h4 id="registrar" data-ix="slowfade-scroll-bigs">
   Servicio Web
  </h4>
</div>

<div class="row">
    <div class="col-6">

        <div class="from-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Ingresa el nombre del servidor web" class="form-control" required>
        </div>
    </div>

    <div class="col-6">
      <div class="from-group">
        <label for="">Versión</label>
        <input type="text" name="" placeholder="Describa la versión del servidor web" class="form-control" required>
      
      </div>
    </div>

    <input type="hidden" id="form" value="sistema_operativo">
    <div class="col-12 text-center mt-5 mb-4">
            
      <a class="btn btn-info" href="index.php?form=proveedor">Volver</a>
      <button type="submit" class="btn btn-success" onclick="ajaxQ()">Siguente</button>                

    </div>
</div>