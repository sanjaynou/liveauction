<?php
class home_model extends CI_Model
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
		$this->db->order_by('country_name');
		$this->db->limit(10);
		$query=$this->db->get();
		return $query->result_array();	
	}
	
	function all_category()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('parent_id',NULL);
		$this->db->where('type',2);
		$this->db->order_by('category_name');
		$query=$this->db->get();
		return $query->result_array();	
	}
	
	function all_category_shop()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('parent_id',NULL);
		$this->db->where('type',1);
		$this->db->order_by('category_name');
		$this->db->limit(6);
		$query=$this->db->get();
		return $query->result_array();	
	}
	
	function all_category_shop_limit1()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('parent_id',NULL);
		$this->db->where('type',1);
		$this->db->order_by('category_name');
		$this->db->limit(1);
		$query=$this->db->get();
		return $query->row_array();	
	}
	
	
	function product_count($id)
	{
	$query = $this->db->query("SELECT * FROM auction_product WHERE `category_id` LIKE '%".$id."%'");
	return $query->result_array();
	/*$this->db->select('*');
	$this->db->from('shop_product');
	$this->db->where('category_id',$id);
	$query=$this->db->get();
	return $query->result_array();*/
	}
	
	function all_product_cat($id)
	{
	$query = $this->db->query("SELECT * FROM auction_product WHERE `category_id` LIKE '%".$id."%'");
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
	$this->db->where('type',2);
	$this->db->order_by('category_name');
	//$this->db->where('homepage_show',1);
	$query=$this->db->get();
	return $query->result_array();
	}
	
	function auction_image($id)
	{
	$query = $this->db->query("SELECT * FROM auction_image WHERE `product_id`='$id' and default_images=1");
	return $query->row();
	}
		
}

?>