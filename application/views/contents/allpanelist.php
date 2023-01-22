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
  
  </div> 
 </div>
  



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
                    <input class="form-control" name="fname" placeholder="First Name" type="text">
                    <input class="form-control" name="mname" placeholder="Middle Name" type="text">
                    <input class="form-control" name="lname" placeholder="Last Name" type="text">
                  </div>  
                </div>
                
                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" name="uname" placeholder="Username" type  ="text">
                </div>

                <div class="form-group">
                  <label>Gender</label>
                  <select name="gender" class="form-control" id="gender">
                    
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    
                  </select>
                </div>

                <div class="form-group">
                  <label>Contact No.</label>
                  <input class="form-control" name="contactno" placeholder="09xxxxxxxxx" type  ="tel">
                </div>

                <div class="form-group">
                  <label>Address</label>
                  <input class="form-control" name="address" placeholder="Barangay, City, Province" type="text">
                </div>

                <div class="form-group">
                  <label>Section/Unit</label>
                  <input class="form-control" name="unit" placeholder="TSD, FASD, ORD" type="text">
                </div>

                <div class="form-group">
                  <label>Access Type</label>
                  <select name="accesstype" class="form-control" id="accesstype">
                    <option value="1">Panelist</option>
                    <option value="0">Analyst</option>
                    
                    
                  </select>
                </div>
               
              </div>
                <div style="text-align:  right;" class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" id="createuser" class="btn btn-primary saveUser">Add User</button>
                </div>
              </form> 
                        
            </div>
        </div>
    </div>
</div>

