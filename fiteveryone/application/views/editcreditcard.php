
<div class="row">
	<div class="span8">
		<?php if(isset($precords)): ?>
		<?php foreach($precords as $row): ?>
		<form class="form-horizontal" action="<?php echo base_url();?>index.php?/managepayment/update_po_record/<?php echo $row->card_id ?>" method="POST">
			<fieldset>
				<h2>Payment</h2>
				<br/>
				<div class="control-group">
					<label class="control-label">Card Holder's Name</label>
					<div class="controls">
						<input type="text" value="<?php echo $row->name; ?>" name="name" class="input-block-level" pattern="\w+ \w+.*" title="Fill your first and last name" required>
					</div>
				</div>
		 
				<div class="control-group">
					<label class="control-label" >Card Number</label>
					<div class="controls">
						<input type="text" value="<?php echo $row->card_no; ?>"  name="card_no" class="input-block-level" autocomplete="off"  title="digits" required>
					</div>
				</div>
		
				<h4>Billing Address</h4>
					<div class="control-group">
						<label for="address" class="control-label" >	
							Street Address Line 1
						</label>
						<div class="controls">
						<input class="input-block-level" name="address1" value="<?php echo $row->address1; ?>" placeholder="" type="text" id="address">
						<span class="help-inline">  Street Number and Street Number</span>
						</div>
					</div>
					
					<div class="control-group">
						<label for="address" class="control-label" >	
							Street Address Line 2
						</label>
						<div class="controls">
						<input class="input-block-level" name="address2" value="<?php echo $row->address2; ?>" placeholder="" type="text" id="address">
						<span class="help-inline">  Street Number and Street Number</span>
						</div>
					</div>
					
					<div class="control-group">
						<label for="city" class="control-label">	
							City
						</label>
						<div class="controls"><input name="city" type="text" value="<?php echo $row->city; ?>" id="city">
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">State</label>
						<div class="controls">
							<select id="state" name="state" class="input-xlarge">
							<option value="<?php echo $row->state; ?>"><?php echo $row->state; ?></option>
							<option value=""></option>
							<option value="Alabama">Alabama</option>
							<option value="Alaska">Alaska</option>
							<option value="Arizona">Arizona</option>
							<option value="Arkansas">Arkansas</option>
							<option value="California">California</option>
							<option value="Colorado">Colorado</option>
							<option value="Connecticut">Connecticut</option>
							<option value="Delaware">Delaware</option>
							<option value="Florida">Florida</option>
							<option value="Georgia">Georgia</option>
							<option value="Hawaii">Hawaii</option>
							<option value="Idaho">Idaho</option>
							<option value="Illinois">Illinois</option>
							<option value="Indiana">Indiana</option>
							<option value="Iowa">Iowa</option>
							<option value="Kansas">Kansas</option>
							<option value="Kentucky">Kentucky</option>
							<option value="Louisiana">Louisiana</option>
							<option value="Maine">Maine</option>
							<option value="Maryland">Maryland</option>
							<option value="Massachusetts">Massachusetts</option>
							<option value="Michigan">Michigan</option>
							<option value="Minnesota">Minnesota</option>
							<option value="Mississippi">Mississippi</option>
							<option value="Missouri">Missouri</option>
							<option value="Montana">Montana</option>
							<option value="Nebraska">Nebraska</option>
							<option value="Nevada">Nevada</option>
							<option value="New Hampshire">New Hampshire</option>
							<option value="New Jersey">New Jersey</option>
							<option value="New Mexico">New Mexico</option>
							<option value="New York">New York</option>
							<option value="North Carolina">North Carolina</option>
							<option value="North Dakota">North Dakota</option>
							<option value="Ohio">Ohio</option>
							<option value="Oklahoma">Oklahoma</option>
							<option value="Oregon">Oregon</option>
							<option value="Pennsylvania">Pennsylvania</option>
							<option value="Rhode Island">Rhode Island</option>
							<option value="South Carolina">South Carolina</option>
							<option value="South Dakota">South Dakota</option>
							<option value="Tennessee">Tennessee</option>
							<option value="Texas">Texas</option>
							<option value="Utah">Utah</option>
							<option value="Vermont">Vermont</option>
							<option value="Virginia">Virginia</option>
							<option value="Washington">Washington</option>
							<option value="West Virginia">West Virginia</option>
							<option value="Wisconsin">Wisconsin</option>
							<option value="Wyoming">Wyoming</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label for="zip" class="control-label">	
							Zip Code
						</label>
						<div class="controls"><input name="zip" value="<?php echo $row->zip; ?>"type="text"  id="zip">
						</div>
					</div>
					
					<div class="control-group">
						<label for="country" class="control-label">	
							Country
						</label>
						<div class="controls">
							<select name="country" id="country">
								<option value="<?php echo $row->country; ?>"><?php echo $row->country; ?></option>
								<option value="" > </option>
								<option value="AR">Argentina</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="BY">Belarus</option>
								<option value="BE">Belgium</option>
								<option value="BA">Bosnia and Herzegovina</option>
								<option value="BR">Brazil</option>
								<option value="BG">Bulgaria</option>
								<option value="CA">Canada</option>
								<option value="CL">Chile</option>
								<option value="CN">China</option>
								<option value="CO">Colombia</option>
								<option value="CR">Costa Rica</option>
								<option value="HR">Croatia</option>
								<option value="CU">Cuba</option>
								<option value="CY">Cyprus</option>
								<option value="CZ">Czech Republic</option>
								<option value="DK">Denmark</option>
								<option value="DO">Dominican Republic</option>
								<option value="EG">Egypt</option>
								<option value="EE">Estonia</option>
								<option value="FI">Finland</option>
								<option value="FR">France</option>
								<option value="GE">Georgia</option>
								<option value="DE">Germany</option>
								<option value="GI">Gibraltar</option>
								<option value="GR">Greece</option>
								<option value="HK">Hong Kong S.A.R., China</option>
								<option value="HU">Hungary</option>
								<option value="IS">Iceland</option>
								<option value="IN">India</option>
								<option value="ID">Indonesia</option>
								<option value="IR">Iran</option>
								<option value="IQ">Iraq</option>
								<option value="IE">Ireland</option>
								<option value="IL">Israel</option>
								<option value="IT">Italy</option>
								<option value="JM">Jamaica</option>
								<option value="JP">Japan</option>
								<option value="KZ">Kazakhstan</option>
								<option value="KW">Kuwait</option>
								<option value="KG">Kyrgyzstan</option>
								<option value="LA">Laos</option>
								<option value="LV">Latvia</option>
								<option value="LB">Lebanon</option>
								<option value="LT">Lithuania</option>
								<option value="LU">Luxembourg</option>
								<option value="MK">Macedonia</option>
								<option value="MY">Malaysia</option>
								<option value="MT">Malta</option>
								<option value="MX">Mexico</option>
								<option value="MD">Moldova</option>
								<option value="MC">Monaco</option>
								<option value="ME">Montenegro</option>
								<option value="MA">Morocco</option>
								<option value="NL">Netherlands</option>
								<option value="NZ">New Zealand</option>
								<option value="NI">Nicaragua</option>
								<option value="KP">North Korea</option>
								<option value="NO">Norway</option>
								<option value="PK">Pakistan</option>
								<option value="PS">Palestinian Territory</option>
								<option value="PE">Peru</option>
								<option value="PH">Philippines</option>
								<option value="PL">Poland</option>
								<option value="PT">Portugal</option>
								<option value="PR">Puerto Rico</option>
								<option value="QA">Qatar</option>
								<option value="RO">Romania</option>
								<option value="RU">Russia</option>
								<option value="SA">Saudi Arabia</option>
								<option value="RS">Serbia</option>
								<option value="SG">Singapore</option>
								<option value="SK">Slovakia</option>
								<option value="SI">Slovenia</option>
								<option value="ZA">South Africa</option>
								<option value="KR">South Korea</option>
								<option value="ES">Spain</option>
								<option value="LK">Sri Lanka</option>
								<option value="SE">Sweden</option>
								<option value="CH">Switzerland</option>
								<option value="TW">Taiwan</option>
								<option value="TH">Thailand</option>
								<option value="TN">Tunisia</option>
								<option value="TR">Turkey</option>
								<option value="UA">Ukraine</option>
								<option value="AE">United Arab Emirates</option>
								<option value="GB">United Kingdom</option>
								<option value="US">USA</option>
								<option value="UZ">Uzbekistan</option>
								<option value="VN">Vietnam</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label for="phone" class="control-label">	
							Phone Number
						</label>
						<div class="controls"><input name="phone" type="text" value="<?php echo $row->phone; ?>" id="phone">
						</div>
					</div>
					
					<?php endforeach;?>
					<?php endif;?>
		<?php if (isset($records)): ?>
		<?php foreach($records as $row): ?>
		<form class="form-horizontal" action="<?php echo base_url();?>index.php?/managepayment/update_record/<?php echo $row->card_id ?>" method="POST">
			<fieldset>
				<h2>Payment</h2>
				<br/>
				<div class="control-group">
					<label class="control-label">Card Holder's Name</label>
					<div class="controls">
						<input type="text" value="<?php echo $row->name; ?>" name="name" class="input-block-level" pattern="\w+ \w+.*" title="Fill your first and last name" required>
					</div>
				</div>
		 
				<div class="control-group">
					<label class="control-label" >Card Number</label>
					<div class="controls">
						<input type="text" value="<?php echo $row->card_no; ?>"  name="card_no" class="input-block-level" autocomplete="off" maxlength="16" minlength="16" pattern="\d{16}" title="16th digits" required>
					</div>
				</div>
		 
				<div class="control-group">
					<label class="control-label">Card Expiry Date</label>
					<div class="controls">
						<div class="row-fluid">
							<div class="span9">
								<select class="input-block-level" name="month" id="m_card">
									<option value="<?php echo $row->month; ?>" ><?php echo $row->month; ?></option>
									<option value="" > </option>
									<option value="01">Jan (01)</option>
									<option value="02">Feb (02)</option>
									<option value="03">Mar (03)</option>
									<option value="04">Apr (04)</option>
									<option value="05">May (05)</option>
									<option value="06">June (06)</option>
									<option value="07">July (07)</option>
									<option value="08">Aug (08)</option>
									<option value="09">Sep (09)</option>
									<option value="10">Oct (10)</option>
									<option value="11">Nov (11)</option>
									<option value="12">Dec (12)</option>
								</select>
							</div>
							<div class="span3">
								<select class="input-block-level" name="year" id="y_card">
									<option value="<?php echo $row->year; ?>" ><?php echo $row->year; ?> </option>
									<option value="" > </option>
									<option value="2013">2013</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
									<option value="2023">2023</option>
								</select>
							</div>
						</div>
					</div>
				</div>
		 
				<div class="control-group">
					<label class="control-label" >Card CVV</label>
					<div class="controls">
						<div class="row-fluid">
							<div class="span3">
								<input type="text" value="<?php echo $row->cvv; ?>" name="cvv" class="input-block-level" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required>
							</div>
						</div>
					</div>
				</div>
				
				<div class="control-group">
						<label class="control-label">Credit Card Type</label>
						<div class="controls">
							<select id="state" name="state" >
							<option value="<?php echo $row->card_type; ?>"><?php echo $row->card_type; ?></option>
							<option value=""></option>
							<option value="Visa">Visa</option>
							<option value="MasterCard">MasterCard</option>
							</select>
						</div>
				</div>
				<h4>Billing Address</h4>
					<div class="control-group">
						<label for="address" class="control-label" >	
							Street Address Line 1
						</label>
						<div class="controls">
						<input class="input-block-level" name="address1" value="<?php echo $row->address1; ?>" placeholder="" type="text" id="address">
						<span class="help-inline">  Street Number and Street Number</span>
						</div>
					</div>
					
					<div class="control-group">
						<label for="address" class="control-label" >	
							Street Address Line 2
						</label>
						<div class="controls">
						<input class="input-block-level" name="address2" value="<?php echo $row->address2; ?>" placeholder="" type="text" id="address">
						<span class="help-inline">  Street Number and Street Number</span>
						</div>
					</div>
					
					<div class="control-group">
						<label for="city" class="control-label">	
							City
						</label>
						<div class="controls"><input name="city" type="text" value="<?php echo $row->city; ?>" id="city">
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">State</label>
						<div class="controls">
							<select id="state" name="state" class="input-xlarge">
							<option value="<?php echo $row->state; ?>"><?php echo $row->state; ?></option>
							<option value=""></option>
							<option value="Alabama">Alabama</option>
							<option value="Alaska">Alaska</option>
							<option value="Arizona">Arizona</option>
							<option value="Arkansas">Arkansas</option>
							<option value="California">California</option>
							<option value="Colorado">Colorado</option>
							<option value="Connecticut">Connecticut</option>
							<option value="Delaware">Delaware</option>
							<option value="Florida">Florida</option>
							<option value="Georgia">Georgia</option>
							<option value="Hawaii">Hawaii</option>
							<option value="Idaho">Idaho</option>
							<option value="Illinois">Illinois</option>
							<option value="Indiana">Indiana</option>
							<option value="Iowa">Iowa</option>
							<option value="Kansas">Kansas</option>
							<option value="Kentucky">Kentucky</option>
							<option value="Louisiana">Louisiana</option>
							<option value="Maine">Maine</option>
							<option value="Maryland">Maryland</option>
							<option value="Massachusetts">Massachusetts</option>
							<option value="Michigan">Michigan</option>
							<option value="Minnesota">Minnesota</option>
							<option value="Mississippi">Mississippi</option>
							<option value="Missouri">Missouri</option>
							<option value="Montana">Montana</option>
							<option value="Nebraska">Nebraska</option>
							<option value="Nevada">Nevada</option>
							<option value="New Hampshire">New Hampshire</option>
							<option value="New Jersey">New Jersey</option>
							<option value="New Mexico">New Mexico</option>
							<option value="New York">New York</option>
							<option value="North Carolina">North Carolina</option>
							<option value="North Dakota">North Dakota</option>
							<option value="Ohio">Ohio</option>
							<option value="Oklahoma">Oklahoma</option>
							<option value="Oregon">Oregon</option>
							<option value="Pennsylvania">Pennsylvania</option>
							<option value="Rhode Island">Rhode Island</option>
							<option value="South Carolina">South Carolina</option>
							<option value="South Dakota">South Dakota</option>
							<option value="Tennessee">Tennessee</option>
							<option value="Texas">Texas</option>
							<option value="Utah">Utah</option>
							<option value="Vermont">Vermont</option>
							<option value="Virginia">Virginia</option>
							<option value="Washington">Washington</option>
							<option value="West Virginia">West Virginia</option>
							<option value="Wisconsin">Wisconsin</option>
							<option value="Wyoming">Wyoming</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label for="zip" class="control-label">	
							Zip Code
						</label>
						<div class="controls"><input name="zip" value="<?php echo $row->zip; ?>"type="text"  id="zip">
						</div>
					</div>
					
					<div class="control-group">
						<label for="country" class="control-label">	
							Country
						</label>
						<div class="controls">
							<select name="country" id="country">
								<option value="<?php echo $row->country; ?>"><?php echo $row->country; ?></option>
								<option value="" > </option>
								<option value="AR">Argentina</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="BY">Belarus</option>
								<option value="BE">Belgium</option>
								<option value="BA">Bosnia and Herzegovina</option>
								<option value="BR">Brazil</option>
								<option value="BG">Bulgaria</option>
								<option value="CA">Canada</option>
								<option value="CL">Chile</option>
								<option value="CN">China</option>
								<option value="CO">Colombia</option>
								<option value="CR">Costa Rica</option>
								<option value="HR">Croatia</option>
								<option value="CU">Cuba</option>
								<option value="CY">Cyprus</option>
								<option value="CZ">Czech Republic</option>
								<option value="DK">Denmark</option>
								<option value="DO">Dominican Republic</option>
								<option value="EG">Egypt</option>
								<option value="EE">Estonia</option>
								<option value="FI">Finland</option>
								<option value="FR">France</option>
								<option value="GE">Georgia</option>
								<option value="DE">Germany</option>
								<option value="GI">Gibraltar</option>
								<option value="GR">Greece</option>
								<option value="HK">Hong Kong S.A.R., China</option>
								<option value="HU">Hungary</option>
								<option value="IS">Iceland</option>
								<option value="IN">India</option>
								<option value="ID">Indonesia</option>
								<option value="IR">Iran</option>
								<option value="IQ">Iraq</option>
								<option value="IE">Ireland</option>
								<option value="IL">Israel</option>
								<option value="IT">Italy</option>
								<option value="JM">Jamaica</option>
								<option value="JP">Japan</option>
								<option value="KZ">Kazakhstan</option>
								<option value="KW">Kuwait</option>
								<option value="KG">Kyrgyzstan</option>
								<option value="LA">Laos</option>
								<option value="LV">Latvia</option>
								<option value="LB">Lebanon</option>
								<option value="LT">Lithuania</option>
								<option value="LU">Luxembourg</option>
								<option value="MK">Macedonia</option>
								<option value="MY">Malaysia</option>
								<option value="MT">Malta</option>
								<option value="MX">Mexico</option>
								<option value="MD">Moldova</option>
								<option value="MC">Monaco</option>
								<option value="ME">Montenegro</option>
								<option value="MA">Morocco</option>
								<option value="NL">Netherlands</option>
								<option value="NZ">New Zealand</option>
								<option value="NI">Nicaragua</option>
								<option value="KP">North Korea</option>
								<option value="NO">Norway</option>
								<option value="PK">Pakistan</option>
								<option value="PS">Palestinian Territory</option>
								<option value="PE">Peru</option>
								<option value="PH">Philippines</option>
								<option value="PL">Poland</option>
								<option value="PT">Portugal</option>
								<option value="PR">Puerto Rico</option>
								<option value="QA">Qatar</option>
								<option value="RO">Romania</option>
								<option value="RU">Russia</option>
								<option value="SA">Saudi Arabia</option>
								<option value="RS">Serbia</option>
								<option value="SG">Singapore</option>
								<option value="SK">Slovakia</option>
								<option value="SI">Slovenia</option>
								<option value="ZA">South Africa</option>
								<option value="KR">South Korea</option>
								<option value="ES">Spain</option>
								<option value="LK">Sri Lanka</option>
								<option value="SE">Sweden</option>
								<option value="CH">Switzerland</option>
								<option value="TW">Taiwan</option>
								<option value="TH">Thailand</option>
								<option value="TN">Tunisia</option>
								<option value="TR">Turkey</option>
								<option value="UA">Ukraine</option>
								<option value="AE">United Arab Emirates</option>
								<option value="GB">United Kingdom</option>
								<option value="US">USA</option>
								<option value="UZ">Uzbekistan</option>
								<option value="VN">Vietnam</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label for="phone" class="control-label">	
							Phone Number
						</label>
						<div class="controls"><input name="phone" type="text" value="<?php echo $row->phone; ?>" id="phone">
						</div>
					</div>
					
					<?php endforeach;?>
					<?php endif;?>
				<!-- Save card -->
			  <?php echo validation_errors('<p class="error"> *'); ?>
				<div class="control-group">
					<div class="controls">
					<button type="submit" class="btn btn-primary">Update</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div> <!-- .span8 -->
</div>

