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
  <h2 class="text-center">List of Active Panelists <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myUserModal" >Add New
        </button></h2> 
  </div> 
 </div>
  
<table class="table table-striped table-bordered table-hover" id="esttable">
  <thead style="background-color: lightblue">
    <tr>
      <th>Panelist ID: </th>
      <th>Name: </th>
      
      <th>Unit: </th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if(isset($panelist)){
        foreach ($panelist as $key) {
    ?>
    <tr>
      <td><?php echo $key->user_id; ?></td>
      <td><?php echo $key->firstname." ".$key->lastname; ?></td>
      <td><?php echo $key->section_unit; ?></td>
      
      <td>
        <input type="hidden" id="<?php echo $key->user_id."panelStat"; ?>" name="<?php echo $key->user_id."panelStat"; ?>" value="<?php echo $key->status; ?>">
        <?php 
          if ($key->status == 1) {
            ?>
            <span data-toggle="tooltip" data-placement="top" title="Disable"  class="glyphicon glyphicon-remove-circle changeStat color" aria-hidden="true" id="<?php echo($key->user_id); ?>" style="cursor: pointer; color: red;"></span> &nbsp;    
          <?php } else {
            ?>
            <span data-toggle="tooltip" data-placement="top" title="Enable" class="glyphicon glyphicon-ok-circle changeStat color" aria-hidden="true" id="<?php echo($key->user_id); ?>" style="cursor: pointer; color: green;"></span> &nbsp;    
          <?php }
          
         ?>
        
        
        
      </td>
    </tr>

    <?php  
        }
      }

     ?>
    
  </tbody>
</table>


<div class="modal fade" id="myUserModal" tabindex="-1" role="dialog" aria-labelledby="myUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title" id="myUserModalLabel">Add New User</h4>

            </div>
            <div class="modal-body">
              
                        
              <form method="POST">
                <br>
                <input type="hidden" id="userid" name="userid" value="<?php echo $loggedinUser; ?>">
                <div class="form-group">
                  <div class="form-inline">
                    <label>Name</label>
                    <input class="form-control" name="trfno" placeholder="First Name" type="text">
                    <input class="form-control" name="trfno" placeholder="Middle Name" type="text">
                    <input class="form-control" name="trfno" placeholder="Last Name" type="text">
                  </div>  
                </div>
                
                <div class="form-group">
                  <label>Gender</label>
                  <input class="form-control" name="trfcode" placeholder="SHL-" type="text">
                </div>

                <div class="form-group">
                  <label>Contact No.</label>
                  <input class="form-control" name="trfcode" placeholder="SHL-" type  ="text">
                </div>

                <div class="form-group">
                  <label>Address</label>
                  <input class="form-control" name="trfno" placeholder="R10-2022-SHL-" type="text">
                </div>

                <div class="form-group">
                  <label>Section/Unit</label>
                  <input class="form-control" name="trfcode" placeholder="SHL-" type="text">
                </div>

                <div class="form-group">
                  <label>Access Type</label>
                  <input class="form-control" name="trfcode" placeholder="SHL-" type="text">
                </div>
               
              </div>
                <div style="text-align:  right;" class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" id="createform" class="btn btn-primary saveUser">Add User</button>
                </div>
              </form> 
                        
            </div>
        </div>
    </div>
</div>


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

      $('.changeStat').click(function(){
        
          var id = $(this).attr('id');
          var stat = $("input[name="+id+"panelStat]").val();
          var formdata = new Array(stat,id);
          console.log(formdata);
          $.ajax({
          url: 'http://'+window.location.host+'/shl/main/changePanelStat',
          type: "POST",
          data: {"data":formdata},
          success: function(data){
            $("#reloadDiv").load('http://'+window.location.host+'/shl/main/getAllPanelists');
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
                $('.alerttt').text( "Unable to change panelist status." );
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

      $('#createform').on('click',function(){
        $("#myUserModal").modal('hide');
        var userid = $("input[name=userid]").val();
        var trfno = $("input[name=trfno]").val();
        var trfcode = $("input[name=trfcode]").val();
        
        var formdata = new Array(userid,trfno,trfcode);
        console.log(userid);
        
      });
       </script>