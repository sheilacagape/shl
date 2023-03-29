<?php
ob_start();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
/**$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '', '');*/
$obj_pdf->setTitle("Report");
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
			<div class="row col-md-12">
  
		  <h3 style="text-align: center;">DEPARTMENT OF SCIENCE AND TECHNOLOGY - X</h3>
		  <h4 style="text-align: center;">Regional Standards and Testing Laboratories</h4>
		  <h4 style="text-align: center;">Shelf life Evaluation Laboratory</h4>
		  <br>
		  <h4 style="text-align: center;">Score Sheet - Triangle Test</h4>
		  
		    
		 </div>
 	
    	<table >
			<thead>
				<tr>
					<th style="font-size: 12px; "><strong>Sample Code: </strong>'.$formdata[0]->sample_code.'</th>
					<th style="font-size: 12px; "><strong>Date: </strong>'.$answer[0]->date_answered.'</th>
					
				</tr>
				<tr>
					<th style="font-size: 12px; "><strong>Name: </strong>'.$panelistdata[0]->lastname.', '.$panelistdata[0]->firstname.'</th>
					<th style="font-size: 12px; "><strong>Panelist No.: </strong>'.$answer[0]->instance.'</th>
					
				</tr>
			</thead>
			<tbody>';

			
				echo	'
					<tr>
						<br>
						<td colspan="2" style="font-size: 10px; ">Instruction: Taste the samples from left to right. Two samples are alike; one is different. Select or guess the odd/different sample and indicate by placing a check mark “/” next to the code of the odd sample.
						</td>
						
					</tr>
					<tr>
					<br>
						<td style="text-align: center; font-size: 10px; "><strong>Sample Code</strong></td>
						<td style="text-align: center;font-size: 10px; "><strong>Odd Sample</strong></td>
					</tr>
					<tr>
						<td style="text-align: center; font-size: 10px; ">'.$oneFormSamples[0]->triad_code.'</td><td>';
						
						if(isset($answer[0])){
	 						if ($oneFormSamples[0]->triad_code_id == $answer[0]->tt_sample_odd_id) {
	 							
	 							echo '<u style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;</u>';
	 						} else {
	 						
	 						echo'<u style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>';
	 						
	 						}
		 				}
			 				
					echo '</td></tr>
					<tr>
						<td style="text-align: center; font-size: 10px; ">'.$oneFormSamples[1]->triad_code.'</td><td>';
						
						if(isset($answer[0])){
	 						if ($oneFormSamples[1]->triad_code_id == $answer[0]->tt_sample_odd_id) {
	 							
	 							echo '<u style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;</u>';
	 						} else {
	 						
	 						echo'<u style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>';
	 						
	 						}
		 				}
			 				
					echo '</td></tr>
					<tr>
						<td style="text-align: center; font-size: 10px; ">'.$oneFormSamples[2]->triad_code.'</td><td>';
						
						if(isset($answer[0])){
	 						if ($oneFormSamples[2]->triad_code_id == $answer[0]->tt_sample_odd_id) {
	 							
	 							echo '<u style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;</u>';
	 						} else {
	 						
	 						echo'<u style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>';
	 						
	 						}
		 				}
			 				
					echo '</td></tr>
					<tr>
						<br>
						<td colspan="2" style="font-size: 10px; "><strong>Comments/Remarks:</strong>
						<br>
						'.$answer[0]->comments.'
						</td>
						
					</tr>
					<tr>
						<br>
						<td colspan="2" style="text-align: center;font-size: 10px; ">----------------------------------------------------For SHL analyst only----------------------------------------------------
						</td>
					</tr>
					<tr>
						<br>
						<br>
						<td colspan="2" style="font-size: 10px; ">Panelist`s Answer: ____ Correct ____ Incorrect      
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Checked by/Date:	_____________________
						</td>
					</tr>
					<tr>
						<br>
						<td colspan="2" style="font-size: 10px; ">Page 1 of 1
						</td>
					</tr>
				';
		
					
		echo '	</tbody>
		</table>
		<br>	
		<br>
		<br>
		<small style="text-align: right; font-size: 8px; ">STM-023-F2
			<br>
			Revision 0
			<br>
			Effectivity Date: 16 March 2020

</small>
						
		

</body>
      </html>';


$content = ob_get_contents();
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$fileName = 'docTitle.pdf';
$obj_pdf->Output($fileName, 'I');
exit;