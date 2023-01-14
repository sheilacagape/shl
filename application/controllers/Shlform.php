<?php
include_once (dirname(__FILE__) . "/Main.php");

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Shlform extends Main {

	public function __construct(){
		parent::__construct();
		$this->load->model('Shlform_model');
	
		$this->load->library('Pdf_lib');
	} 

	

	public function createForm(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$new = $this->input->post('data');
			$tspot_id = $this->Shlform_model->addNewForm($new);
			$this->db->reconnect();
			if ($new[0] == 1) {
				$this->Shlform_model->addNewFormSamples($tspot_id,$new[0],$new[3]);	
				$this->db->reconnect();
				$this->Shlform_model->addNewFormSamples($tspot_id,$new[0],$new[3]);	
				$this->db->reconnect();
				for ($i=0; $i < 5; $i++) { 
					$this->Shlform_model->updateAttrofPDT($i+1,$tspot_id);
					$this->db->reconnect();
				}
			} else if ($new[0] == 2) {
				$this->Shlform_model->addNewTriads($tspot_id);	
				$this->db->reconnect();	
				for ($i=0; $i < 15; $i++) { 
					$this->Shlform_model->updateInstanceofTT($i+1,$tspot_id);
					$this->db->reconnect();
				}
			}
			echo "Successfully created a new form. You can now edit its details.";
		}
	}


	public function delForm(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$array =$_POST['data'];
			$this->Shlform_model->delForm(0,$array);
			echo "Successfully deleted form.";
		}
	}

	public function getOneForm(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$id = $this->input->post('id');
			$data['oneForm'] = $this->Shlform_model->getOneForm($id);
			$this->db->reconnect();
			
			if ($data['oneForm'][0]->form_type_id == 1 ) {
				$data['oneFormSamples'] = $this->Shlform_model->getOneFormSamples($data['oneForm'][0]->id,1);
				$this->db->reconnect();
				$data['formAttr'] = $this->Shlform_model->getFormAttr($data['oneForm'][0]->id);
				$this->load->view('contents/onepdtform',$data);
			} else if ($data['oneForm'][0]->form_type_id == 2 ) {
				//$data['oneFormSamples'] = $this->Shlform_model->getOneFormSamples($data['oneForm'][0]->id,2);
				$this->db->reconnect();
				$data['triadcodes'] = $this->Shlform_model->getTriadCodes($data['oneForm'][0]->id);
				$this->load->view('contents/onettform',$data);
			} else {

			}
			
		}
	}

	public function updateTriadCodes(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data = $this->input->post('data');
			$triadcodes = $data[0];
			$triadcodesid = $data[1];
			$evalid = $data[2];
			for ($i=0; $i < count($triadcodes); $i++) { 
				$this->Shlform_model->updateTriadCodes($triadcodes[$i],$triadcodesid[$i]);
				$this->db->reconnect();
			}

			

			echo $evalid;
		}
	}

	
	public function openForm(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$id = $this->input->post('data');
			$open = $this->Shlform_model->getOneForm($id);
			if ($open[0]->open_for_eval == 0) {
				$this->Shlform_model->openForm($id,1);
				echo "Form is now open for evaluation.";	
			} else {
				$this->Shlform_model->openForm($id,0);
				echo "Form is now close for evaluation.";	
			}
			
			
			
		}
	}

	public function updateSample(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$details = $this->input->post('data');
			if ($details[2] == 1 ) {
				$this->Shlform_model->updatePDTSample($details);
			} else if ($details[2] == 2 ) {
				$this->Shlform_model->updateTTSample($details);
			} else {

			}
			echo $details[1];
			
		}
	}

	public function updateAttrDesc(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$details = $this->input->post('data');
			$this->Shlform_model->updateAttrDesc($details);
			
			echo $details[1];
			
		}
	}

	public function getOneFormSheet(){
		if($this->checkLoggedIn() && ($_SESSION['access']==1)){
			$id = $this->input->post('id');
			$data['oneForm'] = $this->Shlform_model->getOneForm($id);
			$this->db->reconnect();
			
			if ($data['oneForm'][0]->form_type_id == 1 ) {
				$data['oneFormSamples'] = $this->Shlform_model->getOneFormSamples($data['oneForm'][0]->id,1);
				$this->db->reconnect();
				$data['panelistdata'] = $this->Shlform_model->getPanelistData($_SESSION['userid']);
				$this->db->reconnect();
				$data['answer'] = $this->Shlform_model->getPanelistAnswer($_SESSION['userid'],$data['oneForm'][0]->id,1);
				$this->db->reconnect();
				$data['formAttr'] = $this->Shlform_model->getFormAttr($data['oneForm'][0]->id);
				$data['activeAttr'] = 0;
				for ($i=0; $i < count($data['formAttr']); $i++) { 
					if ($data['formAttr'][$i]->status == "1") {
						$data['activeAttr'] += 1;
					}
				}
				$this->load->view('contents/onepdtformsheet',$data);
			} else if ($data['oneForm'][0]->form_type_id == 2 ) {
				$checker = $this->Shlform_model->TTchecker($data['oneForm'][0]->id, $_SESSION['userid']);
				if (count($checker)>0) {
					$data['oneFormSamples'] = $this->Shlform_model->getOneFormSamples($data['oneForm'][0]->id,2, $_SESSION['userid'],$checker[0]->tt_instance_id);
					$this->db->reconnect();
					$data['panelistdata'] = $this->Shlform_model->getPanelistData($_SESSION['userid']);
					$this->db->reconnect();
					$data['answer'] = $this->Shlform_model->getPanelistAnswer($_SESSION['userid'],$data['oneForm'][0]->id,2);
					$this->load->view('contents/onettformsheet',$data);
				} else {
					$setThis = $this->Shlform_model->TTchecker($data['oneForm'][0]->id);
					$this->db->reconnect();
					if (count($setThis)==0) {
						$this->getOpenForms();

					} else {
						$this->Shlform_model->setTTInstance($setThis[0]->tt_instance_id,$_SESSION['userid']);
						$this->db->reconnect();
						$data['oneFormSamples'] = $this->Shlform_model->getOneFormSamples($data['oneForm'][0]->id,2, $_SESSION['userid'],$setThis[0]->tt_instance_id);
						$this->db->reconnect();
						$data['panelistdata'] = $this->Shlform_model->getPanelistData($_SESSION['userid']);
						$this->db->reconnect();
						$data['answer'] = $this->Shlform_model->getPanelistAnswer($_SESSION['userid'],$data['oneForm'][0]->id,2);
						$this->load->view('contents/onettformsheet',$data);	
					}
				}
				
				
			} else {

			}
		}
	}

	public function perEvalResponse(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$id = $this->input->post('id');
			$ftid = $this->input->post('ftid');
			$data['id'] = $id;
			$data['ftid'] = $ftid;
			if ($ftid == 1 ) {
				$data['pdtanswers'] = $this->Shlform_model->getOneEvalAnswers($id,$ftid);
			} else if ($ftid == 2 ) {
				$data['ttanswers'] = $this->Shlform_model->getOneEvalAnswers($id,$ftid);
				
			} else {

			}
			$this->load->view('contents/perevalresponse',$data);
			
		}
	}
	
	public function submitAnswer(){
		if($this->checkLoggedIn() && ($_SESSION['access']==1)){
			$data = $this->input->post('data');
			if ($data[3] == 1 ) {
				for ($i=0; $i < count($data[1]); $i++) { 
					$this->Shlform_model->submitAnswer($data,$_SESSION['userid'], $data[1][$i],$i+1);
					$this->db->reconnect();
				}
				
			} else if ($data[3] == 2 ) {
				$this->Shlform_model->submitAnswer($data,$_SESSION['userid']);
			} else {

			}
			echo $data[0];
			
		}
	}

	public function printresponse(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$aid = $this->input->get('t_id');
			$ftid = $this->input->get('ftid');
			$fid = $this->input->get('formid');
			
			
			if ($ftid == 1 ) {
			    $data['formdata'] = $this->Shlform_model->getOneForm($fid);
				$this->db->reconnect();
			    $data['oneFormSamples'] = $this->Shlform_model->getOneFormSamples($data['formdata'][0]->id,1);
				$this->db->reconnect();
				$data['panelistdata'] = $this->Shlform_model->getPanelistData($_SESSION['userid']);
				$this->db->reconnect();
				$data['answer'] = $this->Shlform_model->getPanelistAnswer($_SESSION['userid'],$fid,1);
				$this->db->reconnect();
				$data['formAttr'] = $this->Shlform_model->getFormAttr($fid);
				$data['activeAttr'] = 0;
				for ($i=0; $i < count($data['formAttr']); $i++) { 
					if ($data['formAttr'][$i]->status == "1") {
						$data['activeAttr'] += 1;
					}
				}
				
			    $data['docTitle'] = $this->Shlform_model->getOneForm($fid);
			    $this->load->view('contents/pdtreport',$data);
			    
			   } else if ($ftid == 2 ) {
			    $data['formdata'] = $this->Shlform_model->getOneForm($fid);
			    $this->db->reconnect();
			    $data['answer'] = $this->Shlform_model->getAnswer($aid,2,$data['formdata'][0]->id);
			    $this->db->reconnect();
			    $data['oneFormSamples'] = $this->Shlform_model->getOneFormSamples($fid,2,$data['answer'][0]->panelist_id,$data['answer'][0]->tt_instance_id);
			    $this->db->reconnect();
			    $data['panelistdata'] = $this->Shlform_model->getPanelistData($data['answer'][0]->panelist_id);
			    $this->load->view('contents/ttreport',$data); 
			    
			   } else {
			   		
			   }
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