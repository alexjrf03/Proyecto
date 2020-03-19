<?php

//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 11, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();
$html = <<<EOF

    <table>
    
        <tr>
        
            <td style="width:150px;"> <img src="images/barra.png"> </td>
            
            <td style="text-align:center; width:120px; font-size: 8.5px;">
                <div style="background-color:white;">
                    <br>
                    RIF: 14.453.423-5
                    <br>
                    Dirección: Antimano.
                </div>
            </td>
            <td style="text-align:left; width:160px; font-size: 8.5px;">
                <div style="background-color:white">
                    <br>
                    Teléfono: (212) 457-5687.
                    <br>
                    Correo: Inventorysystem@gmail.com
                </div>
            </td>
            <td style="width:110px; text-align: center; color:red;">
                <div style="background-color:white;">
                    <br>FACTURA N.<br>
                    
                </div>
            </td>
        </tr>
    
    </table>

EOF;
// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print

$html = <<<EOF

<img src="images/image_demo.jpg" style="width:300px">

EOF;

$pdf->writeHTML($html, false, false, false, false, '');

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('pdf.pdf', 'I');


//============================================================+
// END OF FILE
//============================================================+
  ?>
 