<h1><?php echo $title; ?></h1>

<div class="row">
	<div class="col-xs-12">
		<form class="form-horizontal" name="contactform" method="post" action="/assets/php/send_form_email.php">
			<div class="form-group">
				<label for="first_name" class="col-sm-2 control-label">First Name</label>
				<div class="col-sm-10">
					<input class="form-control" required="true" type="text" name="first_name" maxlength="50" size="30">
				</div>
			</div>

			<div class="form-group">
				<label for="last_name" class="col-sm-2 control-label">Last Name</label>
				<div class="col-sm-10">
					<input class="form-control" required="true" type="text" name="last_name" maxlength="50" size="30">
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email Address</label>
				<div class="col-sm-10">
					<input class="form-control" required="true" type="email" name="email" maxlength="50" size="30">
				</div>
			</div>

			<div class="form-group">
				<label for="telephone" class="col-sm-2 control-label">Telephone Number</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="telephone" maxlength="50" size="30">
				</div>
			</div>

			<div class="form-group">
				<label for="message" class="col-sm-2 control-label">Message</label>
				<div class="col-sm-10">
					<textarea class="form-control" required="true" name="message" maxlength="1000" cols="25" rows="6"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" value="submit" class="left btn btn-primary">Email Form</button>
				</div>
			</div>
		</form>
	</div>
</div>