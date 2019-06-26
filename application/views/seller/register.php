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
    <div class="col-md-6 col-md-offset-3 ">
         <center>
           <img src="<?php echo base_url();?>public/images/logo.png" class="login_tab_logo img-responsive"  />
      </center>
			 <div class="login_box">
             <h1 class="main_padding">Seller Sign up</h1>
			<!-- Nav tabs -->
			<div class="wizard">
           <ul class="nav nav-tabs" role="tablist" style="display:none">
                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" class="tab_padding" >
                           &nbsp;
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" class="tab_padding" >
                           &nbsp;
                        </a>
                    </li>
                </ul>

     <form  class="form-horizontal bv-form" name="" action="<?php echo base_url(); ?>seller/register" method="post" onsubmit="return validate()">
       <div class="tab-content">
         <div class="tab-pane active" role="tabpanel" id="step1">
          <div class="col-md-12">
            <div class="form-group has-feedback" >
                <div class="col-md-12">
                <p class="seller_text">Member Type </p>
                <div class="row">
                <div class="col-md-3">
                <div class="radio" style="margin-top:0px;">
                 <input id="radio2" name="member_type" value="personal" checked="checked" type="radio">
                <label for="radio2">
                  <span  >Personal</span>
                </label>
             </div>
               </div>
           
           <div class="col-md-6">
            <div class="radio" style="margin-top:0px;">
            <input id="radio" name="member_type" value="company" type="radio">
            <label for="radio">
            <span  >Company / Organization </span>
            </label>
             </div>
               </div>
                </div>
                </div>
                </div>
                
                 <div class="form-group has-feedback" >
                <div class="col-md-6">
                <p class="seller_text">First Name</p>
                <input  class="login_form" type="text" id="first_name" name="first_name" placeholder="First Name" >
				<p style="color:#ff0000; display:none;" id="first_name_error">Please  enter your  first name.</p>
                </div>
				 <div class="col-md-6">
                <p class="seller_text">Last Name</p>
                <input  class="login_form" type="text" id="last_name" name="last_name" placeholder="Last Name" >
				<p style="color:#ff0000; display:none;" id="last_name_error">Please  enter your  last name.</p>
                </div>
                </div>
				
                <p class="seller_text"><span>( Please type your real full name on NRIC or business name as it shown in the license )</span></p>
                 <div class="form-group has-feedback" >
                <div class="col-md-12">
                <p>Seller Name  </p>
                <input  class="login_form" id="seller_name" name="seller_name"  type="text" placeholder="Seller Name  " >
				<p style="color:#ff0000; display:none;" id="seller_name_error">Please  enter your  seller name.</p>
                <p class="seller_text"><span >(Seller name will be displayed at the shop information section of Item page.)</span></p>
                </div>
                </div> 
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <p class="seller_text">Email ID</p>
                <input  class="login_form" type="text" id="email" name="email" placeholder="Email ID" >
				<p style="color:#ff0000; display:none;" id="email_error">Please enter your email.</p>
				<p style="color:#ff0000; display:none;" id="email_valid_error">Please  enter a valid email.</p>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <p class="seller_text">Password</p>
                <input  class="login_form" type="password" id="password" name="password" placeholder="Password" >
				<p style="color:#ff0000; display:none;" id="password_error">Please  enter password.</p>
                </div>
                </div>
                
                
                <div class="form-group has-feedback" >
                <div class="col-md-8">
                <p class="seller_text">Contact information  </p>
                <input  class="login_form" type="text" id="contact_number" name="contact_number" placeholder="Contact Number" >
				<p style="color:#ff0000; display:none;" id="contact_number_error">Please enter your contact number.</p>
                <p class="seller_text"><span>(Email, Contact Number(with OTP verification)</span></p>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <button class="seller_reg_btn" type="button">Get Confirm Code</button>&nbsp;&nbsp; OR &nbsp;&nbsp;<button class="seller_reg_btn" type="button">Request ARS Confirmation</button>
                </div>
                </div>
                
                
                <div class="form-group has-feedback" >
                <div class="col-md-5">
                <input class="login_form" type="text" placeholder="OTP" >
                </div>
                
                <div class="col-md-4">
                <button class="seller_reg_btn" type="button">Confirm</button>
                </div>
                </div>
				<div class="form-group has-feedback" >
                <div class="col-md-12">
                <h2>Register as Buyer? <a href="<?php echo base_url();?>buyer/register" style="color:#f35102; padding:0px 10px 0px 15px;">Click here</a></h2>
                </div>
                </div>
             </div>
             <div class="clearfix"></div>
             <hr />
                        <ul class="list-inline pull-right">
                            <li><button class="seller_reg_btn next-step" type="button" >Next</button></li>
                        </ul>
                    </div>
                    
                    
                    
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="col-md-12">
            
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <p class="seller_text">Country</p>
                <select class="login_form" id="country" name="country_id">
                <option value="">--Select Country--</option>
				<?php
				foreach($get_all_country as $all_country){?>
                <option value="<?php echo $all_country->country_id;?>"><?php echo $all_country->country_name;?></option>
                <?php } ?>
                </select>
				<p style="color:#ff0000; display:none;" id="country_error">Please select your country.</p>
                <p class="seller_text"><span>* A Country of the Address must be same with a country of the mobile phone number.</span></p>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <p>Shop Address</p>
                <textarea class="login_form" id="address" name="address" style="height:60px;" ></textarea>
				<p style="color:#ff0000; display:none;" id="address_error">Please enter your shop address.</p>
                <p class="seller_text"><span style="line-height:15px; color:#f35102"></span></p>
                </div>
                </div> 
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <p>Postal code</p>
                <input  class="login_form" id="postal_code" name="postcode" type="text" placeholder="Postal code" >
				<p style="color:#ff0000; display:none;" id="postal_code_error">Please enter your postal code.</p>
                </div>
                </div>
                
                         
                
                <div class="form-group has-feedback">
                <div class="col-md-12" >
                <div class="checkbox2 checkbox-primary" style="margin-top:0px;" >
                <table width="95%" border="0" cellspacing="0" cellpadding="0" >
                <tr>
                <td valign="top"><input id="1" class="styled" type="checkbox"  >
                <label for="1">
                </label></td>
                <td valign="top"><p>I accept the <a href="#" style="color:#f35102">Terms & Conditions</a></p></td>
                <td align="right">&nbsp;</td>
                </tr>
                </table>
                </div>
                </div>
                </div>
                
                
             </div>
              <div class="clearfix"></div>
             <hr />
                        <ul class="list-inline pull-right">
                            <li><button class="seller_reg_btn prev-step" type="button" >Previous</button></li>
                            <li><button class="seller_reg_btn" type="submit" >Submit</button></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div> 
            </div>
			
            <div>
            <a href="javascript:void(0);"><img src="<?php echo base_url();?>public/images/facebook_login.png"  width="100%" /></a></div>
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
function FirstStepValidation()
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


var seller_name=$("#seller_name").val();
if(seller_name ==""){
$('#seller_name_error').show();
$('#seller_name').focus();
$("#seller_name").addClass('error_bdr');
return false;
}
else
{
$('#seller_name_error').hide();
$("#seller_name").removeClass('error_bdr');
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
return true;
}			

}
</script>

