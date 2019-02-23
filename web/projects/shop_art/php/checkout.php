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

			$name = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
			$name_parts = explode(' ', $name);
			$first = $name_parts[0];
			$last = $name_parts[sizeof($name_parts)-1];
			$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
			$adr = filter_input(INPUT_POST, "adr", FILTER_SANITIZE_SPECIAL_CHARS);
			$city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_SPECIAL_CHARS);
			$state = filter_input(INPUT_POST, "state", FILTER_SANITIZE_STRING);
			$zip = filter_input(INPUT_POST, "zip", FILTER_SANITIZE_NUMBER_INT);

			$cname = filter_input(INPUT_POST, "cname", FILTER_SANITIZE_SPECIAL_CHARS);
			$ccn = hash("sha256", filter_input(INPUT_POST, "ccnum", FILTER_SANITIZE_NUMBER_INT));
			$cvv = hash ("sha256", "filter_input(INPUT_POST, 'cvv', FILTER_SANITIZE_NUMBER_INT)");
			$month = hash("sha256", filter_input(INPUT_POST, "expmonth", FILTER_SANITIZE_SPECIAL_CHARS));
			$year = hash("sha256", filter_input(INPUT_POST, "expyear", FILTER_SANITIZE_NUMBER_INT));

			echo "name:$name first:$first last:$last email:$email adr:$adr city:$city state:$state zip:$zip cname:$cname ccn:$ccn cvv:$cvv month:$month year:$year";
			
			$is_previous_insert = $db->prepare("SELECT shopper_id FROM shopper WHERE card_number_hash = '{$ccn}' AND card_holder_name = '{$cname}'");
			//$is_previous_insert->bindvalue(':ccn', $ccn, PDO::PARAM_STR);
			//$is_previous_insert->bindvalue(':cname', $cname, PDO::PARAM_STR);
			echo "<script>console.log('prepared');</script>";

			if ($is_previous_insert->fetchAll(PDO::FETCH_ASSOC)) {
			echo "<script>console.log('is_previous_insert');</script>";
				$purchase_order = $db->prepare("INSERT INTO purchase_order (purchase_order_id, shopper_id, ship_to_address_id, total, paid, payment_method_type, creation_date, created_by, last_updated_by, last_update_date, status) VALUES (nextval('o_seq'), (SELECT shopper_id FROM shopper WHERE card_number_hash = '{$ccn}' AND card_holder_name = '{$cname}'), (SELECT address_id WHERE street_address = ':adr' AND  postal_code = ':zip'), :total, FALSE, 'CREDIT', current_date, 1001, 1001, current_date, 'Processing')");
			//	$purchase_order->bindvalue(':ccn', $ccn, PDO::PARAM_STR);
			//	$purchase_order->bindvalue(':cname', $cname, PDO::PARAM_STR);
				$purchase_order->bindvalue(':adr', $adr, PDO::PARAM_STR);
				$purchase_order->bindvalue(':zip', $zip, PDO::PARAM_INT);
				$purchase_order->bindvalue(':total', $_SESSION["total"], PDO::PARAM_INT);
				$purchase_order->execute();

				foreach ($_SESSION["cart"] as $key => $value) {
					$query = $db->query("SELECT art_id, image, image_title, price FROM art WHERE art_id = '{$key}' ORDER BY image_title");
					$results = $query->fetch(PDO::FETCH_ASSOC);

					if ($results) {
						$lookup = $db->prepare("INSERT INTO art_purchase_order_lookup (art_purchase_order_lookup_id, purchase_order_id, art_id, item_quantity, creation_date, created_by, last_updated_by, last_update_date) VALUES (nextval('aol_seq'), {$pdo->lastInsertId('o_seq')}, :key, :value) ");
						$lookup->bindvalue(':key', $key, PDO::PARAM_INT);
						$lookup->bindvalue(':value', $value, PDO::PARAM_INT);
						$lookup->execute();
					}
				}
			} else {
				echo "<script>console.log('new insert');</script>";
				//insertion into user_info table
				/*$user_info = $db->prepare("INSERT INTO user_info (user_info_id, first_name, last_name, email, is_artist, creation_date, created_by, last_updated_by, last_update_date) VALUES (nextval('ui_seq'), :first, :last, :email, FALSE, current_date, 1001, 1001, current_date)");
				$user_info->bindvalue(':first', $first, PDO::PARAM_STR);
				$user_info->bindvalue(':last', $last, PDO::PARAM_STR);
				$user_info->bindvalue(':email', $email, PDO::PARAM_STR);
				$user_info->execute();
				echo "<script>console.log('user_info inserted');</script>";*/
				echo "<br>" . $pdo->lastInsertId(art_seq);
				//insertion into address table
				$address = $db->prepare("INSERT INTO address (address_id, street_address, city, state, postal_code, user_info_id, creation_date, created_by, last_updated_by, last_update_date) VALUES (nextval('ad_seq'), :adr, :city, :state, :zip, {$pdo->lastInsertId('ui_seq')}, current_date, 1001, 1001, current_date");
				$address->bindvalue(':adr', $adr, PDO::PARAM_STR);
				$address->bindvalue(':city', $city, PDO::PARAM_STR);
				$address->bindvalue(':state', $state, PDO::PARAM_STR);
				$address->bindvalue(':zip', $zip, PDO::PARAM_INT);
				$address->execute();
				echo "<script>console.log('address inserted');</script>";

				//insertion into shopper table
				$shopper = $db->prepare("INSERT INTO shopper (shopper_id, user_info_id, card_number_hash, card_cvv_hash, card_exp_month_hash, card_exp_year_hash, creation_date, created_by, last_updated_by, last_update_date, card_holder_name) VALUES (nextval('s_seq'), {$pdo->lastInsertId('ui_seq')}, :cnn, :cvv, :month, :year, current_date, 1001, 1001, current_date, :cname)");
				$shopper->bindvalue(':cnn', $cnn, PDO::PARAM_STR);
				$shopper->bindvalue(':cvv', $cvv, PDO::PARAM_STR);
				$shopper->bindvalue(':month', $month, PDO::PARAM_STR);
				$shopper->bindvalue(':year', $year, PDO::PARAM_STR);
				$shopper->bindvalue(':cname', $cname, PDO::PARAM_STR);
				$shopper->execute();

				//insertion into purchase_order table
				$purchase_order = $db->prepare("INSERT INTO purchase_order (purchase_order_id, shopper_id, ship_to_address_id, total, paid, payment_method_type, creation_date, created_by, last_updated_by, last_update_date, status) VALUES (nextval('o_seq'), {$pdo->lastInsertId('s_seq')}, {$pdo->lastInsertId('ad_seq')}, :total, FALSE, 'CREDIT', current_date, 1001, 1001, current_date, 'Processing')");
				$purchase_order->bindvalue(':total', $_SESSION['total'], PDO::PARAM_INT);
				$purchase_order->execute();
				echo "<script>console.log('purchase order inseted');</script>";

				//insertion into lookup table
				$query = $db->prepare("SELECT art_id, image, image_title, price FROM art WHERE art_id = ':key' ORDER BY image_title");
				foreach ($_SESSION["cart"] as $key => $value) {
					$query->bindvalue(':key', $key, PDO::PARAM_INT);
					$results = $query->fetch(PDO::FETCH_ASSOC);

					if ($results) {
						$lookup = $db->prepare("INSERT INTO art_purchase_order_lookup (art_purchase_order_lookup_id, purchase_order_id, art_id, item_quantity, creation_date, created_by, last_updated_by, last_update_date) VALUES (nextval('aol_seq'), {$pdo->lastInsertId('o_seq')}, :key, :value) ");
						$lookup->bindvalue(':key', $key, PDO::PARAM_INT);
						$lookup->bindvalue(':value', $value, PDO::PARAM_INT);
						$lookup->execute();
						echo "<script>console.log('lookup inserted');</script>";
					}
				}
			}	

			break;

		default:
			# code...
			break;
	}
?>