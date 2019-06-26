<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

function __construct(){		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('front/home_model');
		$this->load->model('front/buyer_model','BUYER');
		$this->data['title']='LIVE AUCTION';
		}

	
	public function index()
	{
	$this->load->view('home',$this->data);
	}
	
	
			
}

?>