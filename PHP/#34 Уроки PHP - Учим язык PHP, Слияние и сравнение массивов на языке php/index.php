<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$arr = [1=> 'Один', 4=> 'Два'];
		$arr1 = [3=> 'Три', 2=> 'Четыре'];
		$con = $arr + $arr1;
		echo '<pre>';
		echo print_r($con);
		echo'</pre>';
		$arr2 = ['Один', 'Два'];
		$arr3 = ['Три', 'Четыре'];
		$con1 = $arr2 + $arr3;
		echo '<pre>';
		echo print_r($con1);
		echo'</pre>';
		$arr4 = ['Один', 'Два'];
		$arr5 = ['Три', 'Четыре'];
		$con2 = array_merge($arr4, $arr5);
		echo '<pre>';
		echo print_r($con2);
		echo'</pre>';

		if ($arr4 == $arr5) {
			echo 'Массивы равны';
		} else {
			echo 'Массивы не равны';
		}
	?>
</body>
</html>
