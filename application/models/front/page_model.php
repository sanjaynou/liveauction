<?php
class page_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	
	function get_page_detail($page_id)
	{
		$this->db->select('*');
		$this->db->from('cms');
		$this->db->where('cms_id',$page_id);
		$query=$this->db->get();
		return $query->row();	
	}
	
	function get_contact_detail()
	{
		$this->db->select('*');
		$this->db->from('contactus');
		$query=$this->db->get();
		return $query->row();	
	}
	
	function update_buyer($data,$image_name,$id)
	{
		$this->first_name=$data['first_name'];
		$this->last_name=$data['last_name'];
		$this->email=$data['email'];
		$this->address=$data['address'];
		$this->postcode=$data['postcode'];
		$this->phone=$data['phone'];
		$this->profile_image=$image_name;
		$this->status=$data['status'];
		$this->db->where('buyer_id',$id);
		$this->db->update('buyer',$this);
	}
	
	  function delete_buyer($buyer_id)
	  {
	  $this->db->delete('buyer',array('buyer_id'=>$buyer_id)); 
	  }
	
	
	
		
}

?>