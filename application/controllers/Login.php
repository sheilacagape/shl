<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
	} 


	public function index($msg =null)
	{
		if($msg!=null){
			$data['content'] = 'contents/login';
			$data['msg'] = $msg;
			$data['bg'] = base_url('assets/img/bg.jpeg');
			$this->load->view('portal',$data);
		} else {
			$data['content'] = 'contents/login';
			$data['bg'] = base_url('assets/img/bg.jpeg');
			$this->load->view('portal',$data);
		}
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
				$data['content'] =('contents/farmowners');
				$data['user_id'] = $log[0]->user_id;
				$this->db->reconnect();
				$data['farms'] = $this->Main_model->getFarmWO($log[0]->user_id);
				$data['user'] = $this->Main_model->getFarmOwners($log[0]->user_id);
				$this->load->view('portal',$data);
			} else {
				$msg = 'You do not have the right access! Please contact the administration!';
				$this->index($msg);
			}
			
		} else {
			$msg = 'You are not registered!';
			$this->index($msg);
		}
	}

}

