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
        Admin 
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Profile </h3>
			 
            </div>
            <!-- /.box-header -->
				
 <?php if(isset($email_error) && $email_error!=''){?><div class="error" ><?php echo $email_error;?></div><?php } ?>
			  
			  <?php if(isset($username_error) && $username_error!=''){?><div class="error" ><?php echo $username_error;?></div><?php } ?>
			  <?php if($this->session->flashdata('success')){?><div class="success" ><?php echo $this->session->flashdata('success');?></div><?php } ?>
			  <?php if($this->session->flashdata('error')){?><div class="success" ><?php echo $this->session->flashdata('error');?></div><?php } ?>
			  
            <form role="form" method="post" action="<?php echo base_url();?>admin/settings/edit_profile" enctype="multipart/form-data">
              <div class="box-body">
			  <div class="form-group">
                  <label for="exampleInputfirst_name">First Name</label>
                  <input type="text" name="first_name" id="first_name" class="form-control txtboxToFilter" placeholder="" value="<?php echo ucfirst($admin_info->first_name); ?>" required >
                </div>
				<div class="form-group">
                  <label for="exampleInputlast_name">Last Name </label>
    <input type="text" name="last_name" id="last_name" class="form-control txtboxToFilter" placeholder="" value="<?php echo ucfirst($admin_info->last_name); ?>" required >
      </div>
	  <div class="form-group">
                  <label for="exampleInputEmail1">Email </label>
    <input type="email" name="email" id="email" class="form-control" placeholder="" value="<?php echo $admin_info->email; ?>" required  >
      </div>
	  <div class="form-group">
                  <label for="exampleInputuser_name">User Name </label>
    <input type="text" name="user_name" id="user_name" class="form-control" placeholder="" value="<?php echo $admin_info->username; ?>" required >
      </div>
				<div class="form-group">
                  <label for="exampleInputprofile_image">Profile Image</label>
                 <input id="profile_image" class="form-control" value="" type="file"  name="file"  />
				 <?php 
if($admin_info->profile_image!='' && file_exists('public/admin/admin_profile/'.$admin_info->profile_image))				  {?>
				 
<br> <img src="<?php echo base_url();?>public/admin/admin_profile/<?php echo $admin_info->profile_image; ?>" height="100" width="100">
				  <?php } ?>
		<input type="hidden" name="file_hidden" value="<?php echo $admin_info->profile_image;?>"> 
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
$(".txtboxToFilter").on("keydown", function(event){
  // Allow controls such as backspace, tab etc.
  var arr = [8,9,16,17,20,35,36,37,38,39,40,45,46];

  // Allow letters
  for(var i = 65; i <= 90; i++)
  {
    arr.push(i);
  }

  // Prevent default if not in array
  if(jQuery.inArray(event.which, arr) === -1)
  {
    event.preventDefault();
	//alert('Only Alphabets letters are allowed..!!');
  }
});
</script>
