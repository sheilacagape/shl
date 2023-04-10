<?php
ob_start();
$obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->setPageOrientation('L');
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
$obj_pdf->AddPage('L','letter');

$obj_pdf->setJPEGQuality(75);
//$obj_pdf->Image('assets/img/jewellogo copy.jpg', 15, 15, 45, 20, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
ob_start();
echo '<html>
    <body> 
      
      <h3 style="text-align: center;">DEPARTMENT OF SCIENCE AND TECHNOLOGY - X</h3>
      <h4 style="text-align: center;">Regional Standards and Testing Laboratories</h4>
      <h4 style="text-align: center;">Shelf life Evaluation Laboratory</h4>
      <h5 style="text-align: right">STM-004 F2</h5>
      <h5 style="text-align: right">Revision 1</h5>
      <h4 style="text-align: center;">Data Sheet for Sensory Evaluation of Shelf-Life Samples (Paired - Difference Test)</h4>';
    
      echo '<div>

      <table class="table">
        <tr>
        <br>
          <td>Request Reference Number:</td>
          <td><u>'.$pdtanswers[0]->test_request_no.'</u></td>
          <td>Analyzed by:</td>
          <td>________________</td>
          <td>Signature:</td>
          <td>________________</td>
        </tr>
        <tr>
          <td>Sample Code:</td>
          <td><u>'.$pdtanswers[0]->sample_code.'</u></td>
          <td>Checked by:</td>
          <td>________________</td>
          <td>Signature:</td>
          <td>________________</td>
        </tr>
        <tr>
          <td>Sample Description:</td>
          <td><u>'.$pdtanswers[0]->product.'</u></td>
          <td>Date of Analysis:</td>
          <td>________________</td>
          <td></td>
          <td></td>
        </tr>
        
      </table>
      
    </div>';
    
    echo '<table cellspacing="0" cellpadding="1" border="1">
              <tr style="text-align: center; ">
              <th rowspan="3">Panelist</th>
              <th rowspan="3">Random Reference Number</th>
              <th colspan="5">Lab Code: '.$pdtanswers[0]->tt_sample_one.'</th>
              <th rowspan="3">Panelist</th>
              <th rowspan="3">Random Reference Number</th>
              <th colspan="5">Lab Code: '.$pdtanswers[0]->tt_sample_two.'</th>
              </tr>
              <tr style="text-align: center; ">
              <th style="text-align: center;" colspan="5">Attributes</th>
              <th style="text-align: center;" colspan="5">Attributes</th>
              </tr>
              <tr style="text-align: center; ">
              <th>'.$pdtattr[0]->attr_desc.'</th>
              <th>'.$pdtattr[1]->attr_desc.'</th>
              <th>'.$pdtattr[2]->attr_desc.'</th>
              <th>'.$pdtattr[3]->attr_desc.'</th>
              <th>'.$pdtattr[4]->attr_desc.'</th>
              <th>'.$pdtattr[0]->attr_desc.'</th>
              <th>'.$pdtattr[1]->attr_desc.'</th>
              <th>'.$pdtattr[2]->attr_desc.'</th>
              <th>'.$pdtattr[3]->attr_desc.'</th>
              <th>'.$pdtattr[4]->attr_desc.'</th>
              </tr>';

              echo '<tr style="text-align: center; ">
              <td>1</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[0][0])) {
                if ($perrecord[0][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[0][1])) {
                if ($perrecord[0][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[0][2])) {
                if ($perrecord[0][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[0][3])) {
                if ($perrecord[0][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[0][4])) {
                if ($perrecord[0][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>1</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[0][0])) {
                if ($perrecord[0][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[0][1])) {
                if ($perrecord[0][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[0][2])) {
                if ($perrecord[0][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[0][3])) {
                if ($perrecord[0][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[0][4])) {
                if ($perrecord[0][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>2</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[1][0])) {
                if ($perrecord[1][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[1][1])) {
                if ($perrecord[1][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[1][2])) {
                if ($perrecord[1][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[1][3])) {
                if ($perrecord[1][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[1][4])) {
                if ($perrecord[1][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>2</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[1][0])) {
                if ($perrecord[1][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[1][1])) {
                if ($perrecord[1][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[1][2])) {
                if ($perrecord[1][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[1][3])) {
                if ($perrecord[1][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[1][4])) {
                if ($perrecord[1][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>3</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[2][0])) {
                if ($perrecord[2][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[2][1])) {
                if ($perrecord[2][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[2][2])) {
                if ($perrecord[2][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[2][3])) {
                if ($perrecord[2][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[2][4])) {
                if ($perrecord[2][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>3</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[2][0])) {
                if ($perrecord[2][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[2][1])) {
                if ($perrecord[2][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[2][2])) {
                if ($perrecord[2][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[2][3])) {
                if ($perrecord[2][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[2][4])) {
                if ($perrecord[2][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>4</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[3][0])) {
                if ($perrecord[3][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[3][1])) {
                if ($perrecord[3][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[3][2])) {
                if ($perrecord[3][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[3][3])) {
                if ($perrecord[3][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[3][4])) {
                if ($perrecord[3][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>4</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[3][0])) {
                if ($perrecord[3][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[3][1])) {
                if ($perrecord[3][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[3][2])) {
                if ($perrecord[3][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[3][3])) {
                if ($perrecord[3][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[3][4])) {
                if ($perrecord[3][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>5</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[4][0])) {
                if ($perrecord[4][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[4][1])) {
                if ($perrecord[4][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[4][2])) {
                if ($perrecord[4][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[4][3])) {
                if ($perrecord[4][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[4][4])) {
                if ($perrecord[4][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>5</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[4][0])) {
                if ($perrecord[4][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[4][1])) {
                if ($perrecord[4][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[4][2])) {
                if ($perrecord[4][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[4][3])) {
                if ($perrecord[4][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[4][4])) {
                if ($perrecord[4][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>6</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[5][0])) {
                if ($perrecord[5][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[5][1])) {
                if ($perrecord[5][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[5][2])) {
                if ($perrecord[5][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[5][3])) {
                if ($perrecord[5][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[5][4])) {
                if ($perrecord[5][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>6</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[5][0])) {
                if ($perrecord[5][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[5][1])) {
                if ($perrecord[5][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[5][2])) {
                if ($perrecord[5][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[5][3])) {
                if ($perrecord[5][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[5][4])) {
                if ($perrecord[5][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>7</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[6][0])) {
                if ($perrecord[6][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[6][1])) {
                if ($perrecord[6][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[6][2])) {
                if ($perrecord[6][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[6][3])) {
                if ($perrecord[6][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[6][4])) {
                if ($perrecord[6][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>7</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[6][0])) {
                if ($perrecord[6][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[6][1])) {
                if ($perrecord[6][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[6][2])) {
                if ($perrecord[6][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[6][3])) {
                if ($perrecord[6][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[6][4])) {
                if ($perrecord[6][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>8</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[7][0])) {
                if ($perrecord[7][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[7][1])) {
                if ($perrecord[7][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[7][2])) {
                if ($perrecord[7][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[7][3])) {
                if ($perrecord[7][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[7][4])) {
                if ($perrecord[7][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>8</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[7][0])) {
                if ($perrecord[7][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[7][1])) {
                if ($perrecord[7][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[7][2])) {
                if ($perrecord[7][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[7][3])) {
                if ($perrecord[7][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[7][4])) {
                if ($perrecord[7][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>9</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[8][0])) {
                if ($perrecord[8][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[8][1])) {
                if ($perrecord[8][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[8][2])) {
                if ($perrecord[8][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[8][3])) {
                if ($perrecord[8][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[8][4])) {
                if ($perrecord[8][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>9</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[8][0])) {
                if ($perrecord[8][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[8][1])) {
                if ($perrecord[8][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[8][2])) {
                if ($perrecord[8][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[8][3])) {
                if ($perrecord[8][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[8][4])) {
                if ($perrecord[8][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>10</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[9][0])) {
                if ($perrecord[9][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[9][1])) {
                if ($perrecord[9][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[9][2])) {
                if ($perrecord[9][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[9][3])) {
                if ($perrecord[9][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[9][4])) {
                if ($perrecord[9][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>10</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[9][0])) {
                if ($perrecord[9][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[9][1])) {
                if ($perrecord[9][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[9][2])) {
                if ($perrecord[9][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[9][3])) {
                if ($perrecord[9][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[9][4])) {
                if ($perrecord[9][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>11</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[10][0])) {
                if ($perrecord[10][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[10][1])) {
                if ($perrecord[10][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[10][2])) {
                if ($perrecord[10][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[10][3])) {
                if ($perrecord[10][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[10][4])) {
                if ($perrecord[10][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>11</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[10][0])) {
                if ($perrecord[10][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[10][1])) {
                if ($perrecord[10][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[10][2])) {
                if ($perrecord[10][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[10][3])) {
                if ($perrecord[10][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[10][4])) {
                if ($perrecord[10][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>12</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[11][0])) {
                if ($perrecord[11][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[11][1])) {
                if ($perrecord[11][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[11][2])) {
                if ($perrecord[11][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[11][3])) {
                if ($perrecord[11][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[11][4])) {
                if ($perrecord[11][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>12</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[11][0])) {
                if ($perrecord[11][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[11][1])) {
                if ($perrecord[11][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[11][2])) {
                if ($perrecord[11][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[11][3])) {
                if ($perrecord[11][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[11][4])) {
                if ($perrecord[11][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>13</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[12][0])) {
                if ($perrecord[12][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[12][1])) {
                if ($perrecord[12][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[12][2])) {
                if ($perrecord[12][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[12][3])) {
                if ($perrecord[12][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[12][4])) {
                if ($perrecord[12][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>13</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[12][0])) {
                if ($perrecord[12][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[12][1])) {
                if ($perrecord[12][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[12][2])) {
                if ($perrecord[12][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[12][3])) {
                if ($perrecord[12][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[12][4])) {
                if ($perrecord[12][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>14</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[13][0])) {
                if ($perrecord[13][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[13][1])) {
                if ($perrecord[13][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[13][2])) {
                if ($perrecord[13][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[13][3])) {
                if ($perrecord[13][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[13][4])) {
                if ($perrecord[13][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>14</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[13][0])) {
                if ($perrecord[13][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[13][1])) {
                if ($perrecord[13][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[13][2])) {
                if ($perrecord[13][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[13][3])) {
                if ($perrecord[13][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[13][4])) {
                if ($perrecord[13][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>15</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[14][0])) {
                if ($perrecord[14][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[14][1])) {
                if ($perrecord[14][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[14][2])) {
                if ($perrecord[14][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[14][3])) {
                if ($perrecord[14][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[14][4])) {
                if ($perrecord[14][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>15</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[14][0])) {
                if ($perrecord[14][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[14][1])) {
                if ($perrecord[14][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[14][2])) {
                if ($perrecord[14][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[14][3])) {
                if ($perrecord[14][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[14][4])) {
                if ($perrecord[14][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>16</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[15][0])) {
                if ($perrecord[15][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[15][1])) {
                if ($perrecord[15][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[15][2])) {
                if ($perrecord[15][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[15][3])) {
                if ($perrecord[15][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[15][4])) {
                if ($perrecord[15][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>16</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[15][0])) {
                if ($perrecord[15][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[15][1])) {
                if ($perrecord[15][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[15][2])) {
                if ($perrecord[15][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[15][3])) {
                if ($perrecord[15][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[15][4])) {
                if ($perrecord[15][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>17</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[16][0])) {
                if ($perrecord[16][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[16][1])) {
                if ($perrecord[16][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[16][2])) {
                if ($perrecord[16][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[16][3])) {
                if ($perrecord[16][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[16][4])) {
                if ($perrecord[16][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>17</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[16][0])) {
                if ($perrecord[16][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[16][1])) {
                if ($perrecord[16][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[16][2])) {
                if ($perrecord[16][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[16][3])) {
                if ($perrecord[16][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[16][4])) {
                if ($perrecord[16][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>18</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[17][0])) {
                if ($perrecord[17][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[17][1])) {
                if ($perrecord[17][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[17][2])) {
                if ($perrecord[17][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[17][3])) {
                if ($perrecord[17][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[17][4])) {
                if ($perrecord[17][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>18</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[17][0])) {
                if ($perrecord[17][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[17][1])) {
                if ($perrecord[17][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[17][2])) {
                if ($perrecord[17][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[17][3])) {
                if ($perrecord[17][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[17][4])) {
                if ($perrecord[17][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>19</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[18][0])) {
                if ($perrecord[18][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[18][1])) {
                if ($perrecord[18][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[18][2])) {
                if ($perrecord[18][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[18][3])) {
                if ($perrecord[18][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[18][4])) {
                if ($perrecord[18][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>19</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[18][0])) {
                if ($perrecord[18][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[18][1])) {
                if ($perrecord[18][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[18][2])) {
                if ($perrecord[18][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[18][3])) {
                if ($perrecord[18][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[18][4])) {
                if ($perrecord[18][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';

              echo '<tr style="text-align: center; ">
              <td>20</td>
              <td>'.$pdtsamples[0]->sample_code.'</td>
              <td>';
                if (isset($perrecord[19][0])) {
                if ($perrecord[19][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[19][1])) {
                if ($perrecord[19][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
      }
              echo '</td><td>';
                if (isset($perrecord[19][2])) {
                if ($perrecord[19][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                }
              echo '</td><td>';
                if (isset($perrecord[19][3])) {
                if ($perrecord[19][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[19][4])) {
                if ($perrecord[19][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>20</td>
              <td>'.$pdtsamples[1]->sample_code.'</td><td>';
                if (isset($perrecord[19][0])) {
                if ($perrecord[19][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[19][1])) {
                if ($perrecord[19][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[19][2])) {
                if ($perrecord[19][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[19][3])) {
                if ($perrecord[19][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td><td>';
                if (isset($perrecord[19][4])) {
                if ($perrecord[19][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
                    echo "/";
                  }
                } else{
                  echo "";
                } 
              echo '</td></tr>';
          
    echo '  </table>
<h5 >Note: If 2/3 of the total number of panelist preferred the control sample then it can be said that there is a significant difference between the samples evaluated</h5>

<div>
  <table class="table">
    <tr>
      <td colspan="2">Check the box for the decision:</td>';
      
        if ($left/($right+$left) > .66) {
      
          echo '<td><u>/</u> Significant difference</td>
          <td><input type="checkbox"> No significant difference</td>';
        }
        else {
          
          echo '<td><input type="checkbox"> Significant difference</td>
          <td><u>/</u> No significant difference</td>';
         } 
      
      
      echo '</tr>

    <tr>
      <td rowspan="2" colspan="2">Panelist comments: <br><u>
        '.$pdtanswers[0]->pdt_panel_comment_a.'</u>
      </td>
      <td rowspan="2" colspan="2">Panelist comments: <br><u>
        '.$pdtanswers[0]->pdt_panel_comment_b.'</u> 
      </td>
      
    </tr>
    
  </table>
  
</div>
</body>
      </html>';


$content = ob_get_contents();
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$fileName = 'docTitle.pdf';
$obj_pdf->Output($fileName, 'I');
exit;