<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class cms extends CI_Controller {
	
	function __construct(){
  	parent::__construct();	
		 
			if(!$this->session->userdata('logged_in')){
			redirect('admin/login','refresh');
		}
		
		$this->load->library('fckeditor','form_validation');
		$this->load->model('admin/admin_model');
		
		$this->load->model('admin/cms_model');
		$this->data['title'] = 'Live Auction';
							
	}
	
	
	function index(){
		
		$this->data['cms'] = $this->cms_model->get_all_cms();
		$this->load->view('admin/cms/manage_cms',$this->data);		
	}
	
	
		   public function edit(){
						$id = $this->uri->segment(5);
					
					$this->data['cms']=$this->cms_model->get_cms($id);
					
					$this->load->helper(array('form'));					
					$this->load->library('form_validation');
					
					if(!$_POST){
					
					$this->load->view('admin/cms/edit_cms',$this->data);
					
					} else { 
					 
			$this->form_validation->set_rules('cms_title', '<strong>CMS Title</strong>', 'required');
		   $this->form_validation->set_rules('desc', '<strong>CMS Description </strong>', 'required');
			
					if ($this->form_validation->run() == FALSE)
					{
					$this->data['error']=validation_errors();					
					$this->load->view('admin/cms/edit_cms',$this->data);	
					}
					else
					{	
					$this->cms_model->update_cms($_POST,$id);
					$this->session->set_flashdata('success', 'CMS has been updated successfully.');
					redirect("admin/cms","refresh");
					}
					}		
					}
					
					function view()
					{
					$id=$this->uri->segment(5);
					$this->data['cms_detail']=$this->cms_model->get_cms($id);
					$this->load->view('admin/cms/view_cms',$this->data);	
					}
					
					
					 public function product_page(){
						
					
					$this->data['productcount']=$this->cms_model->get_product_perpage();
					
					$this->load->helper(array('form'));					
					$this->load->library('form_validation');
					
					if(!$_POST){
					
					$this->load->view('admin/cms/product_perpage',$this->data);
					
					} else { 
						
					$this->cms_model->update_product_perpage($_POST);
					$this->session->set_flashdata('success', 'Record has been updated successfully.');
					redirect("admin/cms/product_page","refresh");
					
					}		
					}
					
					 public function contact_us(){
						
					
					$this->data['contactDetail']=$this->cms_model->get_contact_detail();
					
					$this->load->helper(array('form'));					
					$this->load->library('form_validation');
					
					if(!$_POST){
					
					$this->load->view('admin/cms/contact_us',$this->data);
					
					} else { 
						
					$this->cms_model->update_contact_detail($_POST);
					$this->session->set_flashdata('success', 'Contact Detail has been updated successfully.');
					redirect("admin/cms/contact_us","refresh");
					
					}		
					}
					
					
					
					
}
?>