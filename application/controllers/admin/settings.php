<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class settings extends CI_Controller { 


	function __construct(){
  	parent::__construct();	 
	
		 
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login','refresh');
		}
		
		$this->load->model('admin/admin_model');
		
		$this->data['title'] = 'Live Auction';
							
	}
	
	public function changepassword(){
			
			 $this->load->helper(array('form'));
			 $this->load->library('form_validation');
             $session_data=$this->session->userdata('logged_in');
			 $admin_id=$session_data['admin_id'];
			 $admin=$this->admin_model->get_admin($admin_id);
			if(!$_POST){

			$this->load->view('admin/settings/change_password',$this->data);		

			} else { 
			
			 $this->form_validation->set_rules('new_password', 'The Password field does not match the Confirm New Password field.', 'required|matches[confirm_new_password]');
		    if ($this->form_validation->run() == FALSE)
			{
              $this->data['password_error']='The Password field does not match the Confirm New Password field.';		
			$this->load->view('admin/settings/change_password',$this->data);	
			}
			else
			{
			
			$check_password=$this->admin_model->check_password(md5($_POST['old_password']),$admin_id);
			if($check_password==0)
				{
				$this->data['password_error']='Old Password is incorrect.';
				$this->load->view('admin/settings/change_password',$this->data);
				}
				else
				{
			$this->session->set_flashdata('success', 'Your password has been changed successfully.');
				$this->admin_model->change_password(md5($_POST['new_password']),$admin_id);
				redirect('admin/settings/changepassword');
				}
			}
			}
			}
			
			
			public function profile()
	{
		$session_data=$this->session->userdata('logged_in');
	    $admin_id=$session_data['admin_id'];
		$this->data['admin_info']=$this->admin_model->get_admin($admin_id);
		$this->load->view('admin/settings/profile',$this->data);	
	
	}
			
			
			public function edit_profile()
	{
		$session_data=$this->session->userdata('logged_in');
	    @$admin_id=$session_data['admin_id'];
    	$this->data['admin_info']=$this->admin_model->get_admin($admin_id);
					$this->load->helper(array('form'));					
					$this->load->library('form_validation');
					
					if(!$_POST){
					
					$this->load->view('admin/settings/edit_profile',$this->data);
					
					} else { 
				
		    $file_name=$_POST['file_hidden'];	
		    if($_FILES['file']['error']==0){ 
			$config['upload_path'] = 'public/admin/admin_profile/';
			$config['allowed_types'] = 'gif|jpg|png|doc|pdf';
			$config['max_size'] = '10000';
			//$config['max_width']  = '1366';
			//$config['max_height']  = '768';
			$config['width'] = 75;
			$config['height'] = 50;
			
			$this->load->library('upload', $config);
			$this->load->library('image_lib',$config);
			$this->image_lib->resize();
			
			if ( !$this->upload->do_upload('file')) {
			   $error1 = $this->upload->display_errors();
			   $this->data['error'] = $error1; 
			   $file_name=$_POST['file_hidden'];
			} else {
			   $this->load->helper("file"); 
			  
			   $data = array('upload_data' => $this->upload->data());
			
			   $file_name = $data['upload_data']['file_name']; 
			}
    	}
			$this->admin_model->update_admin($_POST,$admin_id,$file_name);
			$this->session->set_flashdata('success', 'Profile has been updated successfully.');
			redirect("admin/settings/edit_profile","refresh");
					
					}
					}
			
			
			
			
			
}
?>