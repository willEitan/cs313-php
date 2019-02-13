<?php
	session_start();
	header("Content-Type: application/json; charset=UTF-8");
	print_r($_GET["cs"]);
	$obj = json_decode($_GET["cs"], false);
	$_SESSION["ids"] = $obj->id;
	$_SESSION["quantites"] = $obj->quantity;
	//header('Location: cart-checkout.php');
?>