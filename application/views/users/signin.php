<html>
<head>
	<title>Sign-In</title>
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

            <div class="col-md-4 col-md-offset-4">
                <div class="thumbnail">
                    <form action="/sessions/create" method="post">
                        <fieldset>
                            <legend>Sign-In</legend>
                            <div class="form-group required col-md-12">
                                <label class='control-label'>Email:</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="form-group required col-md-12">
                                <label class='control-label'>Password:</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <input type="submit" class="btn btn-primary btn-block" value="Submit">
                            </div>
                        </fieldset>
                    </form>
                </div>
                <hr />
				<div class="row">
					<div class="col-md-12 text-center">
						New to website?
					</div>
					<div class="col-md-12 text-center">
						<a class="btn btn-success btn-block" href="/users/new-user" role="button">Create your account</a>
					</div>
				</div>
            </div>

        </div>
    </div>
</body>
</html>