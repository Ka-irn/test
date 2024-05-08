<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		function noFunction($a, $g) {
			$s = $a + $g;
			return $s;
		}
		echo noFunction(10, 50);
	?>
</body>
</html>
