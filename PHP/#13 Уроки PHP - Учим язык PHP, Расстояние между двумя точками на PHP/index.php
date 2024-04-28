<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		require 'class.php';
		$p1 = new Size;
		$p1 ->x = 50;
		$p1 ->y = 50;
		$p1 ->z = 50;

		$p2 = new Size;
		$p2 ->x = 50;
		$p2 ->y = 38;
		$p2 ->z = 10;

		$dis = sqrt(pow(($p2 ->x-$p1 ->x), 2)+pow(($p2 ->y-$p1 ->y), 2)+pow(($p2 ->z-$p1 ->z), 2));
		echo $dis;
	?>
</body>
</html>
