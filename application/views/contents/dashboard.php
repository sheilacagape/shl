
	<nav style="background-color: darkblue" class="navbar   navbar-fixed-top"  role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <a style="pointer-events: none; cursor: default;font-weight: bold;color: white; " class="navbar-brand">Shelf Life Laboratory</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <img style="width: 50px; height: 50px; float: right;" src="<?php echo $user[0]->user_pic; ?>">

			    
				
				<ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
			        <li class="dropdown" >
			          <a style="color: white" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user[0]->username; ?><span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <!-- <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li> -->
			            <!-- <li class="divider"></li> -->
			            <li><a href="<?= base_url("main/logout"); ?>">Logout</a></li>
			          </ul>
			        </li>
			    </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
<div>
<br><br><br>

	<div class="col-md-2">
		<div class="list-group">
		  <a href="#" class="list-group-item active">
		    <img style="width: 50px; height: 50px; float: left; margin-right: 5px; " src="<?php echo $user[0]->user_pic; ?>">

		    <h4 class="list-group-item-heading"><?php echo $user[0]->firstname.' '.$user[0]->lastname; ?></h4>
		    <p class="list-group-item-text"><span onclick="location.href='<?php echo base_url();?>main/logout'">Logout</span></p>
		  </a>
		</div>

		<div class="nav-list">
			<div class="list-group col-md-12 text-center">
				<!-- <label>Manage</label> id="create" style="width: 100%;" class="btn btn-info--> 
			  
			  <!--<button type="button" class="btn btn-warning btn-lg" style="width: 100%;" data-toggle="modal" data-target="#myModal">Add New Record</button> -->
			  
			  <!-- <a id="tspots" class="list-group-item">Tourist Spots</a> -->
			  <!-- <a id="routes" class="list-group-item">Routes</a> -->
			</div>
			<div class="list-group" style="">
				<label>Manage</label>
			  <!--<a id="farms" class="list-group-item active">Equipment</a> -->
			  
			  <a id="forms" class="list-group-item active" style="cursor: pointer;">Forms</a>
			  <a id="panelists" class="list-group-item" style="cursor: pointer;">Panelists</a>

			</div>

			<div class="list-group" style="">
				<label>Summary</label>
			  <!--<a id="farms" class="list-group-item active">Equipment</a> -->
			  
			  <a id="responses" class="list-group-item" style="cursor: pointer;">Individual Responses</a>
			  <a id="summary" class="list-group-item" style="cursor: pointer;">Overall Summary</a>
			  
			  <!--
			  <a id="schedvehicle" class="list-group-item" style="cursor: pointer;">Vehicle Maintenance Schedule</a>
			  <a id="chartvehicle" class="list-group-item" style="cursor: pointer;">Vehicle Chart</a>
				-->
			</div>

		</div>
		
	</div>
<!-- Button trigger modal -->
<!--  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch demo modal</button> -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title" id="myModalLabel">Create New</h4>

            </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#uploadTab" aria-controls="uploadTab" role="tab" data-toggle="tab">Equipment</a>

                        </li>
                        <!--<li role="presentation"><a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab">Tourist Spot</a>

                        </li>-->
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="uploadTab">
                        	<form method="POST">
								<br>
								<div class="form-group">
									<label>Equipment Code</label>
									<input class="form-control" name="ecode" placeholder="Equipment Code" type="text">
								</div>
								
								<div class="form-group">
									<label>Equipment Name</label>
									<input class="form-control" name="ename" placeholder="Equipment Name" type="text">
								</div>
								<div class="form-group">
									<label>Manufacturer</label>
									<input class="form-control" name="manufacturer" placeholder="Manufacturer" type="text">
									
								</div>
								<div class="form-group"> 
									<label>Type/Model No.</label>
									<input class="form-control" name="typemodel" placeholder="Type/Model No." type="text">
								</div>
								<div class="form-group">
									<label>Serial No.</label>
									<input class="form-control" name="sn" placeholder="Serial No." type="text">
								</div>
								<div class="form-group">
									<label>Name of Software</label>
									<input class="form-control" name="softwarename" placeholder="Name of Software" type="text">
								</div>
								<div class="form-group">
									<label>Current Location</label>
									<input class="form-control" name="loc" placeholder="Current Location" type="text">
								</div>
								<div class="form-group">
									<label>Date Received/Placed in Service</label>
									<input class="form-control" name="pdate" placeholder="Date Received/Placed in Service" type="date">
								</div>
								<div class="form-group">
									<label>Condition when received</label>
									<input class="form-control" name="condrec" placeholder="Condition when received" type="text" >
								</div>
								<div class="form-group">
									<label>Price</label>
									<input class="form-control" name="price" placeholder="Price" type="number">
								</div>
								<div class="form-group">
									<label>Copy of Manufacturer's Instructions</label>
									<input class="form-control" name="mfgmanual" placeholder="Copy of Manufacturer's Instructions" type="text">
								</div>
								<div class="form-group">
									<label>Other Specifications</label>
									<input class="form-control" name="specs" placeholder="Other Specifications" type="text">
								</div>
								<div class="form-group">
									<label>Remarks</label>
									<input class="form-control" name="remarks" placeholder="Remarks" type="text">
								</div>
								<div style="text-align:  right;">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                				<button type="button" id="createfarm" class="btn btn-primary save">Create</button>
								</div>
							</form>	
							
							
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
	if (isset($user)) {
		// var_dump($user);
	}

 ?>
 <input type="hidden" name="user_id" value="<?php echo $user[0]->user_id; ?>">
	<div id="reloadDiv" class="col-md-10" >
		
	</div><div id="wait" style="display:none;width:100px;height:100px;position:absolute;top:50%;left:50%;"><img src='<?= base_url('loading.gif') ?>' width="200" height="200" /></div>
	<!-- https://mir-s3-cdn-cf.behance.net/project_modules/disp/35771931234507.564a1d2403b3a.gif 
		https://media1.tenor.com/images/8ac12962c05648c55ca85771f4a69b2d/tenor.gif?itemid=9212724-->
