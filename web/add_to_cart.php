<?php
	session_start();

	$action = filter_input(INPUT_POST, 'action');
	if ($action == NULL){
		$action = filter_input(INPUT_GET, 'action');
	}
	$el = filter_input(INPUT_POST, 'el');
	if ($el == NULL){
		$el = filter_input(INPUT_GET, 'el');
	}
	$cart = $_SESSION['cart'];
	switch($action){
		case "add":
			if(!empty($cart)){
				foreach($cart as $c){
					if($_SESSION['artwork'][$el] == $c){
						$c['data-quantity']++;
					}
				}
			} else {
				$cart = $_SESSION['artwork'][$el];
				$_SESSION['cart'] = $cart;
				//array_push($_SESSION['cart'], $el);
			}
			//header('Location: browse.php');
			//exit();
			//echo $el . " - " . $_SESSION['cart'] . " ";
			print_r($_SESSION['cart']);
			//include(browse.php);
			break;
	}				
?>