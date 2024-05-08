<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$lor = ['Lorem', 'ipsum', 'dolor', 'sit', 'amet', 'consectetur', 'adipisicing', 'elit']; // вывести случайный элемент массива
		echo $lor[rand(0, count($lor)-1)] . '<br>';

		$size = rand(5, 10); // создать массив делнной от 5 до 10 со случайными числами от 0 до 100 и отсортировать его
		$arr = [];
		for ($i=0; $i < $size; $i++) { 
			$arr[$i] = rand(0, 100);
		}
		sort($arr);
		echo '<pre>';
		print_r($arr);
		echo '</pre>';


		$arr1 = file('text.txt');  // создаёт массив из файла 
		echo '<pre>';
		print_r($arr1);
		echo '</pre>';
	?>
</body>
</html>
