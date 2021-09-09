<html>
<head>
	<title>Fashion Valley-Add Product</title>
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
			<?php 
				for ($i=0; $i <= count($products); $i++){  
					if ($i== 0 ||$i %3 == 0) { ?>
						<div class="row" style="display:flex">

		<?php 		}  ?>																	
						<?php   if ($i == count($products)) {
									if ($this->session->userdata("is_admin")== 1 ) { ?>
										<div class="col-md-4 col-sm-6">
											<div class="thumbnail">
												<?php echo form_open_multipart('/products/create');
												?>
												<!-- <form action="/Products/create" method="post"> -->
													<fieldset>

														<legend>Add a new product</legend>
														<div class="form-group">
															<label>Name:</label>
															<input type="text" class="form-control" name="name">
														</div>
														<div class="form-group">
															<label>Unit Price(In <?=CURRENCY_NAME?>):</label>
															<input type="text" class="form-control" name="unit_price">
														</div>
														<div class="form-group">
														    <label>Image file</label>
														    <input type="file" name="userfile">
														    
														 </div>
														<div class="form-group">
															<label>Description:</label>
															<textarea rows="5" class="form-control" name="description"></textarea>
														</div>
														<div class="form-group">
															<label>Subcategories: </label>
													<?php  foreach ($subcategories AS $subcategory) { ?>
																<input type="checkbox" name="subcategories[]" value="<?=$subcategory['id']?>"
																<?php          
																if ($subcategory['id'] == $subcat_id) {
																	echo "checked";
																}
																?>>
																<?= $subcategory['name']?>
											<?php 			} ?>
														</div>
														<input type="hidden" name="current_page" value="<?= $subcat_id?>">
														<input type="submit" class="btn btn-default" value="Submit">
													</fieldset>
												</form>
											</div>
										</div>

							<?php	}

								}  else { 
									$id = $products[$i]['id'] ;     ?>
									<div class="col-sm-6 col-md-4">
										<div class="thumbnail">
											<img src="<?= base_url('assets/images/'.$id.'.jpeg')?>">
											<div class="caption" style="height:200px">
												<h4 class="pull-right"><?= CURRENCY_SYMBOL.$products[$i]['unit_price']?></h4>
												<h4><?= $products[$i]['name']?></a></h4>
												<p> <?= $products[$i]['description']?></p>
											</div>
											<form id="cart" class="form-inline" action="/carts/create" method="post">
												<input type="hidden" name="product_id" value="<?=$id?>">
												<input type="hidden" name="product_name" value="<?= $products[$i]['name']?>">
												<input type="hidden" name="product_price" value="<?= $products[$i]['unit_price']?>">
												<div class="form-group">
													<select class="form-control" name="qty">
													  <option value="1">1</option>
													  <option value="2">2</option>
													  <option value="3">3</option>
													  <option value="4">4</option>
													  <option value="5">5</option>
													</select>
												</div>
												<input type="submit" class="btn btn-primary" value="Add to cart">
										<?php   if ($this->session->userdata('is_logged_in') == TRUE) {
													if ($this->session->userdata('is_admin') == 1) {   ?>
														<div class="form-group">
															<a class="btn btn-warning form-control" href="/products/edit/<?= $id?>">Edit</a>
														</div>
														<div class="form-group">
															<a class="btn btn-danger form-control" href="/products/delete/<?= $subcat_id?>/<?= $id?>">Delete</a>
														</div>
										<?php		}

												}  ?>
											
											</form>
										</div>
									</div>
			<?php				}  ?>
							
		<?php		if ($i % 3 == 2) {  ?>
					 	</div>
		<?php		}
				}  ?>
		</div>
	</div>


</body>



</html>