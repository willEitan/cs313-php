<!DOCTYPE html>
<html lang="en">
<head>
	<title>Almost Done</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../css/shop_style.css">
	<script type="text/javascript" src="shop.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/checkout.css">
	<?php require "db_connect.php";?>
</head>
<body>
	<div include-html="../html/nav.html"></div>
	<script>includeHTML();</script>

	<div class="main-content">
		<h1>Checkout</h1>
		<h3>Thank you for shoping!</h3>
		<div id="checkout">
			<form method="post" action="confirmation.php">
				First Name: <input id="fn" class="checkout-input" type="text" name="First Name">
				Last Name: <input id="ln" class="checkout-input" type="text" name="Last Name">
				Street Address: <input id="sa" class="checkout-input" type="text" name="Street Address">
				City: <input id="city" class="checkout-input" type="text" name="City">
				ZIP: <input id="zip" class="checkout-input" type="text" name="ZIP">

				<input type="submit" name="Confirm" >
				<a href="cart.php"><button>Review Cart</button></a>
			</form>
		</div>
	</div>
</body>
<?php
	include "footer.php";
?>
</html>