<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Fruit</title>
<meta charset="utf-8">
<?php 

$randomNo = rand(1, 10);

switch($randomNo) {
	Case 1:
		$engWord = "the bed";
		$frenWord = "le lit";
		break;
	Case 2:
		$engWord = "the bedspread";
		$frenWord = "le dessus-de-lit";
		break;
	Case 3:
		$engWord = "the sheets";
		$frenWord = "les draps";
		break;
	Case 4:
		$engWord = "the blanket";
		$frenWord = "la couverture";
		break;
	Case 5:
		$engWord = "a pillow";
		$frenWord = "un oreiller";
		break;
	Case 6:
		$engWord = "the dresser";
		$frenWord = "la commode";
		break;
	Case 7:
		$engWord = "the closet";
		$frenWord = "le placard";
		break;
	Case 8:
		$engWord = "a hanger";
		$frenWord = "le cintre";
		break;
	Case 9:
		$engWord = "the shelf";
		$frenWord = "une étagère";
		$frenWord = utf8_encode($frenWord);
		break;
	Case 10:
		$engWord = "the nightstand";
		$frenWord = "la table de chevet";
		break;
}

echo $engWord . "_" . $frenWord;


?>
</head>
<body></body>
</html>