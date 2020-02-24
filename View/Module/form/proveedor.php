<div class="container text-center">
  <h4 id="registrar" data-ix="slowfade-scroll-bigs">
   Proveedor
  </h4>
</div>

<div class="row">
    <div class="col-6">

        <div class="from-group">
            <label for="nombre-proveedor">Nombre Proveedor</label>
            <input type="text" name="nombre-proveedor" placeholder="Ingrese el nombre del proveedor" class="form-control">
        </div>

    </div>

    <div class="col-6">

        <div class="from-group">
            <label for="tlfn">Teléfono</label>
            <input type="text" name="name" placeholder="Ingrese el teléfono" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="from-group">
            <br><label for="correo">Correo</label>
            <input type="text" name="correo" placeholder="Ingrese el correo" class="form-control">
        </div>
    </div>
    
    <input type="hidden" id="form" value="serviweb">
    <div class="col-12 text-center mt-5 mb-4">
            
      <a class="btn btn-info" href="index.php?form=base_datos">Volver</a>
      <button type="submit" class="btn btn-success" onclick="ajaxQ()">Siguente</button>                

    </div>

</div>