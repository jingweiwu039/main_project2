<?php

include_once "lib/php/functions.php";


?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>About Us</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">

		<div class="card soft">
			<div id="container-product-detail">
			<div class="product-detail">
				<h2 class="detail-detail">GET IN TOUCH</h2>
				<!--<section class="detail-description">
					
					<p class="detail-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, odit eveniet neque voluptate aperiam natus dolorem saepe itaque iste perferendis nihil, minima.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, odit eveniet neque voluptate aperiam natus dolorem saepe itaque iste perferendis nihil, minima.</p>
				</section>
				<section class="detail-features">
				
					<p class="detail-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, odit eveniet neque voluptate aperiam natus dolorem saepe itaque iste perferendis nihil, minima.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, odit eveniet neque voluptate aperiam natus dolorem saepe itaque iste perferendis nihil, minima.</p>
				</section>	-->
				<section class="contact-us">

					<div class="form-control">
							<label class="form-label">FIRST NAME</label>
					</div>
					<div class="form-control">
						<form>
							<input type="text" class="text-box" placeholder="">
						</form>
					</div>

					<div class="form-control">
							<label class="form-label">LAST NAME</label>
					</div>
					<div class="form-control">
						<form>
							<input type="text" class="text-box" placeholder="">
						</form>
					</div>
					<div class="form-control">
							<label class="form-label">PHONE</label>
					</div>
					<div class="form-control">
						<form>
							<input type="text" class="text-box" placeholder="">
						</form>
					</div>
					<div class="form-control">
							<label class="form-label">EMAIL</label>
					</div>
					<div class="form-control">
						<form>
							<input type="text" class="text-box" placeholder="">
						</form>
					</div>
					<div class="form-control">
							<label class="form-label">CITY</label>
					</div>
					<div class="form-control">
						<form>
							<input type="text" class="text-box" placeholder="">
						</form>
					</div>
					<div class="form-control">
							<label class="form-label">Country</label>
								<div class="form-select" style="width:50%">
									<select>
										<option>Choose</option>
										<option>United States</option>
										<option>Hong Kong</option>
									</select>
								</div>
					</div>
					<div class="form-control">
						<form>
							<input type="text" class="text-box" placeholder="">
						</form>
					</div>
					<div class="form-control">
							<label class="form-label">POST CODE</label>
					</div>
					<div class="form-control">
						<form>
							<input type="text" class="text-box" placeholder="">
						</form>
					</div>
					<div class="form-control">
							<label class="form-label">MESSAGES</label>
					</div>
					<div class="form-control">
						<form>
							<input type="text" class="text-box" placeholder="">
						</form>
					</div>
					<div class="form-control submit-button">
						<a href="confirmation.php" class="form-button">SUBMIT</a>
					</div>
				</section>
			</div>	
		</div>
	</div>
	
	
	
	<?php include "parts/footer.php"; ?>
</body>
</html