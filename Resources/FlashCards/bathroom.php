<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Fruit</title>
<meta charset="utf-8">
<?php 

$randomNo = rand(1, 10);

switch($randomNo) {
	Case 1:
		$engWord = "the sink";
		$frenWord = "le lavabo";
		break;
	Case 2:
		$engWord = "the bathtub";
		$frenWord = "la baignoire";
		break;
	Case 3:
		$engWord = "the toilet";
		$frenWord = "la toilette";
		break;
	Case 4:
		$engWord = "the faucet";
		$frenWord = "le robinet";
		break;
	Case 5:
		$engWord = "the shower";
		$frenWord = "la douche";
		break;
	Case 6:
		$engWord = "the towel";
		$frenWord = "la serviette";
		break;
	Case 7:
		$engWord = "the soap";
		$frenWord = "le savon";
		break;
	Case 8:
		$engWord = "a loofah";
		$frenWord = "un éponge végétale";
		$frenWord = utf8_encode($frenWord);
		break;
	Case 9:
		$engWord = "a cabinet";
		$frenWord = "une armoire de toilette";
		break;
	Case 10:
		$engWord = "the shower curtain";
		$frenWord = "le rideau de douche";
		break;
}

echo $engWord . "_" . $frenWord;


?>
</head>
<body></body>
</html>