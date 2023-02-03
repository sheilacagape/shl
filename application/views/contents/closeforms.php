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
            <span data-toggle="tooltip" data-placement="top" title="View Answer" class="glyphicon glyphicon-eye-open viewFormPanel color" aria-hidden="true" id="<?php echo($key->id); ?>" style="cursor: pointer; "></span> &nbsp;
            <?php
          } else {
            ?>
            <span data-toggle="tooltip" data-placement="top" title="View Answer" class="glyphicon glyphicon-eye-open viewFormPanel color" aria-hidden="true" id="<?php echo($key->id); ?>" style="cursor: pointer; "></span> &nbsp;
            
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
      $('.viewFormPanel').click(function(){
          var id = $(this).attr('id');
          console.log(id);
           $("#reloadDiv").load('http://'+window.location.host+'/shl/shlform/getOneFormSheet',{id:id});
        });
    
    </script>