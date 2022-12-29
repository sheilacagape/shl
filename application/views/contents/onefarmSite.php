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
</style>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fancybox/jquery.fancybox.css');?>">
<script src="<?= base_url('assets/fancybox/jquery.fancybox.js');?>"></script>
	<div class="col-md-12">
		<div class="col-md-2">
			<img src="<?php if(count($logo)>0){echo $logo[0]->picture_path; }else{echo "";} ?>" style="width: 150px;height: 150px; margin-top: 10px; margin-bottom: 30px;">
			
		</div>
		<div class="col-md-10">
			<div class="well editDetails"  style="display: none;" >
			<form method="POST" action="<?php echo base_url("admin/updateitem") ?>">
				<input type="hidden" id="farm_id" name="farm_id" value="<?php echo $farmdetails[0]->farm_id; ?>">
				<input type="hidden" id="address_id" name="address_id" value="<?php echo $address[0]->address_id; ?>">
				<button style="float: right;" class="saveeditfarm btn btn-primary btn-sm">Done</button>
				<button style="float: right; margin-right: 10px;" class="canceleditfarm btn btn-default btn-sm">Cancel</button>
				<br>
				<div class="form-group">
					<label>Farm Name</label>
					<input class="form-control" name="name" placeholder="Establishment Name" type="text" value="<?php echo $farmdetails[0]->farm_name; ?>">
				</div>
				<div class="form-group">
					<label>Entrance Fee</label>
					<input class="form-control" name="fee" placeholder="Entrance Fee" type="text" value="<?php echo $farmdetails[0]->entrance_fee; ?>">
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea name="desc" rows="5" class="form-control"  placeholder="Description"><?php echo $farmdetails[0]->description; ?></textarea>
				</div>
				<div class="form-group form-inline">
					<label>Address*</label>
					<input type="text" name="street" pattern="[A-Za-z]{3,30}" title="Name must be a minimum of 3 letters and maximum of 30 letters" placeholder="Street" class="form-control" value="<?php echo $address[0]->street ?>" required>
					<input type="text" name="barangay" pattern="[A-Za-z]{3,30}" title="Name must be a minimum of 3 letters and maximum of 30 letters" placeholder="Barangay" class="form-control" value="<?php echo $address[0]->barangay ?>" required>
					<input type="text" name="city" pattern="[A-Za-z]{3,30}" title="Name must be a minimum of 3 letters and maximum of 30 letters" placeholder="City" class="form-control" value="<?php echo $address[0]->city ?>" required>
					<input type="text" name="municipality" pattern="[A-Za-z]{3,30}" title="Name must be a minimum of 3 letters and maximum of 30 letters" placeholder="Municipality" class="form-control" value="<?php echo $address[0]->municipality ?>" required>
					<input type="text" name="province" pattern="[A-Za-z]{3,30}" title="Name must be a minimum of 3 letters and maximum of 30 letters" placeholder="Province" class="form-control" value="<?php echo $address[0]->province ?>" required>
					
				</div>
				<div class="form-group">
					<label>Mobile Number</label>
					<input class="form-control" name="cp" placeholder="Mobile Number" type="text" value="<?php echo $farmdetails[0]->mobile_number; ?>">
				</div>
				<div class="form-group">
					<label>Telephone Number</label>
					<input class="form-control" name="tele" placeholder="Telephone Number" type="text" value="<?php echo $farmdetails[0]->telephone_number; ?>">
				</div>
				<div class="form-group">
					<label>E-mail Address</label>
					<input class="form-control" name="email" placeholder="E-mail Address" type="text" value="<?php echo $farmdetails[0]->email; ?>">
				</div>
				<div class="form-group">
					<label>Facebook</label>
					<input class="form-control" name="fb" placeholder="Facebook" type="text" value="<?php echo $farmdetails[0]->facebook; ?>">
				</div>
				<div class="form-group">
					<label>Youtube</label>
					<input class="form-control" name="yt" placeholder="Youtube" type="text" value="<?php echo $farmdetails[0]->youtube; ?>">
				</div>
				<div class="form-group form-inline">
					<label>Locate Latitude/Longitude</label>
					<input type="text" name="latitude" class="form-control" value="<?php echo $address[0]->latitude; ?>" required>
					<input type="text" name="longitude"  class="form-control" value="<?php echo $address[0]->longitude; ?>" required>
				</div>
			</form>	
			</div>
			

			<h2 class="displayinfo text-center"><?php echo $farmdetails[0]->farm_name; ?> <button class="editfarmdetails btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></h2>
 
			<table class="displayinfo table">
				<tr>
					<td>Entrance Fee</td>
					<td><?php echo $farmdetails[0]->entrance_fee; ?></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><?php echo $farmdetails[0]->description; ?></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><?php $addresss ="";
				if (!empty($address[0]->street)) {
					$addresss = $addresss.$address[0]->street.", ";
				} 

				if ($address[0]->barangay != null) {
					$addresss = $addresss.$address[0]->barangay.", ";
				} 

				if ($address[0]->city != null) {
					$addresss = $addresss.$address[0]->city.", ";
				} 

				if ($address[0]->municipality != null) {
					$addresss = $addresss.$address[0]->municipality.", ";
				}
				if ($address[0]->province != null) {
					$addresss = $addresss.$address[0]->province;
				} 

			 echo $addresss; ?></td>
				</tr>
				<tr>
					<td>Mobile Number:</td>
					<td><?php echo $farmdetails[0]->mobile_number; ?></td>
				</tr>
				<tr>
					<td>Telephone Number:</td>
					<td><?php echo $farmdetails[0]->telephone_number; ?></td>
				</tr>
				<tr>
					<td>E-mail Address:</td>
					<td> <?php echo $farmdetails[0]->email; ?></td>
				</tr>
				<tr>
					<td>Facebook Page:</td>
					<td><a href="<?php echo $farmdetails[0]->facebook; ?>"><?php echo $farmdetails[0]->facebook; ?></a></td>
				</tr>
				<tr>
					<td>Youtube:</td>
					<td><a href="<?php echo $farmdetails[0]->youtube; ?>"><?php echo $farmdetails[0]->youtube; ?></a></td>
				</tr>
			</table>
		</div>
	</div>
	<hr>

	<div class="col-md-12">
		<div class="col-md-8">
			<div class="panel panel-primary"> 
				<div class="panel-heading">Accommodations <button class="btn btn-default" id="addAccom">Add New</button></div>
					<div class="panel-body">
						<div class="panel panel-success" id="formforNewAccom" style="display: none; width: 100%;">
							<div class="panel-heading">New Accommodation</div>
							<div class="panel-body">
								<form method="POST">
									<div class="form-group">
										<label>Accommodation Name</label>
										<input type="text" class="form-control" name="accName">
									</div>
									<div class="form-group">
										<label>Brief Description</label>
										<input type="text" class="form-control" name="accDesc">
									</div>
									<div class="form-group">
										<label>Minimum Rate</label>
										<input type="text" class="form-control" name="accFee">
									</div>
								</form>		
							</div>
							<div class="panel-footer" style="text-align: right;">
								<button class="btn btn-secondary btn-sm" id="CancelnewAccom">Cancel</button>
								<button class="btn btn-primary btn-sm" id="SavenewAccom">Add</button>
							</div>
						</div>
					<?php 
						if(isset($accom)){
							foreach ($accom as $key) {
						?>		
							<div class="col-md-6">
								<div class="panel panel-info">
								  <div class="panel-heading"><?php echo $key->accommodation_name; ?>
								  	<span id="<?php echo $key->accommodation_id.'_deleteAcccom'; ?>" style="float: right;margin: 5px;" class="deleteAccom glyphicon glyphicon-trash"></span> 

<div class="modal fade <?php echo $key->accommodation_id.'modal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $key->accommodation_id.'modal'; ?> ">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Accommodation </h4>
      </div>
      <div class="modal-body">
      	<small>Are you sure you want to delete <?php echo $key->accommodation_name; ?>?</small>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default modal-btn-oo" id="<?php echo $key->accommodation_id.'_deleteAccpm' ?>">Yes</button>
        <button type="button" class="btn btn-primary modal-btn-na" id="<?php echo $key->accommodation_id.'_deleteeAccom' ?>">No</button>
      </div>
    </div>
  </div>
</div>								  	
								  	<span style="float: right;margin: 5px;" id="<?php echo $key->accommodation_id ?>" class="editAccom glyphicon glyphicon-pencil"></span> 
								  	<a href="" id="<?php echo $key->accommodation_id.'_editAccomDone'; ?>" class="editAccomDone" style="float: right;margin: 5px; display: none;">Done</a>
								  	<a href="" id="<?php echo $key->accommodation_id.'_editAccomCancel'; ?>" class="editAccomCancel" style="float: right;margin: 5px; display: none;">Cancel</a>
								  </div>

								  <div class="panel-body" id="<?php echo $key->accommodation_id.'editaccom'; ?>">
								  	<?php echo $key->description; ?> 
								  	<br>
								  	<h3><?php echo $key->fee; ?></h3>
								  </div>

								  <div style="display: none;" class="panel-body" id="<?php echo $key->accommodation_id.'formeditaccom'; ?>">
									<form method="POST">
										<div class="form-group">
											<label>Activity Name</label>
											<input type="text" class="form-control" value="<?php echo $key->accommodation_name; ?>" name="<?php echo $key->accommodation_id.'accomname'; ?>">
										</div>
										<div class="form-group">
											<label>Brief Description</label>
											<input type="text" class="form-control" value="<?php echo $key->description; ?> " name="<?php echo $key->accommodation_id.'accomdesc'; ?>">
										</div>
										<div class="form-group">
											<label>Minimum Fee</label>
											<input type="text" class="form-control" value="<?php echo $key->fee; ?>" name="<?php echo $key->accommodation_id.'accomfee'; ?>">
										</div>
									</form>		
								  </div>

								</div>
							</div>	
						<?php		# code...
							}
						}
					 ?>
				</div>
			</div>
			
		</div>
		<div class="col-md-4 location">
			<h3>Location</h3> 
			<button class="btn btn-primary btn-sm editmapping" style="float: right;"><span class="glyphicon glyphicon-pencil"></span> Update</button>
			<button class="btn btn-primary btn-sm saveeditmapping" style="display: none;float: right;"><span class="glyphicon glyphicon-ok"></span> Save</button>
			<button class="btn btn-default btn-sm canceleditmapping" style="display: none;float: right;margin-right: 10px;"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
			<br>
	
			<div id="mapp" style="width: 100%; height: 400px; background-color: grey;"></div>
 
			<div id="editLatLng"  style="display: none;width: 100%; height: 500px; margin-bottom: 300px;">
				<h3>Please locate your establishment location on the map.</h3>
				<small><em>Note: Zoom in map for a more precise coordinates.</em></small>
		      	<div class="form-group">
			        <label>Latitude</label>
			        <input type="text" id="lat" name="latitude1" class="form-control" value="<?php echo $address[0]->latitude; ?>" disabled>
			      </div>
			      <div class="form-group">
			        <label>Longitude</label>
			        <input type="text" id="lng" name="longitude1"  class="form-control" value="<?php echo $address[0]->longitude; ?>" disabled>
			      </div>
			    <div class="pac-card" id="pac-card">
			      <div>
			        <div id="type-selector" class="pac-controls">
			          <input type="radio" name="type" id="changetype-all" checked="checked">
			          <label for="changetype-all">All</label>

			          <input type="radio" name="type" id="changetype-establishment">
			          <label for="changetype-establishment">Establishments</label>

			          <input type="radio" name="type" id="changetype-address">
			          <label for="changetype-address">Addresses</label>

			          <input type="radio" name="type" id="changetype-geocode">
			          <label for="changetype-geocode">Geocodes</label>
			        </div>
			        <div id="strict-bounds-selector" class="pac-controls">
			          <input type="checkbox" id="use-strict-bounds" value="">
			          <label for="use-strict-bounds">Strict Bounds</label>
			        </div>
			      </div>
			      <div id="pac-container">
			        <input id="pac-input" type="text"
			            placeholder="Enter a location" value="<?php echo $address[0]->province ?>">
			      </div>
			    </div>
			    <div id="map"></div>
			    <div id="infowindow-content">
			      <img src="" width="16" height="16" id="place-icon">
			      <span id="place-name"  class="title"></span><br>
			      <span id="place-address"></span>
			    </div>
		    </div>
	<script>
		$('.editmapping').on('click',function(){
			
			$(this).parent().removeClass('col-md-4');
			$(this).parent().addClass('col-md-12');
			$('#mapp').hide();
			$('.editmapping').hide();
			$('#editLatLng').show();
			$('.canceleditmapping').show();
			$('.saveeditmapping').show();

		});

		$('.canceleditmapping').on('click',function(){
			$(this).parent().removeClass('col-md-12');
			$(this).parent().addClass('col-md-4');
			
			$('#mapp').show();
			$('.editmapping').show();
			$('#editLatLng').hide();
			$('.canceleditmapping').hide();
			$('.saveeditmapping').hide();
		});

		$('.saveeditmapping').on('click',function(){
			var addr_id = $("input[name=address_id]").val();
			var farm_id = $("input[name=farm_id]").val();
			var lat = Number($("input[name=latitude1]").val());
			var lng = Number($("input[name=longitude1]").val());
			var loc = new Array(addr_id,lat,lng);
			$(this).parent().removeClass('col-md-12');
			$(this).parent().addClass('col-md-4');
			// alert(loc);
			$('#mapp').show();
			$('.editmapping').show();
			$('#editLatLng').hide();
			$('.canceleditmapping').hide();
			$('.saveeditmapping').hide();

			$.ajax({
				url: "http://"+window.location.host+"/rstl_pm/farmowner/updateLtLng",
				type: "POST",
				data: {"data":loc},
				success: function(data){
					// alert(data);
					$("#reloadDivFarm").load("http://"+window.location.host+"/rstl_pm/farmowner/getOneFarm",{id:farm_id});
					var fade_in = function() {
						  // $(".alert").fadeOut().empty();
						  $('.alert').text( data);
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
						  $('.alert').text( "Unable to update coordinates." );
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
      // Initialize and add the map
		function initMap() {
		  var uluru = {lat: Number($("input[name=latitude]").val()), lng: Number($("input[name=longitude]").val())};
		  var mapp = new google.maps.Map(document.getElementById('mapp'), {zoom: 15, center: uluru});
		  var marker = new google.maps.Marker({position: uluru, map: mapp});

		  var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: Number($("input[name=latitude]").val()), lng: Number($("input[name=longitude]").val())},
          zoom: 15
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        google.maps.event.addListener(map, 'click', function(event) {
          var item_lat = event.latLng.lat();
          var item_lng = event.latLng.lng();
          alertloc(item_lat,item_lng);
        });

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var item_lat = place.geometry.location.lat();
          var item_lng = place.geometry.location.lng();
          var item_loc = place.formatted_address;
          // alert("Lat= "+item_lat+"____Long= "+item_lng);
          alertloc(item_lat,item_lng);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }

      function alertloc(lat,long){
        // alert("Lat= "+lat+"____Long= "+long);
        document.getElementById('lat').value = lat;
        document.getElementById('lng').value = long
        
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCz8wUn0FzHnX2olcx3IXSOhvKXIp-Za4o&libraries=places&callback=initMap"
        async defer></script> 

		</div>
	</div>
	
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Featured Photos <button class="btn btn-default" id="addFeaturedPics">Add New</button></div>		
			
			<input type="file" id="newFeaturedPics" style="display: none;"><br>
			
			<div class="form-group featImgDesc" style="margin-left: 400px;display: none; " >
				<label>Description</label>
				<input style="border-radius: 10px;padding: 5px;" type="text" name="featDesc" placeholder="Featured Photo Description">			
			<!-- <div style="float: right;"> -->
				<button class="btn btn-primary btn-sm" id="featSave" style="float: right; margin-right: 150px;">
				<span class="glyphicon glyphicon-ok" ></span>
				</button>
				<button class="btn btn-secondary btn-sm " id="featCancel" style="float: right;  margin-right: 5px;">
				<span class="glyphicon glyphicon-remove" ></span>
				</button>
				
			<!-- </div> -->
			</div>

			<!-- <div style="float: right;">
				<button class="btn btn-secondary btn-sm " id="featCancel" style="display: none;">
				<span class="glyphicon glyphicon-remove" ></span>
				</button>
				<button class="btn btn-primary btn-sm" id="featSave" style="display: none;">
				<span class="glyphicon glyphicon-ok" ></span>
				</button>
			</div> -->

			<div style="display: none;" class="col-md-12" id="addFeaturedPic"></div>

			<?php if(isset($pic) && count($pic)>0){
				// var_dump($featured);
				foreach ($pic as $pic) {
					// echo $pic->photo_path;
					// echo "<br>";
			?>
				<a href="<?php echo $pic->picture_path; ?>" data-fancybox="gallery" data-caption="<?php echo $pic->pic_description; ?>">
					<img style="height: 120px; width: 210px; padding: 10px;" src="<?php echo $pic->picture_path; ?>" alt="">
				</a>

				<span style="background-color: lightblue; border-radius:10px 10px 10px 10px; padding: 5px; margin-left: -20px; " id="<?php echo $pic->farm_pic_id; ?>" class="deleteimg glyphicon glyphicon-trash"></span>
<!--Creates the popup body-->
<div class="modal fade <?php echo $pic->farm_pic_id.'im-modal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $pic->farm_pic_id.'_modal'; ?> ">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Activity </h4>
      </div>
      <div class="modal-body">
      	<small>Are you sure you want to move picture to trash?</small>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default modal-btn-is" id="<?php echo $pic->farm_pic_id.'_deleteAct' ?>">Yes</button>
        <button type="button" class="btn btn-primary modal-btn-on" id="<?php echo $pic->farm_pic_id.'_deleteeAct' ?>">No</button>
      </div>
    </div>
  </div>
</div>
			<?php
				}
			} else {

				echo "<h4>No featured photos.</h4>";

			} ?>
		</div>	
	</div>

	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Activities <button class="btn btn-default" id="addActivity">Add New</button></div>		
			

			<div class="panel-body">
				<div class="panel panel-success" id="formforNewActivity" style="display: none; width: 100%;">
					<div class="panel-heading">New Activity</div>
					<div class="panel-body">
						<form method="POST">
							<div class="form-group">
								<label>Activity Name</label>
								<input type="text" class="form-control" name="actName">
							</div>
							<div class="form-group">
								<label>Brief Description</label>
								<input type="text" class="form-control" name="actDesc">
							</div>
							<div class="form-group">
								<label>Minimum Fee</label>
								<input type="text" class="form-control" name="actFee">
							</div>
						</form>		
					</div>
					<div class="panel-footer" style="text-align: right;">
						<button class="btn btn-secondary btn-sm" id="CancelnewAct">Cancel</button>
						<button class="btn btn-primary btn-sm" id="SavenewAct">Add</button>
					</div>
				</div>
				<?php 
						if(isset($activ)){
							foreach ($activ as $key) {
						?>		
							<div class="col-md-6">
								<div class="panel panel-info">
								  <!-- Default panel contents -->
								  <div class="panel-heading"><?php echo $key->name; ?> 
								  	<span id="<?php echo $key->farm_act_id.'_deleteActivities'; ?>" style="float: right;margin: 5px;" class="deleteActivities glyphicon glyphicon-trash"></span> 
								  	<!--Creates the popup body-->
<div class="modal fade <?php echo $key->farm_act_id.'mi-modal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $key->farm_act_id.'_modal'; ?> ">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Activity </h4>
      </div>
      <div class="modal-body">
      	<small>Are you sure you want to delete <?php echo $key->name; ?>?</small>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default modal-btn-si" id="<?php echo $key->farm_act_id.'_deleteAct' ?>">Yes</button>
        <button type="button" class="btn btn-primary modal-btn-no" id="<?php echo $key->farm_act_id.'_deleteeAct' ?>">No</button>
      </div>
    </div>
  </div>
</div>
								  	<span style="float: right;margin: 5px;" id="<?php echo $key->farm_act_id; ?>" class="editActivities glyphicon glyphicon-pencil"></span> 
								  	<a href="" id="<?php echo $key->farm_act_id.'_editDone'; ?>" class="editDone" style="float: right;margin: 5px; display: none;">Done</a>
								  	<a href="" id="<?php echo $key->farm_act_id.'_editCancel'; ?>" class="editCancel" style="float: right;margin: 5px; display: none;">Cancel</a>
								  </div>

								  <!-- Table -->
								  <div class="panel-body" id="<?php echo $key->farm_act_id.'editact'; ?>">
								  	<?php echo $key->description; ?> 
								  	<br>
								  	<h3><?php echo $key->fee; ?></h3>
								  </div>

								  <div style="display: none;" class="panel-body" id="<?php echo $key->farm_act_id.'formeditact'; ?>">
									<form method="POST">
										<div class="form-group">
											<label>Activity Name</label>
											<input type="text" class="form-control" value="<?php echo $key->name; ?>" name="<?php echo $key->farm_act_id.'actName'; ?>">
										</div>
										<div class="form-group">
											<label>Brief Description</label>
											<input type="text" class="form-control" value="<?php echo $key->description; ?> " name="<?php echo $key->farm_act_id.'actDesc'; ?>">
										</div>
										<div class="form-group">
											<label>Minimum Fee</label>
											<input type="text" class="form-control" value="<?php echo $key->fee; ?>" name="<?php echo $key->farm_act_id.'actFee'; ?>">
										</div>
									</form>		
								  </div>
								</div>
							</div>	
						<?php		# code...
							}
							
						}

					 ?>

			</div>

			
		</div>	
	</div>

	<div class="alert" style="text-align: center; color: white; position:fixed;top:50%;left:50%;width:500px;height:50px;margin-left:-250px;margin-top:-25px;opacity: 0.7; background-color: gray;display: none;"></div>

	<script type="text/javascript">

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
		url: "http://"+window.location.host+"/rstl_pm/farmowner/deleteImage",
		type: "POST",
		data: {"data":delact},
		success: function(data){
			// alert(data[0]+" "+data[1]);
			$("#reloadDivFarm").load("http://"+window.location.host+"/rstl_pm/farmowner/getOneFarm",{id:data});
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
		url: "http://"+window.location.host+"/rstl_pm/farmowner/deleteAccom",
		type: "POST",
		data: {"data":delaccom},
		success: function(data){
			
			// alert(data);
			$("#reloadDivFarm").load("http://"+window.location.host+"/rstl_pm/farmowner/getOneFarm",{id:data});
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
		url: "http://"+window.location.host+"/rstl_pm/farmowner/deleteActivity",
		type: "POST",
		data: {"data":delact},
		success: function(data){
			// alert(data[0]+" "+data[1]);
			$("#reloadDivFarm").load("http://"+window.location.host+"/rstl_pm/farmowner/getOneFarm",{id:data});
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
				url: "http://"+window.location.host+"/rstl_pm/farmowner/updateAccommodation",
				type: "POST",
				data: {"data":accomdetails},
				success: function(data){
					$("#reloadDivFarm").load("http://"+window.location.host+"/rstl_pm/farmowner/getOneFarm",{id:data});
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
				url: "http://"+window.location.host+"/rstl_pm/farmowner/updateActivity",
				type: "POST",
				data: {"data":actdetails},
				success: function(data){
					$("#reloadDivFarm").load("http://"+window.location.host+"/rstl_pm/farmowner/getOneFarm",{id:data});
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
				},
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

		// start js code for adding accommodation
		$('#addAccom').on('click',function(){
			$('#formforNewAccom').show();
			$('#addAccom').hide();
		});

		$('#CancelnewAccom').on('click',function(){
			$('#formforNewAccom').hide();
			$('#addAccom').show();
		});

		$('#SavenewAccom').on('click',function(){

			var accname = $("input[name=accName]").val();
	    	var accdescription = $("input[name=accDesc]").val();
	    	var accfee = $("input[name=accFee]").val();
	    	var id = $("input[name=farm_id]").val();
	    	// alert(accname+accdescription+accfee);
	    	$('#formforNewAccom').hide();
			$('#addAccom').show();

	    	var accdetails = new Array(accname, accdescription, accfee,id);
	    	$.ajax({
				url: "http://"+window.location.host+"/rstl_pm/farmowner/addAccommodation",
				type: "POST",
				data: {"data":accdetails},
				success: function(data){
					// alert(data);
					$("#reloadDivFarm").load("http://"+window.location.host+"/rstl_pm/farmowner/getOneFarm",{id:data});
					var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully added new accommodation." );
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
				  $('.alert').text( "Unable to add new accommodation." );
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
		// end js code for adding accommodation

		// start js code for adding activity
		$('#addActivity').on('click',function(){
			$('#formforNewActivity').show();
			$('#addActivity').hide();
		});

		$('#CancelnewAct').on('click',function(){
			$('#formforNewActivity').hide();
			$('#addActivity').show();
		});

		$('#SavenewAct').on('click',function(){

			var actname = $("input[name=actName]").val();
	    	var actdescription = $("input[name=actDesc]").val();
	    	var actfee = $("input[name=actFee]").val();
	    	var id = $("input[name=farm_id]").val();
	    	// alert(accname+accdescription+accfee);
	    	$('#formforNewActivity').hide();
			$('#addActivity').show();

	    	var actdetails = new Array(actname, actdescription, actfee,id);
	    	$.ajax({
				url: "http://"+window.location.host+"/rstl_pm/farmowner/addActivity",
				type: "POST",
				data: {"data":actdetails},
				success: function(data){
					// alert(datareloadDiv);
					$("#reloadDivFarm").load("http://"+window.location.host+"/rstl_pm/farmowner/getOneFarm",{id:data});
					var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully added new activity." );
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
				  $('.alert').text( "Unable to add new activity." );
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
		// end js code for adding activty
		
		// start code for editing tbl_farm
		$('.editfarmdetails').on('click',function(){
			$('.displayinfo').hide();
			$('.editDetails').show();			
	        // alert('editDetails');
	        // displayinfo
	    });

	    $('.canceleditfarm').on('click',function(){
	    	$('.displayinfo').show();
			$('.editDetails').hide();	
	    });

	    $('.saveeditfarm').on('click',function(){
	    	event.preventDefault();
	    	var frm_id = $("input[name=farm_id]").val(); 
	    	var name = $("input[name=name]").val();
	    	var fee = $("input[name=fee]").val();
	    	var description = $("textarea[name=desc]").val();
	    	var cp = $("input[name=cp]").val();
	    	var tel = $("input[name=tele]").val();
	    	var email = $("input[name=email]").val();
	    	var fb = $("input[name=fb]").val();
	    	var yt = $("input[name=yt]").val();
	    	
	    	var addr_id = $("input[name=address_id]").val();
	    	var st = $("input[name=street]").val();
	    	var brgy = $("input[name=barangay]").val();
	    	var city = $("input[name=city]").val();
	    	var muni = $("input[name=municipality]").val();
	    	var prov = $("input[name=province]").val();
	    	
	    	var frm_info = new Array(frm_id,addr_id, name, description, cp, tel, email, fb, yt,fee);
	    	var frm_addr = new Array(addr_id, st, brgy, city, muni, prov);
	    	var frmdetails = new Array(frm_info,frm_addr);
	    	// alert(frm_info);
	 		
	 		$.ajax({
				url: "http://"+window.location.host+"/rstl_pm/farmowner/saveUpdateFarm",
				type: "POST",
				data: {"data":frmdetails},
				success: function(data){
					// alert(data);
					$("#reloadDivFarm").load("http://"+window.location.host+"/rstl_pm/farmowner/getOneFarm",{id:data});
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
			error: function(){
				
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

	function saveToDbFeat(data,id,imgDe){
		// alert(data);
		$.ajax({
		    type: 'GET',
		    url: 'http://'+window.location.host+'/rstl_pm/farmowner/addFeatPic?link='+data+'&id='+id+'&desc='+imgDe,
		    success: function(data) {
		    	// alert(data);
		    	$("#reloadDivFarm").load("http://"+window.location.host+"/rstl_pm/farmowner/getOneFarm",{id:data});
		    	var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully added new photo." );
				  $(".alert").show();
				}

				var fade_out = function() {
				  $(".alert").fadeOut().empty();
				  // $(".alert").show();
				}
				setTimeout(fade_in,500);
				setTimeout(fade_out, 3000);  
				// window.location = "http://farmhunt.tk/admin/redirected?msg="+"Successfully Added a New Featured Photo!"+"&id="+data;	   
			},
			error: function(){
				
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
	</script>


