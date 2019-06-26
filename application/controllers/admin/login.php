<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
  	 parent::__construct();
		 
		 $this->load->helper('url');
		 $this->load->model('admin/login_model','',TRUE);	
	
		 $this->data['title'] = 'Live Auction';	 
  }
	
	public function index()
	{ 		
		if(!$this->session->userdata('logged_in')){
			$this->load->helper(array('form'));		
			$this->load->view('admin/login_view',$this->data);		
		} else {
			redirect('admin/dashboard','refresh');
		}
	}
	
	public function verify(){ //echo 'ram'; //die;
	//print_r($_POST); die;
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters( '', '<br>' );
			
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
			
			$this->form_validation->set_message('username', 'The Field <strong>Username</strong> is required');
			$this->form_validation->set_message('password', 'The Field <strong>Password</strong> is required');
		 
			 if($this->form_validation->run('login_form') ){
					redirect('admin/dashboard', 'refresh');
			 }else{
				 $this->data['error']=	validation_errors();
				 $this->load->view('admin/login_view',$this->data);
			 }
		 
		
	}
	
	function check_database($password)
	 {
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username');
	    $remember = $this->input->post('remember');
	 
	   $check_password=md5($password);
	   
	   $result = $this->login_model->admin_login($username, $check_password);
	  
		   if($result)
		   {
			   $sess_array = array();
				
				$sess_array = array(
				'admin_id' => $result->admin_id,
				'username' => $result->username
				);
				$this->session->set_userdata('logged_in', $sess_array);
				$this->session->set_userdata('country', '10');
				
				if($remember==1){ 
					$this->load->helper('cookie');
					
					$this->input->set_cookie("username_cookie",$username,time()+(86400*7));
					$this->input->set_cookie("pass_cookie",$password,time()+(86400*7));
					}
				else{
					$this->load->helper('cookie');
					delete_cookie('username_cookie');
					delete_cookie('pass_cookie');
					}
				
			 return TRUE;
		   }
		   else
		   {
			 $this->form_validation->set_message('check_database', 'Invalid Username or Password');
			 return false;
		   }
	 }
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('admin/login','refresh');
	}
		
}

?>