<?php

include_once "lib/php/functions.php";

session_start();

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Furnitre.</title>
	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

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
				<h2 class="main_slogan">Minimalism</h2>
				<p>
				   Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat. 
				</p>
				<div class="form-control explore-button" style="max-width:25em">
					<a href="product_list.php" class="form-button-s" style="margin-top: 0.5em">Shop Now</a>
				</div>
			</div>
		</div>		
	</div>

 <?php
  class Category {
    public $title;
    public $image_path;
    public $link;
    public function __construct(string $title, string $image_path, string $link) {
      $this->title = $title;
      $this->image_path = $image_path;
      $this->link = $link;
    }
  }

  $categories = [
    new Category("CHAIR", "img/accent_chair.jpg", "product_list.php"),
    new Category("LIGHTING", "img/lighting.jpeg", "product_list.php"),
    new Category("TABLE", "img/accessories.jpeg", "product_list.php"),
    new Category("SOFA", "img/1.jpg", "product_list.php"),
  ];
  ?>


	<div id="container-categories-detail">
		<section class="categories">
			<h1 class="detail-detail">CATEGORIES</h1>
		</section>

		<section class="categories-img">
			<div class="grid gap">
		<?php foreach($categories as $category): ?>
				<div class="col-xs-12 col-sm-3" onclick="window.location='<?= $category->link ?>'">
					<figure class="figure product-overlay">
						
							<img src="<?= $category->image_path ?>">
					
						<figcaption>
							<div class="caption-body"><?= $category->title ?></div>			
						</figcaption>
					</figure>
				</div>
		<?php endforeach; ?>
			</div>
		</section>

	<?php include "parts/footer.php"; ?>

</body>
</html>