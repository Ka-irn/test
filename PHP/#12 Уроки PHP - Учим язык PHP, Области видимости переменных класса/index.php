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
		echo Size::$ha;
		$sta1 = new Size;
		$sta1 ->x = 20;
		$sta1 ->y = 24;
		echo $sta1 ->x . $sta1 ->y . $sta1 ->ha;

	?>
</body>
</html>
