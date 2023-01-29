<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Main_model');
	}  

	public function index($msg =null)
	{
		if($msg!=null){
			$data['content'] = 'contents/login';
			$data['msg'] = $msg;
			$data['bg'] = base_url('assets/img/bg.jpg');

			$this->load->view('portal',$data);
		} else {
			

			$data['content'] = 'contents/login';
			$data['bg'] = base_url('assets/img/bg.jpg');
			$this->load->view('portal',$data);
		}
		// 41.43206,-81.38992|-33.86748,151.20699
	}

	public function login(){
		$data = $this->input->post();

		$non_xss= array(
		'un' => $this->input->post('Username'),
		'pass' => $this->input->post('Password')
		);

		$xss_data = $this->security->xss_clean($non_xss);
		$log = $this->Main_model->verify($xss_data);
		
		if (count($log)==1){
			$access = $log[0]->access_level;
			$this->session->set_userdata('un', $non_xss['un']);
			$this->session->set_userdata('pass', $non_xss['pass']);
			$this->session->set_userdata('access', $access);
			$this->session->set_userdata('userid', $log[0]->user_id);
			$msg = 'You have Successfully Logged In.';
			if($access==0){
				$data['user_id'] = $log[0]->user_id;
				$this->dashboard($data['user_id']);
			} elseif ($access==1) {
				$data['user_id'] = $log[0]->user_id;
				$this->panelistView($data['user_id']);
			} else {
				$msg = 'You do not have the right access! Please contact the administration!';
				$this->index($msg);
			}
			
		} else {
			$msg = 'You are not registered!';
			$this->index($msg);
		}
	}

	public function dashboard($id=null){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			if($id!= null){
				$data['content'] = 'contents/dashboard';
				$data['user'] = $this->Main_model->getUser($id); 
				$this->load->view('portal',$data);
			} else {
				$idd = $this->input->post('id');
				$data['content'] = 'contents/dashboard';
				$data['user'] = $this->Main_model->getUser($idd);
				$this->load->view('portal',$data);
			}
		}
		
	}

	public function panelistView($id){
		if($this->checkLoggedIn() && ($_SESSION['access']==1)){
			if($id!= null){
				$data['content'] = 'contents/panelistdb';
				$data['user'] = $this->Main_model->getUser($id); 
				$this->load->view('portal',$data);
			} else {
				$idd = $this->input->post('id');
				$data['content'] = 'contents/dashboard';
				$data['user'] = $this->Main_model->getUser($idd);
				$this->load->view('portal',$data);
			}
		}
	}
	
	public function updateUser (){
		
		if($this->checkLoggedIn()){
			$userdet = $this->input->post('data');
			$this->Main_model->updateUser($userdet);
			echo "Successfully updated account details.";
			// var_dump($userdet) ;
		}
	}


	public function getAllForms(){
		// echo "string";
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data['forms'] = $this->Main_model->getAllForms();
			$this->db->reconnect();			
			$data['user'] = $this->Main_model->getUser($_SESSION['userid']); 
			$this->load->view('contents/forms',$data);
		} 
		
	} 

	public function getOpenForms(){
		// echo "string";
		if($this->checkLoggedIn() && ($_SESSION['access']==1)){
			$data['forms'] = $this->Main_model->getOpenForms($_SESSION['userid']);
			$this->db->reconnect();			
			$data['user'] = $this->Main_model->getUser($_SESSION['userid']); 
			$this->load->view('contents/openforms',$data);
		} 
		
	} 

	public function getClosedForms(){
		// echo "string";
		if($this->checkLoggedIn() && ($_SESSION['access']==1)){
			$data['forms'] = $this->Main_model->getClosedForms($_SESSION['userid']);
			$this->db->reconnect();			
			$data['user'] = $this->Main_model->getUser($_SESSION['userid']); 
			$this->load->view('contents/closeforms',$data);
		} 
		
	} 

	public function getAllResponses(){
		// echo "string";
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data['forms'] = $this->Main_model->getActiveForms();
			$this->db->reconnect();	
			$this->load->view('contents/allresponse',$data);
		} 
		
	} 

	public function getAllResponsesAnaView(){
		// echo "string";
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data['forms'] = $this->Main_model->getActiveForms();
			$this->db->reconnect();	
			$this->load->view('contents/analystresponseview',$data);
		} 
		
	} 

	public function getAllPanelists(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data['panelist'] = $this->Main_model->getAllPanelists();
			$this->db->reconnect();			
			$data['analyst'] = $this->Main_model->getAllAnalyst();
			$data['loggedinUser'] = $_SESSION['userid'];
			$this->load->view('contents/allpanelist',$data);
		} 
	}

	public function changePanelStat(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data = $this->input->post('data');
			$open = $this->Main_model->changePanelStat($data);
			if ($data[0]==1) {
				echo "Panelist is now disabled.";	
			} else {
				echo "Panelist is now enabled.";
			}
		}
	}

	public function addUser(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data = $this->input->post('data');
			$this->Main_model->addUser($data);
			echo "Successfully added new user.";	
			
		}
	}

	

	public function updateUserDetails(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data = $this->input->post('data');
			$this->Main_model->updateUserDetails($data);
			echo "Successfully updated user details.";	
			
		}
	}

	public function addUserAttach(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$link = $this->input->get("link");
			$id = $this->input->get("id");
			

			$this->Main_model->addUserAttach($link,$id);

			echo "Successfully uploaded user photo.";	
		}
	}


	public function logout(){
		if($this->checkLoggedIn()){
			$this->session->sess_destroy();
			$msg = 'You have Successfully Logged Out!';
			$this->index($msg);
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