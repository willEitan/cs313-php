<?php
	session_start();


	$_SESSION['artwork'] = [	'a1' => [ 	'id' => 'al',
											'value' => 'Emma',
											'src' => 'pics/emma.jpg',
											'data-price' => 50.00,
											'data-description' => "Emma Watson drawing",
											'data-quantity'	=> 0],
								'a2' => [ 	'id' => 'a2',
											'value' => 'Oil Landscape',
											'src' => 'pics/oil_landscape.jpg',
											'data-price' => 50.00,
											'data-description' => "Landscape Oil Painting",
											'data-quantity'	=> 0 ],	
								'a3' => [ 	'id' => 'a3',
											'value' => 'Miss Artist',
											'src' => 'pics/sarah.jpg',
											'data-price' => 70.00,
											'data-description' => "The Artist",
											'data-quantity' => 0 ],
								'a4' => [ 	'id' => 'a4',
											'value' => 'House in the Woods',
											'src' => 'pics/hitw.jpg',
											'data-price' => 40.00,
											'data-description' => "A Simple House in the Woods",
											'data-quantity'	=> 0 ],	
								'a5' => [ 	'id' => 'a5',
											'value' => 'Unseen Protection',
											'src' => 'pics/unseen_protection.jpg',
											'data-price' => 60.00,
											'data-description' => "Protection Unseen",
											'data-quantity'	=> 0 ],
								'a6' => [ 	'id' => 'a6',
											'value' => 'Castle on a Hill',
											'src' => 'pics/castle.jpg',
											'data-price' => 45.00,
											'data-description' => "A Castle and a King",
											'data-quantity'	=> 0 ]];

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
		case "address"
			if (!isset($_SESSION['address'])) {
				$_SESSION['address'] .= $_POST['Street Address'];
				$_SESSION['address'] .= $_POST['City'];
				$_SESSION['address'] .= ", ";
				$_SESSION['address'] .= $_POST['ZIP'];
			}
			header('Location: confirmation.php')
			break;
	}				
?>