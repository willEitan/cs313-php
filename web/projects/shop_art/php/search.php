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
				//echo $search;
				if (is_numeric($search)){
					$query_1 = $db->query("SELECT ar.pseudonym, ui.first_name, ui.middle_name, ui.last_name, at.name, a.image, a.image_title FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id WHERE a.rating = {$search} OR a.price = {$search} OR a.discounted_price = {$search}");
					$query_2 = $db->query("SELECT a.image, a.image_title FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id WHERE a.rating = {$search} OR a.price = {$search} OR a.discounted_price = {$search}");
				} else {
					$query_1 = $db->query("SELECT ar.pseudonym, ui.first_name, ui.middle_name, ui.last_name, at.name, a.image, a.image_title FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id WHERE ar.pseudonym = '{$search}' OR ui.first_name = '{$search}' OR ui.middle_name = '{$search}' OR ui.last_name = '{$search}' OR at.name = '{$search}' OR a.image_title = '{$search}'");
					$query_2 = $db->query("SELECT a.image, a.image_title FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id WHERE ar.pseudonym = '{$search}' OR ui.first_name = '{$search}' OR ui.middle_name = '{$search}' OR ui.last_name = '{$search}' OR at.name = '{$search}' OR a.image_title = '{$search}'");
				}
				
				$results = $statement->fetchAll(PDO::FETCH_ASSOC);
				//print_r($results);
				if ($results) {
					echo "<h3>Search \"$search\" found results:</h3>";
					require "gallary.php";
					/*foreach ($results as $row) {
						echo "<div class='image-wrapper'><img src='{$row['image']}' alt='{$row['image_title']}'width='400px' height='300px' style='display:block;'>";
						echo "<br><p>{$row['image_title']}</p></div><div class='modal'></div>";	
					}*/
				} else {
					echo "<h3>Sorry, query \"$search\" found no results!</h3>";
					echo "<br><strong>Suggestions:</strong><ul><li>Make sure spelling is correct</li><li>Are you searching for: <ul><li>artwork title</li><li>art type</li><li>artist's name</li><li>price OR</li><li>ratings</li></ul></li><li>Make sure your capitalization is correct</li></ul>";
				}
			}
		?>
	</div>
</body>
<?php
	include "footer.php";
?>
</html>