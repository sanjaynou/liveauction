<?php
class shop_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	
	function all_country()
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->limit(9);
		$query=$this->db->get();
		return $query->result_array();	
	}
	
	function all_category()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('parent_id',NULL);
		$this->db->where('type',1);
		$this->db->order_by('category_name');
		$query=$this->db->get();
		return $query->result_array();	
	}
	
	
	
	function product_count($id)
	{
	$query = $this->db->query("SELECT * FROM shop_product WHERE FIND_IN_SET('$id',category_id)");
	return $query->result_array();
	/*$this->db->select('*');
	$this->db->from('shop_product');
	$this->db->where('category_id',$id);
	$query=$this->db->get();
	return $query->result_array();*/
	}
	
	function all_product_cat($id)
	{
	$query = $this->db->query("SELECT * FROM shop_product WHERE FIND_IN_SET('$id',category_id)");
	return $query->result_array();
	/*$this->db->select('*');
	$this->db->from('shop_product');
	$this->db->where('category_id',$id);
	$query=$this->db->get();
	return $query->result_array();*/
	}
	
	function all_category_show()
	{
	$this->db->select('*');
	$this->db->from('category');
	$this->db->where('parent_id',NULL);
	$this->db->where('type',1);
	$this->db->order_by('category_name');
	//$this->db->where('homepage_show',1);
	$query=$this->db->get();
	return $query->result_array();
	}
		
}

?>