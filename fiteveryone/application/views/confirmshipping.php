
<div class="row">
	<div class="span8">
		<form class="form-horizontal" action='<?php echo base_url();?>index.php?/checkcard' method="POST">
			<fieldset>
				<h2>Shipping Address Confirmation</h2>
				<br/>
				<?php if (isset($new)): ?>
					<div class="control-group">
						<div class="controls">
							<div><strong>Name:　</strong><?php echo $name ?></div><br>
							<div><strong>Address:　</strong><?php echo $address1 . " " .  $address2  . $city . " <div>　　　　　" . $state ." " . $zip . " " . $country . "</div>"; ?></div> <br>   
							<div><strong>Phone:　</strong><?php echo $phone; ?></div>
						</div>
					</div>
				<?php endif; ?>
				<?php if (isset($records)): ?>
				<?php foreach($records as $row): ?>
					<div class="control-group">
						<div class="controls">
							<div><strong>Name:　</strong><?php echo $row->name ?></div><br>
							<div><strong>Address:　</strong><?php echo $row->address1 . " " .  $row->address2  . $row->city . " <div>　　　　　" . $row->state ." " . $row->zip . " " . $row->country . "</div>"; ?></div> <br>   
							<div><strong>Phone:　</strong><?php echo $row->phone; ?></div>
						</div>
					</div>
				<?php endforeach;?>
				<?php endif; ?>
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

