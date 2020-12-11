<?php 

include "../lib/php/functions.php";

$empty_product = (object) [
	"name"=>"Natural Chair",
	"material"=>"wood",
	"color"=>"brown",
	"dimensions"=>"100x100",
	"price"=>"400",
	"category"=>"chair",
	"description"=>"It combines innovation with traditional techniques",
	"thumbnail"=>"natural_chair_thumb.jpg",
	"images"=>"natural_chair_1.jpg,natural_chair_2.jpg"
];


// LOGIC

try {
	$conn = makePDOConn();
	switch($_GET['action']){
		case "update":
			$statement = $conn->prepare("UPDATE
				`products`
				SET
					`name`=?,
					`price`=?,
					`color`=?,
					`material`=?,
					`dimensions`=?,
					`category`=?,
					`description`=?,
					`thumbnail`=?,
					`images`=?,
					`date-modify`= NOW()
				WHERE `id` =?
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-price'],
				$_POST['product-color'],
				$_POST['product-material'],
				$_POST['product-dimensions'],
				$_POST['product-category'],
				$_POST['product-description'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
				$_GET['id']
			]);
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$statement = $conn->prepare("INSERT INTO
				`products`
				
				(	
					`name`,
					`price`,
					`color`,
					`material`,
					`dimensions`,
					`category`,
					`description`,
					`thumbnail`,
					`images`,
					`date-create`,
					`date-modify`
				)
				VALUES (?,?,?,?,?,?,?,?,?,NOW(),NOW())
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-price'],
				$_POST['product-color'],
				$_POST['product-material'],
				$_POST['product-dimensions'],
				$_POST['product-category'],
				$_POST['product-description'],
				$_POST['product-thumbnail'],
				$_POST['product-images']
			]);
			$id = $conn->lastInsertId();
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
			$statement->execute([$_GET['id']]);
			header("location:{$_SERVER['PHP_SELF']}");
			break;			
	}
}	catch(PDOException $e) {
	die($e->getMessage());
}


// TEMPLATES
function productListItem($r,$o) {
return $r.<<<HTML
<div class="card soft">
	<div class="display-flex">
		<div class="flex-none images-thumbs"><img src='img/$o->thumbnail'></div>
		<div class="flex-stretch" style="padding: 1em">$o->name</div>
		<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button-s">Edit</a></div>
	</div>
</div>
HTML;
}

function showProductPage($o) {
$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$action = $id == "new" ? "create" : "update";
$images = array_reduce(explode(",",$o->images),function($r,$o){return $r."<img src='img/$o'>";});
  // heredoc
$display = <<<HTML
<div>
	<h2>$o->name</h2>
	<div class="form-control">
		<label class="form-label">Price</label>
		<span>&dollar;$o->price</span>
	</div>
	<div class="form-control">
		<label class="form-label">Material</label>
		<span>$o->material</span>
	</div>
	<div>
		<label class="form-label">Category</label>
		<span>$o->category</span>
	</div>
	<div class="form-control">
		<label class="form-label">Dimensions</label>
		<span>$o->dimensions</span>
	</div>
	<div class="form-control">
		<label class="form-label">Color</label>
		<span>$o->color</span>
	</div>
	<div class="form-control">
		<label class="form-label">Description</label>
		<span>$o->description</span>
	</div>
	<div class="form-control">
		<label class="form-label">Thumbnail</label>
		<span class="images-thumbs"><img src='img/$o->thumbnail'></span>
	</div>
	<div class="form-control">
		<label class="form-label">Other Images</label>
		<span  class="images-thumbs">$images</span>
	</div>
</div>
HTML;
$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$action">
	<h2>$addoredit Product</h2>
	<div class="form-control">
		<label class="form-label" for="product-name">Name</label>
		<input class="form-input" type="text" name="product-name" id="product-name" value="$o->name" placeholder="Enter the Product Name">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-price">Price</label>
		<input class="form-input" name="product-price" id="product-price" type="number" min="0" max="100000" step="0.01" value="$o->price" placeholder="Enter the Product price">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-material">Material</label>
		<input class="form-input" name="product-material" id="product-material" type="text" min="0" max="1000" step="1" value="$o->material" placeholder="Enter the Product material">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-category">Category</label>
		<input class="form-input" name="product-category" id="product-category" type="text" min="0" max="1000" step="1" value="$o->category" placeholder="Enter the Product category">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-dimensions">Dimensions</label>
		<input class="form-input" name="product-dimensions" id="product-dimensions" type="text" min="0" max="1000" step="1" value="$o->dimensions" placeholder="Enter the Product dimensions">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-color">Color</label>
		<input class="form-input" name="product-color" id="product-color" type="text" min="0" max="1000" step="1" value="$o->color" placeholder="Enter the Product color">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-description">Description</label>
		<textarea class="form-input" name="product-description" id="product-description" type="text" value="$o->description" placeholder="Enter the Product description">$o->description</textarea>
	</div>
	<div class="form-control">
		<label class="form-label" for="product-thumbnail">Thumbnail</label>
		<input class="form-input" type="text" name="product-thumbnail" id="product-thumbnail" value="$o->thumbnail" placeholder="Enter the Product thumbnail">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-images">Other Images</label>
		<input class="form-input" type="text" name="product-images" id="product-images" value="$o->images" placeholder="Enter the Product images">
	</div>
	<div class="form-control">
		<input type="submit" class="form-button" value="Save Changes">
	</div>
</form>
HTML;


$output = $id == "new" ? "<div class='card soft'>$form</div>" :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
		<div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";



echo <<<HTML
<div class="card soft">
	<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
		<div class="flex-none">$delete</div>		
	</nav>
</div>
$output
HTML;

}



?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>
	<div class="navbar">
		<ul class="nav nav-flex">
			<h1 class="logo">Product Admin</h1>
			<div class="nav-items-wrapper">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
				</ul>
			</div>
		</ul>				
	</div>

	<div class="container">
		<?php 
            if(isset($_GET['id'])) {
            	showProductPage(
            		$_GET['id']=="new" ?
            		$empty_product :
            		makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
            	);

            	//showProductPage();
            } else {

			?>
			<h2>Product List</h2>
			
			<?php

			$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date-create` DESC");

			echo array_reduce($result,'productListItem');

			?>


		    <?php } ?>
	</div>
</body>