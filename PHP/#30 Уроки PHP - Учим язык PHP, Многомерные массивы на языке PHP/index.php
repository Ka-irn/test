<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$ar = [
			'Циферки' => ['один' => "1", 'два' => "2", 'три' => "3"],
			'Буквы' => ['А', 'Б', 'В', 'Г', 'Я'],
			'Улицы' => ['Циолковского ', 'Энтузиастов', ' Зари 21']
		];
		echo '<pre>';
		print_r($ar);
		echo $ar ['Улицы'][2];
	?>
</body>
</html>
