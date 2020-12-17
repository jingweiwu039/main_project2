<?php

include_once "lib/php/functions.php";


?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FURNITRE.</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
	
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
	<!--	<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" class="hotdog" placeholder="Search">
				</form>				
			</div>-->
		
		<div class="motto">
			<h1>FURNITURE</h1>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, odit eveniet neque voluptate aperiam natus dolorem saepe itaque iste perferendis nihil, minima. Numquam ullam enim, cupiditate veritatis aperiam quos.</p>
		</div>
	</div>

	<div class="grid">
		<div class="side-filter-container col-md-2 col-sm-12 form-control">
			
			<div class="filter-a">
				<a data-filter="category" data-value="" class="filter-link">All</a>
			</div>
			
			<div class="filter-a">
				<a data-filter="category" data-value="chair" class="filter-link">Chair</a>
			</div>
				<!--	<span class="dropdown-icon svg-icon">
						<svg width="14" height="14" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="dropdown-icon svg-icon">
							<g transform="rotate(90, 12, 12)" class="jsx-1586763759">
								<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" class="jsx-1586763759">
								</path>
							</g>
						</svg>
					</span>-->
				
			
			<div class="filter-a">
				<a data-filter="category" data-value="sofa" class="filter-link">Sofa</a>
			</div>
			
			<div class="filter-a">
				<a data-filter="category" data-value="table" class="filter-link">Table</a>
			</div>
			
			<div class="filter-a">
				<a data-filter="category" data-value="lighting" class="filter-link">Lighting</a>
			</div>
		</div>

		<div class="col-md-9 col-sm-12">
			<div class="form-select-2 sort-by" style="float:right">
				<select class="js-sort">
					<option value="1">Newest First</option>
					<option value="2">Oldest First</option>
					<option value="3">Price high to low</option>
					<option value="4">Price low to high</option>
				</select>
			</div>	
			<div class="container-2">
				<div class="productlist filter grid gap"></div>
			</div>	
			<?php include "parts/footer.php"; ?>
		</div>
	

</body>
</html>


<!--<div class="form-control display-flex">
			<div class="flex-none">
				<button data-filter="category" data-value="chair" type="button" class="form-button">Chair</button>
			</div>
			<div class="flex-none">
				<button data-filter="category" data-value="sofa" type="button" class="form-button">Sofa</button>
			</div>
			<div class="flex-none">
				<button data-filter="category" data-value="table" type="button" class="form-button">Table</button>
			</div>
			<div class="flex-none">
				<button data-filter="category" data-value="lighting" type="button" class="form-button">Lighting</button>
			</div>
		</div>-->