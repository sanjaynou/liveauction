<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class order extends CI_Controller {
	
	function __construct(){
  	parent::__construct();	
		 
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login','refresh');
		}
		
		$this->load->model('admin/admin_model');
		
		$this->load->model('admin/buyer_model');
		
		$this->load->model('admin/shopproduct_model');
		
		$this->load->model('admin/order_model');
		
		$this->data['title'] = 'Live Auction';
							
	}
	
	
	function index(){
		$country=$this->session->userdata('country');
		$this->data['order'] = $this->order_model->get_all_order($country);
		$this->load->view('admin/order/manage_order',$this->data);		
	}
	
	
	
					
					function view()
					{
					$order_id = $this->uri->segment(5);
			       $this->data['order']=$this->order_model->get_order($order_id);
				   $this->data['order_detail']=$this->order_model->get_order_detail($order_id);
			
		            $this->load->view('admin/order/view_order',$this->data);
					}
					
					
					
					
					
					
					
					
					
		
}
?>