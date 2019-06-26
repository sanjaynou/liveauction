<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class buyer extends CI_Controller {
	
	function __construct(){
  	parent::__construct();	
		 
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login','refresh');
		}
		
		$this->load->model('admin/admin_model');
		
		$this->load->model('admin/buyer_model');
		$this->load->model('admin/country_model');
		
		$this->data['title'] = 'Live Auction';
							
	}
	
	
	function index(){
		$country=$this->session->userdata('country');
		$this->data['buyer'] = $this->buyer_model->get_all_buyer($country);
		$this->load->view('admin/buyer/manage_buyer',$this->data);		
	}
	
	
	public function add(){
	          $country=$this->session->userdata('country');
			 $this->load->helper(array('form'));
			 $this->load->library('form_validation');
			if(!$_POST){

			$this->load->view('admin/buyer/add_buyer',$this->data);		

			} else { 
			
			$this->form_validation->set_rules('first_name', '<strong>First Name</strong>', 'required');
			$this->form_validation->set_rules('last_name', '<strong>Last Name</strong>', 'required');
			$this->form_validation->set_rules('email', '<strong>Email</strong>', 'required');
			$this->form_validation->set_rules('password', '<strong>Password</strong>', 'required');
			$this->form_validation->set_rules('phone', '<strong>Phone Number</strong>', 'required');
		    if ($this->form_validation->run() == FALSE)
			{
            $this->data['error']=validation_errors();			
			$this->load->view('admin/buyer/add_buyer',$this->data);	
			}
			else
			{
			
			
			$image_name='';
				//print_r($_FILES);die;
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
				
			$this->buyer_model->insert_buyer($_POST,$image_name,$country);
		
			redirect("admin/buyer","refresh");
			}
			}
			}

		   public function edit(){
					 
					$id = $this->uri->segment(5);
					
					$this->data['buyer']=$this->buyer_model->get_buyer($id);
					
					$this->load->helper(array('form'));					
					$this->load->library('form_validation');
					
					if(!$_POST){
					
					$this->load->view('admin/buyer/edit_buyer',$this->data);
					
					} else { 

			$this->form_validation->set_rules('first_name', '<strong>First Name</strong>', 'required');
			$this->form_validation->set_rules('last_name', '<strong>Last Name</strong>', 'required');
			
					if ($this->form_validation->run() == FALSE)
					{
					$this->data['error']=validation_errors();					
					$this->load->view('admin/buyer/edit_buyer',$this->data);	
					}
					else
					{
					$image_name=$_POST['img_hidden'];
				//print_r($_FILES);die;
				$config['upload_path'] = 'public/image_gallery/buyer';
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
					$this->buyer_model->update_buyer($_POST,$image_name,$id);
		
					redirect("admin/buyer","refresh");
					}
					}		
					}
					
					function view()
					{
					$buyer_id = $this->uri->segment(5);
			$this->data['buyer']=$this->buyer_model->get_buyer($buyer_id);
			
		            $this->load->view('admin/buyer/view_buyer',$this->data);
					}
					
					
					
					
					
					function delete()
					{
					 $buyer_id = $this->uri->segment(5);
					 $buyer=$this->buyer_model->get_buyer($buyer_id);
					 if($buyer->profile_image !='' && file_exists('public/image_gallery/buyer/'.$buyer->profile_image)){
					 unlink('public/image_gallery/buyer/'.$buyer->profile_image);
					 unlink('public/image_gallery/buyer/small_thumb/'.$buyer->profile_image);
					 }
					 $this->buyer_model->delete_buyer($buyer_id);
					 redirect("admin/buyer","refresh");
				
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