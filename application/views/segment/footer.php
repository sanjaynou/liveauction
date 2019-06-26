<?php
@$session_data = $this->session->userdata('user_logged_in');
?>
<div class="footer_wrapper_top">
 <div class="container" > 
  <div class="col-md-11 col-md-offset-1">                                                                                      
   <div class="footer_nav">
      <ul>                                    
       <li><a href="<?php echo base_url(); ?>home">Auction</a></li>
       <li><a href="#">Shop</a></li>
       <li><a href="<?php echo base_url(); ?>page/aboutus"> About Us</a></li>
       <li><a href="<?php echo base_url(); ?>page/contactus">Contact Us </a></li>
       <li><a href="<?php echo base_url(); ?>page/privacypolicy">Privacy Policy</a></li>
       <li><a href="<?php echo base_url(); ?>page/termcondition">Term & Condition</a></li>
	   <?php if(@$session_data==''){?>
       <li><a href="<?php echo base_url(); ?>buyer/login">Login</a></li>
       <li><a href="<?php echo base_url(); ?>buyer/register">Register</a></li>
	   <?php } ?>
      </ul>
     </div>
     </div>
   </div>
 </div>
 
 
 <div class="footer_wrapper_black">
 <div class="container" >
 <div class="col-lg-9 col-sm-4">
  <p>Copyright <?php echo utf8_encode('©'); ?> <?php echo date('Y'); ?> Lorem Ipsum. All Rights Reserved </p>
 </div>
 
 <div class="col-lg-3">
    <ul class="social-link-footer list-unstyled">
    <li class="social-link-footer_margin"><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    </ul> 
 </div>
 </div>
 </div>
 
 <script>
 $(document).ready(function(){
 $(".close").click(function(){
 $(".error").hide();
 $(".success").hide();
 });
 });
 </script>
 
