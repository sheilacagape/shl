<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Vehicle extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Vehicle_model');
	} 
	
	public function index(){
	
	}

	public function addVehicle(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$new = $this->input->post('data');
			$tspot_id = $this->Vehicle_model->addVehicle($new);
			
			// var_dump();
			echo "Successfully created a new Vehicle. You can now edit its details.";
			// echo "$new";
		}
	}

	
	public function getoneVehicle(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$id = $this->input->post('id');
			$data['vehdetails'] = $this->Vehicle_model->getVehDetails($id);
			$this->db->reconnect();
			$data['vehmr'] = $this->Vehicle_model->getVehMR($id);
			$this->db->reconnect();
			$data['attach'] = $this->Vehicle_model->getVehAttachments($id);
			$this->load->view('contents/onevehicle',$data);
		}
	}

	public function updateVehicle(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$array =$_POST['data'];
		// var_dump($array[1]);
		
		$this->Vehicle_model->updateVehicle($array);
		//echo $array[0][1];
		echo $array[0];
		//var_dump($array);
	}
	}

	public function delVehicle(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$array =$_POST['data'];
			$this->Vehicle_model->deleteVehicle(0,$array);
			echo "Successfully deleted Vehicle.";
		}
	}

	public function addVehMR(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$array =$_POST['data'];
		$this->Vehicle_model->addVehMR($array);
		echo $array[4];
		// var_dump($array);
	}
	}

	public function updateVehMR(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$array =$_POST['data'];
		$this->Vehicle_model->updateVehMR($array);
		echo $array[5];
	}
	}

	public function deleteVehMR(){
	if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$array =$_POST['data'];
		$this->Vehicle_model->deleteVehMR(0,$array);
		echo $array[1];
	}
	}

	public function addVehAttach(){
		if($this->checkLoggedIn()){
		$link = $this->input->get("link");
		$id = $this->input->get("id");
		$desc = $this->input->get("desc");

		$this->Vehicle_model->addVehAttach($link,$id,$desc);
		// $msg = "Successfully Updated Cover Photo!";
		// $this->editview($id, $msg);
		echo $id;
	}
	}

	public function deleteVehAttach(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$array =$_POST['data'];
			$this->Vehicle_model->deleteVehAttach(0,$array);
			echo $array[1];
		}
	}

	public function checkLoggedIn(){
		if(isset($_SESSION['un']) && isset($_SESSION['pass']) == true) {
			return true;
		} else {
			$msg = 'You are not logged in!';
			$this->index($msg);
		}
	}
}
?>