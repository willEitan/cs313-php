<?php
	session_start();

	$_SESSION['cart'] = [];
	$_SESSION['artwork'] = [	'a1' => [ 	'id' => 'al',
											'value' => 'Emma',
											'src' => 'pics/emma.jpg',
											'data-price' => '50',
											'data-description' => "" ],
								'a2' => [ 	'id' => 'a2',
											'value' => 'Oil Landscape',
											'src' => 'pics/oil_landscape.jpg',
											'data-price' => '$50.00',
											'data-description' => "" ],	
								'a3' => [ 	'id' => 'a3',
											'value' => 'Miss Artist',
											'src' => 'pics/sarah.jpg',
											'data-price' => '$70.00',
											'data-description' => "" ],
								'a4' => [ 	'id' => 'a4',
											'value' => 'House in the Woods',
											'src' => 'pics/hitw.jpg',
											'data-price' => '$40.00',
											'data-description' => "" ],	
								'a5' => [ 	'id' => 'a5',
											'value' => 'Unseen Protection',
											'src' => 'pics/unseen_protection.jpg',
											'data-price' => '$60.00',
											'data-description' => "" ]					
						];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop Art</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style_03.css">
	<script type="text/javascript" src="myscript_03.js"></script>
</head>
<body>
 	<header>
		<div class="top">
			<h1>Sarah's Artwork</h1>
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
		 			$artwork = $_SESSION['artwork'];
		 			$toAdd = [];
		 			foreach ($artwork as $art) {
		 				$src = $art['src'];
		 				$alt = $art['value'];
		 				$price = $art['data-price'];
		 				$add = print_r($art);
		 				echo "<br>" . $add;
		 				echo "<div class='product'><li class='featured'>" . "<img src='$src' alt='$alt'><br>" . $price . "</li></div><br>" . "<div class='add-to-cart'><button onclick()='array_push($toAdd, $art);'>Add to Cart</button></div><br>";
		 			}
		 			$_SESSION['cart'] = $toAdd;
		 		?>
			</div> 
			<hr>
		</ul>		
	</div>
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