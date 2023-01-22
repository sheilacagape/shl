<?php 

	header('Access-Control-Allow-Origin: *');
	


	if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], 'images/' .time().date('Y-M-D').'-'.$_FILES['file']['name']);
        $fileLink = 'http://'.$_SERVER['HTTP_HOST'].'/shl/images/'.time().date('Y-M-D').'-'.$_FILES['file']['name'];
        echo $fileLink;
    }
 ?>