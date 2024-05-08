<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		function sum(int  &$s, $h = 10) : int {
			$s = $s + $h;
			return $s;
		}
		$j = 11.24;
		echo sum($j, 40);
		echo '<br>';
		echo $j . '<br>';

		function teeG(...$items) {  // передача в функцию заранее не известного числа переменных
			foreach ($items as $e) {
				echo "$e<br>";
			}
		}
		teeG('sdgsdg', 'sdgsdg', 'Sgsdgsg');

		function teeGf($a, $b, $s) {  // передача массива в функцию
			echo "$a<br>";
			echo "$b<br>";
			echo "$s<br>";
		}
		$mas = ['shsdhkjklsdgsdg', 'sdjkljgsdg', 'ghkgnSgsdgsg'];
		teeGf(...$mas);
	?>
</body>
</html>
