<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		define('CON', 4);
		echo CON . '<br>';
		if (defined('CON')) {
			echo 'Константа создана' . '<br>';
		}

		$n = rand(10,50);
		$name = "BAT($n)";
		define($name, $n);
		echo constant($name);
	?>
</body>
</html>
