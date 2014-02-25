
<div class="row-fluid">
	<div class="well">
    <ul class="nav nav-tabs">
      
      <li><a href="<?php echo base_url();?>index.php?/cart" >My shopping Cart</a></li>
      <li><a href="<?php echo base_url();?>index.php?/profile" >Profile</a></li>
      <li><a href="<?php echo base_url();?>index.php?/passwd" >Password</a></li>
      <li class="active"><a href="<?php echo base_url();?>index.php?/orderhistory" >Order History</a></li>
	  <li><a href="<?php echo base_url();?>index.php?/manageshipping" >Shipping Address</a></li>
	  <li><a href="<?php echo base_url();?>index.php?/managepayment" >Payment</a></li>
      
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade" id="cart">
	  </div>
      <div class="tab-pane fade" id="profile">
      </div>
      <div class="tab-pane fade" id="password">
      </div>
	  
      <div class="tab-pane active in" id="orderhistory">      
    	<form class="form-horizontal" action='' method="POST">
			<fieldset>
				<?php if(isset($records)) :  ?>
					<div class="span11">
						<table class="table table-condensed table-hover">
							<thead>
								<tr>
									<th>Order No</th>
									<th>Product Name</th>									
									<th>Order Date</th>
									<th>Price</th>
									<th>More Details</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($records as $row) : ?>
								<tr>
									
									<td><?php echo $row->order_no; ?></td>
									<td><?php echo $row->name; ?></td>
									<td><?php echo $row->order_date; ?></td>
									<td><?php echo $row->subtotal; ?></td>
									<td><?php echo anchor('orderhistory/viewmore/'.$row->order_no,'View', array('target' => '_blank'));  ?></td>
								</tr>
								<?php endforeach; ?>	
							</tbody>
						</table>
					</div>	
					<?php else:  ?>
					<br/>
					<h4> <?php echo "No Order History!!" ; ?> </h4>
					<?php endif; ?>	
				
				<?php if(isset($more)) :  ?>
					<div class="span11">
						<table class="table table-condensed table-hover">
							<thead>
								<tr>
									<th>Order No</th>
									<th>Product Name</th>
									<th>Order Date</th>
									<th>Price</th>
									<th>Details</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($records as $row) : ?>
								<tr>
									
									<td><?php echo $row->order_no; ?></td>
									<td><?php echo $row->name; ?></td>
									<td><?php echo $row->order_date; ?></td>
									<td><?php echo $row->price; ?></td>
									<td><?php echo anchor('orderhistory/viewmore/'.$row->order_no,'View');  ?></td>
								</tr>
								<?php endforeach; ?>	
							</tbody>
						</table>
					</div>	
				<?php endif; ?>	
			<fieldset>
		</form>
      </div>
	</div>  
</div>

