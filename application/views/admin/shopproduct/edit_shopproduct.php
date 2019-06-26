<?php //print_r($customer); die; 
 //echo $customer['customer_id']; die; ?>
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
              <h3 class="box-title">Edit Shop Product </h3>
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
				
            <form role="form" method="post" action="<?php echo base_url();?>admin/shopproduct/edit/id/<?php echo $shopproduct->product_id;?>" enctype="multipart/form-data">
			<input type="hidden" id="category_id_hidden" class="category_id_hidden" name="category_id_hidden" value="<?php echo $shopproduct->category_id;?>">
              <div class="box-body">
			 <div class="row"> 
		 
         
       <div class="col-md-6">    
	  <div class="form-group">
                  <label for="exampleInputEmail1">Product Name </label>
    <input type="text" name="product_name" id="product_name" class="form-control" placeholder="" required  value="<?php echo $shopproduct->product_name; ?>">
      </div>
      <div class="form-group">
                  <label for="exampleInputEmail1">Select Category </label>
			
				 
				 <a href="#" data-target="#postModal" data-toggle="modal"><input id="category_data" class="form-control category_data" type="phone" placeholder="" name="category_id" data-bv-field="" style="background: url(<?php echo base_url();?>public/img/arrow.jpg) center right no-repeat; " value="<?php echo $shopproduct->category_path;?>"></a>
				
   
      </div>
      <div class="form-group">
                  <label for="exampleInputEmail1">Sales Price </label>
				  <div class="input-group">
                <span class="input-group-addon"><?php echo $country_price->price_symbol;?></span>
    <input type="text" name="sales_price" id="sales_price" class="form-control txtboxToFilter" placeholder="" required  value="<?php echo $shopproduct->sales_price; ?>">
      </div>
	  </div>
      
      <div class="form-group">
                  <label for="exampleInputEmail1">Product Quantity </label>
    <input type="text" name="prodcut_quantity" id="prodcut_quantity" class="form-control txtboxToFilter" placeholder="" required  value="<?php echo $shopproduct->prodcut_quantity; ?>">
      </div>
      <div class="form-group">
                  <label for="exampleInputFile">Product Image</label>
                  <input type="file" id="exampleInputFile" name="image[]" multiple>
				  <div class="field" align="left">
				  <?php
				  $product_image = $this->shopproduct_model->product_image($shopproduct->product_id);
				  //$image_data = explode(',',$shopproduct->product_image);
				  foreach($product_image as $image_data){?>
				<span class="pip">
				<span class="remove">
				<i class="fa fa-close pull-right"></i>
				</span>
				<img class="imageThumb" src="<?php echo base_url(); ?>public/image_gallery/shopproduct/<?php echo $image_data['product_images']; ?>" title="<?php echo $image_data['product_images']; ?>"><br>
				<input name="files_hidden[]" value="<?php echo $image_data['product_images']; ?>" type="hidden">
				<center><input type='radio' <?php if($image_data['default_images']==1){echo 'checked';}?> value="<?php if($image_data['default_images']==1){echo '1';}else{echo '0';}?>" class='default_images' id="<?php $pi = explode('.',$image_data['product_images']); echo $pi[0]; ?>"></center>
				<input type='hidden' id='san<?php $pi = explode('.',$image_data['product_images']); echo $pi[0]; ?>' value="<?php if($image_data['default_images']==1){echo '1';}else{echo '0';}?>" class='san' name='default_images[]'>
				</span>
				  <?php }?>
                 
                  </div>
                </div>
      </div>
      
      <div class="col-md-6">
	  <div class="form-group">
                  <label for="exampleInputEmail1">Select Seller </label>
    <select class="form-control" name="seller_id" required >
											<option value="">--Select --</option>
											 <?php
		
			 foreach($seller as $allseller)
			 {?>
											<option value="<?php echo $allseller->seller_id;?>" <?php if($allseller->seller_id==$shopproduct->seller_id){?>selected="selected"<?php } ?>><?php echo ucfirst($allseller->first_name).'&nbsp;'.ucfirst($allseller->last_name); ?></option>
											<?php } ?>
				   </select>
      </div>
	  
	
	   <div class="form-group">
                  <label for="exampleInputEmail1">SKU </label>
    <input type="text" name="sales_sku" id="sales_sku" class="form-control" placeholder="" required  value="<?php echo $shopproduct->sales_sku;?>">
      </div>
	  
      
       <div class="form-group">
      <label for="exampleInputEmail1">Discount Price </label>
      <div class="input-group">
                <span class="input-group-addon"><?php echo $country_price->price_symbol;?></span>
                <input type="text" name="discount_price" id="discount_price" class="form-control txtboxToFilter" placeholder="" required  value="<?php echo $shopproduct->discount_price; ?>">
              </div>
              </div>
      
	   
	  
	  
   
                
                <div class="form-group">

                  <label for="exampleInputEmail1">Product Description</label>

            

				 <textarea name="product_desc" id="product_desc" class="form-control ckeditor" ><?php echo $shopproduct->product_desc; ?></textarea>

				</div>
	  </div>

				
                

              
			
				
				
	  </div>		
	  
	  
	  	  
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
			  
               <center> <button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
				
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
<input type="hidden" id="select_cat_hidden">
<input type="hidden" id="select_sub_cat_hidden">
<input type="hidden" id="select_sub_cat_sub_hidden">

<input type="hidden" id="select_cat_hidden_id">
<input type="hidden" id="select_sub_cat_hidden_id">
<input type="hidden" id="select_sub_cat_sub_hidden_id">

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

