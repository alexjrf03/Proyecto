<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido SGIA</title>
    <link rel="stylesheet" href="css/est_form.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
      <?php 
        include'navbar.php';
      ?>
              <section class="content">
                <div class="grand-title" id="servicio">
                  <h4 data-ix="slowfade-scroll-bigs">Ministerio del Poder Popular para Relaciones Exteriores</h4>
                </div>
                <div class="text">
                  <div class="inner-text">
                    <h3 data-ix="slowfade-scroll-bigs">Misión</h3>
                    <i class="ic ion-fork"></i>
                    <div class="text-box">
                      <p data-ix="slowfade-scroll-bigs">Adoptar y cobijar a personas y sus acompañantes, perseguidos por motivos de raza, sexo, religión, nacionalidad, pertenecientes a determinado grupo social u opinión política.</p>
                    </div>
                  </div>
                  <div class="inner-text">
                    <h3 data-ix="slowfade-scroll-bigs">Valores</h3>
                    <i class="ic ion-knife"></i>
                    <div class="text-box">
                      <p data-ix="slowfade-scroll-bigs">La Comisión Nacional para los Refugiados, cuenta con un alto sentido humanista, que trabaja conscientemente por el bienestar de nuestra institución, y así, poder brindar justicia a los solicitante de refugio.</p>
                    </div>
                  </div>
                  <div class="inner-text">
                    <h3 data-ix="slowfade-scroll-bigs">Visión</h3>
                    <i class="ic ion-spoon"></i>
                    <div class="text-box">
                      <p data-ix="slowfade-scroll-bigs">Ser referencia en la comunidad latinoamericana, caribeña y más allá, en justicia de Refugio, Asilo de personas que los soliciten y, paradigma en derechos humanos.</p>
                    </div>
                  </div>
                </div>
            
              
                <section class="portafolio" id="trabajo">
                  <h4 data-ix="slowfade-scroll-bigs">Trabajos</h4>
                  <div class="portafolio-container">
                    <section class="portafolio-item">
                      <img src="https://unsplash.it/400/430?image=490" alt="" class="portafolio-img" />
                      <section class="portafolio-text">
                        <h5>tITULO</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus doloremque, error nostrum tempora sapiente corporis.</p>
                      </section>
                    </section>
                    <section class="portafolio-item">
                      <img src="https://unsplash.it/400/430?image=490" alt="" class="portafolio-img"/>
                      <section class="portafolio-text">
                        <h5>Titulo</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus doloremque, error nostrum tempora sapiente corporis.</p>
                      </section>
                    </section>
                    <section class="portafolio-item">
                      <img src="https://unsplash.it/400/430?image=490" alt="" class="portafolio-img"/>
                      <section class="portafolio-text">
                        <h5>Titulo</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus doloremque, error nostrum tempora sapiente corporis.</p>
                      </section>
                    </section>
                  </div>
                </section>
              </section>
              
              <div class="footer" id="contacto">
              <h4 id="registrar" data-ix="slowfade-scroll-bigs">
                <?php 
                  
                  if (isset($_GET['form'])) {
                    if ($_GET["form"] == "lenguaje") {
                      echo "Lenguaje";
                    } elseif ($_GET["form"] == "base_datos") {
                      echo "Base de datos";
                    } elseif ($_GET["form"] == "proveedor") {
                      echo "Proveedor";
                    } elseif ($_GET["form"] == "serviweb") {
                      echo "Servidor Web";
                    } elseif ($_GET["form"] == "sistema_operativo") {
                      echo "Sistema Operativo";
                    } elseif ($_GET["form"] == "ambiente") {
                      echo "Ambiente";
                    } elseif ($_GET["form"] == "dispositivo") {
                      echo "Dispositivo";
                    } else {
                      echo 'Aplicación'; 
                    }

                  }

                ?>
              </h4>

              <div class="container"> 
                 
                    <form action="enviar.php" method="post">
                      <?php

                        $id = '';
                        
                        if (isset($_GET['form'])) {

                        if ($_GET["form"] == "lenguaje" || $_GET["form"] == "base_datos" || $_GET["form"] == "lenguaje" || $_GET["form"] == "proveedor" || $_GET["form"] == "serviweb" || $_GET['form'] == "sistema_operativo" || $_GET['form'] == "dispositivo" || $_GET['form'] == "ambiente"){
                          include "form/".$_GET["form"].".php";
                        }

                      } else {
                        include 'form/aplicacion.php';
                      }              

                    ?>
                </form>
              
            </div>

            <br>

        <div class="container-fluid fondo">
            <?php
                include 'footer.php';
            ?>
        </div>


<script src="js/bootstrap.js"></script>
</body>
</html>