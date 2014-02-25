
<div class="hero-unit center">
	<form id="tab" action="<?php echo base_url();?>index.php?/login/activate" method="post">
			<div class="hidden">
			<label>Email:</label>
            <input type="text" value="<?php echo $email; ?>" name="email" > 
			</div>
			<div><strong>Email:　</strong><?php echo $email; ?></div><br>
		<div>
			<button class="btn btn-primary">Active</button>
		</div>
    <br />
    </form>
  </div>
  