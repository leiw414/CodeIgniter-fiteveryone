
<div class="row-fluid">
<div class="well">
    <ul class="nav nav-tabs">
      
      <li><a href="<?php echo base_url();?>index.php?/cart" >My shopping Cart</a></li>
      <li><a href="<?php echo base_url();?>index.php?/profile" >Profile</a></li>
      <li><a href="<?php echo base_url();?>index.php?/passwd" >Password</a></li>
      <li><a href="<?php echo base_url();?>index.php?/orderhistory" >Order History</a></li>
	  <li><a href="<?php echo base_url();?>index.php?/manageshipping" >Shipping Address</a></li>
	  <li class="active"><a href="<?php echo base_url();?>index.php?/managepayment" >Payment</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade" id="cart">
      
      </div>
      <div class="tab-pane fade" id="profile">
        
      </div>
      <div class="tab-pane fade" id="password">
 
      </div>
      <div class="tab-pane fade" id="orderhistory">
      </div>
	  <div class="tab-pane fade" id="manageship">
      </div>
	  <div class="tab-pane active in" id="managepayment">
	  <?php if (isset($records)): ?>
	  <?php foreach($records as $row): ?>
	  <form id="tab" action="<?php echo base_url();?>index.php?/managepayment/del_edit" method="post">
			<div class="span4">
				<div hidden>
					<label >Card_id</label>
					<input type="text" name="card_id"  class="input-xlarge" value="<?php echo $row->card_id ;?>" >
				</div>
				<div hidden>
					<label >Card_type</label>
					<input type="text" name="card_type"  class="input-xlarge" value="<?php echo $row->card_type ;?>" >
				</div>
				<div class="well">
						<div><strong>Type:　</strong><?php echo $row->card_type ?></div>
						<div><strong>Number:　</strong><?php echo $row->card_no ?></div>
						<div><strong>Exp. Date:　</strong><?php echo $row->month . " ". $row->year; ?>	</div>
						<div><strong>Holder:　</strong><?php echo $row->name ;?></div>
						<div><strong>Billing address:　</strong><?php echo "<div>" . $row->address1 . " " .  $row->address2 . "</div><div> " . $row->city . " </div><div>" . $row->state ." " . $row->zip . "</div><div>" . $row->country . "</div><div>Phone: " . $row->phone . "</div>"; ?></div>       
					<div class="form-actions">
						<button type="submit" name= "sbm" value="edit" class="btn">Edit</button>
						<button type="submit" name= "sbm" value="delete" onclick="return confirm('Are you sure?')"class="btn">Delete</button>
					</div>
				</div>
			</div>	
      </form>
	  <?php endforeach; ?>
	  <?php else:  ?>
			<br/>
			<h4> <?php echo "No Saved Payment Information!!" ; ?> </h4>
	  <?php endif; ?>
      </div>
	  <div class="tab-pane fade" id="pending">
      </div>
	</div>  
</div>
