<?php
if(isset($_POST['numbers']))
{

	$massiv =$massiv(explode(' ', $_POST['value']),
					 explode(' ', $_POST['value1']),
					 explode(' ', $_POST['value2']));
	for($i = 0; $i < count($massiv); $i++)
	{
		$Summa += $massiv[$i][$i];
	}
	echo "Сумма главных цифр диагонали: ".$Summa."</br>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
	<p>Введите значения массива</p>
	<input name="value" type="text">
	<input name="value1" type="text">
	<input name="value2" type="text">
    <input type="submit" value="Отправить" name="numbers">
    <p name="result">
</form>
</body>
</html>