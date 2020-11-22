<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

session_start();

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (3,6,8)");
$cart_items = getCartItems();

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
					<div class="card soft">
						<?= array_reduce($cart_items,'cartListTemplate') ?>	
						
						<br>			
					</div>

				</div>	
			</div>
			<?= cartTotals(); ?>

		

			
		





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