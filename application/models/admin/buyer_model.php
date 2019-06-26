<?php
class buyer_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	
	
	function get_all_buyer($country){
		$this->db->select('*');
		$this->db->from('buyer');
		$this->db->where('country_id',$country);
		$this->db->order_by('buyer_id','DESC');
		$query = $this->db->get();
   	    return $query->result();
	}
	
	function insert_buyer($data,$image_name,$country)
	{
	$this->country_id=$country;
	$this->first_name=$data['first_name'];
	$this->last_name=$data['last_name'];
	$this->email=$data['email'];
	$this->password=md5($data['password']);
	$this->activation_code=md5(time());
	$this->address=$data['address'];
	$this->postcode=$data['postcode'];
	$this->phone=$data['phone'];
	$this->profile_image=$image_name;
	$this->created_date=time();
	$this->status=$data['status'];
	$this->db->insert('buyer',$this);
	}
	
	function get_buyer($id)
	{
		$this->db->select('*');
		$this->db->from('buyer');
		$this->db->where('buyer_id',$id);
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