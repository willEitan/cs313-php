<!--gallary content-->
<div class='content'>
	<?php
		$i = 1;
		foreach ($query_1 as $row)
		{
			echo "<div class='image-wrapper'><img src='{$row['image']}' alt='{$row['image_title']}'width='600px' height='400px' style='display:block;' onclick='openModal(); currentSlide({$i});'>";
			echo "<div class='desc'><p>{$row['image_title']}</p></div></div>";			
			$i += 1;
		}
	?>
</div>

<!-- modal content -->
<div id='myModal' class='modal'>
	<span class='close cursor' onclick='closeModal()'>&times;</span>
	<div class='modal-content'>
		<?php
			foreach ($query_2 as $row) {
				//hidden slides
				echo "<div class='mySlides'><img src='{$row['image']}' width='100%'></div>";
			}
		?>
	</div>
	<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
	<a class='next' onclick='plusSlides(1)'>&#10095;</a>
</div>

<!-- sidebar content -->
<div id='mySidebar' class='sidebar'>
	<p class="art-integrals" id="title"></p>
	<p class="art-integrals" id="type"></p>
	<p class="art-integrals" id="artist"></p>
	<p class="art-integrals" id="price"></p>
	<p class="art-integrals" id="dprice"></p>
	<br><input id="quantity" type="text" value="1" name=""><br>
	<button onclick="addtocart();" id="addtocart" value="Add to Cart" name="Add to Cart">Add to Cart</button>
</div>

<script type="text/javascript" src="../js/gallary.js"></script>