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
          
        <div class="col-xs-8 col-md-9 main_container ">
         <div class="clearfix"></div>
          <div class="dash_heading">
           <h1>Auction History </h1>
          <center><img src="<?php echo base_url();?>public/images/heading_bdr.png"/></center>
          </div>
         
         
       <div class="col-md-12 contant_padd">  
      <div class="dash_col table-responsive">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
        <td width="8%" bgcolor="#FFFFFF"  class="td_bdr "><h1>Status</h1></td>
        <td width="31%" bgcolor="#FFFFFF"  class="td_bdr "><h1>Item</h1></td>
          <td width="10%" bgcolor="#FFFFFF"  class="td_bdr "><h1>Time</h1></td>
          <td width="10%" bgcolor="#FFFFFF"  class="td_bdr "><h1>My bid</h1></td>
        <td width="12%" bgcolor="#FFFFFF"  class="td_bdr "><h1>Highest bid</h1></td>
          <td width="15%" bgcolor="#FFFFFF"  class="td_bdr "><h1>Shipping Fee</h1></td>
          <td width="14%" bgcolor="#FFFFFF"  class="td_bdr "><h1>Seller</h1></td>
       </tr>
        
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/win_bid.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/shop_img5.png" width="61" height="61" style="float:left;" class="dash_col_img" /> Lorem Ipsum is simply dummy text of Lorem Ipsum is simply . </p></td> 
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>01:10:05</p></td>
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$700</strong></p></td>
         <td width="12%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>$700</p></td>
         <td width="15%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$25</strong></p></td>
         <td width="14%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><a href="#"><img src="<?php echo base_url();?>public/images/sel_logo.jpg" /><br />           Simply dummy</a></p></td>
        </tr>
        
        
         
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/loss_bid.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/cat_img12.jpg" width="61" height="61" style="float:left;" class="dash_col_img"  /> Lorem Ipsum is simply dummy text of Lorem Ipsum is simply . </p></td> 
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>01:10:05</p></td>
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$700</strong></p></td>
         <td width="12%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>$700</p></td>
         <td width="15%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$31</strong></p></td>
         <td width="14%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><a href="#"><img src="<?php echo base_url();?>public/images/sel_logo.jpg" /><br />           Simply dummy</a></p></td>
        </tr>
        
        
        
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/win_bid.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/cat_img32.jpg" width="61" height="61" style="float:left;"  class="dash_col_img" /> Lorem Ipsum is simply dummy text of Lorem Ipsum is simply . </p></td> 
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>01:10:05</p></td>
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$700</strong></p></td>
         <td width="12%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>$700</p></td>
         <td width="15%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$35</strong></p></td>
         <td width="14%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><a href="#"><img src="<?php echo base_url();?>public/images/sel_logo.jpg" /><br />           Simply dummy</a></p></td>
        </tr>
        
        
         
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/loss_bid.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/auction_img.png" width="61" height="61" style="float:left;" class="dash_col_img"  /> Lorem Ipsum is simply dummy text of Lorem Ipsum is simply . </p></td> 
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>01:10:05</p></td>
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$700</strong></p></td>
         <td width="12%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>$700</p></td>
         <td width="15%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$15</strong></p></td>
         <td width="14%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><a href="#"><img src="<?php echo base_url();?>public/images/sel_logo.jpg" /><br />           Simply dummy</a></p></td>
        </tr>
        
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/win_bid.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/cat_img16.jpg" width="61" height="61" style="float:left;" class="dash_col_img"  /> Lorem Ipsum is simply dummy text of Lorem Ipsum is simply . </p></td> 
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>01:10:05</p></td>
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$700</strong></p></td>
         <td width="12%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>$700</p></td>
         <td width="15%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$26</strong></p></td>
         <td width="14%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><a href="#"><img src="<?php echo base_url();?>public/images/sel_logo.jpg" /><br />           Simply dummy</a></p></td>
        </tr>
        
        
         <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/win_bid.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/cat_img32.jpg" width="61" height="61" style="float:left;" class="dash_col_img"  /> Lorem Ipsum is        simply dummy text of Lorem Ipsum is simply . </p></td> 
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>01:10:05</p></td>
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$700</strong></p></td>
         <td width="12%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>$700</p></td>
         <td width="15%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$42</strong></p></td>
         <td width="14%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><a href="#"><img src="<?php echo base_url();?>public/images/sel_logo.jpg"  /><br />           Simply dummy</a></p></td>
        </tr>
        
        
         <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/win_bid.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/cat_img22.jpg" width="61" height="61" style="float:left;" class="dash_col_img"  /> Lorem Ipsum is          simply dummy text of Lorem Ipsum is simply . </p></td> 
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>01:10:05</p></td>
         <td width="10%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$700</strong></p></td>
         <td width="12%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p>$700</p></td>
         <td width="15%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><strong>$55</strong></p></td>
         <td width="14%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><a href="#"><img src="<?php echo base_url();?>public/images/sel_logo.jpg" /><br />           Simply dummy</a></p></td>
        </tr>
        </table>
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

