<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "Страница"; ?></title>
</head>
<body>
	<?php
		$srt = "dsgsgsgh";
		if (isset($srt)) {
			echo "Есть <br>";
		}else {
			echo "Нету <br>";
		}

		if (empty($srt)) {
			echo "В переменной ничего нет  <br>";
		}else {
			echo "В переменной что то есть <br>";
		}

		echo gettype(3.551);
		echo "<br>";
		echo is_double(3.551);
	?>
</body>
</html>

<!--
isset - првоеряет существует ли переменная
empty - проверяет содержимое переменной
gettype - возвращает тип переменной
is_тип переменной - проверяет тип переменнйо
-->
