<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
	$var =0.0;
		if ($var) {
			echo 'Переменная $var рассамтривается как true <br>';
		} else {
			echo 'Переменная $var рассамтривается как false <br>';
		}
		$h = 1.2;
		$n = (int)$h;
		echo $n;
		echo "<br>";
		$num = 50;
		if (isset($num)) {
			$g = (float)($num/2) - (int)($num/2);
			if ($g) {
				echo "Не чётное";
			} else {
				echo "Чётное";
			}
		}
	?>
</body>
</html>
