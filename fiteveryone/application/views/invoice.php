
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
    
  </head>
  <body>

    <div class="container">
<div class="row-fluid">
    <div class="well">
		<div class="row-fluid">
			<form class="form-horizontal" action='<?php echo base_url();?>index.php?/checkout' method="POST">
				<fieldset>
					<h2>Order Confirmation</h2>
					<br/>
					<div class="container">
						<div class="row-fluid">
							<div class="span4">
								<?php if (isset($sp)): ?>
								<?php foreach($sp as $row): ?>
										<strong>Shipping to:　</strong>
										<div><?php echo $row->s_name . "<div>" . $row->s_address1 . " " .  $row->s_address2 . "</div><div> " . $row->s_city . " </div><div>" . $row->s_state ." " . $row->s_zip . " " . $row->s_country . "</div><div>Phone: " . $row->s_phone . "</div>"; ?></div>       	
							</div>
			
							<div class="span4">
									<div><strong>Payment: </strong><?php echo $row->p_card_type . "　" ?><strong>ending in: </strong><?php echo $row->p_last_four ?></div>
									<div><strong>Billing address:　</strong><?php echo "<div>" . $row->p_address1 . " " .  $row->p_address2 . "</div><div> " . $row->p_city . " </div><div>" . $row->p_state ." " . $row->p_zip . " " . $row->p_country . "</div><div>Phone: " . $row->p_phone . "</div>"; ?></div>       
							</div>
							<div class="span3">
								<div><strong>Order No:</strong><?php echo " ". $row->order_no ; ?></div>
								<div><strong>Order Date:</strong><?php echo "　" . $row->order_date?></div>
							</div>
						</div>
					</div>
					<br/>						
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
									<?php if (isset($item)): ?>
									<?php foreach($item as $rows): ?>
									<tr>
										<td><?php echo $rows->name; ?></td>
										<td><?php echo $rows->option; ?></td>
										<td><?php echo $rows->qty; ?></td>
										<td><?php echo $rows->unit_price; ?></td>
										<td>$<?php echo $rows->subtotal ; ?></td>
									</tr>
									<?php endforeach;?>
									<?php endif; ?>
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
										<td>$<strong><?php echo $row->total?></strong></td>
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
										<td>$<strong><?php echo $row->total + 6 ;?></strong></td>
									</tr>
									</tbody>
							</table>
				</fieldset>
			</form>
			<?php endforeach;?>
			<?php endif; ?>
		</div>
	</div>	<!-- .span8 -->
</div>

			
</div><!-- /container -->
            <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/js/vendor/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>

  </body>
</html>

