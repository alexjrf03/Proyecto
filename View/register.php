<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Crear Cuenta</title>
    </head>
    
    <body>
        
        <h1 class="titulo">Crear Cuenta</h1>
        
        <div class="cuenta_caja">
            <img class="img_clave" src="img/usuario.png" alt="Icono Usuario">
            
            <h1><span>C</span>uenta</h1>
            
            <form action="">
               
                <!-- Nombre Usuario -->
                
                <label for="actual" class="label">Nombre de Usuario</label>
                <br>
                <input type="password" class="campo" placeholder="Ingrese Nombre de Usuario">
                <br>
                <br>
                
                <!-- Nueva Clave -->
                
                <label for="nueva" class="label">Clave Nueva</label>
                <br>
                <input type="password" class="campo" placeholder="Ingrese Clave Nueva">
                <br>
                <br>

                <!--Confirmacion de clave-->

                <label for="confirmacion" class="label">Confirmar Clave</label>
                <br>
                <input type="password" class="campo" placeholder="Ingrese nuevamente su clave">
                <br>
                <br>
                
                <!-- Boton -->
                
                <input type="submit" class="boton2" value="Registrar">
                <br>
                <br>
                
                <a href="login.html" class="link_inicio">Volver al Inicio</a>
                
            </form>
        </div>
    </body>
</html>