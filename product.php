<?php
//Инициализация переменных, заголовка и функций
$id = strtolower(strip_tags(trim($_GET['id'])));
include_once "inc/products.arr.inc.php";
include_once "inc/products.func.inc.php";
include_once "inc/products.switch.inc.php";
?>
<!DOCTYPE html>
<html lang="ru">
	<!--Head-->
	<head>
		<title><?php echo $main_array[name]?></title>
		<?php
		include_once "inc/head.inc.php";
		?>
	</head>
	<body>
		<!-- Header -->
		<?php
		include_once "inc/header.inc.php";
		?>			
		<!-- Content buttons -->
		<?php
		include_once "inc/main.buttons.inc.php";
		?>		
		<!--Content-->
		<?php							
		drawProduct($main_array,$picture_array);
		?>		
		<!-- Footer -->
		<?php
		include_once "inc/footer.inc.php";
		?>		
	</body>
</html>