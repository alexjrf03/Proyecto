<?php
    if (isset($_GET['form'])) {

        if ($_GET["form"] == "lenguaje" || 
            $_GET["form"] == "base_datos" ||
            $_GET["form"] == "lenguaje" ||
            $_GET["form"] == "proveedor" ||
            $_GET["form"] == "serviweb" ||
            $_GET['form'] == "sistema_operativo" ||
            $_GET['form'] == "dispositivo" ||
            $_GET['form'] == "ambiente" ||
            $_GET['form'] == "aplicacion" ) {
                
                include "../View/Module/form/".$_GET["form"].".php";
        
            }
    } else {
        include 'View/Module/404.php';
    }
?>