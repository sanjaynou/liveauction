<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LIVE AUCTION</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
 <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/font.css" rel="stylesheet">
     <!-- ...............add................-->
    <link href="<?php echo base_url(); ?>public/css/new_css.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/css/extra.css" rel="stylesheet">
     <!-- ...............add................-->
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/scrolltopcontrol.js"></script>

</head>
<body>
 
       
 	                                                                      
  <?php $this->load->view('segment/header'); ?>
   
   <div class="clearfix"></div>
   <div class="wrapper_login wrapper_login_margin"> 
    <div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 login_padding">
         <center>
           <img src="<?php echo base_url(); ?>public/images/logo.png" class="login_tab_logo img-responsive"  />
      </center>
			 <div class="login_box">
			<!-- Nav tabs -->
			<form  class="form-horizontal bv-form" name="" action="<?php echo base_url(); ?>buyer/register" method="post" onsubmit="return validate()">
             <h1>Sign up</h1>
            <div class="col-md-12">
             <?php if(isset($exist_error)) {?><div class="error"><button type="button" class="close">x</button><?php echo $exist_error; ?></div><?php } ?>
			  <?php if($this->session->flashdata('success_registration')) {?><div class="success"><button type="button" class="close">x</button><?php echo $this->session->flashdata('success_registration'); ?></div><?php } ?>
                <div class="form-group has-feedback">
                <div class="col-md-6">
                <input  class="login_form" type="text" id="first_name" name="first_name" placeholder="First Name" >
				<p style="color:#ff0000; display:none;" id="first_name_error">Please  enter your  first name.</p>
                </div>
                <div class="col-md-6">
                <input  class="login_form" type="text" id="last_name" name="last_name" placeholder="Last Name" >
				<p style="color:#ff0000; display:none;" id="last_name_error">Please  enter your  last name.</p>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-6">
                <input  class="login_form" type="text" id="email" name="email" placeholder="Email" >
				<p style="color:#ff0000; display:none;" id="email_error">Please enter your email.</p>
				<p style="color:#ff0000; display:none;" id="email_valid_error">Please  enter a valid email.</p>
                </div>
				<div class="col-md-6">
                <input  class="login_form" type="text" id="contact_number" name="contact_number" placeholder="Contact Number" >
				<p style="color:#ff0000; display:none;" id="contact_number_error">Please enter your contact number.</p>
                </div>
                </div>
				
				<div class="form-group has-feedback" >
                <div class="col-md-12">
                <select class="login_form" id="country" name="country_id">
                <option value="">--Select Country--</option>
				<?php
				foreach($get_all_country as $all_country){?>
                <option value="<?php echo $all_country->country_id;?>"><?php echo $all_country->country_name;?></option>
                <?php } ?>
                </select>
				<p style="color:#ff0000; display:none;" id="country_error">Please select your country.</p>
                </div>
                </div>
				
				<div class="form-group has-feedback" >
                <div class="col-md-12">
                <textarea class="login_form" name="address" id="address" placeholder="Address" style="height:60px;"></textarea>
				<p style="color:#ff0000; display:none;" id="address_error">Please enter your address.</p>
                </div>
                </div>
				
				<div class="form-group has-feedback" >
                <div class="col-md-12">
                <textarea class="login_form" id="shipping_address" name="shipping_address" placeholder="Shipping Address" style="height:60px;"></textarea>
				<p style="color:#ff0000; display:none;" id="shipping_address_error">Please enter your shipping address.</p>
                </div>
                </div>
				
				<div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" name="postcode" id="postal_code" type="text" placeholder="Postal Code" >
				<p style="color:#ff0000; display:none;" id="postal_code_error">Please enter your postal code.</p>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" type="password" id="password" name="password" placeholder="Password" >
				<p style="color:#ff0000; display:none;" id="password_error">Please  enter password.</p>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" type="password" name="confirm_password" id="confirm_password"  placeholder="Confirm Password" >
				<p style="color:#ff0000; display:none;" id="password_confirm_error">Please enter confirm password.</p>
				<p style="color:#ff0000; display:none;" id="password_match_error">Your password and confirm password do not match.</p>
                </div>
                </div>
                
                
                <div class="form-group has-feedback">
                <div class="col-md-12" >
                <div class="checkbox2 checkbox-primary" style="margin-top:0px;" >
                <table width="95%" border="0" cellspacing="0" cellpadding="0" >
                <tr>
                <td valign="top"><input id="term_check" class="styled" type="checkbox"  >
                <label for="term_check">
                </label></td>
                <td valign="top"><p>I accept the <a href="<?php echo base_url(); ?>page/termcondition" style="color:#f35102">Terms & Conditions</a></p></td>
                <td align="right"><p> <button class="login_btn" type="submit" name="submit">Sign&nbsp;up</button></p></td>
                </tr>
				<tr>
                <td valign="top" colspan="3"><span id="trem_error" style="color:#FF0000; display:none;font-style:normal">*Please agree to the terms and conditions.</span></td>
              
                </tr>
                </table>
                </div>
                </div>
                </div>
                
                
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <h2>Register as Seller? <a href="<?php echo base_url();?>seller/register" style="color:#f35102; padding:0px 10px 0px 15px;">Click here</a></h2>
                </div>
                </div>
               
             </div> 
            </form> 
            </div>
			
            <div>
            <a href="#"><img src="<?php echo base_url(); ?>public/images/facebook_login.png"  width="100%" /></a></div>
		  <!-- Nav tabs -->
		</div>
	  </div>
   </div>
  </div>
  

  
  
  <div class="clearfix"  style="height:0px;"></div>
 
  
 <?php $this->load->view('segment/footer'); ?>
 
 
