<?php
	require "db_connect.php";
	$statement = $db->query('SELECT ar.pseudonym, ui.first_name, ui.last_name, at.name, a.image, a.image_title, a.rating, a.price, a.discounted_price FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id ORDER BY a.image_title');
	$json;
	$index = 0;
	foreach($statement as $row){
		$json->art_title[$index] = $row['image_title'];
		$json->art_type[$index] = $row['name'];
		$json->psy[$index] = $row['pseudonym'];
		$json->fn[$index] = $row['first_name'];
		$json->ln[$index] = $row['last_name'];
		$json->price[$index] = $row['price'];
		$json->dprice[$index] = $row['discounted_price'];
		$json->rating[$index] = $row['rating'];

		$index += 1;
	}

	$encode = json_encode($json);
	echo $encode;
?>