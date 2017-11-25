<div class="container TestDrive">

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Vehicle Rental Solutions Test Drive</h1>
			</div>
		</div>


		<div id="fpanel">
			<div class="row">
				<div class="col-xs-12">
					<p class="lead">Thank you for your interest in Vehicle Rental Solutions. We are confident that you will enjoy the demo. Please take a moment
						to fill out the form below and one of our product experts will contact you back with installation instructions. This
						usually takes 1 business day.</p>
				</div>
			</div>
			<div class="row testDriveForm">
				<div class="col-lg-5 col-md-12">
					<form method="post" action="<?php echo URL ?>TestDrive/register" onsubmit="" id="form1" class="form-horizontal" role="form">

						<div class="form-group">
							<label for="CompanyName" class="col-sm-4 control-label">Company name: <span>*</span></label>
							<div class="col-sm-8">
								<input name="CompanyName" type="text" id="CompanyName" class="form-control" required="required">
							</div>
						</div>

						<div class="form-group">
							<label for="FirstName" class="col-sm-4 control-label">First name: <span>*</span></label>
							<div class="col-sm-8">
								<input name="FirstName" type="text" id="FirstName" class="form-control" required="required">
							</div>
						</div>

						<div class="form-group">
							<label for="LastName" class="col-sm-4 control-label">Last name: <span>*</span></label>
							<div class="col-sm-8">
								<input name="LastName" type="text" id="LastName" class="form-control" required="required">
							</div>
						</div>

						<div class="form-group">
							<label for="Email" class="col-sm-4 control-label">E-mail: <span>*</span></label>
							<div class="col-sm-8">
								<input name="Email" id="Email" class="form-control" type="email" required="required">
							</div>
						</div>

						<div class="form-group">
							<label for="WebsiteName" class="col-sm-4 control-label">Website Name: <span>*</span> </label>
							<div class="col-sm-8">
								<input name="WebsiteName" id="WebsiteName" class="form-control" type="text" required="required">
							</div>
						</div>

						<div class="form-group">
							<label for="Phone" class="col-sm-4 control-label">Telephone: <span>*</span> </label>
							<div class="col-sm-8">
								<input name="Phone" id="Phone" class="form-control" type="tel" required="required">
							</div>
						</div>

						

						<div class="form-group">
							<label for="countries" class="col-sm-4 control-label">Country: <span>*</span> </label>
							<div class="col-sm-8">
								<select name="countries" id="countries" class="form-control" required="required">
								<?php //print_r($this->countries); 
									foreach ($this->countries as $country) 
									{
										echo "<option value=\"$country->id\">$country->name</option>";
									}
								?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="yourrole" class="col-sm-4 control-label">Your role: <span >*</span></label>
							<div class="col-sm-8">
								<select name="yourrole" id="yourrole" class="form-control" required="required">
									<option value="1">Station manager</option>
									<option value="2">Fleet manager</option>
									<option value="3">Operations manager</option>
									<option value="4">Franchise manager</option>
									<option value="5">Reservations manager</option>
									<option value="6">IT manager</option>
									<option value="7">Upper management (CEO, CFO)</option>
								</select>
							</div>
						</div>


						<div class="form-group">
							<label for="fleetsize" class="col-sm-4 control-label">Fleet size: <span>*</span></label>
							<div class="col-sm-8">
								<select name="fleetsize" id="fleetsize" class="form-control" required="required">
									<?php //loop through the fleet sizes 
									foreach ($this->fleetList as $item) 
									{ 
										echo "<option value=\"$item->id\"> $item->name cars</option>";
									}
									?>
								</select>
							</div>
						</div>


						<div class="form-group">
							<label for="theme" class="col-sm-4 control-label">Choose theme: <span>*</span></label>
							<div class="">
								<fieldset name="theme" class="theme-temp">
									<ul>
										<li>
											<input type="radio" class="theme-radio" name="theme" id="ex1" value="1" checked required />
											<label for="ex1" class="theme1">Example 1</label>
										</li>
										<li>
											<input type="radio" class="theme-radio" name="theme" id="ex2" value="2" required />
											<label for="ex2" class="theme2">Example 2</label>											
										</li>
									</ul>   
								</fieldset>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-8 col-sm-offset-4">
								<input type="submit" name="subbtn" value="Take the test-drive" onclick="" id="subbtn" class="action-button">
							</div>
						</div>
					</form>
				</div>

				<div class="col-lg-4 col-lg-offset-1">
					<h3 style="margin-top: 0">Test drive features</h3>
					<ul class="list-unstyled">
						<li><i class="fa fa-check"></i>Free 30 days trial</li>
						<li><i class="fa fa-check"></i>No credit card required</li>
						<li><i class="fa fa-check"></i>Free kick-start training</li>
						<li><i class="fa fa-check"></i>Full access to our customer service</li>
						<li><i class="fa fa-check"></i>All features included</li>
						<li><i class="fa fa-check"></i>Installation assistance by our product experts</li>
					</ul>

					<h3>So I filled out the form. Now?</h3>
					<p>A welcome e-mail will be sent to you, you will receive a link that will allow you to start using your test-drive. You
						will have access to all the features for free for 30 days.*</p>
				</div>
			</div>

		</div>






	</div>


</div>