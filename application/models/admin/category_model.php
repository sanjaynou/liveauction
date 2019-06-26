<?php
class category_model extends CI_Model{ 

	 function __construct() 
		{
				  // Call the Model constructor
			parent::__construct();
					$this->load->database();
		}
		
		public function get_all_shopcategory($country)
		{
		$this->db->select('*'); 
		$this->db->from('category');
		$this->db->where('country_id',$country);
		$this->db->where('type','1');
		$this->db->where('parent_id',NULL);
		$this->db->order_by('category_id','DESC');
		$query=$this->db->get();
		return $query->result_array();	
		}
		
		function sub_cat($id)
		{
		$this->db->select('*'); 
		$this->db->from('category');
		$this->db->where('parent_id',$id);
		$query=$this->db->get();
		return $query->result_array();	
		}
		
				
	function insert_shopcategory($data,$country)
	{
		$this->category_name=$data['category_name'];
		$this->country_id=$country;
		if($data['parent_id']!=''){
		$this->parent_id= $data['parent_id'];
		}
		$this->type='1';
		$this->db->insert('category',$this);
	}
	
	function get_category($category_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_id',$category_id);
		$query=$this->db->get();
		return $query->row();	
	}
	
	
	function update_category($data)
	{
		$this->category_name=$data['category_name_edit'];
		$this->db->where('category_id',$data['edit_cat_hidden']);
		$this->db->update('category',$this);
	}
	
	function delete_category($category_id)
	{
		$this->db->delete('category',array('category_id'=>$category_id)); 
	}
	
	function update_category_status($category_id,$status)
	{
	    $this->homepage_show=$status;
		$this->db->where('category_id',$category_id);
		$this->db->update('category',$this);
	}
	
	function count_category_homepage()
	{
	    $this->db->select('*'); 
		$this->db->from('category');
		$this->db->where('homepage_show','1');
		$query=$this->db->get();
		return $query->num_rows();	
	}
	
public function get_all_auctioncategory($country)
		{
		$this->db->select('*'); 
		$this->db->from('category');
		$this->db->where('country_id',$country);
		$this->db->where('type','2');
		$this->db->where('parent_id',NULL);
		$this->db->order_by('category_id','DESC');
		$query=$this->db->get();
		return $query->result_array();	
		}
		
				
	function insert_auctioncategory($data,$country)
	{
		$this->category_name=$data['category_name'];
		$this->country_id=$country;
		if($data['parent_id']!=''){
		$this->parent_id= $data['parent_id'];
		}
		$this->type='2';
		$this->db->insert('category',$this);
	}
	
	function insert_shopproduct_image($image_name,$last_id,$default_images)
	{
		$this->product_id=$last_id;
		$this->product_images=$image_name;
		if($default_images==''){
		$this->default_images = 0;
		}else{
		$this->default_images = $default_images;
		}
		$this->db->insert('product_image',$this);
	}
	
	function insert_auctionproduct_image($image_name,$last_id,$default_images)
	{
		$this->product_id=$last_id;
		$this->product_images=$image_name;
		if($default_images==''){
		$this->default_images = 0;
		}else{
		$this->default_images = $default_images;
		}
		$this->db->insert('auction_image',$this);
	}
	
	
	
	function update_shopproduct_image($image_name,$last_id,$default_images)
	{
		$this->product_id=$last_id;
		$this->product_images=$image_name;
		if($default_images==''){
		$this->default_images = 0;
		}else{
		$this->default_images = $default_images;
		}
		$this->db->insert('product_image',$this);
	}
	
	function update_auctionproduct_image($image_name,$last_id,$default_images)
	{
		$this->product_id=$last_id;
		$this->product_images=$image_name;
		if($default_images==''){
		$this->default_images = 0;
		}else{
		$this->default_images = $default_images;
		}
		$this->db->insert('auction_image',$this);
	}
	
	function delete_shopproduct_image($id)
	{
	//$this->db->delete('product_image',array('id'=>$id)); 
	$this->db->where('product_id', $id);
	$this->db->delete('product_image');
	}
	
	function delete_auctionproduct_image($id)
	{
	//$this->db->delete('product_image',array('id'=>$id)); 
	$this->db->where('product_id', $id);
	$this->db->delete('auction_image');
	}
	
	
		
	}
	?>