<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Spanish Flash Cards</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Expand your Spanish vocabulary with these free online flash cards.">
<meta name="author" content="CarolSpencerPru">
<link href="https://fonts.googleapis.com/css2?family=Alice&family=David+Libre&family=Proza+Libre&display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://www.pixelsinmyhair.com/CSS/bootstrap.min.css">
<link href="../../index.css" rel="stylesheet" type="text/css">
<link href="../../CSS/NewSpanishCards.css" rel="stylesheet" type="text/css">
<script src="https://kit.fontawesome.com/f03a91b6c0.js" crossorigin="anonymous"></script>

</head>

<body>

<div id="Wrapper">
<?php
include("../../MainSiteMenu.inc.php");
?>

<aside></aside>
<article>
	<h2>Spanish Flash Cards</h2>
	<div id="InstrID" class="InstClass">
		<p>Select a category and a subcategory. Then choose Get a Word.</p>
	</div>
	<div id="AjaxOut">
		<div id="LeftDiv">

			<form id="CategoryDrops">
				<div class="fa-angle-down CategoryWrap">
					<select id="Categories" onchange="GetCategories()">
						<option value="">Select a category</option>
						<option id="big" value="Travel">Travel</option>
						<option value="Shopping">Shopping</option>
					</select>
				</div>

				<div class="CategoryWrap" id="Subs">
					<select id="Subcategories" style="visibility:hidden;" onchange="DisplayCategory()">
						<option value="">Select a subcategory</option>
					</select>
				</div>

			</form>

		</div>

		<div id="RightDiv">

			<p id="FinalCategory">&nbsp;</span></p>

			<form id="GetWrapper">
				<input type="button" id="NextButton" value="Get a Word" onclick="ShowNextWord()">
			</form>
			<h3 class="Language">English:</h3>
			<div class="Word" id="EnglishWord"></div>

			<form id="ShowWrapper">
				<input type="button" id="SpanButton" value="Show Spanish" onclick="ShowSpanish()">
			</form>

			<h3 class="Language">Spanish:</h3>
			<div class="Word" id="SpanishWord"></div>

		</div>

	</div> <!-- End AjaxOut -->
</article>

	</div> <!-- End Wrapper div -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://www.pixelsinmyhair.com/JavaScript/utils.js"></script>
<script src="http://www.pixelsinmyhair.com/JavaScript/tether.js"></script>
<script src="http://www.pixelsinmyhair.com/JavaScript/bootstrap.min.js"></script>
<script src="../../JavaScript/index.js"></script>

<script src="../../JavaScript/SpanishCards.js"></script>

</body>

</html>
