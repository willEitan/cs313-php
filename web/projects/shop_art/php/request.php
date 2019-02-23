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
		<div class="col-50">
			<div class="container">
				<form method="post" onsubmit="return valRequest();" action="checkout.php?p=request">
					<h3>The Vision</h3>
					<label for="title">Name </label><em class="error-message" id="errAName">Invalid input</em>
					<input type="text" class="text" name="art-name" id="art-name" onblur="valArt();" placeholder="David">
					<label for="artist"> Select Artist </label> <em class="error-message" id="errArtist">Invalid input</em>
					<select class="text" id="artist" onblur="valArtist();"><option> </option>
						<?php 
							$statement = $db->query("SELECT ar.pseudonym, ui.first_name, ui.middle_name, ui.last_name FROM artist AS ar JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id");
							//name parsing 
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
					<label for="type"> Select Art Type </label> <em class="error-message" id="errType">Invalid input</em>
					<select class="text" id="type" onblur="valType();">
						<option> </option>
						<?php
							$statement = $db->query("SELECT name, description FROM art_type");
							foreach($statement as $result) {
								echo "<option class='choose-type'>{$result['name']}</option>";
							}
						?>
					</select>
					<label for="desc"> Describe the artwork you envision in detail </label> <em class="error-message" id="errDesc">Invalid input</em>
					<input type="textarea" class="textarea" name="request-description" id="request-description" onblur="valDesc();">
				</div>
			</div>
			<div class="col-75">
				<div class="container">	
					<div class="row">
						<div class="col-50">
							<h3>Your Info</h3>
							<label for="fname"><i class="fa fa-user"></i> Full Name <em class="error-message" id="errName">Invalid input</em></label>
							<input type="text" class="text" onblur="valName();" id="fname" name="fname" placeholder="Michelangelo di Lodovico Buonarroti Simoni">
							
							<label for="email"><i class="fa fa-envelope"></i> Email <em class="error-message" id="errEmail">Invalid input</em></label>
							<input type="text" class="text" onblur="valEmail();" id="email" name="email" placeholder="michelangelo@sculpt.com">
							
							<label for="adr"><i class="fa fa-address-card-o"></i> Address <em class="error-message" id="errAdr">Invalid input</em></label>
							<input type="text" class="text" onblur="valAdr();" id="adr" name="adr" placeholder="10 david drive">
							
							<label for="city"><i class="fa fa-institution"></i> City <em class="error-message" id="errCity">Invalid input</em></label>
							<input type="text" class="text" onblur="valCity();" id="city" name="city" placeholder="Capresse">
							
							<div class="row">
								<div class="col-50">
									<label for="state">State <em class="error-message" id="errState">Invalid input</em></label>
									<input type="text" class="text" onblur="valState();" id="state" name="state" placeholder="NY">
								</div>
								<div class="col-50">
									<label for="zip">ZIP <em class="error-message" id="errZip">Invalid input</em></label>
									<input type="text" class="text" onblur="valZip();"id="zip" name="zip" placeholder="55555">
								</div>
							</div>
						</div>
						<div class="col-50">
							<h3> FeePayment</h3>
							<label for="fname">Accepted Cards</label>
							<div class="icon-container">
								<i class="fa fa-cc-visa" style="color:navy;"></i>
								<i class="fa fa-cc-amex" style="color:blue;"></i>
								<i class="fa fa-cc-mastercard" style="color:red;"></i>
								<i class="fa fa-cc-discover" style="color:orange;"></i>
							</div>
							<label for="cname">Name on Card <em class="error-message" id="errCname">Invalid input</em></label>
							<input type="text" class="text" onblur="valCname();" id="cname" name="cname" placeholder="Edgar Degas">
							
							<label for="ccnum">Credit Card Number <em class="error-message" id="errCcn">Invalid input</em></label>
							<input type="text" class="text" onblur="valCcn();" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
							
							<label for="expmonth">Exp Month <em class="error-message" id="errEmonth">Invalid input</em></label>
							<input type="text" class="text" onblur="valMonth();" id="expmonth" name="expmonth" placeholder="March">
							
							<div class="row">
								<div class="col-50">
									<label for="expyear">Exp Year <em class="error-message" id="errEyear">Invalid input</em></label>
									<input type="text" class="text" onblur="valYear();" id="expyear" name="expyear" placeholder="2019">
								</div>
								<div class="col-50">
									<label for="cvv">CVV <em class="error-message" id="errCvv">Invalid input</em></label>
									<input type="text" class="text" onblur="valCvv();" id="cvv" name="cvv" placeholder="123">
								</div>									
							</div>
						</div>
						
					</div>
					<label id="agreee">
						<input class="checkboxes" id="legal" type="checkbox" checked="checked" name="agreee" onblur="valLegal();"> I understand that my request may be denied for any reason, and I expect to receive an email to the above provided address within a few business days detailing whether my request has been accepted, and if accepted, the cost and time-frame that will be associted with its production. <em class="error-message" id="errLegal"></em> 
					</label>
					<label>
						<input class="checkboxes" id="feeCheck" type="checkbox" checked="checked" name="feeCheck" onblur="valFee();"> I accept the $3 fee to have my vision considered and state that the above information is correct and will be used in billing art production costs. <em class="error-message" id="errFee"></em>
					</label>
					<label>
						<input type="checkbox" id="address_check" checked="checked" onblur="valCheck();" name="sameadr"> Shipping address same billing <em class="error-message" id="errCheck"></em>
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