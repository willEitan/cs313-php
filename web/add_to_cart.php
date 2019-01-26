<?php
	session_start();

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