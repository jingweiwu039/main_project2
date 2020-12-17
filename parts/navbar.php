<?php

include_once "lib/php/functions.php";

?>

<script src="lib/js/functions.js"></script>
<script src="js/templates.js"></script>
<script src="js/product_list.js"></script>
<div class="content">
	<input type="checkbox" id="menu">
</div>	

<div class="navbar">
	<ul class="nav nav-flex">
		<div class="flex-none">
			<h1 class="logo"><a href="index.php">Furnitre.</a></h1>
		</div>
		<div class="flex-stretch"></div>
		<div class="flex-none menu-button">
			<label for="menu">&equiv;</label>
		</div>
		
		<div class="nav-items-wrapper nav-flex">
			<ul>
				<li>
					<div class="form-control">
						<form class="hotdog light" id="product-search">
							<input type="search" class="hotdog nav-search" placeholder="Search">
						</form>				
					</div>
				</li>
				<li><a href="product_list.php" class="nav-hover">Products</a></li>
				<li><a href="about_us.php" class="nav-hover">About Us</a></li>
			    <li><a href="contact.php"  class="nav-hover">Contact</a></li> 
				<li><a href="cart.php">
		  			<span>Cart</span>
		  			<span class="badge"><?= makeCartBadge(); ?></span>
		  		</a></li>
			</ul>
		</div>
	</ul>				
</div>



<!--
<li><a href="#"><i class="fa fa-fw fa-search"></i></a>
<li><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
<li><a href="#"><i class="fa fa-fw fa-user"></i></a></li>  -->

