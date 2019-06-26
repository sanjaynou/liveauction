<?php
class Login_model extends CI_Model
{
	
	function admin_login($username, $password){
	
	   $this -> db -> select('admin_id, username, password');
	   $this -> db -> from('admin');
	   $this -> db -> where('username', $username);
	   $this -> db -> where('password', $password);
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	 
	   if($query -> num_rows() == 1)
	   {
	     return $query->row();
	   }
	   else
	   {
	     return false;
	   }
	}
	
	
	
	
	
	
	
}
?>