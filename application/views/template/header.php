<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/datatables/datatables.min.css');?>">
		<link rel="stylesheet" href="<?= base_url('assets/croppie/croppie.css');?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/css.css');?>">
		<link href="https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css" rel="stylesheet">
		
	</head>
	<?php if(isset($bg)){
		?>
	<body style="background-image: url(<?php echo $bg; ?>);background-repeat: no-repeat; width: 100%;position: relative;
    background-size:100% 100vh;">
    <?php
	} else {
		echo "<body>";
	}

	 ?>

	
