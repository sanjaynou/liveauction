<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?> | Admin | Shop Product</title>
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
       Shop Product
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
        

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add Shop Product </h3>
			  <a href="<?php echo base_url(); ?>admin/shopproduct"  class="btn btn-primary add-photo"  style="color:#ffffff; float:right;"><i class="fa fa-backward">&nbsp;</i>Back</a>
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
			
            <form role="form" method="post" action="<?php echo base_url(); ?>admin/shopproduct/add" enctype="multipart/form-data">
              <div class="box-body">
			 
		 
	  <div class="form-group">
                  <label for="exampleInputEmail1">Product Name </label>
    <input type="text" name="product_name" id="product_name" class="form-control txtboxToFilter" placeholder="" required  value="<?php echo $this->input->post('product_name');?>">
      </div>
	  <div class="form-group">
                  <label for="exampleInputEmail1">Select Seller </label>
    <select class="form-control" name="seller_id" required >
											<option value="">--Select --</option>
											 <?php
		
			 foreach($seller as $allseller)
			 {?>
											<option value="<?php echo $allseller->seller_id;?>"><?php echo ucfirst($allseller->first_name).'&nbsp;'.ucfirst($allseller->last_name); ?></option>
											<?php } ?>
				   </select>
      </div>
	  
	   <div class="form-group">
                  <label for="exampleInputEmail1">Select Category </label>
				  
				 <!--<select class="form-control" name="category_id">
				 <option value="">-- Select Category --</option>
				 <?php
				 foreach($category as $all_cat){?>
				 <option value="<?php echo $all_cat['category_id'];?>"><?php echo $all_cat['category_name'];?></option>
				 <?php }?>
				 </select>-->
				 
				 <a href="#" data-target="#postModal" data-toggle="modal"><input id="registerPhone" class="form-control" type="phone" placeholder="" name="" data-bv-field="" style="background: url(<?php echo base_url();?>public/img/arrow.jpg) center right no-repeat; "></a>
				
   
      </div>
	  
	   <div class="form-group">
                  <label for="exampleInputEmail1">SKU </label>
    <input type="text" name="sales_sku" id="sales_sku" class="form-control" placeholder="" required  value="<?php echo $this->input->post('sales_sku');?>">
      </div>
	  
	  
	  <div class="form-group">
                  <label for="exampleInputEmail1">Sales Price </label>
    <input type="text" name="sales_price" id="sales_price" class="form-control" placeholder="" required  value="<?php echo $this->input->post('sales_price');?>">
      </div>
	  
	   <div class="form-group">
                  <label for="exampleInputEmail1">Discount Price </label>
    <input type="text" name="discount_price" id="discount_price" class="form-control" placeholder="" required  value="<?php echo $this->input->post('discount_price');?>">
      </div>
	  
	   <div class="form-group">
                  <label for="exampleInputEmail1">Shipment Fee(International) </label>
    <input type="text" name="shipment_fee_international" id="shipment_fee_international" class="form-control" placeholder="" required  value="<?php echo $this->input->post('shipment_fee_international');?>">
      </div>
	  
	   <div class="form-group">
                  <label for="exampleInputEmail1">Shipment Fee(Domestic) </label>
    <input type="text" name="shipment_fee_domestic" id="shipment_fee_domestic" class="form-control" placeholder="" required  value="<?php echo $this->input->post('shipment_fee_domestic');?>">
      </div>
	  
	  
	 
	  <div class="form-group">
                  <label for="exampleInputEmail1">Product Quantity </label>
    <input type="text" name="prodcut_quantity" id="prodcut_quantity" class="form-control" placeholder="" required  value="<?php echo $this->input->post('prodcut_quantity');?>">
      </div>
	  
	  
 <div class="form-group">
                  <label for="exampleInputFile">Product Image</label>
                  <input type="file" id="exampleInputFile" name="image">

                  <!--<p class="help-block">Example block-level help text here.</p>-->
                </div>
	  

			

                <div class="form-group">

                  <label for="exampleInputEmail1">Product Description</label>

            

				 <textarea name="product_desc" id="product_desc" class="form-control ckeditor" ></textarea>

				</div>

             

				
			
				
				<!--<div class="form-group">

                  <label for="exampleInputEmail1">Country</label>
				  <br>
				   <input type="checkbox" name="country[]" id="all"   value="0"  >&nbsp;All
				  <br>
			<div id="countrylist">	 
  <?php
			 
			 foreach($country as $allcountry)
			 {?>
                  <input type="checkbox" name="country[]"   class="country" value="<?php echo $allcountry->country_id;?>"  >&nbsp;<?php echo ucfirst($allcountry->country_name); ?>
<?php } ?>

</div>
                </div>-->
	
	  
	  
	  
	  	  
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
  
  <div id="postModal" class="modal" aria-hidden="true" aria-labelledby="modalLabel" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content maincat" style="overflow:hidden;">
<div class="modal-header" style="border-bottom:none;">
<button class="close" aria-label="Close" data-dismiss="modal" type="button">
<i class="fa fa-times"></i>
</button>
</div>

