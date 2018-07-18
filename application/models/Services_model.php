<?php 

class Services_model extends CI_Model {
	
	public function _consruct(){
		parent::_construct();
 	}
	
	
	function get_service_new() {

		$query = $this->db->get('main_services');
		$result = $query->result();
		return $result;
	}
	function get_offers_new() {

		$query = $this->db->get('offers');
		$result = $query->result();
		return $result;
	}
	public function get_shop_services($where)
	{
		$cont = 'shop_services.service_id = main_services.id';
		$this->db->where($where);
		$this->db->group_by('shop_services.service_id');

		$this->db->select('shop_services.shop_id,shop_services.service_id,main_services.service_name');
	 	$this->db->from('shop_services');
	 	$this->db->join('main_services',$cont );
		$query = $this->db->get();
		return $query->result();
	}
	function get_subservice1($where) {
		  $cont = 'shop_services.service_sub_cat_id = service_sub_category.id';
		$this->db->where($where);
		$this->db->select('shop_services.id as ssid,shop_services.shop_id,shop_services.price,service_sub_category.id,service_sub_category.sub_service_name');
	 	 $this->db->from('shop_services');
	 	$this->db->join('service_sub_category',$cont );
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	
}