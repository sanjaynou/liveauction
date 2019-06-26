<?php //print_r($customer); die; 
 //echo $customer['customer_id']; die; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?> | Admin | Seller</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/dist/css/extra.css">
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
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Seller
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
        

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Seller </h3>
			  <a href="<?php echo base_url(); ?>admin/seller"  class="btn btn-primary add-photo"  style="color:#ffffff; float:right;"><i class="fa fa-backward">&nbsp;</i>Back</a>
            </div>
            <!-- /.box-header -->
			<?php if(isset($error) && $error!=''){?>
					<div class="col-md-6">
					<div class="alert alert-danger">
					<strong></strong><?=$error?>
					</div>
					</div>
					<div class="clearfix"></div>
					<?php } ?>
				
            <form role="form" method="post" action="<?php echo base_url();?>admin/seller/edit/id/<?php echo $seller->seller_id;?>" enctype="multipart/form-data">
              <div class="box-body">
			 
			  
			  <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" name="first_name" id="first_name" class="form-control txtboxToFilter" placeholder="" value="<?php echo ucfirst($seller->first_name); ?>" required >
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Last Name </label>
    <input type="text" name="last_name" id="last_name" class="form-control txtboxToFilter" placeholder="" value="<?php echo ucfirst($seller->last_name); ?>" required  >
      </div>
	  <div class="form-group">
                  <label for="exampleInputEmail1">Email </label>
    <input type="email" name="email" id="email" class="form-control" placeholder="" value="<?php echo $seller->email; ?>"required  >
      </div>
	
	  
	  	<div class="form-group">
                  <label for="exampleInputEmail1">Shipment Fee(Domestic) </label>
				  <div class="input-group">
                <span class="input-group-addon"><?php echo $country_price->price_symbol;?></span>
    <input type="text" name="shipment_fee_domestic" id="shipment_fee_domestic" class="form-control txtboxToFilter" placeholder="" required  value="<?php echo $seller->shipment_fee_domestic;?>">
	</div>
      </div>
	   <div class="form-group">
                  <label for="exampleInputEmail1">Shipment Fee(International) </label>
				  <div class="input-group">
                <span class="input-group-addon"><?php echo $country_price->price_symbol;?></span>
    <input type="text" name="shipment_fee_international" id="shipment_fee_international" class="form-control txtboxToFilter" placeholder="" required  value="<?php echo $seller->shipment_fee_international;?>">
	</div>
      </div>
			
				
				
				 <div class="form-group">

                  <label for="exampleInputEmail1">Address</label>

                  <input type="text" name="address" id="address" class="form-control " placeholder="" value="<?php echo $seller->address; ?>"  required>

                </div>
	  
				<div class="form-group">

                  <label for="exampleInputEmail1">Postcode</label>

                  <input type="text" name="postcode" id="postcode" class="form-control " placeholder="" value="<?php echo $seller->postcode; ?>"  required>

                </div>
	  
	  
	  
	   <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" id="phone"  data-inputmask='"mask": "999-999-9999"' data-mask class="form-control" placeholder="" value="<?php echo ucfirst($seller->phone); ?>" required  >
      </div>
	  
	    <div class="form-group">
                  <label for="exampleInputFile">Profile Image</label>
                  <input type="file" id="exampleInputFile" name="image">
				  
				  <?php if($seller->profile_image !='' && file_exists('public/image_gallery/seller/small_thumb/'.$seller->profile_image)){?>
			<img src="<?php echo base_url(); ?>public/image_gallery/seller/small_thumb/<?php echo $seller->profile_image; ?>" class="img-circle" alt="User Image" width="50" height="50">
			<?php } ?>
                <input type="hidden" class="form-control"   name="img_hidden" value="<?php echo $seller->profile_image; ?>" >

                  <!--<p class="help-block">Example block-level help text here.</p>-->
                </div>
				
				
	  <div class="form-group">
                  <label for="exampleInputEmail1">Status</label>
                  <select class="form-control" name="status" required >
				<option value="">--Select Status--</option>
		<option <?php if($seller->status==0){ echo 'selected';}?> value="0">Inactive</option> 
		<option <?php if($seller->status==1){ echo 'selected';}?> value="1">Active</option>
				
				</select>
                </div>	  
             </div>
              <!-- /.box-body -->

              <div class="box-footer">
			  
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
				
              </div>
            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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

<script src="<?php echo base_url(); ?>public/admin/plugins/sparkline/jquery.sparkline.min.js"></script>

<script src="<?php echo base_url(); ?>public/admin/plugins/input-mask/jquery.inputmask.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url(); ?>public/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>public/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>public/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>public/admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>public/admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $("[data-mask]").inputmask();
  </script>

<script>
  $(function () {
    $("#example1").DataTable();
    
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
<script>
$(document).ready(function() {
    $(".txtboxToFilter").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});
</script>



