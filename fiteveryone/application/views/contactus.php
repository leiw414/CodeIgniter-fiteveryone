
		<div class="container">
		
			<div id="legend">
                <legend class="">Contact Us</legend>
            </div>  
	        
			<div id="contact_form">

				<?php 
				echo form_open('contact/submit');
				echo '<div class="control-group"><label class="control-label" for="username">Your Name  <span class="red">*</span></label><div class="controls">';		
				echo form_input('name', '', 'id="name"','class="input-text"');
				echo '</div></div>';
				echo '<div class="control-group"><label class="control-label" for="useremail">Your Email Address<span class="red">*</span></label><div class="controls">';
				echo form_input('email', '', 'id="email"');
				echo '</div></div>';
				echo '<div class="control-group"><label class="control-label" for="subject">Subject <span class="red">*</span></label><div class="controls">';
				echo form_input('subject', '', 'id="subject"');
				echo '</div></div>';
				$data = array('name' => 'message', 'cols' => 70, 'rows' => 8, 'class' => 'input-xxlarge' );
				echo '<div class="control-group"><label class="control-label" for="message">Message</label><div class="controls">';
				echo form_textarea($data, '', 'id="message"');
				echo '</div></div>';
				echo '<div class="control-group">
							<div class="controls">
								<p class="help-block"><span class="red">*</span> required field</p>
							</div>
						</div>';
				echo '<div class="control-group">
							<div class="controls">
								<div id="result" > </div>
							</div>	
						</div>';
				echo '<div class="controls">';
				echo form_submit('submit', 'Submit', 'id="csubmit"');
				echo '</div>';
				echo form_close();
				?>

			</div>
			
<script type="text/javascript">
$('#csubmit').click(function() {
	
	var name = $('#name').val();
	var email = $('#email').val();
	var subject = $('#subject').val();
	var message = $('#message').val();
	
	if (!name || name == 'Name') {
	
		$("#result").empty();
		$("#result").append("<p class='error'>Please Enter Your Name</p>");
		return false;

	}
	
	if (!email || email == 'Email') {
		$("#result").empty();
		$("#result").append("<p class='error'>Please Enter You Email Address</p>");
		return false;
	}
	
	if (!subject) {
	
		$("#result").empty();
		$("#result").append("<p class='error'>Please Enter the Subject</p>");
		return false;
	}
	
	var form_data = {
		name: $('#name').val(),
		email: $('#email').val(),
		subject: $('#subject').val(),
		message: $('#message').val(),
		ajax: '1'		
	};
	
	$.ajax({
		url: "<?php echo site_url('email/submit'); ?>",
		type: 'POST',
		data: form_data,
		success: function(msg) {
			$('#main_content').html(msg);
		}
	});
	
	return false;
});
	
	
</script>	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		
			
			