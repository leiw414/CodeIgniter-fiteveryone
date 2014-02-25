
      <div class="row-fluid">
            <div class="well">
              <ul class="nav nav-tabs">
                <li><a href="<?php echo base_url();?>index.php?/login/" >Login</a></li>
                <li class="active"><a href="<?php echo base_url();?>index.php?/login/signup" >Create Account</a></li>
              </ul>
              <div  class="tab-content">
                <div class="tab-pane fade" id="login">                 
                </div>
               
                <div class="tab-pane active in" id="create">
                  <form class="form-horizontal" action='<?php echo base_url();?>index.php?/login/create_member' method="POST">
                    <fieldset>
						<div id="legend">
								<legend class="">New Customer</legend>
						</div> 
						<?php if (isset($error)): ?>
						<div class="alert alert-error">
						<a class="close" data-dismiss="alert" href="#">×</a>Email Address already exists!
						</div>
						<?php endif; ?>
						<div class="control-group">
						  <!-- E-mail -->
						  <label class="control-label" for="email">E-mail</label> 
						  <div class="controls">
							<input type="text" id="email" name="email" class="input-xlarge"> <span class="red">*</span>
						  </div>
						</div>
 
						<div class="control-group">
						  <!-- Password-->
						  <label class="control-label" for="password">Password</label>
						  <div class="controls">
							<input type="password" id="password" name="passwd" class="input-xlarge"> <span class="red">*</span>
							<p class="help-block">Password should be at least 6 characters</p>
						  </div>
						</div>
 
						<div class="control-group">
						  <!-- Password -->
						  <label class="control-label"  for="password_confirm">Retype Password</label>
						  <div class="controls">
							<input type="password" id="password_confirm" name="passwd2" class="input-xlarge"> <span class="red">*</span>
						  </div>
						</div>
						<div class="control-group">
							<label for="fname" class="control-label">First Name</label>
							<div class="controls">
							<input name="fname" type="text" value="" id="fname"> <span class="red">*</span>
							</div>
						</div>
						<div class="control-group">
							<label for="lname" class="control-label">Last Name</label>
							<div class="controls">
							<input name="lname" type="text" value="" id="last_name"> <span class="red">*</span>
							</div>
						</div>
						<div class="control-group">
							<label for="tel1" class="control-label">	
								Contact Phone
							</label>
							<div class="controls"><input name="tel1" type="text" value="" id="tel">
							</div>
						</div>	
						<div class="control-group">
							<div class="controls">
								<p class="help-block"><span class="red">*</span> required field</p>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<div id="result" ><?php echo validation_errors('<p class="error"> *'); ?> </div>
							</div>	
						</div>
						<div class="control-group">
						  <!-- Button -->
						  <div class="controls">
							<button class="btn btn-success" id="register">Register</button>
						  </div>
						</div>
					</fieldset>
                  </form>
                </div>
            </div>
          </div>
        </div>
		

       