<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style_03.css">
	<script type="text/javascript" src="myscript_03.js"></script>
</head>
<body>
	<h1>Checkout</h1>
	<h3>Thank you for shoping!</h3>
	<div class="checkout">
		<form method="post" action="confirmation.php">
			First Name: <input class="checkout-input" type="text" name="First Name">
			Last Name: <input class="checkout-input" type="text" name="Last Name">
			Street Address: <input class="checkout-input" type="text" name="Street Address">
			City: <input class="checkout-input" type="text" name="City">
			ZIP: <input class="checkout-input" type="text" name="ZIP">
			<input type="submit" name="Confirm" onclick="getAddress();">
		</form>
	</div>
</body>
<footer>
	
</footer>
</html>