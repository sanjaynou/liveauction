<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class seller extends CI_Controller {
	
	function __construct(){
  	parent::__construct();	
		 
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login','refresh');
		}
		
		$this->load->model('admin/admin_model');
		
		$this->load->model('admin/seller_model');
		
		$this->load->model('admin/country_model');
		
		$this->data['title'] = 'Live Auction';
							
	}
	
	
	function index(){
		$country=$this->session->userdata('country');
		$this->data['seller'] = $this->seller_model->get_all_seller($country);
		$this->load->view('admin/seller/manage_seller',$this->data);		
	}
	
	
	public function add(){
	          $country=$this->session->userdata('country');
			 $this->load->helper(array('form'));
			 $this->data['country_price']=$this->country_model->get_country($country);
			 $this->load->library('form_validation');
			if(!$_POST){

			$this->load->view('admin/seller/add_seller',$this->data);		

			} else { 
			
			$this->form_validation->set_rules('first_name', '<strong>First Name</strong>', 'required');
			$this->form_validation->set_rules('last_name', '<strong>Last Name</strong>', 'required');
			$this->form_validation->set_rules('email', '<strong>Email</strong>', 'required');
			$this->form_validation->set_rules('password', '<strong>Password</strong>', 'required');
			$this->form_validation->set_rules('phone', '<strong>Phone Number</strong>', 'required');
			$this->form_validation->set_rules('shipment_fee_domestic', '<strong>Shipment fee domestic</strong>', 'required');
			$this->form_validation->set_rules('shipment_fee_international', '<strong>Shipment fee international</strong>', 'required');
		    if ($this->form_validation->run() == FALSE)
			{
            $this->data['error']=validation_errors();			
			$this->load->view('admin/seller/add_seller',$this->data);	
			}
			else
			{
			$image_name='';
				//print_r($_FILES);die;
				$config['upload_path'] = 'public/image_gallery/seller';
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
			$this->seller_model->insert_seller($_POST,$image_name,$country);
		
			redirect("admin/seller","refresh");
			}
			}
			}

		   public function edit(){
					 $country=$this->session->userdata('country');
					$id = $this->uri->segment(5);
					$this->data['country_price']=$this->country_model->get_country($country);
					$this->data['seller']=$this->seller_model->get_seller($id);
					
					$this->load->helper(array('form'));					
					$this->load->library('form_validation');
					
					if(!$_POST){
					
					$this->load->view('admin/seller/edit_seller',$this->data);
					
					} else { 

			$this->form_validation->set_rules('first_name', '<strong>First Name</strong>', 'required');
			$this->form_validation->set_rules('last_name', '<strong>Last Name</strong>', 'required');
			$this->form_validation->set_rules('email', '<strong>Email</strong>', 'required');
			$this->form_validation->set_rules('phone', '<strong>Phone Number</strong>', 'required');
			$this->form_validation->set_rules('shipment_fee_domestic', '<strong>Shipment fee domestic</strong>', 'required');
			$this->form_validation->set_rules('shipment_fee_international', '<strong>Shipment fee international</strong>', 'required');
			
					if ($this->form_validation->run() == FALSE)
					{
					$this->data['error']=validation_errors();					
					$this->load->view('admin/seller/edit_seller',$this->data);	
					}
					else
					{
					$image_name=$_POST['img_hidden'];
				//print_r($_FILES);die;
				$config['upload_path'] = 'public/image_gallery/seller';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '10000000';
					$config['max_width']  = '110240000';
					$config['max_height']  = '1768000';
					$config['file_name'] = time().$_FILES["image"]['name'];
					$this->load->library('upload', $config);
					
					 if ( ! $this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
						$image_name=$_POST['img_hidden'];
						}else{
						$data_image = array('upload_data' => $this->upload->data());
						$upload_data = $this->upload->data();
						$this->resize_function($upload_data);
						$image_name=$data_image['upload_data']['file_name'];
						}	
					$this->seller_model->update_seller($_POST,$image_name,$id);
		
					redirect("admin/seller","refresh");
					}
					}		
					}
					
				function view()
				{
				$country=$this->session->userdata('country');
				$this->data['country_price']=$this->country_model->get_country($country);
				$seller_id = $this->uri->segment(5);
				$this->data['seller']=$this->seller_model->get_seller($seller_id);
				
				$this->load->view('admin/seller/view_seller',$this->data);
				}
				
					
					
					
					
					function delete()
					{
					 $seller_id = $this->uri->segment(5);
					 $seller=$this->seller_model->get_seller($seller_id);
					  if($seller->profile_image !='' && file_exists('public/image_gallery/seller/'.$seller->profile_image)){
					 unlink('public/image_gallery/seller/'.$seller->profile_image);
					 unlink('public/image_gallery/seller/small_thumb/'.$seller->profile_image);
					 }
					 $this->seller_model->delete_seller($seller_id);
					 redirect("admin/seller","refresh");
				
					}
					
					//******************* resize code for image **************************//

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

		/*if(!$this->image_lib->resize()){ //Resize image
		redirect("errorhandler"); //If error, redirect to an error page
		}else{
		}*/
		//// Resize code	
	}

//******************* end of resize code for image **************************//
					
					
					
		
}
?>