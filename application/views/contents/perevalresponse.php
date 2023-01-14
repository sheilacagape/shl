

  <style type="text/css">
   .color:hover{
    color:blue;
   }
 </style>

<?php 
  if (isset($pdtanswers)) {
    
    ?>
<div class="row col-md-12 text-center " style="text-align:center">

  <input type="hidden" id="<?php echo $id; ?>" name="formid" value="<?php echo $id; ?>">
  <input type="hidden" id="<?php echo $ftid; ?>" name="formtypeid" value="<?php echo $ftid; ?>">
  <div class="row col-md-12">
  <p id="demo"></p>
  <h3 class="text-center">DEPARTMENT OF SCIENCE AND TECHNOLOGY</h3>
  <h4 class="text-center">Regional Office No. X</h4>
  <hr>  
  <h3 class="text-center">Responses for <strong><u><?php echo $pdtanswers[0]->product; ?></u></strong></h3> 
  <h4 class="text-center">(Paired-Difference Test)</h4> 
  </div>
 </div>
  
<table class="table table-striped table-bordered table-hover" id="esttable">
  <thead style="background-color: lightblue">
    <tr>
      <th>Panelist ID: </th>
      <th>Name: </th>
      
      <th>Date Answered: </th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if(isset($pdtanswers)){
        foreach ($pdtanswers as $key) {
    ?>
    <tr>
      <td><?php echo $key->user_id; ?></td>
      <td><?php echo $key->firstname." ".$key->lastname; ?></td>
      <td><?php echo $key->date_answered; ?></td>
      
      <td>
        <input type="hidden" id="<?php echo $key->pda_id."pdtuser"; ?>" name="<?php echo $key->pda_id."pdtuser"; ?>" value="<?php echo $key->user_id; ?>">
        
         <a target="_blank" href="<?= base_url('shlform/printresponse?t_id='.$key->pda_id.'&ftid='.$ftid.'&formid='.$id) ;?>" >PRINT <span data-toggle="tooltip" data-placement="top" title="Print Response"  class="glyphicon glyphicon-print printresponse color" aria-hidden="true" id="<?php echo($key->pda_id); ?>" style="cursor: pointer; color: green;"></span> &nbsp; </span></a>
      </td>
    </tr>

    <?php
        }
      }

     ?>
    
  </tbody>
</table>
    <?php
  } 
  
 ?>


 <?php 
  if (isset($ttanswers)) {


  ?>
<div class="row col-md-12 text-center " style="text-align:center">
  <div class="row col-md-12">
  <p id="demo"></p>
  <h3 class="text-center">DEPARTMENT OF SCIENCE AND TECHNOLOGY</h3>
  <h4 class="text-center">Regional Office No. X</h4>
  <hr>  
  <h3 class="text-center">Responses for <strong><u><?php echo $ttanswers[0]->product; ?></u></strong></h3> 
  <h4 class="text-center">(Triangle Test)</h4> 
  </div>
 </div>
  

<table class="table table-striped table-bordered table-hover" id="esttable">
  <thead style="background-color: lightblue">
    <tr>
      <th>Count </th>
      <th>Name </th>
      
      <th>Date Answered </th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if(isset($ttanswers)){

        for ($i=0; $i < count($ttanswers); $i++) {
    ?>
    <tr>
      <td><?php echo $i+1; ?></td>
      <td><?php echo $ttanswers[$i]->firstname." ".$ttanswers[$i]->lastname; ?></td>
      <td><?php echo $ttanswers[$i]->date_answered; ?></td>
      
      <td>
        
        <input type="hidden" id="<?php echo $ttanswers[$i]->tta_id."ttuser"; ?>" name="<?php echo $ttanswers[$i]->tta_id."ttuser"; ?>" value="<?php echo $ttanswers[$i]->user_id; ?>">
        <a target="_blank" href="<?= base_url('shlform/printresponse?t_id='.$ttanswers[$i]->tta_id.'&ftid='.$ftid.'&formid='.$id) ;?>" >PRINT <span data-toggle="tooltip" data-placement="top" title="Print Response"  class="glyphicon glyphicon-print printresponse color" aria-hidden="true" id="<?php echo($ttanswers[$i]->tta_id); ?>" style="cursor: pointer; color: green;"></span> &nbsp; </span></a>

        
      </td>
    </tr>

    <?php
        }
      }

     ?>
    
  </tbody>
</table>
    <?php

  } 
  
 ?>
 
 <script type="text/javascript">
    $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
      });

   
 </script>