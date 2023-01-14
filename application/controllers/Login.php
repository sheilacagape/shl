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
	
	

}