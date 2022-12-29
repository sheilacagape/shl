<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Building_model extends CI_Model {

	public function index()
	{ 
		
	}

	public function addBuilding($adr){
		$qry = "INSERT INTO tbl_building (code_no, building_name, manufacturer, type_model_no, serial_no, current_location, status) VALUES ('$adr[0]','$adr[1]','$adr[2]','$adr[3]','$adr[4]','$adr[5]',1)";
		$this->db->query($qry);
		return $this->db->insert_id();
		// return ($qry);
	}

	public function deleteBuilding($z,$id) {
		$qry = "UPDATE tbl_building SET status = '".$z."' WHERE id = '".$id."'";
				
		return $this->db->query($qry);
	}

	public function getBldgDetails($id = null)
	{ 
		if($id == null) {
			$qry = "SELECT * FROM tbl_building where status = 1";
		} else {
			$qry = "SELECT * FROM tbl_building where id = '".$id."' and status = 1";
		}
		
		return $this->db->query($qry)->result();
	}

	public function getBldgMR($id)
	{ 
		$qry = "SELECT * FROM tbl_bldg_maint_record where veh_id = '".$id."' and status = 1";
		return $this->db->query($qry)->result();	
	}

	public function getBldgAttachments($id){
		$qry = "SELECT * from tbl_bldg_attachments where veh_id = '".$id."' and status = 1";
		return $this->db->query($qry)->result();
	}
	
	public function updateBuilding($tspt){
		$qry = "UPDATE tbl_building SET code_no='".$tspt[2]."', building_name='".$tspt[1]."', manufacturer='".$tspt[3]."', type_model_no='".$tspt[4]."', serial_no='".$tspt[5]."', current_location='".$tspt[6]."' WHERE id = '".$tspt[0]."'";
		return $this->db->query($qry);
		
	}

	public function addBldgMR($array){
		$qry = "INSERT INTO tbl_bldg_maint_record (veh_id,date_added,op_performed,remarks,performed_by, status) VALUES ('".$array[4]."', '".$array[1]."','".$array[0]."','".$array[2]."','".$array[3]."',1)";
		return $this->db->query($qry);
	}

	public function updateBldgMR($array){
		$qry = "UPDATE tbl_bldg_maint_record SET date_added='".$array[2]."',op_performed='".$array[1]."', remarks= '".$array[3]."' , performed_by= '".$array[4]."' WHERE id = '".$array[0]."'";
		return $this->db->query($qry);
	}

	public function deleteBldgMR($z, $array){
		$qry = "UPDATE tbl_bldg_maint_record SET status = '".$z."' WHERE id = '".$array[0]."'";
		return $this->db->query($qry);
	}

	public function addBldgAttach($link,$id,$desc){
		$qry = "INSERT INTO tbl_bldg_attachments (veh_id,file_path,file_description) VALUES ('".$id."','".$link."','".$desc."')";
		return $this->db->query($qry);
	}

	public function deleteBldgAttach($z,$id)
	{ 
		$qry = "UPDATE tbl_bldg_attachments SET status = '".$z."' WHERE veh_attach_id = '".$id[0]."'";
		return $this->db->query($qry);	
	}
}