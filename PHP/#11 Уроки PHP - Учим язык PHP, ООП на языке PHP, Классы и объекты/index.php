<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		require 'class.php';

		$sta1 = new Size;
		$sta1 ->x = 20;
		$sta1 ->y = 24;
		echo $sta1 ->x;
		echo $sta1 ->y;


		$sta2 = new Size;
		$sta2 ->x = 15;
		$sta2 ->y = 20;

		unset($sta2);
		echo $sta2 ->x;
		echo $sta2 ->y;
	?>
</body>
</html>
