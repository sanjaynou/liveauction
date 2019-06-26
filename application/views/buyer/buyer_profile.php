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
  
  
  
  
  <div class="wrapper_top shop_banner"> 
   <?php $this->load->view('segment/buyer_sidebar');?>
          
        <div class="col-xs-8 col-md-9 main_container">
         <div class="clearfix"></div>
          <div class="dash_heading">
           <h1>My Profile</h1>
          <center><img src="<?php echo base_url();?>public/images/heading_bdr.png"/></center>
          </div>
         
       <div class="col-md-12 contant_padd">  
        <div class="dash_main_col">
          <div class="col-sm-9 main_padding"  >
        <div class="profile_left pc">
		<?php
	$buyer_details = $this->BUYER->get_buyer(@$session_data['buyer_id']);
	?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td  valign="top">
	
	<?php if($buyer_details->profile_image==''){?>
	<img src="<?php echo base_url();?>public/images/blank_img.png"  class="profile_left_img" />
	<?php }else{?>
	<img src="<?php echo base_url();?>public/image_gallery/buyer/<?php echo $buyer_details->profile_image;?>"  class="profile_left_img" height="251" width="241" />
	<?php } ?>
	</td>
    <td  valign="top">
     <h1>General Information</h1>
     <h2>
	
	<?php echo $buyer_details->first_name;?>&nbsp;<?php echo $buyer_details->last_name;?>
	 </h2>
     <h1>Contact Information</h1>
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><h2>Email:</h2> </td>
    <td><h2><?php echo $buyer_details->email;?></h2></td>
  </tr>
  <tr>
    <td><h2>Phone:</h2> </td>
    <td><h2><?php echo $buyer_details->contact_number;?></h2></td>
  </tr>
  <tr>
    <td><h2>Address:</h2> </td>
    <td><h2 style="line-height:25px;"><?php echo $buyer_details->address;?></h2></td>
  </tr>
</table>
    </td>
  </tr>
</table>
</div>

          <div class="profile_left mobile">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    
    <td  valign="top" colspan="2" align="center">
    <img src="<?php echo base_url();?>public/images/Profile_photo.png" width="200" height="200" style="margin:10px 0px" class="profile_left_img" />
     <h1>General Information</h1>
     <h2>Jhon Dee</h2>
     <h1>Contact Information</h1>
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><h2>Email:</h2> </td>
    <td><h2><?php echo $buyer_details->email;?></h2></td>
  </tr>
  <tr>
    <td><h2>Phone:</h2> </td>
    <td><h2><?php echo $buyer_details->contact_number;?></h2></td>
  </tr>
  <tr>
    <td><h2>Address:</h2> </td>
    <td><h2><?php echo $buyer_details->address;?></h2></td>
  </tr>
</table>
    </td>
  </tr>
</table>
</div>
        
       </div>
         <div class="col-sm-3" >
         <a href="<?php echo base_url();?>buyer/buyer_edit_profile"><button class="profile_btn" type="button">Edit Profile</button></a>
         </div>
        <div class="clearfix"></div>
        <div class="dash_bottom_col">
         <div class="col-md-4 padding_profile">
         <a href="#" >
       <div class="profile_box">
       
           <h3><span class="notification">10</span><br />Notification </h3>  
              </div>
              </a>
          </div>
          
          <div class="col-md-4 padding_profile">
         <a href="#" >
       <div class="profile_box">
       
           <h3><span class="notification">15</span><br />Following </h3>  
              </div>
              </a>
          </div>
          
          
          <div class="col-md-4 padding_profile">
         <a href="#" >
       <div class="profile_box">
       
           <h3><span class="notification">05</span><br />Feedback </h3>  
              </div>
              </a>
          </div>
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