</body>
</html>

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


			var email=$("#email").val();

			var regexp=/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

			if(email ==""){

			$('#email_error').show();

			$('#email').focus();
			$("#email").addClass('error_bdr');

			return false;

			}

			else

			{

			$('#email_error').hide();
			$("#email").removeClass('error_bdr');

			}

	

			if(!(email.match(regexp))){

			$('#email_valid_error').show();
            $('#email').focus();
			$("#email").addClass('error_bdr');

			return false;
             }
           else
            {

			$('#email_valid_error').hide();
			$("#email").removeClass('error_bdr');

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
			
			
			var shipping_address = $('#shipping_address').val();
			if(shipping_address ==""){
			$('#shipping_address_error').show();
			$('#shipping_address').focus();
			$("#shipping_address").addClass('error_bdr');
			return false;
			}
			else
			{
			$('#shipping_address_error').hide();
			$("#shipping_address").removeClass('error_bdr');
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

			
			var password=$("#password").val();

			if((password =="") || (password.length<6)){

			$('#password_error').show();

			$('#password').focus();
			$("#password").addClass('error_bdr');

			return false;

			}

			else

			{

			$('#password_error').hide();
			$("#password").removeClass('error_bdr');

			}

			

			var confirm_password=$("#confirm_password").val();

if(confirm_password=='')

{

$("#password_confirm_error").show();

$("#confirm_password").focus();
$("#confirm_password").addClass('error_bdr');

return false;

}

else

{

$("#password_confirm_error").hide();
$("#confirm_password").removeClass('error_bdr');

}





if(password!=confirm_password)

{

$("#password_match_error").show();

$("#confirm_password").focus();
$("#confirm_password").addClass('error_bdr');

return false;

}

else

{

$("#password_match_error").hide();
$("#confirm_password").removeClass('error_bdr');

}


if($("#term_check").is(':checked'))
{
$("#trem_error").hide();  // checked
}
else{
$("#trem_error").show();
return false;
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

$("#email").keyup(function(){
var email=$("#email").val();
var regexp=/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
if((email.match(regexp))){
$('#email_error').hide();
$('#email_valid_error').hide();
$("#email").removeClass('error_bdr');
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


$("#shipping_address").keyup(function(){
var shipping_address=$("#shipping_address").val();
if(shipping_address !=""){
$('#shipping_address_error').hide();
$("#shipping_address").removeClass('error_bdr');
}
});

$("#postal_code").keyup(function(){
var postal_code=$("#postal_code").val();
if(postal_code !=""){
$('#postal_code_error').hide();
$("#postal_code").removeClass('error_bdr');
}
});

$("#password").keyup(function(){
var password=$("#password").val();
if(password.length>=6){
$('#password_error').hide();
$("#password").removeClass('error_bdr');

			}
});


$("#confirm_password").keyup(function(){
var password=$("#password").val();
var confirm_password=$("#confirm_password").val();
$('#password_confirm_error').hide();
if(password==confirm_password){
$("#password_match_error").hide();
$('#password_error').hide();
$("#confirm_password").removeClass('error_bdr');

			}
			else
			{
			$("#password_match_error").show();

$("#confirm_password").addClass('error_bdr');
			}
});

$("#term_check").click(function(){

if($("#term_check").is(':checked'))
{
$("#trem_error").hide();  // checked
}
});



});



	 </script>



