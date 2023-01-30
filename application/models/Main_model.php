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

	public function addUser($data){
		$qry = "INSERT INTO tbl_users (lastname, middlename, firstname, address, section_unit, contact_number, sex, username, access_level) VALUES ('".$data[2]."','".$data[1]."','".$data[0]."','".$data[5]."','".$data[6]."','".$data[4]."','".$data[7]."','".$data[3]."','".$data[8]."')";

		$this->db->query($qry);
		return $this->db->insert_id();
	}

	public function updateUserDetails($data){
		
		$qry = "UPDATE tbl_users SET lastname='".$data[3]."', middlename='".$data[2]."', firstname='".$data[1]."', address='".$data[6]."', section_unit='".$data[7]."', contact_number='".$data[5]."', sex='".$data[8]."', username='".$data[4]."', access_level='".$data[9]."' WHERE user_id = '".$data[0]."'";
		// var_dump($qry);
		return $this->db->query($qry);
	}

	public function addUserAttach($link,$id){
		
		$qry = "UPDATE tbl_users SET user_pic='".$link."' WHERE user_id = '".$id."'";
		// var_dump($qry);
		return $this->db->query($qry);
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

	public function getOpenForms($userid){
		$qry = "SELECT tbl_eval_form_test.*, tbl_form_type.`test_type`,tbl_users.* FROM tbl_eval_form_test 
JOIN tbl_form_type ON tbl_eval_form_test.`form_type_id` = tbl_form_type.`id`
LEFT JOIN tbl_users ON tbl_eval_form_test.`created_by` = tbl_users.`user_id`
WHERE tbl_eval_form_test.`status` = 1 AND tbl_eval_form_test.`open_for_eval` = 1 
AND tbl_eval_form_test.id NOT IN(

SELECT tbl_eval_form_test.id
FROM tbl_eval_form_test JOIN tbl_paired_difference_answers ON tbl_eval_form_test.`id` = tbl_paired_difference_answers.`pdt_form_id`
JOIN tbl_form_type ON tbl_eval_form_test.`form_type_id` = tbl_form_type.`id`
WHERE tbl_paired_difference_answers.`panelist_id` = '".$userid."'	
GROUP BY tbl_eval_form_test.id
UNION
SELECT tbl_eval_form_test.id
FROM tbl_eval_form_test JOIN tbl_triangle_test_answers ON tbl_eval_form_test.id = tbl_triangle_test_answers.`tt_form_id`
JOIN tbl_form_type ON tbl_eval_form_test.`form_type_id` = tbl_form_type.`id`
WHERE tbl_triangle_test_answers.`panelist_id` = '".$userid."'
GROUP BY tbl_eval_form_test.id)";

		return $this->db->query($qry)->result();	
	}

	public function getClosedForms($userid){
		$qry = "SELECT tbl_eval_form_test.*, tbl_paired_difference_answers.pda_id, tbl_form_type.`test_type` , tbl_form_type.`id` AS 'fid'
FROM tbl_eval_form_test JOIN tbl_paired_difference_answers ON tbl_eval_form_test.`id` = tbl_paired_difference_answers.`pdt_form_id`
JOIN tbl_form_type ON tbl_eval_form_test.`form_type_id` = tbl_form_type.`id`
WHERE tbl_paired_difference_answers.`panelist_id` = '".$userid."'
GROUP BY tbl_eval_form_test.id
UNION
SELECT tbl_eval_form_test.*, tbl_triangle_test_answers.`tta_id` , tbl_form_type.`test_type` , tbl_form_type.`id` AS 'fid'
FROM tbl_eval_form_test JOIN tbl_triangle_test_answers ON tbl_eval_form_test.id = tbl_triangle_test_answers.`tt_form_id`
JOIN tbl_form_type ON tbl_eval_form_test.`form_type_id` = tbl_form_type.`id`
WHERE tbl_triangle_test_answers.`panelist_id` = '".$userid."'
GROUP BY tbl_eval_form_test.id";

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

	public function getAllAnalyst() { 
		
		$qry = "SELECT * FROM tbl_users where access_level = 0";
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