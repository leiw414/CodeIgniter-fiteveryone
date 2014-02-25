
<div class="row-fluid">
<div class="well">
    <ul class="nav nav-tabs">
      
		<li class="active"><a href="<?php echo base_url();?>index.php?/cart" >My shopping Cart</a></li>
		<li ><a href="<?php echo base_url();?>index.php?/profile" >Profile</a></li>
		<li><a href="<?php echo base_url();?>index.php?/passwd" >Password</a></li>
		<li><a href="<?php echo base_url();?>index.php?/orderhistory" >Order History</a></li>
		<li><a href="<?php echo base_url();?>index.php?/manageshipping" >Shipping Address</a></li>
		<li><a href="<?php echo base_url();?>index.php?/managepayment" >Payment</a></li>
      
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="cart">
      
    	<form class="form-horizontal" action='<?php echo base_url();?>index.php?/checkshipping' method="POST">
						 <fieldset>
						  <h2>Order Summary</h2>
							<?php if ($cart = $this->cart->contents()): ?>
								<div class="span11">
										<table class="table table-condensed table-hover">
										<thead>
											<tr>
												<th>Product Name</th>
												<th>Year</th>
												<th>Quantity</th>
												<th>Unit Price</th>
												<th>Subtotal</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
										<?php foreach ($cart as $item): ?>
											<tr>
												<td><?php echo $item['name']; ?></td>
												<td><?php echo $item['option']; ?></td>
												<td><?php echo $item['qty'];?></td>
												<td><?php echo $item['price']; ?></td>
												<td>$<?php echo $item['subtotal']; ?></td>
												<td>
													<?php echo anchor('order/remove/'.$item['rowid'],'X'); ?>
												</td>
											</tr>
										<?php endforeach; ?>
										<tr>
											<td><strong>Total</strong></td>
											<td></td>
											<td></td>
											<td></td>
											<td>$<strong><?php echo $this->cart->total(); ?></strong></td>
										</tr>
										</tbody>
										</table>
									<div >
										<button class="btn btn-block btn-success btn-large" >Place Order</button>
									</div>
								</div>
								<?php else:  ?>
								<br/>
								<h4> <?php echo "your shopping cart is empty!!" ; ?> </h4>
							<?php endif; ?>
						</fieldset>
					 </form>
      </div>
      <div class="tab-pane fade" id="profile">

      </div>
      <div class="tab-pane fade" id="password">
 
      </div>
      <div class="tab-pane fade" id="orderhistory">
	
      </div>
	</div>  
</div>

