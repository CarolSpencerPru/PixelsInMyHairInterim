<!DOCTYPE html>
<html lang="es">
<head>
<title>Land</title>
<meta charset="utf-8">
<?php 

$randomNo = rand(1, 10);

switch($randomNo) {
	Case 1:
		$engWord = "It's too expensive.";
		$espWord = "Es demasiado caro/a.";
		break;
	Case 2:
		$engWord = "It looks cheap.";
		$espWord = "Parece barato/a.";
		break;
	Case 3:
		$engWord = "When does it go on sale?";
		$espWord = "�Cu�ndo sale a la venta?";
		$espWord = utf8_encode($espWord);
		break;
	Case 4:
		$engWord = "Where can I buy it?";
		$espWord = "�D�nde lo puedo comprar?";
		$espWord = utf8_encode($espWord);
		break;
	Case 5:
		$engWord = "Will you take $4?";
		$espWord = "�Tomar� cuatro d�lares?";
		$espWord = utf8_encode($espWord);
		break;
	Case 6:
		$engWord = "I'll take it.";
		$espWord = "Lo tomar�.";
		$espWord = utf8_encode($espWord);
		break;
	Case 7:
		$engWord = "Do you have it in blue?";
		$espWord = "�Lo tiene en azul?";
		$espWord = utf8_encode($espWord);
		break;
	Case 8:
		$engWord = "Do you have a smaller size?";
		$espWord = "�Tiene un tama�o m�s peque�o?";
		$espWord = utf8_encode($espWord);
		break;
	Case 9:
		$engWord = "Do you have it in extra large?";
		$espWord = "�Lo tienes en un tama�o extra grande?";
		$espWord = utf8_encode($espWord);
		break;
	Case 10:
		$engWord = "I'm looking for something for my sister";
		$espWord = "Busco algo para mi hermana.";
		break;
}

echo $engWord . "_" . $espWord;


?>
</head>
<body></body>
</html>