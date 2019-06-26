<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auctionproduct extends CI_Controller {
	
	function __construct(){
  	parent::__construct();	
		 
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login','refresh');
		}
		
		$this->load->model('admin/admin_model');
		$this->load->model('admin/auctionproduct_model');
		$this->load->model('admin/seller_model');
		$this->load->model('admin/category_model');
		$this->load->model('admin/country_model');
		
		$this->data['title'] = 'Live Auction';
							
	}
	
	
	function index(){
		$country=$this->session->userdata('country');
		$this->data['auctionproduct'] = $this->auctionproduct_model->get_all_auctionproduct($country);
		$this->load->view('admin/auctionproduct/manage_auctionproduct',$this->data);		
	}
	
	
	public function add(){
	          $country=$this->session->userdata('country');
			 $this->load->helper(array('form'));
			 $this->load->library('form_validation');
			 $this->data['seller'] = $this->seller_model->get_all_seller($country);
			 $this->data['country']=$this->country_model->get_all_country();
			 $this->data['category']=$this->category_model->get_all_auctioncategory($country);	
			if(!$_POST){

			$this->load->view('admin/auctionproduct/add_auctionproduct',$this->data);		

			} else { 
			
			$this->form_validation->set_rules('product_name', '<strong>Product Name</strong>', 'required');
			$this->form_validation->set_rules('seller_id', '<strong>Seller</strong>', 'required');
			$this->form_validation->set_rules('category_id', '<strong>Category</strong>', 'required');
			
			
		    if ($this->form_validation->run() == FALSE)
			{
            $this->data['error']=validation_errors();			
			$this->load->view('admin/auctionproduct/add_auctionproduct',$this->data);	
			}
			else
			{
			
			
			/*$image_name='';
				//print_r($_FILES);die;
				$config['upload_path'] = 'public/image_gallery/auctionproduct';
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
						}*/
				
			$last_id = $this->auctionproduct_model->insert_auctionproduct($_POST,$country);
		    $c = count($_POST['files']);
			$image_name1 = array();
			for($i=0;$i<$c;$i++){
			$image_parts = explode(";base64,", $_POST['files'][$i]);
			$image_type_aux = explode("image/", $image_parts[0]);
			$image_type = $image_type_aux[1];
			$image_base64 = base64_decode($image_parts[1]);
			$n = uniqid() . '.png';
			$file = 'public/image_gallery/auctionproduct/' . $n;
			@file_put_contents($file, $image_base64);
			array_push($image_name1,$n);
			$this->category_model->insert_auctionproduct_image($n,$last_id,$_POST['default_images'][$i]);
			}
			redirect("admin/auctionproduct","refresh");
			}
			}
			}

		   public function edit(){
					 $country=$this->session->userdata('country');
					$id = $this->uri->segment(5);
				$this->data['seller'] = $this->seller_model->get_all_seller($country);
				$this->data['country']=$this->country_model->get_all_country();
				$this->data['category']=$this->category_model->get_all_auctioncategory($country);	
					$this->data['auctionproduct']=$this->auctionproduct_model->get_auctionproduct($id);
					
					$this->load->helper(array('form'));					
					$this->load->library('form_validation');
					
					if(!$_POST){
					
					$this->load->view('admin/auctionproduct/edit_auctionproduct',$this->data);
					
					} else { 

			$this->form_validation->set_rules('product_name', '<strong>Product Name</strong>', 'required');
			$this->form_validation->set_rules('seller_id', '<strong>Seller</strong>', 'required');
			$this->form_validation->set_rules('category_id', '<strong>Category</strong>', 'required');
			
					if ($this->form_validation->run() == FALSE)
					{
					$this->data['error']=validation_errors();					
					$this->load->view('admin/auctionproduct/edit_auctionproduct',$this->data);	
					}
					else
					{
					/*$image_name=$_POST['img_hidden'];
				//print_r($_FILES);die;
				$config['upload_path'] = 'public/image_gallery/auctionproduct';
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
						}	*/
					$this->category_model->delete_auctionproduct_image($id);
					$c2 = count($_POST['files_hidden']);
					$image_name2 = array();
					for($j=0;$j<$c2;$j++){
					array_push($image_name2,$_POST['files_hidden'][$j]);
					}
					
					
					$c = count(@$_POST['files']);
					$image_name1 = array();
					for($i=0;$i<$c;$i++){
					$image_parts = explode(";base64,", $_POST['files'][$i]);
					$image_type_aux = explode("image/", $image_parts[0]);
					$image_type = $image_type_aux[1];
					$image_base64 = base64_decode($image_parts[1]);
					$n = uniqid() . '.png';
					$file = 'public/image_gallery/auctionproduct/' . $n;
					@file_put_contents($file, $image_base64);
					array_push($image_name1,$n);
					}
					$image_name4 = array_merge($image_name2,$image_name1);
					$c= count($image_name4);
					for($k=0;$k<$c;$k++){
					$this->category_model->update_auctionproduct_image($image_name4[$k],$id,$_POST['default_images'][$k]);
					}
					
					$this->auctionproduct_model->update_auctionproduct($_POST,$id);
					redirect("admin/auctionproduct","refresh");
					}
					}		
					}
					
					function view()
					{
					$product_id = $this->uri->segment(5);
			$this->data['auctionproduct']=$this->auctionproduct_model->get_auctionproduct($product_id);
			
		            $this->load->view('admin/auctionproduct/view_auctionproduct',$this->data);
					}
					
					
					
					
					
					function delete()
					{
					 $product_id = $this->uri->segment(5);
					 $auctionproduct=$this->auctionproduct_model->get_auctionproduct($product_id);
					 if($auctionproduct->product_image !='' && file_exists('public/image_gallery/auctionproduct/'.$auctionproduct->product_image)){
					 unlink('public/image_gallery/auctionproduct/'.$auctionproduct->product_image);
					 unlink('public/image_gallery/auctionproduct/small_thumb/'.$auctionproduct->product_image);
					 }
					 $this->auctionproduct_model->delete_auctionproduct($product_id);
					 redirect("admin/auctionproduct","refresh");
				
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