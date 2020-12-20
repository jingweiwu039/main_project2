<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
	<title>Checkout Page</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="grid gap">

			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<h2 class="detail-detail">ITEM REVIEW</h2>
					<div>
						<?php
						echo array_reduce($cart,function($r,$o){
							$totalfixed = number_format($o->total,2,'.','');
							return $r."<div class='display-flex'>
							<div class='flex-stretch'>$o->name</div>
							<div class='flex-none'>&dollar;$totalfixed</div>
							</div>";
						}) ?>
					</div>
					<div style="margin-top:2em">
						<?= cartTotals(); ?>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<h2 class="detail-detail">PRODUCT CHECKOUT</h2>

					<h3 class="checkout-address">Address</h3>
					<form class="form">
						<div class="form-control">
						    <label for="address-street" class="form-label">Street</label>
						    <input id="address-street" type="text" placeholder="Street address" class="form-input">
					    </div>

					    <div class="form-control">
					    	<div class="grid gap">
					    		<div class="col-xs-12 col-md-6">
					    			<label for="address-city" class="form-label">City</label>
					    			<input id="address-city" type="text" placeholder="City" class="form-input">
					    		</div>
					    		<div class="col-xs-12 col-md-6">
					    			<label for="address-state" class="form-label">State</label>
					    			<input id="address-state" type="text" placeholder="State" class="form-input">
					    		</div>
					    	</div>
					    </div>
					    <div class="form-control">
					    	<div class="grid gap">
					    		<div class="col-xs-12 col-md-6">
					    			<label for="address-zip" class="form-label">Zip Code</label>
					    			<input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
					    		</div>
					    		<div class="col-xs-12 col-md-6">
					    			<label for="address-country" class="form-label">Country</label>
					    			<input id="address-country" type="text" placeholder="Country" class="form-input">
					    		</div>
					    	</div>
					    </div>
					
					</form>


					<h3 class="checkout-address">Payment</h3>
					<form class="form">
						<div class="form-control">
						    <label for="payment-name" class="form-label">Full Name</label>
						    <input id="payment-name" type="text" placeholder="Full Name" class="form-input">
					    </div>
					    <div class="form-control">
					    	<label for="payment-number" class="form-label">Card Number</label>
					    	<input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
					    </div>

					    <div class="form-control">
					    	<div class="grid gap">
					    		<div class="col-xs-12 col-md-6">
					    			<label for="payment-expiration" class="form-label">Expiration</label>
					    			<input id="payment-expiration" type="text" placeholder="MM/YY" class="form-input">
					    		</div>
					    		<div class="col-xs-12 col-md-6">
					    			<label for="payment-cvv" class="form-label">CVV</label>
					    			<input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
					    		</div>
					    	</div>
					    </div>
					    <div class="form-control">
			    			<label for="payment-zip" class="form-label">Zip Code</label>
			    			<input id="payment-zip" type="text" placeholder="Zip Code" class="form-input">
			    		</div>

					    <div class="form-control complete-button">
							<a href="confirmation.php" class="form-button">Complete</a>
						</div>
					</form>

				</div>
			</div>

			


		</div>	
	</div>

	<?php include "parts/footer.php"; ?>

</body>
</html>