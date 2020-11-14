<?php

include_once "lib/php/functions.php";


$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];


?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">

		<div class="card soft">
			<h3><?= $product->name ?> is successfully added to your cart!</h3>
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