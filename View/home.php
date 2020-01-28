<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/est_form.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    
        <section class="photo" id="inicio">
  
                <div class="nav" id="sticker">
                <label for="toggle">&#9776</label>
                <input type="checkbox" id="toggle" />
                <div class="menu">
                  <h5 class="logo">SGIA</h5>
                  <a class="menu_form" href="#lenguaje">Lenguaje</a>
                  <a class="menu_form" href="#bd">BD</a>
                  <a class="menu_form" href="#so">SO</a>
                  <a class="menu_form" href="#dispositivo">Dispositivo</a>
                  <a class="menu_form" href="#ambiente">Ambiente</a>
                </div>
              </div>
                <div class="photo-text">
                <h4 data-ix="skype">SGIA</h4>
                <p data-ix="subtitle-hero-up">Sistema de Gestión de Inventario de Aplicaciones.</p>
                  </div>
                <div class="overlay"></div>
              </section>
              <section class="content">
                <div class="grand-title" id="servicio">
                  <h4 data-ix="slowfade-scroll-bigs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, repellendus!</h4>
                </div>
                <div class="text">
                  <div class="inner-text">
                    <h3 data-ix="slowfade-scroll-bigs">genialidea</h3>
                    <i class="ic ion-fork"></i>
                    <div class="text-box">
                      <h5 data-ix="slowfade-scroll-bigs">genialidea</h5>
                      <p data-ix="slowfade-scroll-bigs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, modi!</p>
                    </div>
                  </div>
                  <div class="inner-text">
                    <h3 data-ix="slowfade-scroll-bigs">genialidea</h3>
                    <i class="ic ion-knife"></i>
                    <div class="text-box">
                      <h5 data-ix="slowfade-scroll-bigs">genialidea</h5>
                      <p data-ix="slowfade-scroll-bigs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, modi!</p>
                    </div>
                  </div>
                  <div class="inner-text">
                    <h3 data-ix="slowfade-scroll-bigs">genialidea</h3>
                    <i class="ic ion-spoon"></i>
                    <div class="text-box">
                      <h5 data-ix="slowfade-scroll-bigs">genialidea</h5>
                      <p data-ix="slowfade-scroll-bigs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, modi!</p>
                    </div>
                  </div>
                </div>
              
                <div class="inner-content">
                  <div class="boxy"></div>
                  <div class="boxy">
                    <div id="slider">
                      <figure>
                        <ul>
                          <li>
                            <h4>Lorem ipsum 1</h4>
                            <img src="https://unsplash.it/80?image=823" alt="" />
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, perspiciatis.</p>
                          </li>
                          <li>
                            <h4>Lorem ipsum 2</h4>
                            <img src="https://unsplash.it/80?image=823" alt="" />
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, fugiat!</p>
                          </li>
                          <li>
                            <h4>Lorem ipsum 3</h4>
                            <img src="https://unsplash.it/80?image=823" alt="" />
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, nemo!</p>
                          </li>
                          <li>
                            <h4>Lorem ipsum 4</h4>
                            <img src="https://unsplash.it/80?image=823" alt="" />
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, consequatur.</p>
                          </li>
                        </ul>
                      </figure>
                    </div>
                  </div>
                </div>
              
                <section class="portafolio" id="trabajo">
                  <h4 data-ix="slowfade-scroll-bigs">Trabajos</h4>
                  <div class="portafolio-container">
                    <section class="portafolio-item">
                      <img src="https://unsplash.it/400/430?image=490" alt="" class="portafolio-img" />
                      <section class="portafolio-text">
                        <h5>genialidea</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus doloremque, error nostrum tempora sapiente corporis.</p>
                      </section>
                    </section>
                    <section class="portafolio-item">
                      <img src="https://unsplash.it/400/430?image=490" alt="" class="portafolio-img"/>
                      <section class="portafolio-text">
                        <h5>genialidea.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus doloremque, error nostrum tempora sapiente corporis.</p>
                      </section>
                    </section>
                    <section class="portafolio-item">
                      <img src="https://unsplash.it/400/430?image=490" alt="" class="portafolio-img"/>
                      <section class="portafolio-text">
                        <h5>genialidea</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus doloremque, error nostrum tempora sapiente corporis.</p>
                      </section>
                    </section>
                  </div>
                </section>
              </section>
              
              <div class="footer" id="contacto">
              <h4 data-ix="slowfade-scroll-bigs">
                <?php 
                  
                  if (isset($_GET['form'])) {
                    if ($_GET["form"] == "lenguaje") {
                      echo "Lenguaje";
                    } elseif ($_GET["form"] == "base_datos") {
                      echo "Base de datos";
                    } 
                  } else {
                      echo 'Aplicación'; 
                  }

                ?>
              </h4>
              <div class="container">
              <form action="enviar.php" method="post">
                <?php
                  if (isset($_GET['form'])) {

                    if ($_GET["form"] == "lenguaje" ||$_GET["form"] == "base_datos") {
                      include "form/".$_GET["form"].".php";
                    }
                    
                  } else {
                    include'form/aplicacion.php';
                  }              

                ?>
              </form>
            </div>
          </div>

          <script src="js/bootstrap.js"></script>

</body>
</html>