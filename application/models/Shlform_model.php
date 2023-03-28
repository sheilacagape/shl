<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shlform_model extends CI_Model {
	
	public function index()
	{ 
		
	}
	public function addNewForm($adr){
		$qry = "INSERT INTO tbl_eval_form_test (form_type_id, product, created_by, test_request_no,sample_code) VALUES ('$adr[0]','$adr[1]','$adr[2]','$adr[3]','$adr[4]')";
		$this->db->query($qry);
		return $this->db->insert_id();
		// return ($qry);
	}

	public function addNewFormSamples($form_id,$type,$user) {
		if ($type == 1) {
			$qry = "INSERT INTO tbl_paired_difference_test_sample (pdt_id, sample_code, status, created_by) VALUES ('".$form_id."','',1,'".$user."')";	
		} else if ($type == 2){
			
		}
		
		
		$this->db->query($qry);
		return $this->db->insert_id();
	}

	public function addNewTriads($id){
		$qry = "INSERT INTO tbl_triad_codes (triangle_tid, triad_no, triad_series, answer) VALUES 
				('".$id."', 1, 'ABB','yes'),
				('".$id."', 1, 'ABB','no'),
				('".$id."', 1, 'ABB','no'),
				('".$id."', 2, 'AAB','no'),
				('".$id."', 2, 'AAB','no'),
				('".$id."', 2, 'AAB','yes'),
				('".$id."', 3, 'ABA','no'),
				('".$id."', 3, 'ABA','yes'),
				('".$id."', 3, 'ABA','no'),
				('".$id."', 4, 'BAA','yes'),
				('".$id."', 4, 'BAA','no'),
				('".$id."', 4, 'BAA','no'),
				('".$id."', 5, 'BBA','no'),
				('".$id."', 5, 'BBA','no'),
				('".$id."', 5, 'BBA','yes'),
				('".$id."', 6, 'BAB','no'),
				('".$id."', 6, 'BAB','yes'),
				('".$id."', 6, 'BAB','no'),
				('".$id."', 7, 'ABB','yes'),
				('".$id."', 7, 'ABB','no'),
				('".$id."', 7, 'ABB','no'),
				('".$id."', 8, 'AAB','no'),
				('".$id."', 8, 'AAB','no'),
				('".$id."', 8, 'AAB','yes'),
				('".$id."', 9, 'ABA','no'),
				('".$id."', 9, 'ABA','yes'),
				('".$id."', 9, 'ABA','no'),
				('".$id."', 10, 'BAA','yes'),
				('".$id."', 10, 'BAA','no'),
				('".$id."', 10, 'BAA','no'),
				('".$id."', 11, 'BBA','no'),
				('".$id."', 11, 'BBA','no'),
				('".$id."', 11, 'BBA','yes'),
				('".$id."', 12, 'BAB','no'),
				('".$id."', 12, 'BAB','yes'),
				('".$id."', 12, 'BAB','no'),
				('".$id."', 13, 'ABB','yes'),
				('".$id."', 13, 'ABB','no'),
				('".$id."', 13, 'ABB','no'),
				('".$id."', 14, 'AAB','no'),
				('".$id."', 14, 'AAB','no'),
				('".$id."', 14, 'AAB','yes'),
				('".$id."', 15, 'ABA','no'),
				('".$id."', 15, 'ABA','yes'),
				('".$id."', 15, 'ABA','no')";	
		$this->db->query($qry);
		return $this->db->insert_id();
	}
	

	public function updateEvalDate($data){
		$qry = "UPDATE tbl_eval_form_test SET date_evaluation = '".$data[1]."' WHERE id = '".$data[0]."'";	
		return $this->db->query($qry);
	}
	
	public function updateSampleA($data){
		$qry = "UPDATE tbl_eval_form_test SET tt_sample_one = '".$data[1]."' WHERE id = '".$data[0]."'";	
		return $this->db->query($qry);
	}

	public function updateSampleB($data){
		$qry = "UPDATE tbl_eval_form_test SET tt_sample_two = '".$data[1]."' WHERE id = '".$data[0]."'";	
		return $this->db->query($qry);
	}

	public function updateInstanceofTT($instance,$ttid){
		$qry = "INSERT INTO tbl_triangle_test_sample (tt_id, instance) VALUES ('".$ttid."','".$instance."')";				
		$this->db->query($qry);
		return $this->db->insert_id();
	}

	public function updateAttrofPDT($instance,$ttid){
		$qry = "INSERT INTO tbl_paired_diff_attr (pdt_id, attr_id) VALUES ('".$ttid."','".$instance."')";				
		$this->db->query($qry);
		return $this->db->insert_id();
	}

	
	public function getFormAttr($id)
	{ 
		$qry = "SELECT * FROM tbl_paired_diff_attr WHERE pdt_id = '".$id."'";	
		return $this->db->query($qry)->result();
	}

	
	public function updateAttrDesc($data)
	{ 
		$qry = "UPDATE tbl_paired_diff_attr SET attr_desc = '".$data[3]."', status = 1 WHERE pdattr_id = '".$data[0]."'";	
		return $this->db->query($qry);
	}

	public function getTriadCodes($id)
	{ 
		$qry = "SELECT * FROM tbl_triad_codes WHERE triangle_tid = '".$id."'";	
		return $this->db->query($qry)->result();
	}

	public function getTriads($id)
	{ 
		$qry = "SELECT * FROM tbl_triad_codes 
JOIN tbl_triangle_test_sample
ON tbl_triad_codes.`triangle_tid` = tbl_triangle_test_sample.`tt_id`
WHERE tbl_triad_codes.`triangle_tid` =  '".$id."' and tbl_triad_codes.`answer` = 'yes'
GROUP BY tbl_triad_codes.`triad_code_id`";	
		return $this->db->query($qry)->result();
	}

	public function updateTriadCodes($triads,$triadsid){
		$qry = "UPDATE tbl_triad_codes SET triad_code = '".$triads."' WHERE triad_code_id = '".$triadsid."'";	

		return $this->db->query($qry);
	}

	public function delForm($z,$id) {
		$qry = "UPDATE tbl_eval_form_test SET status = '".$z."' WHERE id = '".$id."'";	

		return $this->db->query($qry);
	}

	public function getOneForm($id = null)
	{ 
		if($id == null) {
			$qry = "SELECT tbl_eval_form_test.*, tbl_form_type.`test_type`,tbl_users.* FROM tbl_eval_form_test 
JOIN tbl_form_type ON tbl_eval_form_test.`form_type_id` = tbl_form_type.`id`
LEFT JOIN tbl_users ON tbl_eval_form_test.`created_by` = tbl_users.`user_id`
WHERE tbl_eval_form_test.`status` = 1";
		} else {
			$qry = "SELECT tbl_eval_form_test.*, tbl_form_type.`test_type`,tbl_users.* FROM tbl_eval_form_test 
JOIN tbl_form_type ON tbl_eval_form_test.`form_type_id` = tbl_form_type.`id`
LEFT JOIN tbl_users ON tbl_eval_form_test.`created_by` = tbl_users.`user_id`
WHERE tbl_eval_form_test.`status` = 1 and tbl_eval_form_test.`id` = '".$id."'";
		}
		return $this->db->query($qry)->result();
	}

	public function getOneFormSamples($id,$type,$user=null,$instance=null)
	{ 
		if($type == 1) {
			$qry = "SELECT * FROM tbl_paired_difference_test_sample WHERE pdt_id = '".$id."' and status = 1";
		} else if ($type == 2){
			$qry = "SELECT * FROM tbl_triad_codes 
					JOIN tbl_triangle_test_sample ON tbl_triad_codes.`triad_no` = tbl_triangle_test_sample.`instance`
					WHERE tbl_triad_codes.`triangle_tid` = '".$id."' AND user_id = '".$user."' AND tt_instance_id = '".$instance."'";
		}
		return $this->db->query($qry)->result();
	}

	public function TTchecker($id,$user=null)
	{ 
		if ($user == null) {
			$qry = "SELECT * FROM tbl_triangle_test_sample WHERE tt_id = '".$id."' AND  user_id IS NULL";
		} else {
			$qry = "SELECT * FROM tbl_triangle_test_sample WHERE tt_id = '".$id."' and user_id = '".$user."'";
		}
		
		return $this->db->query($qry)->result();
	}

	
	public function setTTInstance($instanceid,$user)
	{ 
		$qry = "UPDATE tbl_triangle_test_sample SET user_id= '".$user."' WHERE tt_instance_id = '".$instanceid."'";
		
		return $this->db->query($qry);
	}

	public function openForm($id,$flag) {
		$qry = "UPDATE tbl_eval_form_test SET open_for_eval= '".$flag."' WHERE id = '".$id."' AND STATUS = 1";
		return $this->db->query($qry);
	}

	
	public function updatePDTSample($details)
	{ 
		$qry = "UPDATE tbl_paired_difference_test_sample SET sample_code='".$details[3]."', created_by = '".$details[4]."' WHERE pdt_sample_id = '".$details[0]."' AND STATUS = 1";
		return $this->db->query($qry);
	}

	public function updateFormDetails($details)
	{ 
		$qry = "UPDATE tbl_eval_form_test SET product='".$details[2]."', test_request_no = '".$details[3]."', sample_code = '".$details[4]."' WHERE id = '".$details[0]."' AND STATUS = 1";
		return $this->db->query($qry);
	}

	public function updateTTSample($details)
	{ 
		$qry = "UPDATE tbl_triangle_test_sample SET sample_code='".$details[3]."', created_by = '".$details[4]."' WHERE tt_sample_id = '".$details[0]."' AND STATUS = 1";
		return $this->db->query($qry);
	}	

	
	public function getPanelistData($id)
	{ 
		$qry = "SELECT * FROM tbl_users	WHERE user_id = '".$id."'";
		return $this->db->query($qry)->result();
	}

	public function submitAnswer($data, $id, $pdt=null,$i=null)
	{ 
		if($data[3] == 1) {
			$qry = "INSERT INTO tbl_paired_difference_answers (pdt_form_id,pdt_attr_id,pdt_sample_odd_id,comments,panelist_id) VALUES ('$data[0]','".$i."',$pdt,'$data[2]','$id')";
		} else if ($data[3] == 2){
			$qry = "INSERT INTO tbl_triangle_test_answers (tt_form_id,tt_sample_odd_id,comments,panelist_id) VALUES ('$data[0]','$data[1]','$data[2]','$id')";
		}
		return $this->db->query($qry);
	}

	
	public function getPanelistAnswer($userid, $id, $ftid)
	{ 
		if($ftid == 1) {
			$qry = "SELECT * FROM tbl_paired_difference_answers WHERE panelist_id = '".$userid."' and pdt_form_id = '".$id."'";
		} else if ($ftid == 2){
			$qry = "SELECT * FROM tbl_triangle_test_answers WHERE panelist_id = '".$userid."' and tt_form_id = '".$id."'";
		} else {

		}
		return $this->db->query($qry)->result();
	}

	public function getAnswer($id, $ftid, $ttid)
	{ 
		if($ftid == 1) {
			$qry = "SELECT * FROM tbl_paired_difference_answers WHERE pda_id = '".$id."'";
		} else if ($ftid == 2){
			$qry = "SELECT * FROM tbl_triangle_test_answers 
JOIN tbl_triangle_test_sample ON tbl_triangle_test_answers.`panelist_id` = tbl_triangle_test_sample.`user_id`
 WHERE tta_id = '".$id."' AND tt_id = '".$ttid."'";
		} else {

		}
		return $this->db->query($qry)->result();
	}

	public function getOneEvalAnswers($id,$ftid)
	{
		if($ftid == 1) {
			$qry = "SELECT * FROM tbl_users
LEFT JOIN tbl_paired_difference_answers ON tbl_paired_difference_answers.`panelist_id` = tbl_users.`user_id`
JOIN tbl_eval_form_test ON tbl_paired_difference_answers.`pdt_form_id` = tbl_eval_form_test.`id`
 WHERE pdt_form_id = '".$id."' GROUP BY tbl_users.`user_id`";
		} else if ($ftid == 2){
			$qry = "SELECT * FROM tbl_triangle_test_answers
JOIN tbl_users ON tbl_triangle_test_answers.`panelist_id` = tbl_users.`user_id`
JOIN tbl_eval_form_test ON tbl_triangle_test_answers.`tt_form_id` = tbl_eval_form_test.`id`
WHERE tbl_triangle_test_answers.`tt_form_id` = '".$id."'
ORDER BY tt_sample_odd_id   ";
		} else {

		}
		return $this->db->query($qry)->result();

	}

	public function getOnePDTAnswer($id,$user_id){
		$qry = "SELECT * FROM tbl_users
LEFT JOIN tbl_paired_difference_answers ON tbl_paired_difference_answers.`panelist_id` = tbl_users.`user_id`
 WHERE pdt_form_id = '".$id."' and panelist_id = '".$user_id."' ";

		 return $this->db->query($qry)->result();

	}

	public function getPDTSample($id){
		$qry = "SELECT * FROM tbl_paired_difference_test_sample WHERE pdt_id ='".$id."'";

		 return $this->db->query($qry)->result();		
	}

	public function getPDTAttr($id){
		$qry = "SELECT * FROM tbl_paired_diff_attr WHERE pdt_id  = '".$id."'";

		 return $this->db->query($qry)->result();
	}
}