<?php
	session_start();
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

			$name = htmlspecialchars($_POST['fname']);
			$first;
			$last;
			$email = htmlspecialchars($_POST['email']);
			$adr = htmlspecialchars($_POST['adr']);
			$city = htmlspecialchars($_POST['city']);
			$state = htmlspecialchars($_POST['state']);
			$zip = htmlspecialchars($_POST['zip']);
			$cname = htmlspecialchars($_POST['cname']);
			$ccn = htmlspecialchars($_POST['ccnum']);
			$ccv = htmlspecialchars($_POST['ccv']);
			$month = htmlspecialchars($_POST['expmonth']);
			$year = htmlspecialchars($_POST['expyear']);

			foreach ($_SESSION["cart"] as $key => $value) {
				$query = $db->query("SELECT art_id, image, image_title, price FROM art WHERE art_id = '{$key}' ORDER BY image_title");
				$results = $query->fetch(PDO::FETCH_ASSOC);

				if ($results) {
					
				}
			}

			$user_info = $db->query("INSERT INTO user_info (user_info_id, first_name, last_name, email, is_artist, creation_date, created_by, last_updated_by, last_update_date) VALUES (nextval(ui_seq, {$first}, {$last}, {$email}, FALSE, current_date, 1001, 1001, current_date))");
			$address = $db->query("INSERT INTO address (address_id, street_address, city, state, postal_code, user_info_id, creation_date, created_by, last_updated_by, last_update_date) VALUES (nextval(ad_seq), {$adr}, {$city}, {$state}, {$zip}, {$pdo->lastInsertId(ui_seq);}, current_date, 1001, 1001, current_date");
			$shopper = $db->query("INSERT INTO shopper (shopper_id, user_info_id, card_number_hash, card_ccv_hash, creation_date, created_by, last_updated_by, last_update_date) VALUES (nextval(s_seq), {$pdo->lastInsertId(ui_seq);}, )");
			$orders = $db->query("INSERT INTO orders (orders_id, shopper_id, ship_to_address_id, total, paid, payment_method_type, creation_date, created_by, last_updated_by, last_update_date) VALUES (nextval(o_seq), {$pdo->lastInsertId(s_seq);}, {$pdo->lastInsertId(ad_seq);}, FALSE, CREDIT, current_date, 1001, 1001, current_date)");
			$lookup = $db->query("INSERT INTO art_order_lookup (art_order_lookup_id, order_id, art_id, item_quantity, creation_date, created_by, last_updated_by, last_update_date) VALUES (nextval(aol_seq), {$pdo->lastInsertId(o_seq);}, {}) ");
			break;

		default:
			# code...
			break;
	}
?>