<div>
	<br>
	<h2 class="text-center">Solo Profile</h2>

	 <div class="row">
	 	<div class="col-md-4">
	 		<img src="algk" style="height: 200px;width: 200px;">
	 	</div>
	 	<div class="col-md-8">
	 		<p>Name: <?php echo $user[0]->firstname.$user[0]->middlename.$user[0]->lastname; ?></p>
	 		<p>Address: <?php if (count($addr)>0) {
	 			echo $addr[0]->province;
	 		}  ?></p>
	 		<p>Birthday: <?php echo $user[0]->birthday; ?></p>
	 		<p>Employment Status:  <?php echo $user[0]->employment_status; ?></p>
	 		<p>Marital Status:  <?php echo $user[0]->marital_status; ?></p>
	 		<p>Username: <?php echo $user[0]->username; ?></p>
	 		<p>Password: <?php echo $user[0]->password; ?></p>
	 		<p>Email: <?php echo $user[0]->email; ?></p>
	 		<p>Contact Number: <?php echo $user[0]->contact_number; ?></p>
	 		<p>Sex: <?php echo $user[0]->sex; ?></p>
	 	</div>
	 </div>

	 <div class="row">

	 	<?php 
	 		if (isset($iti) && (count($iti)>0) && ($user[0]->access_level=='2')) {
	 			?>
	 			<h2 class="text-center">Itineraries Created</h2>
<table class="table">
	<thead>
		<tr>
			<th>Itinerary No.</th>
			<th>Itinerary Name</th>
			<th>Created by</th>
			<th>Date Created</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			// var_dump($iti);
			foreach ($iti as $key) {
		?>
			<tr>
				<td><?php echo $key->itinerary_id ?></td>
				<td><?php echo $key->itinerary_name ?></td>
				<td><?php echo $key->lastname.", ".$key->firstname ?></td>
				<td><?php echo $key->date_created ?></td>
				<td>
					<button  type="button" class="btn btn-default viewIti" id="<?php echo $key->itinerary_id ?>" >
				   <span class="glyphicon glyphicon-eye-open"></span> View 
				  </button>
				</td>
			</tr>

		<?php
			} 

		 ?>
	</tbody>
</table>

<script type="text/javascript">
	$('.viewIti').click(function(){
	  	var id = $(this).attr('id');
		// console.log(id);
		 $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneItinerary",{id:id});
	        // // alert($(this).attr("class"));
	        // alert('j');
	    });
</script>	
<?php
	 		}else {
				if ($user[0]->access_level=='2') {
					?>
				<table class="table">
					<thead>
						<tr>
							<th>Itinerary No.</th>
							<th>Itinerary Name</th>
							<th>Created by</th>
							<th>Date Created</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="5" class="text-center">No Itinerary Created.</td>
						</tr>
					</tbody>
				</table>
				

				<?php
				}
			}
	 			
	 	 ?>
	 	
		<?php 
			if(isset($owned) && (count($owned)>0) && ($user[0]->access_level == '1')){
				?>
				<table class="table">
	 		<thead>
		<tr>
			<th>Establishment Name</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
			<?php
				foreach ($owned as $key) {
		?>
		<tr>
			<td><?php echo $key->est_name; ?></td>
			<td><?php
				$address ="";
				if (!empty($key->street)) {
					$address = $address.$key->street.", ";
				} 

				if ($key->barangay != null) {
					$address = $address.$key->barangay.", ";
				} 

				if ($key->city != null) {
					$address = $address.$key->city.", ";
				} 

				if ($key->municipality != null) {
					$address = $address.$key->municipality.", ";
				} 

				if ($key->province != null) {
					$address = $address.$key->province;
				} 

			 echo $address; ?></td>
			<td>
				<!-- Single button -->
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				    Action <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu" id="<?php echo($key->est_id); ?>" >
				    <li><a class="viewFarm">View</a></li>
				    <li><a  class="deleteFarm">Delete</a></li>
				  </ul>
				</div>
<div class="modal fade <?php echo $key->est_id.'momodal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $key->est_id.'t-modal'; ?> ">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Farm</h4>
      </div>
      <div class="modal-body">
      	<small>Are you sure you want to delete <?php echo $key->farm_name; ?>?</small>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default modal-btn-oh" id="<?php echo $key->est_id.'_deleteSt' ?>">Yes</button>
        <button type="button" class="btn btn-primary modal-btn-di" id="<?php echo $key->est_id.'_deleteeSt' ?>">No</button>
      </div>
    </div>
  </div>
</div>		
			</td>
		</tr>

		<?php
				}
			} else { 
				if ($user[0]->access_level == "1") {
					# code...
				
				?>
				<table class="table">
					<thead>
						<tr>
							<th>Farm Name</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="3" class="text-center">No Owned Establishment.</td>
						</tr>
					</tbody>
				</table>
				

				<?php
				}
			}

		 ?>
		
	</tbody>
	 	</table>
	 </div>
</div>

<script type="text/javascript">
	  $('.viewFarm').click(function(){
    	  	var id = $(this).parents('ul:first').attr('id');
        	console.log(id);
        	 $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneFarm",{id:id});
		        // // alert($(this).attr("class"));
		        // alert('j');
		    });


</script>
