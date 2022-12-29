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

<div class="row col-md-12">
	<div class="col-md-10"></div>
	<div class="col-md-2"  style="text-align: left; border: 1px solid;">
		<h5 style="font-weight: bold;">MC-F1</h5>
		<h5> Rev. 1 / 08-06-20	</h5>
	</div>
	
</div>

 <div class="row col-md-12">
 	<h3 class="text-center">DEPARTMENT OF SCIENCE AND TECHNOLOGY</h3>
 	<h4 class="text-center">Regional Office No. X</h4>
 	<hr>
 	<h2 class="text-center">EQUIPMENT MAINTENANCE RECORD</h2>
 	<hr>
 	<div class="col-md-11">
	 	<h1><?php echo $tspotdetails[0]->equipment_name; ?> 
	 		<span class="btn-group " style="align-content: right; align-self: right; text-align: right;">
	 			<?php
	 			
	 				if ($tspotdetails[0]->ac_stat == "1") {
	 					echo '<button type="button" class=" btn btn-default dropdown-toggle badge" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: green; color:green;">.</button>';
	 				} else {
	 					echo '<button type="button" class=" btn btn-default dropdown-toggle badge" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: red; color:red;">.</button>';
	 				}
	 				
	 			 ?>
			  
			  <ul class="dropdown-menu">
			 	<li><a class="editACUStatus" data-toggle="modal" data-target="#exampleModal">Set Status</a></li>
			 	
			  </ul>
			</span>
	 		
	 	</h1>
 	</div>
	<button class="editsidetripdetails btn btn-primary btn-sm" style="display: none;"><span class="glyphicon glyphicon-option-horizontal"></span></button>
	<div class="text-right col-md-1">
		<br>	
		<span class="btn-group " style="align-content: right; align-self: right; text-align: right;">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
		     <span class="glyphicon glyphicon-option-vertical"></span>
		  </button>
		  <ul class="dropdown-menu">
		    <li><a class="editACU">Edit</a></li>
		 	<li><a target="_blank" href="<?= base_url('report/generate?ord_id='.$tspotdetails[0]->id) ;?>" >PRINT <span class="glyphicon glyphicon-print"></span></a></li>
		  </ul>
		</span>
	</div>
 	 	
 		
 </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Set ACU Status</h5>
      </div>
      <div class="modal-body">
      	<?php 
      		if ($tspotdetails[0]->ac_stat == "1") {
				echo '<label class="radio-inline"><input type="radio" name="optradio" value="1" checked>Working</label>';
				echo '<label class="radio-inline"><input type="radio" name="optradio" value="2">Not Working</label>';
			} else {
				echo '<label class="radio-inline"><input type="radio" name="optradio" value="1">Working</label>';
				echo '<label class="radio-inline"><input type="radio" name="optradio" value="2" checked>Not Working</label>';
			}

      	 ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="acuStat">Save changes</button>
      </div>
    </div>
  </div>
