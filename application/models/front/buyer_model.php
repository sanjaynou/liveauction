<?php
class buyer_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	
	
	   function buyer_login_check($email, $password){
		  $this->db->select('buyer_id,first_name,last_name,email,status');
	        $this -> db -> from('buyer');
			$this -> db -> where('email', $email);
			$this -> db -> where('password', $password);
			$this -> db -> limit(1);
			$query = $this -> db -> get();
			return $query->row();
	    
	  
	}
	
	public function get_all_country()
		{
		$this->db->select('*'); 
		$this->db->from('country');
		$this->db->order_by('country_name','ASC');
		$query=$this->db->get();
		return $query->result();	
		}
		
		function buyer_address($buyer_id)
		{
		$this->db->select('*'); 
		$this->db->from('buyer_address_book');
		$this->db->where('buyer_id',$buyer_id);
		$query=$this->db->get();
		return $query->result();
		}
		
		function country_details($country_id)
		{
		$this->db->select('*'); 
		$this->db->from('country');
		$this->db->where('country_id',$country_id);
		$query=$this->db->get();
		return $query->row();
		}
		
		function address_per_show($id)
		{
		$this->db->select('*'); 
		$this->db->from('buyer_address_book');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row();
		}
	
	function check_buyer($email)
		  {
		  $this->db->select('buyer_id');
		  $this->db->from('buyer');
		  $this->db->where('email',$email);
		  $query=$this->db->get();
		  return $query->num_rows();
		  }
		  
		  function buyer_password_check($password,$buyer_id)
		  {
		  $this->db->select('*');
		  $this->db->from('buyer');
		  $this->db->where('password',$password);
		  $this->db->where('buyer_id',$buyer_id);
		  $query=$this->db->get();
		  return $query->num_rows();
		  }
	
	function insert_buyer($data)
	{
		$this->db->insert('buyer',$data);
		return $this->db->insert_id();
	}
	
	function update_buyer_data($data,$buyer_id)
	{
		$this->first_name=$data['first_name'];
		$this->last_name=$data['last_name'];
		$this->contact_number=$data['contact_number'];
		$this->country_id=$data['country_id'];
		$this->address=$data['address'];
		$this->postcode=$data['postcode'];
		$this->db->where('buyer_id',$buyer_id);
		$this->db->update('buyer',$this);
	}
	
	function update_buyer_address_book($data,$buyer_id)
	{
	    $this->buyer_name=$data['buyer_name'];
		$this->buyer_id=$buyer_id;
		$this->buyer_phone=$data['buyer_phone'];
		$this->zip_code=$data['zip_code'];
		$this->buyer_country_id=$data['buyer_country_id'];
		$this->buyer_address=$data['buyer_address'];
		$this->db->insert('buyer_address_book',$this);
	}
	
	function buyer_address_book_update($data)
	{
	    $this->buyer_name=$data['buyer_name'];
		$this->buyer_phone=$data['buyer_phone'];
		$this->zip_code=$data['zip_code'];
		$this->buyer_country_id=$data['buyer_country_id'];
		$this->buyer_address=$data['buyer_address'];
		$this->db->where('id',$data['address_id']);
		$this->db->update('buyer_address_book',$this);
	}
	
	function buyer_address_book_delete($id)
	{
	$this->db->delete('buyer_address_book',array('id'=>$id)); 
	}
	
	function buyer_password_update($password,$buyer_id)
	{
	    $this->password=$password;
		$this->db->where('buyer_id',$buyer_id);
		$this->db->update('buyer',$this);
	}
	
	function update_buyer_data_prifile($image_name,$buyer_id)
	{
		$this->profile_image=$image_name;
		$this->db->where('buyer_id',$buyer_id);
		$this->db->update('buyer',$this);
	}
	
	function get_buyer($id)
	{
		$this->db->select('*');
		$this->db->from('buyer');
		$this->db->where('buyer_id',$id);
		$query=$this->db->get();
		return $query->row();	
	}
	
	function get_buyer_credit_card($buyer_id)
	{
	$this->db->select('*');
	$this->db->from('buyer_credit_card');
	$this->db->where('buyer_id',$buyer_id);
	$query=$this->db->get();
	return $query->row();
	}
	
	function activate_account($updateData,$buyer_id)
	{
	$this->db->where('buyer_id',$buyer_id)->update('buyer',$updateData);
	}
	
	
	function credit_card_buyer_data($data,$buyer_id)
	{
	    $this->name_on_card=$data['name_on_card'];
		$this->buyer_id=$buyer_id;
		$this->credit_card_number=$data['credit_card_number'];
		$this->month=$data['month'];
		$this->year=$data['year'];
		$this->cvv=$data['cvv'];
		$this->db->insert('buyer_credit_card',$this);
	}
	
	function credit_card_buyer_data_update($data,$buyer_id)
	{
		$this->name_on_card=$data['name_on_card'];
		$this->credit_card_number=$data['credit_card_number'];
		$this->month=$data['month'];
		$this->year=$data['year'];
		$this->cvv=$data['cvv'];
		$this->db->where('buyer_id',$buyer_id);
		$this->db->update('buyer_credit_card',$this);
	}
	
		
}

?>