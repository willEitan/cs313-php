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

	switch($action){
		case "add":

			if(!isset($_SESSION['cart'])){
				 $_SESSION['cart'] = $_SESSION['artwork'][$el];
			} else {
				array_push($_SESSION['cart'], $_SESSION['artwork'][$el]);
			}

			header('Location: browse.php');
			exit();
			break;
		case "remove":

			break;
	}				
?>