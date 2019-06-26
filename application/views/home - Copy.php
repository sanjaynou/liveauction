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
             
   <div class="wrapper_top wrapper_top_margin"> 
    <div class="container">
     <div class="row">
     <div class="col-md-3">
      <div class="category">
        <h1> <i class="fa fa-fw fa-list" style="color:#ffb300"></i> Categories</h1>
        <ul id="testDiv1">
		<?php
		$category_name = $this->home_model->all_category();
		foreach($category_name as $cat_name){
		$count_product = $this->home_model->product_count($cat_name['category_id']);
		?>
        <li><a href="javascript:void(0);" ><?php echo $cat_name['category_name'];?><span><?php echo count($count_product);?></span></a></li>
		<?php } ?>
        </ul>
        <h2><a href="#">See All Categories</a></h2>
        </div>
        
       <div class="category">
        <h1> <i class="fa fa-fw fa-list" style="color:#ffb300"></i> Top Streamer</h1>
        <ul id="testDiv2">
        <li><a href="#" >#guys</a></li>
         <li><a href="#" >#girls</a></li>
         <li><a href="#" >#sleepingsquad</a></li>
         <li><a href="#" >#singing</a></li>
         <li><a href="#" >#random</a></li>
         <li><a href="#" >#music </a></li>
         <li><a href="#" >#guys</a></li>
         <li><a href="#" >#girls</a></li>
         <li><a href="#" >#sleepingsquad</a></li>
         <li><a href="#" >#singing</a></li>
         <li><a href="#" >#random</a></li>
         <li><a href="#" >#music </a></li>
        </ul>
        </div> 
     </div>
     
     <div class="col-md-9">
      <?php
	$category_name_show = $this->home_model->all_category_show();
	foreach($category_name_show as $name_cat_show){
	?>
     <div class="category_text">
       <h1><span><?php echo $name_cat_show['category_name'];?></span></h1>
       </div>
       <div class="slider responsive">
        <div class="col-md-121">
        <?php
		$all_product = $this->home_model->all_product_cat($name_cat_show['category_id']);
		
		$num = ceil(count($all_product)/8);
		$i = 1;
		foreach($all_product as $key=>$allproduct){
		$allproduct_img = $this->home_model->auction_image($allproduct['product_id']);
		?>
		<a href="<?php echo base_url();?>live_auction?id=<?php echo $allproduct['product_id'];?>">
		<div class="col-md-3 padding_video">
		<div class="category_box <?php if($key==0){echo 'category_box_border';}?>">
		<div class="video_box_height ">
		<img src="<?php echo base_url(); ?>public/image_gallery/auctionproduct/<?php echo $allproduct_img->product_images;?>" style="height: 100%; width: 100%; object-fit:scale-down" />
		</div>
		<div style="background:#fff">
		<h4><a href="#"><i class="fa fa-fw fa-star" style="color:#ffb300"></i><?php echo substr($allproduct['product_name'],0,25);?><?php if(strlen($allproduct['product_name'])>25){echo '... ...';}?></a></h4>
		<h5>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td><img src="<?php echo base_url(); ?>public/images/video_green.png" style="margin:0px 0px 0px 0px" /></td>
		<td>Live</td>
		<td><img src="<?php echo base_url(); ?>public/images/dot_small.jpg" /></td>
		<td><span><i class="fa fa-fw fa-eye"></i> 3061</span></td>
		</tr>
		</table>
		</h5>
		</div>
		</div>
		</div>
		</a>
		<?php if(($i++ % 8)==0){?>
		 </div>
         <div class="col-md-121">
		<?php } ?>
		<?php } ?>
         </div>
		 
         </div>
         <?php } ?>
        </div>
     </div>
    </div>
  </div>
  
 <div class="clearfix"  style="height:0px;"></div>

 
 <?php $this->load->view('segment/footer'); ?>
 
</body>
</html>

<!--..............slide..............-->
<link href="<?php echo base_url(); ?>public/css/slide.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/slick.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/scripts.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.slimscroll.js"></script>
<script>
$('#testDiv1').slimscroll({
height:'270px'
});
</script>  
<script>
$('#testDiv2').slimscroll({
height:'270px'
});
</script> 