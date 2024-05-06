<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$mas = array('Lorem', 'ipsum', 'dolor', 'sit', 'amet', 'consectetur', 'adipisicing', 'elit'); // старый способ создания массивов
		$mas1 = ['Lorem', 'ipsum', 'dolor', 'sit', 'amet', 'consectetur', 'adipisicing', 'elit']; // новый способ создания массивов
		$mas2 = [10 => 'Lorem', 'ipsum', 'dolor',30 => 'sit', 'amet', 'consectetur',1030 => 'adipisicing', 'elit']; // изменения индекса элемента  в массиве
		$mas3[14] = 'gsdgeg'; // ещё один способ создания массивов
		echo '<pre>';
		print_r($mas);
		print_r($mas1);
		print_r($mas2);	
		print_r($mas3);
		echo '<pre>';
	?>
</body>
</html>
