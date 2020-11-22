<?php

function productListTemplate($r,$o) {
return $r.<<<HTML
<a class="col-xs-12 col-sm-4" href="product_item.php?id=$o->id">
	<figure class="figure product product-zoom">
		<img src="img/$o->thumbnail" alt="">
		<figcaption>
			<div>$o->name</div>
			<div>&dollar;$o->price</div>
		</figcaption>
	</figure>
</a>

HTML;
}

function selectQuantity ($quantity=1,$total=6) {
	$output = "<select name='quantity'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$quantity?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}



function cartListTemplate($r,$o){
$totalfixed = number_format($o->total,2,'.','');
$selectquantity = selectQuantity($o->quantity,6);
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<div class="detail-p-total">$o->name</div>
		<form action="cart_actions.php?action=delete-cart-item" method="post">
			<input type="hidden" name="id" value="$o->id">
			<input type="submit" class="btn delete" value="Delete" style="font-size: 0.9em">
		</form>
	</div>
	<!--<div class="quantity buttons_added display-flex" style="align-items: center; flex-direction:row; display:flex; margin-right:2em">
		<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
			<input type="hidden" name="id" value="$o->id">
			<input type="number" step="1" min="1" max="" name="quantity" value="$o->quantity" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
		</form>
	</div>-->
	
	<div class="flex-none">
		<div class="cart-name detail-p-total">
			&dollar;$totalfixed
		</div>
		<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
			<input type="hidden" name="id" value="$o->id">
				<div class="form-select">
					$selectquantity
				</div>	
		</form>		
	</div>
</div>
<hr style="height:1px;border-width:0;background-color:#e8e7e3;margin-top: 15px;margin-bottom: 17px;">
HTML;
}



function cartTotals() {
	$cart = getCartItems();

	$cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0725,2,'.','');
	$taxedfixed = number_format($cartprice*1.0725,2,'.','');

	return <<<HTML
	<div class="detail-p">
		<div class="display-flex">
			<div class="flex-stretch">Subtotal</div>
			<div class="flex-none">&dollar;$pricefixed</div>
		</div>
		<br>
	<!--	<div class="display-flex">
			<div class="flex-stretch">Shipping</div>
			<div class="flex-none">$100.00</div>
		</div>
		<br>-->
		<div class="display-flex">
			<div class="flex-stretch">Taxes</div>
			<div class="flex-none">&dollar;$taxfixed</div>
		</div>
		<hr style="height:1px;border-width:0;background-color:#e8e7e3;margin-top: 2vh;">
		<br>
		

		<div class="detail-p-total display-flex">
			<div class="flex-stretch">Subtotal</div>
			<div class="flex-none">&dollar;$taxedfixed</div>
		</div>
		<hr style="height:2px;border-width:0;background-color:#e8e7e3;margin-top: 2vh">


	</div>
	<div class="col-xs-12 col-md-7 display-flex" style="flex-direction:row-reverse;">
		<div class="form-control">
			<a href="checkout_page.php" class="form-button-s">CHECKOUT</a>
		</div>
	</div>
HTML;
}


































































