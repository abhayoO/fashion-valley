<div id="address-cards">
<?php	if ($this->session->userdata('is_logged_in') == TRUE || $this->session->userdata('id')) { 
		if(count($addresses_array)>0){
			foreach ($addresses_array as $key => $value) { ?>

				<div class="panel panel-default">

					<div class="input-group">
						<span class="input-group-addon">
							<input type="radio" name="id" value="<?= $value['id'] ?>">
						</span>

						<div class="panel-body">
							<h4><?= $value['name']?></h4>
							<p><?= $value['address']?><br \>
							<?= $value['town']?>, <?= $value['city']?><br \>
							<?= $value['state']?> - <?= $value['pin_code']?></p>
							<p>Mobile: <?= $value['mob_no']?></p>
							<!--<a class="btn btn-default col-md-6" id="edit-address" href="/addresses/edit/<?= $value['id'] ?>" role="button">Edit</a>-->
							<a class="btn btn-default col-md-offset-1 col-md-10" href="/addresses/remove/<?= $value['id'] ?>" role="button">Remove</a>
						</div>

					</div>

				</div>

			
				
	<?php	}
		} else { ?>

				<div class="panel panel-default">
					<div class="panel-body">
						You have no saved addresses. You need to fill address to place an order.
					</div>
				</div>

	<?php	}	?>
	<button type="button" class="btn btn-default" onClick="show_add_address();">+ Add New Address</button>	
	<?php	} else {	?>

			<div class="panel panel-default">
				<div class="panel-body">
					<p>You need to login to view saved addresses.</p>
					<div class="col-md-6 col-md-offset-3">
						<a class="btn btn-default btn-block" href="/users/sign-in?referer=/orders/new" role="button">Login Here</a>
					</div>
				</div>
			</div>

<?php	}	?>
</div>
<form id="add-address" class="hidden" action="/addresses/add_address" method="post">
	<div class="form-group required">
		<label class='control-label'>Name:</label>
		<input type="text" class="form-control" name="name"
			<?php if(isset($edit_address_data)) echo "placeholder='".$edit_address_data['name']."'"?>
		>
	</div>
	<div class="form-group required">
		<label class='control-label'>Mobile:</label>
		<input type="text" class="form-control" name="mob_no"
		<?php if(isset($edit_address_data)) echo "placeholder='".$edit_address_data['mob_no']."'"?>
		>
	</div>
	<div class="form-group required">
		<label class='control-label'>Address:</label>
		<input type="text" class="form-control" name="address"
			<?php if(isset($edit_address_data)) echo "placeholder='".$edit_address_data['address']."'"?>
		>
	</div>
	<div class="form-group required">
		<label class='control-label'>Locality/Town:</label>
		<input type="text" class="form-control" name="town"
			<?php if(isset($edit_address_data)) echo "placeholder='".$edit_address_data['town']."'"?>
		>
	</div>
	<div class="form-group required">
		<label class='control-label'>City/District:</label>
		<input type="text" class="form-control" name="city"
			<?php if(isset($edit_address_data)) echo "placeholder='".$edit_address_data['city']."'"?>
		>
	</div>
	<div class="form-group required">
		<label class='control-label'>State:</label>
		<input type="text" class="form-control" name="state"
			<?php if(isset($edit_address_data)) echo "placeholder='".$edit_address_data['state']."'"?>
		>

	</div>
	<div class="form-group required">
		<label class='control-label'>Pin Code:</label>
		<input type="text" class="form-control" name="pin_code"
			<?php if(isset($edit_address_data)) echo "placeholder='".$edit_address_data['pin_code']."'"?>
		>
	</div>
	<input type="submit" class="btn btn-default" value="Submit" \>
	<button type="button" class="btn btn-default" onClick="show_address_cards();">Go Back</button>	
</form>