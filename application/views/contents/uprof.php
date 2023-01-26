echo '<html>
    <body> 
    <div>
      
      <h3 style="text-align: center;">DEPARTMENT OF SCIENCE AND TECHNOLOGY - X</h3>
      <h4 style="text-align: center;">Regional Standards and Testing Laboratories</h4>
      <h4 style="text-align: center;">ACCELERATED SHELF-LIFE EVALUATION LABORATORY</h4>
      <br>
      <h4 style="text-align: center;">Score sheet for Sensory Evaluation</h4>
      <h4 style="text-align: center;">(Paired-Difference Test)</h4>
      
        
     </div>
  
      <table >
      <thead>
        <tr>
          <th style="font-size: 12px; "><strong>Name: </strong>'.$panelistdata[0]->lastname.', '.$panelistdata[0]->firstname.'</th>
          <th style="font-size: 12px; "><strong>Product: </strong>'.$formdata[0]->product.'</th>
          
        </tr>
        <tr>
          <th style="font-size: 12px; "><strong>Panelist No.: </strong>'.$panelistdata[0]->user_id.'</th>
          <th style="font-size: 12px; "><strong>Date: </strong></th>
          
        </tr>
      </thead>
      <tbody>';

      
        echo  '
          <tr>
            <br>
            <td colspan="2" style="font-size: 10px; ">Instruction:
            <br>
            <br>
            You are given a pair of coded samples. Please place a check (/) mark under the appropriate row and  write down any comments.
            </td>
            
          </tr>
          <tr>
          <br>
            <td rowspan="2" style="text-align: center; font-size: 10px; "><strong>Sample Code</strong></td>
            <td colspan="5" rowspan="1" style="text-align: center;font-size: 10px; "><strong>Sample Preffered</strong></td>
          </tr>
          <tr>';
                $table = "";
                  if (isset($formAttr)) {
                    
                    for ($i=0; $i < count($formAttr); $i++) {
                      $table.= '<th rowspan="1"><p >'.$formAttr[$i]->attr_desc.'</p></th>';
                    }
                  }
                echo $table;

              echo '</tr>
          <tr>
            <td style="text-align: center; font-size: 10px; ">'.$oneFormSamples[0]->sample_code.'</td><td>';
            
            if(isset($answer[0])){
              if ($oneFormSamples[0]->pdt_sample_id == $answer[0]->pdt_sample_odd_id) {
                
                echo '<u style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;</u>';
              } else {
              
              echo'<u style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>';
              
              }
            }
              
          echo '</td></tr>
          <tr>
            <td style="text-align: center; font-size: 10px; ">'.$oneFormSamples[1]->sample_code.'</td><td>';
            
            if(isset($answer[0])){
              if ($oneFormSamples[1]->pdt_sample_id == $answer[0]->pdt_sample_odd_id) {
                
                echo '<u style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;</u>';
              } else {
              
              echo'<u style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>';
              
              }
            }
              
          echo '</td></tr>
          <tr>
            <br>
            <td colspan="2" style="font-size: 10px; "><strong>Comments</strong>
            <br>
            '.var_dump($answer).'
            
            </td>
            
          </tr>
        ';
    
          
    echo '  </tbody>
    </table>
    <br>  
    <br>
    <br>
    <small style="text-align: right; font-size: 8px; "> ATM-004 F1
    <br>Revision 0
</small>

</body>
      </html>';

https://tcpdf.org/examples/example_048/