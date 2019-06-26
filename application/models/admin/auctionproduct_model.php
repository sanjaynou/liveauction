<?php
class auctionproduct_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	
	
	function get_all_auctionproduct($country){
		$this->db->select('*');
		$this->db->from('auction_product');
		$this->db->where('country',$country);
		$this->db->order_by('product_id','DESC');
		$query = $this->db->get();
   	    return $query->result();
	}
	
	function insert_auctionproduct($data,$country)
	{
	$this->product_name=$data['product_name'];
	$this->seller_id=$data['seller_id'];
	$this->category_id=$data['category_id_hidden'];
	$this->category_path=$data['category_id'];
	$this->sales_sku=$data['sales_sku'];
	$this->product_desc=$data['product_desc'];
	$this->auction_timer = $data['auction_timer'];
	$this->time_increase_perbid = $data['time_increase_perbid'];
	$this->min_bid = $data['min_bid'];
	$this->bid_interval = $data['bid_interval'];
	$this->country=$country;
	$this->created_at=time();
	$this->db->insert('auction_product',$this);
	return $this->db->insert_id();
	}
	
	function get_auctionproduct($product_id)
	{
		$this->db->select('*');
		$this->db->from('auction_product');
		$this->db->where('product_id',$product_id);
		$query=$this->db->get();
		return $query->row();	
	}
	
		function update_auctionproduct($data,$product_id)
		{
		//if(isset($data['country'])){$country=implode(',',$data['country']);}else{$country='';}
		$this->product_name=$data['product_name'];
		$this->seller_id=$data['seller_id'];
		$this->category_id=$data['category_id_hidden'];
		$this->category_path=$data['category_id'];
		$this->sales_sku=$data['sales_sku'];
		$this->product_desc=$data['product_desc'];
		$this->auction_timer = $data['auction_timer'];
		$this->time_increase_perbid = $data['time_increase_perbid'];
		$this->min_bid = $data['min_bid'];
		$this->bid_interval = $data['bid_interval'];
		//$this->country=$country;
		$this->db->where('product_id',$product_id);
		$this->db->update('auction_product',$this);
		}
	
	  function delete_auctionproduct($product_id)
	  {
	  $this->db->delete('auction_product',array('product_id'=>$product_id)); 
	  }
	
	function auction_image($id)
	{
	$this->db->select('*');
	$this->db->from('auction_image');
	$this->db->where('product_id',$id);
	$query=$this->db->get();
	return $query->result_array();	
	}
	
		
}

?>