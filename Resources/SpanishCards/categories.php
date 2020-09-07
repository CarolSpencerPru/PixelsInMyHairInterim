<?php

$category = $_GET["category"];

switch ($category) {

	case "Travel":
		echo "PopulateSubCats('Air', 'Land', 'Sea')";
		break;

	case "Shopping":
		echo "PopulateSubCats('Clothing', 'Groceries','Phrases')";
		break;
}

?>