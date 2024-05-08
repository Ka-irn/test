<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$mas = [52, 452, 231, 453, 41, 7, 93638];
		for ($i=0; $i < count($mas); $i++) { 
			echo "$mas[$i] <br>";
		}
		$ar =  ['один' => "1", 'два' => "2", 'три' => "3"];
		foreach ($ar as $i => $val) {
			echo "$i: $val <br>";
		}
		$ar1 = [
			'Циферки' => ['один' => "1", 'два' => "2", 'три' => "3"],
			'Буквы' => ['А', 'Б', 'В', 'Г', 'Я'],
			'Улицы' => ['Циолковского ', 'Энтузиастов', ' Зари']
		];
		foreach ($ar1 as $i => $array) {
			echo $i . '<br>';
			foreach ($array as $key => $val) {
				echo "$key: $val <br>";
			}
		}
		
	?>
</body>
</html>
