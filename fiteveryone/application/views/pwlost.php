
      
      <div class="row-fluid">
          <div class="modal-body">
            <div class="well">
              <ul class="nav nav-tabs">
                <li class="active"><a href="" data-toggle="tab">Forgot your password</a></li>
              </ul>
              <div  class="tab-content">
                <div class="tab-pane active in" id="pwlost">
                  <form class="form-horizontal" action='<?php echo base_url();?>index.php?/login/sendpw' method="POST">
                    <fieldset>    
					<?php if (isset($error)): ?>
						<div class="alert alert-error">
						<a class="close" data-dismiss="alert" href="#">×</a>This Email address havs not been registered!
						</div>
						<?php endif; ?>
                      <div class="control-group">
                        <!-- Username -->
                        <label class="control-label"  for="email"> Your e-mail address:</label>
                        <div class="controls">
                          <input type="text" id="email" name="email" placeholder="" class="input-xlarge">  
      					</div>
                      </div>
						<?php echo validation_errors('<p class="error"> *'); ?>
                         <button id="pwsend" type="submit" class="btn btn-primary pull-right" >Send</button>
                    </fieldset>
                  </form>                
                </div>
               

            </div>
          </div>
        </div>
        </div>

        