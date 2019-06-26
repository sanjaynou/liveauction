<?php
class shopproduct_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	
	
	function get_all_shopproduct($country){
		$this->db->select('*');
		$this->db->from('shop_product');
		$this->db->where('country',$country);
		$this->db->order_by('product_id','DESC');
		$query = $this->db->get();
   	    return $query->result();
	}
	
	function product_image($id)
	{
	$this->db->select('*');
		$this->db->from('product_image');
		$this->db->where('product_id',$id);
		$query=$this->db->get();
		return $query->result_array();	
	}
	
	function insert_shopproduct($data,$country)
	{
	//if(isset($data['country'])){$country=implode(',',$data['country']);}else{$country='';}
	$this->product_name=$data['product_name'];
	$this->seller_id=$data['seller_id'];
	$this->category_id=$data['category_id_hidden'];
	$this->category_path=$data['category_id'];
	$this->sales_price=$data['sales_price'];
	$this->sales_sku=$data['sales_sku'];
	$this->discount_price=$data['discount_price'];
	$this->prodcut_quantity=$data['prodcut_quantity'];
	$this->product_desc=$data['product_desc'];
	$this->country=$country;
	$this->created_at=time();
	$this->db->insert('shop_product',$this);
	return $this->db->insert_id();
	}
	
	function get_shopproduct($product_id)
	{
		$this->db->select('*');
		$this->db->from('shop_product');
		$this->db->where('product_id',$product_id);
		$query=$this->db->get();
		return $query->row();	
	}
	
		function update_shopproduct($data,$image_name,$product_id)
		{
		//if(isset($data['country'])){$country=implode(',',$data['country']);}else{$country='';}
		$this->product_name=$data['product_name'];
		$this->seller_id=$data['seller_id'];
		$this->sales_sku=$data['sales_sku'];
		$this->category_id=$data['category_id_hidden'];
	    $this->category_path=$data['category_id'];
		$this->sales_price=$data['sales_price'];
	    $this->discount_price=$data['discount_price'];
		$this->prodcut_quantity=$data['prodcut_quantity'];
		$this->product_image=$image_name;
		$this->product_desc=$data['product_desc'];
		//$this->country=$country;
		$this->db->where('product_id',$product_id);
		$this->db->update('shop_product',$this);
		}
	
	  function delete_shopproduct($product_id)
	  {
	  $this->db->delete('shop_product',array('product_id'=>$product_id)); 
	  }
	
	
	
		
}

?>