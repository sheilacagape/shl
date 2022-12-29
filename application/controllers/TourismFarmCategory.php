<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class TourismFarmCategory extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('TourismFarmCategory_model','model');
	} 

	public function index(){
	
	}

	public function tourCateg(){
		
		$category = $this->model->getCategory();

		$catType = array();

		for ($i=0; $i < count($category); $i++) { 
			$this->db->reconnect();
			$estTypes = $this->model->getEstType($category[$i]->category_id);

			array_push($catType, array('cat'=>$category[$i],'type'=> $estTypes));
		}

		$data['catype'] = $catType;
 
		$this->load->view('contents/category',$data);
	}

	public function oneCategory(){
		$this->load->view('contents/onecategory');
	}

	public function addNewCategory(){
		if($this->checkLoggedIn()){
			$newcat = $this->input->post('data');
			$this->model->addNewCategory($newcat);
			echo "Successfully updated account details.";
			// var_dump($userdet) ;
		} else {
			echo "error";
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

