
       <div class="container">
			<form class="form-horizontal" action='<?php echo base_url();?>index.php?/order/add' method="POST">
				<fieldset>
				<h3>Product Name</h3>	
				  <select name="prod_name" id="Productsname">
					<?php if (isset($pname)): ?>
					<?php foreach ($pname as $row): ?>
					<?php echo "<option value=$row->id>". "$row->name"."</option>"; ?>
					<?php endforeach; ?>				
					<?php endif; ?>
					<option value=""></option>
					<?php foreach ($products as $product): ?>
					<?php echo "<option value=$product->id>". "$product->name"."</option>"; ?>
					<?php endforeach; ?>
				  </select>
				 <h3>Order Title</h3>
				 <input id="opt_name" name="opt_name" type="text" placeholder="Please name your order for easier future recognition." class="input-xxlarge">
				 <p class="help-block"></p>
				 <h3>Gene Sequence</h3>
				 <textarea id="gene_seqence" name="gene_seq"  placeholder="Gene sequence" rows="7" class="span6"></textarea>
				  <?php echo validation_errors('<p class="error"> *'); ?>
				 <br>
				 <div class="controls">
				 <button id="contact-submit" type="submit" class="btn btn-primary input-medium pull-right"  value="test">Add to Cart</button>
				 </div>
				</fieldset>
			</form>
        </div>

