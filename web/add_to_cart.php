<?php
	session_start();

	$action = filter_input(INPUT_POST, 'action');
	if ($action == NULL){
		$action = filter_input(INPUT_GET, 'action');
	}
	$el = filter_input(INPUT_POST, 'el');
	if ($el == NULL){
		$el = filter_input(INPUT_GET, 'action');
	}
	switch($action){
		case "add":
			if(!empty($_SESSION['cart'])){
				foreach($_SESSION['cart'] as $c){
					if($_SESSION['artwork'][$el] == $c){
						$c['data-quantity']++;
					}
				}
			} else {
				array_push($_SESSION['cart'], $el);
			}
			header('Location: browse.php');
			exit();
			break;
	}				
?>