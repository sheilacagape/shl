<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Tspot extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Tspot_model');
	} 

	public function addTspot(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$new = $this->input->post('data');
			$tspot_id = $this->Tspot_model->addTspot($new);
			
			// var_dump();
			echo "Successfully created a new sidetrip. You can now edit its details.";
			// echo "$new";
		}
	}

	public function getOneTspot(){
		// echo "string";
		// $data['id'] = $this->input->post('id');
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$id = $this->input->post('id');
		$data['tspotdetails'] = $this->Tspot_model->getTspot($id);
		$this->db->reconnect();
		$data['acmr'] = $this->Tspot_model->getACMR($id);
		$this->db->reconnect();
		$data['attach'] = $this->Tspot_model->getAttachments($id);
		$this->load->view('contents/onetspot',$data);
	}
	}

	public function updateLtLng(){
		
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$id = $this->input->post('data');
			$this->Tspot_model->updateLtLng($id);
			echo "Successfully updated the establishment's coordinates.";
		}
	}

	public function deleteSidetrip(){
	
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$array =$_POST['data'];
			$this->Tspot_model->deleteSidetrip(0,$array);
			echo $array;
		}
	}

	public function updateTspots(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$array =$_POST['data'];
		// var_dump($array[1]);
		
		$this->Tspot_model->updateTspots($array);
		//echo $array[0][1];
		echo $array[0];
		//var_dump($array);
	}
	}

	public function addACAttach(){
		if($this->checkLoggedIn()){
		$link = $this->input->get("link");
		$id = $this->input->get("id");
		$desc = $this->input->get("desc");

		$this->Tspot_model->addACAttach($link,$id,$desc);
		// $msg = "Successfully Updated Cover Photo!";
		// $this->editview($id, $msg);
		echo $id;
	}
	}

	

	public function deleteImage(){
		if($this->checkLoggedIn()){
		$array =$_POST['data'];
		$this->Tspot_model->deleteImage(0,$array[0]);
		echo $array[1];
	}
	}

	public function addMaintenance(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$array =$_POST['data'];
		$this->Tspot_model->addnewMR($array);
		echo $array[4];
		// var_dump($array);
	}
	}

	public function updateMR(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$array =$_POST['data'];
		$this->Tspot_model->updateMR($array);
		echo $array[5];
	}
	}

	public function deleteMR(){
	if($this->checkLoggedIn() && ($_SESSION['access']==0)){
		$array =$_POST['data'];
		$this->Tspot_model->deleteMR(0,$array);
		echo $array[1];
	}
	}


	public function updateCover(){
		if($this->checkLoggedIn()){
			$link = $this->input->get("link");
			$id = $this->input->get("id");
			$stid = $this->input->get("stid");

			$this->Tspot_model->updateCover($link,$id,$stid);
			// $msg = "Successfully Updated Cover Photo!";
			// $this->editview($id, $msg);
			echo $id;
		}
	}

	public function delTspot(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$array =$_POST['data'];
			$this->Tspot_model->deleteAC(0,$array);
			echo "Successfully deleted AC.";
		}
	}

	public function deleteAttach(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$array =$_POST['data'];
			$this->Tspot_model->deleteACAttach(0,$array);
			echo $array[1];
		}
	}

	public function getActiveAC(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$activeAC = $this->Tspot_model->getActiveAC();
			echo json_encode($activeAC);

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

	public function updateStat(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$array =$_POST['data'];
			$this->Tspot_model->updateStat($array);
			echo $array[0];
		}
	}
}