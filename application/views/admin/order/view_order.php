<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?> | Admin | Order</title>
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
         Order Detail
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        
        <!-- /.col -->
        <div class="col-md-12">
		
		<div class="nav-tabs-custom">

            <ul class="nav nav-tabs">

              <li class="active"><a href="#Order_detail" data-toggle="tab">Order Detail</a></li>

			  <a href="<?php echo base_url(); ?>admin/order"  class="btn btn-primary add-photo"  style="color:#ffffff; float:right;margin: 4px 7px 0px 0px;"><i class="fa fa-backward">&nbsp;</i>Back</a>

            </ul>

            <div class="tab-content">

              <div class="active tab-pane" id="restaurant_info">
			  
				<table id="example1" class="table table-bordered table-striped">
  				
								<tbody>
                                        
										
										
										 <tr>
									     <th>Order Number</th>
										 <td><?php echo ucfirst($order->order_number); ?></td>
										 </tr>
										
										<tr>
									     <th>Buyer Name</th>
										 <td><?php 
				  $buyer=$this->buyer_model->get_buyer($order->buyer_id);
				  if(isset($buyer)){echo ucfirst($buyer->first_name).'&nbsp;'.ucfirst($buyer->last_name);} ?></td>
										 </tr>
										 
										 <tr>
									     <th>Order Date</th>
										 <td><?php echo ucfirst($order->order_date); ?></td>
										 </tr> 
										
										 
										 
										
										 
										 <tr>
									     <th>Order Status</th>
										 <td><?php if($order->status=='0'){echo "Active";}else{echo "Inactive";}; ?></td>
										 </tr>
										 
										  <tr>
									     <th>Payment Status</th>
										 <td><?php if($order->payment_status=='0'){echo "Unpaid";}else{echo "Paid";}; ?></td>
										 </tr>
										 
										  <tr>
									     <th>Payment Method</th>
										 <td><?php echo $order->payment_method; ?></td>
										 </tr>
										 
										 
									
                                  </tbody>
				  
  					
  
</table>



<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl No.</th>
                  <th>Product Name</th>
				  <th>Quantity</th>
				  <th>Unit Price</th>
				  
				  <th>Total</th>
				  
				 
                  
                </tr>
                </thead>
                <tbody>
              
             <?php
			 $sn=1;
			 foreach($order_detail as $allorder_detail)
			 {?>
                <tr>
                  <td><?php echo $sn; ?></td>
                  <td>
				  <?php 
				  $product=$this->shopproduct_model->get_shopproduct($allorder_detail->product_id);
				  if(isset($product)){echo ucfirst($product->product_name);} ?>
				 </td>
				   <td><?php echo $allorder_detail->quantity; ?></td>
				  
				 
				  <td>$<?php echo number_format($allorder_detail->price,2); ?></td>
				    <td>$<?php echo number_format($allorder_detail->price*$allorder_detail->quantity,2); ?></td>
					  
   
                </tr>
				<?php $sn++; } ?>
				
				<tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
				   <td>&nbsp;</td>
				   	 <td>Shipment Fee</td>
				    <td>$<?php echo number_format($order->shipment_fee,2); ?></td>
					  
   
                </tr>
				
				<tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
				   <td>&nbsp;</td>
				   	 <td>Total Amount</td>
				    <td>$<?php echo number_format($order->total_amount,2); ?></td>
					  
   
                </tr>
               
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
