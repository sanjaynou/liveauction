<!DOCTYPE html>
<html>
<head>
<?php //print_r($get_city); die;?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?> | Admin | Auction Category</title>
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
  <link href="<?php echo base_url(); ?>public/admin/assets/css/editor.css" type="text/css" rel="stylesheet"/>
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
        Auction Category
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Auction Category</h3>
			 <a href="javascript:void(0);" class="btn btn-success add-photo"  style="color:#ffffff; float:right;"><i class="fa fa-plus">&nbsp;</i>Add New</a>
			 <a href="javascript:void(0);" class="btn btn-primary edit-cat"  style="color:#ffffff; float:right; margin-right:10px; display:none;"><i class="fa fa-edit">&nbsp;</i>Edit</a>
			 <a href="javascript:void(0);" class="btn btn-danger del-cat"  style="color:#ffffff; float:right; margin-right:10px; display:none;"><i class="fa fa-trash">&nbsp;</i>Delete</a>
			 
            </div>
            <!-- /.box-header -->
			<div class="box-body table-responsive">
			<div class="col-md-4">
			<div class="easy-tree">
			<ul>
			<li>Default Category</li>
			<ul>
			<?php
			foreach($category as $all_cat){?>
            <li id="<?php echo $all_cat['category_id'];?>"><?php echo $all_cat['category_name'];?>
			<ul>
			<?php
			$sub = $this->category_model->sub_cat($all_cat['category_id']);
			foreach($sub as $sub_all){?>
			
			<li id="<?php echo $sub_all['category_id'];?>"><?php echo $sub_all['category_name'];?>
			<ul>
            <?php
			$sub1 = $this->category_model->sub_cat($sub_all['category_id']);
			foreach($sub1 as $sub_all1){?>
			
			<li id="<?php echo $sub_all1['category_id'];?>"><?php echo $sub_all1['category_name'];?>
            </li>
            <?php } ?>
            </ul>
			<?php } ?>
			</ul>
			</li>
           <?php } ?>
            </ul>
		    </ul>
			</div>
			</div>
			
			<div class="col-md-8">
			<div style=" border:#d8d8d8 1px solid; height:auto;" id="add">
			 <form role="form" method="post" id="form1" action="" enctype="multipart/form-data">
			 <input type="hidden" name="parent_id" class="parent_id">
              <div class="box-body">
			 
			  
			  <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
       <input type="text" name="category_name" id="category_name" class="form-control " placeholder="" required>
                </div>
                
 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
			  
                <button type="button" class="btn btn-primary add_cat" name="submit">Submit</button>
              </div>
            </form>
			</div>
			<div id="edit" style=" border:#d8d8d8 1px solid; height:auto; display:none;">
			 <form role="form" method="post" id="form2" action="" enctype="multipart/form-data">
			 <input type="hidden" name="edit_cat_hidden" class="edit_cat_hidden">
              <div class="box-body">
			 
			  
			  <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
       <input type="text" name="category_name_edit" id="category_name_edit" class="form-control " placeholder="" required>
                </div>
                
				
			
			
              
			
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
			  
                <button type="button" class="btn btn-primary edit_cat_update" name="submit">Update</button>
              </div>
            </form>
			</div>
            
            
			</div>

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
  
  <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
  
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
<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/easyTree.css">
<script src="<?php echo base_url(); ?>public/admin/dist/js/easyTree.js"></script>
<script src="<?php echo base_url(); ?>public/admin/dist/js/editor.js"></script>
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
	  
	document.location.href="<?php echo base_url(); ?>admin/category/delete_shopcategory/id/"+x;
	  
	  
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
<script>
    (function ($) {
        function init() {
            $('.easy-tree').EasyTree({
                addable: true,
                editable: true,
                deletable: true
            });
        }

        window.onload = init();
    })(jQuery)
</script>
<script>
$(function(){
$('.add_cat').on('click',function(){
var form_control = $('#form1');
var form = new FormData($('#form1')[0]);
  $.ajax({
  type: "POST",
  url:  "<?php echo base_url(); ?>admin/category/add_auctioncategory",
  data: form,
  cache: false,
  contentType: false,
  processData: false,
  success: function(msg){ 
	//alert(msg);return false;
	if(msg==1){
	window.location.reload(true);
	}
    }
    });
  });
});
</script>

<script>
$(function(){
$('.edit_cat_update').on('click',function(){
var form_control = $('#form2');
var form = new FormData($('#form2')[0]);
  $.ajax({
  type: "POST",
  url:  "<?php echo base_url(); ?>admin/category/edit_shopcategory",
  data: form,
  cache: false,
  contentType: false,
  processData: false,
  success: function(msg){ 
	//alert(msg);return false;
	if(msg==1){
	window.location.reload(true);
	}
    }
    });
  });
});
</script>

<script>
$(function(){
    $(document).on('click','.del-cat',function(){
	var id = $(this).attr('id');
	if(id!='')
	{
	var verify = confirm('Are you sure to delete this category!');
	if(verify)
	{
	$.ajax({
	type:"POST",
	url:"<?php echo base_url(); ?>admin/category/delete_shopcategory",
	data:{id:id}
	}).done(function(msg){
	if(msg==1){
	window.location.reload(true);
	}
	});
	}
	}
	});
});
</script>
<script>
$(function(){
   $(document).on('click','.add-photo',function(){
        $('#add').show();
		$('#edit').hide();
   });
});
</script>
<script>
$(function(){
   $(document).on('click','.edit-cat',function(){
        $('#add').hide();
		$('#edit').show();
   });
});
</script>
	<script>
	$(document).ready(function() {
	$("#txtEditor").Editor();
	});
	</script>
	<script>
	$(document).ready(function() {
	$("#txtEditor1").Editor();
	});
	</script>