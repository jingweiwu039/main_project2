<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<section class="container">
		<div class="motto">
			<h1>FURNITURE</h1>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, odit eveniet neque voluptate aperiam natus dolorem saepe itaque iste perferendis nihil, minima. Numquam ullam enim, cupiditate veritatis aperiam quos.</p>

		</div>
	</section>

		
	<div class="container">

		<div class="grid gap">
				<div class="col-xs-12 col-sm-4">
					<figure class="figure">
						
					<a href="product_item.php?id=1"><img src="img/13.jpg" alt=""></a>
					<figcaption>
						<div>Barrel Chair</div>
						<div>$1200.00</div>
					</figcaption>
					</figure>
				</div>
				<div class="col-xs-12 col-sm-4">
					<figure class="figure">
						<a href="product_item.php?id=2"><img src="img/14.jpg" alt=""></a>
						<figcaption>
							<div>Armchair</div>
							<div>$1200.00</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-xs-12 col-sm-4">
					<figure class="figure">
						<a href="product_item.php?id=3"><img src="img/15.jpg" alt=""></a>
						<figcaption>
							<div>Lounge Chair</div>
							<div>$1200.00</div>
						</figcaption>
					</figure>
				</div>

				<div class="col-xs-12 col-sm-4">
					<figure class="figure">
						<a href="product_item.php?id=4"><img src="img/16.jpg" alt=""></a>
						<figcaption>
							<div>Product</div>
							<div>$1200.00</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-xs-12 col-sm-4">
					<figure class="figure">
						<a href="product_item.php?id=5"><img src="img/17.jpg" alt=""></a>
						<figcaption>
							<div>Armchair</div>
							<div>$1200.00</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-xs-12 col-sm-4">
					<figure class="figure">
						<a href="product_item.php?id=6"><img src="img/18.jpg" alt=""></a>
						<figcaption>
							<div>Lounge Chair</div>
							<div>$1200.00</div>
						</figcaption>
					</figure>
				</div>

				<div class="col-xs-12 col-sm-4">
					<figure class="figure">
						<a href="product_item.php?id=7"><img src="img/19.jpg" alt=""></a>
						<figcaption>
							<div>Barrel Chair</div>
							<div>$1200.00</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-xs-12 col-sm-4">
					<figure class="figure">
						<a href="product_item.php?id=8"><img src="img/20.jpg" alt=""></a>
						<figcaption>
							<div>Armchair</div>
							<div>$1200.00</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-xs-12 col-sm-4">
					<figure class="figure">
						<a href="product_item.php?id=9"><img src="img/21.jpg" alt=""></a>
						<figcaption>
							<div>Lounge Chair</div>
							<div>$1200.00</div>
						</figcaption>
					</figure>
				</div>

				<?php

				include "lib/php/functions.php";

				$result = makeQuery(makeConn(),"SELECT * FROM `products`");
				
				print_p($result);

				?>

		</div>

	</div>
	<?php include "parts/footer.php"; ?>

</body>
</html>
