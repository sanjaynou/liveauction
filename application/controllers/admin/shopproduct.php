<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class shopproduct extends CI_Controller {
	
	function __construct(){
  	parent::__construct();	
		 
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login','refresh');
		}
		
		$this->load->model('admin/admin_model');
		$this->load->model('admin/shopproduct_model');
		$this->load->model('admin/seller_model');
		$this->load->model('admin/category_model');
		$this->load->model('admin/country_model');
		
		$this->data['title'] = 'Live Auction';
							
	}
	
	
	function index(){
		$country=$this->session->userdata('country');
		$this->data['shopproduct'] = $this->shopproduct_model->get_all_shopproduct($country);
		$this->data['country_price']=$this->country_model->get_country($country);
		$this->load->view('admin/shopproduct/manage_shopproduct',$this->data);		
	}
	
	
	public function add(){
	
	         $country=$this->session->userdata('country');
			 $this->load->helper(array('form'));
			 $this->load->library('form_validation');
			 $this->data['seller'] = $this->seller_model->get_all_seller($country);
			 $this->data['country']=$this->country_model->get_all_country();
			 $this->data['country_price']=$this->country_model->get_country($country);
			 $this->data['category']=$this->category_model->get_all_shopcategory($country);	
			if(!$_POST){
			$this->load->view('admin/shopproduct/add_shopproduct',$this->data);		
			} else { 
			$this->form_validation->set_rules('product_name', '<strong>Product Name</strong>', 'required');
			$this->form_validation->set_rules('seller_id', '<strong>Seller</strong>', 'required');
			$this->form_validation->set_rules('category_id', '<strong>Category</strong>', 'required');
		    if ($this->form_validation->run() == FALSE)
			{
            $this->data['error']=validation_errors();			
			$this->load->view('admin/shopproduct/add_shopproduct',$this->data);	
			}
			else
			{
			
			//echo '<pre>';
			//print_r($_POST); die;
			//$image_name = implode(',',$image_name1);
			//echo $image_name; die;
			
			/*$image_name='';
			$config['upload_path'] = 'public/image_gallery/shopproduct';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
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
				
			$last_id = $this->shopproduct_model->insert_shopproduct($_POST,$country);
			$c = count($_POST['files']);
			$image_name1 = array();
			for($i=0;$i<$c;$i++){
			$image_parts = explode(";base64,", $_POST['files'][$i]);
			$image_type_aux = explode("image/", $image_parts[0]);
			$image_type = $image_type_aux[1];
			$image_base64 = base64_decode($image_parts[1]);
			$n = uniqid() . '.png';
			$file = 'public/image_gallery/shopproduct/' . $n;
			@file_put_contents($file, $image_base64);
			array_push($image_name1,$n);
			$this->category_model->insert_shopproduct_image($n,$last_id,$_POST['default_images'][$i]);
			}
			redirect("admin/shopproduct","refresh");
			}
			}
			}

		   public function edit(){
				$country=$this->session->userdata('country');
				$id = $this->uri->segment(5);
				
				$this->data['seller'] = $this->seller_model->get_all_seller($country);
				$this->data['country']=$this->country_model->get_all_country();
				$this->data['country_price']=$this->country_model->get_country($country);
				$this->data['category']=$this->category_model->get_all_shopcategory($country);
				$this->data['shopproduct']=$this->shopproduct_model->get_shopproduct($id);
				$this->load->helper(array('form'));					
				$this->load->library('form_validation');
				if(!$_POST){
				$this->load->view('admin/shopproduct/edit_shopproduct',$this->data);
					} else { 
				$this->form_validation->set_rules('product_name', '<strong>Product Name</strong>', 'required');
				$this->form_validation->set_rules('seller_id', '<strong>Seller</strong>', 'required');
				$this->form_validation->set_rules('category_id', '<strong>Category</strong>', 'required');
			
					if ($this->form_validation->run() == FALSE)
					{
					$this->data['error']=validation_errors();					
					$this->load->view('admin/shopproduct/edit_shopproduct',$this->data);	
					}
					else
					{
					$this->category_model->delete_shopproduct_image($id);
					$c2 = count($_POST['files_hidden']);
					$image_name2 = array();
					for($j=0;$j<$c2;$j++){
					array_push($image_name2,$_POST['files_hidden'][$j]);
					}
					
					
					$c = count($_POST['files']);
					$image_name1 = array();
					for($i=0;$i<$c;$i++){
					$image_parts = explode(";base64,", $_POST['files'][$i]);
					$image_type_aux = explode("image/", $image_parts[0]);
					$image_type = $image_type_aux[1];
					$image_base64 = base64_decode($image_parts[1]);
					$n = uniqid() . '.png';
					$file = 'public/image_gallery/shopproduct/' . $n;
					@file_put_contents($file, $image_base64);
					array_push($image_name1,$n);
					}
					$image_name4 = array_merge($image_name2,$image_name1);
					$c= count($image_name4);
					for($k=0;$k<$c;$k++){
					$this->category_model->update_shopproduct_image($image_name4[$k],$id,$_POST['default_images'][$k]);
					}
					
					$this->shopproduct_model->update_shopproduct($_POST,$id);
		
					redirect("admin/shopproduct","refresh");
					}
					}		
					}
					
					function view()
					{
					$product_id = $this->uri->segment(5);
					$country=$this->session->userdata('country');
			$this->data['shopproduct']=$this->shopproduct_model->get_shopproduct($product_id);
			$this->data['country_price']=$this->country_model->get_country($country);
		            $this->load->view('admin/shopproduct/view_shopproduct',$this->data);
					}
					
					
					function ajax_sub_cat()
					{
					$sub_cat = $this->category_model->sub_cat($_POST['cate_id']);
					if(!empty($sub_cat)){
					foreach($sub_cat as $sub_cat_all)
					  {?>
						<li>
						<a href="javascript:void(0);" id="<?php echo $sub_cat_all['category_id'];?>" cus="<?php echo $sub_cat_all['category_name'];?>" class="sub_category"><?php echo $sub_cat_all['category_name'];?>
						<?php
						$sub_cat2 = $this->category_model->sub_cat($sub_cat_all['category_id']);
						$count2 = count($sub_cat2);
						if($count2>0){
						?>
						<strong style="float:right">
						<i class="fa fa-chevron-right"></i>
						</strong>
						<?php } ?>
						</a>
						</li>
					 <?php
					 }
					 }else{?>
					 <li>No Subcategory</li>
					 <?php }
					}
					
					
					
					function ajax_sub_cat2()
					{
					$sub_cat = $this->category_model->sub_cat($_POST['cate_id']);
					if(!empty($sub_cat)){
					foreach($sub_cat as $sub_cat_all)
					  {?>
						<li>
						<a href="javascript:void(0);" id="<?php echo $sub_cat_all['category_id'];?>" cus="<?php echo $sub_cat_all['category_name'];?>" class="sub_category2"><?php echo $sub_cat_all['category_name'];?>
						</a>
						</li>
					 <?php
					 }}else{?>
					 <li>No Subcategory</li>
					 <?php }
					}
					
					
					function delete()
					{
					 $product_id = $this->uri->segment(5);
					 $shopproduct=$this->shopproduct_model->get_shopproduct($product_id);
					 if($shopproduct->product_image !='' && file_exists('public/image_gallery/shopproduct/'.$shopproduct->product_image)){
					 unlink('public/image_gallery/shopproduct/'.$shopproduct->product_image);
					 unlink('public/image_gallery/shopproduct/small_thumb/'.$shopproduct->product_image);
					 }
					 $this->shopproduct_model->delete_shopproduct($product_id);
					 redirect("admin/shopproduct","refresh");
				
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
					
					
					
	private function upload_files($path, $title, $files)
    {
        $config = array(
            'upload_path'   => $path,
            'allowed_types' => 'gif|jpg|png|jpeg',
            'overwrite'     => 1,                       
        );

        $this->load->library('upload', $config);

        $images = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];

            $fileName = $title .'_'. $image;

            $images[] = $fileName;

            $config['file_name'] = $fileName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('images[]')) {
                $this->upload->data();
            } else {
                return false;
            }
        }

        return $images;
    }	
}
?>