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
           <h1>  Cancel/Refund  </h1>
          <center><img src="<?php echo base_url();?>public/images/heading_bdr.png"/></center>
          </div>
         
       <div class="col-md-12 contant_padd">  
         <div class="order_col_main">
          <div class="order_col"> 
          <h1>Order ID:  80953000983830  <span><button class="profile_btn order_col_btn" type="button">View Detail</button></span></h1>
          </div>
          
          <div class="order_col_bottom ">
         <div class="col-md-2 image_center" ><img src="<?php echo base_url();?>public/images/cat_img24.jpg"  class="order_col_bottom_img" width="135" height="135" /></div>
         <div class="col-md-7" >
         <h1>Dapibus tellus eget </h1>
         <h4>Lorem Ipsum dummy text of the <br />printing</h4>
          <h5><strong>ORDER STATUS :</strong>  <span class="cancel">Cancel</span></h5><!--<button class="profile_btn order_track_btn" type="submit" > TRACK ORDER </button>-->
         </div>
         <div class="col-md-3 " ><h3 style="padding-top:20px; text-align:center">Refund Amount<br /><font>$ 2.99</font></h3></div>
         </div>
         
         <div class="bdr"></div>
         <p class="order_col_bottom_text">Cancel Time & Date:<span style="color:#000"> 17:22 Feb. 23 2018</span></p>
         
         </div>
         
         <div class="order_col_main">
          <div class="order_col"> 
          <h1>Order ID:  80953000983830  <span><button class="profile_btn order_col_btn" type="button">View Detail</button></span></h1>
          </div>
          
          <div class="order_col_bottom ">
         <div class="col-md-2 image_center" ><img src="<?php echo base_url();?>public/images/cat_img14.jpg"  class="order_col_bottom_img" width="135" height="135" /></div>
         <div class="col-md-7" >
         <h1>Dapibus tellus eget </h1>
         <h4>Lorem Ipsum dummy text of the <br />printing</h4>
          <h5><strong>ORDER STATUS :</strong>  <span class="cancel">Cancel</span></h5><!--<button class="profile_btn order_track_btn" type="submit" > TRACK           ORDER </button>-->
         </div>
         <div class="col-md-3 " ><h3 style="padding-top:20px; text-align:center">Refund Amount<br /><font>$ 2.99</font></h3></div>
         </div>
         
         <div class="bdr"></div>
         <p class="order_col_bottom_text">Cancel Time & Date:<span style="color:#000"> 17:22 Feb. 23 2018</span></p>
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

