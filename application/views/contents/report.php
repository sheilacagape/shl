<?php
ob_start();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
/**$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '', '');*/
$obj_pdf->setTitle($docTitle);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, 0.1, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage('P','letter');

$obj_pdf->setJPEGQuality(75);
//$obj_pdf->Image('assets/img/jewellogo copy.jpg', 15, 15, 45, 20, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
ob_start();
echo '<html>
		<body> 
		<div style="text-align: right;">
		<small style="text-align: right;"><strong>MC-F1</strong></small><br>
        <small style="text-align: right;">Rev. 1 / 08-06-20 </small>
        </div>
        <hr>
		<div><br><h3 style="text-align: center;">DEPARTMENT OF SCIENCE AND TECHNOLOGY</h3>
 	<h4 style="text-align: center;">Regional Office No. X</h4>
 	<hr>
 	<h2 style="text-align: center;"	>EQUIPMENT MAINTENANCE RECORD</h2>
 	<hr>        
 	
    		<p style="text-align: left;"><strong>Equipment Name &nbsp;&nbsp;&nbsp;&nbsp;:</strong>  '.$tspotdetails[0]->equipment_name.'</p>
    		<p style="text-align: left;"><strong>Code No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </strong>  '.$tspotdetails[0]->code_no.'</p>
    		<p style="text-align: left;"><strong>Type/Model No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>  '.$tspotdetails[0]->type_model_no.'</p>
    		<p style="text-align: left;"><strong>Serial No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>  '.$tspotdetails[0]->serial_no.'</p>
    		<p style="text-align: left;"><strong>Location &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>  '.$tspotdetails[0]->current_location.'</p>
            	
           	
				<table border="1">
					<thead>
						<tr>
							<th style="text-align: center;font-size: 12px; "><strong>Operation Performed</strong></th>
							<th style="text-align: center;font-size: 12px; "><strong>Date</strong></th>
							<th style="text-align: center;font-size: 12px; "><strong>Remarks</strong></th>
							<th style="text-align: center;font-size: 12px; "><strong>Performed by</strong></th>
							
						</tr>
					</thead>
					<tbody>';

						if(isset($acmr)){
							for ($i=0; $i < count($acmr) ; $i++) { 
								$count = $i + 1;
								echo	'
									<tr>
										
										<td style="text-align: center;font-size: 10px; ">'.$acmr[$i]->date_added.'</td>
										<td style="text-align: center;font-size: 10px; ">'.$acmr[$i]->op_performed.'</td>
										<td style="text-align: center;font-size: 10px; ">'.$acmr[$i]->remarks.'</td>
										<td style="text-align: center;font-size: 10px; ">'.$acmr[$i]->performed_by.'</td>
										
									</tr>

								';
						
							}
						}
						
				echo '	</tbody>
				</table>

		';

		
		;


echo            '</body>
      </html>';


$content = ob_get_contents();
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$fileName = $docTitle.'.pdf';
$obj_pdf->Output($fileName, 'I');
exit;
