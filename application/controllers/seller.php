<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class seller extends CI_Controller {

function __construct(){		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('front/buyer_model','BUYER');
		$this->load->model('front/seller_model','SELLER');
		$this->load->model('front/home_model');
		$this->data['title']='LIVE AUCTION';
		}

	 private function check_seller_session(){
				
				@$session_data = $this->session->userdata('user_logged_in');
				if(@$session_data['seller_id']!=""){
				redirect('seller/dashboard');
					}
				}

 private function check_seller_login(){
				
				@$session_data = $this->session->userdata('user_logged_in');
				if(@$session_data['seller_id']==""){
				redirect('seller/login','refresh');
				}
				}
				
				
	public function register()
	{
	$this->check_seller_session();
	$this->data['get_all_country'] = $this->SELLER->get_all_country();
	   if(!$_POST)
	   {
		 $this->load->view('seller/register',$this->data);
		 }
		 else
					{
					 redirect('seller/register');
					exit;
					$check_exist=$this->BUYER->check_buyer($this->input->post('email'));
					if($check_exist)
					{
					$this->data['exist_error']='User with this email already exists in the current database.';
					$this->load->view('buyer/register',$this->data);
					}
					else
					{
					 $data=array(
					 'first_name'=>$this->input->post('first_name'),
					 'last_name'=>$this->input->post('last_name'),
					 'email'=>$this->input->post('email'),
					 'contact_number'=>$this->input->post('contact_number'),
					 'country_id'=>$this->input->post('country_id'),
					 'address'=>$this->input->post('address'),
					 'shipping_address'=>$this->input->post('shipping_address'),
					 'postcode'=>$this->input->post('postcode'),
					 'password'=>md5($this->input->post('password')),
					 'created_date'=>time(),
					 'activation_code'=>md5(time()),
					 'status'=>'0',
					  );
					$last_id=$this->BUYER->insert_buyer($data);
					$this->send_mail($last_id);
					$this->session->set_flashdata('success_registration', 'You have been successfully registered. Please check your inbox to verify your email.');
				  redirect('buyer/register');
					}
					}
	}
	
	function send_mail($last_id)
					 {
					 $this->data['buyer'] = $this->BUYER->get_buyer($last_id);
			$config1 = Array(
			'mailtype' => 'html',
			'charset' => 'utf-8',
			);
			$this->load->library('email',$config1);
			$this->email->from('nsglobalsystem@hotmail.com');
			$this->email->to($this->data['buyer']->email);
			$this->email->subject('Verify Your Email Address.');
			$message=$this->load->view('mail/registration_verification_mail',$this->data,true);;
			 //echo $message; die;	
			$this->email->message($message);
			@$this->email->send();
			$this->email->clear();
			return $this->email->print_debugger();	
					 }
	
	//**************************verify Buyer account**********************************//
	
			function confirm()
			{
			$uid = $this->uri->segment(3); 
			$activation_code = $this->uri->segment(4);
			$buyer = $this->BUYER->get_buyer($uid); //print_r($buyer); die;
			if(!empty($buyer)){
			if($buyer && $buyer->activation_code==$activation_code) {
			 $updateData=array(
					 'activation_code'=>'',
					 'status'=>'1',
					  );
					  
			$this->BUYER->activate_account($updateData,$uid);
			$this->session->set_flashdata('success_verification', 'Congratulation!Your account has been verified.');	
			} else {
			$this->session->set_flashdata('error_verification', 'Problem in account verification. Please try again later or contact our support system.');		
			}
			} else {
			$this->session->set_flashdata('error_verification', 'Error!This user does not exist.');		
			}
			redirect('buyer/login','refresh');
			}
	
	
	
	public function login()
	{
	$this->check_buyer_session();
	      if(!$_POST)
	     {
		 $this->load->view('buyer/login',$this->data);
		 }
		 else
		 {
		 
					$this->load->library('form_validation');
					$this->form_validation->set_error_delimiters( '', '<br>' );
					$this->form_validation->set_rules('email', '<strong>Email</strong>', 'trim|required|valid_email');
					$this->form_validation->set_rules('password', '<strong>Password</strong>', 'trim|required');
					if($this->form_validation->run() == FALSE) {
					$this->data['error']=validation_errors();
					$this->load->view('buyer/login',$this->data);	
					}
					else
					{
					$buyerDetail = $this->BUYER->buyer_login_check($_POST['email'],md5($_POST['password']));
					if($buyerDetail) { //print_r($buyerDetail); die;	
					if($buyerDetail->status==1){	
					$sess_array = array(
					'buyer_id' => $buyerDetail->buyer_id
					
					);
					$this->session->set_userdata('user_logged_in', $sess_array);
					
					redirect('buyer/dashboard');
					
					} 
					else if($buyerDetail->status==0)
					{
					$this->data['error'] = "Your account is inactive.Please contact our support system";
					$this->load->view('buyer/login',$this->data);	
					}
					} else {
					$this->data['error'] = "Invalid Email or Password";
					$this->load->view('buyer/login',$this->data);	
					}
					}
					
		 }
	}
	
	    function dashboard()
		{
		$this->check_buyer_login();
		$this->load->view('buyer/dashboard',$this->data);
		}
		
		function save_credit_card()
		{
		$this->check_buyer_login();
		@$session_data = $this->session->userdata('user_logged_in');
		$this->data['get_all_country'] = $this->BUYER->get_all_country();
		$this->data['credit_card_details'] = $this->BUYER->get_buyer_credit_card(@$session_data['buyer_id']);
		if(!$_POST){
		$this->load->view('buyer/save_credit_card',$this->data);
		}else{
		@$session_data = $this->session->userdata('user_logged_in');
		$credit_card_details = $this->BUYER->get_buyer_credit_card(@$session_data['buyer_id']);
		if(count($credit_card_details)<=0){
		$this->BUYER->credit_card_buyer_data($_POST,@$session_data['buyer_id']);
		}else{
		$this->BUYER->credit_card_buyer_data_update($_POST,@$session_data['buyer_id']);
		}
		redirect('buyer/save_credit_card','refresh');
		}
		}
		
		function buyer_profile()
		{
		$this->check_buyer_login();
		$this->load->view('buyer/buyer_profile',$this->data);
		}
		function buyer_edit_profile()
		{
		$this->check_buyer_login();
		@$session_data = $this->session->userdata('user_logged_in');
		$this->data['get_all_country'] = $this->BUYER->get_all_country();
		$this->data['buyer_details'] = $this->BUYER->get_buyer(@$session_data['buyer_id']);
		if(!$_POST){
		$this->load->view('buyer/buyer_edit_profile',$this->data);
		}else{
		@$session_data = $this->session->userdata('user_logged_in');
		$this->BUYER->update_buyer_data($_POST,@$session_data['buyer_id']);
		redirect('buyer/buyer_edit_profile','refresh');
		}
		}
	
	function logout()
				{
				@$session_data = $this->session->userdata('user_logged_in');
			   $this->session->sess_destroy();
				//unset($_SESSION);
				redirect('buyer/login','refresh');
				
				}
	
			function buyer_edit_profile_update(){
			$image_name='';
			$config['upload_path'] = 'public/image_gallery/buyer';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '10000000';
			$config['max_width']  = '110240000';
			$config['max_height']  = '1768000';
			$config['file_name'] = time().$_FILES["image"]['name'];
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
			$image_name='';
			}else{
			$data_image = array('upload_data' => $this->upload->data());
			$upload_data = $this->upload->data();
			$this->resize_function($upload_data);
			$image_name=$data_image['upload_data']['file_name'];
			}
			@$session_data = $this->session->userdata('user_logged_in');
			$this->BUYER->update_buyer_data_prifile($image_name,@$session_data['buyer_id']);
			redirect('buyer/buyer_edit_profile','refresh');
			}
			
			
			private function resize_function($upload_data){
			$image_config["image_library"] = "gd2";
			$image_config["source_image"] = $upload_data["full_path"];
			$image_config['create_thumb'] = FALSE;
			$image_config['maintain_ratio'] = TRUE;
			$image_config['new_image'] = $upload_data["file_path"] . 'small_thumb/'.$upload_data["file_name"];
			$image_config['quality'] = "100%";
			$image_config['width'] = 250;
			$image_config['height'] = 150;
			@$dim = (intval($upload_data["image_width"]) / intval($upload_data["image_height"])) - ($image_config['width'] / $image_config['height']);
			$image_config['master_dim'] = ($dim > 0)? "height" : "width";
			$this->load->library('image_lib');
			$this->image_lib->initialize($image_config);
			$this->image_lib->resize();
			}
			
			function order_history()
			{
			$this->check_buyer_login();
			$this->load->view('buyer/order_history',$this->data);
			}
			
			function buyer_my_won_auction()
			{
			$this->check_buyer_login();
			$this->load->view('buyer/buyer_my_won_auction',$this->data);
			}
			
			function buyer_recent_orders()
			{
			$this->check_buyer_login();
			$this->load->view('buyer/buyer_recent_orders',$this->data);
			}
			
			function buyer_notification()
			{
			$this->check_buyer_login();
			$this->load->view('buyer/buyer_notification',$this->data);
			}
			
			function buyer_address_book()
			{
			$this->check_buyer_login();
			@$session_data = $this->session->userdata('user_logged_in');
		    $this->data['get_all_country'] = $this->BUYER->get_all_country();
			$this->data['buyer_details'] = $this->BUYER->get_buyer(@$session_data['buyer_id']);
			$this->data['buyer_address'] = $this->BUYER->buyer_address(@$session_data['buyer_id']);
			if(!$_POST){
			$this->load->view('buyer/buyer_address_book',$this->data);
			}else{
			$this->BUYER->update_buyer_address_book($_POST,@$session_data['buyer_id']);
			redirect('buyer/buyer_address_book','refresh');
			}
			}
			
			function buyer_address_book_update()
			{
			if($_POST){
			$this->BUYER->buyer_address_book_update($_POST);
			redirect('buyer/buyer_address_book','refresh');
			}
			}
			
			function buyer_auction_view_history()
			{
			$this->check_buyer_login();
			$this->load->view('buyer/buyer_auction_view_history',$this->data);
			}
			
			function buyer_auction_history()
			{
			$this->check_buyer_login();
			$this->load->view('buyer/buyer_auction_history',$this->data);
			}
			
			function buyer_cancel_refund()
			{
			$this->check_buyer_login();
			$this->load->view('buyer/buyer_cancel_refund',$this->data);
			}
			
			function buyer_feedback()
			{
			$this->check_buyer_login();
			$this->load->view('buyer/buyer_feedback',$this->data);
			}
			
			function buyer_address_book_delete()
			{
			$id = $this->uri->segment(4);
			$this->BUYER->buyer_address_book_delete($id);
			redirect('buyer/buyer_address_book','refresh');
			}
			
			function change_password()
			{
			$this->check_buyer_login();
			@$session_data = $this->session->userdata('user_logged_in');
			if(!$_POST){
			$this->load->view('buyer/change_password',$this->data);
			}else{
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('', '<br>' );
			$this->form_validation->set_rules('old_password', '<strong>Old Password</strong>', 'trim|required');
			$this->form_validation->set_rules('new_password', '<strong>New Password</strong>', 'trim|required');
			$this->form_validation->set_rules('confirm_password', '<strong>Confirm Password</strong>', 'trim|required|matches[new_password]');
			if($this->form_validation->run() == FALSE) {
			$this->data['error']=validation_errors();
			$this->load->view('buyer/change_password',$this->data);	
			}else{
			$old_password = $this->input->post('old_password');
			$password_check = $this->BUYER->buyer_password_check(md5($old_password),@$session_data['buyer_id']);
			if($password_check<=0)
			{
			$this->data['error']= 'Old password does not match in our database.';
			$this->load->view('buyer/change_password',$this->data);
			}else{
			$new_password = $this->input->post('new_password');
			$this->BUYER->buyer_password_update(md5($new_password),@$session_data['buyer_id']);
			$this->session->set_flashdata('update_password', 'Password successfully changed.');
			redirect('buyer/change_password','refresh');
			}
			}
			}
			}
			
}

?>