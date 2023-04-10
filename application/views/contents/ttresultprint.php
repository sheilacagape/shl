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
  
		  <h3 style="text-align: center;">DEPARTMENT OF SCIENCE AND TECHNOLOGY - X</h3>
		  <h4 style="text-align: center;">Regional Standards and Testing Laboratories</h4>
		  <h4 style="text-align: center;">Shelf life Evaluation Laboratory</h4>
		  <br>
		  <h4 style="text-align: center;">Sensory Evaluation - Triangle Test Result Summary</h4>
		  

 		<p>Request Reference No.: <u>'.$ttanswers[0]->test_request_no.'</u></p>
		<p>Sample Code: <u>'.$ttanswers[0]->sample_code.'</u></p>
		<p>Sample Description: <u>'.$ttanswers[0]->product.'</u></p>
		<p>Date of Computation: ________________________</p>
 		<br>
 	<div>
    	<table>
	  <tr style="text-align: center; ">
	    <td colspan="4">

	      <table cellspacing="0" cellpadding="1" border="1" >
	        <tr style="text-align: center; ">
	          <td rowspan="2"></td>
	          <td rowspan="2" style="text-align: center; ">Panelist No.</td>
	          <td colspan="2" style="text-align: center; ">Responses</td>
	        </tr>
	        <tr style="text-align: center; ">
	          <td style="text-align: center; ">Correct</td>
	          <td style="text-align: center; ">Incorrect</td>
	        </tr>';
	        echo '<tr style="text-align: center; "><td>1</td><td>';
		if (isset($ttanswers[0])) {
			echo 1;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[0])) {
			if ($ttanswers[0]->tt_sample_odd_id == $triad[0]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[0])) {
			if ($ttanswers[0]->tt_sample_odd_id != $triad[0]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>2</td><td>';
		if (isset($ttanswers[1])) {
			echo 2;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[1])) {
			if ($ttanswers[1]->tt_sample_odd_id == $triad[1]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[1])) {
			if ($ttanswers[1]->tt_sample_odd_id != $triad[1]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>3</td><td>';
		if (isset($ttanswers[2])) {
			echo 3;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[2])) {
			if ($ttanswers[2]->tt_sample_odd_id == $triad[2]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[2])) {
			if ($ttanswers[2]->tt_sample_odd_id != $triad[2]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>4</td><td>';
		if (isset($ttanswers[3])) {
			echo 4;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[3])) {
			if ($ttanswers[3]->tt_sample_odd_id == $triad[3]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[3])) {
			if ($ttanswers[3]->tt_sample_odd_id != $triad[3]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>5</td><td>';
		if (isset($ttanswers[4])) {
			echo 5;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[4])) {
			if ($ttanswers[4]->tt_sample_odd_id == $triad[4]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[4])) {
			if ($ttanswers[4]->tt_sample_odd_id != $triad[4]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>6</td><td>';
		if (isset($ttanswers[5])) {
			echo 6;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[5])) {
			if ($ttanswers[5]->tt_sample_odd_id == $triad[5]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[5])) {
			if ($ttanswers[5]->tt_sample_odd_id != $triad[5]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>7</td><td>';
		if (isset($ttanswers[6])) {
			echo 7;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[6])) {
			if ($ttanswers[6]->tt_sample_odd_id == $triad[6]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[6])) {
			if ($ttanswers[6]->tt_sample_odd_id != $triad[6]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>8</td><td>';
		if (isset($ttanswers[7])) {
			echo 8;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[7])) {
			if ($ttanswers[7]->tt_sample_odd_id == $triad[7]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[7])) {
			if ($ttanswers[7]->tt_sample_odd_id != $triad[7]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>9</td><td>';
		if (isset($ttanswers[8])) {
			echo 9;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[8])) {
			if ($ttanswers[8]->tt_sample_odd_id == $triad[8]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[8])) {
			if ($ttanswers[8]->tt_sample_odd_id != $triad[8]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>10</td><td>';
		if (isset($ttanswers[9])) {
			echo 10;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[9])) {
			if ($ttanswers[9]->tt_sample_odd_id == $triad[9]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[9])) {
			if ($ttanswers[9]->tt_sample_odd_id != $triad[9]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>11</td><td>';
		if (isset($ttanswers[10])) {
			echo 11;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[10])) {
			if ($ttanswers[10]->tt_sample_odd_id == $triad[10]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[10])) {
			if ($ttanswers[10]->tt_sample_odd_id != $triad[10]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>12</td><td>';
		if (isset($ttanswers[11])) {
			echo 12;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[11])) {
			if ($ttanswers[11]->tt_sample_odd_id == $triad[11]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[11])) {
			if ($ttanswers[11]->tt_sample_odd_id != $triad[11]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>13</td><td>';
		if (isset($ttanswers[12])) {
			echo 13;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[12])) {
			if ($ttanswers[12]->tt_sample_odd_id == $triad[12]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[12])) {
			if ($ttanswers[12]->tt_sample_odd_id != $triad[12]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>14</td><td>';
		if (isset($ttanswers[13])) {
			echo 14;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[13])) {
			if ($ttanswers[13]->tt_sample_odd_id == $triad[13]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[13])) {
			if ($ttanswers[13]->tt_sample_odd_id != $triad[13]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';

	      echo '<tr style="text-align: center; "><td>15</td><td>';
		if (isset($ttanswers[14])) {
			echo 15;
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[14])) {
			if ($ttanswers[14]->tt_sample_odd_id == $triad[14]->triad_code_id) {		
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
		echo '</td><td>';
		if (isset($ttanswers[14])) {
			if ($ttanswers[14]->tt_sample_odd_id != $triad[14]->triad_code_id) {
				echo "/";
			}
		} else {
			echo "<em>N/A</em>";
		}
	      echo '</td></tr>';
	      echo '<tr style="text-align: center; ">
			<td></td>
			<td>Total</td>
			<td>'.$check.'</td>
			<td>'.$wrong.'</td>
		</tr>';

	      echo '</table>
	    </td>
	    <td></td>
	    <td>
	      <h5>Table 1</h5>
 					
		<table cellspacing="0" cellpadding="1" border="1">
			<tr style="text-align: center;">
				<th>n</th>
				<th>a = 0.05</th>
			</tr>
			<tr style="text-align: center; "><td>6</td><td>5</td></tr>
			<tr style="text-align: center; "><td>7</td><td>5</td></tr>
			<tr style="text-align: center; "><td>8</td><td>6</td></tr>
			<tr style="text-align: center; "><td>9</td><td>6</td></tr>
			<tr style="text-align: center; "><td>10</td><td>7</td></tr>
			<tr style="text-align: center; "><td>11</td><td>7</td></tr>
			<tr style="text-align: center; "><td>12</td><td>8</td></tr>
			<tr style="text-align: center; "><td>13</td><td>8</td></tr>
			<tr style="text-align: center; "><td>14</td><td>9</td></tr>
			<tr style="text-align: center; "><td>15</td><td>9</td></tr>
			<tr style="text-align: center; "><td>16</td><td>9</td></tr>
			<tr style="text-align: center; "><td>17</td><td>10</td></tr>
			<tr style="text-align: center; "><td>18</td><td>10</td></tr>
			<tr style="text-align: center; "><td>19</td><td>11</td></tr>
			<tr style="text-align: center; "><td>20</td><td>11</td></tr>

			</tbody>
		</table>
		<p>*n = number of panelists	</p>
	    </td>
	  </tr>
	</table>
	</div>

	<div > 
	<ol>
 		<li>If the number of correct responses is greater than or equal to the number given in Table 1 (corresponding to the number of panelists and 0.05 α-risk level), conclude that a perceptible difference exists between samples A and B.</li>
 		<li>Otherwise, test sample (A) and controlled sample (B) has no perceptible difference at all.</li>
 	</ol>

 	</div>

 	<br>

	
	<div>

      <table class="table">
      	<tr>
      		<td colspan="2">Remarks: <br><u>
        '.$ttanswers[0]->tt_panel_remarks.'</u> <br><br></td>
      	</tr>
        <tr >
        <br>
          <td style="text-align: left;">Computed by: ________________</td>
          <td style="text-align: right;">Signature/Date: ________________</td>
        </tr>
        <tr >
          <td style="text-align: left;">Checked by: ________________</td>
          <td style="text-align: right;">Signature/Date: ________________</td>
        </tr>
      </table>
      
    </div>
	
		<br>
		<br>
		<small style="text-align: right; font-size: 8px; ">STM-023-F3
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