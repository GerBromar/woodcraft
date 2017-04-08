<?php
	function drawProduct($main_arr, $pic_arr){
		echo "<div class='container-fluid category categoryProduct'>\n";
		echo "<div class='col-md-6 col-sm-6 productDiv'>\n";
		echo "<h3>$main_arr[name]</h3>\n";
		echo "<a class='fancybox-thumb' rel='fancybox-thumb' href='$main_arr[small_img_orig_link]' title='$main_arr[name]'>\n";
		echo "<img src='$main_arr[small_img_link]' alt='$main_arr[name]'/>\n";
		echo "</a>\n";
		foreach($pic_arr as $pic){
			echo  "<a class='fancybox-thumb' rel='fancybox-thumb' href='$pic' title='$main_arr[name]'></a>\n";			 			
			}
		echo "</div>\n";
		echo "<div class='col-md-6 productDiv'>\n";
		echo "<h3>Описание</h3>\n";
		echo "<p>$main_arr[descr]</p>\n"; 
		echo "<p class='size'>Размеры:	$main_arr[size]</p>\n";
		echo "<p class='productPrice'>Стоимость:	<span class='price'>$main_arr[price]</span></p>\n";				
		echo "</div>\n";					
		echo "</div>\n";				
		}
	?>
