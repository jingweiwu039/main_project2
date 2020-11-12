<?php

function productListTemplate($r,$o) {
return $r.<<<HTML
<div>
	<div>$o->name</div>
	<div>$o->price</div>
</div>
HTML;
}