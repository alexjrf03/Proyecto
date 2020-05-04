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

$item = 'app_id';

$app = App::consultarApp('aplicacion','id_app',$_GET['facturaN']);
// $lenguaje = Lenguaje::read($item, $app->id);
// $serviceWeb = Service::read($item, $app->id);
// $so = Sistema::read($item, $app->id);
// $env = Env::read($item, $app->id);
// $device = Device::read($item, $app->id);
// $db = Database::read($item, $app->id);
// $provider = Provider::read($item, $app->id);

ob_start();
require_once 'print_view.php';
$html = ob_get_clean();

$html2pdf = new Html2Pdf('P','420','es','true','UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->setDefaultFont('Arial');
$html2pdf->output('pdf_aplicacion_'.$app['nombre'].'.pdf');

?>