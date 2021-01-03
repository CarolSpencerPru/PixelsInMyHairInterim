<!DOCTYPE html>
<html lang="en-US">
<head>
<title>French Flash Cards</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Expand your French vocabulary with these free online flash cards.">
<meta name="author" content="CarolSpencerPru">
<link rel="stylesheet" href="http://www.pixelsinmyhair.com/CSS/bootstrap.min.css">
<link href="../../index.css" rel="stylesheet" type="text/css">
<link href="../../CSS/FlashCardsNew.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Alice&family=David+Libre&family=Proza+Libre&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/f03a91b6c0.js" crossorigin="anonymous"></script>

</head>

<body>

<div id="Wrapper">
<?php
include("../../MainSiteMenu.inc.php");
?>

	<div id="Header">
		<aside></aside>
		<article>
			<h2>French Flash Cards</h2>
			<div id="InstrID" class="InstClass">
				<p>Select a category and a subcategory. Then choose Get a Word.</p>
			</div>
			<div id="AjaxOut">
				<div id="LeftDiv">

					<form id="CategoryDrops">
						<div class="fa-angle-down CategoryWrap">
							<select id="Categories" onchange="GetCategories()">
								<option value="">Select a category</option>
								<option id="big" value="Food">Food</option>
								<option value="TheHome">The Home</option>
							</select>
						</div>

						<h3>&nbsp;</h3>

						<div class="CategoryWrap" id="Subs">
							<select id="Subcategories" style="visibility:hidden;" onchange="DisplayCategory()">
								<option value="">Select a subcategory</option>
							</select>
						</div>

					</form>

				</div>

				<div id="RightDiv">

					<p id="FinalCategory">&nbsp;</span></p>

					<form>
						<input type="button" id="NextButton" value="Get a Word" onclick="ShowNextWord()">
					</form>
					<h3 class="Language">English:</h3>
					<div class="Word" id="EnglishWord"></div>
					<br style="clear:both;" />
					<form>
						<input type="button" id="FrenButton" value="Show French" onclick="ShowFrench()">
					</form>
					<br /><br />
					<h3 class="Language">French:</h3>
					<div class="Word" id="FrenchWord"></div>

				</div>

			</div> <!-- End AjaxOut -->
		</article>
	</div>
</div> <!-- End Wrapper div -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="http://www.pixelsinmyhair.com/JavaScript/utils.js"></script>
<script src="http://www.pixelsinmyhair.com/JavaScript/tether.js"></script>
<script src="http://www.pixelsinmyhair.com/JavaScript/bootstrap.min.js"></script>

<script src="http://www.pixelsinmyhair.com/JavaScript/index.js"></script>
<script src="../../JavaScript/FlashCards.js"></script>


</body>

</html>
