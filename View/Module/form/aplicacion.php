<div class="container text-center contenedor-form">
  <h4 class="first-titulo-form" data-ix="slowfade-scroll-bigs">
   Aplicacion
  </h4>
</div>

<!-- FORM APLICACIONES -->

<div class="row">
    <div class="col-6">

        <div class="from-group">
        
            <label for="name">Nombre</label>
            <input type="text" name="name-app" id="name-app" placeholder="Ingresa Nombre" class="form-control input-form" required>
        
        </div>

        <div class="from-group"> 
        
            <br><label for="usuario-final">Usuario Final</label>
            <input type="text" name="final_user" id="final-user" placeholder="Usuario Final" class="form-control input-form" required>
        
        </div>

        <div class="from-group">
        
            <br><label for="url">URL</label>
            <input type="text" name="url" id="url" placeholder="Ingresa URL" class="form-control input-form" required>
        
        </div>

        <div class="from-group">
        
            <br><label for="uso">Uso</label>
            <select class="custom-select input-form" name="uso" id="uso">
                <option value="t">Si</option>
                <option value="f">No</option>
            </select>
        
        </div>

    </div>


    <div class="col-6">

        <div class="from-group">
            <label for="archivo-conex">Archivo de Conexión</label>
            <select class="custom-select input-form" name="file-conect" id="file-conect">
                <option value="t">Si</option>
                <option value="f">No</option>
            </select>
        </div> <br>

        <div class="from-group">
            <label for="firms">Manejo de Firmas</label>
            <select class="custom-select input-form" name="signature-management" id="signature-management">
                <option value="t">Si</option>
                <option value="f">No</option>
            </select>
        </div>

        <div class="from-group">
            <br><label for="adjuntos">Archivos Adjuntos</label>
            <select class="custom-select input-form" name="attached-files" id="attached-files">
                <option value="t">Si</option>
                <option value="f">No</option>
            </select>
        </div>

        <div class="from-group">
            <br><label for="autenticacion">Método de Autenticación</label>
            <select class="custom-select input-form" name="authentication-method" id="authentication-method">
                <option value="t">Si</option>
                <option value="f">No</option>
            </select>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="from-group">        
            <br><label for="mensaje">Descripción</label>
            <textarea rows="5" name="description-app" id="description-app" class="form-control input-form" required></textarea>
        </div> 
    </div>
</div>