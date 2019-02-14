<?php
	session_start();
	//header("Content-Type: application/json; charset=UTF-8");
	$cart_json = filter_input(INPUT_POST, 'cs');
	if ($cart_json == NULL){
		$cart_json = filter_input(INPUT_GET, 'cs');
	}
	$_SESSION["log"] = $cart_json;
	$objects = json_decode($_GET["cs"], false);
	$_SESSION["obj"] = $objects;
	foreach ($objects as $obj) {
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = [ "ids" => ["id" => $obj->id ], 
								"quantities" => [ "quantity" => $obj->quantity]
								];
		} else {
			array_push($_SESSION['cart']["ids"], $obj->id);
			array_push($_SESSION['cart']["quantities"], $obj->quantity);
		}
	}
	$_SESSION["ids"] = $obj->id;
	$_SESSION["quantites"] = $obj->quantity;
	header('Location: ../php/cart-checkout.php');
?>