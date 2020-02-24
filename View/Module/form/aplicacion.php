<div class="container text-center">
  <h4 id="registrar" data-ix="slowfade-scroll-bigs">
   Aplicacion
  </h4>
</div>

<div class="row">
    <div class="col-6">

        <div class="from-group">
        
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Ingresa Nombre" class="form-control" required>
        
        </div>

        <div class="from-group"> 
        
            <br><label for="usuario-final">Usuario Final</label>
            <input type="text" name="usuario-final" placeholder="Usuario Final" class="form-control" required>
        
        </div>

        <div class="from-group">
        
            <br><label for="url">URL</label>
            <input type="text" name="url" placeholder="Ingresa URL" class="form-control" required>
        
        </div>

        <div class="from-group">
        
            <br><label for="uso">Uso</label>
            <input type="text" name="uso" placeholder="Ingresa Uso" class="form-control" required>
        
        </div>

        <div class="from-group">
        
            <br><label for="archivo-conex">Archivo de Conexión</label>
            <input type="text" name="archivo-conex" placeholder="Ingresa Archivo Conexión" class="form-control" required>
        
        </div>
    </div>


    <div class="col-6">
        <div class="from-group">
            <label for="firmas">Manejo de Firmas</label>
            <input type="text" name="firmas" placeholder="Ingresa Manejo de Firmas" class="form-control" required>
        </div>

        <div class="from-group">
        
            <br><label for="adjuntos">Archivos Adjuntos</label>
            <input type="text" name="adjuntos" placeholder="Ingresa Archivo Adjunto" class="form-control" required>
        
        </div>

        <div class="from-group">
        
            <br><label for="autenticacion">Método de Autenticación</label>
            <input type="text" name="autenticacion" placeholder="Describe Método de Autenticación" class="form-control" required>
        
        </div>

        <div class="from-group">
        
            <br><label for="mensaje">Descripción</label>
            <textarea rows="5" name="descripcion" class="form-control" required></textarea>
        
        </div> 

    </div>
    <input type="hidden" id="form" value="lenguaje">
    <div class="col-12 text-center mt-3 mb-5">
        <br><button type="submit" class="btn btn-success" onclick="ajaxQ()">Siguente</button>
    </div>
</div>