<!DOCTYPE html>
<html lang="es">
<head>
<title>Land</title>
<meta charset="utf-8">
<?php 

$randomNo = rand(1, 10);

switch($randomNo) {
	Case 1:
		$engWord = "car";
		$espWord = "el coche";
		break;
	Case 2:
		$engWord = "bus";
		$espWord = "el autobús";
		$espWord = utf8_encode($espWord);
		break;
	Case 3:
		$engWord = "train";
		$espWord = "el tren";
		break;
	Case 4:
		$engWord = "highway";
		$espWord = "la carretera";
		break;
	Case 5:
		$engWord = "street";
		$espWord = "calle";
		break;
	Case 6:
		$engWord = "path";
		$espWord = "un camino";
		break;
	Case 7:
		$engWord = "speed limit";
		$espWord = "la límite de velocidad";
		$espWord = utf8_encode($espWord);
		break;
	Case 8:
		$engWord = "train schedule";
		$espWord = "el horario de trenes";
		break;
	Case 9:
		$engWord = "gasoline";
		$espWord = "la gasolina";
		break;
	Case 10:
		$engWord = "map";
		$espWord = "un plano, un mapa";
		break;
}

echo $engWord . "_" . $espWord;


?>
</head>
<body></body>
</html>