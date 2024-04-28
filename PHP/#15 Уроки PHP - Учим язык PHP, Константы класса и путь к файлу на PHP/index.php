<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		require_once __DIR__ . '/class.php';
		$p1 = new Size;
		$p1 ->x = 50;
		$p1 ->y = 50;
		$p1 ->z = 50;

		echo $p1 ->x . '<br>';
		echo Size::NAN;
	?>
</body>
</html>
