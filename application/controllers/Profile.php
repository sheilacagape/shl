<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Profile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Profile_model','model');
	} 

	public function index(){
	
	}

	public function updateUser (){
		
		if($this->checkLoggedIn()){
			$userdet = $this->input->post('data');
			$this->Main_model->updateUser($userdet);
			echo "Successfully updated account details.";
			// var_dump($userdet) ;
		}
	}


	public function allprofile(){
		$this->load->view('contents/profile');
	}

	public function ownerProfile(){
		$data['owners'] = $this->model->allOwners();
		$this->db->reconnect();
		$this->load->view('contents/oprof',$data);
	}

	public function userProfile(){
		
		$data['users'] = $this->model->allUsers();
		$this->db->reconnect();
		$this->load->view('contents/uprof',$data);
	}

	public function oneProfile(){
		$id = $this->input->post('id');
		$stat = $this->input->post('stat');
		if($stat=="1"){
			$data['user'] = $this->model->oneUser($id,$stat);
			// var_dump($data['user'] );
			$data['addr'] = $this->model->userAddr($data['user'][0]->address_id);
			$data['owned'] = $this->model->estOwned($data['user'][0]->user_id);
			$this->load->view('contents/oneprofile',$data);
		} else{
			// echo "string";
			$data['user'] = $this->model->oneUser($id,$stat);
			$data['addr'] = $this->model->userAddr($data['user'][0]->address_id);
			$data['iti'] = $this->model->itiCreated($data['user'][0]->user_id);
			$this->load->view('contents/oneprofile',$data);
		}
		
	}

}

