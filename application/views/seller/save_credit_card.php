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
           <h1> Save Credit Card </h1>
          <center><img src="<?php echo base_url();?>public/images/heading_bdr.png"/></center>
          </div>
         
       <div class="col-md-12 contant_padd">  
         <div class="edit_main" style="padding-top:40px;">
          
			
          <form class="form-horizontal bv-form" name="buyer_edit_profile" action="<?php echo base_url();?>buyer/save_credit_card" method="post" onsubmit="return validate()" enctype="multipart/form-data">
              <div class="col-md-6 col-md-offset-3">
                 
                
                <div class="form-group has-feedback">
                <div class="col-md-12">
                <input  class="login_form" type="text" name="name_on_card" value="<?php echo $credit_card_details->name_on_card;?>" placeholder="Name on Card" required >
                </div>
               
                </div>
				
				<div class="form-group has-feedback">
                <div class="col-md-12">
                <input  class="login_form" type="text" name="credit_card_number" value="<?php echo $credit_card_details->credit_card_number;?>" required placeholder="Credit Card Number" >
                </div>
               
                </div>
                
                
                <div class="form-group has-feedback">
                <div class="col-md-5">
				<select class="login_form" type="text" name="month" required>
				<option value="">--Select Month--</option>
				<?php
				for($i=1;$i<=12;$i++){?>
                <option <?php if($credit_card_details->month==$i){echo 'selected';}?> value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php } ?>
				</select>
                </div>
                <div class="col-md-4">
               <select class="login_form" type="text" name="year" required>
				<option value="">--Select Year--</option>
				<?php
				$firstYear = (int)date('Y');
				$lastYear = $firstYear + 20;
				for($j=$firstYear;$j<=$lastYear;$j++){?>
                <option <?php if($credit_card_details->year==$j){echo 'selected';}?> value="<?php echo $j;?>"><?php echo $j;?></option>
                <?php } ?>
				</select>
                </div>
				
				<div class="col-md-3">
               <input  class="login_form" type="text" name="cvv" value="<?php echo $credit_card_details->cvv;?>" placeholder="CVV" required>
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