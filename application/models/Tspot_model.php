<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tspot_model extends CI_Model {

	public function index()
	{ 
		
	}
	public function addTspot($adr){
		$qry = "INSERT INTO tbl_aircon (code_no, equipment_name, manufacturer, type_model_no, serial_no, current_location, status) VALUES ('$adr[0]','$adr[1]','$adr[2]','$adr[3]','$adr[4]','$adr[5]',1)";
		$this->db->query($qry);
		return $this->db->insert_id();
		// return ($qry);
	}


	public function getTspot($id = null)
	{ 
		if($id == null) {
			$qry = "SELECT * FROM tbl_aircon where status = 1";
		} else {
			$qry = "SELECT * FROM tbl_aircon where id = '".$id."' and status = 1";
		}
		
		return $this->db->query($qry)->result();
	}

	public function deleteAC($z,$id) {
		$qry = "UPDATE tbl_aircon SET status = '".$z."' WHERE id = '".$id."'";
				
		return $this->db->query($qry);
	}



	public function updateTspots($tspt){
		$qry = "UPDATE tbl_aircon SET code_no='".$tspt[2]."', equipment_name='".$tspt[1]."', manufacturer='".$tspt[3]."', type_model_no='".$tspt[4]."', serial_no='".$tspt[5]."', current_location='".$tspt[6]."' WHERE id = '".$tspt[0]."'";
		return $this->db->query($qry);
		
	}

	public function getACMR($id)
	{ 
		$qry = "SELECT * FROM tbl_ac_maint_record where ac_id = '".$id."' and status = 1";
		return $this->db->query($qry)->result();	
	}

	public function deleteACAttach($z,$id)
	{ 
		$qry = "UPDATE tbl_ac_attachments SET status = '".$z."' WHERE ac_attach_id = '".$id[0]."'";
		return $this->db->query($qry);	
	}



	public function addACAttach($link,$id,$desc){
		$qry = "INSERT INTO tbl_ac_attachments (ac_id,file_path,file_description) VALUES ('".$id."','".$link."','".$desc."')";
		return $this->db->query($qry);
	}

	

	public function addnewMR($array){
		$qry = "INSERT INTO tbl_ac_maint_record (ac_id,date_added,op_performed,remarks,performed_by, status) VALUES ('".$array[4]."', '".$array[1]."','".$array[0]."','".$array[2]."','".$array[3]."',1)";
		return $this->db->query($qry);
	}

	public function updateMR($array){
		$qry = "UPDATE tbl_ac_maint_record SET date_added='".$array[2]."',op_performed='".$array[1]."', remarks= '".$array[3]."' , performed_by= '".$array[4]."' WHERE id = '".$array[0]."'";
		return $this->db->query($qry);
	}

	public function deleteMR($z, $array){
		$qry = "UPDATE tbl_ac_maint_record SET status = '".$z."' WHERE id = '".$array[0]."'";
		return $this->db->query($qry);
	}

	public function getActiveAC(){
		$qry = "SELECT tbl_ac_status.`id`,tbl_ac_status.`equip_stat`, COUNT(tbl_aircon.`ac_stat`) as freq FROM tbl_ac_status LEFT JOIN tbl_aircon ON  tbl_ac_status.`id` = tbl_aircon.`ac_stat` WHERE tbl_aircon.`status` =1 GROUP BY tbl_ac_status.`id` ";
		return $this->db->query($qry)->result();
	}

	public function getAttachments($id){
		$qry = "SELECT * from tbl_ac_attachments where ac_id = '".$id."' and status = 1";
		return $this->db->query($qry)->result();
	}

	


	public function updateStat($array){
		$qry = "UPDATE tbl_aircon SET ac_stat='".$array[1]."' WHERE id = '".$array[0]."'";
		return $this->db->query($qry);
	}
}