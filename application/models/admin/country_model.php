<?php
class country_model extends CI_Model{ 

	 function __construct() 
		{
				  // Call the Model constructor
			parent::__construct();
					$this->load->database();
		}
		
		public function get_all_country()
		{
		$this->db->select('*'); 
		$this->db->from('country');
		$this->db->order_by('country_id','DESC');
		$query=$this->db->get();
		return $query->result();	
		}
		
				
	function insert_country($data)
	{
		$this->country_name=$data['country_name'];
		$this->price_symbol=$data['price_symbol'];
		$this->db->insert('country',$this);
	}
	
	function get_country($country_id)
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->where('country_id',$country_id);
		$query=$this->db->get();
		return $query->row();	
	}
	
	
	function update_country($data,$country_id)
		
		
	{
		$this->country_name=$data['country_name'];
		$this->price_symbol=$data['price_symbol'];
		$this->db->where('country_id',$country_id);
		$this->db->update('country',$this);
	}
	
	function delete_country($country_id)
	{
		$this->db->delete('country',array('country_id'=>$country_id)); 
	}
	

	
	
	
		
	}
	?>