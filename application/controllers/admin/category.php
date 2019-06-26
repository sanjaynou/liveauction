<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category extends CI_Controller {
	
	function __construct(){ 
  	parent::__construct();	
		 
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login','refresh');
		}
		
		$this->load->model('admin/admin_model');
	    $this->load->model('admin/category_model');
		$this->load->model('admin/country_model');
		$this->data['title'] = 'Live Auction';
							
	}
	
				
				function shop()
				{
				$country=$this->session->userdata('country');
				$this->data['category']=$this->category_model->get_all_shopcategory($country);	
				
				$this->load->view('admin/category/manage_shopcategory',$this->data);		
				}
				
				
				public function add_shopcategory(){
				
				$country=$this->session->userdata('country');
				$this->load->helper(array('form'));
				$this->load->library('form_validation');
				
				if(!$_POST){
				
				$this->load->view('admin/category/add_shopcategory',$this->data);		
				
				} else { 
				
				$this->form_validation->set_rules('category_name', '<strong>Category Name</strong>', 'required');
				
				
				if ($this->form_validation->run() == FALSE)
				{
				
				$this->data['error']=validation_errors();			
				$this->load->view('admin/category/add_shopcategory',$this->data);	
				
				}
				else
				{
				
				$this->category_model->insert_shopcategory($_POST,$country);
				
				//redirect("admin/category/shop","refresh");
				echo 1;
				}
				
				}
				}
				
				public function edit_shopcategory(){
				$this->category_model->update_category($_POST);
				echo 1;	
				}
				
				function delete_shopcategory()
				{
				$id = $_POST['id'];
				$this->category_model->delete_category($id);
				echo 1;
				}
				
				function remove_home_page()
				{
				$category_id = $_POST['category_id'];
				$this->category_model->update_category_status($category_id,'0');
				}
				
				function show_home_page()
				{
				$category_count=$this->category_model->count_category_homepage();
				
				if($category_count < 4)
				{
				$category_id = $_POST['category_id'];
				$this->category_model->update_category_status($category_id,'1');
				echo '1';
				}
				else
				{
				echo '0';
				}
				
				}
				
				
				function auction()
				{
				$country=$this->session->userdata('country');
				$this->data['category']=$this->category_model->get_all_auctioncategory($country);	
				
				$this->load->view('admin/category/manage_auctioncategory',$this->data);		
				}
				
				
				public function add_auctioncategory(){
				
				$country=$this->session->userdata('country');
				$this->load->helper(array('form'));
				$this->load->library('form_validation');
				
				if(!$_POST){
				
				$this->load->view('admin/category/add_auctioncategory',$this->data);		
				
				} else { 
				
				$this->form_validation->set_rules('category_name', '<strong>Category Name</strong>', 'required');
				
				
				if ($this->form_validation->run() == FALSE)
				{
				
				$this->data['error']=validation_errors();			
				$this->load->view('admin/category/add_auctioncategory',$this->data);	
				
				}
				else
				{
				
				$this->category_model->insert_auctioncategory($_POST,$country);
				
				echo 1;
				//redirect("admin/category/auction","refresh");
				
				
				}
				
				}
				}
				
				public function edit_auctioncategory(){
				
				$id = $this->uri->segment(5);
				
				
				
				$this->data['category']=$this->category_model->get_category($id);
				
				$this->load->helper(array('form'));					
				$this->load->library('form_validation');
				
				if(!$_POST){
				
				$this->load->view('admin/category/edit_auctioncategory',$this->data);
				
				} else { 
				
				
				$this->form_validation->set_rules('category_name', '<strong>Category Name</strong>', 'required');
				
				
				if ($this->form_validation->run() == FALSE)
				{
				$this->data['error']=validation_errors();					
				$this->load->view('admin/category/edit_auctioncategory',$this->data);	
				}
				else
				{
				$this->category_model->update_category($_POST,$id);
				redirect("admin/category/auction","refresh");
				}
				}	
				}
				
				function delete_auctioncategory()
				{
				$id = $this->uri->segment(5);
				$this->category_model->delete_category($id);
				redirect("admin/category/auction","refresh");
				}
				
				
				
				
				
				
				
				
	
}
?>