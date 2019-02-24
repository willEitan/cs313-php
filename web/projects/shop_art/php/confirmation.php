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
			echo "<h3>Thank you for shopping!</h3>'";
			echo "Your art request is being processed. <a href='../php/browse.php>Shop Art</a> again soon!";
			/*$confirmation = $db->query("SELECT art_request.description, art_request.status, address.street_address, address.city, address.state, address.postal_code, user_info.first_name, user_info.last_name, art_type.name FROM art_request, address, user_info, art_type JOIN shopper ON user_info.user_info_id = shopper.user_info_id WHERE shopper.shopper_id = '{$_SESSION['shopper']}' JOIN user_ino AS ui ON s.user_info_id = ui.user_info_id");
			
			//$user = $db->query("SELECT u.first_name, u.middle_name, u.last_name FROM user_info AS u JOIN shopper AS s on user_info_id = s.user_info_id WHERE s.user_info_id = ")
			$rows = $confirmation->fetchAll(PDO::FETCH_ASSOC);
			echo "rows: " . $rows;
			if ($rows){
				echo "<h3> Thank you" . $rows[0]['first_name'] . " " . $rows[0]['last_name'] . "for <a href='../php/browse.php'>shopping</a>!</h3>";
				//echo "Your $rows['name'] art request is $rows['status'] and will be shipped to:<br>";
			}*/
			unset($_SESSION);
			session_destroy();
			break;
		
		case 'purchase':
			# code...
			echo "<h3>Thank you for shopping!</h3>'";
			echo "Your art order is being processed. <a href='../php/browse.php>Shop Art</a> again soon!";
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