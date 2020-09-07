<!DOCTYPE html>
<html lang="es">
<head>
<title>Land</title>
<meta charset="utf-8">
<?php 

$randomNo = rand(1, 10);

switch($randomNo) {
	Case 1:
		$engWord = "cruise";
		$espWord = "eEl crucero";
		break;
	Case 2:
		$engWord = "to board";
		$espWord = "Embarcarse";
		break;
	Case 3:
		$engWord = "to disembark";
		$espWord = "Desembarcar";
		break;
	Case 4:
		$engWord = "excursion";
		$espWord = "la excursión";
		break;
	Case 5:
		$engWord = "tour guide";
		$espWord = "el/la Guía turística";
		$espWord = utf8_encode($espWord);
		break;
	Case 6:
		$engWord = "ocean";
		$espWord = "el océano";
		$espWord = utf8_encode($espWord);
		break;
	Case 7:
		$engWord = "port";
		$espWord = "el puerto";
		break;
	Case 8:
		$engWord = "deck";
		$espWord = "la cubierta";
		break;
	Case 9:
		$engWord = "captain";
		$espWord = "el capitán, la capitana";
		$espWord = utf8_encode($espWord);
		break;
	Case 10:
		$engWord = "cabin";
		$espWord = "la cabina";
		break;
}

echo $engWord . "_" . $espWord;


?>
</head>
<body></body>
</html>