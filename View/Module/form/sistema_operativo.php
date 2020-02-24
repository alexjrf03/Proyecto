<div class="container text-center">
  <h4 id="registrar" data-ix="slowfade-scroll-bigs">
   Sistema Operativo
  </h4>
</div>

<div class="row">
    <div class="col-6">

        <div class="from-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Ingresa el nombre del sistema operativo" class="form-control" required>
        </div>
    </div>

    <div class="col-6">
      <div class="from-group">
        <label for="">Versión</label>
        <input type="text" name="" placeholder="Describa la versión del sistema operativo" class="form-control" required>
      
      </div>
    </div>

    <input type="hidden" id="form" value="dispositivo">
    <div class="col-12 text-center mt-5 mb-4">
            
      <a class="btn btn-info" href="index.php?form=serviweb">Volver</a>
      <button type="submit" class="btn btn-success" onclick="ajaxQ()">Siguente</button>                

    </div>
</div>
