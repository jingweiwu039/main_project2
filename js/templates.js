
const listItemTemplate = templater(o=>`
<a class="col-lg-4 col-md-6 col-sm-12 col-xs-12" href="product_item.php?id=${o.id}">
	<figure class="figure product product-zoom">
		<img src="img/${o.thumbnail}" alt="">
		<figcaption>
			<div>${o.name}</div>
			<div>&dollar;${o.price.toFixed(2)}</div>
		</figcaption>
	</figure>
</a>
`);