<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$x = 'asfg';
		switch ($x) {
			case 'asfg':
				echo 'белеберда';
				break;
			case '2':
				echo 'не белеберда';
				break;
			case 'asgds':
				echo 'другая белеберда';
				break;
			default:
			echo 'нет совпадений';
		}
	?>
</body>
</html>
