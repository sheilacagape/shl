<?php
ob_start();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
/**$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '', '');*/
$obj_pdf->setTitle("Triangle Test STM-023-F1");
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
			<div >
  
		  <h3 style="text-align: center;">DEPARTMENT OF SCIENCE AND TECHNOLOGY - X</h3>
		  <h4 style="text-align: center;">Regional Standards and Testing Laboratories</h4>
		  <h4 style="text-align: center;">Shelf life Evaluation Laboratory</h4>
		  <br>
		  <h4 style="text-align: center;">Sensory Evaluation - Triangle Test Sample Monitoring</h4>
		  
		    
		 </div>

		 <div >
	      <br><strong>Date of Evaluation: </strong><em>'.$oneForm[0]->date_evaluation.'</em>
	      
	      
	    </div>
 	
    	
		';

		echo '
		<div >
		<table width="100%" cellpadding="0" border="0" style="text-align:center;">
    <tr>
        <td width="25%">
        		
            <table width="100%" border="1">
            		<tr><td colspan="2">Sample A: '.$oneForm[0]->tt_sample_one.'</td></tr>
                <tr>
					 				<td>Codes</td>
					 				<td>Triad #</td>
					 				
					 			</tr>
				 			

				 				<tr><td>'.$triadcodes[0]->triad_code.'</td><td>1</td></tr>
								<tr><td>'.$triadcodes[3]->triad_code.'</td><td>2</td></tr>
								<tr><td>'.$triadcodes[4]->triad_code.'</td><td>*2</td></tr>
								<tr><td>'.$triadcodes[6]->triad_code.'</td><td>3</td></tr>
								<tr><td>'.$triadcodes[8]->triad_code.'</td><td>3</td></tr>
								<tr><td>'.$triadcodes[10]->triad_code.'</td><td>*4</td></tr>
								<tr><td>'.$triadcodes[11]->triad_code.'</td><td>4</td></tr>
								<tr><td>'.$triadcodes[14]->triad_code.'</td><td>5</td></tr>
								<tr><td>'.$triadcodes[16]->triad_code.'</td><td>*6</td></tr>
								<tr><td>'.$triadcodes[18]->triad_code.'</td><td>7</td></tr>
								<tr><td>'.$triadcodes[21]->triad_code.'</td><td>8</td></tr>
								<tr><td>'.$triadcodes[22]->triad_code.'</td><td>*8</td></tr>
								<tr><td>'.$triadcodes[24]->triad_code.'</td><td>9</td></tr>
								<tr><td>'.$triadcodes[26]->triad_code.'</td><td>9</td></tr>
								<tr><td>'.$triadcodes[28]->triad_code.'</td><td>*10</td></tr>
								<tr><td>'.$triadcodes[29]->triad_code.'</td><td>10</td></tr>
								<tr><td>'.$triadcodes[32]->triad_code.'</td><td>11</td></tr>
								<tr><td>'.$triadcodes[34]->triad_code.'</td><td>*12</td></tr>
								<tr><td>'.$triadcodes[36]->triad_code.'</td><td>13</td></tr>
								<tr><td>'.$triadcodes[39]->triad_code.'</td><td>14</td></tr>
								<tr><td>'.$triadcodes[40]->triad_code.'</td><td>*14</td></tr>
								<tr><td>'.$triadcodes[42]->triad_code.'</td><td>15</td></tr>
								<tr><td>'.$triadcodes[44]->triad_code.'</td><td>15</td></tr>
            </table>    
        </td>

        <td width="25%">
        		
            <table width="100%" border="1">
            		<tr><td colspan="2">Sample B: '.$oneForm[0]->tt_sample_two.'</td></tr>

                <tr>
					 				<td>Codes</td>
					 				<td>Triad #</td>
					 				
					 			</tr>
					 			
					 				<tr><td>'.$triadcodes[1]->triad_code.'</td><td>*1</td></tr>
									<tr><td>'.$triadcodes[2]->triad_code.'</td><td>1</td></tr>
									<tr><td>'.$triadcodes[5]->triad_code.'</td><td>2</td></tr>
									<tr><td>'.$triadcodes[7]->triad_code.'</td><td>*3</td></tr>
									<tr><td>'.$triadcodes[9]->triad_code.'</td><td>4</td></tr>
									<tr><td>'.$triadcodes[12]->triad_code.'</td><td>5</td></tr>
									<tr><td>'.$triadcodes[13]->triad_code.'</td><td>*5</td></tr>
									<tr><td>'.$triadcodes[15]->triad_code.'</td><td>6</td></tr>
									<tr><td>'.$triadcodes[17]->triad_code.'</td><td>6</td></tr>
									<tr><td>'.$triadcodes[19]->triad_code.'</td><td>*7</td></tr>
									<tr><td>'.$triadcodes[20]->triad_code.'</td><td>7</td></tr>
									<tr><td>'.$triadcodes[23]->triad_code.'</td><td>8</td></tr>
									<tr><td>'.$triadcodes[25]->triad_code.'</td><td>*9</td></tr>
									<tr><td>'.$triadcodes[27]->triad_code.'</td><td>10</td></tr>
									<tr><td>'.$triadcodes[30]->triad_code.'</td><td>11</td></tr>
									<tr><td>'.$triadcodes[31]->triad_code.'</td><td>*11</td></tr>
									<tr><td>'.$triadcodes[33]->triad_code.'</td><td>12</td></tr>
									<tr><td>'.$triadcodes[35]->triad_code.'</td><td>12</td></tr>
									<tr><td>'.$triadcodes[37]->triad_code.'</td><td>*13</td></tr>
									<tr><td>'.$triadcodes[38]->triad_code.'</td><td>13</td></tr>
									<tr><td>'.$triadcodes[41]->triad_code.'</td><td>14</td></tr>
									<tr><td>'.$triadcodes[43]->triad_code.'</td><td>*15</td></tr>
									<tr><td>n/a</td><td>n/a</td></tr>
            </table>   
        </td>

        <td width="50%">
            <table width="100%" border="1">
                <tr>
					 				<td>Triad</td>
					 				<td colspan="3">Codes</td>
					 				
					 			</tr>
					 			
					 				<tr><td>  1.) ABB</td><td>'.$triadcodes[0]->triad_code.'</td><td>'.$triadcodes[1]->triad_code.'</td><td>'.$triadcodes[2]->triad_code.'</td></tr>
							<tr><td>  2.) AAB</td><td>'.$triadcodes[3]->triad_code.'</td><td>'.$triadcodes[4]->triad_code.'</td><td>'.$triadcodes[5]->triad_code.'</td></tr>
							<tr><td>  3.) ABA</td><td>'.$triadcodes[6]->triad_code.'</td><td>'.$triadcodes[7]->triad_code.'</td><td>'.$triadcodes[8]->triad_code.'</td></tr>
							<tr><td>  4.) BAA</td><td>'.$triadcodes[9]->triad_code.'</td><td>'.$triadcodes[10]->triad_code.'</td><td>'.$triadcodes[11]->triad_code.'</td></tr>
							<tr><td>  5.) BBA</td><td>'.$triadcodes[12]->triad_code.'</td><td>'.$triadcodes[13]->triad_code.'</td><td>'.$triadcodes[14]->triad_code.'</td></tr>
							<tr><td>  6.) BAB</td><td>'.$triadcodes[15]->triad_code.'</td><td>'.$triadcodes[16]->triad_code.'</td><td>'.$triadcodes[17]->triad_code.'</td></tr>

							<tr><td>  7.) ABB</td><td>'.$triadcodes[18]->triad_code.'</td><td>'.$triadcodes[19]->triad_code.'</td><td>'.$triadcodes[20]->triad_code.'</td></tr>
							<tr><td>  8.) AAB</td><td>'.$triadcodes[21]->triad_code.'</td><td>'.$triadcodes[22]->triad_code.'</td><td>'.$triadcodes[23]->triad_code.'</td></tr>
							<tr><td>  9.) ABA</td><td>'.$triadcodes[24]->triad_code.'</td><td>'.$triadcodes[25]->triad_code.'</td><td>'.$triadcodes[26]->triad_code.'</td></tr>
							<tr><td>10.) BAA</td><td>'.$triadcodes[27]->triad_code.'</td><td>'.$triadcodes[28]->triad_code.'</td><td>'.$triadcodes[29]->triad_code.'</td></tr>
							<tr><td>11.) BBA</td><td>'.$triadcodes[30]->triad_code.'</td><td>'.$triadcodes[31]->triad_code.'</td><td>'.$triadcodes[32]->triad_code.'</td></tr>
							<tr><td>12.) BAB</td><td>'.$triadcodes[33]->triad_code.'</td><td>'.$triadcodes[34]->triad_code.'</td><td>'.$triadcodes[35]->triad_code.'</td></tr>

							<tr><td>13.) ABB</td><td>'.$triadcodes[36]->triad_code.'</td><td>'.$triadcodes[37]->triad_code.'</td><td>'.$triadcodes[38]->triad_code.'</td></tr>
							<tr><td>14.) AAB</td><td>'.$triadcodes[39]->triad_code.'</td><td>'.$triadcodes[40]->triad_code.'</td><td>'.$triadcodes[41]->triad_code.'</td></tr>
							<tr><td>15.) ABA</td><td>'.$triadcodes[42]->triad_code.'</td><td>'.$triadcodes[43]->triad_code.'</td><td>'.$triadcodes[44]->triad_code.'</td></tr>
            </table>   
        </td>
    </tr>
</table>
		
 			</div>
 			';

		echo '<table>
 			<tr>
 				<td>* middle sample</td>
 			</tr>
 		</table>
 		<br>

 		<h4 >Prepared by: ________________________________</h4>
		<h4 >Checked by: ________________________________</h4>
 		<br><br>'; 			

		echo '<br><br>
    <h5>Page 1 of 1 </h5> 
    
    <h5 style="text-align: right;">STM-023-F1<br>Revision 0<br>Effectivity Date: 16 March 2020</h5> 
    ';


$content = ob_get_contents();
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$fileName = 'docTitle.pdf';
$obj_pdf->Output($fileName, 'I');
exit;