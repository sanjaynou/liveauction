<?php
@$session_data = $this->session->userdata('user_logged_in');
?>
 <div id="mySidenav" class="sidenav mobile">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <div class="">
       <div  class="left_bar">
       <div class="glossymenu profile_left_col">
         <div class="store_left_top">
		       <?php
				$buyer_details = $this->BUYER->get_buyer(@$session_data['buyer_id']);
				?>
              <?php if($buyer_details->profile_image==''){?>
			<img src="<?php echo base_url();?>public/images/blank_img.png"  width="87" height="90"  style="float:left; border:1px #9ca8ae solid; margin:-5px 10px 0px 10px" />
			<?php }else{?>
			<img src="<?php echo base_url();?>public/image_gallery/buyer/<?php echo $buyer_details->profile_image;?>"  width="87" height="90"  style="float:left; border:1px #9ca8ae solid; margin:-5px 10px 0px 10px" />
			<?php } ?>
              <h1><span>Welcome</span><br />
			   
                <?php echo $buyer_details->first_name;?>&nbsp;<?php echo $buyer_details->last_name;?>
			  </h1>
              </div>
              <div class="clearfix"></div>
                  <a class="menuitem sel" href="<?php echo base_url();?>buyer/dashboard" ><img src="<?php echo base_url();?>public/images/Dashbord_icon.png" /> Dashboard</a>    
                  <a class="menuitem " href="<?php echo base_url();?>buyer/buyer_profile"><img src="<?php echo base_url();?>public/images/Profile.png" /> My Profile</a> 
				  <a class="menuitem <?php if($this->uri->segment(2)=='save_credit_card'){echo 'sel';}?>" href="<?php echo base_url();?>buyer/save_credit_card" ><img src="<?php echo base_url();?>public/images/Dashbord_icon.png" /> Save Credit Card</a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='order_history'){echo 'sel';}?>" href="order_history"><img src="<?php echo base_url();?>public/images/Orde_History.png" />&nbsp; Order History </a>
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_my_won_auction'){echo 'sel';}?>" href="buyer_my_won_auction"><img src="<?php echo base_url();?>public/images/My_Won_Auction.png" />&nbsp; My Won Auction </a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_recent_orders'){echo 'sel';}?>" href="buyer_recent_orders"><img src="<?php echo base_url();?>public/images/Recent_Orders.png" /> Recent Orders </a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_notification'){echo 'sel';}?>" href="buyer_notification"><img src="<?php echo base_url();?>public/images/notification.png" /> Notification</a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_address_book'){echo 'sel';}?>" href="buyer_address_book"><img src="<?php echo base_url();?>public/images/address_book.png" /> Address Book </a>  
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_auction_view_history'){echo 'sel';}?>" href="buyer_auction_view_history"><img src="<?php echo base_url();?>public/images/auction_view_history.png" /> Auction View History </a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_auction_history'){echo 'sel';}?>" href="buyer_auction_history"><img src="<?php echo base_url();?>public/images/auction_history.png" /> Auction History </a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_cancel_refund'){echo 'sel';}?>" href="buyer_cancel_refund"><img src="<?php echo base_url();?>public/images/cancel_refund.png" /> Cancel/Refund </a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_feedback'){echo 'sel';}?>" href="buyer_feedback"><img src="<?php echo base_url();?>public/images/feedback.png" /> Feedback </a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_edit_profile'){echo 'sel';}?>" href="<?php echo base_url();?>buyer/buyer_edit_profile"><img src="<?php echo base_url();?>public/images/setting.png" /> Setting </a>
             </div>
           </div>
      </div>
       </div>
  
  <?php
				$buyer_details = $this->BUYER->get_buyer(@$session_data['buyer_id']);
				?>
   <div class="col-xs-4 col-md-03 dash_padding pc">
      <div  class="left_bar">
       <div class="glossymenu profile_left_col">
         <div class="store_left_top">
			  <?php if($buyer_details->profile_image==''){?>
			<img src="<?php echo base_url();?>public/images/blank_img.png"  width="87" height="90"  style="float:left; border:1px #9ca8ae solid; margin:-5px 10px 0px 10px" />
			<?php }else{?>
			<img src="<?php echo base_url();?>public/image_gallery/buyer/<?php echo $buyer_details->profile_image;?>"  width="87" height="90"  style="float:left; border:1px #9ca8ae solid; margin:-5px 10px 0px 10px" />
			<?php } ?>
              <h1><span>Welcome</span><br />
			  
                <?php echo $buyer_details->first_name;?>&nbsp;<?php echo $buyer_details->last_name;?>
			  </h1>
              </div>
              <div class="clearfix"></div>
                 <a class="menuitem <?php if($this->uri->segment(2)=='dashboard'){echo 'sel';}?>" href="<?php echo base_url();?>buyer/dashboard" ><img src="<?php echo base_url();?>public/images/Dashbord_icon.png" /> Dashboard</a>    
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_profile'){echo 'sel';}?>" href="<?php echo base_url();?>buyer/buyer_profile"><img src="<?php echo base_url();?>public/images/Profile.png" /> My Profile</a> 
				  <a class="menuitem <?php if($this->uri->segment(2)=='save_credit_card'){echo 'sel';}?>" href="<?php echo base_url();?>buyer/save_credit_card" ><img src="<?php echo base_url();?>public/images/Dashbord_icon.png" /> Save Credit Card</a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='order_history'){echo 'sel';}?>" href="order_history"><img src="<?php echo base_url();?>public/images/Orde_History.png" />&nbsp; Order History </a>
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_my_won_auction'){echo 'sel';}?>" href="buyer_my_won_auction"><img src="<?php echo base_url();?>public/images/My_Won_Auction.png" />&nbsp; My Won Auction </a>
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_recent_orders'){echo 'sel';}?>" href="buyer_recent_orders"><img src="<?php echo base_url();?>public/images/Recent_Orders.png" /> Recent Orders </a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_notification'){echo 'sel';}?>" href="buyer_notification"><img src="<?php echo base_url();?>public/images/notification.png" /> Notification</a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_address_book'){echo 'sel';}?>" href="buyer_address_book"><img src="<?php echo base_url();?>public/images/address_book.png" /> Address Book </a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_auction_view_history'){echo 'sel';}?>" href="buyer_auction_view_history"><img src="<?php echo base_url();?>public/images/auction_view_history.png" /> Auction View History </a>  
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_auction_history'){echo 'sel';}?>" href="buyer_auction_history"><img src="<?php echo base_url();?>public/images/auction_history.png" /> Auction History </a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_cancel_refund'){echo 'sel';}?>" href="buyer_cancel_refund"><img src="<?php echo base_url();?>public/images/cancel_refund.png" /> Cancel/Refund </a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_feedback'){echo 'sel';}?>" href="buyer_feedback"><img src="<?php echo base_url();?>public/images/feedback.png" /> Feedback </a> 
                  <a class="menuitem <?php if($this->uri->segment(2)=='buyer_edit_profile'){echo 'sel';}?>" href="<?php echo base_url();?>buyer/buyer_edit_profile"><img src="<?php echo base_url();?>public/images/setting.png" /> Setting </a>
             </div>
           </div>
          </div>