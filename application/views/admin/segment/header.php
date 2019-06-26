 <?php
 $session_data=$this->session->userdata('logged_in');
 $admin_id=$session_data['admin_id']; 
 $admin=$this->admin_model->get_admin($admin_id);
 //print_r($admin);die;
 ?>
 <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url(); ?>admin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Live Auction</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		
          <li style="margin:10px 0px 0px 0px; color:#ffffff;">
		  
		  <table width="100%">
  <tr>
    <td>Country : </td>
    <td>&nbsp;</td>
    <td> <select class="form-control" name="country" id="country" style="background-color:#3c8dbc; color:#ffffff;" >
											<option value="">--Select Country--</option>
											
											<?php
											$country=$this->session->userdata('country');
											$country_data=$this->admin_model->get_all_country();	
											foreach($country_data as $allcountry)
											{?>
											<option value="<?php echo $allcountry->country_id;?>" <?php if($country==$allcountry->country_id){?>selected="selected"<?php } ?>><?php echo ucfirst($allcountry->country_name); ?></option>
											<?php } ?>
				   </select></td>
  </tr>
</table>

		  
		 
		 
		  
		  </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<?php
			if($admin->profile_image !='' && file_exists('public/admin/admin_profile/'.$admin->profile_image))
			{?>
   <img src="<?php echo base_url(); ?>public/admin/admin_profile/<?php echo $admin->profile_image; ?>" class="user-image" alt="User Image">
			  <?php }else
			  {?>
			  <img src="<?php echo base_url(); ?>public/admin/admin_profile/avatar5.png" class="user-image" alt="User Image">
			<?php } ?>  
			  
<span class="hidden-xs"><?php echo ucwords($admin->first_name.'&nbsp;'.$admin->last_name); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                
				
				<?php
if($admin->profile_image !='' && file_exists('public/admin/admin_profile/'.$admin->profile_image))
			{?>
 <img src="<?php echo base_url(); ?>public/admin/admin_profile/<?php echo $admin->profile_image; ?>" class="img-circle" alt="User Image">
			  <?php }else
			  {?>
			  <img src="<?php echo base_url(); ?>public/admin/admin_profile/avatar5.png" class="img-circle" alt="User Image">
			<?php } ?> 

                <p>
                  <?php echo ucwords($admin->first_name.'&nbsp;'.$admin->last_name); ?> - Admin
                  
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>admin/settings/profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>admin/login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>

    </nav>
  </header>
  <script src="<?php echo base_url(); ?>public/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script>
$(document).ready(function(){
$("#country").change(function(){
var country=$(this).val();
//alert(country);
if(country!=='')
{

}$.ajax({
			type : "POST",
			url : "<?php echo base_url('admin/dashboard/set_country_session');?>",
			data: {country:country},
			success:function(data){
			//alert(data);
			window.location.reload();
			
			}
		});
});
});
</script>
