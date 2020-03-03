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
                            <img src="https://unsplash.it/400/430?image=490" alt="" class="portafolio-img" />
                            <section class="portafolio-text">
                                <h5>'.$aplicaciones[$i]['name'].'</h5>
                                <p>'.$aplicaciones[$i]['description'].'</p>
                            </section>
                        </section>';
                    $i++;
                } while ($i <= 2);

            } else {

                echo "<h1 class='text-center'>hay solo ".count($aplicaciones)." registros</h1>";
            }

        } else {
            echo "<h1>No hay registros</h1>";
        }

    ?>
    </div>
</section>