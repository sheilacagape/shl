<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {
	public function index()
	{ 
		
	} 

	public function getFarmWO($id){
		$qry = "SELECT * FROM tbl_equipment where est_owner_id = '".$id."' and status = 1";
		return $this->db->query($qry)->result();
	}

	public function updateUser($addr){
		
		$qry = "UPDATE tbl_users SET lastname='".$addr[2]."',middlename='".$addr[1]."', firstname='".$addr[0]."', username = '".$addr[3]."',  password= '".$addr[4]."' WHERE user_id = '".$addr[5]."'";
		// var_dump($qry);
		return $this->db->query($qry);
	}

	public function verify($xss_data){
		$qry = "SELECT * FROM tbl_users where username ='".$xss_data['un']."' AND password = '".$xss_data['pass']."' and status = 1";
		$result = $this->db->query($qry)->result();
		return $result;
	}

	public function getUser($log){
		$qry = "SELECT * FROM tbl_users where user_id = '".$log."'";
		$result = $this->db->query($qry)->result();
		return $result;
	}

	public function getType($id) {
		$qry = "SELECT tbl_equipment.`est_type_id`, tbl_equipment_type.`est_type`, tbl_est_category.`category_name` FROM tbl_equipment
JOIN tbl_equipment_type ON tbl_equipment.`est_type_id` = tbl_equipment_type.`est_type_id`
JOIN tbl_est_category ON tbl_est_category.`category_id` = tbl_equipment_type.`category_id` WHERE id = '$id'";
		return $this->db->query($qry)->result();
	}

	public function getAllForms(){
		$qry = "SELECT tbl_eval_form_test.*, tbl_form_type.`test_type`,tbl_users.* FROM tbl_eval_form_test 
JOIN tbl_form_type ON tbl_eval_form_test.`form_type_id` = tbl_form_type.`id`
LEFT JOIN tbl_users ON tbl_eval_form_test.`created_by` = tbl_users.`user_id`
WHERE tbl_eval_form_test.`status` = 1";

		return $this->db->query($qry)->result();	
	}

	public function getActiveForms(){
		$qry = "SELECT tbl_eval_form_test.*, tbl_form_type.`test_type`,tbl_users.* FROM tbl_eval_form_test 
JOIN tbl_form_type ON tbl_eval_form_test.`form_type_id` = tbl_form_type.`id`
LEFT JOIN tbl_users ON tbl_eval_form_test.`created_by` = tbl_users.`user_id`
WHERE tbl_eval_form_test.`status` = 1";

		return $this->db->query($qry)->result();	
	}

	public function getOpenForms(){
		$qry = "SELECT tbl_eval_form_test.*, tbl_form_type.`test_type`,tbl_users.* FROM tbl_eval_form_test 
JOIN tbl_form_type ON tbl_eval_form_test.`form_type_id` = tbl_form_type.`id`
LEFT JOIN tbl_users ON tbl_eval_form_test.`created_by` = tbl_users.`user_id`
WHERE tbl_eval_form_test.`status` = 1 and tbl_eval_form_test.`open_for_eval` = 1";

		return $this->db->query($qry)->result();	
	}

	public function getAllResponses($ftid) { 
		if($ftid == 1) {
			$qry = "";
		} else if ($ftid == 2){
			$qry = "";
		}
		return $this->db->query($qry)->result();
	}

	public function getAllPanelists() { 
		
		$qry = "SELECT * FROM tbl_users where access_level = 1";
		$result = $this->db->query($qry)->result();
		return $result;
	}	

	public function changePanelStat($data){
		if ($data[0]==1) {
			$qry = "UPDATE tbl_users SET status=0 WHERE user_id = '".$data[1]."'";	
		} else {
			$qry = "UPDATE tbl_users SET status=1 WHERE user_id = '".$data[1]."'";	
		}
		return $this->db->query($qry);
	}

}