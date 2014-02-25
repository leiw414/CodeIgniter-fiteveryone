
<div class="row">
	<div class="span8">
		<form class="form-horizontal" action='<?php echo base_url();?>index.php?/checkcard/choosecard' method="POST">
			<fieldset>
				<h2>Choose Your Card</h2>
				<br/>
					<div class="control-group">
						<label for="phone" class="control-label">	
							End With
						</label>
						<div class="controls">
						<?php foreach($records as $row): ?>
							<label class="radio">
								<input name="card_id" type="radio" value="<?php echo $row->card_id; ?>" id="inlineCheckbox1" > <?php echo $row->last_four . " " . $row->card_type; ?>
							</label> 
						<?php endforeach;?>
						</div>
					</div>
					<?php echo validation_errors('<p class="error"> *'); ?>
					<div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                          <button type="submit" name="sbm" value="choose"  class="btn btn-success">Continue</button>
						  <button type="submit" name="sbm" value="add"  class="btn">Add a New Card</button>
                        </div>
                    </div>
					
				</fieldset>
		</form>	
   </div>
</div><!-- /.row -->


