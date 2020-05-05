<?php
require '../../../vendor/autoload.php';
require '../../../Model/App.php';
require '../../../Model/Database.php';
require '../../../Model/Device.php';
require '../../../Model/Lenguaje.php';
require '../../../Model/Env.php';
require '../../../Model/Provider.php';
require '../../../Model/Service.php';
require '../../../Model/Sistema.php';

use Spipu\Html2Pdf\Html2Pdf;

$item = 'aplicacion';
$value = $_GET['facturaN'];

$app = App::consultarApp($item,'id_app',$value);
$lenguaje = Lenguaje::read($item,$value);
$serviceWeb = Service::read($item,$value);
$so = Sistema::read($item,$value);
$env = Env::read($item,$value);
$device = Device::read($item,$value);
$db = Database::read($item,$value);
$provider = Provider::read($item,$value);

ob_start();
require_once 'print_view.php';
$html = ob_get_clean();

$html2pdf = new Html2Pdf('P','420','es','true','UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->setDefaultFont('Arial');
$html2pdf->output('pdf_aplicacion_'.$app['nombre'].'.pdf');

?>