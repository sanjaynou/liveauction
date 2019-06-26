<!DOCTYPE html>
<html>
<head>
<?php //print_r($get_city); die;?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?> | Admin | Category</title>
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
        Category
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
        

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Category</h3>
			  <a href="<?php echo base_url(); ?>admin/category/add" class="btn btn-primary add-photo"  style="color:#ffffff; float:right;"><i class="fa fa-plus">&nbsp;</i>Add New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl No.</th>
                  <th>Category Name</th>
				   <th>Show on home page</th>
				  
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
              
             <?php
			 $sn=1;
			 foreach($category as $allcategory)
			 {?>
                <tr>
                  <td><?php echo $sn; ?></td>
                  <td><?php echo ucfirst($allcategory->category_name); ?></td>
				  <td><?php if($allcategory->homepage_show=='1'){echo 'Yes<br><a href="javascript:void(0);" class="btn btn-xs btn-danger removecat" id="removecat'.$allcategory->category_id.'">Remove</a>';}else{echo 'No <br><a href="javascript:void(0);" class="btn btn-xs btn-success showcat" id="showcat'.$allcategory->category_id.'">Show</a>';} ?></td>
				  
  <td><a href="<?php echo base_url("admin/category/edit/id/".$allcategory->category_id); ?>" title="Update" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a href="javascript:void(0);" onClick="deleteRecord(<?php echo $allcategory->category_id;?>)"  title="Delete " class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
                  
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
</body>
</html>
<script>
function deleteRecord(x){

if(confirm('Do you want to delete ? ')){
	  
	document.location.href="<?php echo base_url(); ?>admin/category/delete/id/"+x;
	  
	  
  }
	
}
</script>

<script>
$(document).ready(function(){
$(document).on('click','.removecat',function(){
var  res=$(this).attr('id');
var category_id=res.replace("removecat","");
$.ajax({ 
 type: "POST",
 url: '<?php echo base_url('admin/category/remove_home_page'); ?>', 
 data: {category_id:category_id}, 
  success: function (returnData) {
  //alert(returnData);
 document.location.reload();
  }
 });

});
});
</script>

<script>
$(document).ready(function(){
$(document).on('click','.showcat',function(){
var  res=$(this).attr('id');
var category_id=res.replace("showcat","");
$.ajax({ 
 type: "POST",
 url: '<?php echo base_url('admin/category/show_home_page'); ?>', 
 data: {category_id:category_id}, 
  success: function (returnData) {
  //alert(returnData);
  if(returnData=='1')
  {
 document.location.reload();
 }
 else
 {
 alert('Please remove other category to add  this on home page.');
 }
  }
 });

});
});
</script>