</div>

<div class="alert alertt alerttt" style="text-align: center; color: white; position:fixed;top:50%;left:50%;width:500px;height:50px;margin-left:-250px;margin-top:-25px;opacity: 0.7; background-color: gray;display: none;"></div>

	<script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>

<script type="text/javascript">
	$('#createfarm').on('click',function(){
		console.log("yes");
	   	var ecode = $("input[name=ecode]").val();
    	var ename = $("input[name=ename]").val();
    	var manufacturer = $("input[name=manufacturer]").val();
    	var typemodel = $("input[name=typemodel]").val();
    	var sn = $("input[name=sn]").val();
    	var softwarename = $("input[name=softwarename]").val();
    	var loc = $("input[name=loc]").val();
    	var pdate = $("input[name=pdate]").val();
    	var condrec = $("input[name=condrec]").val();
    	var price = $("input[name=price]").val();
    	var mfgmanual = $("input[name=mfgmanual]").val();
    	var specs = $("input[name=specs]").val();
    	var remarks = $("input[name=remarks]").val();

		var loc = new Array(ecode,ename,manufacturer,typemodel,sn,softwarename,loc,pdate,condrec,price,mfgmanual,specs,remarks);
		console.log(loc);
		// $('.btn-default').click();
		// alert(name+fee+desc+street+barangay+city+municipality+province);
		$.ajax({
			url: 'http://'+window.location.host+'/shl/main/addFarm',
			type: "POST",
			data: {"data":loc},
			success: function(data){
				// console.log(data);
				$("#reloadDiv").load('http://'+window.location.host+'/shl/main/getFarm');
				var fade_in = function() {
					$('#myModal').modal('hide');
					  // $(".alert").fadeOut().empty();
					  $('.alertt').text( data);
					  $(".alertt").show();
					}

					var fade_out = function() {
					  $(".alertt").fadeOut().empty();
					  // $(".alert").show();
					}
					setTimeout(fade_in,500);
					setTimeout(fade_out, 3000);
			},
				error: function(){
					
					var fade_in = function() {
					  // $(".alert").fadeOut().empty();
					  $('.alertt').text( "Unable to create new farm." );
					  $(".alertt").show();
					}

					var fade_out = function() {
					  $(".alertt").fadeOut().empty();
					  // $(".alert").show();
					}
					setTimeout(fade_in,500);
					setTimeout(fade_out, 3000);
				}
		});
	});
	$('#createst').on('click',function(){
		console.log("no");
		var name = $("input[name=name2]").val();
		var fee = $("input[name=fee2]").val();
		var desc = $("textarea[name=desc2]").val();
		var street = $("input[name=street2]").val();
		var barangay = $("input[name=barangay2]").val();
		var city = $("input[name=city2]").val();
		var municipality = $("input[name=municipality2]").val();		
		var province = $("select[name=province2]").val();

		var userid = $("input[name=user_id]").val();
		//					  0	  1		2	3		4		5		6			7
		var loc = new Array(name,fee,desc,street,barangay,city,municipality,province);
		// $('.btn-default').click();
		// alert(name+fee+desc+street+barangay+city+municipality+province);
		$.ajax({
			url: 'http://'+window.location.host+'/shl/tspot/addTspot',
			type: "POST",
			data: {"data":loc},
			success: function(data){
				console.log(data);
				$("#reloadDiv").load('http://'+window.location.host+'/shl/main/getFarm');
				var fade_in = function() {
					$('#myModal').modal('hide');
					  // $(".alert").fadeOut().empty();
					  $('.alertt').text( data);
					  $(".alertt").show();
					}

					var fade_out = function() {
					  $(".alertt").fadeOut().empty();
					  // $(".alert").show();
					}
					setTimeout(fade_in,500);
					setTimeout(fade_out, 3000);
			},
				error: function(){
					
					var fade_in = function() {
					  // $(".alert").fadeOut().empty();
					  $('.alertt').text( "Unable to create new farm." );
					  $(".alertt").show();
					}

					var fade_out = function() {
					  $(".alertt").fadeOut().empty();
					  // $(".alert").show();
					}
					setTimeout(fade_in,500);
					setTimeout(fade_out, 3000);
				}
		});
	});

	$('.btn').on('click',function(){
		$("form")[0].reset();
		//$("form")[1].reset();
	});
</script>