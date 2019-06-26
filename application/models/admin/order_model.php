<?php
class order_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	
	
	function get_all_order($country){
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('country_id',$country);
		$this->db->order_by('order_id','DESC');
		$query = $this->db->get();
   	    return $query->result();
	}
	
		function get_all_order_search($data,$country)
		{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('country_id',$country);
		$this->db->where('order_date >=', $data['from_date']);
		$this->db->where('order_date <=', $data['to_date']);
		
		$this->db->order_by('order_id','DESC');
		$query = $this->db->get();
		return $query->result();
		}
	
	function get_order($order_id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('order_id',$order_id);
		$query=$this->db->get();
		return $query->row();	
	}
		function get_order_detail($order_id){
		$this->db->select('*');
		$this->db->from('order_detail');
		$this->db->where('order_id',$order_id);
		$query = $this->db->get();
   	    return $query->result();
	}
	
	
	
		
}

?>