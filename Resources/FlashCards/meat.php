<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Fruit</title>
<meta charset="utf-8">
<?php 

$randomNo = rand(1, 10);

switch($randomNo) {
	Case 1:
		$engWord = "the chicken";
		$frenWord = "le poulet";
		break;
	Case 2:
		$engWord = "the beef";
		$frenWord = "le boeuf";
		break;
	Case 3:
		$engWord = "the pork";
		$frenWord = "le porc";
		break;
	Case 4:
		$engWord = "the veal";
		$frenWord = "le veau";
		break;
	Case 5:
		$engWord = "the hamburger";
		$frenWord = " le steak haché, le bifteck haché ";
		$frenWord = utf8_encode($frenWord);
		break;
	Case 6:
		$engWord = "the sausage";
		$frenWord = "la saucisse";
		break;
	Case 7:
		$engWord = "the turkey";
		$frenWord = "la dinde";
		break;
	Case 8:
		$engWord = "the duck";
		$frenWord = "le canard";
		break;
	Case 9:
		$engWord = "the ham";
		$frenWord = "le jambon";
		break;
	Case 10:
		$engWord = "the lamb";
		$frenWord = "l'agneau";
		break;
}

echo $engWord . "_" . $frenWord;


?>
</head>
<body></body>
</html>