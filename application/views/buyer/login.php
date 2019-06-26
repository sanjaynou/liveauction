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
			<div class="tabbable full-width-tabs">
            <ul class="nav nav-tabs">
                <li><a href="#tab-one" data-toggle="tab"  class="login_tab">Buyer Login</a></li>
            </ul>
            <br />
        <form  class="form-horizontal bv-form" name="" method="post" action="<?php echo base_url(); ?>buyer/login">
        <?php if(isset($error)) {?><div class="error"><button type="button" class="close">x</button><?php echo $error; ?></div><?php } ?>
		<?php if($this->session->flashdata('error_verification')) {?><div class="error"><button type="button" class="close">x</button><?php echo $this->session->flashdata('error_verification'); ?></div><?php } ?>
			  <?php if($this->session->flashdata('success_verification')) {?><div class="success"><button type="button" class="close">x</button><?php echo $this->session->flashdata('success_verification'); ?></div><?php } ?>
           <div class="col-md-12">
                <div class="form-group has-feedback">
                <div class="col-md-12">
                <input  class="login_form" type="text" name="email" id="email" placeholder="Email" >
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" type="password" name="password" id="password" placeholder="Password" >
                </div>
                </div>
                
                <div class="form-group has-feedback">
                <div class="col-md-12" >
                
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:-10px; margin-left:1px;">
                <tr>
                <td valign="top"><p><a href="#" style="text-align:right;"> Forgot password?</a>.</p></td>
                <td align="right"><p> <button class="login_btn" type="submit" name="submit">Login</button></p></td>
                </tr>
                </table>
                </div>
                </div>
               
             </div>
        
             
            </form>
        </div> 
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


