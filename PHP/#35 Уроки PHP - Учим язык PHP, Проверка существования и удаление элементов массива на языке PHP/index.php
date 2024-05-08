<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$arr = [3 => 1, 3, 4 , 5, 3];
		if (is_array($arr)) { //првоеряет явлается ли переменная массивом
			for ($i=0; $i < 10; $i++) { 
				if (isset($arr[$i])) { //проверяет существует ли элемент в массиве
					echo "Элемент массива \$arr[$i] существует<br>";
				} else {
					echo "Элемент массива \$arr[$i] не существует<br>";
				}
			}
		}
		if (in_array(5, $arr)) { //проверяет существует ли конкретный значение в массиве
			echo "<br>Число 5 есть в массиве \$arr<br>";
		} else {
			echo "<br>Числа 5 нет в массиве \$arr<br>";
		}
		if (array_key_exists(2, $arr)) { //проверяет существует ли конкретный ключ в массиве
			echo "<br>Ключ 5 есть в массиве \$arr<br>";
		} else {
			echo "<br>Ключ 5 нет в массиве \$arr<br>";
		}
		echo "<br>Значение в массиве \$arr по ключу 4: ". array_search(4, $arr) . '<br>';
		unset($arr[4]);
		echo '<pre>';
		echo print_r($arr);
		echo '</pre>';
	?>
</body>
</html>
