<?php
class seller_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	
	
	function get_all_seller($country){
		$this->db->select('*');
		$this->db->from('seller');
		$this->db->where('country_id',$country);
		$this->db->order_by('seller_id','DESC');
		$query = $this->db->get();
   	    return $query->result();
	}
	
	function insert_seller($data,$image_name,$country)
	{
	$this->country_id=$country;
	$this->first_name=$data['first_name'];
	$this->last_name=$data['last_name'];
	$this->email=$data['email'];
	$this->password=md5($data['password']);
	$this->activation_code=md5(time());
	$this->address=$data['address'];
	$this->postcode=$data['postcode'];
	$this->shipment_fee_domestic = $data['shipment_fee_domestic'];
	$this->shipment_fee_international = $data['shipment_fee_international'];
	$this->phone=$data['phone'];
	$this->profile_image=$image_name;
	$this->created_date=time();;
	$this->status=$data['status'];
	$this->db->insert('seller',$this);
	}
	
	function get_seller($id)
	{
		$this->db->select('*');
		$this->db->from('seller');
		$this->db->where('seller_id',$id);
		$query=$this->db->get();
		return $query->row();	
	}
	
	function update_seller($data,$image_name,$id)
	{
		$this->first_name=$data['first_name'];
		$this->last_name=$data['last_name'];
		$this->email=$data['email'];
		$this->address=$data['address'];
		$this->postcode=$data['postcode'];
		$this->shipment_fee_domestic = $data['shipment_fee_domestic'];
	    $this->shipment_fee_international = $data['shipment_fee_international'];
		$this->phone=$data['phone'];
		$this->profile_image=$image_name;
		$this->status=$data['status'];
		$this->db->where('seller_id',$id);
		$this->db->update('seller',$this);
	}
	
	  function delete_seller($seller_id)
	  {
	  $this->db->delete('seller',array('seller_id'=>$seller_id)); 
	  }
	
	
	
		
}

?>