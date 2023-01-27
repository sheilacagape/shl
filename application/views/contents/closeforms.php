 <style type="text/css">
   .color:hover{
    color:blue;
   }
 </style>

 <div class="row col-md-12 text-center " style="text-align:center">
  <div class="row col-md-12">
  <p id="demo"></p>
  <h3 class="text-center">DEPARTMENT OF SCIENCE AND TECHNOLOGY</h3>
  <h4 class="text-center">Regional Office No. X</h4>
  <hr>  
  <h2 class="text-center">List of Submitted Evaluations </h2> 
  </div>
 </div>
  
<table class="table table-striped table-bordered table-hover" id="esttable">
  <thead style="background-color: lightblue">
    <tr>
      <th>Date</th>
      <th>Evaluation Type</th>
      
      <th>Product</th>
      
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if(isset($forms)){
        foreach ($forms as $key) {
    ?>
    <tr>
      <td><?php echo $key->date_created; ?></td>
      <td><?php echo $key->test_type; ?></td>
      <td><?php echo $key->product; ?></td>
      
      <td>
        <?php 
          if ($key->fid == 1) {
            ?>
            <a target="_blank" href="<?= base_url('shlform/printpanelresponse?t_id='.$key->pda_id.'&ftid='.$key->fid.'&formid='.$key->id.'&userid='.$user[0]->user_id) ;?>" >VIEW <span data-toggle="tooltip" data-placement="top" title="Print Response"  class="glyphicon glyphicon-print printresponse color" aria-hidden="true" id="<?php echo($key->pda_id); ?>" style="cursor: pointer; color: green;"></span> &nbsp; </span></a>
            <?php
          } else {
            ?>
            <a target="_blank" href="<?= base_url('shlform/printpanelresponse?t_id='.$key->pda_id.'&ftid='.$key->fid.'&formid='.$key->id) ;?>" >VIEW <span data-toggle="tooltip" data-placement="top" title="Print Response"  class="glyphicon glyphicon-print printresponse color" aria-hidden="true" id="<?php echo($key->pda_id); ?>" style="cursor: pointer; color: green;"></span> &nbsp; </span></a>
            <?php
          }
          
         ?>
        
      </td>
    </tr>

    <?php
        }
      }

     ?>
    
  </tbody>
</table>



    <script type="text/javascript">
    
    </script>