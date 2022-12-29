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

	public function getFarm($id = null){
		if($id == null) {
			#$qry = "SELECT * FROM view_farmwadd where status = 1";
			$qry = "SELECT * FROM tbl_equipment where status = 1";
		} else {
			$qry = "SELECT * FROM tbl_equipment where id = '".$id."' and status = 1";
		}
		
		return $this->db->query($qry)->result();
	}

	public function updateFarm($addr){
		$qry = "UPDATE tbl_equipment SET code_no='".$addr[1]."', equipment_name='".$addr[2]."',manufacturer='".$addr[3]."',type_model_no='".$addr[4]."',serial_no='".$addr[5]."',software_name='".$addr[6]."',current_location='".$addr[7]."',placement_date='".$addr[8]."',received_condition='".$addr[9]."',price='".$addr[10]."',mfg_instructions='".$addr[11]."',other_specifications='".$addr[12]."',remarks='".$addr[13]."' WHERE id='".$addr[0]."'";
		return $this->db->query($qry);
	}

	public function updateUser($addr){
		
		$qry = "UPDATE tbl_users SET lastname='".$addr[2]."',middlename='".$addr[1]."', firstname='".$addr[0]."', username = '".$addr[3]."',  password= '".$addr[4]."' WHERE user_id = '".$addr[5]."'";
		// var_dump($qry);
		return $this->db->query($qry);
	}

	
	public function deleteFarm($z, $id){
		$qry = "UPDATE tbl_equipment SET status = '".$z."' WHERE id = '".$id."'";
		return $this->db->query($qry);
	}

	public function deleteFarmType($id){
		$qry = "UPDATE tbl_farm_w_types SET status = 0 WHERE farm_id = $id";
		return $this->db->query($qry);
	}

	public function addFarmType($id,$fid){
		$qry = "INSERT INTO tbl_farm_w_types (farm_id,farm_type_id,status) VALUES ('$fid','$id',1)";
		return $this->db->query($qry);	
	}

	public function verify($xss_data){
		$qry = "SELECT * FROM tbl_users where username ='".$xss_data['un']."' AND password = '".$xss_data['pass']."'";
		$result = $this->db->query($qry)->result();
		return $result;
	}

	public function getFarmOwners($log){
		$qry = "SELECT * FROM tbl_users where user_id = '".$log."'";
		$result = $this->db->query($qry)->result();
		return $result;

	}

	public function addFarm($adr){
		$qry = "INSERT INTO tbl_equipment (code_no, equipment_name, manufacturer, type_model_no,serial_no,software_name,current_location,placement_date,received_condition,price,mfg_instructions,other_specifications,remarks, STATUS) VALUES ('$adr[0]','$adr[1]','$adr[2]','$adr[3]','$adr[4]','$adr[5]','$adr[6]','$adr[7]','$adr[8]','$adr[9]','$adr[10]','$adr[11]','$adr[12]',1)";
		$this->db->query($qry);
		return $this->db->insert_id();
		// return ($qry);
	}

	public function addAddress($adr){
		$qry = "INSERT INTO tbl_address (street, barangay, city, municipality,province) VALUES ('".$adr[3]."','".$adr[4]."','".$adr[5]."','".$adr[6]."','".$adr[7]."')";
		$this->db->query($qry);
		return $this->db->insert_id();
	}

	public function addFarmLogo($id){
		$qry = "INSERT INTO tbl_photo (id,photo_type,status) VALUES ('".$id."','logo',1)";
		return $this->db->query($qry);
	}

	public function	addUser($new){
		$qry = "INSERT INTO tbl_users (username, password,access_level) VALUES ('$new[0]','$new[0]',1)";
		$this->db->query($qry);
		return $this->db->insert_id();
	}

	public function getFormAttachments(){
		$qry = "SELECT * from tbl_maint_forms where tbl_maint_forms.`status` = 1";
		return $this->db->query($qry)->result();	
	}

	public function addFormAttach($link,$desc){
		$qry = "INSERT INTO tbl_maint_forms (file_path,file_description) VALUES ('".$link."','".$desc."')";
		return $this->db->query($qry);
	}
	
	public function getAddress($id){
		$qry = "SELECT * FROM tbl_address where address_id = '".$id."'";
		return $this->db->query($qry)->result();
	}

	public function getFarmTypes($id){
		$qry = "SELECT * FROM tbl_farm_w_types JOIN tbl_farm_type ON tbl_farm_w_types.`farm_type_id` = tbl_farm_type.`farm_type_id` WHERE tbl_farm_w_types.`farm_id` =  '".$id."' AND tbl_farm_w_types.status";
		return $this->db->query($qry)->result();
	}

	public function getAllFarmTypes(){
		$qry = "SELECT * FROM tbl_farm_type";
		return $this->db->query($qry)->result();
	}

	public function updateAddress($addr){
		$qry = "UPDATE tbl_address SET street='".$addr[1]."', barangay='".$addr[2]."', city = '".$addr[3]."', municipality = '".$addr[4]."', province = '".$addr[5]."' WHERE address_id = '".$addr[0]."'";
		return $this->db->query($qry);
	}

	public function getCalibProg($id) {
		$qry = "SELECT * FROM tbl_calib_program
JOIN tbl_equipment ON tbl_calib_program.`equip_id` = tbl_equipment.`id`
JOIN tbl_calibration_type ON tbl_calib_program.`calib_type_id`=tbl_calibration_type.`ctype_id`
JOIN tbl_frequency ON tbl_calib_program.`frequency` = tbl_frequency.`mfreq_id`
WHERE tbl_equipment.`id` = '".$id."' AND tbl_equipment.`status`=1 AND tbl_calib_program.`status`=1";
		return $this->db->query($qry)->result();
	}


	public function getMaintProg($id) {
		$qry = "SELECT * FROM tbl_maint_program
JOIN tbl_equipment ON tbl_maint_program.`equip_id` = tbl_equipment.`id`
JOIN tbl_maintenance_type ON tbl_maint_program.`maint_id`=tbl_maintenance_type.`mtype_id`
JOIN tbl_frequency ON tbl_maint_program.`frequency_id` = tbl_frequency.`mfreq_id`
WHERE tbl_equipment.`id` = '".$id."' AND tbl_equipment.`status`=1 AND tbl_maint_program.`status`=1";
		return $this->db->query($qry)->result();
	}



	public function getType($id) {
		$qry = "

SELECT tbl_equipment.`est_type_id`, tbl_equipment_type.`est_type`, tbl_est_category.`category_name` FROM tbl_equipment
JOIN tbl_equipment_type ON tbl_equipment.`est_type_id` = tbl_equipment_type.`est_type_id`
JOIN tbl_est_category ON tbl_est_category.`category_id` = tbl_equipment_type.`category_id` WHERE id = '$id'";
		return $this->db->query($qry)->result();
	}

	public function getTspots(){
		$qry = "SELECT * FROM tbl_aircon where status = 1";

		return $this->db->query($qry)->result();	
	}


	public function restore($id,$type){
		if($type == 1){
			$qry = "UPDATE tbl_equipment SET status = 1 WHERE id = '".$id."'";
		} elseif ($type == 2) {
			$qry = "UPDATE tbl_est_accommodation SET status = 1 WHERE accommodation_id = '".$id."'";
		} elseif ($type == 3) {
			$qry = "UPDATE tbl_est_pictures SET status = 1 WHERE photo_id = '".$id."'";
		} elseif ($type == 4) {
			$qry = "UPDATE tbl_est_activities SET status = 1 WHERE farm_act_id = '".$id."'";
		} elseif ($type == 5) {
			$qry = "UPDATE tbl_sidetrips SET status = 1 WHERE sidetrip_id = '".$id."'";
		} elseif ($type == 6) {
			$qry = "UPDATE tbl_sidetrips_pictures SET status = 1 WHERE sidetrips_pic_id = '".$id."'";
		} else {
			$qry = "UPDATE tbl_sidetrips_activities SET status = 1 WHERE sidetrips_act_id = '".$id."'";
		}
		
		return $this->db->query($qry);;
	}

	public function getTspotswAdd(){
		$qry = "SELECT tbl_sidetrips.`sidetrip_name`,tbl_address.`latitude`,tbl_address.`longitude` FROM tbl_sidetrips JOIN tbl_address ON tbl_sidetrips.`address_id` = tbl_address.`address_id` ";
		return $this->db->query($qry)->result();
	}
	public function getFspotswAdd(){
		$qry = "SELECT tbl_equipment.`est_name`,tbl_address.`latitude`,tbl_address.`longitude` FROM tbl_equipment JOIN tbl_address ON tbl_equipment.`est_address_id` = tbl_address.`address_id` ";
		return $this->db->query($qry)->result();
	}

	public function getFeeds($user_id=null){
		$qry = "SELECT CONCAT(LEFT(DATE_FORMAT((DATE_ADD(tbl_ac_maint_record.`date_added`, INTERVAL -3 MONTH)), '%M'), 3),' ',YEAR(DATE_ADD(tbl_ac_maint_record.`date_added`, INTERVAL -3 MONTH))) AS sched1, 
	CONCAT(LEFT(DATE_FORMAT((DATE_ADD(tbl_ac_maint_record.`date_added`, INTERVAL 3 MONTH)), '%M'), 3),' ',YEAR(DATE_ADD(tbl_ac_maint_record.`date_added`, INTERVAL 3 MONTH))) AS sched2, 
	CONCAT(LEFT(DATE_FORMAT((DATE_ADD(tbl_ac_maint_record.`date_added`, INTERVAL 6 MONTH)), '%M'), 3),' ',YEAR(DATE_ADD(tbl_ac_maint_record.`date_added`, INTERVAL 6 MONTH))) AS sched3, 
	CONCAT(LEFT(DATE_FORMAT((DATE_ADD(tbl_ac_maint_record.`date_added`, INTERVAL 9 MONTH)), '%M'), 3),' ',YEAR(DATE_ADD(tbl_ac_maint_record.`date_added`, INTERVAL 9 MONTH))) AS sched4, 
	CONCAT(LEFT(DATE_FORMAT((tbl_ac_maint_record.`date_added`), '%M'), 3),' ',YEAR(tbl_ac_maint_record.`date_added`)) AS lastsched,
	tbl_aircon.`id` as acid,
	tbl_aircon.*, tbl_ac_maint_record.*
  FROM tbl_aircon 
  LEFT JOIN tbl_ac_maint_record
  ON tbl_aircon.`id`=tbl_ac_maint_record.`ac_id`
  WHERE tbl_aircon.`ac_stat`=1 and tbl_ac_maint_record.`id` IN ( SELECT MAX(id)  
                         FROM tbl_ac_maint_record WHERE tbl_ac_maint_record.`status`=1
                         GROUP BY ac_id)";
		
		return $this->db->query($qry)->result();
	}

	public function getAllFarmS(){
		$qry = "SELECT id,est_name FROM tbl_equipment WHERE status =1";
		return $this->db->query($qry)->result();
	}

	public function getActiveAC(){
		$qry = "SELECT tbl_ac_status.`id`,tbl_ac_status.`equip_stat`, COUNT(tbl_aircon.`ac_stat`) as freq FROM tbl_ac_status LEFT JOIN tbl_aircon ON  tbl_ac_status.`id` = tbl_aircon.`ac_stat` WHERE tbl_aircon.`status` =1 GROUP BY tbl_ac_status.`id` ";
		return $this->db->query($qry)->result();
	}
	
	public function getVehicle(){
		$qry = "SELECT * FROM tbl_vehicle where status = 1";

		return $this->db->query($qry)->result();
	}

	public function getBuilding(){
		$qry = "SELECT * FROM tbl_building where status = 1";

		return $this->db->query($qry)->result();
	}	
}