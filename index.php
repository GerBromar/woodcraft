<?php
	//Инициализация заголовков страницы
	$title = 'Главная WoodCraft';	
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
		<!--Header-->
		<?php
		include_once "inc/header.inc.php";
		?>
		<!--Main content-->	
		<?php				
		include_once "inc/index.inc.php";									
		?>
		<!-- Footer -->
		<?php
		include_once "inc/footer.inc.php";
		?>
	</body>
</html>