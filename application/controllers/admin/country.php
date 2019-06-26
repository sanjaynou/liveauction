<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class country extends CI_Controller {
	
	function __construct(){ 
  	parent::__construct();	
		 
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login','refresh');
		}
		
		$this->load->model('admin/admin_model');
	    $this->load->model('admin/country_model');
		$this->data['title'] = 'Live Auction';
							
	}
	
				
				function index()
				{
				$this->data['country']=$this->country_model->get_all_country();	
				
				$this->load->view('admin/country/manage_country',$this->data);		
				}
				
				
				public function add(){
				
				
				$this->load->helper(array('form'));
				$this->load->library('form_validation');
				
				if(!$_POST){
				
				$this->load->view('admin/country/add_country',$this->data);		
				
				} else { 
				
				$this->form_validation->set_rules('country_name', '<strong>Country Name</strong>', 'required');
				
				
				if ($this->form_validation->run() == FALSE)
				{
				
				$this->data['error']=validation_errors();			
				$this->load->view('admin/country/add_country',$this->data);	
				
				}
				else
				{
				
				$this->country_model->insert_country($_POST);
				
				
				redirect("admin/country","refresh");
				
				
				}
				
				}
				}
				
				public function edit(){
				
				$id = $this->uri->segment(5);
				
				$this->data['country']=$this->country_model->get_country($id);
				
				$this->load->helper(array('form'));					
				$this->load->library('form_validation');
				
				if(!$_POST){
				
				$this->load->view('admin/country/edit_country',$this->data);
				
				} else { 
				
				
				$this->form_validation->set_rules('country_name', '<strong>Country Name</strong>', 'required');
				
				
				if ($this->form_validation->run() == FALSE)
				{
				$this->data['error']=validation_errors();					
				$this->load->view('admin/country/edit_country',$this->data);	
				}
				else
				{
				$this->country_model->update_country($_POST,$id);
				redirect("admin/country","refresh");
				}
				}	
				}
				
				function delete()
				{
				$id = $this->uri->segment(5);
				$this->country_model->delete_country($id);
				redirect("admin/country","refresh");
				}
	
}
?>