<?php
class cms_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	
	
	function get_all_cms(){
		$this->db->select('*');
		$this->db->from('cms');
		$this->db->order_by('cms_id','DESC');
		$query = $this->db->get();
   	    return $query->result_array();
	}
	
	function get_cms($id)
	{
		$this->db->select('*');
		$this->db->from('cms');
		$this->db->where('cms_id',$id);
		$query=$this->db->get();
		return $query->row_array();	
	}
	
	function update_cms($data,$id)
	{
	
		$this->page_title=$data['cms_title'];
		$this->page_content=$data['desc'];
		$this->create_date_time=time();
		$this->status=$data['status'];
		$this->db->where('cms_id',$id);
		$this->db->update('cms',$this);
	}
	
	 function get_product_perpage()
	{
		$this->db->select('*');
		$this->db->from('product_page');
		$query=$this->db->get();
		return $query->row();	
	}
	
	function update_product_perpage($data)
	{
	
		$this->product_per_page=$data['product_per_page'];
		
		$this->db->update('product_page',$this);
	}
	
	 function get_contact_detail()
	{
		$this->db->select('*');
		$this->db->from('contactus');
		$query=$this->db->get();
		return $query->row();	
	}
	
	function update_contact_detail($data)
	{
	
		$this->address=$data['address'];
		$this->email=$data['email'];
		$this->phone_number=$data['phone_number'];
		$this->db->update('contactus',$this);
	}
	
	
	
	
	
	
		
}

?>