<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct(){ 
  	parent::__construct();	
		 
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login','refresh');
		}		
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dashboard_model');
		
		$this->data['title'] = 'Live Auction';
							
	}
   	
	function index(){
	    
		$this->load->view('admin/dashboard_view',$this->data);	
		
	}
	
	function set_country_session()
	{
	$country=$_POST['country'];
	$this->session->set_userdata('country', $country);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
}
?>