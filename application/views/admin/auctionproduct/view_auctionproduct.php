<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?> | Admin | Auction Product</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/segment/header'); ?>
 
  <?php $this->load->view('admin/segment/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Auction Product
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        
        <!-- /.col -->
        <div class="col-md-12">
		
		<div class="nav-tabs-custom">

            <ul class="nav nav-tabs">

              <li class="active"><a href="#Shop_info" data-toggle="tab">Auction Product Info</a></li>

			  <a href="<?php echo base_url(); ?>admin/auctionproduct"  class="btn btn-primary add-photo"  style="color:#ffffff; float:right;margin: 4px 7px 0px 0px;"><i class="fa fa-backward">&nbsp;</i>Back</a>

            </ul>

            <div class="tab-content">

              <div class="active tab-pane" id="Shop_info">
			  
				<table id="example1" class="table table-bordered table-striped">
  				
								<tbody>
                                        
										
										
										 <tr>
									     <th>Product Name</th>
										 <td><?php echo ucwords($auctionproduct->product_name); ?></td>
										 </tr>
										
										<tr>
									     <th>Seller</th>
										 <td><?php 
				  $seller_id = $auctionproduct->seller_id;
				$seller=$this->seller_model->get_seller($seller_id);
				 if(!empty($seller)){ echo ucfirst($seller->first_name).'&nbsp;'.ucfirst($seller->last_name); }?></td>
										 </tr>
										 
										 <tr>
									     <th>Category</th>
										 <td>
										 <?php 
				  /*$category_id = $auctionproduct->category_id;
				$category=$this->category_model->get_category($category_id);
				 if(!empty($category)){ echo ucfirst($category->category_name); }*/
				 echo $auctionproduct->category_path;
				 ?></td>
										 </tr>
										 
										 <tr>
									     <th>SKU</th>
										 <td><?php echo $auctionproduct->sales_sku; ?></td>
										 </tr>
										 
										  <tr>
									     <th>Auction Timer</th>
										 <td><?php echo $auctionproduct->auction_timer; ?></td>
										 </tr>
										 
										  <tr>
									     <th>Time Increase/Bid</th>
										 <td><?php echo $auctionproduct->time_increase_perbid; ?></td>
										 </tr>
										 
										  <tr>
									     <th>Minimum Bid</th>
										 <td><?php echo $auctionproduct->min_bid; ?></td>
										 </tr>
										 
										  <tr>
									     <th>Bid Interval</th>
										 <td><?php echo $auctionproduct->bid_interval; ?></td>
										 </tr>
										 
										 
										
										
										
										 <tr>
									     <th>Product Image</th>
										 <td>  <?php 
										 $auction_image = $this->auctionproduct_model->auction_image($auctionproduct->product_id);
										 foreach($auction_image as $image_data){?>
										 <?php if($image_data['product_images']!='' && file_exists('public/image_gallery/auctionproduct/'.$image_data['product_images'])){?>
			<img src="<?php echo base_url(); ?>public/image_gallery/auctionproduct/<?php echo $image_data['product_images']; ?>" alt="User Image" width="50" height="50" style="margin-right:10px;">
			<?php }}?>
			</td>
										 </tr>
										 
										  <tr>
									     <th>Product Description</th>
										 <td><?php echo $auctionproduct->product_desc; ?></td>
										 </tr> 
										 <!-- <tr>
									     <th>Country</th>
										 <td><?php 
										 $all_country=array();
										 if($auctionproduct->country!='' && $auctionproduct->country!='0'){
										 $country_id=explode(',',$auctionproduct->country);
										 foreach($country_id as $countryid)
										 {
										 $country=$this->country_model->get_country($countryid);
										 array_push($all_country,$country->country_name);
										 }
										 echo implode(',',$all_country);
										 }
										 
										  if($auctionproduct->country=='0'){echo 'All';}
										 ?></td>
										 </tr>-->
										 
										 
										 
										 
										  
										
                                  </tbody>
				  
  					
  
</table>
</div>

             

			  

              <!-- /.tab-pane -->

            </div>

            <!-- /.tab-content -->

          </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
          
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php $this->load->view('admin/segment/footer'); ?>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>public/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>public/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>public/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>public/admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>public/admin/dist/js/demo.js"></script>
</body>
</html>
