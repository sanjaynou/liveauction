<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class live_auction extends CI_Controller {

function __construct(){		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('front/home_model');
		$this->load->model('front/buyer_model','BUYER');
		$this->load->model('front/live_auction_model','LIVEAUCTION');
		$this->data['title']='LIVE AUCTION';
		}

	
	public function index()
	{
	if($_GET['id']!='')
	{
	$this->data['auction_product'] = $this->LIVEAUCTION->get_auction_product($_GET['id']);
	}
	$this->load->view('auction/live_auction',$this->data);
	}
	
	
			
}

?>