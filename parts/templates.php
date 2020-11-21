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


function cartListTemplate($r,$o){
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail">
	</div>
	<div class="flex-stretch cart-name detail-p">
		<div class="detail-p-total">$o->name</div>
		<a>Delete</a>
	</div>
	 <div class="quantity buttons_added display-flex" style="align-items: center; flex-direction:row; display:flex; margin-right:2em">
		<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
	</div>
	
	<div class="flex-none cart-name detail-p-total">
		&dollar;$o->price
	</div>
</div>
<hr style="height:1px;border-width:0;background-color:#e8e7e3;margin-top: 15px;margin-bottom: 17px;">
HTML;
}


