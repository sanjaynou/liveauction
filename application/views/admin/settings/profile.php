<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?> | Admin | Profile</title>
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
        Admin Profile
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="javascript:void(0);" data-toggle="tab">Admin Profile</a></li>
             
			
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="restaurant_info">
                <!-- Post -->
				
				 <table id="example1" class="table table-bordered table-striped">
  				
								<tbody>
                                        
										
										
										 <tr>
									     <th>First Name</th>
										 <td><?php echo ucfirst($admin_info->first_name); ?></td>
										 </tr>
										
										<tr>
									     <th>Last Name</th>
										 <td><?php echo ucfirst($admin_info->last_name); ?></td>
										 </tr>
										 
										 <tr>
									     <th>Email</th>
										 <td><?php 
				   echo $admin_info->email;  ?></td>
										 </tr> 
										
										 
										 <tr>
									     <th>Username</th>
										 <td><?php 
				   echo $admin_info->username;  ?></td>
										 </tr> 
										
										 
										 
										  <tr>
									     <th>Profile Image</th>
										 <td><?php 
if($admin_info->profile_image!='' && file_exists('public/admin/admin_profile/'.$admin_info->profile_image))
				  {?>
				 
				  <img src="<?php echo base_url(); ?>public/admin/admin_profile/<?php echo $admin_info->profile_image;?>" height="100" width="100">
				  <?php } ?></td>
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
