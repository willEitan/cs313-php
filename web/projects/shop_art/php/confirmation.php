<!DOCTYPE html>
<html lang="en">
<head>
	<title>Order Confirmation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../css/shop_style.css">
	<script type="text/javascript" src="../js/shop.js"></script>
	<?php require "db_connect.php";?>
</head>
<body>
	<div include-html="../html/nav.html"></div>
	<script>includeHTML();</script><br>

<?php
	session_start();
	require "db_connect.php";
	$action = filter_input(INPUT_POST, 'action');
	if ($action == NULL) {
		$action = filter_input(INPUT_GET, 'action');
	}

	switch ($action) {
		case 'request':
			# code...
			$confirmation = $db->query("SELECT rq.description, rq.status, ad.street_address, ad.city, ad.state, ad.postal_code, u.first_name, u.last_name, at.name, ui.first_name, ui.middle_name, ui.last_name FROM art_request AS rq JOIN art_type AS at ON rq.art_type_id = at.art_type_id JOIN shopper AS s ON rq.shopper_id = s.shopper_id WHERE s.shopper_id = '{$_SESSION['shopper']}' JOIN user_ino AS ui ON s.user_info_id = ui.user_info_id");
			
			//$user = $db->query("SELECT u.first_name, u.middle_name, u.last_name FROM user_info AS u JOIN shopper AS s on user_info_id = s.user_info_id WHERE s.user_info_id = ")
			$rows = $confirmation->fetchAll(PDO::FETCH_ASSOC);

			if ($rows){
				echo "<h3> Thank you" . $rows[0]['first_name'] . " " . $rows[0]['last_name'] . "for <a href='../php/browse.php'>shopping</a>!</h3>";
				//echo "Your $rows['name'] art request is $rows['status'] and will be shipped to:<br>";
			}
			unset($_SESSION);
			session_destroy();
			break;
		
		case 'purchase':
			# code...
			unset($_SESSION);
			session_destroy();
			break;

		default:
			# code...
			unset($_SESSION);
			session_destroy();
			break;
	}

?>

</body>
<?php
	include "footer.php";
?>
</html>