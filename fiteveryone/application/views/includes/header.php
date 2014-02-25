<!doctype html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="" />
  <meta name="author" content="" />
  
  
  <title>Cha</title>
  
 

  <link href="<?php echo base_url();?>assets/css/1.css" rel="stylesheet" type="text/css"  media="all"  />
  
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo:300,400,700">
  
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo:300,400,700">
   
	<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
  
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

  
</head>

<body>
  <div id="fb-root"></div>
  
  <!-- Begin toolbar -->
  <div class="toolbar-wrapper">
    <div class="toolbar clearfix">
      <div class="clearfix">
        <ul class="unstyled span12">
          
			<li><span class="icon-cart"></span><a href="<?php echo base_url();?>index.php?/cart" class="cart" title="Warenkorb">Shopping Cart (<?php echo $this->cart->total_items() ;?>)</a></li>
	
    <li>
	 <?php if( $this->session->userdata('login_state')):?>
		<a href="<?php echo base_url();?>index.php?/profile" id="customer_login_link">My Account</a>
      
		<span class="or">&nbsp;|&nbsp;</span>
		<a href="<?php echo base_url();?>index.php?/login/logout" id="customer_register_link">Log out</a>

     <?php else: ?>
		<a href="<?php echo base_url();?>index.php?/login" id="customer_login_link">Login</a>
      
		<span class="or">&nbsp;|&nbsp;</span>
		<a href="<?php echo base_url();?>index.php?/login/signup" id="customer_register_link">Sign up</a>

	 <?php endif; ?>
      
    </li>          
        </ul>
      </div>
    </div>
  </div>
  <!-- End toolbar -->
  
  <!-- Begin wrapper -->
  <div id="transparency" class="wrapper">
    <div class="row">      
      <!-- Begin right navigation -->
      
      <!-- End right navigation -->
      
      <!-- Begin below navigation -->
      
      <div class="span12 clearfix">
        <div class="logo">
          
          <a href="<?php echo base_url();?>index.php?/main"><img src="<?php echo base_url();?>assets/img/logo.jpg" alt="" /></a>
          
        </div> 
      </div> 
      
      <section id="nav" class="row">
        <div class="span12">
          <nav class="main">
            

			<ul class="horizontal unstyled clearfix">
			 
			  <li>
				<a href="<?php echo base_url();?>index.php?/main" class=" "><span>Home</span></a>
				  
			  </li>

			  <li>
				<a href="<?php echo base_url();?>index.php?/products" class=""><span>Products</span></a>    
				
			  </li>
			  
			  <li>
				<a href="<?php echo base_url();?>index.php?/email" class=""><span>Contact Us</span></a>
				  
			  </li>

			  <li>
				<a href="<?php echo base_url();?>index.php?/company" class=""><span>About Us</span></a>
				 
			  </li>
			  
			  
			</ul>
          </nav> <!-- /.main -->
          <nav class="mobile clearfix">
            
			<select name="main_navigation" id="main_navigation" class="fl">
			  
				<option value="" selected="selected"></option>
				
				<option value="<?php echo base_url();?>index.php?/main" >Home</option>
			  
				<option value="<?php echo base_url();?>index.php?/products">Products</option>

				<option value="<?php echo base_url();?>index.php?/email">Contact Us</option>
			  
				<option value="<?php echo base_url();?>index.php?/company">About Us</option>
			  
			</select>
          </nav> <!-- /.mobile --> 
        </div> 
      </section> 