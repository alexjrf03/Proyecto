<body class="background-login">
        
        <h1 class="titulo">Crear Cuenta</h1>
        
        <div class="cuenta_caja">
            <img class="img_clave" src="View/img/usuario.png" alt="Icono Usuario">
            
            <h1><span>C</span>uenta</h1>
            
            <form action="" method="post">
               
                <!-- Nombre Usuario -->
                
                <label for="actual" class="label">Nombre de Usuario</label>
                <br>
                <input type="text" class="campo" name="correo" placeholder="Ingrese Nombre de Usuario">
                <br>
                <br>
                
                <!-- Nueva Clave -->
                
                <label for="nueva" class="label">Clave Nueva</label>
                <br>
                <input type="password" class="campo" name="pass" placeholder="Ingrese Clave Nueva">
                <br>
                <br>

                <!--Confirmacion de clave-->

                <label for="confirmacion" class="label">Confirmar Clave</label>
                <br>
                <input type="password" class="campo" name="pass_c" placeholder="Ingrese nuevamente su clave">
                <br>
                <br>
                
                <!-- Boton -->
                
                <input type="submit" class="boton2" value="Registrar">
                <br>
                <br>
                
                <a href="index.php" class="link_inicio">Volver al Inicio</a>
            <?php
                
                $register = new LoginController();
                $register->create();

            ?>
            </form>
        </div>
</body>
