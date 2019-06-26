<?php
 $session_data=$this->session->userdata('logged_in');
 $admin_id=$session_data['admin_id']; 
 $admin=$this->admin_model->get_admin($admin_id);
 $c_id=$this->session->userdata('country');
 $country_detail=$this->admin_model->get_country($c_id);  
 ?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">          
		  <?php
if($admin->profile_image !='' && file_exists('public/admin/admin_profile/'.$admin->profile_image))
			{?>
<img src="<?php echo base_url(); ?>public/admin/admin_profile/<?php echo $admin->profile_image; ?>" class="img-circle" alt="User Image">
			  <?php }else
			  {?>
			  <img src="<?php echo base_url(); ?>public/admin/admin_profile/avatar5.png" class="img-circle" alt="User Image">
			<?php } ?> 
        </div>
        <div class="pull-left info">
          <p><?php echo ucwords($admin->first_name.'&nbsp;'.$admin->last_name); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
       
	   <li class=" ">
          <a href="javascript:void(0);">
            <i class="fa fa-flag"></i> <span><?php echo $country_detail->country_name; ?></span>
            
          </a>
          
        </li>
	   
	   
        <li class="<?php if($this->uri->segment(2)=="dashboard"){echo "active"; }?> treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($this->uri->segment(2)=="dashboard"){echo "active"; }?>">
			<a href="<?php echo base_url(); ?>admin/dashboard"><i class="fa fa-circle-o"></i> Dashboard</a></li>
         
           
          </ul>
        </li>
		
		<?php
		if($this->session->userdata('country'))
		{
		?>
		
		
		<li class="<?php if($this->uri->segment(3)=="shop" || $this->uri->segment(3)=="add_shopcategory" || $this->uri->segment(3)=="edit_shopcategory" || $this->uri->segment(2)=="shopproduct"){echo "active"; }?> treeview">
          <a href="#">
            <i class="fa fa-fw fa-navicon"></i> <span>Shop</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($this->uri->segment(3)=="shop" || $this->uri->segment(3)=="add_shopcategory" || $this->uri->segment(3)=="edit_shopcategory" ){echo "active"; }?>">
			<a href="<?php echo base_url(); ?>admin/category/shop"><i class="fa fa-circle-o"></i>Manage Category</a>
           </li>
		   
		  <li  <?php if($this->uri->segment(2)=='shopproduct'){ echo 'class="active"';}?> >
			<a href="<?php echo base_url(); ?>admin/shopproduct"><i class="fa fa-circle-o"></i>Manage Product</a>
           </li>
           
          </ul>
        </li>
		
		<li class="<?php if($this->uri->segment(3)=="auction" || $this->uri->segment(3)=="add_auctioncategory" || $this->uri->segment(3)=="edit_auctioncategory" || $this->uri->segment(2)=="auctionproduct"){echo "active"; }?> treeview">
          <a href="#">
            <i class="fa fa-fw fa-navicon"></i> <span>Auction</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
		   
		   <li  class="<?php if($this->uri->segment(3)=="auction" || $this->uri->segment(3)=="add_auctioncategory" || $this->uri->segment(3)=="edit_auctioncategory" ){echo "active"; }?>">
			<a href="<?php echo base_url(); ?>admin/category/auction"><i class="fa fa-circle-o"></i>Manage Category</a>
           </li>
		   
		   		     <li  <?php if($this->uri->segment(2)=='auctionproduct'){ echo 'class="active"';}?>>
			<a href="<?php echo base_url(); ?>admin/auctionproduct"><i class="fa fa-circle-o"></i>Manage Product</a>
           </li>

		   
           
          </ul>
        </li>
		
		
		<li class="<?php if($this->uri->segment(2)=="buyer"){echo "active"; }?> treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Buyer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li  <?php if($this->uri->segment(2)=='buyer'){ echo 'class="active"';}?>>
			<a href="<?php echo base_url(); ?>admin/buyer"><i class="fa fa-circle-o"></i>Manage Buyer</a>
           </li>
           
          </ul>
        </li>
		
		<li class="<?php if($this->uri->segment(2)=="seller"){echo "active"; }?> treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Seller</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li  <?php if($this->uri->segment(2)=='seller'){ echo 'class="active"';}?>>
			<a href="<?php echo base_url(); ?>admin/seller"><i class="fa fa-circle-o"></i>Manage Seller</a>
           </li>
           
          </ul>
        </li>
		
		
		
		<li class="<?php if($this->uri->segment(2)=="cms"){echo "active"; }?> treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Manage Cms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li <?php if($this->uri->segment(2)=='cms'){ echo 'class="active"';}?>>
		<a href="<?php echo base_url(); ?>admin/cms"><i class="fa fa-circle-o"></i> Manage Cms </a>
		</li>
           
          </ul>
        </li>
		
		<?php } ?>
		
		<li class="<?php if($this->uri->segment(2)=="order"){echo "active"; }?> treeview">
          <a href="#">
            <i class="fa fa-fw fa-list-alt"></i> <span>Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li  <?php if($this->uri->segment(2)=='order'){ echo 'class="active"';}?>>
			<a href="<?php echo base_url(); ?>admin/order"><i class="fa fa-circle-o"></i>Order</a>
           </li>
		   
		     
           
          </ul>
        </li>
		
		<li class="<?php if($this->uri->segment(2)=="transaction"){echo "active"; }?> treeview">
          <a href="#">
            <i class="fa fa-fw fa-money"></i> <span>Transaction</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li  <?php if($this->uri->segment(2)=='transaction'){ echo 'class="active"';}?>>
			<a href="<?php echo base_url(); ?>admin/transaction"><i class="fa fa-circle-o"></i>Transaction</a>
           </li>
		   
		     
           
          </ul>
        </li>
		
		
		<li class="<?php if($this->uri->segment(2)=="sells_report" || $this->uri->segment(2)=="transaction_report"){echo "active"; }?> treeview">
          <a href="#">
            <i class="fa fa-fw fa-money"></i> <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
         
		   <ul class="treeview-menu">
		   
            <li  <?php if($this->uri->segment(2)=='sells_report'){ echo 'class="active"';}?>>
			<a href="<?php echo base_url(); ?>admin/sells_report"><i class="fa fa-circle-o"></i>Sales Report</a>
           </li>
		   
            <li  <?php if($this->uri->segment(2)=='transaction_report'){ echo 'class="active"';}?>>
			<a href="<?php echo base_url(); ?>admin/transaction_report"><i class="fa fa-circle-o"></i>Transaction Report</a>
           </li>
          </ul>
		  
        </li>
		<hr style="margin:0px; padding:0px;">
		
		<li  class="<?php if($this->uri->segment(2)=="country" || $this->uri->segment(2)=="cms" ){echo "active"; }?> treeview">
		<a href="#">
		<i class="fa fa-map"></i> <span>Management</span>
		<span class="pull-right-container">
		<i class="fa fa-angle-left pull-right"></i>
		</span>
		</a>
		<ul class="treeview-menu">
		<li <?php if($this->uri->segment(2)=='country'){ echo 'class="active"';}?>>
		<a href="<?php echo base_url(); ?>admin/country"><i class="fa fa-circle-o"></i> Manage Country </a>
		</li>
		
		
		<li <?php if($this->uri->segment(3)=='contact_us'){ echo 'class="active"';}?>>
		<a href="<?php echo base_url(); ?>admin/cms/contact_us"><i class="fa fa-circle-o"></i> Contact Us </a>
		</li>
		
		<li <?php if($this->uri->segment(3)=='product_page'){ echo 'class="active"';}?>>
		<a href="<?php echo base_url(); ?>admin/cms/product_page"><i class="fa fa-circle-o"></i> Product Per page </a>
		</li>
		
		

		
		
		
		</ul>
		</li>
		
		
		
		
				
		 <li class="<?php if($this->uri->segment(2)=="settings"){echo "active"; }?> treeview">
          <a href="#">
            <i class="fa fa-cog"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($this->uri->segment(3)=='changepassword'){ echo 'class="active"';}?>>
			<a href="<?php echo base_url();?>admin/settings/changepassword"><i class="fa fa-circle-o"></i> Change Password</a>
			</li>
			
			  <li <?php if($this->uri->segment(3)=='edit_profile'){ echo 'class="active"';}?>>
			<a href="<?php echo base_url(); ?>admin/settings/edit_profile"><i class="fa fa-circle-o"></i> Edit Profile</a></li>
           
          </ul>
		  
        </li>
		
		
		
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>