<div class="col-md-12">
<hr>
 <button class="btn btn-success confirm" style="float:right; margin-left:15px; margin-bottom:20px;">Confirm</button>
 <button class="btn btn-danger cancel" style="float:right; margin-left:15px;  margin-bottom:20px;" data-dismiss="modal">Cancel</button>
</div>

</div>
</div>
</div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('admin/segment/footer'); ?>
<!-- ./wrapper -->
<style>
.sel{color:#f35102 !important}
</style>
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
$(document).ready(function(){
$("#all").click(function(){


            if($(this).is(":checked")){

              //$("#countrylist").hide();
			  $(".country").prop('checked', false);

            }

            else if($(this).is(":not(:checked)")){

               //$("#countrylist").show();

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
		$('.category').removeClass('sel');
		$(this).addClass('sel');
		if(cate_id!=''){
		$('.sub_cat_first').show();
		$('.sub_cat_second').hide();
		$('.category_id_hidden').val(cate_id);
		var select_cat = $(this).attr('cus');
		$('#select_cat').html(select_cat);
		var trimStr = $.trim(select_cat);
		$('#select_cat_hidden').val(trimStr);
		$('#select_cat_hidden_id').val(cate_id);
		$('#select_sub_cat').html('');
		$('#select_sub_cat_sub').html('');
		$('#category_data').val('');
		$('#select_sub_cat_hidden').val('');
		$('#select_sub_cat_sub_hidden').val('');
		$('#select_sub_cat_hidden_id').val('');
		$('#select_sub_cat_sub_hidden_id').val('');
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
		$('.sub_category').removeClass('sel');
		$(this).addClass('sel');
		if(cate_id!=''){
		$('.sub_cat_second').show();
		var select_sub_cat = $(this).attr('cus');
		$('#select_sub_cat').html(' &raquo;'+select_sub_cat);
		$('#select_sub_cat_sub').html('');
		var trimStr = $.trim(select_sub_cat);
		$('#select_sub_cat_hidden').val(' >>'+trimStr);
		$('#select_sub_cat_hidden_id').val(','+cate_id);
		$('#category_data').val('');
		$('#select_sub_cat_sub_hidden').val('');
		$('#select_sub_cat_sub_hidden_id').val('');
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
		$('.sub_category2').removeClass('sel');
		$(this).addClass('sel');
		if(cate_id!=''){
		var select_sub_cat_sub = $(this).attr('cus');
		$('#select_sub_cat_sub').html(' &raquo;'+select_sub_cat_sub);
		var trimStr = $.trim(select_sub_cat_sub);
		$('#select_sub_cat_sub_hidden').val(' >>'+trimStr);
		$('#select_sub_cat_sub_hidden_id').val(','+cate_id);
		$('#category_data').val('');
		} 
	 });
});
</script>
<script>
$(function(){
     $('.confirm').on('click',function(){
	 if(category_id_hidden==''){
	 alert('Please select category');
	 return false;
	 }else{
	 var select_cat_hidden = $('#select_cat_hidden').val();
	 var select_sub_cat_hidden = $('#select_sub_cat_hidden').val();
	 var select_sub_cat_sub_hidden = $('#select_sub_cat_sub_hidden').val();
	  var select_cat_hidden_id = $('#select_cat_hidden_id').val();
	 var select_sub_cat_hidden_id = $('#select_sub_cat_hidden_id').val();
	 var select_sub_cat_sub_hidden_id = $('#select_sub_cat_sub_hidden_id').val();
	 $('#category_data').val(select_cat_hidden+select_sub_cat_hidden+select_sub_cat_sub_hidden);
	 $('.category_id_hidden').val(select_cat_hidden_id+select_sub_cat_hidden_id+select_sub_cat_sub_hidden_id);
	 $('.cancel').trigger('click');
	 }
	 });
});
</script>

<script>
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#exampleInputFile").on("change", function(e) {
	
      var files = e.target.files,
        filesLength = files.length;
		//$(".field").html('');
      for (var i = 0; i < filesLength; i++) {
        var f = files[i];
		
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
		  var min = -100;
          var my_random_value = Math.floor(min + (500 - min) * Math.random()*1111111);
          var file = e.target;
		  var id = file.result;
		  var lastFive = id.substr(id.length - 5);
		  var myString = lastFive.replace('/','');
          $(".field").append("<span class='pip'><span class='remove'><i class='fa fa-close pull-right'></i></span><img class='imageThumb' src=" + e.target.result + " title=" + f.name + "/><br><center><input type='radio' class='default_images' id="+my_random_value+" value='1'></center><input type='hidden' name='files[]' value="+e.target.result+"><input type='hidden' id='san"+my_random_value+"' class='san' name='default_images[]'></span>");
          $(".remove").click(function(){
		  //alert(filesLength);
            $(this).parent(".pip").remove();
			//$('#exampleInputFile').val($(this).attr('title'));
          });  
        });
        fileReader.readAsDataURL(f);
		//$('.default_images').trigger('click');
		setTimeout(function() {
   // $('.default_images').get(0).checked = true;
    $(".default_images:first").prop("checked", true).trigger("click");
  }, 500);
 
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>
<script>
$(function(){
    $(document).on('click','.default_images',function(){
		//alert();
	  $('.default_images').prop('checked',false);
	  $(this).prop('checked',true);
	  var id = $(this).attr('id');
	  //alert(id);
	  $('.san').val(0);
	  $('#san'+id).val(1);
	});
	
});
</script>

<style>
input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid #CCCCCC;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #ffffff;
  color: #FF0000;
  text-align: center;
  cursor: pointer;
  font-size:20px;
}

</style>

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
