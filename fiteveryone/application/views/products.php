
      <!-- End below navigation -->
      
      <!-- Begin content-->
      <section id="content" class="clearfix">
          
          <div id="collection" class="row">
            <div class="span12">
              <div class="breadcrumb clearfix">
				<span ><a href="<?php echo base_url();?>index.php?/main "  ><span >Home</span></a></span> 
				<span class="arrow-space">&#62;</span>
				<span >
				  
					<a href="<?php echo base_url();?>index.php?/products" title="products">Products</a>
				  
				</span>
				<span class="arrow-space">&#62;</span>
				<?php if(isset($nav)): ?>
				<strong><?php echo $nav ;?></strong>
				<?php endif ;?>
			 
				 <div style="float:right;" >
					<span >Category: </span>
					<span >
						<a href="<?php echo base_url();?>index.php?/products/black_tea" title="Black Tea">Black Tea</a>
					</span>
					<span class="or">&nbsp;|&nbsp;</span>
					<span >
						<a href="<?php echo base_url();?>index.php?/products/green_tea" title="Green Tea">Green Tea</a>
					</span>
					<span class="or">&nbsp;|&nbsp;</span>
					<span >
						<a href="<?php echo base_url();?>index.php?/products/tea_bag" title="Tea Bag">Tea Bag</a>
					</span>
				</div> 
			</div>
            </div> <!-- /.span12 -->
          </div> <!-- /.row -->
          
          <div class="row products masonry">
                
				<?php foreach ($products as $product): ?>
				<div class="product span4">
	  
				  <!-- Begin product image -->
				  <div class="image">

					<a href="<?php echo site_url("products/product/".$product->product_id); ?>">
					  
						<?php echo img(array(
							'src' => 'assets/img/' . $product->images,
							'class' => 'thumb',
							'alt' => $product->product_name
						)); ?>					  
					</a>
				  </div>
				  <!-- End product image -->
				  
				  <!-- Begin product description -->
				  <div class="details">
					<a href="<?php echo site_url("products/product/".$product->product_id); ?>">
					  <h4 class="title"><?php echo $product->product_name;?></h4>
					  <span class="price">$<?php echo $product->price ;?></span>
					</a>
				  </div>
				  <!-- End product description -->
	  
				</div>
				<?php endforeach; ?>
                
                




          </div> <!-- /#collection.row -->
          
      </section>
      <!-- End content-->
      
    </div>
  </div>
  <!-- End wrapper -->
  
  <!-- Begin footer -->
