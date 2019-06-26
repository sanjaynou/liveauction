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
  
  <div class="wrapper_contact wrapper_login_margin"> 
    <div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
         <div  class="contact_top">
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="1%" valign="top"><h2><img src="<?php echo base_url(); ?>public/images/location_icon.png" /></h2></td>
            <td width="7%" valign="top"><h2>Address</h2></td>
            <td width="92%" valign="top"><h3><?php echo $contactDetail->address; ?></h3></td>
            </tr>
            
             <tr>
            <td width="1%" valign="top"><h2><img src="<?php echo base_url(); ?>public/images/phone_icon.png" /></h2></td>
            <td width="7%" valign="top"><h2>Phone number</h2></td>
            <td width="92%" valign="top"><h3><?php echo $contactDetail->phone_number; ?></h3></td>
            </tr>
            
             <tr>
            <td width="1%" valign="top"><h2><img src="<?php echo base_url(); ?>public/images/message_icon.png" /></h2></td>
            <td width="7%" valign="top"><h2>Email </h2></td>
            <td width="92%" valign="top"><h3><?php echo $contactDetail->email; ?></h3></td>
            </tr>
            </table>
         </div>
        </div>
	</div>
  </div>
  </div>
  
  
  <div class="wrapper_contact_us">
    <div class="container">
     <div class="col-md-6">
      <div class="contact_col">
          <div class="pass_col" >
		  <?php if($this->session->flashdata('success')){?><div class="success" style="margin-top:15px;" ><?php echo $this->session->flashdata('success');?></div><?php } ?>
          <form  class="form-horizontal bv-form" name="" action="" method="post">
             <div class="col-md-8 col-md-offset-2">
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" id="name" name="name"  type="text" placeholder=" Name " >
				<p style="color:#ff0000; display:none;" id="name_error">Please  enter your  name.</p>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" id="email" name="email" type="text" placeholder=" Email" >
				<p style="color:#ff0000; display:none;" id="email_error">Please  enter a valid email.</p>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" type="text" id="phone" name="phone" placeholder="Phone" >
				<p style="color:#ff0000; display:none;" id="phone_error">Please  enter phone number.</p>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <textarea class="login_form" style="height:70px;" id="message" name="message" placeholder="Message"></textarea>
				<p style="color:#ff0000; display:none;" id="message_error">Please  enter message.</p>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <button class="login_btn" type="submit" name="submit" style="margin:20px 0px 30px 0px;" onclick="return validate();">Send</button>
                </div>
                </div>
             </div>
             </form>
          </div>
        </div>
      </div>
     <div class="col-md-6">
     <div class="contact_col">
      <div id="map" style="width:100%; height:375px;"></div>
      </div>
     </div>
    </div>
  </div>
 
 <div class="clearfix"  style="height:0px;"></div>
  
  <?php $this->load->view('segment/footer'); ?>
 
 
</body>
</html>

  <?php
 $address = str_replace(" ", "+", $contactDetail->address);

    $json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false");
    $json = json_decode($json);

    $lat = @$json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
    $long = @$json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
    //echo  $lat.','.$long;die;
?>     
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
var myCenter=new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $long; ?>);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("map"),mapProp);

marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>    
       
       
       
      <script>
function validate()
{

var name=$("#name").val();
if(name=='')
{
$("#name_error").show();
$("#name").focus();
return false;
}
else
{
$("#name_error").hide();
}



var email=$("#email").val();
var regexp=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email=='' || !(email.match(regexp)))
{
$("#email_error").show();
$("#email").focus();
return false;
}
else
{
$("#email_error").hide();
}


var phone=$("#phone").val();
if(phone=='')
{
$("#phone_error").show();
$("#phone").focus();
return false;
}
else
{
$("#phone_error").hide();
}




var course=$("#course").val();
if(course=='')
{
$("#course_error").show();
$("#course").focus();
return false;
}
else
{
$("#course_error").hide();
}



var message=$("#message").val();
if(message=='')
{
$("#message_error").show();
$("#message").focus();
return false;
}
else
{
$("#message_error").hide();
}


}


</script> 
       
       
       