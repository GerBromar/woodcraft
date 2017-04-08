<!DOCTYPE html>
<html lang="ru">
	<!--Head-->
	<head>
		<title>Вся галерея</title>
		<?php
		include_once "inc/head.inc.php";
		?>
	</head>
	<body>
		<!-- Header -->
		<?php
		include_once "inc/header.inc.php";
		?>		
		<!--Category name-->
		<?php
		include_once "inc/gal.butt.title.inc.php";
		?>
		<!--allGallery-->
		<?php
		include_once "inc/products.arr.inc.php";
		include_once "inc/products.main.arr.inc.php";
		include_once "inc/products.gal.func.inc.php";
		drawAllGallery($main_prod_arr);
		?>	
		<!-- Footer -->
		<?php
		include_once "inc/footer.inc.php";
		?>			
	</body>
</html>