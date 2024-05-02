<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$gh = - 123;
		$gh = $gh < 0 ? -$gh : $gh;  //  изменяет знак числа на положительный если он отрицательный  
		echo $gh;
		$f = 3;
		$f = $f ?? 2; // перезаписывает переменную при условии что её значение null или создаёт если её небыло 
		echo $f;
	?>
</body>
</html>
