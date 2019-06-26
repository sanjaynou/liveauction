<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?> | Admin | Sales Report</title>
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
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sales Report
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
        

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Sales Report</h3>
			  
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
			<form method="post" action="<?php echo base_url();?>admin/sells_report">
			<div style="position:absolute; margin:-5px 0px 0px 200px; z-index:99999;">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
			<td>From Date : </td>
			<td><input type="text" name="from_date" required id="datepicker" value="<?php echo $this->input->post('from_date');?>" class="form-control" placeholder="From Date" style="width:80%"></td>
			<td>To Date : </td>
			<td><input type="text" name="to_date" required id="datepicker1" value="<?php echo $this->input->post('to_date');?>" class="form-control" placeholder="To Date" style="width:80%"></td>
			<td><button class="btn btn-primary" type="submit" name="submit">Search</button></td>
			</tr>
			</table>

			</div>
			</form>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl No.</th>
                  <th>Order Number</th>
				  <th>Buyer Name</th>
				  <th>Order Date</th>
				  <th>Order Amount</th>
				  
				  <!--<th>Status</th>-->
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
              
             <?php
			 $sn=1;
			 foreach($sells_report as $allorder)
			 {?>
                <tr>
                  <td><?php echo $sn; ?></td>
                  <td><?php echo $allorder->order_number; ?></td>
				  <td><?php 
				  $buyer=$this->buyer_model->get_buyer($allorder->buyer_id);
				  if(isset($buyer)){echo ucfirst($buyer->first_name).'&nbsp;'.ucfirst($buyer->last_name);} ?></td>
				  
				  <td><?php echo $allorder->order_date; ?></td>
				 
				  <td>$<?php echo number_format($allorder->total_amount,2); ?></td>
				  
				
				  
				  			<!--<td><?php if($allorder->status=='0'){echo "Active";}else{echo "Inactive";}; ?></td>-->
				  				  
   <td>  <a href="<?php echo base_url(); ?>admin/sells_report/view/id/<?php echo $allorder->order_id;?>" title="View  Detail" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i></a>
				 
                </td>  
                </tr>
				<?php $sn++; } ?>
               
                </tbody>
               
              </table>
            </div>
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
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
  $(function() {
    $( "#datepicker" ).datepicker({   
  changeMonth: true,
  changeYear: true,
  dateFormat: 'yy-mm-dd'});
  });
  </script>
  <script>
  $(function() {
    $( "#datepicker1" ).datepicker({   
  changeMonth: true,
  changeYear: true,
  dateFormat: 'yy-mm-dd'});
  });
  </script>
</body>
</html>
