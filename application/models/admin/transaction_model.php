<?php
class transaction_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	
	
	function get_all_transaction($country){
		$this->db->select('*');
		$this->db->from('transaction');
		$this->db->where('country_id',$country);
		$this->db->order_by('order_id','DESC');
		$query = $this->db->get();
   	    return $query->result();
	}
	
	function get_all_transaction_search($data,$country)
	{
		$this->db->select('*');
		$this->db->from('transaction');
		$this->db->where('country_id',$country);
		$this->db->where('transaction_date >=', $data['from_date']);
		$this->db->where('transaction_date <=', $data['to_date']);
		$this->db->order_by('order_id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	
		
}

?>