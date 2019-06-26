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
        CMS Details
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="javascript:void(0);" data-toggle="tab">View CMS</a></li>
             
			  <a href="<?php echo base_url(); ?>admin/cms"  class="btn btn-primary add-photo"  style="color:#ffffff; float:right;margin: 4px 7px 0px 0px;"><i class="fa fa-backward">&nbsp;</i>Back</a>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="cms_info">
                <!-- Post -->
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">CSM Title</label>

                    <div class="col-sm-10">
                     <p class="form-control" style="height:auto; border:none;"> <?php echo ucfirst($cms_detail['page_title']); ?></p>
                    </div>
                  </div>
				  
				   <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Page Containt</label>

                    <div class="col-sm-10">
                       <p class="form-control" style="height:auto; border:none;"> <?php echo ucfirst($cms_detail['page_content']); ?></p>
                    </div>
                  </div>
				  
				   <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Created Date</label>

                    <div class="col-sm-10">
     <p class="form-control" style="height:auto; border:none;"> <?php echo date('Y-m-d',$cms_detail['create_date_time']);  ?></p>
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Status</label>

                    <div class="col-sm-10">
         <p class="form-control" style="height:auto; border:none;"><?php if($cms_detail['status']=='1'){echo "Active";}else{ echo "Inactive";} ?></p>
                    </div>
                  </div>
                </form>
               
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
