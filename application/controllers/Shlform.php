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

	public function getOneFormPanel(){
		if($this->checkLoggedIn() && ($_SESSION['access']==1)){
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

	

	public function updateEvalDate(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data = $this->input->post('data');
			$this->Shlform_model->updateEvalDate($data);

			echo $data[0];
		}
	}

	
	public function updateRemarks(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data = $this->input->post('data');
			$this->Shlform_model->updateRemarks($data);

			echo $data[0];
		}
	}

	public function updateSampleA(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data = $this->input->post('data');
			$this->Shlform_model->updateSampleA($data);

			echo $data[0];
		}
	}

	public function updateSampleB(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data = $this->input->post('data');
			$this->Shlform_model->updateSampleB($data);

			echo $data[0];
		}
	}

	
	public function updateCommentA(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data = $this->input->post('data');
			$this->Shlform_model->updateCommentA($data);

			echo $data[0];
		}
	}

	public function updateCommentB(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data = $this->input->post('data');
			$this->Shlform_model->updateCommentB($data);

			echo $data[0];
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

	
	public function updateFormDetails(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$details = $this->input->post('data');
			if ($details[1] == 1 ) {
				$this->Shlform_model->updateFormDetails($details);
			} else if ($details[1] == 2 ) {
				$this->Shlform_model->updateFormDetails($details);
			} else {

			}
			echo $details[0];
			
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

	public function seeEvaluationSummary(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$id = $this->input->post('id');
			$ftid = $this->input->post('ftid');
			$data['id'] = $id;
			$data['ftid'] = $ftid;
			if ($ftid == 1 ) {
				$data['left'] = 0;
				$data['right'] = 0;
				$data['pdtsamples'] = $this->Shlform_model->getPDTSample($id);
				$this->db->reconnect();
				$data['pdtattr'] = $this->Shlform_model->getPDTAttr($id);
				$this->db->reconnect();
				$data['pdtanswers'] = $this->Shlform_model->getOneEvalAnswers($id,$ftid);
				$this->db->reconnect();
				$data['perrecord'] = array();
				$data['comment'] = "";

				for ($i=0; $i < count($data['pdtanswers']); $i++) { 
					$rec = $this->Shlform_model->getOnePDTAnswer($id,$data['pdtanswers'][$i]->user_id);
					$this->db->reconnect();
					array_push($data['perrecord'],$rec);
					$data['comment'] .= $data['pdtanswers'][$i]->comments ."; ";
				}

				for ($i=0; $i < count($data['perrecord']); $i++) { 
					if (isset($data['perrecord'][$i][0])){
						if ($data['perrecord'][$i][0]->pdt_sample_odd_id==$data['pdtsamples'][0]->pdt_sample_id) {
						 	$data['left']++;
						} 
					}
					if (isset($data['perrecord'][$i][1])){
						if ($data['perrecord'][$i][1]->pdt_sample_odd_id==$data['pdtsamples'][0]->pdt_sample_id) {
						 	$data['left']++;
						} 
					}
					if (isset($data['perrecord'][$i][2])){
						if ($data['perrecord'][$i][2]->pdt_sample_odd_id==$data['pdtsamples'][0]->pdt_sample_id) {
						 	$data['left']++;
						} 
					}
					if (isset($data['perrecord'][$i][3])){
						if ($data['perrecord'][$i][3]->pdt_sample_odd_id==$data['pdtsamples'][0]->pdt_sample_id) {
						 	$data['left']++;
						} 
					}
					if (isset($data['perrecord'][$i][4])){
						if ($data['perrecord'][$i][4]->pdt_sample_odd_id==$data['pdtsamples'][0]->pdt_sample_id) {
						 	$data['left']++;
						} 
					}	

					if (isset($data['perrecord'][$i][0])){
						if ($data['perrecord'][$i][0]->pdt_sample_odd_id==$data['pdtsamples'][1]->pdt_sample_id) {
						 	$data['right']++;
						} 
					}
					if (isset($data['perrecord'][$i][1])){
						if ($data['perrecord'][$i][1]->pdt_sample_odd_id==$data['pdtsamples'][1]->pdt_sample_id) {
						 	$data['right']++;
						} 
					}
					if (isset($data['perrecord'][$i][2])){
						if ($data['perrecord'][$i][2]->pdt_sample_odd_id==$data['pdtsamples'][1]->pdt_sample_id) {
						 	$data['right']++;
						} 
					}
					if (isset($data['perrecord'][$i][3])){
						if ($data['perrecord'][$i][3]->pdt_sample_odd_id==$data['pdtsamples'][1]->pdt_sample_id) {
						 	$data['right']++;
						} 
					}
					if (isset($data['perrecord'][$i][4])){
						if ($data['perrecord'][$i][4]->pdt_sample_odd_id==$data['pdtsamples'][1]->pdt_sample_id) {
						 	$data['right']++;
						} 
					}	
				}

				$this->load->view('contents/pdtresult',$data);
			} else if ($ftid == 2 ) {
				$data['ttanswers'] = $this->Shlform_model->getOneEvalAnswers($id,$ftid);
				$data['triad'] = $this->Shlform_model->getTriads($id);
				$data['check'] = 0;
				$data['wrong'] = 0;
				$data['comment'] = "";

				for ($i=0; $i < count($data['ttanswers']); $i++) { 
					if ($data['ttanswers'][$i]->tt_sample_odd_id == $data['triad'][$i]->triad_code_id) {
						
						$data['check']++;
					}

					if ($data['ttanswers'][$i]->tt_sample_odd_id != $data['triad'][$i]->triad_code_id) {
						$data['wrong']++;
					}
					$data['comment'] .= $data['ttanswers'][$i]->comments ."; ";
				}
				$this->load->view('contents/ttresult',$data);
			} else {

			}
			
			
		}
	}

	public function printsummary(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$id = $this->input->get('t_id');
			$ftid = $this->input->get('ftid');
			$data['id'] = $id;
			$data['ftid'] = $ftid;
			
			if ($ftid == 1 ) {
			    $data['left'] = 0;
				$data['right'] = 0;
				$data['pdtsamples'] = $this->Shlform_model->getPDTSample($id);
				$this->db->reconnect();
				$data['pdtattr'] = $this->Shlform_model->getPDTAttr($id);
				$this->db->reconnect();
				$data['pdtanswers'] = $this->Shlform_model->getOneEvalAnswers($id,$ftid);
				$this->db->reconnect();
				$data['perrecord'] = array();
				for ($i=0; $i < count($data['pdtanswers']); $i++) { 
					$rec = $this->Shlform_model->getOnePDTAnswer($id,$data['pdtanswers'][$i]->user_id);
					$this->db->reconnect();
					array_push($data['perrecord'],$rec);
				}

				for ($i=0; $i < count($data['perrecord']); $i++) { 
					if (isset($data['perrecord'][$i][0])){
						if ($data['perrecord'][$i][0]->pdt_sample_odd_id==$data['pdtsamples'][0]->pdt_sample_id) {
						 	$data['left']++;
						} 
					}
					if (isset($data['perrecord'][$i][1])){
						if ($data['perrecord'][$i][1]->pdt_sample_odd_id==$data['pdtsamples'][0]->pdt_sample_id) {
						 	$data['left']++;
						} 
					}
					if (isset($data['perrecord'][$i][2])){
						if ($data['perrecord'][$i][2]->pdt_sample_odd_id==$data['pdtsamples'][0]->pdt_sample_id) {
						 	$data['left']++;
						} 
					}
					if (isset($data['perrecord'][$i][3])){
						if ($data['perrecord'][$i][3]->pdt_sample_odd_id==$data['pdtsamples'][0]->pdt_sample_id) {
						 	$data['left']++;
						} 
					}
					if (isset($data['perrecord'][$i][4])){
						if ($data['perrecord'][$i][4]->pdt_sample_odd_id==$data['pdtsamples'][0]->pdt_sample_id) {
						 	$data['left']++;
						} 
					}	

					if (isset($data['perrecord'][$i][0])){
						if ($data['perrecord'][$i][0]->pdt_sample_odd_id==$data['pdtsamples'][1]->pdt_sample_id) {
						 	$data['right']++;
						} 
					}
					if (isset($data['perrecord'][$i][1])){
						if ($data['perrecord'][$i][1]->pdt_sample_odd_id==$data['pdtsamples'][1]->pdt_sample_id) {
						 	$data['right']++;
						} 
					}
					if (isset($data['perrecord'][$i][2])){
						if ($data['perrecord'][$i][2]->pdt_sample_odd_id==$data['pdtsamples'][1]->pdt_sample_id) {
						 	$data['right']++;
						} 
					}
					if (isset($data['perrecord'][$i][3])){
						if ($data['perrecord'][$i][3]->pdt_sample_odd_id==$data['pdtsamples'][1]->pdt_sample_id) {
						 	$data['right']++;
						} 
					}
					if (isset($data['perrecord'][$i][4])){
						if ($data['perrecord'][$i][4]->pdt_sample_odd_id==$data['pdtsamples'][1]->pdt_sample_id) {
						 	$data['right']++;
						} 
					}	
				}
			    
			    $this->load->view('contents/pdtresultprint',$data);
			    
			   } else if ($ftid == 2 ) {
			    $data['ttanswers'] = $this->Shlform_model->getOneEvalAnswers($id,$ftid);
				$data['triad'] = $this->Shlform_model->getTriads($id);
				$data['check'] = 0;
				$data['wrong'] = 0;
				for ($i=0; $i < count($data['ttanswers']); $i++) { 
					if ($data['ttanswers'][$i]->tt_sample_odd_id == $data['triad'][$i]->triad_code_id) {
						
						$data['check']++;
					}

					if ($data['ttanswers'][$i]->tt_sample_odd_id != $data['triad'][$i]->triad_code_id) {
						$data['wrong']++;
					}
				}

			    $this->load->view('contents/ttresultprint',$data); 
			    
			   } else {
			   		
			   }
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
			$userid = $this->input->get('userid');
			$count = $this->input->get('count');
			
			if ($ftid == 1 ) {
			    $data['formdata'] = $this->Shlform_model->getOneForm($fid);
				$this->db->reconnect();
			    $data['oneFormSamples'] = $this->Shlform_model->getOneFormSamples($data['formdata'][0]->id,1);
				$this->db->reconnect();
				$data['panelistdata'] = $this->Shlform_model->getPanelistData($userid);
				$this->db->reconnect();
				$data['answer'] = $this->Shlform_model->getPanelistAnswer($userid,$fid,1);
				$this->db->reconnect();
				$data['formAttr'] = $this->Shlform_model->getFormAttr($fid);
				$data['count'] = $count;
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
			    $data['correct'] = $this->Shlform_model->getCorrect($data['answer'][0]->tt_id, $data['answer'][0]->instance);
			    $this->db->reconnect();
			    $data['oneFormSamples'] = $this->Shlform_model->getOneFormSamples($fid,2,$data['answer'][0]->panelist_id,$data['answer'][0]->tt_instance_id);
			    $this->db->reconnect();
			    $data['panelistdata'] = $this->Shlform_model->getPanelistData($data['answer'][0]->panelist_id);
			    $this->load->view('contents/ttreport',$data); 
			    
			   } else {
			   		
			   }
		}
	}

	public function printpanelresponse(){
		if($this->checkLoggedIn() && ($_SESSION['access']==1)){
			$aid = $this->input->get('t_id');
			$ftid = $this->input->get('ftid');
			$fid = $this->input->get('formid');
			$userid = $this->input->get('userid');
			
			
			if ($ftid == 1 ) {
			    $data['formdata'] = $this->Shlform_model->getOneForm($fid);
				$this->db->reconnect();
			    $data['oneFormSamples'] = $this->Shlform_model->getOneFormSamples($data['formdata'][0]->id,1);
				$this->db->reconnect();
				$data['panelistdata'] = $this->Shlform_model->getPanelistData($userid);
				$this->db->reconnect();
				$data['answer'] = $this->Shlform_model->getPanelistAnswer($userid,$fid,1);
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

	public function printformone(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$id = $this->input->get('t_id');
			$ftid = $this->input->get('ftid');
			
			$data['oneForm'] = $this->Shlform_model->getOneForm($id);
			$this->db->reconnect();
			
			$data['triadcodes'] = $this->Shlform_model->getTriadCodes($data['oneForm'][0]->id);
			$this->load->view('contents/onettformone',$data);
			
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