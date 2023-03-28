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
  <h2 class="text-center">List of Created Evaluation <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myFormModal" >Add New
        </button></h2> 
  </div>
 </div>
 
<table class="table table-striped table-bordered table-hover" id="esttable">

  <thead style="background-color: lightblue">
    <tr>
      <th>Date</th>
      <th>Evaluation Type</th>
      
      <th>Product</th>
      <th>Created By</th>
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
      <td><?php echo $key->firstname." ".$key->lastname; ?></td>
      <td>
        <?php 
          if ($key->open_for_eval == 1) {
            ?>
            <span data-toggle="tooltip" data-placement="top" title="Open Evaluation" class="glyphicon glyphicon-eye-open openForm color" aria-hidden="true" id="<?php echo($key->id); ?>" style="cursor: pointer; "></span> &nbsp;    
          <?php } else {
            ?>
            <span data-toggle="tooltip" data-placement="top" title="Open Evaluation" class="glyphicon glyphicon-eye-close openForm color" aria-hidden="true" id="<?php echo($key->id); ?>" style="cursor: pointer; "></span> &nbsp;    
          <?php }
          
         ?>
        
        <span data-toggle="tooltip" data-placement="top" title="Edit Form" class="glyphicon glyphicon-pencil viewForm color" aria-hidden="true" id="<?php echo($key->id); ?>" style="cursor: pointer; "></span> &nbsp;
        <span data-toggle="tooltip" data-placement="top" title="Delete Form" class="glyphicon glyphicon-trash deleteForm color" aria-hidden="true" id="<?php echo($key->id); ?>" style="cursor: pointer; "></span>
        
<div class="modal fade <?php echo $key->id.'acdelmodal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $key->id.'t-modal'; ?> ">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Equipment</h4>
      </div>
      <div class="modal-body">
        <small>Are you sure you want to delete <?php echo $key->test_type." for ".$key->product; ?>?</small>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default modal-btn-oh" id="<?php echo $key->id.'_deleteSt' ?>">Yes</button>
        <button type="button" data-dismiss="modal" class="btn btn-primary modal-btn-di" id="<?php echo $key->id.'_deleteeSt' ?>">No</button>
      </div>
    </div>
  </div>
</div>    
      </td>
    </tr>

    <?php
        }
      }

     ?>
    
  </tbody>
</table>

<div class="modal fade" id="myFormModal" tabindex="-1" role="dialog" aria-labelledby="myACModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title" id="myACModalLabel">Add New Evaluation Form</h4>

            </div>
            <div class="modal-body">
                
                        <div role="tabpanel" class="tab-pane active" id="uploadTabAC">
                          <form method="POST">
                            <br>
                            <input type="hidden" id="user_id" name="userid" value="<?php echo $user[0]->user_id; ?>">
                            <div class="form-group">
                              <label>Evaluation Type</label>
                              <select name="type" class="form-control" id="type">
                                
                                <option value="1">Paired Difference Test</option>
                                <option value="2">Triangle Test</option>
                                
                              </select>
                            </div>

                            
                            
                            
                            <div class="form-group">
                              <label>Request Reference Number</label>
                              <input class="form-control" name="trfno" placeholder="R10-2022-SHL-" type="text">
                            </div>

                            <div class="form-group">
                              <label>Sample Code</label>
                              <input class="form-control" name="trfcode" placeholder="SHL-" type="text">
                            </div>

                           <div class="form-group">
                              <label>Sample Description</label>
                              <input class="form-control" name="samplename" placeholder="food, / beverage," type="text">
                            </div>
                          </div>
                            <div style="text-align:  right;">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="button" id="createform" class="btn btn-primary save">Create</button>
                            </div>
                          </form> 
              
              
                     </div>
                        
            </div>
        </div>
    </div>
