<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (3,6,8)");

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart</title>
	<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">

		
			
			<div class="motto">
				<h1>YOUR CART</h1>
			</div>
			<div class="hr">
				<hr style="height:2px;border-width:0;background-color:#e8e7e3;margin-bottom: 2vh">
			</div> 
			<!--<section id="cart-img">
				<img src="img/13.jpg">
			</section>-->
			<div class="grid gap">
				<div class="col-xs-12 col-md-12">
					
						<?= array_reduce($cart,'cartListTemplate') ?>	
						
						<br>
						<div class="detail-p">
							<div class="display-flex">
								<div class="flex-stretch">Subtotal</div>
								<div class="flex-none">$1340.00</div>
							</div>
							<br>
							<div class="display-flex">
								<div class="flex-stretch">Shipping</div>
								<div class="flex-none">$100</div>
							</div>
							<br>
							<div class="display-flex">
								<div class="flex-stretch">Taxes</div>
								<div class="flex-none">$120</div>
							</div>
							<hr style="height:1px;border-width:0;background-color:#e8e7e3;margin-top: 2vh;">
							<br>
							

							<div class="detail-p-total display-flex">
								<div class="flex-stretch">Subtotal</div>
								<div class="flex-none">$1560.00</div>
							</div>
							<hr style="height:2px;border-width:0;background-color:#e8e7e3;margin-top: 2vh">


						</div>

				</div>	
			</div>

		

			<div class="col-xs-12 col-md-7 display-flex">
					<div class="flex-stretch form-control checkout-button" style="margin-top: 0;">
						<a href="checkout_page.php" class="form-button-s checkout-button">CHECKOUT</a>
					</div>
			
				</div>
			</div>
		





		<!--	<div class="form-control checkout-button display-flex">
				<a href="product_list.php" class="form-button-s flex-stretch">Continue Shopping</a>
			</div>
			<div class="form-control checkout-button display-flex">
				<a href="checkout_page.php" class="form-button-s flex-none">Checkout</a>
			</div>
		
	</div>-->
	
	
	<?php include "parts/footer.php"; ?>

</body>
</html>