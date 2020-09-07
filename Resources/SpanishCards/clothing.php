<!DOCTYPE html>
<html lang="es">
<head>
<title>Land</title>
<meta charset="utf-8">
<?php 

$randomNo = rand(1, 10);

switch($randomNo) {
	Case 1:
		$engWord = "skirt";
		$espWord = "la falda";
		break;
	Case 2:
		$engWord = "dress";
		$espWord = "el vestido";
		break;
	Case 3:
		$engWord = "jeans";
		$espWord = "los jeans";
		break;
	Case 4:
		$engWord = "mall";
		$espWord = "el centro comercial";
		break;
	Case 5:
		$engWord = "shoes";
		$espWord = "los zapatos";
		break;
	Case 6:
		$engWord = "cashier";
		$espWord = "el cajero";
		break;
	Case 7:
		$engWord = "jewelry";
		$espWord = "la joyería";
		$espWord = utf8_encode($espWord);
		break;
	Case 8:
		$engWord = "socks";
		$espWord = "los calcetines";
		break;
	Case 9:
		$engWord = "presents";
		$espWord = "los regalos";
		break;
	Case 10:
		$engWord = "shirt";
		$espWord = "la camisa";
		break;
}

echo $engWord . "_" . $espWord;


?>
</head>
<body></body>
</html>