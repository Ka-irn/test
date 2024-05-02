<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
	$f = 6;
		if ($f < 10 AND $f > 5) {
			echo 'AND' . '<br>';
		}
		if ($f < 10 && $f > 5) {
			echo '&&' . '<br>';
		}
		if ($f < 10 OR $f > 5) {
			echo 'OR' . '<br>';
		}
		if ($f < 10 || $f > 5) {
			echo '||' . '<br>';
		}
		if (!($f < 10)) {
			echo '!' . '<br>';
		} else {
			echo 'отрицание';
		}
	?>
</body>
</html>
