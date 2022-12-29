<?php
	
	if (isset($bg)) {
		$this->load->view('template/header',$bg);	
	} else {
		$this->load->view('template/header');
	}
	if(isset($content)){
		 $this->load->view($content);
	}
	$this->load->view('template/footer');
?>