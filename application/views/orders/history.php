<div class="panel panel-default">
    <div class="panel-heading">
        <h3>Order History</h3>
    </div>
    <div class="panel-body"> 
		<?php if(count($order_history)==0){ ?>
			<p>You have no orders at present.</p>
		<?php }else{ ?>
	  	<table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>Order ID</th>
	        <th>Order Date</th>
	        <th>Products</th>
	      </tr>
	    </thead>
	    <tbody>
	      <?php



	      	foreach ($order_history AS $order) {  ?>
	      		<tr>
	      			<td><?=$order['id']?></td>
	      			<td><?=date("jS M, Y",strtotime($order['created_at']))?></td>
	      			<td><ul>
	      	  <?php  
	      	  		$pieces = explode(",",$order['products']) ;

	      	  		foreach($pieces AS $product) {  ?>
	      	  			<li><?=$product?></li>


	<?php      	  	} ?>
					</ul></td>



	      		</tr>
	      		

<?php	    }




	       ?>

	    </tbody>
	  </table>
	  <?php } ?>
	</div>
</div>