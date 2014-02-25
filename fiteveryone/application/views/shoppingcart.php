
<div class="row-fluid">
            <div class="well">
				<div class="row-fluid">
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
									<button class="btn btn-block btn-success btn-large" >Place order</button>
								</div>
								<?php else:  ?>
								<br/>
								<h4> <?php echo "your shopping cart is empty!!" ; ?> </h4>
							<?php endif; ?>
						</fieldset>
					 </form>
            </div>
		</div>
	</div>
