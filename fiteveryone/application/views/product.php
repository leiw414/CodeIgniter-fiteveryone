
      
      <!-- End below navigation -->
      
      <!-- Begin content-->
      <section id="content" class="clearfix">
          
          <div id="product" class="banane-kokosnuss">
  
  <div class="row clearfix">
    
    <!-- Begin breadcrumb -->
    <div class="span12">
      <div class="breadcrumb clearfix">
		<span ><a href="<?php echo base_url();?>index.php?/main "  ><span >Home</span></a></span> 
		<span class="arrow-space">&#62;</span>
		<span >
			<a href="<?php echo base_url();?>index.php?/products" title="">Products</a>
		</span>
        <span class="arrow-space">&#62;</span>
		<?php foreach ($product as $item): ?>
        <strong><?php echo $item->product_name ;?></strong>
      </div>
    </div>
    <!-- End breadcrumb -->
    
    <!-- Begin product photos -->
    <div class="span6">
      
      <!-- Begin featured image -->
      <div class="image featured">

		<a href="<?php echo base_url("assets/img/".$item->images); ?>" class="cloud-zoom" rel="position: 'inside', showTitle: 'false'" id="placeholder">
		<?php echo img(array(
				'src' => 'assets/img/' . $item->images,
				'class' => '',
				'alt' => $item->product_name
			)); ?>	
        </a>
        
      </div>
      <!-- End product image -->
 
    </div>
    <!-- End product photos -->

    <!-- Begin product options -->
    <div class="span6">
		
      <h1 class="title"><?php echo $item->product_name ;?></h1>
      
      <div class="purchase">
        <div style="float:right;" >
			<span >Category: </span>
			<span >
				<?php echo $item->category ;?>
			</span>
		</div>
        <h2 class="price" id="price-preview">$<?php echo $item->price ;?></h2>
        <!-- <span> <a href="/pages/versandkosten">Size Chart</a></span><br /><br />-->
			<select name="info" id="info" >
			<option value="">Information</option>
			<option value="1">Degree</option>
			<option value="2">Benefits</option>
			</select>
		<br>
		<div id="kong" class="hidden">
			<div id="benefits" class="hidden">
			<table border='1'>
			<tr>
				<th>Category</th>
				<th>Degree</th>
			</tr>

			<tr>
				<td>Black Tea</td>
				<td>99 °C (210 °F)</td>
			 </tr>
			 <tr>
				<td>Green Tea</td>
				<td>80 to 85 °C (176 to 185 °F)</td>
			 </tr>
			 <tr>
				<td>Tea Bag</td>
				<td>80 to 85 °C (176 to 185 °F)</td>
			 </tr>
			</table>
			</div>
			<div id="weight" class="hidden">
			<table border='1'>
			<tr>
				<th>Category</th>
				<th>Benefits</th>
			</tr>

			<tr>
				<td>Black Tea</td>
				<td>Refresh, Enhance immunity</td>
			 </tr>
			 <tr>
				<td>Green Tea</td>
				<td>Release pressure, contain magnesium</td>
			 </tr>
			 <tr>
				<td>Tea Bag</td>
				<td>Convenient</td>
			 </tr>
			</table>
			</div>
		</div>
      </div>
            
      <form id="add-item-form" action="<?php echo base_url();?>index.php?/order/add" method="post" class="variants clearfix">
        <div hidden>
			<label >product_id</label>
			<input type="text" name="product_id"  value="<?php echo $item->product_id ;?>" >
		</div>
        <div class="product-options">
          
          <div class="select clearfix">
			<?php if ($item->option_name): ?>
			
            <label><?php echo $item->option_name ?></label>
            <select id="product-select" name='size' class="input-small">
              
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              
            </select>
			<?php endif ;?>
          </div>
          
          
          <div class="selector-wrapper">
            <label>Quantity</label>
            <input id="quantity" min="1" type="number" name="quantity" value="1" class="tc item-quantity" />
          </div>
          
          
          <div class="purchase-section multiple">
            <div class="purchase">
              
              <input type="submit" id="add-to-cart" class="btn" name="add" value="Add to Cart" />
              
            </div>
          </div>
          
        </div>
        
      </form>
    
    </div>
    <!-- End product options -->
    
  </div>
  <?php endforeach ;?>
  

  
  
  <!-- Begin related product -->
  
  
</div> 

<div style="display:none" id="preloading">

</div>

          
      </section>
      <!-- End content-->
      
    </div>
  </div>
  <!-- End wrapper -->
  
  <!-- Begin footer -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>

	<script>
	$( "#info" ).change(function() {
		$( "#info option:selected" ).each(function() {
		  if ($( this ).text()=="Degree"){
			
			$("#kong").removeClass("hidden");
			$("#weight").addClass("hidden");
			$("#benefits").addClass("hidden");
			$("#benefits").removeClass("hidden");
			 
		  }
		  if ($( this ).text()=="Benefits"){
			
			$("#kong").removeClass("hidden");
			$("#benefits").addClass("hidden");
			$("#weight").removeClass("hidden");
			 
		  }
		   if ($( this ).text()=="Information"){
			
			$("#kong").addClass("hidden");
			
		  }
		});
	  })
	  .trigger( "change" );
	</script>