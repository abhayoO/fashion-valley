<?php $hierarchy=$this->site_data['nav_menu_hierarchy'];//print_r($hierarchy); ?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href='/'><img class="navbar-brand" alt="Brand" src="<?= base_url('assets/images/logo.png')?>"/></a>
		</div>
		<div>
			<ul class="nav navbar-nav">

	<?php	if ($this->session->userdata("is_admin") == 1) {	?>
				<li><a href="/products/add-product">Add Product</a></li>
	<?php	}	?>

<?php if(count($hierarchy)>0)
		foreach ($hierarchy as $key => $value)
			if(array_key_exists('child',$value)&&is_array($value['child'])&&count($value['child'])>0){	?>
				<li class='dropdown'>
					<a href="<?= '/products/show/'.$value['category_slug'] ?>" class='dropdown-toggle'><?= $value['name'] ?>
						<span class='caret'></span>
					</a>
					<ul class='dropdown-menu'>

					<?php	foreach ($value['child'] as $childkey => $childvalue) {	?>
						<li><a href="<?= '/products/show/'.$value['category_slug'].'/'.$childvalue['subcategory_slug'] ?>"><?= $childvalue['name'] ?></a></li>
					<?php	}	?>

					</ul>
				</li>
	<?php	} else {	?>
				<li><a href="<?= '/products/show/'.$value['category_slug'] ?>"><?= $value['name'] ?></a></li>
	<?php	}	?>
				
			</ul>
		
			<!--	<li class='dropdown'>
					<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Tops
						<span class='caret'>
						</span>
					</a>
					<ul class='dropdown-menu'>
						<li><a href="/products/show/1">Blouses</a></li>
						<li><a href="/products/show/2">Cropped</a></li>
						<li><a href="/products/show/3">Sweater</a></li>
					</ul>
				</li>	-->
			
			<ul class="nav navbar-nav navbar-right">
				<li id="list" class="dropdown"></li>

	<?php	if ($this->session->userdata('is_logged_in') == TRUE) { ?>
				<li class="dropdown">
					<a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
						<span class="glyphicon glyphicon-user"></span>
						<strong> <?= $this->session->userdata("first_name")?></strong><span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
					
					<?php  if ($this->session->userdata("is_admin") == 1) {   ?>
						<!--<li><a href="#"> Edit Users</a></li>-->
					<?php	}	?>
					
						<li><a href="/my/profile/view"> View/Edit Profile</a></li>
						<li><a href="/my/addresses"> Manage Addresses</a></li>
						<li><a href="/my/orders"> Order History</a></li>
						<li><a href="/sessions/destroy"> Log Out</a></li>
					</ul>
				</li>

	<?php	} else {	?>
				<li><a href="<?php if (isset($sign_in_target)) echo $sign_in_target; else echo '/users/sign-in'; ?>"><span class="glyphicon glyphicon-log-in"></span> Sign in/Register </a></li>
	<?php	}	?>

			</ul>
		</div>
	</div>
</nav>