<div class="container row col-md-12">
  <div class="page-header">
    <h2 class="text-center">List of System Users <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myUserModal" >Add New
        </button></h2> 
  </div>
  <div class="panel panel-default">
    <div class="panel-heading panel-heading-nav">
      <ul class="nav nav-tabs">
        <li role="presentation" class="active">
          <a href="#one" aria-controls="one" role="tab" data-toggle="tab">Panelists</a>
        </li>
        <li role="presentation">
          <a href="#two" aria-controls="two" role="tab" data-toggle="tab">Analysts</a>
        </li>
      </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="one">
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
                  <span data-toggle="tooltip" data-placement="top" title="Edit User Details" class="glyphicon glyphicon-pencil editUserDets color" aria-hidden="true" id="<?php echo($key->user_id); ?>" style="cursor: pointer; "></span>
                  
                  <div class="modal fade <?php echo $key->user_id.'updateusermodal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $key->user_id.'updateuser-modal'; ?> ">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Update User Details</h4>
                        </div>
                        <div class="modal-body">
                          <form method="POST">
                              <div class="form-group">
                                <div class="form-inline">
                                  <label>Name</label>
                                  <input class="form-control" name="<?php echo($key->user_id.'fname'); ?>" placeholder="First Name" value="<?php echo $key->firstname; ?>" type="text">
                                  <input class="form-control" name="<?php echo($key->user_id.'mname'); ?>" placeholder="Middle Name" value="<?php echo $key->middlename; ?>" type="text">
                                  <input class="form-control" name="<?php echo($key->user_id.'lname'); ?>" placeholder="Last Name" value="<?php echo $key->lastname; ?>" type="text">
                                </div>  
                              </div>
                              
                              <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="<?php echo($key->user_id.'uname'); ?>" placeholder="Username" value="<?php echo $key->username; ?>" type  ="text">
                              </div>

                              <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control" id="<?php echo($key->user_id.'gender'); ?>">
                                  
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                  
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Contact No.</label>
                                <input class="form-control" name="<?php echo($key->user_id.'contactno'); ?>" placeholder="09xxxxxxxxx" value="<?php echo $key->contact_number; ?>" type  ="tel">
                              </div>

                              <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="<?php echo($key->user_id.'address'); ?>" placeholder="Barangay, City, Province" value="<?php echo $key->address; ?>" type="text">
                              </div>

                              <div class="form-group">
                                <label>Section/Unit</label>
                                <input class="form-control" name="<?php echo($key->user_id.'unit'); ?>" placeholder="TSD, FASD, ORD" value="<?php echo $key->section_unit; ?>" type="text">
                              </div>

                              <div class="form-group">
                                <label>Access Type</label>
                                <select name="accesstype" class="form-control" id="<?php echo($key->user_id.'accesstype'); ?>">
                                  <option value="1">Panelist</option>
                                  <option value="0">Analyst</option>
                                  
                                </select>
                              </div>
                            </form> 
                        </div>
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default updateUserYes" id="<?php echo $key->user_id.'_updateUserYes' ?>">Update</button>
                          <button type="button" data-dismiss="modal" class="btn btn-primary modal-btn-di" id="<?php echo $key->user_id.'_updateUserNo' ?>">Cancel</button>
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
        </div>
        <div role="tabpanel" class="tab-pane fade" id="two">
            <table class="table table-striped table-bordered table-hover" id="analysttable">
            <thead style="background-color: lightblue">
              <tr>
                <th>Analyst ID: </th>
                <th>Name: </th>
                
                <th>Unit: </th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                if(isset($analyst)){
                  foreach ($analyst as $key) {
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
                  <span data-toggle="tooltip" data-placement="top" title="Edit User Details" class="glyphicon glyphicon-pencil editUserDets color" aria-hidden="true" id="<?php echo($key->user_id); ?>" style="cursor: pointer; "></span>
                  
                  <div class="modal fade <?php echo $key->user_id.'updateusermodal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $key->user_id.'updateuser-modal'; ?> ">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Update User Details</h4>
                        </div>
                        <div class="modal-body">
                          <form method="POST">
                              <div class="form-group">
                                <div class="form-inline">
                                  <label>Name</label>
                                  <input class="form-control" name="<?php echo($key->user_id.'fname'); ?>" placeholder="First Name" value="<?php echo $key->firstname; ?>" type="text">
                                  <input class="form-control" name="<?php echo($key->user_id.'mname'); ?>" placeholder="Middle Name" value="<?php echo $key->middlename; ?>" type="text">
                                  <input class="form-control" name="<?php echo($key->user_id.'lname'); ?>" placeholder="Last Name" value="<?php echo $key->lastname; ?>" type="text">
                                </div>  
                              </div>
                              
                              <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="<?php echo($key->user_id.'uname'); ?>" placeholder="Username" value="<?php echo $key->username; ?>" type  ="text">
                              </div>

                              <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control" id="<?php echo($key->user_id.'gender'); ?>">
                                  
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                  
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Contact No.</label>
                                <input class="form-control" name="<?php echo($key->user_id.'contactno'); ?>" placeholder="09xxxxxxxxx" value="<?php echo $key->contact_number; ?>" type  ="tel">
                              </div>

                              <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="<?php echo($key->user_id.'address'); ?>" placeholder="Barangay, City, Province" value="<?php echo $key->address; ?>" type="text">
                              </div>

                              <div class="form-group">
                                <label>Section/Unit</label>
                                <input class="form-control" name="<?php echo($key->user_id.'unit'); ?>" placeholder="TSD, FASD, ORD" value="<?php echo $key->section_unit; ?>" type="text">
                              </div>

                              <div class="form-group">
                                <label>Access Type</label>
                                <select name="accesstype" class="form-control" id="<?php echo($key->user_id.'accesstype'); ?>">
                                  <option value="1">Panelist</option>
                                  <option value="0">Analyst</option>
                                  
                                </select>
                              </div>
                            </form> 
                        </div>
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default updateUserYes" id="<?php echo $key->user_id.'_updateUserYes' ?>">Update</button>
                          <button type="button" data-dismiss="modal" class="btn btn-primary modal-btn-di" id="<?php echo $key->user_id.'_updateUserNo' ?>">Cancel</button>
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
        </div>
        
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
          $('#analysttable').DataTable({
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

      $(".editUserDets").on("click", function(){
         var id = $(this).attr('id');
        $('.'+id+'updateusermodal').modal('show');
        });

      $(".updateUserYes").on("click", function(){
            act_id = $(this).attr("id");
          const splitString = act_id.split("_")[0]; 
          $('.'+splitString+'updateusermodal').modal('hide');
          console.log(act_id);

          var fname = $("input[name="+splitString+"fname]").val();
          var mname = $("input[name="+splitString+"mname]").val();
          var lname = $("input[name="+splitString+"lname]").val();
          var uname = $("input[name="+splitString+"uname]").val();
          var contactno = $("input[name="+splitString+"contactno]").val();
          var address = $("input[name="+splitString+"address]").val();
          var unit = $("input[name="+splitString+"unit]").val();
          var gender = $("#"+splitString+"gender").val();
          var accesstype = $("#"+splitString+"accesstype").val();
                                      
          var formdata = new Array(splitString, fname, mname, lname, uname, contactno, address, unit, gender, accesstype);
          console.log(formdata);

          $.ajax({
          url: 'http://'+window.location.host+'/shl/main/updateUserDetails',
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
                $('.alerttt').text( "Unable to update user details." );
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

      $('#createuser').on('click',function(){
        $("#myUserModal").modal('hide');
        var fname = $("input[name=fname]").val();
        var mname = $("input[name=mname]").val();
        var lname = $("input[name=lname]").val();
        var uname = $("input[name=uname]").val();
        var contactno = $("input[name=contactno]").val();
        var address = $("input[name=address]").val();
        var unit = $("input[name=unit]").val();
        var gender = $("#gender").val();
        var accesstype = $("#accesstype").val();
                                    
        var formdata = new Array(fname, mname, lname, uname, contactno, address, unit, gender, accesstype);
        console.log(formdata);
        
        $.ajax({
          url: 'http://'+window.location.host+'/shl/main/addUser',
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
                $('.alerttt').text( "Unable to add new user." );
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