<div class="clearfix"></div>


<div class="col-lg-12">
<h4 style="margin:-10px 0px 0px 15px; border-bottom:#ccc 1px solid; padding:0px 0px 10px 0px ">Select Category : <span style="font-size:14px;" id="select_cat"></span><span id="select_sub_cat" style="font-size:14px;"></span><span id="select_sub_cat_sub" style="font-size:14px;"></span></h4>
<div class="col-lg-4">
<div class="col-lg-12" style="padding-left:0px;">
<div class="ser_nav">
             <ul>
			 <?php
			 foreach($category as $all_cat){?>
             <li>
			 <a href="javascript:void(0);" id="<?php echo $all_cat['category_id'];?>" cus="<?php echo $all_cat['category_name'];?>" class="category"><?php echo $all_cat['category_name'];?>
			 <?php
			 $sub_cat = $this->category_model->sub_cat($all_cat['category_id']);
			 $count1 = count($sub_cat);
			 if($count1>0){
			 ?>
			 <strong style="float:right">
			 <i class="fa fa-chevron-right"></i>
			 </strong>
			 <?php } ?>
			 </a>
			 </li>
             <?php }?>
            </ul>
          </div>
</div>
</div>



<div class="col-lg-4 sub_cat_first" style=" border-left:1px #ccc solid; display:none;">
<div class="col-lg-12" style="padding-left:0px;">
<div class="ser_nav">
             <ul id="sub_cat_ajax">
             
            </ul>
          </div>
</div>
</div>

<div class="col-lg-4 cat1 sub_cat_second" style=" border-left:1px #ccc solid; display:none" >
<div class="col-lg-12" style="padding-left:0px;">
<div class="ser_nav">
             <ul id="ajax_sub_cat2">
            
            </ul>
          </div>
</div>
</div>

</div>

hgjhjh
</div>
</div>
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
<script src="<?php echo base_url(); ?>public/admin/plugins/ckeditor/ckeditor.js"></script>
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

<script>
$(document).ready(function(){
$("#all").click(function(){


            if($(this).is(":checked")){

             // $("#countrylist").hide();
			  $(".country").prop('checked', false);

            }

            else if($(this).is(":not(:checked)")){

              // $("#countrylist").show();

            }

});
});
</script>

<script>
$(document).ready(function(){
$(".country").click(function(){

 if($(this).is(":checked")){
 $("#all").prop('checked', false);
 }

});
});
</script>
  <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.2.620/styles/kendo.common-material.min.css" />
	    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/kendo.material.min.css" />
   <style>
   .ser_nav { margin: 0; padding: 0; width:100%; margin-top:6px; }
.ser_nav ul { list-style: none outside none;  padding: 0px 0  25px; margin-bottom:0px;}
.ser_nav ul li { margin: 0; padding: 0; }
.ser_nav ul li a {display: block; font-size: 14px; line-height:20px; list-style: outside none none; margin: 0; padding: 9px 0 2px 10px; text-decoration: none;}
.ser_nav ul li a:hover { text-decoration:none; display:block}

.ser_icon{font-size:24px; padding-right:10px;}



.s_col{padding:0px; height:270px; background:#FFF; overflow-x:hidden; overflow-y:scroll;}
   </style>

	

<script>
$(function(){
	$('.category').on('click',function(){	
		var cate_id = $(this).attr('id');
		if(cate_id!=''){
		$('.sub_cat_first').show();
		$('.sub_cat_second').hide();
		var select_cat = $(this).attr('cus');
		$('#select_cat').html(select_cat);
		$('#select_sub_cat').html('');
		$('#select_sub_cat_sub').html('');
			$.ajax({
			type:"POST",
			url:"<?php echo base_url();?>admin/shopproduct/ajax_sub_cat",
			data:{cate_id:cate_id}
			}).done(function(msg){
			//alert(msg); return false;
			if(msg!=''){
			$('#sub_cat_ajax').html(msg);
			
			}
			});
		}
	});
	});
</script>

<script>
$(function(){
     $(document).on('click','.sub_category',function(){
	    var cate_id = $(this).attr('id');
		if(cate_id!=''){
		$('.sub_cat_second').show();
		var select_sub_cat = $(this).attr('cus');
		$('#select_sub_cat').html(' &raquo;'+select_sub_cat);
		$('#select_sub_cat_sub').html('');
			$.ajax({
			type:"POST",
			url:"<?php echo base_url();?>admin/shopproduct/ajax_sub_cat2",
			data:{cate_id:cate_id}
			}).done(function(msg){
			//alert(msg); return false;
			if(msg!=''){
			$('#ajax_sub_cat2').html(msg);
			}
			});
		} 
	 });
});
</script>
<script>
$(function(){
     $(document).on('click','.sub_category2',function(){
	    var cate_id = $(this).attr('id');
		if(cate_id!=''){
		var select_sub_cat_sub = $(this).attr('cus');
		$('#select_sub_cat_sub').html(' &raquo;'+select_sub_cat_sub);
		} 
	 });
});
</script>


