<?php
	$id = strtolower(strip_tags(trim($_GET['id'])));
	switch ($id) {
		case 'furniture':
			$title = 'Мебель';
			break;
		case 'light':
			$title = 'Освещение';
			break;
		case 'boxes':
			$title = 'Сундуки, корзины, коробы';
			break;
		case 'miniboxes':
			$title = 'Шкатулки';
			break;
		case 'forkids':
			$title = 'Для детей';
			break;
		case 'landscape':
			$title = 'Ландшафт';
			break;
		case 'country_house':
			$title = 'Экстерьер и дача';
			break;
		case 'mode':
			$title = 'Быт';
			break;
		}
	
	?>
<!DOCTYPE html>
<html lang="ru">
	<!--Head-->
	<head>
		<title><?php echo $title?></title>
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
		<?php include_once "inc/category.title.inc.php"?>;
		<!-- Content buttons -->
		<?php
		include_once "inc/main.buttons.inc.php";
		?>
		<!--allGallery-->
		<?php
		include_once "inc/products.arr.inc.php";
		include_once "inc/products.main.arr.inc.php";
		include_once "inc/products.gal.func.inc.php";
		drawCategory($main_prod_arr,$id);
		?>	
		<!-- Footer -->
		<?php
		include_once "inc/footer.inc.php";
		?>			
	</body>
</html>