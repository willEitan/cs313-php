<!DOCTYPE html>
<html lang="en">
<head>
	<title>Make request</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/shop_style.css">
	<script type="text/javascript" src="../js/shop.js"></script>
	<script type="text/javascript" src="../js/gallary.js"></script>
	<?php require "db_connect.php";?>
</head>
<body>
	<div include-html="../html/nav.html"></div>
	<script>includeHTML();</script><br>

	<div class="row">	
		<div class="col-75">
			<div class="container">
				<form method="post" action="checkout.php?p=request">	
					<div class="row">
						<div class="col-50">
							<h3>The Vision</h3>
							<label for="title">Name</label>
							<input type="text" class="text" name="name" placeholder="David">
							<label for="type"> Select Artist </label> 
							<select class="text"><option> </option>
								<?php 
									$statement = $db->query("SELECT ar.pseudonym, ui.first_name, ui.middle_name, ui.last_name FROM artist AS ar JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id");
									foreach($statement as $result){
										if ($result['pseudonym']) {
											$name = $result['pseudonym'];
										} else {
											if ($result['middle_name']) {
												$name = $result['first_name'] + ' ' + $result['middle_name'] + ' ' + $result['last_name'];
											} else {
												$name = $result['first_name'] + ' ' + $result['last_name'];
											}
										}
										echo "<option class='choose-artist'>{$name}</option>";
									}
								?>
							</select>
							<label for="type"> Select Art Type </label>
							<select class="text">
								<option> </option>
								<?php
									$statement = $db->query("SELECT name, description FROM art_type");
									foreach($statement as $result) {
										echo "<option class='choose-type'>{$result['name']}</option>";
									}
								?>
							</select>
							<label for="desc"> Describe the artwork you envision in detail </label>
							<input type="textarea" class="textarea" name="request-description">
						</div>
						<div class="col-50">
							<h3>Your Info</h3>
							<label for="fname"><i class="fa fa-user"></i> Full Name</label>
							<input type="text" class="text" id="fname" name="firstname" placeholder="Michelangelo di Lodovico Buonarroti Simoni">
							<label for="email"><i class="fa fa-envelope"></i> Email</label>
							<input type="text" class="text" id="email" name="email" placeholder="michelangelo@sculpt.com">
							<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
							<input type="text" class="text" id="adr" name="address" placeholder="10 david drive">
							<label for="city"><i class="fa fa-institution"></i> City</label>
							<input type="text" class="text" id="city" name="city" placeholder="Capresse">
							<div class="row">
								<div class="col-50">
									<label for="state">State</label>
									<input type="text" class="text" id="state" name="state" placeholder="NY">
								</div>
								<div class="col-50">
									<label for="zip">ZIP</label>
									<input type="text" class="text" id="zip" name="zip" placeholder="55555">
								</div>
							</div>
							<label>
								<input class="checkboxes" type="checkbox" checked="checked" name="sameadr"> Shipping address same billing
							</label>
							<div class="col-50">
							<h3>Fee Payment</h3>
							<label for="fname">Accepted Cards</label>
							<div class="icon-container">
								<i class="fa fa-cc-visa" style="color:navy;"></i>
								<i class="fa fa-cc-amex" style="color:blue;"></i>
								<i class="fa fa-cc-mastercard" style="color:red;"></i>
								<i class="fa fa-cc-discover" style="color:orange;"></i>
							</div>
							<label for="cname">Name on Card</label>
							<input type="text" class="text" id="cname" name="cardname" placeholder="Edgar Degas">
							<label for="ccnum">Credit Card Number</label>
							<input type="text" class="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
							<label for="expmonth">Exp Month</label>
							<input type="text" class="text" id="expmonth" name="expmonth" placeholder="March">
							<div class="row">
								<div class="col-50">
									<label for="expyear">Exp Year</label>
									<input type="text" class="text" id="expyear" name="expyear" placeholder="2019">
								</div>
								<div class="col-50">
									<label for="cvv">CVV</label>
									<input type="text" class="text" id="cvv" name="cvv" placeholder="123">
								</div>									
							</div>
						</div>
						</div>
					</div>
					<label id="agreee">
						<input class="checkboxes" type="checkbox" checked="checked" name="agreee"> I understand that my request may be denied for any reason, and I expect to receive an email to the above provided address within a few business days detailing whether my request has been accepted, and if accepted, the cost and time-frame that will be associted with its production. 
					</label>
					<label>
						<input class="checkboxes" type="checkbox" checked="checked" name="sameadr"> I accept the $3 fee to have my vision considered and state that the above information is correct and will be used in billing art production costs.
					</label>
					
					<input type="submit" value="Request Artwork" class="btn">
				</form>
			</div>
		</div>
	</div>
</body>
<?php
	include "footer.php";
?>
</html>