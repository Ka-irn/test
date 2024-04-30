<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		echo 10 & 15;  //AND
		echo '<br>';
		echo 10 | 15;  //OR
		echo '<br>';
		echo 10 ^ 15;  //XOR
		echo '<br>';
		echo ~15;	   //NOT
		echo '<br>';
		echo 6 << 1;   //по битовое сдвигание, сдвигает биты первого оператора в лево на второй оператор
		echo '<br>';
		echo 6 >> 1;   //по битовое сдвигание, сдвигает биты первого оператора в право на второй оператор
	?>
</body>
</html>
