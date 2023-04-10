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
    <div>
      
      <h3 style="text-align: center;">DEPARTMENT OF SCIENCE AND TECHNOLOGY - X</h3>
      <h4 style="text-align: center;">Regional Standards and Testing Laboratories</h4>
      <h4 style="text-align: center;">SHELF-LIFE EVALUATION LABORATORY</h4>
      <br>
      <h4 style="text-align: center;">Score sheet for Sensory Evaluation</h4>
      <h4 style="text-align: center;">(Paired-Difference Test)</h4>
      
        
     </div>
  
      <table style="border: 1px solid;" cellspacing="0" cellpadding="1" border="1">
      <thead>
        <tr>
          <th colspan="3" style="font-size: 12px; "><strong>Name: </strong>'.$panelistdata[0]->lastname.', '.$panelistdata[0]->firstname.'</th>
          <th colspan="3" style="font-size: 12px; "><strong>Sample Code: </strong>'.$formdata[0]->sample_code.'</th>
          
        </tr>
        <tr>
          <th colspan="3" style="font-size: 12px; "><strong>Panelist No.: </strong>'.$count.'</th>
          <th colspan="3" style="font-size: 12px; "><strong>Date: </strong>'.$formdata[0]->date_answered.'</th>
          
        </tr>
      </thead>
      <tbody>';

      
        echo  '
          <tr>
            <br>
            <td colspan="6" style="font-size: 10px; ">Instruction:
            <br>
            <br>
            You are given a pair of coded samples. Please place a check (/) mark under the appropriate row and  write down any comments.
            </td>
            
          </tr>
         <tr>
<th rowspan="2" style="text-align: center; "><strong>Sample Code</strong></th>
<th colspan="5" style="text-align: center; "><strong>Sample Preffered</strong></th>

</tr>
<tr>';
  if (isset($formAttr[0])) {
    
    echo '<th style="text-align: center;"><p >'.$formAttr[0]->attr_desc.'</p></th>';
  }
  if (isset($formAttr[1])) {
    
    echo '<th style="text-align: center;"><p >'.$formAttr[1]->attr_desc.'</p></th>';
  }
  if (isset($formAttr[2])) {
    
    echo '<th style="text-align: center;"><p >'.$formAttr[2]->attr_desc.'</p></th>';
  }
  if (isset($formAttr[3])) {
    
    echo '<th style="text-align: center;"><p >'.$formAttr[3]->attr_desc.'</p></th>';
  }
  if (isset($formAttr[4])) {
    
    echo '<th style="text-align: center;"><p >'.$formAttr[4]->attr_desc.'</p></th>';
  }
 

              echo '</tr>
          <tr>
            <td style="text-align: center; font-size: 10px; ">'.$oneFormSamples[0]->sample_code.'</td>
            <td ><p ><u style="text-align: center;">';
            if(isset($answer[0])){
              if ($oneFormSamples[0]->pdt_sample_id == $answer[0]->pdt_sample_odd_id) {
                echo '/';
              } else {
              echo '';
              }
            }
            echo '</u></p></td>';

            echo '<td ><p ><u style="text-align: center;">';
            if(isset($answer[1])){
              if ($oneFormSamples[0]->pdt_sample_id == $answer[1]->pdt_sample_odd_id) {
                echo '/';
              } else {
              echo '';
              }
            }
            echo '</u></p></td>';

            echo '<td ><p ><u style="text-align: center;">';
            if(isset($answer[2])){
              if ($oneFormSamples[0]->pdt_sample_id == $answer[2]->pdt_sample_odd_id) {
                echo '/';
              } else {
              echo '';
              }
            }
            echo '</u></p></td>';

            echo '<td ><p ><u style="text-align: center;">';
            if(isset($answer[3])){
              if ($oneFormSamples[0]->pdt_sample_id == $answer[3]->pdt_sample_odd_id) {
                echo '/';
              } else {
              echo '';
              }
            }
            echo '</u></p></td>';

            echo '<td ><p ><u style="text-align: center;">';
            if(isset($answer[4])){
              if ($oneFormSamples[0]->pdt_sample_id == $answer[4]->pdt_sample_odd_id) {
                echo '/';
              } else {
              echo '';
              }
            }
            echo '</u></p></td>';
              
          echo '</tr>
          <tr>
            <td style="text-align: center; font-size: 10px; ">'.$oneFormSamples[1]->sample_code.'</td>';
            
            echo '<td ><p ><u style="text-align: center;">';
            if(isset($answer[0])){
              if ($oneFormSamples[1]->pdt_sample_id == $answer[0]->pdt_sample_odd_id) {
                echo '/';
              } else {
              echo '';
              }
            }
            echo '</u></p></td>';   

            echo '<td ><p ><u style="text-align: center;">';
            if(isset($answer[1])){
              if ($oneFormSamples[1]->pdt_sample_id == $answer[1]->pdt_sample_odd_id) {
                echo '/';
              } else {
              echo '';
              }
            }
            echo '</u></p></td>';   

            echo '<td ><p ><u style="text-align: center;">';
            if(isset($answer[2])){
              if ($oneFormSamples[1]->pdt_sample_id == $answer[2]->pdt_sample_odd_id) {
                echo '/';
              } else {
              echo '';
              }
            }
            echo '</u></p></td>';   

            echo '<td ><p ><u style="text-align: center;">';
            if(isset($answer[3])){
              if ($oneFormSamples[1]->pdt_sample_id == $answer[3]->pdt_sample_odd_id) {
                echo '/';
              } else {
              echo '';
              }
            }
            echo '</u></p></td>';   

            echo '<td ><p ><u style="text-align: center;">';
            if(isset($answer[4])){
              if ($oneFormSamples[1]->pdt_sample_id == $answer[4]->pdt_sample_odd_id) {
                echo '/';
              } else {
              echo '';
              }
            }
            echo '</u></p></td>';            

          echo '</tr>
          <tr>
            <br>
            <td colspan="6" style="font-size: 10px; "><strong>Comments</strong>
            <br>
            '.$answer[0]->comments.'
            
            </td>
            
          </tr>
        ';
    
          
    echo '  </tbody>
    </table>
    <br>  
    <br>
    <br>
    <small style="text-align: right; font-size: 8px; ">
      <br>
      STM-004 F1
      
      <br>
      Revision 0

</small>

</body>
      </html>';


$content = ob_get_contents();
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$fileName = 'docTitle.pdf';
$obj_pdf->Output($fileName, 'I');
exit;