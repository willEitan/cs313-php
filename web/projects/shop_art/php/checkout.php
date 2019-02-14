<?php
	session_start();
	//header("Content-Type: application/json; charset=UTF-8");
	$cart_json = filter_input(INPUT_POST, 'cs');
	if ($cart_json == NULL){
		$cart_json = filter_input(INPUT_GET, 'cs');
	}
	$_SESSION["log"] = print_r($cart_json);
	$obj = json_decode($_GET["cs"], false);
	$_SESSION["ids"] = $obj->id;
	$_SESSION["quantites"] = $obj->quantity;
	header('Location: ../php/cart-checkout.php');
?>