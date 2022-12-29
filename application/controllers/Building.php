<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Building extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Building_model');
	} 
	
	public function index(){
	
	}

	public function addBuilding(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$new = $this->input->post('data');
			$tspot_id = $this->Building_model->addBuilding($new);
			
			// var_dump();
			echo "Successfully created a new Building. You can now edit its details.";
			// echo "$new";
		}
	}

	public function delBuilding(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$array =$_POST['data'];
			$this->Building_model->deleteBuilding(0,$array);
			echo "Successfully deleted Building.";
		}
	}

	public function getOneBuilding(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$id = $this->input->post('id');
			$data['bldgdetails'] = $this->Building_model->getBldgDetails($id);
			$this->db->reconnect();
			$data['bldgmr'] = $this->Building_model->getBldgMR($id);
			$this->db->reconnect();
			$data['attach'] = $this->Building_model->getBldgAttachments($id);
			$this->load->view('contents/onebuilding',$data);
		}
	}

	public function updateBuilding(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$array =$_POST['data'];
		// var_dump($array[1]);
		
		$this->Building_model->updateBuilding($array);
		//echo $array[0][1];
		echo $array[0];
		//var_dump($array);
	}
	}

	public function addBldgMR(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$array =$_POST['data'];
		$this->Building_model->addBldgMR($array);
		echo $array[4];
		// var_dump($array);
	}
	}

	public function updateBldgMR(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$array =$_POST['data'];
		$this->Building_model->updateBldgMR($array);
		echo $array[5];
	}
	}

	public function deleteBldgMR(){
	if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$array =$_POST['data'];
		$this->Building_model->deleteBldgMR(0,$array);
		echo $array[1];
	}
	}

	public function addBldgAttach(){
		if($this->checkLoggedIn()){
		$link = $this->input->get("link");
		$id = $this->input->get("id");
		$desc = $this->input->get("desc");

		$this->Building_model->addBldgAttach($link,$id,$desc);
		// $msg = "Successfully Updated Cover Photo!";
		// $this->editview($id, $msg);
		echo $id;
	}
	}

	public function deleteBldgAttach(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$array =$_POST['data'];
			$this->Building_model->deleteBldgAttach(0,$array);
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