<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class transaction extends CI_Controller {
	
	function __construct(){
  	parent::__construct();	
		 
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login','refresh');
		}
		
		$this->load->model('admin/admin_model');
		
		$this->load->model('admin/buyer_model');
		
		$this->load->model('admin/shopproduct_model');
		
		$this->load->model('admin/order_model');
		$this->load->model('admin/transaction_model');
		
		$this->data['title'] = 'Live Auction';
							
	}
	
	
	function index(){
		$country=$this->session->userdata('country');
		$this->data['transaction'] = $this->transaction_model->get_all_transaction($country);
		$this->load->view('admin/transaction/manage_transaction',$this->data);		
	}
	
	
	
			
					
					
					
					
					
		
}
?>