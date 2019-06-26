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
     <!-- ...............add................-->
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/scrolltopcontrol.js"></script>

</head>
<body>
 
 	                                                                      
   <?php $this->load->view('segment/header'); ?>
    
 <div class="clearfix"></div>
  <div class=" widebox_gray wrapper_top_margin"> 
    <div class="container">
      <div class="col-lg-12">
         <div class="best_realstate">
           <h1><?php echo $pageDetail->page_title; ?></h1>
           <?php echo $pageDetail->page_content; ?>
         </div>
       
        </div>
     </div>
  </div>
  
  
  
  
   
 <div class="clearfix"  style="height:0px;"></div>
 
  <?php $this->load->view('segment/footer'); ?>
 
 
 
</body>
</html>



