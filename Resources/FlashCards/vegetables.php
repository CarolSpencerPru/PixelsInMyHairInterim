<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Fruit</title>
<meta charset="utf-8">
<?php 

$randomNo = rand(1, 10);

switch($randomNo) {
	Case 1:
		$engWord = "the cauliflower";
		$frenWord = "le chou-fleur";
		break;
	Case 2:
		$engWord = "the green beans";
		$frenWord = "les haricots verts";
		break;
	Case 3:
		$engWord = "the asparagus";
		$frenWord = "les asperges";
		break;
	Case 4:
		$engWord = "the brussel sprouts";
		$frenWord = "les choux de Bruxelles";
		break;
	Case 5:
		$engWord = "an eggplant";
		$frenWord = "une aubergine";

		break;
	Case 6:
		$engWord = "a yellow squash";
		$frenWord = "une courge jaune";
		break;
	Case 7:
		$engWord = "a zucchini";
		$frenWord = "une courgette";
		break;
	Case 8:
		$engWord = "an onion";
		$frenWord = "un oignon";
		break;
	Case 9:
		$engWord = "the green pepper";
		$frenWord = "le poivron vert";
		$frenWord = utf8_encode($frenWord);
		break;
	Case 10:
		$engWord = "the potato";
		$frenWord = "la pomme de terre";
		break;
}

echo $engWord . "_" . $frenWord;


?>
</head>
<body></body>
</html>