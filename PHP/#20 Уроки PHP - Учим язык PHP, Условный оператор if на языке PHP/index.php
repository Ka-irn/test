<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$h = 1;
		if ($h == 2) {
	?>
			<h1>Выводит текст через html</h1>
	<?php
		} else {
	?>
			<h1>Выводит другой текст через html</h1>
	<?php
		}
	?>
</body>
</html>
