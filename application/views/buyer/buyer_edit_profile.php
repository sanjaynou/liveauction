<?php
@$session_data = $this->session->userdata('user_logged_in');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LIVE AUCTION</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
 <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/css/font.css" rel="stylesheet">
     <!-- ...............add................-->
    <link href="<?php echo base_url();?>public/css/new_css.css" rel="stylesheet">
     <!-- ...............add................-->
	<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/js/scrolltopcontrol.js"></script>

</head>
<body>
 <?php $this->load->view('segment/header'); ?>
     
   <div class="clearfix"></div>  
  
  
  
  
  <div class="shop_banner"> 
   <?php $this->load->view('segment/buyer_sidebar');?>
          
        <div class="col-xs-8 col-md-9 main_container">
         <div class="clearfix"></div>
          <div class="dash_heading">
           <h1> Setting </h1>
          <center><img src="<?php echo base_url();?>public/images/heading_bdr.png"/></center>
          </div>
         
       <div class="col-md-12 contant_padd">  
         <div class="edit_main">
          <div class="edit_col"> 
          <h1>Edit Your Profile<span><a href="<?php echo base_url();?>buyer/change_password">Change Password</a></span></h1>
          </div>
			<form class="form-horizontal bv-form" id="profile_update" action="<?php echo base_url();?>buyer/buyer_edit_profile_update" method="post" enctype="multipart/form-data">
			<div class="col-md-12" ><center>
			<?php if($buyer_details->profile_image==''){?>
			<img src="<?php echo base_url();?>public/images/blank_img.png"  class="edit_col_img" />
			<?php }else{?>
			<img src="<?php echo base_url();?>public/image_gallery/buyer/<?php echo $buyer_details->profile_image;?>"  class="edit_col_img" />
			<?php } ?>
			</center></div>
			<div class="col-md-12" ><center>
			<label class="myLabel">
			<input type="file" id="file" name="image" accept="image/*">
			Choose Photo
			</label>
			</center></div>
			</form>
          <form class="form-horizontal bv-form" name="buyer_edit_profile" action="<?php echo base_url();?>buyer/buyer_edit_profile" method="post" onsubmit="return validate()" enctype="multipart/form-data">
              <div class="col-md-10 col-md-offset-1">
                 <div class="form-group has-feedback">
                <div class="col-md-6">
                <input  class="login_form" id="first_name" name="first_name" type="text" value="<?php echo $buyer_details->first_name;?>" placeholder="First Name" >
				<p style="color:#ff0000; display:none;" id="first_name_error">Please  enter your  first name.</p>
                </div>
                <div class="col-md-6">
                <input  class="login_form" id="last_name" name="last_name" type="text" value="<?php echo $buyer_details->last_name;?>" placeholder="Last Name" >
				<p style="color:#ff0000; display:none;" id="last_name_error">Please  enter your  last name.</p>
                </div>
                </div>
                
                <div class="form-group has-feedback">
                <div class="col-md-6">
                <input  class="login_form" type="text" readonly="" value="<?php echo $buyer_details->email;?>" placeholder="Email" >
                </div>
                <div class="col-md-6">
                <input  class="login_form" name="contact_number" type="text" value="<?php echo $buyer_details->contact_number;?>" placeholder="Contact Number" >
				<p style="color:#ff0000; display:none;" id="contact_number_error">Please enter your contact number.</p>
                </div>
                </div>
                
                
                <div class="form-group has-feedback">
                <div class="col-md-6">
				<select class="login_form" type="text" name="country_id">
				<option>--Select Country--</option>
				<?php
				foreach($get_all_country as $all_country){?>
                <option <?php if($all_country->country_id==$buyer_details->country_id){echo 'selected';}?> value="<?php echo $all_country->country_id;?>"><?php echo $all_country->country_name;?></option>
                <?php } ?>
				</select>
				<p style="color:#ff0000; display:none;" id="country_error">Please select your country.</p>
                </div>
                <div class="col-md-6">
                <input  class="login_form" id="postal_code" name="postcode" type="text" value="<?php echo $buyer_details->postcode;?>" placeholder="Post Code" >
				<p style="color:#ff0000; display:none;" id="postal_code_error">Please enter your postal code.</p>
                </div>
				
				</div>
                <div class="form-group has-feedback">
				<div class="col-md-12">
				<textarea name="address" style="height:60px;" class="login_form" id="address"><?php echo $buyer_details->address;?></textarea>
				<p style="color:#ff0000; display:none;" id="address_error">Please enter your address.</p>
                </div>
                </div>
                
                
                
                <div class="form-group has-feedback">
                <div class="col-md-12">
                <center><button class="login_btn" type="submit" style="margin:40px 0px 30px 0px">Update</button></center>
                </div>
                </div>
             </form>
           </div>
        </div> 
        </div>   
     
      </div>   
          
  </div>
  

