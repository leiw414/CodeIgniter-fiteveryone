
<div class="row-fluid">
<div class="well">
    <ul class="nav nav-tabs">
      
      <li ><a href="<?php echo base_url();?>index.php?/cart" >My shopping Cart</a></li>
      <li class="active"><a href="<?php echo base_url();?>index.php?/profile" >Profile</a></li>
      <li><a href="<?php echo base_url();?>index.php?/passwd" >Password</a></li>
      <li><a href="<?php echo base_url();?>index.php?/orderhistory" >Order History</a></li>
      <li><a href="<?php echo base_url();?>index.php?/manageshipping" >Shipping Address</a></li>
	  <li><a href="<?php echo base_url();?>index.php?/managepayment" >Payment</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade" id="cart">
      </div>
      <div class="tab-pane active in" id="profile">
			<?php if (isset($records)): ?>
			<form id="tab" action="<?php echo base_url();?>index.php?/profile/pro_update" method="post">
			<?php if (isset($success)): ?>
							<div class="alert alert-error">
							<a class="close" data-dismiss="alert" href="#"></a>Your profile has been updated!
							</div>
			<?php endif; ?>
			<?php foreach($records as $row): ?>
			<label>First Name</label>
            <input type="text" value="<?php echo $row->fname; ?>" class="input-xlarge" name="fname"> *
			<label>Last Name</label>
            <input type="text" value="<?php echo $row->lname; ?>" class="input-xlarge" name="lname">  *
			<label>Contact Phone Number</label>
            <input type="text" value="<?php echo $row->tel1; ?>" class="input-xlarge" name="tel1">
          	<p class="help-block">* required field</p>
			<?php echo validation_errors('<p class="error"> *'); ?>
			<div> 
				<button class="btn btn-primary">Update</button>
        	</div>
			<?php endforeach; ?>
			 </form>
			 <?php endif; ?>
			 
			 
			 <?php if (isset($new)): ?>
			<form id="tab" action="<?php echo base_url();?>index.php?/profile/pro_update" method="post">
			<?php if (isset($success)): ?>
							<div class="alert alert-error">
							<a class="close" data-dismiss="alert" href="#"></a>Your profile has been updated!
							</div>
			<?php endif; ?>
	
			<label>First Name</label>
            <input type="text" value="" class="input-xlarge" name="fname"> *
			<label>Last Name</label>
            <input type="text" value="" class="input-xlarge" name="lname">  *
			<label>Contact Phone Number</label>
            <input type="text" value="" class="input-xlarge" name="tel1">
          	<p class="help-block">* required field</p>
			<?php echo validation_errors('<p class="error"> *'); ?>
			<div> 
				<button class="btn btn-primary">Update</button>
        	</div>
			 </form>
			 <?php endif; ?>
       
      </div>
      <div class="tab-pane fade" id="password">
    	<form id="tab2" action="passwd/update" method="post">
        	<label>New Password</label>
        	<input type="password" class="input-xlarge" value="******" name="passwd" >
        	<div>
        	    <button class="btn btn-primary">Update</button>
        	</div>
    	</form>
      </div>
      <div class="tab-pane fade" id="orderhistory">
		<form>
    	<button class="btn btn-primary">View Past Order</button>
		</form>
      </div>
	</div>  
</div>

