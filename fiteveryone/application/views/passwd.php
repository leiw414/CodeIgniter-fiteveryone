
<div class="row-fluid">
<div class="well">
    <ul class="nav nav-tabs">
      
      <li><a href="<?php echo base_url();?>index.php?/cart" >My shopping Cart</a></li>
      <li><a href="<?php echo base_url();?>index.php?/profile" >Profile</a></li>
      <li class="active"><a href="<?php echo base_url();?>index.php?/passwd" >Password</a></li>
      <li><a href="<?php echo base_url();?>index.php?/orderhistory" >Order History</a></li>
	  <li><a href="<?php echo base_url();?>index.php?/manageshipping" >Shipping Address</a></li>
	  <li><a href="<?php echo base_url();?>index.php?/managepayment" >Payment</a></li>
      
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade" id="cart">
      
      </div>
      <div class="tab-pane fade" id="profile">
        
      </div>
      <div class="tab-pane active in" id="password">
    	<form id="tab2" action="<?php echo base_url();?>index.php?/passwd/update" method="post">
				<?php if (isset($error)): ?>
							<div class="alert alert-error">
							<a class="close" data-dismiss="alert" href="#">×</a>Incorrect Password!
							</div>
				<?php endif; ?>
				<?php if (isset($success)): ?>
							<div class="alert alert-error">
							<a class="close" data-dismiss="alert" href="#"></a>Your password has been updated!
							</div>
				<?php endif; ?>
				<div class="control-group">
						  <!-- password -->
						  <label class="control-label" for="old_passwd">Old Password</label>
						  <div class="controls">
							<input type="password" id="old_passwd" name="old_passwd"  class="input-xlarge">
						  </div>
						</div>
 
						<div class="control-group">
						  <!-- Password-->
						  <label class="control-label" for="password">New Password</label>
						  <div class="controls">
							<input type="password" id="password" name="new_passwd" class="input-xlarge">
							<p class="help-block">Password should be at least 6 characters</p>
						  </div>
						</div>
 
						<div class="control-group">
						  <!-- Password -->
						  <label class="control-label"  for="password_confirm">Retype Password</label>
						  <div class="controls">
							<input type="password" id="password_confirm" name="new_passwd2" class="input-xlarge">
						  </div>
						</div>
					 <?php echo validation_errors('<p class="error"> *'); ?>
				<div>
					<button class="btn btn-primary">Update</button>
				</div>
    	</form>
      </div>
      <div class="tab-pane fade" id="orderhistory">
      </div>
	</div>  
</div>
