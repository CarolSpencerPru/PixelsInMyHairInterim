<?php

$category = $_GET["category"];

switch ($category) {

	case "Food":
		echo "PopulateSubCats('Fruit', 'Vegetables', 'Meat')";
		break;

	case "The Home":
		echo "PopulateSubCats('Kitchen', 'Bathroom','Bedroom')";
		break;
}

?>