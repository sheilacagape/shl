<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

	public function index()
	{ 
		
	}

	public function allOwners(){
		$qry = "SELECT * FROM tbl_users WHERE access_level = '1'";
		return $this->db->query($qry)->result();
	}

	public function allUsers(){
		$qry = "SELECT * FROM tbl_users WHERE access_level = '2'";
		return $this->db->query($qry)->result();
	}

	public function oneUser($id,$stat){
		if ($stat == "1") {
			$qry = "SELECT * FROM tbl_users WHERE access_level = 1 and user_id = '$id' and `status` = 1";
		} else {
			$qry = "SELECT * FROM tbl_users WHERE access_level = 2 and user_id = '$id' and `status` = 1";
		}
		
		return $this->db->query($qry)->result();
	}

	public function userAddr($aid){
		$qry = "SELECT * FROM tbl_address where address_id = '".$aid."'";
		return $this->db->query($qry)->result();
	}

	public function estOwned($uid){
		$qry = "SELECT * FROM view_farmwadd LEFT JOIN tbl_users ON view_farmwadd.`owner` = tbl_users.`user_id` WHERE view_farmwadd.status = 1 AND view_farmwadd.`owner` = '".$uid."'";
		return $this->db->query($qry)->result();
	}

	public function itiCreated($uid){
		$qry = "SELECT tbl_itinerary.`date_created`,tbl_establishment.`est_id`, tbl_itinerary.`itinerary_name`,tbl_itinerary.`itinerary_id`,tbl_users.`firstname`,
tbl_users.`lastname`,tbl_users.`user_id`
 FROM tbl_itinerary 
 JOIN tbl_itinerary_est ON tbl_itinerary.`itinerary_id` = tbl_itinerary_est.`itinerary_id`
JOIN tbl_establishment ON tbl_itinerary_est.`est_id` = tbl_establishment.`est_id`
JOIN tbl_users ON tbl_itinerary.`user_id` = tbl_users.`user_id` WHERE tbl_users.`user_id` = '$uid'
ORDER BY tbl_establishment.`est_id`,tbl_itinerary.`date_created` ";
		return $this->db->query($qry)->result();
	}
	
	
	

}