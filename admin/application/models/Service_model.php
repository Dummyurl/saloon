<?php 

class Service_model extends CI_Model {
	
	public function _consruct(){
		parent::_construct();
 	}
	
	function save_service($data) {
		
   $config['upload_path'] = 'assets/uploads';
  $config['allowed_types'] = 'gif|jpg|png|jpeg';
  $config['max_size'] = '1024';
  //$config['max_width']  = '1024';
  //$config['max_height']  = '768';

   $this->load->library('upload');
   $this->upload->initialize($config);
   if ( ! $this->upload->do_upload('service_icon')) {
    //$result = array('error' => $this->upload->display_errors());
    
    return "imgError";
   }
   else {
    $upload_data = $this->upload->data();
    $insert['service_icon'] = base_url().$config['upload_path']."/".$upload_data['file_name'];
    //array_walk($data, "remove_html");
    

    $insert['service_name'] = $data['service_name'];
     
     $result = $this->db->insert('main_services', $insert); 
    
     if($result) {
      return "Success";
     }
     else {
      return "Error";
     }

    //$result = array('upload_data' => $this->upload->data());
   }
  

	
    $result = $this->db->insert('main_services', $data); 
	 if($result) {
		 return "Success";

	 }
	 else {
		 return "Error";
	 }
	}
	function save_subservice($data) {
		 $insert['service_id'] = $data['service_name'];
		 $insert['sub_service_name'] = $data['sub_cat_name'];
     
     $result = $this->db->insert('service_sub_category', $insert); 
    
     if($result) {
      return "Success";
     }
     else {
      return "Error";
     }
	}
	function get_service() {
		$query = $this->db->get('main_services');
		$result = $query->result();
		return $result;
	}
	function get_subservice($where) {
		if($where){
			$this->db->where($where);
		}
		$query = $this->db->get('service_sub_category');
		$result = $query->result();
		return $result;
	}
	
	function get_single_service($id) {
		$query = $this->db->where('id', $id);
		$query = $this->db->get('main_services');

		$result = $query->row();

		return $result;
	}
	
	function update_service($data, $id) {
		
	 $this->db->where('id', $id);
	 $result = $this->db->update('main_services', $data); 
	 
	 if($result) {
		 return "Success";
	 }
	 else {
		 return "Error";
	 }
	}
	
	function delete_service($id) {
		
	 $this->db->where('id', $id);
	 $result = $this->db->delete('main_services'); 
	 
	 if($result) {
		 return "Success";
	 }
	 else {
		 return "Error";
	 }
	}
	
	function get_service_price($id) {
		$query = $this->db->where('id', $id);
		$query = $this->db->get('shop_services');
		$result = $query->row();
		return $result;
	}
	
	//my quries
	function get_service_new() {
		$query = $this->db->get('main_services');
		$result = $query->result();
		return $result;
	}
	
}