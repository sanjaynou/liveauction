<?php
class live_auction_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	
	function get_auction_product($product_id)
	{
		$this->db->select('*');
		$this->db->from('auction_product');
		$this->db->where('product_id',$product_id);
		$query=$this->db->get();
		return $query->row();	
	}
	
	function seller_details($seller_id)
	{
		$this->db->select('*');
		$this->db->from('seller');
		$this->db->where('seller_id',$seller_id);
		$query=$this->db->get();
		return $query->row();
	}
	
	function buyer_details($buyer_id)
	{
		$this->db->select('*');
		$this->db->from('buyer');
		$this->db->where('buyer_id',$buyer_id);
		$query=$this->db->get();
		return $query->row();
	}
}

?>