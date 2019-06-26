<?php
@$session_data = $this->session->userdata('user_logged_in');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LIVE AUCTION</title>
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
 <?php $this->load->view('segment/header'); ?>
     
   <div class="clearfix"></div>  
  
  
  
  
  <div class="shop_banner"> 
   <?php $this->load->view('segment/buyer_sidebar');?>
          
        <div class="col-xs-8 col-md-9 main_container">
         <div class="clearfix"></div>
          <div class="dash_heading">
           <h1> Address Book </h1>
          <center><img src="<?php echo base_url();?>public/images/heading_bdr.png"/></center>
          </div>
         
       <div class="col-md-12 contant_padd">  
        <div class="dash_main_col table-responsive">
          <div class="address_book">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="11%"><h2>Name:</h2> </td>
            <td width="89%"><h2><?php echo $buyer_details->first_name;?>&nbsp;<?php echo $buyer_details->last_name;?></h2></td>
            </tr>
            <tr>
            <td><h2>Phone:</h2> </td>
            <td><h2><?php echo $buyer_details->contact_number;?></h2></td>
            </tr>
             <tr>
            <td><h2>Address:</h2> </td>
            <td><h2><?php echo $buyer_details->address;?></h2></td>
            </tr>
            
            <tr>
            <td><h2>Zip Code:</h2> </td>
            <td><h2><?php echo $buyer_details->postcode;?></h2></td>
            </tr>
            
            <tr>
            <td><h2>Country :</h2> </td>
            <td><h2>
			<?php 
			$country = $this->BUYER->country_details($buyer_details->country_id);
			echo $country->country_name;
			?>
			</h2></td>
            </tr>
            
            </table>
			<div class="col-lg-12"><button class="del_btn del_btn_sel" type="submit"> Deliver to this address </button></div>
            <div class="col-lg-12">
			<a href="<?php echo base_url();?>buyer/buyer_edit_profile">
			<button class="edit_btn" type="button"> Edit </button>
			</a>
			</div>
          </div>
		  
		  <?php
		  foreach($buyer_address as $all_address){
		  ?>
		  <div class="col-md-12" style="padding:0px;">
		  <div class="col-md-7" style="padding:0px;">
          <div class="address_book">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="11%"><h2>Name:</h2> </td>
            <td width="89%"><h2><?php echo $all_address->buyer_name;?></h2></td>
            </tr>
            <tr>
            <td><h2>Phone:</h2> </td>
            <td><h2><?php echo $all_address->buyer_phone;?></h2></td>
            </tr>
             <tr>
            <td><h2>Address:</h2> </td>
            <td><h2><?php echo $all_address->buyer_address;?></h2></td>
            </tr>
            
            <tr>
            <td><h2>Zip&nbsp;Code:</h2> </td>
            <td><h2><?php echo $all_address->zip_code;?></h2></td>
            </tr>
            
            <tr>
            <td><h2>Country :</h2> </td>
            <td><h2>
			<?php 
			$country = $this->BUYER->country_details($all_address->buyer_country_id);
			echo $country->country_name;
			?>
			</h2></td>
            </tr>
            
            </table>
			<div class="col-lg-12"><button class="del_btn" type="submit"> Deliver to this address </button></div>
           <div class="col-lg-12"><button class="edit_btn edit_btn_btn" id="<?php echo $all_address->id;?>" type="button"> Edit </button>
		   <button class="edit_btn delete_button" id="<?php echo $all_address->id;?>" type="button"> Delete </button></div>
          </div>
		  </div>
		   <div class="col-md-5">
		  <div class="pass_col edit_form-<?php echo $all_address->id;?>" style="display:none">
            <form  class="form-horizontal bv-form" method="post" action="<?php echo base_url();?>buyer/buyer_address_book_update">
			<?php
			$address_show = $this->BUYER->address_per_show($all_address->id);
			?>
			<input type="hidden" value="<?php echo $address_show->id;?>" name="address_id" />
              <div class="col-md-12">
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" type="text" value="<?php echo $address_show->buyer_name;?>" name="buyer_name" placeholder="Name" required>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" type="text" value="<?php echo $address_show->buyer_phone;?>" name="buyer_phone" placeholder="Phone" required>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <textarea class="login_form" style="height:70px;" name="buyer_address" placeholder="Address" required><?php echo $address_show->buyer_address;?></textarea>
                </div>
                </div>
                
                 <div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" type="text" value="<?php echo $address_show->zip_code;?>" name="zip_code" placeholder="Zip Code" required>
                </div>
                </div>
                
                 <div class="form-group has-feedback" >
                <div class="col-md-12">
				<select class="login_form" type="text" name="buyer_country_id" required>
				<option value="">--Select Country--</option>
				<?php
				foreach($get_all_country as $all_country){?>
                <option <?php if($all_country->country_id==$address_show->buyer_country_id){echo 'selected';}?> value="<?php echo $all_country->country_id;?>"><?php echo $all_country->country_name;?></option>
                <?php } ?>
				</select>
                </div>
                </div>
                
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <button class="login_btn" type="submit" style="margin:20px 0px 30px 0px">Update  Address</button>
                </div>
                </div>
             </div>
             </form>
           </div>
		   </div>
		   </div>
		  <?php } ?>
          <button class="purchase_btn add_address_btn edit" type="submit"> Add New Address </button>
          
          <div class="pass_col edit_form" style="display:none">
            <form  class="form-horizontal bv-form" method="post" action="<?php echo base_url();?>buyer/buyer_address_book">
              <div class="col-md-5">
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" type="text" name="buyer_name" placeholder="Name" required>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" type="text" name="buyer_phone" placeholder="Phone" required>
                </div>
                </div>
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <textarea class="login_form" style="height:70px;" name="buyer_address" placeholder="Address" required></textarea>
                </div>
                </div>
                
                 <div class="form-group has-feedback" >
                <div class="col-md-12">
                <input  class="login_form" type="text" name="zip_code" placeholder="Zip Code" required>
                </div>
                </div>
                
                 <div class="form-group has-feedback" >
                <div class="col-md-12">
				<select class="login_form" type="text" name="buyer_country_id" required>
				<option value="">--Select Country--</option>
				<?php
				foreach($get_all_country as $all_country){?>
                <option value="<?php echo $all_country->country_id;?>"><?php echo $all_country->country_name;?></option>
                <?php } ?>
				</select>
                </div>
                </div>
                
                
                <div class="form-group has-feedback" >
                <div class="col-md-12">
                <button class="login_btn" type="submit" style="margin:20px 0px 30px 0px">Add  Address</button>
                </div>
                </div>
             </div>
             </form>
           </div>
         </div>
       </div> 
     </div>   
          
  </div>
  

<div class="clearfix"  style="height:0px;"></div>
  <footer class="footer">
  
 
   <?php $this->load->view('segment/footer'); ?>
   </footer>
</body>
</html>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script> 
<script>
$(document).ready(function(){
	 $(document).on('click',".edit",function(){
	$(".edit_form").toggle();
	
  });
    
  
});
</script>
<script>
$(function(){
    $('.edit_btn_btn').on('click',function(){
	var id = $(this).attr('id');
	$('.edit_form-'+id).show();
	});
});
</script>
<script>
$(function(){
    $('.delete_button').on('click',function(){
	 var verify = confirm('Are you sure to delete this address?');
	 if(verify){
	 var id = $(this).attr('id');
	 var link_path = '<?php echo base_url();?>';
	 window.location.href = link_path+'buyer/buyer_address_book_delete/id/'+id;
	 }
	});
});
</script>