<div class="clearfix"  style="height:0px;"></div>
  <footer class="footer">
  
 
   <?php $this->load->view('segment/footer'); ?>
   </footer>
</body>
</html>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script> 
<script>
               <!-- ********************sign up  validation*********************************-->
   
	 function validate()

	 {


 var first_name=$("#first_name").val();

	     

			if(first_name ==""){

			$('#first_name_error').show();
		     $('#first_name').focus();
			 $("#first_name").addClass('error_bdr');

			return false;

			}

			else

			{

			$('#first_name_error').hide();
			 $("#first_name").removeClass('error_bdr');

			}
			
			var last_name=$("#last_name").val();

			if(last_name ==""){

			$('#last_name_error').show();

			$('#last_name').focus();
			$("#last_name").addClass('error_bdr');

			return false;

			}

			else

			{

			$('#last_name_error').hide();
			$("#last_name").removeClass('error_bdr');

			}

	

	      	var contact_number = $('#contact_number').val();
			
			if(contact_number ==""){

			$('#contact_number_error').show();

			$('#contact_number').focus();
			$("#contact_number").addClass('error_bdr');

			return false;

			}

			else

			{

			$('#contact_number_error').hide();
			$("#contact_number").removeClass('error_bdr');

			}
			
			var country = $('#country').val();
			if(country ==""){
			$('#country_error').show();
			$('#country').focus();
			$("#country").addClass('error_bdr');
			return false;
			}
			else
			{
			$('#country_error').hide();
			$("#country").removeClass('error_bdr');
			}
			
			
			var address = $('#address').val();
			if(address ==""){
			$('#address_error').show();
			$('#address').focus();
			$("#address").addClass('error_bdr');
			return false;
			}
			else
			{
			$('#address_error').hide();
			$("#address").removeClass('error_bdr');
			}
			
			

			var postal_code = $('#postal_code').val();
			if(postal_code ==""){
			$('#postal_code_error').show();
			$('#postal_code').focus();
			$("#postal_code").addClass('error_bdr');
			return false;
			}
			else
			{
			$('#postal_code_error').hide();
			$("#postal_code").removeClass('error_bdr');
			}

			
			

}

<!-- ********************end  of sign up  validation*********************************-->


$(document).ready(function(){

$("#first_name").keyup(function(){
var first_name=$("#first_name").val();
if(first_name !=""){
$('#first_name_error').hide();
$("#first_name").removeClass('error_bdr');
}
});


$("#last_name").keyup(function(){
var last_name=$("#last_name").val();
if(last_name !=""){
$('#last_name_error').hide();
$("#last_name").removeClass('error_bdr');
}
});


$("#contact_number").keyup(function(){
var last_name=$("#contact_number").val();
if(contact_number !=""){
$('#contact_number_error').hide();
$("#contact_number").removeClass('error_bdr');
}
});


$("#country").keyup(function(){
var country=$("#country").val();
if(country !=""){
$('#country_error').hide();
$("#country").removeClass('error_bdr');
}
});


$("#address").keyup(function(){
var address=$("#address").val();
if(address !=""){
$('#address_error').hide();
$("#address").removeClass('error_bdr');
}
});


$("#postal_code").keyup(function(){
var postal_code=$("#postal_code").val();
if(postal_code !=""){
$('#postal_code_error').hide();
$("#postal_code").removeClass('error_bdr');
}
});
});
</script>  
<script>
$(function(){
     $('#file').on('change',function(){
	   $('#profile_update').submit();
	 });
});
</script>