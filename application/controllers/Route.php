<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Route extends CI_Controller {

	public function __construct(){
		parent::__construct();
	} 

	public function index(){
	
	}

	public function routes(){
		
		$this->load->view('contents/route');
	
	}
}

