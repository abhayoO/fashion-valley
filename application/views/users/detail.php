<html>
<head>
	<title><?= $this->session->userdata("first_name")?> Profile</title>
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
			<div class="col-md-3">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" <?php if($active_nav=="profile") echo "class='active'"; ?>><a <?php if(isset($task)) echo "href='/my/profile/".$task."'"; else echo "href='/my/profile/view'";?>>Profile</a></li>
                    <li role="presentation" <?php if($active_nav=="orders") echo "class='active'"; ?>><a href="/my/orders">Orders</a></li>
                    <!--<li role="presentation"><a href="#">Wishlist</a></li>-->
                    <li role="presentation" <?php if($active_nav=="addresses") echo "class='active'"; ?>><a href="/my/addresses">Addresses</a></li>
                </ul>
			</div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
				<?php $this->load->view($partial_view); ?>
            </div>
		</div>
	</div>
</body>
</html>