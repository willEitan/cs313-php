<?php
	session_start();
	$artwork = [	'a1' => [ 	'id' = 'al'
								'value' = 'Emma'
								'src' = 'pics/emma.jpg'
								'data-price' = '50']
					'a2' => [ 	'id' = 'a2'
								'value' = 'Oil Landscape'
								'src' = 'pics/oil_landscape.jpg'
								'data-price' = '$50.00']	
					'a3' => [ 	'id' = 'a3'
								'value' = 'Miss Artist'
								'src' = 'pics/sarah.jpg'
								'data-price' = '$70.00']
					'a4' => [ 	'id' = 'a4'
								'value' = 'House in the Woods'
								'src' = 'pics/hitw.jpg'
								'data-price' = '$40.00']	
					'a5' => [ 	'id' = 'a5'
								'value' = 'Unseen Protection'
								'src' = 'pics/unseen_protection.jpg'
								'data-price' = '$60.00']					
					];
	$cart = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ecommerce</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style_03.css">
	<script type="text/javascript" src="myscript_03.js"></script>
</head>
<body>
<!-- 	<header>
		<div class="top">
			<h1>Sarah's artwork</h1>
			<div>
				<form action="cart.php" method="post">
					<input type="submit" name="cart button">
				</form>
			</div>
		</div>
	</header>
	<div class="item-browse">
		<ul class="items">
			<div class="product-details">
				<?php
					//foreach($_SESSION["artwork"] as $art) 
						//echo "<div class='product'> <li class='featured'> <img src='$art['src']' alt='$art['value']'> </li>" . $art['data-price'] . "<div class='add-to-cart'><button value='Add to Cart'></button></div></div>";
					
				?>
			</div>
			<hr>
		</ul>		
	</div> -->
</body>
<footer>
	&copy; 
	<?php
		$created = 2019;
		$current = date('Y');
		echo $created . (($created != $current) ? '-' . $current : '') . " Copyright";
	?> 
</footer>
</html>