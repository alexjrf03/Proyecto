<?php
// Para la plantilla
require_once 'Controller/TemplateController.php';
// Para autenticar "logear"
require_once 'Model/Login.php';
require_once 'Controller/LoginController.php';

$template = new TemplateController();
$template->template();