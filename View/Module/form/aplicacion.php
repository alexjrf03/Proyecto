<div class="container text-center contenedor-form">
  <h4 class="first-titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">
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
                <option value="true">Si</option>
                <option value="false">No</option>
            </select>
        
        </div>

    </div>


    <div class="col-6">

        <div class="from-group">
            <label for="archivo-conex">Archivo de Conexión</label>
            <select class="custom-select input-form" name="file-conect" id="file-conect">
                <option value="true">Si</option>
                <option value="false">No</option>
            </select>
        </div> <br>

        <div class="from-group">
            <label for="firms">Manejo de Firmas</label>
            <select class="custom-select input-form" name="signature-management" id="signature-management">
                <option value="true">Si</option>
                <option value="false">No</option>
            </select>
        </div>

        <div class="from-group">
            <br><label for="adjuntos">Archivos Adjuntos</label>
            <select class="custom-select input-form" name="attached-files" id="attached-files">
                <option value="true">Si</option>
                <option value="false">No</option>
            </select>
        </div>

        <div class="from-group">
            <br><label for="autenticacion">Método de Autenticación</label>
            <select class="custom-select input-form" name="authentication-method" id="authentication-method">
                <option value="true">Si</option>
                <option value="false">No</option>
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

<!-- FORM LENGUAJE-->

<div class="row">
    <div class="col-6">

        <h4 class="titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">Lenguaje</h4>


        <div class="from-group">
            <label for="nombre">Nombre</label>
            <select class="custom-select input-form" name="nomb-leng" id="nomb-leng">
                <option value="seleccionar">Seleccionar..</option>
                <option value="python">Python</option>
                <option value="php">PHP</option>
                <option value="cpp">C++</option>
                <option value="java">Java</option>
                <option value="javascript">JavaScript</option>
                <option value="c">C#</option>
                <option value="object-c">Objective-C</option>
                <option value="swift">Swift</option>
                <option value="go">Go</option>
                <option value="ruby">Ruby</option>
            </select>
        </div>

        <div class="from-group">
        
            <br><label for="version">Versión</label>
            <input type="text" name="version-leng" id="version-leng" placeholder="Describe la versión del lenguaje" class="form-control input-form" required>
        
        </div>
    </div>

    <!-- FORM SERVIDOR WEB -->

    <div class="col-6">
        <h4 class="titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">Servidor Web</h4>
    
        <div class="from-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="web_service" id="web_service" placeholder="Ingresa el nombre del servidor web" class="form-control input-form" required>
        </div> <br>

        <div class="from-group">
            <label for="nombre">Versión</label>
            <input type="text" name="version-sw" id="version-sw" placeholder="Describe la versión del servidor web" class="form-control input-form" required>
        </div>
    </div>
</div>

<!-- FORM SISTEMA OPERATIVO -->
<div class="row">
    <div class="col-4">
    <h4 class="titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">Sistema Operativo</h4>
    
        <div class="from-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="so" id="so" placeholder="Ingresa el nombre del sistema operativo" class="form-control input-form" required>
        </div> <br>

        <div class="from-group">
            <label for="nombre">Versión</label>
            <input type="text" name="version-so" id="version-so" placeholder="Describe la versión del sistema operativo" class="form-control input-form" required>
        </div>
    </div>

<!-- FORM AMBIENTE -->

    <div class="col-4">
        <h4 class="titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">Ambiente</h4>
        <label for="nombre">Estatus</label>
        <select class="custom-select input-form" name="select-ambiente" id="select-ambiente">
            <option value="seleccionar">Seleccionar..</option>
            <option value="desarrollo">Desarrollo</option>
            <option value="pruebas">Pruebas</option>
            <option value="produccion">Producción</option>
        </select>
    </div>

<!-- FORM DISPOSITIVO -->

    <div class="col-4">
    <h4 class="titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">Dispositivo</h4>

        <div class="from-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nomb-disp" id="nomb-disp" placeholder="Ingresa el nombre del Dispositivo" class="form-control input-form" required>
        </div> <br>

        <div class="from-group">
            <label for="device">Descripción</label>
            <textarea rows="5" name="device" id="device" placeholder="" class="form-control input-form"></textarea>
        </div>
    </div>
</div>