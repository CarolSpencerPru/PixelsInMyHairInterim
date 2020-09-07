<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Fruit</title>
<meta charset="utf-8">
<?php 

$randomNo = rand(1, 10);

switch($randomNo) {
	Case 1:
		$engWord = "an oven";
		$frenWord = "un four";
		break;
	Case 2:
		$engWord = "a pot";
		$frenWord = "une caserole";
		break;
	Case 3:
		$engWord = "a dutch oven";
		$frenWord = "une marmite";
		break;
	Case 4:
		$engWord = "a microwave";
		$frenWord = "un micro-ondes";
		break;
	Case 5:
		$engWord = "a stove";
		$frenWord = "une cuisinière";
		$frenWord = utf8_encode($frenWord);
		break;
	Case 6:
		$engWord = "a coffee pot";
		$frenWord = "une cafetière";
		$frenWord = utf8_encode($frenWord);
		break;
	Case 7:
		$engWord = "a skillet";
		$frenWord = "une poêle";
		$frenWord = utf8_encode($frenWord);
		break;
	Case 8:
		$engWord = "a faucet";
		$frenWord = "un robinet";
		break;
	Case 9:
		$engWord = "a kitchen sink";
		$frenWord = "un évier";
		$frenWord = utf8_encode($frenWord);
		break;
	Case 10:
		$engWord = "a freezer";
		$frenWord = "un congélateur";
		$frenWord = utf8_encode($frenWord);
		break;
}

echo $engWord . "_" . $frenWord;


?>
</head>
<body></body>
</html>