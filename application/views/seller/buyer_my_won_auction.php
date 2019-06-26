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
           <h1>  My Won Auction </h1>
          <center><img src="<?php echo base_url();?>public/images/heading_bdr.png"/></center>
          </div>
         
       <div class="col-md-12 res_padding">  
      <div class="dash_col table-responsive" >
      <div class="table_width">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
        <td width="11%" bgcolor="#FFFFFF"  class="td_bdr "><h1>Status</h1></td>
        <td width="54%" bgcolor="#FFFFFF"  class="td_bdr "><h1>Item</h1></td>
           <td width="19%" bgcolor="#FFFFFF"  class="td_bdr "><h1>My winning bid</h1></td>
            <td width="16%" bgcolor="#FFFFFF"  class="td_bdr "><h1>Seller</h1></td>
       </tr>
        
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/won_bid_small.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/cat_img26.jpg" width="61" height="61" style="float:left;" class="dash_col_img"/> Lorem Ipsum is         simply dummy text of Lorem Ipsum is simply dummy text of the printing a industry.the printing a industry. </p></td> 
         <td width="19%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><h2>$400</h2></td>
         <td width="16%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><a href="#"><img src="<?php echo base_url();?>public/images/sel_logo.jpg" /><br />           Simply dummy</a></p></td>
        </tr>
        
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/won_bid_small.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/cat_img2.jpg" width="61" height="61" style="float:left;" class="dash_col_img" /> Lorem Ipsum is          simply dummy text of Lorem Ipsum is simply dummy text of the printing a industry.the printing a industry. </p></td> 
         <td width="19%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><h2>$800</h2></td>
         <td width="16%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><a href="#"><img src="<?php echo base_url();?>public/images/sel_logo.jpg" /><br />           Simply dummy</a></p></td>
        </tr>
         
        
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/won_bid_small.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/cat_img22.jpg" width="61" height="61" style="float:left;" class="dash_col_img" /> Lorem Ipsum is          simply dummy text of Lorem Ipsum is simply dummy text of the printing a industry.the printing a industry. </p></td> 
         <td width="19%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><h2>$1200</h2></td>
         <td width="16%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><a href="#"><img src="<?php echo base_url();?>public/images/sel_logo.jpg" /><br />           Simply dummy</a></p></td>
        </tr>
        
        
        <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/won_bid_small.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/cat_img15.jpg" width="61" height="61" style="float:left;" class="dash_col_img" /> Lorem Ipsum is         simply dummy text of Lorem Ipsum is simply dummy text of the printing a industry.the printing a industry. </p></td> 
         <td width="19%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><h2>$1100</h2></td>
         <td width="16%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><a href="#"><img src="<?php echo base_url();?>public/images/sel_logo.jpg" /><br />           Simply dummy</a></p></td>
        </tr>
        
        
         <tr>
        <td height="100" align="center" valign="middle" class="td_bdr "><img src="<?php echo base_url();?>public/images/won_bid_small.png" /></td>
        <td height="100" valign="middle"  class="td_bdr "> <p> <img src="<?php echo base_url();?>public/images/cat_img13.jpg" width="61" height="61" style="float:left;" class="dash_col_img" /> Lorem Ipsum is         simply dummy text of Lorem Ipsum is simply dummy text of the printing a industry.the printing a industry. </p></td> 
         <td width="19%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><h2>$700</h2></td>
         <td width="16%" height="100" align="center" bgcolor="#FFFFFF"  class="td_bdr "><p><a href="#"><img src="<?php echo base_url();?>public/images/sel_logo.jpg" /><br />           Simply dummy</a></p></td>
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