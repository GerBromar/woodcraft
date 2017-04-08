<?php	
	function drawAllGallery($multi_arr){	
		echo "<div class='container-fluid category'>\n";
			foreach ($multi_arr as $prod_arr){
				echo "<div class='col-md-2 col-sm-6'>\n";
					echo "<div class='picture'>\n";					
						echo "<a id='single_4' href='$prod_arr[small_img_orig_link]' title='$prod_arr[name]'>\n";
						echo "<img class='galleryImages' src='$prod_arr[forgal_img]' alt='$prod_arr[name]'>\n";
						echo "</a>\n";
						echo "<div class='pictureText categoryLink'><a href='$prod_arr[page_link]'>$prod_arr[name]<span class='titleDesc'> (подробнее..)<span></a></div>\n";
					echo "</div>\n";
				echo "</div>\n";
				}		
		echo "</div>\n";
		}
		
	function drawCategory($multi_arr,$type){
		echo "<div class='container-fluid category'>\n";
			foreach ($multi_arr as $prod_arr){
				if (in_array("$type",$prod_arr)){
				echo "<div class='col-md-2 col-sm-6'>\n";
					echo "<div class='picture'>\n";					
						echo "<a id='single_4' href='$prod_arr[small_img_orig_link]' title='$prod_arr[name]'>\n";
						echo "<img class='galleryImages' src='$prod_arr[forgal_img]' alt='$prod_arr[name]'>\n";
						echo "</a>\n";
						echo "<div class='pictureText categoryLink'><a href='$prod_arr[page_link]'>$prod_arr[name]<span class='titleDesc'> (подробнее..)<span></a></div>\n";
					echo "</div>\n";
				echo "</div>\n";
				}				
				}		
		echo "</div>\n";
		}
	?>