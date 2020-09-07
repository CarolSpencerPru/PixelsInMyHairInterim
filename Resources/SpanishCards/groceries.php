<!DOCTYPE html>
<html lang="es">
<head>
<title>Land</title>
<meta charset="utf-8">
<?php 

$randomNo = rand(1, 10);

switch($randomNo) {
	Case 1:
		$engWord = "fruit";
		$espWord = "la fruita";
		break;
	Case 2:
		$engWord = "vegetables";
		$espWord = "las verduras";
		break;
	Case 3:
		$engWord = "meat";
		$espWord = "la carne";
		break;
	Case 4:
		$engWord = "fish";
		$espWord = "el pez";
		break;
	Case 5:
		$engWord = "ingredients";
		$espWord = "los ingredientes";
		break;
	Case 6:
		$engWord = "cashier";
		$espWord = "el cajero";
		break;
	Case 7:
		$engWord = "special";
		$espWord = "la oferta especial";
		break;
	Case 8:
		$engWord = "beverages";
		$espWord = "las bebidas";
		break;
	Case 9:
		$engWord = "soda";
		$espWord = "el refresco";
		break;
	Case 10:
		$engWord = "bread";
		$espWord = "el pan";
		break;
}

echo $engWord . "_" . $espWord;


?>
</head>
<body></body>
</html>