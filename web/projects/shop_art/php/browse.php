<!DOCTYPE html>
<html>
<head>
	<title>Shop Art by Sarah Tenney</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="shop_style.css">
	<script type="text/javascript" src="shop.js"></script>
</head>
<body>
	<script>
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
};
</script>
	<div w3-include-html="../html/nav.html"></div>
	<script>includeHTML();</script>
	<?php
		require "db_connect.php";
	?>
	<!-- <?php
		foreach ($db->query('SELECT  FROM art') as $row)
		{
			//print_r($row);
		  echo "<p><b>" . $row['book'] . " {$row['chapter']}:{$row['verse']} - </b> \"";
		  echo $row['content'];
		  echo '"</p>';
		}
	?> -->
</body>
<?php
	include "footer.php";
?>
</html>