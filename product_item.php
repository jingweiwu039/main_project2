<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
$images = explode(",", $product->images);
$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='img/$o'>";
});

//print_p($_SESSION);

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product List</title>
	<?php include "parts/meta.php"; ?>

	<script src="js/product_thumbs.js"></script>
</head>
<body>
	<?php include "parts/navbar.php"; ?>


	<div id="container">
		
	


		<div class="grid">
			<!--Left section-->
			<div class="item-picture-section col-lg-7 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
				<div class="images-main">
					<img src="img/<?= $product->thumbnail ?>">
				</div>
				<div class="images-thumbs">
					<?= $image_elements ?>	
				</div> 
				
			</div>
			<!--Right section-->
			<div class="item-description-section col-lg-5 col-md-12 col-sm-12 col-xs-12">
		
				<form action="cart_actions.php?action=add-to-cart" method="POST" class="">

					<input type="hidden" name="product-id" value="<?= $product->id ?>">
				
					
					<h1 class="item-title"><?= $product->name ?></h1>
					<p class="description">
						<?= $product->description ?>
					</p>
					<p class="price">&dollar;<?= $product->price ?></p>

					<div class="display-inline-block">
				    	<label for="product-quantity" class="form-label">Quantity</label>
						<div class="form-select quantity">
							<select id="product-quantity" name="product-quantity">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
							</select>
						</div>
					</div>

					<div class="form-control">
						<input type="submit" class="form-button" value="ADD TO CART">
					</div>
				</form>	

			</div>

		</div>
	</div>









	<!--<div id="container">
				
			
				<section class="item-picture-section col-xs-12 col-md-6">
					<div class="images-main">
						<img src="img/<?= $product->thumbnail ?>">
					</div>
					<div class="images-thumbs">
						<?= $image_elements ?>	
					</div> 
						
				</section>

				<section class="item-description-section col-xs-12 col-md-6">
					<form action="cart_actions.php?action=add-to-cart" method="POST" class="">

						<input type="hidden" name="product-id" value="<?= $product->id ?>">
					
						
						<h1 class="item-title"><?= $product->name ?></h1>
						<p class="description">
							<?= $product->description ?>
						</p>
						<p class="price">&dollar;<?= $product->price ?></p>

						<div class="display-inline-block">
					    	<label for="product-quantity" class="form-label">Quantity</label>
							<div class="form-select quantity">
								<select id="product-quantity" name="product-quantity">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</div>
						</div>

						<div class="form-control">
							<input type="submit" class="form-button" value="ADD TO CART">
						</div>
					</form>	
				</section>
					
	</div>-->
	<div id="container-product-detail">
			<div class="product-detail">
				<h2 class="detail-detail">PRODUCT DETAILS</h2>
				<section class="detail-description">
					<h3 class="detail-h3">DESCRIPTION</h3>
					<p class="detail-p">Bauhaus meets Mid Century!<br><br>

					The elaborately stitched segments on the seat and backrest, as well as the all-round piping give the chair the timeless look of the Mid-Century. This line offers a soft, velvety padding which is extremely dirt resistant.</p>
				</section>
				<section class="detail-features">
					<h3 class="detail-h3">SPECIAL CARE</h3>
					<p class="detail-p">When dirty or dusty, please tend to clear your furniture using a clean, damp cloth before leaving it to dry. If any substantial moisture remains after cleaning it, please wipe the surface dry to avoid any staining.</p>
				</section>
				<section class="detail-features">
					<h3 class="detail-h3">STORY</h3>
					<p class="detail-p">Designed and manufactured within the EU, Sternzeit is big on sustainable materials and serene seating. Since 2010, Sternzeit has been producing luxurious seating with an eye-catching mixture of Bauhaus and Scandinavian influences.</p>
				</section>				
			</div>	
		</div>
	</div>


	<div class="recommendation">
		<h2 class="detail-detail">RECOMMENDED PRODUCTS</h2>
		<?php 
			recommendedSimilar($product->category, $product->id);
		?>
	</div>


<?php include "parts/footer.php"; ?>
</body>
</html>




	