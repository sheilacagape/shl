<style type="text/css">
 #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

    

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

	.popup-overlay {
visibility:hidden;
}

.popup-content {
visibility:hidden;
}

.popup-overlay.active{
visibility:visible;
}

.popup-content.active {
visibility:visible;
}

.logo {
  opacity: 1;
 /* display: block;
  width: 100%;
  height: auto;*/
  transition: .5s ease;
  backface-visibility: hidden;
}

.middlee {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.contain:hover .logo {
  opacity: 0.7;
}

.contain:hover .middlee {
  opacity: 1;
}

.textt {
  background-color: #eae7e6;
  color: black;
  font-size: 16px;
  padding: 13px 20px;
  border-radius: 50px;
}

</style>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fancybox/jquery.fancybox.css');?>">
<script async defer src="<?= base_url('assets/fancybox/jquery.fancybox.js');?>"></script>
<!-- 
	<div class="col-md-12">
		<div class="col-md-2 contain">

			<img class="logo" src="<?php if(count($logo)>0){ echo $logo[0]->photo_path;}else { echo("No logo");}  ?>" style="width: 150px;height: 150px; margin-top: 10px; margin-bottom: 30px;">
<div style="float: right;">
	<button class="btn btn-secondary btn-sm " id="covCancel" style="display: none;">
	<span class="glyphicon glyphicon-remove" ></span>
	</button>
	<button class="btn btn-primary btn-sm" id="covSave" style="display: none;">
	<span class="glyphicon glyphicon-ok" ></span>
	</button>
</div>

<div class="col-md-12" id="updateCov"></div>

<input type="file" id="file" style="display: none;">
<div class="middlee">
	<div class="textt"><span id="cover" class="glyphicon glyphicon-camera" ></span>	</div>
</div>			
	
		</div>-->	
		<div class="col-md-12">
			<div class="well editDetails"  style="display: none;" >
			<form method="POST">
				<input type="hidden" id="farm_id" name="id" value="<?php echo $farmdetails[0]->id; ?>">
		
				<button style="float: right;" class="saveeditfarm btn btn-primary btn-sm">Done</button>
				<button style="float: right; margin-right: 10px;" class="canceleditfarm btn btn-default btn-sm">Cancel</button>
				<br>
				<div class="form-group">
					<label>Equipment Code</label>
					<input class="form-control" name="eecode" placeholder="Equipment Code" type="text" value="<?php echo $farmdetails[0]->code_no; ?>">
				</div>
				
				<div class="form-group">
					<label>Equipment Name</label>
					<input class="form-control" name="eename" placeholder="Equipment Name" type="text" value="<?php echo $farmdetails[0]->equipment_name; ?>">
				</div>
				<div class="form-group">
					<label>Manufacturer</label>
					<input class="form-control" name="emanufacturer" placeholder="Manufacturer" type="text" value="<?php echo $farmdetails[0]->manufacturer; ?>">
					
				</div>
				<div class="form-group"> 
					<label>Type/Model No.</label>
					<input class="form-control" name="etypemodel" placeholder="Type/Model No." type="text" value="<?php echo $farmdetails[0]->type_model_no; ?>">
				</div> 
				<div class="form-group">
					<label>Serial No.</label>
					<input class="form-control" name="esn" placeholder="Serial No." type="text" value="<?php echo $farmdetails[0]->serial_no; ?>">
				</div>
				<div class="form-group">
					<label>Name of Software</label>
					<input class="form-control" name="esoftwarename" placeholder="Name of Software" type="text" value="<?php echo $farmdetails[0]->software_name; ?>">
				</div>
				<div class="form-group">
					<label>Current Location</label>
					<input class="form-control" name="eloc" placeholder="Current Location" type="text" value="<?php echo $farmdetails[0]->current_location; ?>">
				</div>
				<div class="form-group">
					<label>Date Received/Placed in Service</label>
					<input class="form-control" name="epdate" placeholder="Date Received/Placed in Service" type="date" value="<?php echo $farmdetails[0]->placement_date; ?>">
				</div>
				<div class="form-group">
					<label>Condition when received</label>
					<input class="form-control" name="econdrec" placeholder="Condition when received" type="text" value="<?php echo $farmdetails[0]->received_condition; ?>">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input class="form-control" name="eprice" placeholder="Price" type="number" value="<?php echo $farmdetails[0]->price; ?>">
				</div>
				<div class="form-group">
					<label>Copy of Manufacturer's Instructions</label>
					<input class="form-control" name="emfgmanual" placeholder="Copy of Manufacturer's Instructions" type="text" value="<?php echo $farmdetails[0]->mfg_instructions; ?>">
				</div>
				<div class="form-group">
					<label>Other Specifications</label>
					<input class="form-control" name="especs" placeholder="Other Specifications" type="text" value="<?php echo $farmdetails[0]->other_specifications; ?>">
				</div>
				<div class="form-group">
					<label>Remarks</label>
					<input class="form-control" name="eremarks" placeholder="Remarks" type="text" value="<?php echo $farmdetails[0]->remarks; ?>">
				</div>
				
			</form>	
			</div>
			

			<h2 class="displayinfo text-center"><?php echo $farmdetails[0]->equipment_name; ?> <button class="editfarmdetails btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></h2>
 
 

			<table class="displayinfo table">
				<tr>
					<td>Code Number:</td>
					<td><?php echo $farmdetails[0]->code_no; ?></td>
				</tr>
				<tr>
					<td>Type/Model No:</td>
					<td><?php echo $farmdetails[0]->type_model_no; ?></td>
				</tr>
				<tr>
					<td>Serial No.:</td>
					<td><?php echo $farmdetails[0]->serial_no; ?></td>
				</tr>
				<tr>
					<td>Name of Software, if any:</td>
					<td><?php echo $farmdetails[0]->software_name; ?></td>
				</tr>
				<tr>
					<td>Current Location:</td>
					<td><?php echo $farmdetails[0]->current_location; ?></td>
				</tr>
				<tr>
					<td>Date Received/Placed in Service:</td>
					<td> <?php echo $farmdetails[0]->placement_date; ?></td>
				</tr>
				<tr>
					<td>Condition when received:</td>
					<td> <?php echo $farmdetails[0]->received_condition; ?></td>
				</tr>
				<tr>
					<td>Price:</td>
					<td> <?php echo $farmdetails[0]->price; ?></td>
				</tr>
				<tr>
					<td>Copy of Manufacturer's Instructions:</td>
					<td> <?php echo $farmdetails[0]->mfg_instructions; ?></td>
				</tr>
				<tr>
					<td>Other Specifications:</td>
					<td> <?php echo $farmdetails[0]->other_specifications; ?></td>
				</tr>
				<tr>
					<td>Remarks:</td>
					<td> <?php echo $farmdetails[0]->remarks; ?></td>
				</tr>
			</table>
		</div>

		<div class="col-md-6">
			<h4 class="displayinfo text-center">Equipment Calibration Program <button class="addcalibprog btn btn-primary btn-sm" data-toggle="modal" data-target="#calibProg"><span class="glyphicon glyphicon-plus"></span></button></h4>
 
			<table class="displaymaintprog table">
				<thead>
					<th>Calibration Requirement</th>
					<th>Measurement Unit</th>
					<th>Frequency</th>
				</thead>
				<?php 
					if(isset($calibprog)){
						foreach ($calibprog as $key) {
					?>	
				<tr>
					<td><?php echo $key->calib_req; ?></td>
					<td><?php echo $key->measurement_unit; ?></td>
					<td><?php echo $key->frequency; ?></td>
				</tr>
				<?php		# code...
							}
						}
					 ?>
			</table>
		</div>

<div class="modal fade" id="calibProg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title" id="myModalLabel">Add Equipment Calibration Program</h4>

            </div>
            <div class="modal-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="uploadTab">
                        	<form method="POST">
								<br>
								<div class="form-group">
									<label>Calibration Requirement</label>
									<select class="form-control" name="calreq" id="calreq">
									    	<option value="1">Volume Accuracy</option>
											<option value="2">Temperature accuracy and stability</option>
											<option value="3">Pressure accuracy and stability</option>
											<option value="4">Mass accuracy</option>
											<option value="5">Hardness Value</option>
											<option value="6">Hardness Value</option>
											<option value="7">Length accuracy</option>
											<option value="8">Reading accuracy</option>
											<option value="9">Reading precision and accuracy</option>
									</select>
								</div>
								
								<div class="form-group">
									<label>Measurement Unit</label>
									<input disabled class="form-control" name="calunit" type="text">
								</div>
								<div class="form-group">
									<label>Frequency</label>
									
									<select class="form-control" name="calfreq" id="calfreq">
									    	<option value="1">As needed</option>
											<option value="2">Before and After Use</option>
											<option value="3">Bi-monthly</option>
											<option value="4">Monthly</option>
											<option value="5">Every 4 months</option>
											<option value="6">Bi-annual</option>
											<option value="7">Annually</option>
											<option value="8">Every 2 years</option>
											<option value="10">Every 3 years</option>
									</select>
								</div>
								
								<div style="text-align:  right;">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                				<button type="button" id="createfarm" class="btn btn-primary save">Add</button>
								</div>
							</form>	
							
							
                        </div>
                        
                    </div>
                
            </div>
        </div>
    </div>
</div>

		<div class="col-md-6">
			<h4 class="displayinfo text-center">Equipment Maintenance Program <button class="addmaintprog btn btn-primary btn-sm" data-toggle="modal" data-target="#maintProg"><span class="glyphicon glyphicon-plus"></span></button></h4>
 
			<table class="displaymaintprog table">
				<thead>
					<th>Type of Maintenance</th>
					
					<th>Frequency</th>
				</thead>
				<?php 
					if(isset($maintprog)){
						foreach ($maintprog as $key) {
					?>	
				<tr>
					<td><?php echo $key->maintenance_type; ?></td>
					
					<td><?php echo $key->frequency; ?></td>
				</tr>
				<?php		# code...
							}
						}
					 ?>
			</table>
		</div>

<div class="modal fade" id="maintProg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title" id="myModalLabel">Add Equipment Maintenance Program</h4>

            </div>
            <div class="modal-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="uploadTab">
                        	<form method="POST">
								<br>
								<div class="form-group">
									<label>Type of Maintenance</label>
									<select class="form-control" name="maintreq" id="maintreq">
									    	<option value="1">External Cleaning</option>
											<option value="2">Internal Cleaning</option>
											<option value="3">External and Internal Cleaning</option>
											<option value="4">Corrective Maintenance</option>
											<option value="5">Preventive Maintenance</option>
											<option value="6">Preventive and Corrective Maintenance</option>
											<option value="7">Cleaning</option>

									</select>
								</div>
								
								<div class="form-group">
									<label>Frequency</label>
									<select class="form-control" name="maintfreq" id="maintfreq">
									    	<option value="1">As needed</option>
											<option value="2">Before and After Use</option>
											<option value="3">Bi-monthly</option>
											<option value="4">Monthly</option>
											<option value="5">Every 4 months</option>
											<option value="6">Bi-annual</option>
											<option value="7">Annually</option>
											<option value="8">Every 2 years</option>
											<option value="10">Every 3 years</option>

									    
									  </select>
								</div>
								</div>
								
								<div style="text-align:  right;">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                				<button type="button" id="createfarm" class="btn btn-primary save">Add</button>
								</div>
							</form>	
							
							
                        </div>
                        
                    </div>
                
            </div>
        </div>
    </div>
</div>	
	

	<div class="alert" style="text-align: center; color: white; position:fixed;top:50%;left:50%;width:500px;height:50px;margin-left:-250px;margin-top:-25px;opacity: 0.7; background-color: gray;display: none;"></div>

	<script async defer type="text/javascript">

		$('.editcategory').on('click',function(){
			$('.showcateg').hide();
			$('.editcateg').show();
			$('.editcategory').hide();
			$('.savecateg').show();
			$('.cancelcateg').show();
		});

		$('.cancelcateg').on('click',function(){
			$('.showcateg').show();
			$('.editcateg').hide();
			$('.editcategory').show();
			$('.savecateg').hide();
			$('.cancelcateg').hide();
		});

		$('.calreq').on('onchange',function(){

			var calreqval = $("input[name=calreq]").val();
			console.log(calreqval);
			if (calreqval=="1") {
				$("input[name=calunit]").val() = "Volume";
			}
			
		});

		

		$('.savecateg').on('click',function(){
			$('.showcateg').show();
			$('.editcateg').hide();
			$('.editcategory').show();
			$('.savecateg').hide();
			$('.cancelcateg').hide();

			// console.log($('#'+8+'_type'));
			// $('input[name=i+"_type"]:checked')
			var total = $("input[name=totaltypes]").val();
			var select = new Array();
			for (var i = 1; i <= parseInt(total); i++) {
				if($('#'+i+'_type').prop("checked")){
					select.push(i);
				}
			}
			var id = $("input[name=farm_id]").val();

			var send = new Array(select,id);

			
			$.ajax({
					url: "http://"+window.location.host+"/rstl_pm/main/updateFarmType",
					type: "POST",
					data: {"data":send},
					success: function(data){ 
						// alert(data);
						$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneFarm",{id:id});
						var fade_in = function() {
							  $('.alert').text( data );
							  $(".alert").show();
							}

							var fade_out = function() {
							  $(".alert").fadeOut().empty();
							}
							setTimeout(fade_in,500);
							setTimeout(fade_out, 3000);
					},
						error: function(){
							
							var fade_in = function() {
							  $('.alert').text( "Unable to update farm types." );
							  $(".alert").show();
							}

							var fade_out = function() {
							  $(".alert").fadeOut().empty();
							}
							setTimeout(fade_in,500);
							setTimeout(fade_out, 3000);
						}
				});
		});
			

		$('.edituser').on('click',function(){
			$('.formedituser').show();
			$('.displayuser').hide();
			$('.edituser').hide();
			$('.accountdetails').hide();
			$('.editaccountdetails').show();
		});

		$('#Canceledituser').on('click',function(){
			$('.formedituser').hide();
			$('.displayuser').show();
			$('.edituser').show();
			$('.accountdetails').show();
			$('.editaccountdetails').hide();
		});

		$('#Saveedituser').on('click',function(){
			var fname = $("input[name=fname]").val();
			var mname = $("input[name=mname]").val();
			var lname = $("input[name=lname]").val();
			var uname = $("input[name=uname]").val();
			var password = $("input[name=password]").val();
			var cpassword = $("input[name=cpassword]").val();
			var user = $("input[name=userid]").val();
			var id = $("input[name=farm_id]").val();
			var userdet = new Array(fname, mname,lname,uname,password,user);
			// alert(user);
			if (password==cpassword) {
				console.log('oki');
				$.ajax({
					url: "http://"+window.location.host+"/rstl_pm/main/updateUser",
					type: "POST",
					data: {"data":userdet},
					success: function(data){
						
						// alert(data);
						// alert(data);
						$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneFarm",{id:id});
						var fade_in = function() {
							  // $(".alert").fadeOut().empty();
							  $('.alert').text( data );
							  $(".alert").show();
							}

							var fade_out = function() {
							  $(".alert").fadeOut().empty();
							  // $(".alert").show();
							}
							setTimeout(fade_in,500);
							setTimeout(fade_out, 3000);
					},
						error: function(){
							
							var fade_in = function() {
							  // $(".alert").fadeOut().empty();
							  $('.alert').text( "Unable edit account details." );
							  $(".alert").show();
							}

							var fade_out = function() {
							  $(".alert").fadeOut().empty();
							  // $(".alert").show();
							}
							setTimeout(fade_in,500);
							setTimeout(fade_out, 3000);
						}
				});
			} else{
				console.log('no');
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Password mismatched." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
			
			}
		});

		$('.deleteimg').on('click',function(){
			act_id = $(this).attr("id");
			// alert(act_id);
		 	$('.'+act_id+'im-modal').modal('show');
  		});

  $(".modal-btn-is").on("click", function(){
      act_id = $(this).attr("id");
      const splitString = act_id.split("_")[0];
      var farm_id = $("input[name=farm_id]").val();
      var delact = new Array(splitString,farm_id);
	  $('.'+splitString+'im-modal').modal('hide');
		// alert(delact);
    $.ajax({
		url: "http://"+window.location.host+"/rstl_pm/main/deleteImage",
		type: "POST",
		data: {"data":delact},
		success: function(data){
			// alert(data[0]+" "+data[1]);
			$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneFarm",{id:data});
			var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully moved to trash." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
		},
			error: function(){
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Unable to move to trash." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
			}
	});
  });
  
  $(".modal-btn-on").on("click", function(){
     act_id = $(this).attr("id");
     const splitString = act_id.split("_")[0];
	
    $('.'+splitString+'im-modal').modal('hide');
  }); //delete act

	$("[data-fancybox]").fancybox();

 // delete accom 
  $(".deleteAccom").on("click", function(){
   	 act_id = $(this).attr("id");
   	 const splitString = act_id.split("_")[0];
	
    $('.'+splitString+'modal').modal('show');
  });

  $(".modal-btn-oo").on("click", function(){
      act_id = $(this).attr("id");
      const splitString = act_id.split("_")[0];
      var farm_id = $("input[name=farm_id]").val();
      var delaccom = new Array(splitString,farm_id);
		$('.'+splitString+'modal').modal('hide');
    $.ajax({
		url: "http://"+window.location.host+"/rstl_pm/main/deleteAccom",
		type: "POST",
		data: {"data":delaccom},
		success: function(data){
			
			// alert(data);
			$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneFarm",{id:data});
			var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully moved to trash." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
		},
			error: function(){
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Unable to move to trash." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
			}
	});
  });
  
  $(".modal-btn-na").on("click", function(){
     act_id = $(this).attr("id");
     const splitString = act_id.split("_")[0];
	
    $('.'+splitString+'modal').modal('hide');
  }); //delete accom

 // delete act 
  $(".deleteActivities").on("click", function(){
   	 act_id = $(this).attr("id");
   	 const splitString = act_id.split("_")[0];
	
    $('.'+splitString+'mi-modal').modal('show');
  });

  $(".modal-btn-si").on("click", function(){
      act_id = $(this).attr("id");
      const splitString = act_id.split("_")[0];
      var farm_id = $("input[name=farm_id]").val();
      var delact = new Array(splitString,farm_id);
		$('.'+splitString+'mi-modal').modal('hide');
		// alert(delact);
    $.ajax({
		url: "http://"+window.location.host+"/rstl_pm/main/deleteActivity",
		type: "POST",
		data: {"data":delact},
		success: function(data){
			// alert(data[0]+" "+data[1]);
			$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneFarm",{id:data});
			var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully moved to trash." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
		},
			error: function(){
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Unable to move to trash." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
			}
	});
  });
  
  $(".modal-btn-no").on("click", function(){
     act_id = $(this).attr("id");
     const splitString = act_id.split("_")[0];
	
    $('.'+splitString+'mi-modal').modal('hide');
  }); //delete act

		// edit one accom
		$(document).on("click",".editAccom", function(event) {
	   		event.preventDefault();
			href = $(this).attr("id");
			var idd = href+'editaccom';
			$(this).parent().parent().removeClass('panel-info');
			$(this).parent().parent().addClass('panel-warning');
			$('#'+idd).hide();
			$(this).hide();
			$('#'+href+'formeditaccom').show();
			$('#'+href+'_deleteAcccom').hide();
			$('#'+href+'_editAccomDone').show();
			$('#'+href+'_editAccomCancel').show();
	  	});

	  	$('.editAccomCancel').on('click',function(event){
	  		event.preventDefault();
	  		
			$(this).show();
			href = $(this).attr("id");
			const splitString = href.split("_")[0];
			$(this).parent().parent().removeClass('panel-warning');
			$(this).parent().parent().addClass('panel-info');
			$('#'+splitString).show();
			$('#'+splitString+'editaccom').show();
			$('#'+splitString+'formeditaccom').hide();
			$('#'+splitString+'_deleteAcccom').show();
			$('#'+splitString+'_editAccomCancel').hide();
			$('#'+splitString+'_editAccomDone').hide();
	  	});

	  	$('.editAccomDone').on('click',function(event){
	  		event.preventDefault();
	  		href = $(this).attr("id");
	    	var id = href.split("_")[0];
	  		var accomname = $("input[name="+id+"accomname]").val();
	    	var accomdescription = $("input[name="+id+"accomdesc]").val();
	    	var accomfee = $("input[name="+id+"accomfee]").val();
	    	var farm_id = $("input[name=farm_id]").val();
			var accomdetails = new Array(accomname, accomdescription, accomfee,id,farm_id);

			$.ajax({
				url: "http://"+window.location.host+"/rstl_pm/main/updateAccommodation",
				type: "POST",
				data: {"data":accomdetails},
				success: function(data){
					$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneFarm",{id:data});
					var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully updated accommodation." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
				},
			error: function(){
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Unable to update accommodation." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
			}
			});
	  	});


		// edit one activity
		$(document).on("click",".editActivities", function(event) {
	   		event.preventDefault();
			href = $(this).attr("id");
			var idd = href+'editact';
			$(this).parent().parent().removeClass('panel-info');
			$(this).parent().parent().addClass('panel-warning');
			$('#'+idd).hide();
			$(this).hide();
			$('#'+href+'formeditact').show();
			$('#'+href+'_deleteActivities').hide();
			$('#'+href+'_editDone').show();
			$('#'+href+'_editCancel').show();
	  	});

	  	$('.editCancel').on('click',function(){
	  		event.preventDefault();
			// $(this).show();
			$(this).parent().parent().removeClass('panel-warning');
			$(this).parent().parent().addClass('panel-info');
			href = $(this).attr("id");
			const splitString = href.split("_")[0];

			$('#'+splitString).show();
			$('#'+splitString+'editact').show();
			$('#'+splitString+'formeditact').hide();
			$('#'+splitString+'_deleteActivities').show();
			$('#'+splitString+'_editDone').hide();
			$('#'+splitString+'_editCancel').hide();
	  	});

	  	$('.editDone').on('click',function(){
	  		event.preventDefault();
	  		href = $(this).attr("id");
	    	var id = href.split("_")[0];
	  		var actname = $("input[name="+id+"actName]").val();
	    	var actdescription = $("input[name="+id+"actDesc]").val();
	    	var actfee = $("input[name="+id+"actFee]").val();
	    	var farm_id = $("input[name=farm_id]").val();
			var actdetails = new Array(actname, actdescription, actfee,id,farm_id);

			$.ajax({
				url: "http://"+window.location.host+"/rstl_pm/main/updateActivity",
				type: "POST",
				data: {"data":actdetails},
				success: function(data){
					$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneFarm",{id:data});
					var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully updated activity." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);

				} ,
			error: function(){
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Unable to update activity." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
			}
			});
	  	});

		

		
		
		// start code for editing tbl_farm
		$('.editfarmdetails').on('click',function(){
			$('.displayinfo').hide();
			$('.editDetails').show();			
	        // alert('editDetails');
	        // displayinfo
	    });

	    $('.canceleditfarm').on('click',function(event){
	    	event.preventDefault();
	    	$('.displayinfo').show();
			$('.editDetails').hide();	
	    });

	    $('.saveeditfarm').on('click',function(event){
	    	event.preventDefault();
	    	var id = $("input[name=id]").val();
	    	var ecode = $("input[name=eecode]").val();
	    	var ename = $("input[name=eename]").val();
	    	var manufacturer = $("input[name=emanufacturer]").val();
	    	var typemodel = $("input[name=etypemodel]").val();
	    	var sn = $("input[name=esn]").val();
	    	var softwarename = $("input[name=esoftwarename]").val();
	    	var loc = $("input[name=eloc]").val();
	    	var pdate = $("input[name=epdate]").val();
	    	var condrec = $("input[name=econdrec]").val();
	    	var price = $("input[name=eprice]").val();
	    	var mfgmanual = $("input[name=emfgmanual]").val();
	    	var specs = $("input[name=especs]").val();
	    	var remarks = $("input[name=eremarks]").val();

			console.log(id);
			var frm_info = new Array(id,ecode,ename,manufacturer,typemodel,sn,softwarename,loc,pdate,condrec,price,mfgmanual,specs,remarks);
	    	var frm_info2 = new Array(id,ecode,ename,manufacturer,typemodel,sn,softwarename,loc,pdate,condrec,price,mfgmanual,specs,remarks);
	    	var frmdetails = new Array(frm_info,frm_info2);
			
	 		
	 		$.ajax({
				url: "http://"+window.location.host+"/rstl_pm/main/updateFarm",
				type: "POST",
				data: {"data":frmdetails},
				success: function(data){
					
					$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneFarm",{id:data});
					var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully updated farm details." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
					// saveToDb(data,id);
				},
			error: function(data){
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Unable to update farm details." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
			}
			});
	    })
	    // end code for edit tbl_farm

	    // start code for edit tbl_farm_pictures
	    $('#addFeaturedPics').on('click',function(){
	    	$("input[id='newFeaturedPics']").click();
	    })

	    $cropp = $('#addFeaturedPic').croppie({
			enableExif: true,
			viewport: {
				width: 700,
				height: 400,
				type: 'square'
			},
			boundary: {
				width:750,
				height:450
			}
		});

		$('#newFeaturedPics').on('change', function(){
			var read = new FileReader();
			read.onload = function(event){
				$cropp.croppie('bind',{
					url:event.target.result
				}).then(function(){
					// console.log('jQuery bind complete');
				});
				// console.log('pashnea');
			}
			read.readAsDataURL(this.files[0]);
			// $(".image").hide();
			$("#addFeaturedPic").show();	
			// $("#featSave").show();
			// $("#featCancel").show();	
			$('.featImgDesc').show();
		});

		$( "#featCancel" ).click(function() {
			// alert( "Handler for cancel called." );
			// $(".image").show();
			$("#addFeaturedPic").hide();
			// $("#featSave").hide();
			// $("#featCancel").hide();
			$('.featImgDesc').hide();
		});


	$( "#featSave" ).click(function() {
		// alert( "Handler for save called." );
		// var id = document.getElementById("thisisID").value;
		var id = $("input[name=farm_id]").val();
		var imgDe = $("input[name=featDesc]").val();
		$cropp.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function(response){
			// $('#canvas').html(response);
			$.ajax({
				url: "http://"+window.location.host+"/rstl_pm/upload.php",
				type: "POST",
				data: {"featimage":response},
				success: function(data){
					// alert(data);
					saveToDbFeat(data,id,imgDe);
				}
			})
		})
	});

	function saveToDbFeat(data,id,imgdesc){
		// alert(data);
		$.ajax({
		    type: 'GET',
		    url: 'http://'+window.location.host+'/rstl_pm/main/addFeatPic?link='+data+'&id='+id+'&desc='+imgdesc,
		    success: function(data) {
		    	// alert(data);
		    	$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneFarm",{id:data});
		    	var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully added new featured photo." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);   
				// window.location = "http://farmhunt.tk/admin/redirected?msg="+"Successfully Added a New Featured Photo!"+"&id="+data;	   
			},error: function(){
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Unable to add new photo." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
			}
	    })
	}
	// end code for edit tbl_farm_pictures


