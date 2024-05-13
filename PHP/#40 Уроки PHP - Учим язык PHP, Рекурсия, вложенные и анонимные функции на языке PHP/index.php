<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		function rec($con) {
			if ($con > 0) {
				echo ($con--) . '<br>';
				rec($con);
			} else return;
		}
		rec(8);
	?>
</body>
</html>
