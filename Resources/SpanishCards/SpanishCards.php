<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Spanish Flash Cards</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Expand your Spanish vocabulary with these free online flash cards.">
<meta name="author" content="CarolSpencerPru">
<link href="https://fonts.googleapis.com/css?family=Yeseva+One|Poiret+One" rel="stylesheet">
<link rel="stylesheet" href="http://www.pixelsinmyhair.com/CSS/bootstrap.min.css">
<link href="http://www.pixelsinmyhair.com/index.css" rel="stylesheet" type="text/css">
<link href="http://www.pixelsinmyhair.com/CSS/SpanishCards.css" rel="stylesheet" type="text/css">


</head>

<body>

<div id="Wrapper">
<?php
include("http://www.pixelsinmyhair.com/MainSiteMenu.inc.php");
?>

		<div id="TitleSpacer">&nbsp;</div>

		<div id="Instructions">&nbsp;</div>

		<div id="LeftDiv">
		
			<h1>Spanish Flash Cards</h1>
			
			<div id="InstrID" class="InstClass">
			
				<h4>Select a category and a subcategory. Then choose Get a Word.</h4>	
				
			</div>

			<form id="CategoryDrops">

				<select id="Categories" onchange="GetCategories()">
					<option value="">Select a category</option>
					<option value="Food">Travel</option>
					<option value="TheHome">Shopping</option>
				</select>

				<h3 id="InstrSpacerH3">&nbsp;</h3>

				<select id="Subcategories" style="visibility:hidden;" onchange="DisplayCategory()">
					<option value="">Select a subcategory</option>
				</select>

			</form>

		</div>

		<div id="RightDiv">

			<p id="FinalCategory">&nbsp;</span></p> 

			<div id="InstrSpacerID" class="InstClass">&nbsp;</div>

			<form>
				<input type="button" id="NextButton" value="Get a Word" onclick="ShowNextWord()">
			</form>
			<br /><br />
			<h3 class="Language">English: </h3>
			<div class="Word" id="EnglishWord"></div>
			<br style="clear:both;" />
			<form>
				<input type="button" id="SpanButton" value="Show Spanish" onclick="ShowSpanish()">
			</form>
			<br /><br />
			<h3 class="Language">Spanish: </h3>
			<div class="Word" id="SpanishWord"></div>

		</div>

	</div> <!-- End Wrapper div -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://www.pixelsinmyhair.com/JavaScript/utils.js"></script>
<script src="http://www.pixelsinmyhair.com/JavaScript/tether.js"></script>
<script src="http://www.pixelsinmyhair.com/JavaScript/bootstrap.min.js"></script>
<script src="http://www.pixelsinmyhair.com/JavaScript/index.js"></script>

<script src="http://www.pixelsinmyhair.com/JavaScript/SpanishCards.js"></script>

</body>

</html>
