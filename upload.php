<?php 

	header('Access-Control-Allow-Origin: *');
	

	if(isset($_POST["featimage"])) {
		$data = $_POST["featimage"];

		$image_array_1 = explode(";", $data);
		$image_array_2 = explode(",", $image_array_1[1]);
		$data = base64_decode($image_array_2[1]);

		$imageName = 'images/'.time().date('Y-M-D').'.jpg' ;

		file_put_contents($imageName, $data);

		$imageName = 'http://'.$_SERVER['HTTP_HOST'].'/rstl_pm/'.$imageName;

		echo $imageName;
	}

	if(isset($_POST["logo"])){
		$data = $_POST["logo"];

		$image_array_1 = explode(";", $data);
		$image_array_2 = explode(",", $image_array_1[1]);
		$data = base64_decode($image_array_2[1]);

		$imageName = 'images/'.time().date('Y-M-D').'.jpg' ;

		file_put_contents($imageName, $data);

		$imageName = 'http://'.$_SERVER['HTTP_HOST'].'/rstl_pm/'.$imageName;

		echo $imageName;
	}

	if(isset($_POST["cover"])){
		$data = $_POST["cover"];

		$image_array_1 = explode(";", $data);
		$image_array_2 = explode(",", $image_array_1[1]);
		$data = base64_decode($image_array_2[1]);

		$imageName = 'images/'.time().date('Y-M-D').'.jpg' ;

		file_put_contents($imageName, $data);

		$imageName = 'http://'.$_SERVER['HTTP_HOST'].'/rstl_pm/'.$imageName;

		echo $imageName;
	}

	if(isset($_POST["featimageST"])){
		$data = $_POST["featimageST"];

		$image_array_1 = explode(";", $data);
		$image_array_2 = explode(",", $image_array_1[1]);
		$data = base64_decode($image_array_2[1]);

		$imageName = 'images/'.time().date('Y-M-D').'.jpg' ;

		file_put_contents($imageName, $data);

		$imageName = 'http://'.$_SERVER['HTTP_HOST'].'/rstl_pm/'.$imageName;

		echo $imageName;
	}

	if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], 'images/' .time().date('Y-M-D').'-'.$_FILES['file']['name']);
        $fileLink = 'http://'.$_SERVER['HTTP_HOST'].'/rstl_pm/images/'.time().date('Y-M-D').'-'.$_FILES['file']['name'];
        echo $fileLink;
    }
 ?>