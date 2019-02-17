<?php
	require "db_connect.php";
	$action = filter_input(INPUT_POST, 'p');
	if ($action == NULL) {
		$action = filter_input(INPUT_GET, 'p');
	}

	switch ($action) {
		case 'request':
			# code...
			break;
		
		case 'purchase':
			break;
		default:
			# code...
			break;
	}
?>