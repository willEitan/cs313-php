<?php
	session_start();

	//$_SESSION['cart'] = [];
	$_SESSION['artwork'] = [	'a1' => [ 	'id' => 'al',
											'value' => 'Emma',
											'src' => 'pics/emma.jpg',
											'data-price' => '$50.00',
											'data-description' => "",
											'data-quantity'	=> 0],
								'a2' => [ 	'id' => 'a2',
											'value' => 'Oil Landscape',
											'src' => 'pics/oil_landscape.jpg',
											'data-price' => '$50.00',
											'data-description' => "",
											'data-quantity'	=> 0 ],	
								'a3' => [ 	'id' => 'a3',
											'value' => 'Miss Artist',
											'src' => 'pics/sarah.jpg',
											'data-price' => '$70.00',
											'data-description' => "",
											'data-quantity' => 0 ],
								'a4' => [ 	'id' => 'a4',
											'value' => 'House in the Woods',
											'src' => 'pics/hitw.jpg',
											'data-price' => '$40.00',
											'data-description' => "",
											'data-quantity'	=> 0 ],	
								'a5' => [ 	'id' => 'a5',
											'value' => 'Unseen Protection',
											'src' => 'pics/unseen_protection.jpg',
											'data-price' => '$60.00',
											'data-description' => "",
											'data-quantity'	=> 0 ],
								'a6' => [ 	'id' => 'a6',
											'value' => 'Castle on a Hill',
											'src' => 'pics/castle.jpg',
											'data-price' => '$45.00',
											'data-description' => "",
											'data-quantity'	=> 0 ]	
	//$_SESSION['user'] = [];				
						];

	var $action = filter_input(INPUT_POST, 'action');
	if ($action == NULL){
		$action = filter_input(INPUT_GET, 'action');
	}

	switch($action){
		case "a1":
			$_SESSION['artwork']['a1']['data-quantity'] += 1;
			break;
	}				
?>