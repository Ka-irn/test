<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		echo round(54.542434, 1, PHP_ROUND_HALF_DOWN); //округляет числа, ей можно управлять 
		echo '<br>';
		echo ceil(43.41); //округляет дробное число в меншую сторону
		echo '<br>';
		echo floor(43.41); //округляет дробное число в большую сторону
	?>
</body>
</html>
