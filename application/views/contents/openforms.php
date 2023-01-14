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
  <h2 class="text-center">List of Active Evaluations </h2> 
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
        <span data-toggle="tooltip" data-placement="top" title="Answer Evaluation" class="glyphicon glyphicon-pencil answerForm color" aria-hidden="true" id="<?php echo($key->id); ?>" style="cursor: pointer; ">Answer </span> &nbsp;
   
      </td>
    </tr>

    <?php
        }
      }

     ?>
    
  </tbody>
</table>



    <script type="text/javascript">
      $(document).ready(function(){
          $('#esttable').DataTable({
              initComplete: function () {
                  this.api().columns().every( function () {
                      var column = this;
                      var select = $('<select><option value=""></option></select>')
                          .appendTo( $(column.footer()).empty() )
                          .on( 'change', function () {
                              var val = $.fn.dataTable.util.escapeRegex(
                                  $(this).val()
                              );
       
                              column
                                  .search( val ? '^'+val+'$' : '', true, false )
                                  .draw();
                          } );
       
                      column.data().unique().sort().each( function ( d, j ) {
                          select.append( '<option value="'+d+'">'+d+'</option>' )
                      } );
                  } );
              }
          });
      });

      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
      });

      
        $('.answerForm').click(function(){
          var id = $(this).attr('id');
          console.log(id);
           $("#reloadDiv").load('http://'+window.location.host+'/shl/shlform/getOneFormSheet',{id:id});
        });

        
    
    </script>