<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    
    <body>
       
       <h1 class="titulo">¡Bienvenidos!</h1>
        
        <div class="login_caja">
           
            <img src="img/logo.png" class="img-logo" alt="Logo">
            
            <h1><span>L</span>ogin</h1>
            
            <form action="form_dos.html" method="post">
               
                <!-- Usuario -->   
                <label for="usuario" class="label">Usuario</label>
                <br>
                <input name="username" type="text" class="campo" placeholder="Escriba su Nombre">
                <br>
                <br> 
                
                <!-- Contraseña -->
                <label for="password" class="label">Clave</label>
                <br>
                <input type="password" class="campo" name="password" placeholder="Escriba su Contraseña">
                <br>
                <br>
                
                <!-- Boton -->
                <button type="submit" class="boton">Iniciar Sesión</button>
                <br>
                <br>
                
                <a href="crear_cuenta.html" class="link_cuenta">Crear cuenta</a>
            </form>
        </div>
    </body>
</html