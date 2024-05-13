<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		function sum() {
			global $var;
			$var = 2;
			return $var;
		}
		$var = 10;
		echo "$var <br>";
		echo sum();
		echo "<br> $var <br>";

		function sumH() {
			static $var1 = 0;
			return ++$var1;
		}
		echo sumH() . "<br>";
		echo sumH() . "<br>";
		echo sumH() . "<br>";
		echo sumH() . "<br>";
		echo sumH() . "<br>";
	?>
</body>
</html>
