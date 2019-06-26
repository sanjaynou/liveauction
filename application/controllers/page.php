<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {





function __construct(){		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('front/page_model','PAGE');
		$this->load->model('front/home_model');
		$this->load->model('front/buyer_model','BUYER');
		$this->data['title']='LIVE AUCTION';
		}

	
	public function aboutus()
	{
	    $this->data['pageDetail']=$this->PAGE->get_page_detail(3);
		 $this->load->view('page/about_us',$this->data);
	}
	
	
	public function privacypolicy()
	{
	   $this->data['pageDetail']=$this->PAGE->get_page_detail(14);
		 $this->load->view('page/privacy_policy',$this->data);
	}
	
	public function termcondition()
	{
	   $this->data['pageDetail']=$this->PAGE->get_page_detail(15);
		 $this->load->view('page/term_condition',$this->data);
	}
	
	
		public function contactus()
	{
	      $this->data['contactDetail']=$this->PAGE->get_contact_detail();
		  if(!$_POST)
		  {
		  $this->load->view('page/contact_us',$this->data);
		 }
		 else
		 {
		 $name=$_POST['name'];
	     $email=$_POST['email'];
	     $phone=$_POST['phone'];
	     $message_desc=$_POST['message'];
	$config1 = Array(
	'mailtype' => 'html',
	'charset' => 'utf-8',
	);
	$this->load->library('email',$config1);
	$this->email->from($email);
	$this->email->to($this->data['contactDetail']->email);
	$this->email->subject('Contact Us');
	$message = '<html><body>';

$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . ucfirst($name) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Phone Number:</strong> </td><td>" . strip_tags($phone) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Message:</strong> </td><td>" . ucfirst($message_desc) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

		//echo $message; die;		
			$this->email->message(@$message);
			@$this->email->send();
			$this->email->clear();
		 $this->session->set_flashdata('success', 'Your query has been submitted.Please wait for response !!');
				  redirect('page/contactus');
		 }
		 
		 
	}
	
	
			
}

?>