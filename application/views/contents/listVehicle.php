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
  <h2 class="text-center">List of Vehicles <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myVehicleModal" >Add New
        </button></h2> 
  </div>
 </div>
  
<table class="table table-striped table-bordered table-hover" id="vehtable">
  <thead style="background-color: lightblue">
    <tr>
      <th>Code No.</th>
      <th>Vehicle Name</th>
      
      <th>Current Location</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if(isset($vehicle)){
        foreach ($vehicle as $key) {
    ?>
    <tr>
      <td><?php echo $key->code_no; ?></td>
      <td><?php echo $key->vehicle_name; ?></td>
      <td><?php echo $key->current_location; ?></td>
      
      <td>
        <span class="glyphicon glyphicon-eye-open viewVeh color" aria-hidden="true" id="<?php echo($key->id); ?>" style="cursor: pointer; "></span> &nbsp;
        <span class="glyphicon glyphicon-trash deleteVeh color" aria-hidden="true" id="<?php echo($key->id); ?>" style="cursor: pointer; "></span>
        <!-- Single button 
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Action <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu" id="<?php ($key->id); ?>" >
            <li><a class="viewAC">View</a></li>
            <li><a  class="deleteAC">Delete</a></li>
          </ul>
        </div>-->
<div class="modal fade <?php echo $key->id.'vehdelmodal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $key->id.'t-modal'; ?> ">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Vehicle</h4>
      </div>
      <div class="modal-body">
        <small>Are you sure you want to delete <?php echo $key->vehicle_name; ?>?</small>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default vehdelyes" id="<?php echo $key->id.'_deleteVeh' ?>">Yes</button>
        <button type="button" class="btn btn-primary vehdelno" id="<?php echo $key->id.'_deleteeVeh' ?>">No</button>
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

<div class="modal fade" id="myVehicleModal" tabindex="-1" role="dialog" aria-labelledby="myACModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title" id="myACModalLabel">Add New Vehicle</h4>

            </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#uploadTabAC" aria-controls="uploadTab" role="tab" data-toggle="tab">Vehicle</a>

                        </li>
                        <!--<li role="presentation"><a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab">Tourist Spot</a>

                        </li>-->
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="uploadTabAC">
                          <form method="POST">
                            <br>
                            <div class="form-group">
                              <label>Vehicle Code</label>
                              <input class="form-control" name="vehcode" placeholder="Vehicle Code" type="text">
                            </div>
                            
                            <div class="form-group">
                              <label>Vehicle Name</label>
                              <input class="form-control" name="vehname" placeholder="Vehicle Name" type="text">
                            </div>
                            <div class="form-group">
                              <label>Manufacturer</label>
                              <input class="form-control" name="vehmanufacturer" placeholder="Manufacturer" type="text">
                              
                            </div>
                            <div class="form-group"> 
                              <label>Type/Model No.</label>
                              <input class="form-control" name="vehtypemodel" placeholder="Type/Model No." type="text">
                            </div>
                            <div class="form-group">
                              <label>Serial No.</label>
                              <input class="form-control" name="vehsn" placeholder="Serial No." type="text">
                            </div>
                            <div class="form-group">
                              <label>Current Location</label>
                              <input class="form-control" name="vehloc" placeholder="Current Location" type="text">
                            </div>
                           
                          </div>
                            <div style="text-align:  right;">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="button" id="createveh" class="btn btn-primary save">Create</button>
                            </div>
                          </form> 
              
              
                     </div>
                        
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <script type="text/javascript">

      $(document).ready(function(){
          $('#vehtable').DataTable({
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

      $('#createveh').on('click',function(){
        $("#myVehicleModal").modal('hide');
        var code = $("input[name=vehcode]").val();
        var name = $("input[name=vehname]").val();
        var mfg = $("input[name=vehmanufacturer]").val();
        var model = $("input[name=vehtypemodel]").val();
        var sn = $("input[name=vehsn]").val();
        var loc = $("input[name=vehloc]").val();
        
        var vehdata = new Array(code,name,mfg,model,sn,loc);
        
        $.ajax({
          url: 'http://'+window.location.host+'/rstl_pm/vehicle/addVehicle',
          type: "POST",
          data: {"data":vehdata},
          success: function(data){
            console.log(data);
            $("#reloadDiv").load('http://'+window.location.host+'/rstl_pm/main/getVehicle');
            var fade_in = function() {
              $("#myVehicleModal").modal('hide');
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
              $('.alerttt').text( "Unable to create new vehicle." );
              $(".alerttt").show();
            }

            var fade_out = function() {
              $(".alerttt").fadeOut().empty();
              // $(".alerttt").show();
            }
            setTimeout(fade_in,500);
            setTimeout(fade_out, 3000);
          }
        });
      });

        $('.viewVeh').click(function(){
          var id = $(this).attr('id');
          console.log(id);
           $("#reloadDiv").load('http://'+window.location.host+'/rstl_pm/vehicle/getOneVehicle',{id:id});
            
        });

         // delete act 
        $(".deleteVeh").on("click", function(){
           var id = $(this).attr('id');
           //console.log("try");
           //console.log(id);
          $('.'+id+'vehdelmodal').modal('show');
          // alerttt('#'+id+'t-modal');
        });

        $(".vehdelyes").on("click", function(){
            act_id = $(this).attr("id");
            const splitString = act_id.split("_")[0];
            // var st_id = $("input[name=sidetrip_id]").val();
            // var delact = new Array(splitString,id);
          $('.'+splitString+'vehdelmodal').modal('hide');
          console.log(splitString);
          $.ajax({
          url: 'http://'+window.location.host+'/rstl_pm/vehicle/delVehicle',
          type: "POST",
          data: {"data":splitString},
          success: function(data){
            //alert(data);
            $("#reloadDiv").load('http://'+window.location.host+'/rstl_pm/main/getVehicle');
            var fade_in = function() {
                $("#myACModal").modal('hide');
                

                // $(".alerttt").fadeOut().empty();
                $('.alerttt').text( data);
                $('.modal-backdrop').remove(); // removes the grey overlay.
                $('body').removeClass('modal-open');
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
                $('.alerttt').text( "Unable to delete vehicle." );
                $(".alerttt").show();
              }

              var fade_out = function() {
                $(".alerttt").fadeOut().empty();
                // $(".alerttt").show();
              }
              setTimeout(fade_in,500);
              setTimeout(fade_out, 3000);
          }
        });
    });
  
  $(".vehdelno").on("click", function(){
     act_id = $(this).attr("id");
     const splitString = act_id.split("_")[0];
  
    $('.'+splitString+'vehdelmodal').modal('hide');
  }); //delete act

      
    </script>
