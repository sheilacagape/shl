
<br><br><br>
<div style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 5px 10px skyblue;" class=" col-md-offset-3 col-md-6">
	<div class="row text-center">
		<img style="height: 200px;width: 200px;" src="<?= base_url('assets/img/dot.png')?>">
	</div>
	<br>
	<div class="row">
		<?php
			if(isset($msg)){
		?>
		<div class="col-md-offset-2 col-lg-offset-2 col-lg-8 col-md-8 text-center alert alert-danger alert-dismissable">
			<a href="#" data-dismiss="alert" class="close">&times;</a>
			<?php
				echo $msg;
			?>
		</div>
		<?php
		}
		?>
	</div>
	<form class="form-group" action="<?= base_url('main/login') ?>" method="post">
		<label>Username</label><input class="form-control" title="Must be a combination of letters and numbers with minimum length of 3 characters." pattern="[A-Za-z0-9]{3,30}" type="text" name="Username" placeholder="Username" required=""><br>
		<label>Password</label><input class="form-control" title="Must be a combination of letters and numbers with minimum length of 3 characters." pattern="[A-Za-z0-9]{3,30}" type="password" name="Password" placeholder="Password" required=""><br>
		<input type="submit" name="" value="Login" style="float: right " class="btn btn-primary">
	</form>
	
</div> 

<!-- <!DOCTYPE html>
<html>
	<head>
		<title>TRY</title>
		<style type="">
			html,
		body {
		margin: 0;
		padding: 0;
		}
		#map {
		height: 500px;
		margin: 10px auto;
		width: 800px;
		}
		</style>
	</head>
	<body>
		<!
		Author: arsho
		Facebook: https://www.facebook.com/ars.shovon
		Project: Nearby Hospital using Google Map and Geolocation API.
		Customized Google map to display nearby hospitals in current location.
		This page can't load Google Maps correctly:
		The free request quota for this API key is exceeded. Please change the Google API key to your key.
		If the browser doesnot have geolocation I set it to a default location. Change it as it suits you,
		To customize more: https://developers.google.com/maps/documentation/javascript/examples/place-search-pagination
		-->
		<!-- <div id="map"></div> -->
		<!-- <div>
				<h1 style="text-align:center; font-size: 50px;">TODO list</h1>
				<form>
						<input type="text" name="newTodo">
						<input type="submit" name="Add" >
				</form>
		</div>
		<div>
				<ul class="todoList">
						
				</ul>
		</div>
		<script type="text/javascript" src="js/js.js"></script> -->
		<!-- <script type="javascript">
			var map;
		function initMap() {
		// Create the map.
			var pyrmont = {
				lat: 23.8701334,
				lng: 90.2713944
			};
			if (navigator.geolocation) {
				try {
					navigator.geolocation.getCurrentPosition(function(position) {
					var pyrmont = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
					};
				});
				} catch (err) {
				}
			}
			map = new google.maps.Map(document.getElementById('map'), {
			center: pyrmont,
			zoom: 17
			});
			// Create the places service.
			var service = new google.maps.places.PlacesService(map);
			// Perform a nearby search.
			service.nearbySearch({
			location: pyrmont,
			radius: 4000,
			type: ['hospital']
			},
			function(results, status, pagination) {
			if (status !== 'OK') return;
			createMarkers(results);
			getNextPage = pagination.hasNextPage && function() {
			pagination.nextPage();
			};
			});
		}

		function createMarkers(places) {
			var bounds = new google.maps.LatLngBounds();
			for (var i = 0, place; place = places[i]; i++) {
			var image = {
			url: place.icon,
			size: new google.maps.Size(71, 71),
			origin: new google.maps.Point(0, 0),
			anchor: new google.maps.Point(17, 34),
			scaledSize: new google.maps.Size(25, 25)
			};
			var marker = new google.maps.Marker({
			map: map,
			icon: image,
			title: place.name,
			position: place.geometry.location
			});
			bounds.extend(place.geometry.location);
			}
			map.fitBounds(bounds);
		}

		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCz8wUn0FzHnX2olcx3IXSOhvKXIp-Za4o&libraries=places&callback=initMap" async defer></script>
	</body>
</html> -->
<!-- 
<!DOCTYPE html>
<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3> -->
    <!--The div element for the map -->
    <!-- <div id="map"></div> -->
    <!-- <?php 
    	// echo "<pre>"; print_r($details); echo "</pre>";
     ?> -->

    <!-- <script type="text/javascript" src="../web/js/js/jquery.min.js"></script> -->
<!--
    <script type="text/javascript">
        	$.ajax({
				
				
          url: "http://".$_SERVER['HTTP_HOST']."/rstl_pm/main/mapdata",
          method: "GET",
          
				success: function(data){
					// To encode an object (This produces a string)
					// var json_str = JSON.stringify(data); 

					// To decode (This produces an object)
					var obj = JSON.parse(data);
					// JSON.parse(msg)
					console.log(obj.rows[0].elements[0]);
					console.log(obj.rows[0].elements[0].distance.text);
					console.log(obj.rows[0].elements[0].duration.text);
				},
			error: function(xhr, status){
				console.log('huhu');
			}
			})
    	;
    	
    </script>  -->

   <!--  <script>
// Initialize and add the map
function initMap() {
 // Create the map.
			var pyrmont = {
				lat: 8.474122, 
				lng: 124.681092
			};
			if (navigator.geolocation) {
				try {
					navigator.geolocation.getCurrentPosition(function(position) {
					var pyrmont = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
					};
				});
				} catch (err) {
				}
			}
			map = new google.maps.Map(document.getElementById('map'), {
			center: pyrmont,
			zoom: 17
			});
			// Create the places service.
			var service = new google.maps.places.PlacesService(map);
			// Perform a nearby search.
			service.nearbySearch({
			location: pyrmont,
			radius: 4000,
			type: ['hospital']
			},
			function(results, status, pagination) {
			if (status !== 'OK') return;
			createMarkers(results);
			getNextPage = pagination.hasNextPage && function() {
			pagination.nextPage();
			};
			});
}

function createMarkers(places) {
			var bounds = new google.maps.LatLngBounds();
			for (var i = 0, place; place = places[i]; i++) {
			var image = {
			url: place.icon,
			size: new google.maps.Size(71, 71),
			origin: new google.maps.Point(0, 0),
			anchor: new google.maps.Point(17, 34),
			scaledSize: new google.maps.Size(25, 25)
			};
			var marker = new google.maps.Marker({
			map: map,
			icon: image,
			title: place.name,
			position: place.geometry.location
			});
			bounds.extend(place.geometry.location);
			}
			map.fitBounds(bounds);
		}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCz8wUn0FzHnX2olcx3IXSOhvKXIp-Za4o&libraries=places&callback=initMap">
    </script>
  </body>
</html> -->

<!-- 
https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=Washington,DC&destinations=New+York+City,NY&key=AIzaSyCz8wUn0FzHnX2olcx3IXSOhvKXIp-Za4o
