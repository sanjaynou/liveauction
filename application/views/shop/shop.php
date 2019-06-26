<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title;?></title>
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

<div class="leftadd"><a href="#"><img src="<?php echo base_url();?>public/images/160x6002.png" border="0" /></a></div>
<div class="rightadd"><a href="#"><img src="<?php echo base_url();?>public/images/160x600.png" border="0" /></a></div>

 <?php $this->load->view('segment/header'); ?>
       
  
     
   <div class="clearfix"></div>  
     <div class="input_box banner_container">
        <div class=" col-sm-12 padding_main">
            <div class=" col-sm-6 col-sm-offset-2 ">
            <input type="text" class="banner_input" placeholder="Search..." />
            </div>
            
             
            <div class=" col-sm-2">
            <button class="find_btn btn_margin" >Search</button>
            </div>
            </div>
        </div>
   
  
      <div class="shop_main container banner_container">
        <div data-ride="carousel" class="carousel slide carousel-left " id="carousel-example-generic" >
	      <div role="listbox" class="carousel-inner" >
			<div class="item active">
				<img src="<?php echo base_url();?>public/images/shop_banner.png" style="height:450px !important; width:100%">
				<div class="carousel-caption">
				<div class="row1">
					<div class="col-md-6 des_part ">
						<h3 class="font_size">QUALITY DESIGN & <br>
                        <span>UNIQUE Fashion</span></h3>
						<h4>$234.00  <span style="color:#ffbf00">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        </span></h4>
                       <p> <button class="Purchase_button" type="button">Purchase</button></p>
						<div class="clearfix"></div>
					 </div>
					 <div class="col-md-6 slider_image img_hidden">
						<img src="<?php echo base_url();?>public/images/banner_watch.png" class="img-responsive">
					</div>
				  </div>
				</div>
			  </div>
            <div class="item">
				<img src="<?php echo base_url();?>public/images/shop_banner.png" style="height:450px !important; width:100%">
				<div class="carousel-caption">
				<div class="row">
					<div class="col-md-6 des_part">
						<h3 class="font_size">QUALITY DESIGN & <br>
                        <span>UNIQUE Fashion</span></h3>
						<h4>$234.00  <span style="color:#ffbf00">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        </span></h4>
                       <p> <button class="Purchase_button" type="button">Purchase</button></p>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 slider_image img_hidden">
						<img src="<?php echo base_url();?>public/images/banner_watch.png" class="img-responsive">
					</div>
				  </div>
				</div>
			  </div>
	     </div>
		<!-- Controls -->
		<a data-slide="prev" role="button" href="#carousel-example-generic" class="left carousel-control"> 
        <span aria-hidden="true" class=" glyphicon-chevron-left"><img src="<?php echo base_url();?>public/images/banner_arrow_left.png" width="60" height="60" /></span>
        </a> 
         
         <a data-slide="next" role="button" href="#carousel-example-generic" class="right carousel-control">
		 <span aria-hidden="true" class=" glyphicon-chevron-right"><img src="<?php echo base_url();?>public/images/banner_arrow_right.png" width="60" height="60" /></span>
		 </a>
	  </div>
    </div>
  
  <div class="wrapper_shop "> 
    <div class="container">
    <div class="shop_head">
    <h1>NEW COLLECTION</h1>
    <center>
      <img src="<?php echo base_url();?>public/images/bdr-banner.png"  />
    </center>
    </div>
       </div>
    </div>
    
    <div class="wrapper_shop  banner_container"> 
     <div class="col-md-6 padding_main">
      <div class="shop_head_top">
       <div class="col-sm-6">
        <h1>COLLECTION OF 2018</h1>
        <h2>Fusce euismod </br>
            consequat ante</h2>
            <h2><span style="color:#ffbf00">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            </span></h2>
            <h4>$105.00</h4>
        <h2><button class="Purchase_shop" type="button">Purchase</button></h2>
       </div>
       <div class="col-sm-6"><img src="<?php echo base_url();?>public/images/shop_mid1.png" /></div>
      </div>
     </div>
     <div class="col-md-6 padding_main">
      <div class="shop_head_top_right">
       <div class="col-sm-6">
        <h1>COLLECTION OF 2018</h1>
        <h2>Fusce euismod </br>
            consequat ante</h2>
            <h2><span style="color:#efce4a">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            </span></h2>
            <h4>$105.00</h4>
        <h2><button class="Purchase_shop" type="button">Purchase</button></h2>
       </div>
       <div class="col-sm-6"><img src="<?php echo base_url();?>public/images/shop_mid2.png" /></div>
      </div>
     </div>
    </div>
    
   
    <div class="clearfix"></div>
      <div class="wrapper_shop banner_container"> 
        <div align="center">
           <?php
		   $category_name = $this->home_model->all_category_shop();
		   foreach($category_name as $key=>$cat_name){?>
            <button class="btn btn-default filter-button tabs <?php if($key==0){ echo 'selcteee';}?>" id="<?php echo $cat_name['category_id'];?>"><?php echo $cat_name['category_name'];?></button>
            <?php } ?>
             <button class="btn btn-default filter-button" >All</button>
        </div>
        
        
   
   
   <div class="row">
   <?php
   $category_name = $this->home_model->all_category_shop_limit1();
   $all_product = $this->home_model->all_product_cat($category_name['category_id']);
   ?>
   
    <div class="tab" id="tab-<?php echo $category_name['category_id'];?>">
	<?php
	foreach($all_product as $key=>$allproduct){
	$allproduct_img = explode(',',$allproduct['product_image']);
	?>
    <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url(); ?>public/image_gallery/shopproduct/<?php echo $allproduct_img[0];?>" style="height: 100%; width: 100%; object-fit:scale-down;" /> </div> 
          <div class="col-xs-12"> 
           <h4><?php echo substr($allproduct['product_name'],0,15);?><?php if(strlen($allproduct['product_name'])>15){echo '... ...';}?><span><?php echo $allproduct['sales_price'];?></span></h4> 
             <div style="height:50px;"><?php echo substr($allproduct['product_desc'],0,50);?><?php if(strlen($allproduct['product_desc'])>50){echo '... ...';}?></div> 
               </div>
               </div>
               </a>
         </div>
     <?php } ?>
         </div>
         
         
         
        <div class="tab" id="tab-2" style="display:none">
    <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic1.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         
      <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic9.png" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
         
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic1.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         
      <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic9.png" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
           <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic1.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         
      <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic9.png" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic1.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         
      <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   

         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic9.png" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
         </div>
         
         <div class="tab" id="tab-3" style="display:none">
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic6.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
    
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic2.png" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic6.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic2.png" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
          
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic6.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic2.png" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
          
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic6.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         
        <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic2.png" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
         </div>
         
         <div class="tab" id="tab-3" style="display:none">
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic1.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img5.jpg" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
          <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic1.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img5.jpg" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
          
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic1.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img5.jpg" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
          <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic1.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img5.jpg" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
         </div>
         
         <div class="tab" id="tab-4" style="display:none">
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic1.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img5.jpg" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic1.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img5.jpg" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
          <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic1.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img5.jpg" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/shop_pic1.png" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img5.jpg" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
         
         </div>
         
         
         <div class="tab" id="tab-5" style="display:none">
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img3.jpg" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img2.jpg" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img3.jpg" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img2.jpg" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
          <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img3.jpg" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img2.jpg" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
         
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img3.jpg" style="height: 100%; width: 100%; object-fit:cover" /> </div> 
          <div class="col-xs-12"> 
           <h4>Consequat ante<span>$455.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
         </div>
         <div class="col-sm-3 padding_main">
       <a href="#"><div class="shop_box">   
         <div class="shop_box_height item"> 
          <img src="<?php echo base_url();?>public/images/cat_img2.jpg" style="height: 100%; width: 100%; object-fit:cover" /> 
          </div> 
          <div class="col-xs-12"> 
           <h4>Onsequat <span>$253.00</span></h4> 
             <p>Fusce euismod consequat ante</p> 
               </div>
               </div>
               </a>
          </div>
         
         </div>
         
         
         
         </div>
       </div>
   
    
    
  
 <div class="clearfix"></div>
 
  
 
 <?php $this->load->view('segment/footer'); ?>
</body>
</html>
<script>
 $(function(){
    $('.tabs').on('click',function(){
     var id = $(this).attr('id');
  $('.tabs').removeClass('selcteee');
  $('#'+id).addClass('selcteee');
  $('.tab').hide();
  $('#tab-'+id).show();
    });
 });
 </script>