$(document).ready(function(){
	$("#updateCov").hide();
	$("#covSave").hide();
	$("#covCancel").hide();
	$image_crop = $('#updateCov').croppie({
		enableExif: true,
		viewport: {
			width: 150,
			height: 150,
			type: 'square'
		},
		boundary: {
			width:150,
			height:150
		}
	});

	$('#file').on('change', function(){
		var reader = new FileReader();
		reader.onload = function(event){
			$image_crop.croppie('bind',{ 
				url:event.target.result
			}).then(function(){
				// console.log('jQuery bind complete');
			});
			// console.log('pashnea');
		}
		reader.readAsDataURL(this.files[0]);
		$(".logo").hide();
		$("#updateCov").show();	
		$("#covSave").show();	
		$("#covCancel").show();	

	})

	// $('.crop-image').click(function(event){
		
	// })

	$( "#covCancel" ).click(function() {
		// alert( "Handler for cancel called." );
		$(".logo").show();
		$("#updateCov").hide();
		$("#covSave").hide();
		$("#covCancel").hide();
	});


	$( "#covSave" ).click(function() {
		// alert( "Handler for save called." );
		var id = $("input[name=farm_id]").val();
		$image_crop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function(response){
			// $('#canvas').html(response);
			$.ajax({
				url: "http://"+window.location.host+"/rstl_pm/upload.php",
				type: "POST",
				data: {"logo":response},
				success: function(data){
					// alert(data);
					saveToDb(data,id);
				}
			})
		})
	});
})

function saveToDb(data,id){
	$.ajax({
	    
	    type: 'GET',
	    url: 'http://'+window.location.host+'/rstl_pm/main/addLogoPic?link='+data+'&id='+id,

	    success: function(data) {
	    	// alert(data);
	    	$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneFarm",{id:data});
	    	var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully updated logo." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);   
			// window.location = "http://farmhunt.tk/admin/redirected?msg="+"Successfully Updated Cover Photo!"+"&id="+data;	   
		},error: function(){
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Unable to update logo." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);
			}
    })
}

$("#cover").click(function() {
	    $("input[id='file']").click();
	});

	</script>


<!-- maaaaaaaaaaaaaaaaaaaaaaaaaaapsss -->
