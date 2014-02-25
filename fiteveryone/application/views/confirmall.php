
<div class="row-fluid">
            <div class="well">
				<div class="row-fluid">
		<form class="form-horizontal" action='<?php echo base_url();?>index.php?/checkout' method="POST">
			<fieldset>
				<h2>Review Your Order</h2>
				<br/>
				<div class="container">
					<div class="row-fluid">
						<div class="span1">
						</div>
						<div class="span5">
							<strong>Shipping to:　</strong>
							<div><?php echo $this->session->userdata('shipping_name') . "<div>" . $this->session->userdata('shipping_address1') . " " .  $this->session->userdata('shipping_address2') . "</div><div> " . $this->session->userdata('shipping_city') . " </div><div>" . $this->session->userdata('shipping_state') ." " . $this->session->userdata('shipping_zip')  . " " . $this->session->userdata('shipping_country') . "</div><div>Phone: " . $this->session->userdata('shipping_phone') . "</div>"; ?></div>       
						</div>
		
						<div class="span5">
							<div><strong>Payment: </strong><?php echo $this->session->userdata('payment_card_type') . "　" ?><strong>ending in: </strong><?php echo $this->session->userdata('payment_last_four')  ?></div>
							<div><strong>Billing address:　</strong><?php echo "<div>" . $this->session->userdata('payment_address1')  . " " .  $this->session->userdata('payment_address2')  . "</div><div> " . $this->session->userdata('payment_city')  . " </div><div>" . $this->session->userdata('payment_state')  ." " . $this->session->userdata('payment_zip')  . " " . $this->session->userdata('payment_country')  . "</div><div>Phone: " . $this->session->userdata('payment_phone')  . "</div>"; ?></div>       
						</div>
						
					</div>
				</div>
				<br/>
				<?php if ($cart = $this->cart->contents()): ?>
					
						<table class="table table-condensed table-hover">
							<thead>
								<tr>
									<th>Product Name</th>
									<th>Order Name</th>
									<th>Length</th>
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
									<td><?php echo $item['qty']; ?></td>
									<td><?php echo $item['price']; ?></td>
									<td>$<?php echo $item['subtotal']; ?></td>
								</tr>
							<?php endforeach; ?>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>　</td>
								</tr>							
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td>Subtotal</td>
									<td>$<strong><?php echo $this->cart->total(); ?></strong></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td>Tax</td>
									<td>$<strong>3</strong></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td>Shipping & Handling</td>
									<td>$<strong>3</strong></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td><strong>Total Estimate </strong></td>
									<td>$<strong><?php echo $this->cart->total() + 3 + 3 ; ?></strong></td>
								</tr>
								</tbody>
						</table>
					<?php endif;?>
				<div class="control-group">
					
					<button type="submit" class="btn btn-primary">Confirm</button>
					<button type="button" onclick="window.history.go(-1)" class="btn">Back</button>
					
				</div>
			</fieldset>
		</form>
		</div>
	</div>	<!-- .span8 -->
</div>

