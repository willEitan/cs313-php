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
	<section>
		<?php
			if(isset($_GET) && $_GET['SA']) {	
				$search = htmlspecialchars($_GET['SA']);
				//echo $search;
				if (is_numeric($search)){
					$test_statement = $db->query("SELECT ar.pseudonym, ui.first_name, ui.middle_name, ui.last_name, at.name, a.image, a.image_title FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id WHERE a.rating = {$search} OR a.price = {$search} OR a.discounted_price = {$search}");
				} else {
					$test_statement = $db->query("SELECT ar.pseudonym, ui.first_name, ui.middle_name, ui.last_name, at.name, a.image, a.image_title FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id WHERE ar.pseudonym = '{$search}' OR ui.first_name = '{$search}' OR ui.middle_name = '{$search}' OR ui.last_name = '{$search}' OR at.name = '{$search}' OR a.image_title = '{$search}' ORDER BY image_title");
				}

				$test_results = $test_statement->fetchAll(PDO::FETCH_ASSOC);

				if ($test_results) {
					echo "<h3>Search \"$search\" found results:</h3>";
					//prepare queries
					if (is_numeric($search)){
						$query_1 = $db->query("SELECT a.image, a.image_title FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id WHERE a.rating = {$search} OR a.price = {$search} OR a.discounted_price = {$search}");
						$query_2 = $db->query("SELECT a.image FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id WHERE a.rating = {$search} OR a.price = {$search} OR a.discounted_price = {$search}");
					} else {
						$query_1 = $db->query("SELECT a.image, a.image_title FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id WHERE ar.pseudonym = '{$search}' OR ui.first_name = '{$search}' OR ui.middle_name = '{$search}' OR ui.last_name = '{$search}' OR at.name = '{$search}' OR a.image_title = '{$search}' ORDER BY image_title");
						$query_2 = $db->query("SELECT a.image FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id WHERE ar.pseudonym = '{$search}' OR ui.first_name = '{$search}' OR ui.middle_name = '{$search}' OR ui.last_name = '{$search}' OR at.name = '{$search}' OR a.image_title = '{$search}' ORDER BY image_title");
					}

					require "gallary.php";

				} else {
					echo "<h3>Sorry, query \"$search\" found no results!</h3>";
					echo "<br><strong>Suggestions:</strong><ul><li>Make sure spelling is correct</li><li>Are you searching for: <ul><li>artwork title</li><li>art type</li><li>artist's name</li><li>price OR</li><li>ratings</li></ul></li><li>Make sure your capitalization is correct</li></ul>";
				}
			}
		?>
	</section>
</body>
<!-- <?php
	include "footer.php";
?> -->
</html>