</div>



 <div class="row col-md-12">
 	<!-- <div class="col-md-7"> -->
 		<div class=" col-md-12 well editDetails"  style="display: none;" >
			<form method="POST">
				<input type="hidden" id="sidetrip_id" name="eacid" value="<?php echo $tspotdetails[0]->id; ?>">
				<button style="float: right;" class="saveeditac btn btn-primary btn-sm">Done</button>
				<button style="float: right; margin-right: 10px;" class="canceleditac btn btn-default btn-sm">Cancel</button>
				<hr>
				<div class="form-group">
					<label>AC Name</label>
					<input class="form-control" name="eacname" placeholder="AC Name" type="text" value="<?php echo $tspotdetails[0]->equipment_name; ?>">
				</div>
				<div class="form-group">
					<label>AC Code</label>
					<input class="form-control" name="eaccode" placeholder="Code No." type="text" value="<?php echo $tspotdetails[0]->code_no; ?>">
				</div>
				<div class="form-group">
					<label>Manufacturer</label>
					<input class="form-control" name="eacmfg" placeholder="Manufacturer" type="text" value="<?php echo $tspotdetails[0]->manufacturer; ?>">
				</div>
				<div class="form-group">
					<label>Type/Model No.</label>
					<input class="form-control" name="eactype" placeholder="Type/Model No." type="text" value="<?php echo $tspotdetails[0]->type_model_no; ?>">
				</div>
				<div class="form-group">
					<label>Serial No.</label>
					<input class="form-control" name="eacsn" placeholder="Serial No." type="text" value="<?php echo $tspotdetails[0]->serial_no; ?>">
				</div>
				<div class="form-group">
					<label>Current Location</label>
					<input class="form-control" name="eacloc" placeholder="Location" type="text" value="<?php echo $tspotdetails[0]->current_location; ?>">
				</div>
				
			</form>	
		</div>
 	<!-- </div> -->
 	<div class="col-md-12 sidetripDetails"> 
 		<table class="table">
 			<tr>
 				<td>AC Code</td>
 				<td><?php echo $tspotdetails[0]->code_no; ?></td>
 			</tr>
 			<tr>
 				<td>Manufacturer</td>
 				<td><?php echo $tspotdetails[0]->manufacturer; ?></td>
 			</tr>
 			<tr>
 				<td>Type/Model No.</td>
 				<td><?php echo $tspotdetails[0]->type_model_no; ?></td>
 			</tr>
 			<tr>
 				<td>Serial No.</td>
 				<td><?php echo $tspotdetails[0]->serial_no; ?></td>
 			</tr>
 			<tr>
 				<td>Current Location</td>
 				<td><?php echo $tspotdetails[0]->current_location; ?></td>
 			</tr>
 		</table>
 	</div>
 	
 </div>

 
 <div class="row col-md-12">
 	<br>
 	<div class="panel panel-primary"> 
		<div class="panel-heading">Maintenance Record <button class="btn btn-default" id="addActST">Add New</button></div>
			<div class="panel-body">

				<div class="panel panel-success" id="formforNewActivityST" style="display: none; width: 100%;">
					<div class="panel-heading">New Record</div>
					<div class="panel-body">
						<form method="POST">
							<div class="form-group">
								<label>Operation Performed</label>
								<input type="text" class="form-control" name="mrop">
							</div>
							<div class="form-group">
								<label>Date</label>
								<input type="date" class="form-control" name="mrdate">
							</div>
							<div class="form-group">
								<label>Remarks</label>
								<textarea class="form-control" name="mrremarks" rows="4" cols="50"></textarea>
							</div>
							<div class="form-group">
								<label>Performed by</label>
								<input type="text" class="form-control" name="mrpb">
							</div>
						</form>		
					</div>
					<div class="panel-footer" style="text-align: right;">
						<button class="btn btn-secondary btn-sm" id="CancelnewActST">Cancel</button>
						<button class="btn btn-primary btn-sm" id="SavenewActST">Add</button>
					</div>
				</div>


				<div class="col-md-12 sidetripDetails"> 
			 		<table class="table">
			 			<thead>
							<tr>
								<th>Date</th>
								<th>Operation Performed</th>
								<th>Remarks</th>
								<th>Performed by</th>
							</tr>
						</thead>
						<tbody>
				<?php 
					if(count($acmr) > 0){
						// echo "No Packages/Activities available.";
						foreach ($acmr as $key) {
				?>

				
			 			<tr>
			 				
			 				<td><?php echo $key->date_added; ?></td>
			 				<td><?php echo $key->op_performed; ?></td>
			 				<td><?php echo $key->remarks; ?></td>
			 				<td><?php echo $key->performed_by; ?></td>
			 				<!-- Single button -->
							<td>		
								<div class="btn-group">
								  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								    More <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" role="menu" id="<?php echo($key->id); ?>" >
								    <li><a class="editMR">Edit</a></li>
								    <li><a  class="removeMR">Remove</a></li>
								  </ul>
								</div>
							<div class="modal fade <?php echo $key->id.'MRmodal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $key->id.'_MRmodal'; ?> ">
							  <div class="modal-dialog modal-sm">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">Delete Maintenance Record</h4>
							      </div>
							      <div class="modal-body">
							      	<small>Are you sure you want to delete this record?</small>
							      </div>
							      
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default modal-btn-si" id="<?php echo $key->id.'_deleteMR' ?>">Yes</button>
							        <button type="button" class="btn btn-primary modal-btn-no" id="<?php echo $key->id.'_deleteeMR' ?>">No</button>
							      </div>
							    </div>
							  </div>
							</div>

							<div class="modal fade <?php echo $key->id.'eMRmodal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $key->id.'_eMRmodal'; ?> ">
							  <div class="modal-dialog ">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">Update Maintenance Record</h4>
							      </div>
							      <div class="modal-body">
							      		<form method="POST">
											<div class="form-group">
												<label>Operation Performed</label>
												<input type="text" class="form-control" name="<?php echo $key->id.'_emrop'; ?>" value="<?php echo $key->op_performed; ?>">
											</div>
											<div class="form-group">
												<label>Date</label>
												<input type="date" class="form-control" name="<?php echo $key->id.'_emrdate'; ?>" value="<?php echo date('Y-m-d',strtotime($key->date_added)) ?>">
											</div>
											<div class="form-group">
												<label>Remarks</label>
												<textarea class="form-control" name="<?php echo $key->id.'_emrremarks'; ?>" rows="4" cols="50"><?php echo $key->remarks; ?></textarea>
											</div>
											<div class="form-group">
												<label>Performed by</label>
												<input type="text" class="form-control" name="<?php echo $key->id.'_emrpb'; ?>" value="<?php echo $key->performed_by; ?>">
											</div>
										</form>
							      </div>
							      
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default modal-btn-y" id="<?php echo $key->id.'_updateMR' ?>">Save</button>
							        <button type="button" class="btn btn-primary modal-btn-x" id="<?php echo $key->id.'_updateeMR' ?>">Cancel</button>
							      </div>
							    </div>
							  </div>
							</div>		
						</td>
			 			</tr>
					<?php
							}
						} else {
							?>
							<td><?php echo "No Maintenance Record."; ?></td>
							<?php
						}

					 ?>
					</tbody>
				 		</table>


			 	</div>

				
				
			</div>
 	</div>

 </div>

 <div class="row col-md-12">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Attachments <button class="btn btn-default" id="addattach">Add New</button></div>		
			
			<!--<input type="file" id="newFeaturedPics" style="display: none;"><br>-->

			<div class="modal fade addAttach" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog ">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Add Attachment</h4>
			      </div>
			      <div class="modal-body">
			      		<form id="fupForm" enctype="multipart/form-data">
					      <div class="form-group">
					        <label for="name">Description</label>
					        <input type="text" class="form-control" id="attachDesc" name="attachDesc" placeholder="File Description" required />
					    </div>
					      <div class="form-group">
					      	<label for="file">File</label>
				        	<input type="file" id="newAttach" class="form-control" name="file" required />
					      </div>
					      <div class="form-group">
					      	<input type="submit" class="btn btn-default modal-btn-add" id="" name="" value="Add"> 
					        <input type="button" class="btn btn-primary modal-btn-close" value="Close" id="">
					      </div>
					      
					      </form>
			      </div>
			      

			    </div>
			  </div>
			</div>

						
		


			<div class="panel-body">
			<?php if(isset($attach) && count($attach)>0){
				//var_dump($attach);
				foreach ($attach as $pic) {
					// echo $pic->photo_path;
					// echo "<br>";
			?>	
				<div class="col-md-12">
					<ul class="list-group">
						<li class="list-group-item"><a href="<?php echo $pic->file_path; ?>" target="_blank"><?php echo $pic->file_description; ?></a><a id="<?php echo $pic->ac_attach_id; ?>" href="#" data-dismiss="alert" class="close deleteFile">&times;</a>	</li>
					</ul>
					
				</div>

			<?php
				}
			} else {

				echo "<h4>No Attachments.</h4>";

			} ?>	
			</div>


			
		</div>	
	</div>


 <div class="alert" style="text-align: center; color: white; position:fixed;top:50%;left:50%;width:500px;height:50px;margin-left:-250px;margin-top:-25px;opacity: 0.7; background-color: gray;display: none;"></div>

 <script type="text/javascript">

   // start code for edit tbl_farm_pictures

	   $('#addattach').on('click',function(event){
	 		$('.addAttach').modal('show');
	 	});

	    

		$( ".modal-btn-close" ).click(function() {
			$('.addAttach').modal('hide');
		});


	$( ".modal-btn-add" ).click(function() {
		event.preventDefault();
		console.log(window.location.host);
 		var id = $("input[name=eacid]").val();
 		var fileDesc = $("input[name=attachDesc]").val();
		var file_data = $('#newAttach').prop('files')[0];   
	    var form_data = new FormData();                  
	    form_data.append('file', file_data);
	    form_data.append('text', id);
	    $( ".modal-btn-close" ).click();
	    console.log(form_data);                             
	    $.ajax({

	        url: 'http://'+window.location.host+'/rstl_pm/upload.php', // <-- point to server-side PHP script 

	        dataType: 'text',  // <-- what to expect back from the PHP script, if anything
	        cache: false,
	        contentType: false,
	        processData: false,
	        data: form_data,                         
	        type: 'post',
	        success: function(pathlink){
	        	console.log(pathlink);
	        	saveToDbFeat(pathlink,id,fileDesc);
				
			},
			error: function(){
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Failed to upload attachment." );
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

	
	// File type validation
	$("#newAttach").change(function() {
	    var file = this.files[0];
	    var fileType = file.type;
	    var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
	    if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
	        alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
	        $("#newAttach").val('');
	        return false;
	    }
	});

	function saveToDbFeat(data,id,imgDe){
		// alert(data);
		$.ajax({
		    type: 'GET',

		    url: 'http://'+window.location.host+'/rstl_pm/tspot/addACAttach?link='+data+'&id='+id+'&desc='+imgDe,
		    success: function(data) {
		    	// alert(data);
		    	$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/tspot/getOneTspot",{id:data});
		    	
		    	var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  
				  $('.alert').text( "Successfully added attachment." );
				  $('.modal-backdrop').remove(); // removes the grey overlay.
				  $('body').removeClass('modal-open');
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
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Failed to upload attachment." );
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

	}
	// end code for edit tbl_farm_pictures
	$("[data-fancybox]").fancybox();

 	$('.deleteimg').on('click',function(){
			act_id = $(this).attr("id");
			// alert(act_id);
		 $('.'+act_id+'im-modal').modal('show');
  });

  $(".modal-btn-is").on("click", function(){
      act_id = $(this).attr("id");
      const splitString = act_id.split("_")[0];
      var farm_id = $("input[name=sidetrip_id]").val();
      var delact = new Array(splitString,farm_id);
	  $('.'+splitString+'im-modal').modal('hide');
		// alert(delact);
    $.ajax({
		url: "http://"+window.location.host+"/rstl_pm/tspot/deleteImage",
		type: "POST",
		data: {"data":delact},
		success: function(data){
			// alert(data[0]+" "+data[1]);
			$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/tspot/getOneTspot",{id:data});
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

	$('.editACU').on('click',function(){
 		$('.editsidetripdetails').click();
 		
 	});		

 	$('.editsidetripdetails').on('click',function(){
 		$('.editDetails').show();
 		$('.sidetripDetails').hide();
 	});

 	$('.canceleditac').on('click',function(event){
 			event.preventDefault();
 		$('.editDetails').hide();
 		$('.sidetripDetails').show();
 	});

 	$('.saveeditac').on('click',function(event){
 		event.preventDefault();
 		var id = $("input[name=eacid]").val();
    	var name = $("input[name=eacname]").val();
    	var code = $("input[name=eaccode]").val();
    	var mfg = $("input[name=eacmfg]").val();
    	var type = $("input[name=eactype]").val();
    	var sn = $("input[name=eacsn]").val();
    	var loc = $("input[name=eacloc]").val();
    	// alert(name+description+st+brgy+city+muni+prov+lat+long);
    	var st_info = new Array(id,name,code,mfg,type,sn,loc);
    	//	var tspotdetails = new Array(id,name,code,mfg,type,sn,loc);
    	//alert(st_info);
    	$.ajax({
			// url: "http://"+window.location.host+"/dot/upload.php",
			url: "http://"+window.location.host+"/rstl_pm/tspot/updateTspots",
			type: "POST",
			data: {"data":st_info},
			success: function(data){
				//alert(data);
				$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/tspot/getOneTspot",{id:data});
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully updated Activity details." );
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
			error: function(){
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Unable to update sidetrip." );
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

 	$('#addActST').on('click',function(){
 		$('#formforNewActivityST').show();
 		$('#addActST').hide();
 	});

 	$('#CancelnewActST').on('click',function(){
 		$('#formforNewActivityST').hide();
 		$('#addActST').show();
 	});

 	$('#SavenewActST').on('click', function(){
 		// alert('yehey save na');
 		var op = $("input[name=mrop]").val();
 		var date = $("input[name=mrdate]").val();
    	var remarks = $("textarea[name=mrremarks]").val();
    	var pb = $("input[name=mrpb]").val();
    	var id = $("input[name=eacid]").val();
    	// alert(accname+accdescription+accfee);
    	$('#formforNewActivityST').hide();
		$('#addActST').show();

    	var actdetails = new Array(op,date,remarks,pb,id);
    	$.ajax({
			url: "http://"+window.location.host+"/rstl_pm/tspot/addMaintenance",
			type: "POST",
			data: {"data":actdetails},
			success: function(data){
				// alert(data);
				$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/tspot/getOneTspot",{id:data});
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully added maintenance record." );
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
			error: function(){
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Unable to add maintenance record." );
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

 	$('.editMR').on('click',function(event){
 		var id = $(this).parents('ul:first').attr('id');
		//alert(id);
	    $('.'+id+'eMRmodal').modal('show');
 	});

 	$('.modal-btn-x').on('click',function(event){
 		act_id = $(this).attr("id");
	    const splitString = act_id.split("_")[0];
		
	    $('.'+splitString+'eMRmodal').modal('hide');
 	});

 	$('.modal-btn-y').on('click',function(event){
		act_id = $(this).attr("id");
	    const splitString = act_id.split("_")[0];
		$('.modal-btn-x').click();
		$('body').removeClass('modal-open');

 		var emrop = $("input[name="+splitString+"_emrop]").val();
 		var emrdate = $("input[name="+splitString+"_emrdate]").val();
    	var emrremarks = $("textarea[name="+splitString+"_emrremarks]").val();
    	var emrpb = $("input[name="+splitString+"_emrpb]").val();
    	var id = $("input[name=eacid]").val();

    	var mrdetails = new Array(splitString,emrop,emrdate,emrremarks,emrpb,id);
    	
    	//alert(mrdetails);

		$.ajax({
			url: "http://"+window.location.host+"/rstl_pm/tspot/updateMR",
			type: "POST",
			data: {"data":mrdetails},
			success: function(data){
				$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/tspot/getOneTspot",{id:data});
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully updated maintenance record." );
				  $(".alert").show();
				  $('.modal-backdrop').remove(); // removes the grey overlay.
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
				  $('.alert').text( "Unable to maintenance record." );
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

 	// delete act 
	$(".removeMR").on("click", function(){
	   	var id = $(this).parents('ul:first').attr('id');
		
	    $('.'+id+'MRmodal').modal('show');
	    
	  });

  
  $(".modal-btn-si").on("click", function(){
      act_id = $(this).attr("id");
      const splitString = act_id.split("_")[0];
      var farm_id = $("input[name=eacid]").val();
      var delact = new Array(splitString,farm_id);
		$('.'+splitString+'MRmodal').modal('hide');
				$('body').removeClass('modal-open');

		// alert(delact);
    $.ajax({
		url: "http://"+window.location.host+"/rstl_pm/tspot/deleteMR",
		type: "POST",
		data: {"data":delact},
		success: function(data){
			// alert(data[0]+" "+data[1]);
			$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/tspot/getOneTspot",{id:data});
			$('#reloadDiv').each(function(){
				    $(this).resize();
				});				   

			var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully removed maintenance record." );
				  $(".alert").show();
				  $('.modal-backdrop').remove();
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
	
    $('.'+splitString+'MRmodal').modal('hide');
  }); //delete act

  $(".deleteFile").on("click", function(){
     attach_id = $(this).attr("id");
     //alert(attach_id);
     var ac_id = $("input[name=eacid]").val();
     var delact = new Array(attach_id,ac_id);

     $.ajax({
		url: "http://"+window.location.host+"/rstl_pm/tspot/deleteAttach",
		type: "POST",
		data: {"data":delact},
		success: function(data){
			// alert(data[0]+" "+data[1]);
			$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/tspot/getOneTspot",{id:data});
			$('#reloadDiv').each(function(){
				    $(this).resize();
				});				   

			var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully removed attachment." );
				  $(".alert").show();
				  $('.modal-backdrop').remove();
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
  

  $("#acuStat").on("click", function(){
      var id = $("input[name=eacid]").val();
      var acstat = $("input[type='radio'][name='optradio']:checked").val();
      var update = new Array(id,acstat);
	 //alert(id);
	 //alert(acstat);
    $.ajax({
		url: "http://"+window.location.host+"/rstl_pm/tspot/updateStat",
		type: "POST",
		data: {"data":update},
		success: function(data){
			//alert(data);
			$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/tspot/getOneTspot",{id:data});
			$('#reloadDiv').each(function(){
				    $(this).resize();
				});				   

			var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  
				  $('.alert').text( "ACU status changed." );
				  $('.modal-backdrop').remove(); // removes the grey overlay.
				  $('body').removeClass('modal-open');
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
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Unable to change ACU status." );
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

 </script>
