<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Panelist extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Profile_model','model');
	} 

	public function index(){
	
	}

	

}