<?php


function print_p($v) {
		echo "<pre>",print_r($v),"</pre>";
	}


function file_get_json($filename){
	$file = file_get_contents($filename);
    return json_decode($file);
}


include_once "auth.php";
function makeConn() {
	$conn = new mysqli(...MYSQLIAuth());
	if($conn->connect_errno) die($connect_error);
	$conn->set_charset('utf8');
	return $conn;
}


function makeQuery($conn,$qry) {
	$result = $conn->query($qry);
	if($conn->errno) die($conn->error);
	$a = [];
	while ($row = $result->fetch_object()){
		$a[] = $row;
	}
	return $a;
}


/* CART FUNCTIONS */


function array_find($array,$fn) {
	foreach($array as $o) if($fn($o)) return $o;
	return false;
}
function getCart() {
	return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}
function addToCart($id,$quantity) {
	$cart = getCart();

	$p = array_find($cart,function($o) use($id) { return $o->id==$id; });

	if($p) {
		$p->quantity += $quantity;
	} else {
		$_SESSION['cart'][] = (object)[
			"id"=>$id,
			"quantity"=>$quantity
		];		
	}
}

function resetCart() { $_SESSION['cart'] = []; }


function cartItemById($id) {
	return array_find(getCart(),function($o)use($id){return $o->id==$id;});
}

function makeCartBadge() {
	$cart = getCart();
	if(count($cart)==0) {
		return "";
	} else {
		return array_reduce($cart,function($r,$o){return $r+$o->quantity;},0);
	}
}


