<script>
               <!-- ********************sign up  validation*********************************-->
   
	 function validate()

	 {
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


<script>
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {
	
        var check = FirstStepValidation();
		if(check==true){
        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);
       }
    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>


<link href="<?php echo base_url();?>public/css/mobile_flag.css" rel="stylesheet">
<script src="<?php echo base_url();?>public/js/intlTelInput.min.js"></script>
<script>
var telInput = $("#phone"),
  errorMsg = $("#error-msg"),
  validMsg = $("#valid-msg");
// initialise plugin
telInput.intlTelInput({
  allowExtensions: true,
  formatOnDisplay: true,
  autoFormat: true,
  autoHideDialCode: true,
  autoPlaceholder: true,
  defaultCountry: "auto",
  ipinfoToken: "yolo",
  nationalMode: false,
  numberType: "MOBILE",
  //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
  preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],
  preventInvalidNumbers: true,
  separateDialCode: true,
  initialCountry: "auto",
  geoIpLookup: function(callback) {
  $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    var countryCode = (resp && resp.country) ? resp.country : "";
    callback(countryCode);
  });
},
   utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
});

var reset = function() {
  telInput.removeClass("error");
  errorMsg.addClass("hide");
  validMsg.addClass("hide");
};

// on blur: validate
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      validMsg.removeClass("hide");
    } else {
      telInput.addClass("error");
      errorMsg.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
telInput.on("keyup change", reset);
</script>
