
      
      <div class="row-fluid">
            <div class="well">
              <ul class="nav nav-tabs">
			  
                <li class="active"><a href="<?php echo base_url();?>index.php?/login" >Login</a></li>
                <li><a href="<?php echo base_url();?>index.php?/login/signup" >Create Account</a></li>
				
              </ul>
              <div  id="myTabContent"class="tab-content">
                <div class="tab-pane active in" id="login">
				
                  <form class="form-horizontal" action='<?php echo base_url();?>index.php?/login/validate_credentials' method="POST">
                    <fieldset>
                      <div id="legend">
                        <legend class="">Login</legend>
                      </div>  
					  
					<?php if (isset($incorrect)): ?>
						<div class="alert alert-error">
						<a class="close" data-dismiss="alert" href="<?php echo base_url();?>index.php?/login">×</a>Incorrect Username or Password!
						</div>
					<?php endif; ?>
					<?php if (isset($activation)): ?>
						<div class="alert alert-error">
						<a class="close" data-dismiss="alert" href="<?php echo base_url();?>index.php?/login">×</a>Account has not been activated!
						</div>
					<?php endif; ?>
					<?php if (isset($login_first)): ?>
						<div class="alert alert-error">
						<a class="close" data-dismiss="alert" href="<?php echo base_url();?>index.php?/login">×</a>You should sign in first!
						</div>
					<?php endif; ?>
					
                      <div class="control-group">
                        <!-- Username -->
                        <label class="control-label"  for="customer_id">Email</label>
                        <div class="controls">
                          <input type="text" id="username" name="email" placeholder="" class="input-xlarge">
                        </div>
                      </div>
					  
                      <div class="control-group">
                        <!-- Password-->
                        <label class="control-label" for="password">Password</label>
                         
                        <div class="controls">
                          <input type="password" id="password" name="passwd" placeholder="" class="input-xlarge">
                        <a href="<?php echo base_url();?>index.php?/login/pwforget" >Forgot your password?</a>						
                        </div> 
                      </div>
					  
                      <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                          <button class="btn btn-success" onClick="checkuser()" >Login</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>                 
                </div>
            </div>
          </div>

        