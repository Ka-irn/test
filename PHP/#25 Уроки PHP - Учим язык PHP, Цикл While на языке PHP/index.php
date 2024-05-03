<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
	$i = 0;
		while ($i <= 5) {
			$i++;
			if ($i == 3) {
				continue;
			} elseif ($i == 6) {
				break;
			}
			echo $i . '<br>';
		}
	?>
</body>
</html>
