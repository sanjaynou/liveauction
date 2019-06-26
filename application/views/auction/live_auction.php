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
     
     <div class="col-md-5">
     
      <div class="chatcen_main">
        <div class="chatcen_col">
        <div class="col-xs-2">
		<?php
		$allproduct_img = $this->home_model->auction_image($auction_product->product_id);
		?>
        <img src="<?php echo base_url();?>public/image_gallery/auctionproduct/<?php echo $allproduct_img->product_images;?>">
        </div>
        <div class="col-xs-10">
        <h2> <i class="fa fa-fw fa-star" style="padding:0px 0px 5px 0px; float:left"></i> <?php echo $auction_product->product_name;?></h2>
        <p><?php echo substr(strip_tags($auction_product->product_desc),0,100); if(strlen($auction_product->product_desc)>100){echo ".....";}?></p>
        </div>
        </div>
        <div class="cover_image">
          <img src="<?php echo base_url();?>public/image_gallery/auctionproduct/<?php echo $allproduct_img->product_images;?>"  style="height: 100%; width: 100%; object-fit: scale-down;" />
          </div>
          
           <div class="chat_mid">
          <div class="col-md-6">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td><p><a href="#"><img src="<?php echo base_url();?>public/images/like.png" /> 125</a></p></td>
            <td><p><a href="#"><img src="<?php echo base_url();?>public/images/share_icon.png" /> 110</a></p></td>
            <td><p><a href="#"><img src="<?php echo base_url();?>public/images/moment.png" /> 1</a></p></td>
            </tr>
            </table>
          </div>
          
          <div class="col-md-6">
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td><p><a href="#"><img src="<?php echo base_url();?>public/images/watcha.png" /> 24:00</a></p></td>
            <td><p><a href="#"><img src="<?php echo base_url();?>public/images/eye.png" /> 134</a></p></td>
            <td align="right"><p><img src="<?php echo base_url();?>public/images/sound.png" /> &nbsp;&nbsp; <img src="<?php echo base_url();?>public/images/full.png" /> </p></td>
            </tr>
            </table>
          </div>
          </div>
          
          
          
          <div class="chat_bid">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="36%" valign="top" ><h1>Auction Status:<br /><span><img src="<?php echo base_url();?>public/images/dod_green.png" /> Bidding Active</span></h1></td>
            <td width="37%" valign="top"><h2>1:56</h2></td>
            <td width="27%" valign="top">
			<?php
			$seller_details = $this->LIVEAUCTION->seller_details($auction_product->seller_id);
			?>
            <h3>Shipping Fee:<br />
             <span>International -</span> <font>$ <?php echo number_format($seller_details->shipment_fee_international,2);?></font>
              <span>Domestic - </span> <font>$ <?php echo number_format($seller_details->shipment_fee_domestic,2);?></font>
              </h3>
              </td>
              
              <tr>
            <td width="36%" valign="top"><h1>Current bid:</h1></td>
            <td width="37%" valign="top"><input class="bid_form" placeholder="" type="text"></td>
            <td width="27%" valign="top">&nbsp;
            
              </td>
            </tr>
            
            
            <tr>
            <td width="36%" valign="top"><h1>Highest Bidder:</h1></td>
            <td width="37%" valign="top"><h4>Terence Neo</h4><br />
			<?php
			if(!$this->session->userdata('user_logged_in')){?>
			<button class="bidding_btn" onclick="javascript:alert('Please login your account first then bid.');" type="button"> Bid</button>
			<?php }else{
			$session_id = $this->session->userdata('user_logged_in');
			$user_details = $this->LIVEAUCTION->buyer_details($session_id['buyer_id']);
			?>
			<button class="bidding_btn bid-ship" type="button"> Bid</button>
			<?php } ?>
			</td>
            <td width="27%" valign="top"><h5>Minimum<br />Bid Amount</h5><br /><h6> $ <?php echo number_format($auction_product->min_bid,2)?></h6>
            
              </td>
            </tr>
            </table>
          </div>
        </div>
        </div>
        
                
        <div class="col-md-4 padding_main">
         <div class="login_box">
			<!-- Nav tabs -->
			<div class="tabbable full-width-tabs">
            <ul class="nav nav-tabs">
             <li class="active"><a href="#tab-one" data-toggle="tab"  class="login_tab chat_tab"><img src="<?php echo base_url();?>public/images/chat_icon.png"  />Chat</a></li>
             <li><a href="#tab-two" data-toggle="tab" class="login_tab chat_tab"> <img src="<?php echo base_url();?>public/images/audiance_icon.png"  />Audience</a></li>
          <li><a href="#tab-three" data-toggle="tab"  class="login_tab chat_tab"><img src="<?php echo base_url();?>public/images/bidding_icon.png"  height="20"  /> Bidding History</a></li>
            </ul>
        
            <div class="tab-content" >
              <div class="tab-pane active" id="tab-one">
               <div class="col-md-12 padding_main" id="testDiv3">
               
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>Lorem Ipsum dummy text of the printing</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>Lorem Ipsum dummy text of the printing</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>Lorem Ipsum dummy text of the printing</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>Lorem Ipsum dummy text of the printing</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>Lorem Ipsum dummy text of the printing</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>Lorem Ipsum dummy text of the printing</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>Lorem Ipsum dummy text of the printing</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>Lorem Ipsum dummy text of the printing</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>Lorem Ipsum dummy text of the printing</p>
                </div>
                </div>
                </div>
                <div style="background:#eae9e9; overflow:hidden; border:#dbdada 1px solid;">
                <div class="col-xs-10">
                <div contenteditable='true' class='editable' data-placeholder='Type a message... ...' style=" max-height:100px; overflow-y:auto; overflow-x:                 hidden; padding:22px 15px; font-size:16px;">Type a message... ...</div>
                </div>
                <div class="col-xs-2"><h3 style="margin-top:20px; text-align:center"><a href="#" style="color:#000"><i class="fa fa-paper-plane" aria-hidden=                "true"></i>
                </a></h3></div>
                </div>
                <div class="col-md-6">
               <center> <button class="follow_btn" type="button"><img src="<?php echo base_url();?>public/images/follow_me.png"  /> &nbsp;&nbsp;Follow me</button></center>
                </div>
                <div class="col-md-6">
                 <center> <button class="share_btn" type="button"><img src="<?php echo base_url();?>public/images/share.png"  /> &nbsp;&nbsp;Share</button></center>
                 </div>
                
                </div>
                
                <div class="tab-pane" id="tab-two">
                <div class="col-md-12 padding_main" id="testDiv4">
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>300 fan</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>200 fan</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>300 fan</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>300 fan</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>300 fan</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>300 fan</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>300 fan</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>300 fan</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>300 fan</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>300 fan</p>
                </div>
                </div>
                
                <div class="chatnew_col">
                  <div class="col-xs-2">
                   <img src="<?php echo base_url();?>public/images/feedback_img2.png">
                </div>
                <div class="col-xs-10">
                <h2> <i class="fa fa-fw fa-star"></i> &nbsp;Jhon Dee </h2>
                <p>300 fan</p>
                </div>
                </div>
                </div>
                </div> 
                
                <div class="tab-pane" id="tab-three">
                <div class="col-md-12 padding_main" id="testDiv5">
                 <div class="order_box">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
        
        <tr>
         <td  height="50" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">Terence</p></td>
         <td height="50"  align="right" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">$110.00 </p></td>
        </tr>
        
        <tr>
         <td  height="50" bgcolor="#FFFFFF" class="td_bdr_bottom "><p class="td_padding">Jannet</p></td>
         <td height="50"  align="right" class="td_bdr_bottom "><p class="td_padding">$107.00</p></td>
        </tr>
        
         <tr>
         <td  height="50" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">Alex</p></td>
         <td height="50"  align="right" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">$111.00</p></td>
        </tr>
        
        <tr>
         <td  height="50" bgcolor="#FFFFFF" class="td_bdr_bottom "><p class="td_padding">Terence</p></td>
         <td height="50"  align="right" class="td_bdr_bottom "><p class="td_padding">$200.00</p></td>
        </tr>
        
         <tr>
         <td  height="50" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">Ahsiao</p></td>
         <td height="50"  align="right" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">$110.00</p></td>
        </tr>
        
        <tr>
         <td  height="50" bgcolor="#FFFFFF" class="td_bdr_bottom "><p class="td_padding">Terence</p></td>
         <td height="50"  align="right" class="td_bdr_bottom "><p class="td_padding">$115.00</p></td>
        </tr>
       
        
         <tr>
         <td  height="50" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">Alex</p></td>
         <td height="50"  align="right" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">$111.00</p></td>
        </tr>
        
        <tr>
         <td  height="50" bgcolor="#FFFFFF" class="td_bdr_bottom "><p class="td_padding">Terence</p></td>
         <td height="50"  align="right" class="td_bdr_bottom "><p class="td_padding">$200.00</p></td>
        </tr>
        
         <tr>
         <td  height="50" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">Ahsiao</p></td>
         <td height="50"  align="right" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">$110.00</p></td>
        </tr>
        
        <tr>
         <td  height="50" bgcolor="#FFFFFF" class="td_bdr_bottom "><p class="td_padding">Terence</p></td>
         <td height="50"  align="right" class="td_bdr_bottom "><p class="td_padding">$115.00</p></td>
        </tr>
         <tr>
         <td  height="50" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">Ahsiao</p></td>
         <td height="50"  align="right" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">$110.00</p></td>
        </tr>
        
        <tr>
         <td  height="50" bgcolor="#FFFFFF" class="td_bdr_bottom "><p class="td_padding">Terence</p></td>
         <td height="50"  align="right" class="td_bdr_bottom "><p class="td_padding">$115.00</p></td>
        </tr>
         <tr>
         <td  height="50" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">Ahsiao</p></td>
         <td height="50"  align="right" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">$110.00</p></td>
        </tr>
        
        <tr>
         <td  height="50" bgcolor="#FFFFFF" class="td_bdr_bottom "><p class="td_padding">Terence</p></td>
         <td height="50"  align="right" class="td_bdr_bottom "><p class="td_padding">$115.00</p></td>
        </tr>
         <tr>
         <td  height="50" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">Ahsiao</p></td>
         <td height="50"  align="right" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">$110.00</p></td>
        </tr>
        
        <tr>
         <td  height="50" bgcolor="#FFFFFF" class="td_bdr_bottom "><p class="td_padding">Terence</p></td>
         <td height="50"  align="right" class="td_bdr_bottom "><p class="td_padding">$115.00</p></td>
        </tr>
         <tr>
         <td  height="50" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">Ahsiao</p></td>
         <td height="50"  align="right" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">$110.00</p></td>
        </tr>
        
        <tr>
         <td  height="50" bgcolor="#FFFFFF" class="td_bdr_bottom "><p class="td_padding">Terence</p></td>
         <td height="50"  align="right" class="td_bdr_bottom "><p class="td_padding">$115.00</p></td>
        </tr>
         <tr>
         <td  height="50" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">Ahsiao</p></td>
         <td height="50"  align="right" bgcolor="#eae9e9" class="td_bdr_bottom "><p class="td_padding">$110.00</p></td>
        </tr>
        
        <tr>
         <td  height="50" bgcolor="#FFFFFF" class="td_bdr_bottom "><p class="td_padding">Terence</p></td>
         <td height="50"  align="right" class="td_bdr_bottom "><p class="td_padding">$115.00</p></td>
        </tr>
        </table>
                   </div>
                </div>
                </div> 
             </div> 
            </div> 
          </div>
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
<script>
$(function(){
      $(document).on('click','.bid-ship',function(){
	       var verify = confirm('Please add a valid credit/debit to your account in order to start bidding.');
		   if(verify){
		   window.location.href='<?php echo base_url();?>buyer/save_credit_card';
		   }else{
		   return false;
		   }
	  });
});
</script> 