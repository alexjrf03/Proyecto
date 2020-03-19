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
        $control = $detalle['name'];
                
        $name = $detalle['final_user'];
        $rif = $detalle['uso'];        
        $telefono = $detalle['url']; 
        $direccion = $detalle['conection_file']; 

        $name_p =$detalle['firms'];
        $rif_p = $detalle['attached_files'];        
        $telefono_p =$detalle['authentication_method'];
        $direccion_p = $detalle['description'];

        $tipo_pago = $detalle['device'];
        $monto_original = $detalle['languaje'];        
        $base = $detalle['web_service'];
        $porcentaje = $detalle['so'];
        $monto_retenido = $detalle['provider_data'];
        $total = $detalle['database'];
        $environment = $detalle['environment'];

require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        
$pdf->startPageGroup();

$pdf->SetMargins(10, 10, 10);
        
$pdf->AddPage();
        
$bloque1 = <<<EOF

<table>

    <tr>
    
        <td style="width:540px;"> <img src="images/barra.png">
            </td>
        
    </tr>
    
    <tr>
    
    <td style="width:280px;"></td>
    <td style="width:110px; text-align: center; color:blue; ">
                <div style="background-color:white;">
                    <br>N° Comprobante. $nro_comprobante<br>
                    
                </div>
            </td>
    
    </tr>
    
</table>

<table style="font-size: 12px; padding:5px 10px">

</table>

<table style="font-size: 12px; padding:5px 10px">

    <tr> 

      <td style="text-align:center">
      Comprobante de Retencion del impuesto al valor agregado
      </td>         
      
    </tr>

</table>

<table style="font-size: 12px; padding:5px 10px">

    <tr>
         <td style="text-align:left">
         <small>FECHA DE EMISION: $date</small>
         </td>      
    </tr>
</table>

EOF;
        
$pdf->writeHTML($bloque1,false,false,false,false,'');
        
//----------------------------------------------------
      
$bloque2 = <<<EOF
<table style="font-size: 12px; padding:5px 10px">

    <tr>
         <td style="text-align:center">
         
         </td>      
    </tr>
</table>
    <table>    
    <tr>
         <td style="color: blue; background-color:white; width:200px;text-align:left">
         Datos del Agente de retencion:
         </td>      
    </tr>
    </table>

    <table style="font-size:10px; padding:5px 10px;">
    
        <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">N° RIF</th>
              <th scope="col">Telefono</th>
              <th scope="col">Direccion</th>
            </tr>
          </thead>
        <tbody>
            <tr>
              <td>$name</td>
              <td>$rif</td>
              <td>$telefono</td>
              <td>$direccion</td>
            </tr> 
          </tbody>    
        </table>


EOF;
        
$pdf->writeHTML($bloque2,false,false,false,false,'');
        
//---------------------------------------------------
        
$bloque3 = <<<EOF

    <table style="font-size: 12px; padding:5px 10px">

    <tr>
         <td style="text-align:center">
         
         </td>      
    </tr>
</table>
    <table>    
    <tr>
         <td style="color: blue; background-color:white; width:160px;text-align:left">
         Datos del Proveedor:
         </td>      
    </tr>
    </table>

    <table style="font-size:10px; padding:5px 10px;">
    
        <thead>
            <tr>
              <th scope="col">Nombre Proveedor</th>
              <th scope="col">N° RIF</th>
              <th scope="col">Telefono</th>
              <th scope="col">Direccion</th>
            </tr>
          </thead>
        <tbody>
            <tr>
              <td>$name_p</td>
              <td>$rif_p</td>
              <td>$telefono_p</td>
              <td>$direccion_p</td>
            </tr> 
          </tbody>    
        </table>

EOF;
        
$pdf->writeHTML($bloque3,false,false,false,false,'');
        
//---------------------------------------------------
        
$bloque4 = <<<EOF

    <table style="font-size: 12px; padding:5px 10px">

    <tr>
         <td style="text-align:center">
         
         </td>      
    </tr>
</table>
    <table>    
    <tr>
         <td style="color: blue; background-color:white; width:160px;text-align:left">
         Datos de la compra:
         </td>      
    </tr>
    </table>

    <table style="font-size:10px; padding:5px 10px;">
    
        <thead>
            <tr>
              <th scope="col">N° de Factura</th>
              <th scope="col">N° de Control</th>
              <th scope="col">Fecha de Emision</th>
              <th scope="col">Tipo de Transacción</th>
            </tr>
          </thead>
        <tbody>
            <tr>
              <td>$date</td>
              <td>$control</td>
              <td>$date</td>
              <td>Registro</td>
            </tr> 
          </tbody>    
        </table>

EOF;
        
$pdf->writeHTML($bloque4,false,false,false,false,'');
        
//--------------------------------------------
        
$bloque5 = <<<EOF
  <table style="font-size: 12px; padding:5px 10px">

    <tr>
         <td style="text-align:center">
         
         </td>      
    </tr>
</table>
 <table>    
    <tr>
         <td style="color: blue; background-color:white; width:500px;text-align:left">
         Detalle del calculo de la retencion:
         </td>      
    </tr>
    </table>

    <table style="font-size:10px; padding:5px 10px;">
    
        <thead>
            <tr>
              <th scope="col">Porcentaje.</th>
              <th scope="col">Alicuota (Tasa)</th>
              <th scope="col">Total con IVA</th>
              <th scope="col">Base Imponible</th>
              <th scope="col">ImpuestoIVA</th>
              <th scope="col">IVA Retenido</th>              
            </tr>
          </thead>
        <tbody>
            <tr>
              <td>$porcentaje %</td>
              <td>&#60; $tipo_pago</td>
              <td>$total</td>
              <td>$base</td>
              <td>$monto_original</td>              
              <td>$monto_retenido</td>              
            </tr> 
          </tbody>    
        </table>
   
EOF;
        
$pdf->writeHTML($bloque5,false,false,false,false,'');
        
//---------------------------------------------------  
        
$bloque6 = <<<EOF

   <table>
        
        <tr>
        <td style="height:50px;"></td>
        </tr>
    
    </table>
    
    <table style="font-size: 12px; padding:5px 10px">
    
        <tr>
            
            <td style="background-color:white; width:190px;text-align:center"></td>
             
             <td style="border-top: 1px solid black;color: #333; background-color:white; width:160px;text-align:center">Firma y sello del Agente de retención</td>
             
             <td style="background-color:white; width:190px;text-align:center"></td>
        
        </tr>
    
    </table>


EOF;

$pdf->writeHTML($bloque6,false,false,false,false,'');
        
//SALIDA DEL ARCHIVO
               
$pdf->Output('Comprobante_retencion.pdf');
    
    }
    
}

$imprimir = new ImprimirFact();
$imprimir->codigo = "1000201";
$imprimir->getFact();

?>