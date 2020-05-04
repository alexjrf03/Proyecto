<section class="portafolio" id="trabajo">
    <h4 data-ix="slowfade-scroll-bigs">Trabajos</h4>
    <div class="portafolio-container">
    <?php 

        $item = null;
        $value = null;
        $table = 'aplicacion'; 

        $aplicaciones = AppController::consultarApp($table,$item,$value);
        
        if ($aplicaciones[0] != '') {
           
            if (count($aplicaciones) >= 3) {
                
                $i = 0;

                do {
                    echo '
                        <section class="portafolio-item">
                            <img src="View/img/app.png" alt="" class="portafolio-img" />
                            <section class="portafolio-text">
                                <h5>'.$aplicaciones[$i]['nombre'].'</h5>
                                <p>'.$aplicaciones[$i]['descripcion_app'].'</p>
                            </section>
                        </section>';
                    $i++;
                } while ($i <= 2);

            } else if (count($aplicaciones) >= 2) {

                echo '  <div class="container">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <img src="View/img/app.png" alt="" class="portafolio-img" />
                                    <section class="portafolio-text">
                                        <h5>'.$aplicaciones[0]['nombre'].'</h5>
                                        <p>'.$aplicaciones[0]['descripcion_app'].'</p>
                                    </section>
                                </div> 
                                <div class="col-6 text-center">
                                    <img src="View/img/app.png" alt="" class="portafolio-img" />
                                    <section class="portafolio-text">
                                        <h5>'.$aplicaciones[0]['nombre'].'</h5>
                                        <p>'.$aplicaciones[0]['descripcion_app'].'</p>
                                    </section>
                                </div> 
                            </div>
                        </div>';
            } else {

                echo '  <div class="container">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img src="View/img/app.png" alt="" class="portafolio-img" />
                                    <section class="portafolio-text">
                                        <h5>'.$aplicaciones[0]['nombre'].'</h5>
                                        <p>'.$aplicaciones[0]['descripcion_app'].'</p>
                                    </section>
                                </div>  
                            </div>
                        </div>';

            }

        } else {
            echo "<h1 class='title-works'>No hay registros</h1>";
        }

    ?>
    </div>
</section>