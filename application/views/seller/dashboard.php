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
         <div class="dash_top_col">
           <div class="col-lg-4 col-md-6">
            <div class="dash_box dash_box_red">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="15%" align="center"><img src="<?php echo base_url();?>public/images/won_bid.png" /></td>
            <td width="85%" align="center"><h1>Won Bid<br /><span>$1200</span></h1></td>
            </tr>
            </table>

            </div>
           </div>
           <div class="col-lg-4 col-md-6">
            <div class="dash_box dash_box_green">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="15%" align="center"><img src="<?php echo base_url();?>public/images/active_bid.png" /></td>
            <td width="85%" align="center"><h1>Active Bid<br /><span>$600</span></h1></td>
            </tr>
            </table>

            </div>
           </div>
           <div class="col-lg-4 col-md-6">
            <div class="dash_box dash_box_orange">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="15%" align="center"><img src="<?php echo base_url();?>public/images/lost_bid.png" /></td>
            <td width="85%" align="center"><h1>Lost Bid<br /><span>$400</span></h1></td>
            </tr>
            </table>

            </div>
           </div>
         </div>
         
         <div class="clearfix"></div>
          <div class="dash_heading">
           <h1>My Auction</h1>
          <center><img src="<?php echo base_url();?>public/images/heading_bdr.png"/></center>
          </div>
         
         
       <div class="col-md-12 contant_padd">  
      <div class="dash_col table-responsive">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
        <td width="13%" bgcolor="#FFFFFF"  class="td_bdr "><h1>Status</h1></td>
        <td width="65%" bgcolor="#FFFFFF"  class="td_bdr "><h1>Item</h1></td>
           <td width="22%" bgcolor="#FFFFFF"  class="td_bdr "><h1>My winning bid</h1></td>
       </tr>
        
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/won_bid_small.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/auction_img.png" width="61" height="61" style="float:left;" /> Lorem Ipsum is simply dummy text of Lorem Ipsum is simply dummy text of the printing a industry.the printing a industry. </p></td> 
         <td width="22%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><h2>$400</h2></td>
        </tr>
        
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/won_bid_small.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/auction_img.png" width="61" height="61" style="float:left;" /> Lorem Ipsum is simply dummy text of Lorem Ipsum is simply dummy text of the printing a industry.the printing a industry. </p></td> 
         <td width="22%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><h2>$800</h2></td>
        </tr>
         
        
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/won_bid_small.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/auction_img.png" width="61" height="61" style="float:left;" /> Lorem Ipsum is simply dummy text of Lorem Ipsum is simply dummy text of the printing a industry.the printing a industry. </p></td> 
         <td width="22%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><h2>$1200</h2></td>
        </tr>
        
        
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/won_bid_small.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/auction_img.png" width="61" height="61" style="float:left;" /> Lorem Ipsum is simply dummy text of Lorem Ipsum is simply dummy text of the printing a industry.the printing a industry. </p></td> 
         <td width="22%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><h2>$1100</h2></td>
        </tr>
        
        
         <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/won_bid_small.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/auction_img.png" width="61" height="61" style="float:left;" /> Lorem Ipsum is simply dummy text of Lorem Ipsum is simply dummy text of the printing a industry.the printing a industry. </p></td> 
         <td width="22%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><h2>$700</h2></td>
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