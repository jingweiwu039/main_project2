<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Furnitre.</title>
	<?php include "parts/meta.php"; ?>

</head>
<style>
	html,body {
		height: 100%;
	}
</style>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="homepage-img">
		<div class="content">
			<div class="slogan">
				<h2 class="main_slogan">hjørne</h2>
				<p>
				   Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
				</p>
			</div>
			<div class="form-control explore-button">
				<a href="product_list.php" class="form-button-s">EXPLORE</a>
			</div>
		</div>		
	</div>

	<div id="container-categories-detail">
		<section class="categories">
			<h1 class="detail-detail">CATEGORIES</h1>
		</section>

		<section class="categories-img">
			<div class="grid gap">
				<div class="col-xs-12 col-sm-3">
					<figure class="figure product-overlay">
						
							<img src="img/accent_chair.jpg">
					
						<figcaption>
							<div class="caption-body">
								<a class="homepage-a" href="product_list.php"><div>FURNITURE</div></a>
								
							</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-xs-12 col-sm-3">
					<figure class="figure product-overlay">
						<img src="img/lighting.jpeg" alt="">
						<figcaption>
							<div class="caption-body">
								<a class="homepage-a" href="product_list.php"><div>LIGHTING</div></a>
	
							</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-xs-12 col-sm-3">
					<figure class="figure product-overlay">
						<img src="img/accessories.jpeg" alt="">
						<figcaption>
							<div class="caption-body">
								<a class="homepage-a" href="product_list.php"><div>ACCESSORIES</div></a>
								
							</div>
						</figcaption>
					</figure>
				</div>	
				<div class="col-xs-12 col-sm-3">
					<figure class="figure product-overlay">
						<img src="img/1.jpg" alt="">
						<figcaption>
							<div class="caption-body">
								<a class="homepage-a" href="product_list.php"><div>OUTDOOR</div></a>
							</div>
						</figcaption>
					</figure>
				</div>			
			</div>
		</div>
			
	    </section>

    </div>

	<?php include "parts/footer.php"; ?>

</body>
</html>