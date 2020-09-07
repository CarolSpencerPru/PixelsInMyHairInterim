<?php 

$randomNo = rand(1, 10);

switch($randomNo) {
	Case 1:
		$engWord = "a strawberry";
		$frenWord = "une fraise";
		break;
	Case 2:
		$engWord = "an apple";
		$frenWord = "une pomme";
		break;
	Case 3:
		$engWord = "a grape";
		$frenWord = "un raisin";
		break;
	Case 4:
		$engWord = "a blueberry";
		$frenWord = "une myrtille (Canadian, un bluet)";
		break;
	Case 5:
		$engWord = "a pineapple";
		$frenWord = "un ananas";
		break;
	Case 6:
		$engWord = "a watermelon";
		$frenWord = "une pastèque";
		$frenWord = utf8_encode($frenWord);
		break;
	Case 7:
		$engWord = "a peach";
		$frenWord = "une pêche";
		$frenWord = utf8_encode($frenWord);
		break;
	Case 8:
		$engWord = "a pear";
		$frenWord = "une poire";
		break;
	Case 9:
		$engWord = "a cherry";
		$frenWord = "une cerise";
		break;
	Case 10:
		$engWord = "a lemon";
		$frenWord = "un citron";
		break;
}

echo $engWord . "_" . $frenWord;


?>