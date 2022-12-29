<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Main_model');
	}  

	public function index($msg =null)
	{
		if($msg!=null){
			$data['content'] = 'contents/login';
			$data['msg'] = $msg;
			$data['bg'] = base_url('assets/img/bg.jpg');

			$this->load->view('portal',$data);
		} else {
			

			$data['content'] = 'contents/login';
			$data['bg'] = base_url('assets/img/bg.jpg');
			$this->load->view('portal',$data);
		}
		// 41.43206,-81.38992|-33.86748,151.20699
	}


	public function loggin(){
		echo "string";
	}

	public function login(){
		$data = $this->input->post();

		$non_xss= array(
		'un' => $this->input->post('Username'),
		'pass' => $this->input->post('Password')
		);

		$xss_data = $this->security->xss_clean($non_xss);
		$log = $this->Main_model->verify($xss_data);
		
		if (count($log)==1){
			$access = $log[0]->access_level;
			$this->session->set_userdata('un', $non_xss['un']);
			$this->session->set_userdata('pass', $non_xss['pass']);
			$this->session->set_userdata('access', $access);
			$this->session->set_userdata('userid', $log[0]->user_id);
			$msg = 'You have Successfully Logged In.';
			if($access==0){
				$data['user_id'] = $log[0]->user_id;
				$this->dashboard($data['user_id']);
			} elseif ($access==1) {
				$data['content'] =('contents/farmowners');
				$data['user_id'] = $log[0]->user_id;
				$this->db->reconnect();
				$data['farms'] = $this->Main_model->getFarmWO($log[0]->user_id);
				$data['user'] = $this->Main_model->getFarmOwners($log[0]->user_id);
				$this->load->view('portal',$data);
			} else {
				$msg = 'You do not have the right access! Please contact the administration!';
				$this->index($msg);
			}
			
		} else {
			$msg = 'You are not registered!';
			$this->index($msg);
		}
	}

	public function updateFarmType(){
		$type = $this->input->post('data')[0];
		$id =  $this->input->post('data')[1];
		$this->Main_model->deleteFarmType($id);
		$this->db->reconnect();
		for ($i=1; $i <= count($type); $i++) { 
			$this->Main_model->addFarmType($type[$i-1],$id);
			$this->db->reconnect();
		}
		
		echo "Successfully updated farm types.";
	}

	public function getTspotswAdd(){
		// $data['lt'] = $this->input->post('lat');
		// $data['ln'] = $this->input->post('lng');
		// $this->load->view('contents/hays',$data);
		$data = $this->Main_model->getTspotswAdd();
		echo json_encode($data);
	}
	public function getFspotswAdd(){  
		// $data['lt'] = $this->input->post('lat');
		// $data['ln'] = $this->input->post('lng');
		// $this->load->view('contents/hays',$data);
		$data = $this->Main_model->getFspotswAdd();
		echo json_encode($data);
	}

	public function dashboard($id=null){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			if($id!= null){
				$data['content'] = 'contents/dashboard';
				$data['user'] = $this->Main_model->getFarmOwners($id);
				$this->load->view('portal',$data);
			} else {
				$idd = $this->input->post('id');
				$data['content'] = 'contents/dashboard';
				$data['user'] = $this->Main_model->getFarmOwners($idd);
				$this->load->view('portal',$data);
			}
		}
		
	}

	public function updateLtLng(){
		
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$id = $this->input->post('data');
			$this->Main_model->updateLtLng($id);
			echo "Successfully updated the establishment's coordinates.";
		}
	}

	public function addFarm(){
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$new = $this->input->post('data');
			#$id = $this->Main_model->addAddress($new);
			#$this->db->reconnect();
			#$user_id = $this->Main_model->addUser($new);
			#$this->db->reconnect(); 
			$farm_id = $this->Main_model->addFarm($new);
			$this->db->reconnect();
			#$this->Main_model->addFarmLogo($farm_id);
			
			// var_dump();
			echo "Successfully created new farm. You can now edit farm details.";
			// echo "$new";
		}
	}


	public function getFarm(){
		// echo "string";
		if($this->checkLoggedIn()){
			$data['msg'] = "welcome to my life";
			$data['farm'] = $this->Main_model->getFarm();
			$this->load->view('contents/farms',$data);
		}
	
	}

	public function updateUser (){
		
		if($this->checkLoggedIn()){
			$userdet = $this->input->post('data');
			$this->Main_model->updateUser($userdet);
			echo "Successfully updated account details.";
			// var_dump($userdet) ;
		}
	}

	public function getOneFarm(){
		// echo "string";
		if($this->checkLoggedIn()){
			$id = $this->input->post('id');
			$data['farmdetails'] = $this->Main_model->getFarm($id);
			$this->db->reconnect();
			$data['calibprog'] = $this->Main_model->getCalibProg($id);
			$this->db->reconnect();
			$data['maintprog'] = $this->Main_model->getMaintProg($id);
			$this->db->reconnect();
		
			$this->load->view('contents/onefarm',$data);
		}
		
	} 

	public function updateFarm(){
		if($this->checkLoggedIn()){
			$array =$_POST['data'];
			$this->Main_model->updateFarm($array[0]);
			echo $array[0][0]; 
			// var_dump($array);
		}
	}

	public function deleteFarm(){
		if($this->checkLoggedIn()){
			$array =$_POST['data'];
			$this->Main_model->deleteFarm(0,$array);
			echo $array;
		}
	}


	public function getTspots(){
		// echo "string";
		if($this->checkLoggedIn()){
			$data['tspots'] = $this->Main_model->getTspots();
			$this->load->view('contents/tspots',$data);
		}
		
	} 

	public function getVehicle(){
		// echo "string";
		if($this->checkLoggedIn()){
			$data['vehicle'] = $this->Main_model->getVehicle();
			$this->load->view('contents/listVehicle',$data);
		}
		
	} 	

	public function getBuilding(){
		// echo "string";
		if($this->checkLoggedIn()){
			$data['building'] = $this->Main_model->getBuilding();
			$this->load->view('contents/listBuilding',$data);
		}
		
	} 	

	public function getFeeds(){
		// echo "string";
		if($this->checkLoggedIn()){
			$data['feeds'] = $this->Main_model->getFeeds();
			$data['year'] = $this->input->post('date');

			$this->load->view('contents/sched',$data);
		}
		
	} 

	public function getCharts(){
		// echo "string";
		if($this->checkLoggedIn() && ($_SESSION['access']==0)){
			$data['activeAC'] = $this->Main_model->getActiveAC();
			$this->load->view('contents/acuchart',$data);
		} else{
			$data['activeAC'] = $this->Main_model->getActiveAC();
			$this->load->view('contents/acuchart',$data);
		}
	} 

	public function getTrash(){
		// echo "string";
		if($this->checkLoggedIn()){
			$data['farms'] = $this->Main_model->getdelFarm();
			$this->db->reconnect();
			$data['farmpic'] = $this->Main_model->getdelFarmPic();
			$this->db->reconnect();
			$data['farmact'] = $this->Main_model->getdelFarmAct();
			$this->db->reconnect();
			$data['farmaccom'] = $this->Main_model->getdelFarmAccom();
			$this->db->reconnect();
			$data['sidetrip'] = $this->Main_model->getdelSt();
			$this->db->reconnect();
			$data['stact'] = $this->Main_model->getdelStAct();
			$this->db->reconnect();
			$data['stpic'] = $this->Main_model->getdelStPic();
			$this->load->view('contents/trash',$data);
		}
	} 

	public function addFeatPic(){
		if($this->checkLoggedIn()){
			$link = $this->input->get("link");
			$id = $this->input->get("id");
			$desc = $this->input->get("desc");

			$this->Main_model->addFeatPics($link,$id,$desc);
			// $msg = "Successfully Updated Cover Photo!";
			// $this->editview($id, $msg);
			echo $id;
		}
	}

	public function addLogoPic(){
		if($this->checkLoggedIn()){
			$link = $this->input->get("link");
			$id = $this->input->get("id");

			$this->Main_model->addLogoPic($link,$id);
			// $msg = "Successfully Updated Cover Photo!";
			// $this->editview($id, $msg);
			echo $id;
		}
	}
	

	public function deleteImage(){
		if($this->checkLoggedIn()){
			$array =$_POST['data'];
			$this->Main_model->deleteImage(0,$array[0]);
			echo $array[1];
		}
	}

	public function addAccommodation(){
		if($this->checkLoggedIn()){
			$array =$_POST['data'];
			$this->Main_model->addnewAccom($array);
			echo $array[3];
			// var_dump($array);
		}
	}

	public function updateAccommodation(){
		if($this->checkLoggedIn()){
			$array =$_POST['data'];
			$this->Main_model->updateAccommodation($array);
			echo $array[4];
		}
	}

	public function deleteAccom(){
		if($this->checkLoggedIn()){
			$array =$_POST['data'];
			$this->Main_model->deleteAccom(0,$array[0]);
			echo $array[1];
		}
	}

	public function addActivity(){
		if($this->checkLoggedIn()){
			$array =$_POST['data'];
			$this->Main_model->addnewActivity($array);
			echo $array[3];
			// var_dump($array);
		}
	}

	public function updateActivity(){
		if($this->checkLoggedIn()){
			$array =$_POST['data'];
			$this->Main_model->updateActivity($array);
			echo $array[4];
		}
	}

	public function deleteActivity(){
		if($this->checkLoggedIn()){
			$array =$_POST['data'];
			$this->Main_model->deleteActivity(0,$array[0]);
			echo $array[1];

		}
	}

	public function restore(){
		$array =$_POST['data'];
		$this->Main_model->restore($array[0],$array[1]);
		echo $this->Main_model->restore($array[0],$array[1]);;
	}

	public function logout(){
		if($this->checkLoggedIn()){
			$this->session->sess_destroy();
			$msg = 'You have Successfully Logged Out!';
			$this->index($msg);
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

	public function getAllFarmRatings(){
		$allfarms = $this->Main_model->getAllFarmS();
		$arr = array();

		foreach ($allfarms as $key) {
			array_push($arr, $this->Main_model->getSoloFarmStars($key->id));
			$this->db->reconnect();
		}

		echo json_encode($arr);

	}

	
	public function getSoloFarmRatings(){
		$id = $this->input->get('data');
		// $arr = array();

		// foreach ($allfarms as $key) {
		// 	array_push($arr, $this->Main_model->getSoloFarmStars($key->farm_id));
		// 	$this->db->reconnect();
		// }
		$data = $this->Main_model->getSoloFarmStars($id);

		echo json_encode($data);

	}

	public function getAVGFarmRatings(){
		$allfarms = $this->Main_model->getAllFarmS();
		$arr = array();

		foreach ($allfarms as $key) {
			$this->db->reconnect();
			array_push($arr, $this->Main_model->getAVGFarmStars($key->id));
			
		}

		echo json_encode($arr);
	}

	public function getForms() {
		$data['attach'] = $this->Main_model->getFormAttachments();
		
		$this->load->view('contents/uprof',$data);

	}

	public function addFormAttach(){
		if($this->checkLoggedIn()){
		$link = $this->input->get("link");
		$desc = $this->input->get("desc");

		$this->Main_model->addFormAttach($link,$desc);
		// $msg = "Successfully Updated Cover Photo!";
		// $this->editview($id, $msg);
		echo $desc;
	}
	}

	public function getOneItinerary(){ 
		// $data['iti'] = $this->Main_model->getItinerary();
		$id = $this->input->post('id');
	

		$owner = $this->Main_model->getOneItinerary($id);
		$this->db->reconnect();

		$allest = $this->Main_model->getAllEST($id);

		$data['allest'] = array();
		for ($i=0; $i < count($allest); $i++) { 
			$this->db->reconnect();
			$est =$this->Main_model->getItineraryEst($allest[$i]->id,$id);
			$this->db->reconnect();
			$itiaccom = $this->Main_model->getItineraryAccom($allest[$i]->id,$id);
			$this->db->reconnect();
			$itiact = $this->Main_model->getItineraryAct($allest[$i]->id,$id);
			$this->db->reconnect();

			array_push($data['allest'], array('est'=>$est,'acc' => $itiaccom, 'act' => $itiact));
		}
		
		$this->load->view('contents/oneitinerary',$data);
	}
}

