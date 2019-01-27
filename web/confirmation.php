<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thank you</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style_03.css">
	<script type="text/javascript" src="myscript_03.js"></script>
</head>
<body>
	<h3>Thank you <?php echo $_POST['First Name'] . " " . $_POST['Last Name']; ?> for purchasing Shop Art:</h3>
	<ul>
		<?php
			foreach($_SESSION['cart'] as $item){
				echo "<li>" . $item['value'] . "($" . $item['data-price'] . ")</li><br>";
			}
		?>
	</ul>
	<br>
	<h4>They will be shipped to:</h4>
	<p id="customer_address">
		<?php
			$address = htmlspecialchars($_SESSION['address']);
			echo $address;
		?>
	</p>
	<em>Please <a href="browse.php">Shop Art</a> again soon!</em>
</body>
<?php
	session_unset();
	session_destroy();
?>
<footer><?php include 'footer.php';?></footer>
</html>