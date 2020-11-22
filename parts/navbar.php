<?php

include_once "lib/php/functions.php";

?>

session_start();

<div class="navbar">
	<ul class="nav nav-flex">
		<h1 class="logo"><a href="index.php">Furnitre.</a></h1>
		<div class="nav-items-wrapper">
			<ul>
				<li><a href="product_list.php">Products</a></li>
				<li><a href="about_us.php">About Us</a></li>
			    <li><a href="contact.php">Contact</a></li> 
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