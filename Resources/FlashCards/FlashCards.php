<!DOCTYPE html>
<html lang="en-US">
<head>
<title>French Flash Cards</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Expand your French vocabulary with these free online flash cards.">
<meta name="author" content="CarolSpencerPru">
<link href="https://fonts.googleapis.com/css?family=Yeseva+One|Poiret+One" rel="stylesheet">
<link rel="stylesheet" href="http://www.pixelsinmyhair.com/CSS/bootstrap.min.css">
<link href="http://www.pixelsinmyhair.com/index.css" rel="stylesheet" type="text/css">
<link href="http://www.pixelsinmyhair.com/CSS/FlashCards.css" rel="stylesheet" type="text/css">


</head>

<body>

<div id="Wrapper">
<?php
include("../../MainSiteMenu.inc.php");
?>

		<div id="TitleSpacer">&nbsp;</div>

		<div id="Instructions">&nbsp;</div>

		<div id="LeftDiv">
			<h1>French Flash Cards</h1>
			<div id="InstrID" class="InstClass">
				<h4>Select a category and a subcategory. Then choose Get a Word.<br /><br /></h4>
				
			</div>

			<form id="CategoryDrops">

				<select id="Categories" onchange="GetCategories()">
					<option value="">Select a category</option>
					<option id="big" value="Food">Food</option>
					<option value="TheHome">The Home</option>
				</select>

				<h3>&nbsp;</h3>

				<select id="Subcategories" style="visibility:hidden;" onchange="DisplayCategory()">
					<option value="">Select a subcategory</option>
				</select>

			</form>

		</div>

		<div id="RightDiv">

			<p id="FinalCategory">&nbsp;</span></p> 

			<div id="InstrSpacerID" class="InstClass"></div>

			<form>
				<input type="button" id="NextButton" value="Get a Word" onclick="ShowNextWord()">
			</form>
			<br /><br />
			<h3 class="Language">English: </h3>
			<div class="Word" id="EnglishWord"></div>
			<br style="clear:both;" />
			<form>
				<input type="button" id="FrenButton" value="Show French" onclick="ShowFrench()">
			</form>
			<br /><br />
			<h3 class="Language">French: </h3>
			<div class="Word" id="FrenchWord"></div>

		</div>

	</div> <!-- End Wrapper div -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="http://www.pixelsinmyhair.com/JavaScript/utils.js"></script>
<script src="http://www.pixelsinmyhair.com/JavaScript/tether.js"></script>
<script src="http://www.pixelsinmyhair.com/JavaScript/bootstrap.min.js"></script>

<script src="http://www.pixelsinmyhair.com/JavaScript/index.js"></script>
<script src="http://www.pixelsinmyhair.com/JavaScript/FlashCards.js"></script>

</body>

</html>
