
<div class="row">
	<div class="span8">
		<form class="form-horizontal" action='<?php echo base_url();?>index.php?/checkshipping/chooseshipping' method="POST">
			<fieldset>
				<h2>Choose Your Shipping Address</h2>
				<br/>
					<div class="control-group">
						<div class="controls">
						<?php foreach($records as $row): ?>
							<label class="radio">
								<input name="shipping_id" type="radio" value="<?php echo $row->shipping_id; ?>" id="inlineCheckbox1" > <?php echo "<div>" . $row->address1 . " " .  $row->address2 . "</div><div> " . $row->city . " </div><div>" . $row->state ." " . $row->zip . "</div><div>" . $row->country . "</div><div>Phone: " . $row->phone . "</div>"; ?>
							</label> 
						<?php endforeach;?>
						</div>
					</div>	
					<?php echo validation_errors('<p class="error"> *'); ?>
					<br>
					<div class="control-group">
						<div class="controls">
                        <!-- Button -->
                          <button type="submit" name="sbm" value="choose"  class="btn btn-success">Continue</button>
						  <button type="submit" name="sbm" value="add"  class="btn">Add a New Address</button>
						</div>
					</div>
				</fieldset>
		</form>	
   </div>
</div><!-- /.row -->


