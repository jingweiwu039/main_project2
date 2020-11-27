<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

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
				<h2>&#x2713; ADDED TO YOUR CART</h2>
				<p><?= $cart_product->quantity ?> x <?= $product->name ?></p>
			</div>
			
			<hr style="height:2px;border-width:0;background-color:#e8e7e3;margin-bottom: 2vh">
			
			<div class="display-flex">
				<div class="flex-none detail-p"><a href="product_list.php">CONTINUE SHOPPING</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none detail-p"><a href="cart.php">VIEW CART</a></div>
			</div>
		</div>
	</div>
	
	
	<?php include "parts/footer.php"; ?>
</body>
</html>