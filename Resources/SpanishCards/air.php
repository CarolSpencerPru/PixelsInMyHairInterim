<!DOCTYPE html>
<html lang="es">
<head>
<title>Land</title>
<meta charset="utf-8">
<?php 

$randomNo = rand(1, 10);

switch($randomNo) {
	Case 1:
		$engWord = "airplane";
		$espWord = "un avión";
		$espWord = utf8_encode($espWord);
		break;
	Case 2:
		$engWord = "jet plane";
		$espWord = "un avión a reacción";
		$espWord = utf8_encode($espWord);
		break;
	Case 3:
		$engWord = "flight";
		$espWord = "il vuelo";
		break;
	Case 4:
		$engWord = "suitcase";
		$espWord = "la maleta";
		break;
	Case 5:
		$engWord = "late";
		$espWord = "tarde";
		break;
	Case 6:
		$engWord = "flight delay";
		$espWord = "un retraso del vuelo";
		break;
	Case 7:
		$engWord = "baggage fee";
		$espWord = "una tarifa de equipaje";
		break;
	Case 8:
		$engWord = "check-in counter";
		$espWord = "el mostrador de facturación";
		$espWord = utf8_encode($espWord);
		break;
	Case 9:
		$engWord = "runway";
		$espWord = "la pista";
		break;
	Case 10:
		$engWord = "seat belt";
		$espWord = "el cinturón de seguridad";
		$espWord = utf8_encode($espWord);
		break;
}

echo $engWord . "_" . $espWord;


?>
</head>
<body></body>
</html>