</div>


    <script type="text/javascript">
    
      $(document).ready(function(){
          $('#esttable').DataTable({
              ordering: false,
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

      $('#createform').on('click',function(){
        $("#myFormModal").modal('hide');
        var type = $("#type").val();
        var name = $("input[name=samplename]").val();
        var userid = $("input[name=userid]").val();
        var trfno = $("input[name=trfno]").val();
        var trfcode = $("input[name=trfcode]").val();
        
        var formdata = new Array(type,name,userid,trfno,trfcode);
        console.log(formdata);
        $.ajax({
          url: 'http://'+window.location.host+'/shl/shlform/createForm',
          type: "POST",
          data: {"data":formdata},
          success: function(data){
            console.log(data);
            $("#reloadDiv").load('http://'+window.location.host+'/shl/main/getAllForms');
            var fade_in = function() {
              $("#myFormModal").modal('hide');
              $('.modal-backdrop').remove() // removes the grey overlay.

              // $(".alerttt").fadeOut().empty();
              $('.alerttt').text( data);
              $(".alerttt").show();
            }

            var fade_out = function() {
              $(".alerttt").fadeOut().empty();
              // $(".alerttt").show();
            }
            setTimeout(fade_in,500);
            setTimeout(fade_out, 3000);
        },
          error: function(){
            
            var fade_in = function() {
              // $(".alerttt").fadeOut().empty();
              $('.alerttt').text( "Unable to create new farm." );
              $(".alerttt").show();
            }

            var fade_out = function() {
              $(".alerttt").fadeOut().empty();
              
            }
            setTimeout(fade_in,500);
            setTimeout(fade_out, 3000);
          }
        });
      });



        $('.viewForm').click(function(){
          var id = $(this).attr('id');
          console.log(id);
           $("#reloadDiv").load('http://'+window.location.host+'/shl/shlform/getOneForm',{id:id});
        });

        $('.openForm').click(function(){
          var id = $(this).attr('id');
          $.ajax({
          url: 'http://'+window.location.host+'/shl/shlform/openForm',
          type: "POST",
          data: {"data":id},
          success: function(data){
            $("#reloadDiv").load('http://'+window.location.host+'/shl/main/getAllForms');
            var fade_in = function() {
                $("#myFormModal").modal('hide');
                $('.alerttt').text( data);
                $('.modal-backdrop').remove(); // removes the grey overlay.
                $('body').removeClass('modal-open');
                $(".alerttt").show();
              }

              var fade_out = function() {
                $(".alerttt").fadeOut().empty();
              }
              setTimeout(fade_in,500);
              setTimeout(fade_out, 3000);
          },
            error: function(){
              
              var fade_in = function() {
                $('.alerttt').text( "Unable to open form for evaluation." );
                $(".alerttt").show();
              }

              var fade_out = function() {
                $(".alerttt").fadeOut().empty();
              }
              setTimeout(fade_in,500);
              setTimeout(fade_out, 3000);
          }
        });
        });

          // delete act 
        $(".deleteForm").on("click", function(){
           var id = $(this).attr('id');
          $('.'+id+'acdelmodal').modal('show');
          });

        $(".modal-btn-oh").on("click", function(){
            act_id = $(this).attr("id");
            const splitString = act_id.split("_")[0];
          $('.'+splitString+'acdelmodal').modal('hide');
          console.log(splitString);
          $.ajax({
          url: 'http://'+window.location.host+'/shl/shlform/delForm',
          type: "POST",
          data: {"data":splitString},
          success: function(data){
            
            $("#reloadDiv").load('http://'+window.location.host+'/shl/main/getAllForms');
            var fade_in = function() {
                $("#myFormModal").modal('hide');
                $('.alerttt').text( data);
                $('.modal-backdrop').remove(); // removes the grey overlay.
                $('body').removeClass('modal-open');
                $(".alerttt").show();
              }

              var fade_out = function() {
                $(".alerttt").fadeOut().empty();
              }
              setTimeout(fade_in,500);
              setTimeout(fade_out, 3000);
          },
            error: function(){
              
              var fade_in = function() {
                $('.alerttt').text( "Unable to create new farm." );
                $(".alerttt").show();
              }

              var fade_out = function() {
                $(".alerttt").fadeOut().empty();
              }
              setTimeout(fade_in,500);
              setTimeout(fade_out, 3000);
          }
        });
    });
  
    
    </script>