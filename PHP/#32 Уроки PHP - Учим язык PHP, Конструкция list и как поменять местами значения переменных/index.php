<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$mas = [52, 452, 231];
		list($o, $t) = $mas;
		echo 'До:' . '<br>';
		echo $o . '<br>' . $t . '<br>';
		list($t, $o) = [$o, $t];
		echo 'После:' . '<br>';
		echo $o . '<br>' . $t;
	?>
</body>
</html>
