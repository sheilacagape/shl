<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FarmOwner_model extends CI_Model {

	public function index()
	{ 
		
	}

	public function updateUser($addr){
		
		$qry = "UPDATE tbl_users SET lastname='".$addr[2]."',middlename='".$addr[1]."', firstname='".$addr[0]."', username = '".$addr[3]."',  password= '".$addr[4]."' WHERE user_id = '".$addr[5]."'";
		// var_dump($qry);
		return $this->db->query($qry);
	}

	public function getFarm($id = null){
		if($id == null) {
			$qry = "SELECT * FROM view_farmwadd where status = 1";
		} else {
			$qry = "SELECT * FROM view_farmwadd where farm_id = '".$id."' and status = 1";
		}
		
		return $this->db->query($qry)->result();
	}

	public function updateFarm($addr){
		$qry = "UPDATE tbl_farms SET farm_name='".$addr[2]."',entrance_fee='".$addr[9]."', description='".$addr[3]."', mobile_number = '".$addr[4]."',  telephone_number= '".$addr[5]."',  email= '".$addr[6]."',  facebook= '".$addr[7]."',  youtube= '".$addr[8]."' WHERE farm_id = '".$addr[0]."'";
		return $this->db->query($qry);
	}

	public function getAddress($id){
		$qry = "SELECT * FROM tbl_address where address_id = '".$id."'";
		return $this->db->query($qry)->result();
	}

	public function updateLtLng($id){
		$qry = "UPDATE tbl_address SET latitude='".$id[1]."',longitude='".$id[2]."' WHERE address_id = '".$id[0]."'";
		return $this->db->query($qry);
	}

	public function updateAddress($addr){
		$qry = "UPDATE tbl_address SET street='".$addr[1]."', barangay='".$addr[2]."', city = '".$addr[3]."', municipality = '".$addr[4]."', province = '".$addr[5]."' WHERE address_id = '".$addr[0]."'";
		return $this->db->query($qry);
	}

	public function getAccom($id) {
		$qry = "SELECT * FROM tbl_farm_accommodation where farm_id = '".$id."' and status = 1";
		return $this->db->query($qry)->result();
	}


	public function getActiv($id) {
		$qry = "SELECT * FROM tbl_farm_activities where farm_id = '".$id."' and status = 1";
		return $this->db->query($qry)->result();
	}


	public function getLogo($id) {
		$qry = "SELECT * FROM tbl_farm_pictures where farm_id = '".$id."' and status = 1 and tbl_farm_pictures.pic_type = 'logo'";
		return $this->db->query($qry)->result();
	}

	public function getPic($id) {
		$qry = "SELECT * FROM tbl_farm_pictures where farm_id = '".$id."' and status = 1 and tbl_farm_pictures.pic_type IS NULL";
		return $this->db->query($qry)->result();
	}


	public function getType($id) {
		$qry = "SELECT * FROM tbl_farm_type where farm_id = '".$id."' and status = 1";
		return $this->db->query($qry)->result();
	}

	public function addFeatPics($link,$id,$desc){
		$qry = "INSERT INTO tbl_farm_pictures (farm_id,picture_path,pic_description,status) VALUES ('".$id."','".$link."','".$desc."',1)";
		return $this->db->query($qry);
	}

	public function deleteImage($z, $array){
		$qry = "UPDATE tbl_farm_pictures SET status = '".$z."' WHERE farm_pic_id = '".$array."'";
		return $this->db->query($qry);
	}

	public function addnewAccom($array){
		$qry = "INSERT INTO tbl_farm_accommodation (accommodation_name,description,fee,farm_id, status) VALUES ('".$array[0]."','".$array[1]."','".$array[2]."','".$array[3]."', 1)";
		return $this->db->query($qry);
	}

	public function updateAccommodation($array){
		$qry = "UPDATE tbl_farm_accommodation SET accommodation_name='".$array[0]."', description='".$array[1]."', fee = '".$array[2]."' WHERE accommodation_id = '".$array[3]."'";
		return $this->db->query($qry);
	}

	public function deleteAccom($z, $array){
		$qry = "UPDATE tbl_farm_accommodation SET status = '".$z."' WHERE accommodation_id = '".$array."'";
		return $this->db->query($qry);
	}

	public function addnewActivity($array){
		$qry = "INSERT INTO tbl_farm_activities (farm_id,name,description,fee, status) VALUES ('".$array[3]."', '".$array[0]."','".$array[1]."','".$array[2]."',1)";
		return $this->db->query($qry);
	}

	public function updateActivity($array){
		$qry = "UPDATE tbl_farm_activities SET name='".$array[0]."', description='".$array[1]."', fee = '".$array[2]."' WHERE farm_act_id = '".$array[3]."'";
		return $this->db->query($qry);
	}

	public function deleteActivity($z, $array){
		$qry = "UPDATE tbl_farm_activities SET status = '".$z."' WHERE farm_act_id = '".$array."'";
		return $this->db->query($qry);
	}
}