<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Tspot_model');
		$this->load->library('Pdf_lib');
	}


	public function generate(){
		$id = $this->input->get('ord_id');
		$data['tspotdetails'] = $this->Tspot_model->getTspot($id);
		$this->db->reconnect();
		$data['acmr'] = $this->Tspot_model->getACMR($id);
		$this->db->reconnect();
		$data['attach'] = $this->Tspot_model->getAttachments($id);
		$this->load->view('contents/onetspot',$data);

		//$id = $this->input->get('ord_id');
		//$data['customer'] = $this->Main_model->retrieve($id);
		//$data['prod'] = $this->Main_model->fetchProd($id);
		$data['docTitle'] = $data['tspotdetails'][0]->code_no."_MC-F1";
		//$data['total'] = $this->Main_model->getTotal($id);
		//if(count($data['total']) <= 0  ){
		//	$data['total'] = array((object) array('totalsum' => '0.00'));
		//}
		//echo $data['docTitle'];
		$this->load->view('contents/report',$data);	
	}


} 
