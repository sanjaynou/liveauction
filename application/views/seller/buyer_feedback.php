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
           <h1>Feedback</h1>
          <center><img src="<?php echo base_url();?>public/images/heading_bdr.png"/></center>
          </div>
         
       <div class="col-md-12 contant_padd">  
      <div class="dash_col table-responsive">
          
          <div class="feedback_col">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="15%" valign="top"><img src="<?php echo base_url();?>public/images/feedback_img1.png"  class="feedback_avtar" /></td>
            <td width="64%" valign="top">
            <h2>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star" style="color:#999"></i>
            </h2>
            <h1>Type and scrambled it to make</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>
            </td>
            <td width="21%" valign="top"><h4>25.3.2018 05:10 PM </h4></td>
            </tr>
            </table>
          </div>
          
          <div class="feedback_col">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="15%" valign="top"><img src="<?php echo base_url();?>public/images/feedback_img2.png"  class="feedback_avtar" /></td>
            <td width="64%" valign="top">
            <h2>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star" style="color:#999"></i>
            </h2>
            <h1>Type and scrambled it to make</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>
            </td>
            <td width="21%" valign="top"><h4>25.3.2018 05:10 PM </h4></td>
            </tr>
            </table>
          </div>
          
          <div class="feedback_col">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="15%" valign="top"><img src="<?php echo base_url();?>public/images/feedback_img3.png"  class="feedback_avtar" /></td>
            <td width="64%" valign="top">
            <h2>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star" style="color:#999"></i>
            </h2>
            <h1>Type and scrambled it to make</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>
            </td>
            <td width="21%" valign="top"><h4>25.3.2018 05:10 PM </h4></td>
            </tr>
            </table>
          </div>
          
          <div class="feedback_col">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="15%" valign="top"><img src="<?php echo base_url();?>public/images/feedback_img4.png"  class="feedback_avtar" /></td>
            <td width="64%" valign="top">
            <h2>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star" style="color:#999"></i>
            </h2>
            <h1>Type and scrambled it to make</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since             the 1500s, when an unknown printer took a galley of</p>
            </td>
            <td width="21%" valign="top"><h4>25.3.2018 05:10 PM </h4></td>
            </tr>
            </table>
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

