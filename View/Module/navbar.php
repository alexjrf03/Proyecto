<section class="photo" id="inicio">

    <div class="nav new-menu" id="sticker">
    <input type="checkbox" id="toggle" />
    <div class="menu">
        <h5 class="logo"> <a href="index.php">SGIA</a></h5>
        <?php 
            if ($_SESSION['admin'] == 't') {
                echo '<a class="menu_form" href="index.php?r=listar_user">gestionar</a>
                    <a class="menu_form" href="index.php">Registrar</a>';
            }
        ?>
        <a class="menu_form" href="index.php?r=mostrar">Aplicaciones</a>
        <a class="salir" href="View/Module/logout.php">salir</a>
    </div>
    </div>
    <div class="photo-text">
    <h4 data-ix="skype">SGIA</h4>
    <p data-ix="subtitle-hero-up">Sistema de Gestión de Inventario de Aplicaciones.</p>
        </div>
    <div class="overlay"></div>
</section>