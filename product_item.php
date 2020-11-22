<?php

include_once "lib/php/functions.php";
$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
$images = explode(",", $product->images);
$image_elements = array_reduce($image,function($r,$o){
	return $r."<img src='img/$o'>";
});

//print_p($_SESSION);

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product List</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div id="container">

			<form action="cart_actions.php?action=add-to-cart" method="POST" class="">

				<input type="hidden" name="product-id" value="<?= $product->id ?>">
				<section class="item-picture-section col-xs-12 col-md-6">
					<div>
						<img id="item-picture" src="img/<?= $product->thumbnail ?>">
					</div>
					<div>
						<?= $image_elements ?>	
					</div> 
					
				</section>
				<section class="item-description-section col-xs-12 col-md-6">
					
						
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
				</section>
			</form>			
	</div>
	<div id="container-product-detail">
			<div class="product-detail">
				<h2 class="detail-detail">PRODUCT DETAILS</h2>
				<section class="detail-description">
					<h3 class="detail-h3">DESCRIPTION</h3>
					<p class="detail-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, odit eveniet neque voluptate aperiam natus dolorem saepe itaque iste perferendis nihil, minima.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, odit eveniet neque voluptate aperiam natus dolorem saepe itaque iste perferendis nihil, minima.</p>
				</section>
				<section class="detail-features">
					<h3 class="detail-h3">FEATURES</h3>
					<p class="detail-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, odit eveniet neque voluptate aperiam natus dolorem saepe itaque iste perferendis nihil, minima.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, odit eveniet neque voluptate aperiam natus dolorem saepe itaque iste perferendis nihil, minima.</p>
				</section>		
			</div>	
		</div>
	</div>

<?php include "parts/footer.php"; ?>
</body>
</html>




	