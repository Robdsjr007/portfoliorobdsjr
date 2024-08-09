<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<title>Tabuada do 2</title>
</head>
<body>

<h2>Tabuada do 2 com For</h2>
<?php

$numero = 10;
for ($i = 0; $i <= $numero; $i++) {
  $resultado = $i*2;
  echo $tabuada = "2 x $i = $resultado" . "<br>";
}
?>


	
</body>
</html>
