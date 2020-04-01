<?php

require_once '../../../Model/App.php';

class ImprimirFact{
    
    public $codigo;
    
    public function getFact(){

        $table = 'aplicacion';
        $item = 'id';
        $value = $_GET['facturaN'];
        
        $detalle = App::consultarApp($table,$item,$value);

        $nro_comprobante = rand(10,4);
        $date = $detalle['date'];
        $nombreApp = $detalle['name'];
                
        $usuarioFinal = $detalle['final_user'];
        $uso = $detalle['uso'];        
        $url = $detalle['url']; 
        $archivoConex = $detalle['conection_file']; 

        $firma =$detalle['firms'];
        $archivoAdjunto = $detalle['attached_files'];        
        $autenticacion =$detalle['authentication_method'];
        $descripcionApp = $detalle['description'];

        $nombreDisp = $detalle['device'];
        $nombreLeng = $detalle['languaje'];        
        $serviweb = $detalle['web_service'];
        $so = $detalle['so'];
        $proveedor = $detalle['provider_data'];
        $database = $detalle['database'];
        $ambiente = $detalle['environment'];

require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        
$pdf->startPageGroup();

$pdf->SetMargins(10, 10, 10);
        
$pdf->AddPage();
        
$bloque1 = <<<EOF

  <img src="images/images.png">

  <br>N° Comprobante. $nro_comprobante<br><br>
  
  <h1 style="text-align: center;">Sistema de Gestión de Inventario de Aplicaciones</h1>

EOF;
        
$pdf->writeHTML($bloque1,false,false,false,false,'');
        
//----------------------------------------------------
      
$bloque2 = <<<EOF


<br><h3>Datos de la Aplicación:</h3>
            
  <table border="1" style="font-size:10px; padding:5px 10px;">
    
    <tr>
      <th style="background-color: #354757; color: #fff; text-align:center">Nombre</th>
      <th style="background-color: #354757; color: #fff; text-align:center">Usuario Final</th>
      <th style="background-color: #354757; color: #fff; text-align:center">URL</th>
      <th style="background-color: #354757; color: #fff; text-align:center">Uso</th>
    </tr>
        
    <tr>
      <td>$nombreApp</td>
      <td>$usuarioFinal</td>
      <td>$url</td>
      <td>$uso</td>
    </tr> 

    <tr>
      <th style="background-color: #354757; color: #fff; text-align:center">Archivo Conexión</th>
      <th style="background-color: #354757; color: #fff; text-align:center">Manejo de Firmas</th>
      <th style="background-color: #354757; color: #fff; text-align:center">Archivos Adjuntos</th>
      <th style="background-color: #354757; color: #fff; text-align:center">Método de Autenticación</th>
    </tr>

    <tr>
      <td>$archivoConex</td>
      <td>$firma</td>
      <td>$archivoAdjunto</td>
      <td>$autenticacion</td>
    </tr> 

    <tr>
      <th colspan="4" style="background-color: #354757; color: #fff; text-align: center">Descripción</th>
    </tr>

    <tr>
      <td colspan="4">$descripcionApp</td>
    </tr>
           
  </table>


EOF;
        
$pdf->writeHTML($bloque2,false,false,false,false,'');
        
//---------------------------------------------------
        
$bloque3 = <<<EOF

<br><h3>Datos del Lenguaje:</h3>

  <table border="1" style="font-size:10px; padding:5px 10px;">
    
    <tr>
      <th style="background-color: #354757; color: #fff; text-align:center">Nombre</th>
    </tr>
          
    <tr>
      <td>$nombreLeng</td>
    </tr> 
          
  </table>

EOF;
        
$pdf->writeHTML($bloque3,false,false,false,false,'');
        
//---------------------------------------------------
        
$bloque4 = <<<EOF

<br><h3>Datos del Servidor Web:</h3>

  <table border="1" style="font-size:10px; padding:5px 10px;">
    
    <tr>
      <th style="background-color: #354757; color: #fff; text-align:center">Nombre</th>
    </tr>
          
    <tr>
      <td>$serviweb</td>
    </tr> 
          
  </table>

EOF;
        
$pdf->writeHTML($bloque4,false,false,false,false,'');
        
//--------------------------------------------
        
$bloque5 = <<<EOF

<br><h3>Datos del Sistema Operativo:</h3>

<table border="1" style="font-size:10px; padding:5px 10px;">
  
  <tr>
    <th style="background-color: #354757; color: #fff; text-align:center">Nombre</th>
  </tr>
        
  <tr>
    <td>$so</td>
  </tr> 
        
</table>
   
EOF;
        
$pdf->writeHTML($bloque5,false,false,false,false,'');
        
//---------------------------------------------------  
        
$bloque6 = <<<EOF
<br><br><br>
<img src="images/images.png">
<br><h3>Datos del Ambiente:</h3>

  <table border="1" style="font-size:10px; padding:5px 10px;">
    
    <tr>
      <th style="background-color: #354757; color: #fff; text-align:center">Estatus</th>
    </tr>
          
    <tr>
      <td>$ambiente</td>
    </tr> 
          
  </table>


EOF;

$pdf->writeHTML($bloque6,false,false,false,false,'');

$bloque7 = <<<EOF

<br><h3>Datos del Dispositivo:</h3>

  <table border="1" style="font-size:10px; padding:5px 10px;">
    
    <tr>
      <th style="background-color: #354757; color: #fff; text-align:center">Descripción</th>
    </tr>
          
    <tr>
      <td>$nombreDisp</td>
    </tr> 
          
  </table>
EOF;

$pdf->writeHTML($bloque7,false,false,false,false,'');

$bloque8 = <<<EOF

<br><h3>Datos de la Base de Datos:</h3>

  <table border="1" style="font-size:10px; padding:5px 10px;">
    
    <tr>
      <th style="background-color: #354757; color: #fff; text-align:center">Nombre</th>
      <th style="background-color: #354757; color: #fff; text-align:center">Estatus</th>
      <th style="background-color: #354757; color: #fff; text-align:center">Servidor BD</th>
      <th style="background-color: #354757; color: #fff; text-align:center">Descripción</th>
    </tr>
          
    <tr>
      <td>$database</td>
      <td>$so</td>
      <td>$so</td>
      <td>$so</td>
    </tr> 
          
  </table>
EOF;

$pdf->writeHTML($bloque8,false,false,false,false,'');

$bloque9 = <<<EOF

<br><h3>Datos del Proveedor:</h3>

  <table border="1" style="font-size:10px; padding:5px 10px;">
    
    <tr>
      <th style="background-color: #354757; color: #fff; text-align:center">Nombre</th>
      <th style="background-color: #354757; color: #fff; text-align:center">Correo</th>
      <th style="background-color: #354757; color: #fff; text-align:center">Teléfono</th>
    </tr>
          
    <tr>
      <td>$proveedor</td>
      <td>$so</td>
      <td>$so</td>
      <td>$so</td>
    </tr> 
          
  </table>

EOF;

$pdf->writeHTML($bloque9,false,false,false,false,'');

$bloque10 = <<<EOF

<table>
     <br><br><br><br><br><br><br><br><br><br>
     <tr>
     <td style="height:50px;"></td>
     </tr>
 
 </table>
 
 <table style="font-size: 12px; padding:5px 10px">
 
     <tr>
         
         <td style="background-color:white; width:190px;text-align:center"></td>
          
          <td style="border-top: 1px solid black;color: #333; background-color:white; width:160px;text-align:center">Firma y sello del Director de Desarrollo</td>
          
          <td style="background-color:white; width:190px;text-align:center"></td>
     
     </tr>
 
 </table>
EOF;

$pdf->writeHTML($bloque10,false,false,false,false,'');

        
//SALIDA DEL ARCHIVO
               
$pdf->Output('Comprobante_retencion.pdf');
    
    }
    
}

$imprimir = new ImprimirFact();
$imprimir->codigo = "1000201";
$imprimir->getFact();

?>