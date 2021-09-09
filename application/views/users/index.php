<html>
<head>
	<title>Fashion Valley</title>
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
			<div class="col-md-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
						<li data-target="#myCarousel" data-slide-to="5"></li>
						<li data-target="#myCarousel" data-slide-to="6"></li>
						<li data-target="#myCarousel" data-slide-to="7"></li>
						<li data-target="#myCarousel" data-slide-to="8"></li>
						<li data-target="#myCarousel" data-slide-to="9"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img class="first-slide" src="<?=base_url('assets/images/banner1.jpg')?>">
						</div>
						<div class="item">
							<img class="second-slide" src="<?=base_url('assets/images/banner2.jpg')?>">
						</div>
						<div class="item">
							<img class="third-slide" src="<?=base_url('assets/images/banner3.jpg')?>">
						</div>
						<div class="item">
							<img class="fourth-slide" src="<?=base_url('assets/images/banner4.jpg')?>">
						</div>
						<div class="item">
							<img class="fifth-slide" src="<?=base_url('assets/images/banner5.jpg')?>">
						</div>
						<div class="item">
							<img class="sixth-slide" src="<?=base_url('assets/images/banner6.jpg')?>">
						</div>
						<div class="item">
							<img class="seventh-slide" src="<?=base_url('assets/images/banner7.jpg')?>">
						</div>
						<div class="item">
							<img class="eighth-slide" src="<?=base_url('assets/images/banner8.jpg')?>">
						</div>
						<div class="item">
							<img class="ninth-slide" src="<?=base_url('assets/images/banner9.jpg')?>">
						</div>
						<div class="item">
							<img class="tenth-slide" src="<?=base_url('assets/images/banner10.jpg')?>">
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div id="row">
			<h1 class="text-center">Shop by Category</h1>

			<div class="photo-container">
				<div class="big">
					<a href="products/show/men/men-shirts">
						<img class="img" src="<?=base_url('assets/images/shirts.png')?>" alt="Men Shirts">
					</a>
				</div>
				<div class="vertical">
					<a href="products/show/women/women-sarees">
						<img class="img" src="<?=base_url('assets/images/women_saree.jpg')?>" alt="Women Sarees">
					</a>
				</div>
				<div>
					<a href="products/show/men/men-tshirts">
						<img class="img" src="<?=base_url('assets/images/tshirt.jpg')?>" alt="Men T-Shirts">
					</a>
				</div>
				<div class="horizontal">
					<a href="products/show/kids/girls">
						<img class="img" src="<?=base_url('assets/images/girl_kid.png')?>" alt="Girls Clothing">
					</a>
				</div>
				<div class="vertical">
					<a href="products/show/men/men-suits">
						<img class="img" src="<?=base_url('assets/images/men_suit.png')?>" alt="Men Suits">
					</a>
				</div>
				<div>
					<a href="products/show/women/women-topwear">
						<img class="img" src="<?=base_url('assets/images/women_top.jpeg')?>" alt="Women Topwear">
					</a>
				</div>
				<div class="horizontal">
					<a href="products/show/men/men-jeans">
						<img class="img" src="<?=base_url('assets/images/jeans.png')?>" alt="Men Jeans">
					</a>
				</div>
				<div class="big">
					<a href="products/show/women/leggings-salwars">
						<img class="img" src="<?=base_url('assets/images/women_salwar.jpg')?>" alt="Women Leggings & Salwars">
					</a>
				</div>
				<div>
					<a href="products/show/women/women-kurtis">
						<img class="img" src="<?=base_url('assets/images/women_kurti.png')?>" alt="Women Kurtis">
					</a>
				</div>
				<div>
					<a href="products/show/kids/boys">
						<img class="img" src="<?=base_url('assets/images/boy_kid.jpeg')?>" alt="Boys Clothing">
					</a>
				</div>
			</div>

		</div>
	</div>
	<footer>
		<h3>&copy; 2021</h3>
	</footer>
</body>
</html>