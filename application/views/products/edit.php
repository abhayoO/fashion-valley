<html>
<head>
	<title>Edit Product</title>
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
	
	<div class="row">
		<div class="container">
			<div class='col-md-12'>
		<?php		if ($this->session->flashdata("success")) {
						echo $this->session->flashdata("success");
					}
					if ($this->session->flashdata("errors")) {
						echo $this->session->flashdata("errors");
					}


					  ?>
				<form action="/products/update" method="post">
					<fieldset>
						<legend>Edit Product #<?= $id?></legend>
						<input type='hidden' name="id" value="<?= $id?>">
						<div class="form-group">
							<label>Name:</label>
							<input type="text" class="form-control" name="name" placeholder="<?= $name ?>">
						</div>
						<div class="form-group">
							<label>Price(In <?=CURRENCY_NAME?>):</label>
							<input type="text" class="form-control" name="unit_price" placeholder="<?= $unit_price?>">
						</div>
						<div class="form-group">
							<label>Description:</label>
							<textarea rows="6" class="form-control" name="description" placeholder="<?= $description ?>"></textarea>
						</div>
						<input type="submit" class="btn btn-default" value="Save Changes">
					</fieldset>
				</form>
			</div>
		</div>
	</div>





</body>



</html>