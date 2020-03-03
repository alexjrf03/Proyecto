<div class="container text-center contenedor-form">
  <h4 class="first-titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">
   Aplicacion
  </h4>
</div>

<div class="row">
    <div class="col-6">

        <div class="from-group">
        
            <label for="name">Nombre</label>
            <input type="text" name="name" placeholder="Ingresa Nombre" class="form-control input-form" required>
        
        </div>

        <div class="from-group"> 
        
            <br><label for="usuario-final">Usuario Final</label>
            <input type="text" name="final_user" placeholder="Usuario Final" class="form-control input-form" required>
        
        </div>

        <div class="from-group">
        
            <br><label for="url">URL</label>
            <input type="text" name="url" placeholder="Ingresa URL" class="form-control input-form" required>
        
        </div>

        <div class="from-group">
        
            <br><label for="uso">Uso</label>
            <input type="text" name="uso" placeholder="Ingresa Uso" class="form-control input-form" required>
        
        </div>

        <div class="from-group">
        
            <br><label for="archivo-conex">Archivo de Conexión</label>
            <input type="text" name="conection_file" placeholder="Ingresa Archivo Conexión" class="form-control input-form" required>
        
        </div>
    </div>


    <div class="col-6">
        <div class="from-group">
            <label for="firms">Manejo de Firmas</label>
            <input type="text" name="firms" placeholder="Ingresa Manejo de Firmas" class="form-control input-form" required>
        </div>

        <div class="from-group">
        
            <br><label for="adjuntos">Archivos Adjuntos</label>
            <input type="text" name="attached_files" placeholder="Ingresa Archivo Adjunto" class="form-control input-form" required>
        
        </div>

        <div class="from-group">
        
            <br><label for="autenticacion">Método de Autenticación</label>
            <input type="text" name="authentication_method" placeholder="Describe Método de Autenticación" class="form-control input-form" required>
        
        </div>

        <div class="from-group">
        
            <br><label for="mensaje">Descripción</label>
            <textarea rows="5" name="description" class="form-control input-form" required></textarea>
        
        </div> 

    </div>
</div>

<div class="row">
    <div class="col-6">

        <h4 class="titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">Lenguaje</h4>


        <div class="from-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="languaje" placeholder="Ingresa el nombre del lenguaje" class="form-control input-form" required>
        </div>
    </div>

    <div class="col-6">
        <h4 class="titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">Servidor Web</h4>
    
        <div class="from-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="web_service" placeholder="Ingresa el nombre del servidor web" class="form-control input-form" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <h4 class="titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">Sistema Operativo</h4>
    
        <div class="from-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="so" placeholder="Ingresa el nombre del sistema operativo" class="form-control input-form" required>
        </div>
    </div>

    <div class="col-4">
        <h4 class="titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">Ambiente</h4>
        <label for="nombre">Estatus</label>
        <select class="custom-select input-form" name="select-ambiente" id="">
            <option value="seleccionar">Seleccionar..</option>
            <option value="desarrollo">Desarrollo</option>
            <option value="pruebas">Pruebas</option>
            <option value="produccion">Producción</option>
        </select>
    </div>

    <div class="col-4">
    <h4 class="titulo-form" id="registrar" data-ix="slowfade-scroll-bigs">Dispositivo</h4>
        <div class="from-group">
            <label for="device">Descripción</label>
            <textarea rows="5" name="device" placeholder="" class="form-control input-form"></textarea>
        </div>
    </div>
</div>