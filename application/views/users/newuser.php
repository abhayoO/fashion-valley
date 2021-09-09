<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/javascripts/cart.js')?>"></script>
	<link rel="stylesheet" href="<?= base_url('assets/css/cart.css')?>">
	<script src="<?= base_url('assets/javascripts/custom.js')?>"></script>
	<link rel="stylesheet" href="<?= base_url('assets/css/custom.css')?>">
</head>
<body>
	
	<?php $this->load->view("partials/nav_menu"); ?>

	<div class="container">
		<div class="row">

			<?php 
				if($this->session->flashdata("errors")) {
					echo $this->session->flashdata("errors");
				}
				if ($this->session->flashdata("success")) {
					echo $this->session->flashdata("success");
				}
			?>

			<div class='col-md-4 col-md-offset-4'>
				<div class="thumbnail">
					<form action="/users/create" method="post">
						<fieldset>
							<legend>Register</legend>
							<div class="form-group required col-md-6">
								<label class='control-label'>First Name:</label>
								<input type="text" class="form-control" name="first_name" required>
							</div>
							<div class="form-group col-md-6">
								<label>Middle Name:</label>
								<input type="text" class="form-control" name="middle_name">
							</div>
							<div class="form-group col-md-6">
								<label>Last Name:</label>
								<input type="text" class="form-control" name="last_name">
							</div>
							<div class="form-group required col-md-12">
								<label class='control-label'>Email:</label>
								<div class="input-group">
									<input type="text" class="form-control" name="email" required>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-info-sign my-tooltip" aria-hidden="true" title="Must be a valid email that has not been already registered."></span>
									</span>
								</div>
							</div>
							<div class="form-group required col-md-12">
								<label class='control-label'>Password:</label>
								<div class="input-group">
									<input type="password" class="form-control" name="password" required>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-info-sign my-tooltip" aria-hidden="true" title="Password must be at least six characters long."></span>
									</span>
								</div>
							</div>
							<div class="form-group required col-md-12">
								<label class='control-label'>Confirm password:</label>
								<div class="input-group">
									<input type="password" class="form-control" name="conf_password" required>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-info-sign my-tooltip" aria-hidden="true" title="Password entered must be same as above."></span>
									</span>
								</div>
							</div>
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-block" value="Submit">
							</div>
						</fieldset>
					</form>
					<hr />
					<div class="row">
						<div class="col-md-12 text-center">
							Already have an account? <a href="/users/sign-in">Sign-In</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>