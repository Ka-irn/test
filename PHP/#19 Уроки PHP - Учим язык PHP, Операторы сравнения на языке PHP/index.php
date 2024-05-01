<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$x = 2;
		$y = 10;
		echo $x < $y;  // x меньше y
		echo $x <= $y; // x меньше или равно y
		echo $x > $y;  // x больше y
		echo $x >= $y; // x больше или равно y

		echo $x == $y; // x равно y без учёта типа данных
		echo $x != $y; // x не равно y
		echo $x <> $y; // x не равно y
		echo $x === $y;// x равно y с учётом типа данных 
		echo $x !== $y;// x не равно y с учётом типа данных 
		
		echo $x <=> $y;// если операторы равны выдаёт 0, если x > y то положительное число, если x < y то отрицательное
	?>
</body>
</html>
