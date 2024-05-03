<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$text = file_get_contents('text.txt');
		$text .= "\n Строка, ещё одна";
		$filename = 'Создан ' . date("Y-m-d") . '.txt';
		file_put_contents($filename, $text);
	?>
</body>
</html>
