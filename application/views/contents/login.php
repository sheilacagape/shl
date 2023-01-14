
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
