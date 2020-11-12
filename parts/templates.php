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

