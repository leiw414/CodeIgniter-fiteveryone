
<div class="row">
	<div class="span8">
		<form class="form-horizontal" action='<?php echo base_url();?>index.php?/confirm_all' method="POST">
			<fieldset>
				<h2>Payment Confirmation</h2>
				<br/>
				<?php if (isset($new)): ?>
				<div class="control-group">
					<div class="controls" >
						<div><strong>Card Holder Name:　</strong><?php echo $name ?></div><br>
						<div><strong>Card Number:　</strong><?php echo $card_no; ?></div><br>
						<div><strong>Card Expiry Date:　</strong><?php echo $month . " ". $year; ?></div><br>
						<div><strong>CVV:　</strong><?php echo $cvv; ?></div><br>
						<div><strong>Card Type:　</strong><?php echo $card_type; ?></div><br>
						<div><strong>Phone Number:　</strong><?php echo $phone; ?></div><br>
						<div><strong>Billing Address:　</strong><?php echo $address1 . " " .  $address2 . " " . $city . " " . $state ." " . $zip; ?></div>
			
					</div>
				</div>
		
				<?php endif; ?>
				<?php if (isset($records)): ?>
				<?php foreach($records as $row): ?>
				<div class="control-group">
					<div class="controls" >
							<div><strong>Card Holder Name:　</strong><?php echo $row->name ?></div><br>
							<div><strong>Card Number:　</strong><?php echo $row->card_no; ?></div><br>
							<div><strong>Card Expiry Date:　</strong><?php echo $row->month . " ". $row->year; ?> </div><br>
							<div><strong>Card CVV:　</strong><?php echo $row->cvv; ?></div><br>
							<div><strong>Card Type:　</strong><?php echo $row->card_type; ?></div><br>
							<div><strong>Phone Number:　</strong><?php echo $row->phone; ?></div><br>
							<div><strong>Billing Address:　</strong><?php echo $row->address1 . " " .  $row->address2 . " " . $row->city . " " . $row->state ." " . $row->zip; ?>
					</div>
				</div>
		
					<?php endforeach;?>
				<?php endif; ?>
				<br/>
				<div class="control-group">
					<div class="controls">
					<button type="submit" class="btn btn-primary">Confirm</button>
					<button type="button" onclick="window.history.go(-1)" class="btn">Back</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div> <!-- .span8 -->
</div>

