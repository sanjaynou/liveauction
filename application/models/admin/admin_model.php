<?php
class admin_model extends CI_Model
{
	
	  function get_admin($admin_id){
	   $this -> db -> select('*');
	   $this -> db -> from('admin');
	   $this -> db -> where('admin_id', $admin_id);
	   $query = $this -> db -> get();
	   return $query->row();
	  }
	
		
		function update_admin($data,$id,$profile_image)
		{
			
		$this->first_name=$data['first_name'];
		$this->last_name=$data['last_name'];
		$this->email=$data['email'];
		$this->username=$data['user_name'];
		$this->profile_image=$profile_image;
		$this->db->where('admin_id',$id);
		$this->db->update('admin',$this);
		}
	

	
	function check_password($password,$admin_id){
	
	   $this -> db -> select('*');
	   $this -> db -> from('admin');
	   $this -> db -> where('admin_id', $admin_id);
	   $this -> db -> where('password', $password);
	   $query = $this -> db -> get();
	   return $query->num_rows();
	  }
	  
	  
	  function change_password($password,$admin_id)
	{
	        $this->password=$password;
			$this->db->where('admin_id',$admin_id);
			$this->db->update('admin',$this);
	}
	
	public function get_all_country()
		{
		$this->db->select('*'); 
		$this->db->from('country');
		$this->db->order_by('country_id','DESC');
		$query=$this->db->get();
		return $query->result();	
		}
		
		
		function get_country($country_id)
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->where('country_id',$country_id);
		$query=$this->db->get();
		return $query->row();	
	}
	
}
?>