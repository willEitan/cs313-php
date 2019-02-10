<!DOCTYPE html>
<html lang="en">
<head>
	<title>Search Results</title>
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

	<div class="main-content">
		<?php
			if(isset($_GET) && $_GET['SA']){	
				$search = htmlspecialchars($_GET['SA']);
				$statement = $db->query("SELECT ar.pseudonym, ui.first_name, ui.last_name, at.name, a.image_title, a.rating, a.price FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id WHERE ar.pseudonym = '{$search}' OR ui.first_name = '{$search}' OR ui.last_name = '{$search}' OR at.name = '{$search}' OR a.image_title = '{$search}' OR a.rating = '{$search}' OR a.price");
				$results = $statement->fetchAll(PDO::FETCH_ASSOC);
				//print_r($results);
				if ($results) {
					echo "Search \"" . $search . "\" found results:<br>";
					echo "<div class='image-wrapper'><img src='{$row['image']}' alt='{$row['image_title']}'width='400px' height='300px' style='display:block;'>";
					echo "<br><p>{$row['image_title']}</p></div><div class='modal'></div>";	

				} else {
					echo "<h3>Sorry, query \"$search\" found nothing!</h3>";
					echo "<br><strong>Suggestions:</strong><ul><li>Make sure spelling is correct</li><li>Make sure you are searching for art title, art description, art type, or artist's name</li>";
				}
			}
		?>
	</div>
</body>
<?php
	include "footer.php";
?>
</html>