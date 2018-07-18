<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webservices extends CI_Controller {

	public function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		check_installer();
		//$this->load->model('booking_model');
 	}
	
	public function get_staff_list()
	{
		$this->load->model('service_model');
		if($_POST['serviceid']){

			if(isset($_POST['serviceid'])) {
				foreach($_POST['serviceid'] as $service_details) {
					$service = explode("<#>",$service_details);
					
					//$total += $service[2];
					//$service_array['booking_id'] = $booking_id;
					$service_id = $service[1];
					//$service_array['price'] = $service[2];
					

				}
			}

			$where = array('staffs_specialist.service_id' => $service_id );
			//$data = $this->service_model->get_joint_staff($where);
			$data = "success";
		}
		else{
			
			$data = "FAIL";
		}
				
			
		
		
	//	header('Content-Type: application/json');
        echo $data;  
    }

    public function get_locations()
	{
		$this->load->model('locations_model');
		$data['services'] = $this->services_model->services_model('get_service_new');

		header('Content-Type: application/json');
        echo json_encode($data);  
    }
	
	
	
	
}
