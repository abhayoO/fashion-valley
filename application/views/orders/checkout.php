<html>
<head>
	<title> Check out</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/javascripts/checkout.js')?>"></script>
	<script src="<?= base_url('assets/javascripts/custom.js')?>"></script>
	<link rel="stylesheet" href="<?= base_url('assets/css/custom.css')?>">
</head>
<body>
		
	<?php $this->load->view("partials/nav_menu"); ?>
	
	<div class="container">
		
		<div class="row">
			<div class="col-md-12" style="margin-bottom:20px">
				<a href="/" >&laquo; Go back shopping</a>
			</div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                <div class="panel panel-info">
                    <div class="panel-heading">2. Review Order</div>
                        <div class="panel-body">
                        	<?php  
							    	$subtotal = 0;
							    	$cart_items = $this->session->userdata('list');
									for ($i = 0; $i < count($cart_items); $i++) { 
										$subtotal += $cart_items[$i]['qty']*$cart_items[$i]['product_price'];?>
						    			<div class="col-md-12">
						    				<div class="col-sm-3 col-xs-3">
						    					<img style="width:70px" src="<?= base_url('assets/images/'.$cart_items[$i]['product_id'].".jpeg")?>"/>
						    				</div>
						    				<div class="col-sm-6 col-xs-6">
						    					<div class="col-xs-12"><?=$cart_items[$i]['product_name']?></div>
						    					<div class="col-xs-12"><small>Quantity:<?=$cart_items[$i]['qty']?></small></div>
						    				</div>
						    				<div class="col-sm-3 col-xs-3 text-right">
                                				<h6><?=CURRENCY_SYMBOL.$cart_items[$i]['product_price']?></h6>
                            				</div>
                            			</div>
                            			<div class="col-md-12"><hr/></div>
								    				
				 		<?php  		} 
				 					?>
                        <div class="col-md-12">
                            <div class="col-xs-12">
                                <strong>Subtotal</strong>
                                    <div class="pull-right"><?=CURRENCY_SYMBOL.$subtotal?></div>
                                </div>
                            <div class="col-xs-12">
                                <small>Shipping Charges:</small>
                       	 <?php  $grand_total = 0;
                       	 		if ($subtotal>500) {
                       	 			$grand_total = $subtotal; ?> 
                                	<div class="pull-right"><span>-</span></div>
                                	<small><em style="color:green">You qualify for free shipping!</em></small>
                  <?php         } else {
                  					$grand_total = $subtotal + 50; ?>
                  					<div class="pull-right"><span><?=CURRENCY_SYMBOL?>50</span></div>
                  					<small><em style="color:red">Spend <?=CURRENCY_SYMBOL.(500-$subtotal)?> more to qualify for free shipping!</em></small>
                  <?php			}  ?>
                                    
                            </div>
                        </div>
                        <div class="col-md-12"><hr /></div>
                        <div class="col-md-12">
                            <div class="col-xs-12">
                                <strong>Order Total</strong>
                                <div class="pull-right"><span><?=CURRENCY_SYMBOL.$grand_total?></span></div>
                            </div>
                        </div>
                        <div class="col-md-12"><hr /></div>
						<div class="col-md-6">
							<form action="/orders/create" class="pull-left">
								<button type="submit">Pay on delivery</button>
							</form>
						</div>
						<!--<div class="col-md-6">
                   		<form action="/orders/charge" class="pull-right" method="post">
                   			<input type="hidden" name="amount" value="<?= $grand_total*100?>">
							<script
								src="https://checkout.stripe.com/checkout.js" class="stripe-button"
								data-key="pk_test_eXHfTyqfwXkABP9RUGLRORQX"
								data-amount="<?= $grand_total*100?>"
								data-name="Fashion Valley"
								data-description="Clothing"
								data-image="<?=base_url('assets/images/money.png')?>"
								data-locale="en">
							</script>
						</form>
						</div>-->
                        
				    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                <div class="panel panel-info">
                    <div class="panel-heading">1. Shipping Address</div>
                    <div id="address" class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>




</html>