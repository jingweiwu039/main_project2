<?php

include_once "lib/php/functions.php";

session_start();

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
$cart_product = cartItemById($_GET['id']);

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product added to cart</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">

		<div class="card soft">
			<div class="confirmation">
				<h3>You added <?= $product->name ?> to your cart!</h3>
				<p>There are now <?= $cart_product->quantity ?> of <?= $product->name ?> in your cart.</p>
			</div>
			<div class="display-flex">
				<div class="flex-none detail-p"><a href="product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none detail-p"><a href="cart.php">Go To Shopping Cart</a></div>
			</div>
			
		</div>	
	</div>
	
	
	<?php include "parts/footer.php"; ?>
</body>
</html