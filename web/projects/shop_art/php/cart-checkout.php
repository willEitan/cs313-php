<?php
	session_start();
	//print_r($_SESSION["cart"]);
	foreach ($_SESSION["cart"] as $c) {
		print_r($c);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Art Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/shop_style.css">
	<script type="text/javascript" src="../js/shop.js"></script>
	<?php require "db_connect.php";?>
</head>
<body>
	<div include-html="../html/nav.html"></div>
	<script>includeHTML();</script><br>

	<div class="main-content">
		<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_checkout_form-->
		<div class="row">
			<div class="col-75">
				<div class="container">
					<form method="post" action="../php/confirmation.php">
						<div class="row">
							<div class="col-50">
								<h3>Billing Address</h3>
								<label for="fname"><i class="fa fa-user"></i> Full Name</label>
								<input type="text" id="fname" name="firstname" placeholder="Michelangelo di Lodovico Buonarroti Simoni">
								<label for="email"><i class="fa fa-envelope"></i></label>
								<input type="text" id="email" name="email" placeholder="michelangelo@sculpt.com">
								<label for="adr"><i class="fa fa-address-card-o"></i></label>
								<input type="text" id="adr" name="address" placeholder="10 david drive">
								<label for="city"><i class="fa fa-institution"></i></label>
								<input type="text" id="city" name="city" placeholder="Capresse">
								
								<div class="row">
									<div class="col-50">
										<label for="state">State</label>
										<input type="text" id="state" name="state" placeholder="NY">
									</div>
									<div class="col-50">
										<label for="zip">ZIP</label>
										<input type="text" id="zip" name="zip" placeholder="55555">
									</div>
								</div>
							</div>
							<div class="col-50">
								<h3>Payment</h3>
								<label for="fname">Accepted Cards</label>
								<div class="icon-container">
									<i class="fa fa-cc-visa" style="color:navy;"></i>
									<i class="fa fa-cc-amex" style="color:blue;"></i>
									<i class="fa fa-cc-mastercard" style="color:red;"></i>
									<i class="fa fa-cc-discover" style="color:orange;"></i>
								</div>
								<label for="cname">Name on Card</label>
								<input type="text" id="cname" name="cardname" placeholder="Edgar Degas">
								<label for="ccnum">Credit Card Number</label>
								<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
								<label for="expmonth"></label>
								<input type="text" id="expmonth" name="expmonth" placeholder="March">
								<div class="row">
									<div class="col-50">
										<label for="expyear"></label>
										<input type="text" id="expyear" name="expyear" placeholder="2019">
									</div>
									<div class="col-50">
										<label for="cvv">CVV</label>
										<input type="text" id="cvv" name="cvv" placeholder="123">
									</div>									
								</div>
							</div>

						</div>
						<label>
							<input type="checkbox" checked="checked" name="sameadr"> Shipping address same billing
						</label>
						<input type="submit" value="Complete Purchase" class="btn">
					</form>	
				</div>
			</div>
			<div class="container">
				<h4>Art Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i><b><?php ?></b></span></h4>
				<?php

				?>
				<hr>
				<p>Total <span class="price" style="color:black"><b><?php ?></b></span></p>
			</div>
		</div>
	</div>
</body>
<?php
	include "footer.php";
?>
</html>