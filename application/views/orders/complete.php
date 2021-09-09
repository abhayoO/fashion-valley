<html>
<head>
	<title> Thank you!</title>
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
		<h1> Thanks for the order!</h1>
		<h4> Your order no. is <?= $id ?>. Please use this no. for any questions regarding your order </h4>

	</div>
	
</body>




</html>