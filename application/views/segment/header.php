<?php
$country_name = $this->home_model->all_country();
@$session_data = $this->session->userdata('user_logged_in');
?>
  <header class="navbar navbar-static-top bs-docs-nav header " id="top" role="banner">
    <div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				 <a href="<?php echo base_url(); ?>home" class="navbar-brand"><img src="<?php echo base_url(); ?>public/images/logo.png"  />
			    </a>
			</div>
                                                       
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
              <ul class="nav navbar-nav navbar-right">
			  <?php $uri = $this->uri->segment(1); $uri1 = $this->uri->segment(2)?>
                <li><a href="<?php echo base_url(); ?>home" class="<?php if($uri=='home' || $uri==''){echo 'active';}?>">Auction</a></li>
                <li><a href="<?php echo base_url(); ?>shop" class="<?php if($uri=='shop'){echo 'active';}?>">Shop</a></li>
                <li><a href="<?php echo base_url(); ?>page/aboutus" class="<?php if($uri1=='aboutus'){echo 'active';}?>">About Us</a></li>
				<?php if(@$session_data==''){?>
                <li><a href="<?php echo base_url(); ?>buyer/login" class="<?php if($uri1=='login'){echo 'active';}?>">Login</a></li>
                <li><a href="<?php echo base_url(); ?>buyer/register" class="<?php if($uri1=='register'){echo 'active';}?>">Register</a></li>
				<?php }else{ ?>
				<li class="dropdown">
                <a data-toggle="dropdown" href="#" class="active">
				<?php
				$buyer_details = $this->BUYER->get_buyer(@$session_data['buyer_id']);
				?>
                <?php echo @$buyer_details->first_name;?>&nbsp;<?php echo @$buyer_details->last_name;?></a>
                <ul class="dropdown-menu" style="min-width:200px;">
                <li><a href="<?php echo base_url(); ?>buyer/buyer_profile"> <i class="fa fa-edit" aria-hidden="true"></i> &nbsp;&nbsp;Profile </a></li>
                <li><a  href="<?php echo base_url(); ?>buyer/logout"> <i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;&nbsp;Logout</a></li>
                </ul>
                </li>
				<?php } ?>
				</ul>
			 </nav>
            </div>
	     </header>
		 
		 <div class="topbg">
    <div class="container country_container">
      <div class="mobile">
      <div class="col-xs-10">
        <p style="font-size:18px; line-height:35px; text-align:left;">Country</p> 
           </div>
             <div class="col-xs-2">
                <div class="btn-group mob-fl">
                  <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">                          <i class="fa fa-bars" aria-hidden="true"></i>
                         </button>
                       <ul class="dropdown-menu" role="menu">
                        <li><a href="javascript:void(0);" class="selec">All</a></li>
						<?php
						foreach($country_name as $country){?>
                        <li ><a href="javascript:void(0);"><?php echo $country['country_name'];?></a></li>
                       <?php } ?>
                       </ul>
                    </div>
              </div>
           </div>
    
      <div class="top_nav pc">
       <ul>                                    
		<?php
		foreach($country_name as $key=>$country){?>
		<li><a href="javascript:void(0);" <?php if($key==9){echo 'style="background:none;';}?>"><?php echo $country['country_name'];?></a></li>
		<?php } ?>
      </ul>
     </div>
    </div>
   </div>
 	                                                                      
  