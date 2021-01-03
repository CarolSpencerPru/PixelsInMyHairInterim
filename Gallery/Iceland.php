<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Iceland | Reykjavik_Sunset</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="CarolSpencerPru">
<link rel="stylesheet" href="../CSS/bootstrap.min.css">
<link href="../index.css" rel="stylesheet" type="text/css">
<link href="../CSS/Gallery.css" rel="stylesheet" type="text/css">

</head>

<body onresize="checkWidth">

<div class="GalleryPageBackground">

<?php
include("../MainSiteMenu.inc.php");
?>

	<div id="MainWrapperRow" class="row no-gutters">

		<div id="PeelOffSiteTitle">
		</div> <!-- End Columns id=PeelOffSiteTitle. This houses the logo. -->

		<div id="MainContentArea">

			<div id="MainPhotoDiv">
				<div id="ImageHolder"></div>
<!-- Maximum characters = 250 -->
				<p id="TextImageOne" class="MainText ExtraHeadRoom Readability">One of the coolest places in the world I've ever been. Jökulsárlón is a baby iceberg factory. The icebergs break off the Breiðamerkurjökull glacier and bob around in the adjacent lagoon, eventually making their way out to the open sea. But not for long, because the waves toss them right back onshore, where the tourists climb all over their melting corpses.</p>

				<p id="TextReynisdrangar" class="MainText ExtraHeadRoom Readability">To the west of the village of Vík off the 215, are the Reynisdrangar stacks. Just beyond the little café, there is a black stone beach, which has been rated as one of the top 10 beaches in the world. On the near side is a shallow cave formed out of hexagonal basalt columns. Walk toward the stacks, and look up the cliff to see a bajillion nesting puffins.</p>

				<p id="TextSoutheastCoast2" class="MainText ExtraHeadRoom Readability NotVisible">The coolest thing about exploring the eastern coast of Iceland is that so many movies and TV shows are filmed there, because it's so hauntingly beautiful, alien, and untouched.  When I went to see Rogue One I thought, “Wow! I’ve been there! It was raining on me just like that!”</p>

				<p id="TextGullfoss" class="MainText ExtraHeadRoom Readability">Gullfoss is a tremendous and beautiful waterfall, and an absolute must-see. It’s very close to Reykjavík, and there are all kinds of day-tours that you can take, which I would advise on your first or second day in the country, to get your bearings while you’re working through your jet lag. Let somebody else do the work.</p>

				<p id="TextLeifErickson" class="MainText ExtraHeadRoom Readability">There are lots of fun facts to know about this statue of Leifur Eiríksson outside of the Hallgrímskirkja.  It was a gift from the United States to commemorate the 1000th anniversary of the first Alþingi (parliament). The sculptor also created the George Washington statue in Washington Square Park. I don't know why, but tourists are always doing something stupid in front of this statue.</p>

				<p id="TextSvartifoss" class="MainText ExtraHeadRoom Readability">Svartifoss is my favorite waterfall in Iceland because it's nestled in a wall of basalt columns. It's in the Vatnajokull National Park, about 7 hours outside of Reykjavík. It's about a 45-minute walk (straight up, then straight down), so if you have knee problems, be sure to bring your favorite walking stick.</p>

				<p id="TextSoutheastCoast" class="MainText ExtraHeadRoom Readability">Traveling north from Vík, you will drive through vast fields of lava, and some of the weirdest landscapes you can imagine. Later in the day, you can stop your car in the middle of the road and take pictures, because you won't see another driver for 15 minutes.</p>

				<p id="TextStokkurGeysir" class="MainText ExtraHeadRoom Readability">Stokkur Geysir is one of the attractions on the Golden Circle tour. It errupts every 7 or 8 minutes, and it's an impressive sight to see---lots of fun walking through the field of non-errupting geysers. There's a great visitor center there, so plan your lunch around it.</p>

				<p id="TextReykjavik_Sunset" class="MainText ExtraHeadRoom Readability">Sunset in Reykjavik lasts for hours and hours. Check it out from the Shore Walk about 15 minutes west of the old harbor. No rush, check out the sunset, have a cocktail at the Icelandair, and then go check out the sunset.</p>

				<p id="TextSolheimajokull" class="MainText ExtraHeadRoom Readability">The most popular glacier walk is on the shrinking glacier Sólheimajökull. Very soon, it will be a glacier lagoon similar to Jökulsárlón. It's a long stomp in crampons to get through the ashy dirt at the foot of the glacier. Until you're safely on the glacier, you'll pass crevices like this and pray you don't slide in.</p>

				<p id="TextSaga" class="MainText ExtraHeadRoom Readability">Murals are everywhere in Reykjavik. This one is on the west side, across from the Saga Museum. Somebody, please, email me who these actors were.  It's driving me crazy!</p>

				<p id="TextHarpaConcertHall" class="MainText ExtraHeadRoom Readability">The Harpa Concert Hall is covered in glass hexagons to represent the basalt columns throught the countryside. It sits right on the harbor, so you can take your boat to the show.</p>

			</div> <!-- End id=MainPhotoDiv -->

		</div> <!-- End id=MainContentArea -->


		<div id="Thumbnails">

			<div class="GalleryThumbs" id="Thumb1" onClick="ChangeImage('ImageOne')"></div>

			<div class="GalleryThumbs" id="Thumb2" onClick="ChangeImage('Reynisdrangar')"></div>

			<div class="GalleryThumbs" id="Thumb3" onClick="ChangeImage('SoutheastCoast2')"></div>

			<div class="GalleryThumbs" id="Thumb4" onClick="ChangeImage('Gullfoss')"></div>

			<div class="GalleryThumbs" id="Thumb5" onClick="ChangeImage('LeifErickson')"></div>

			<div class="GalleryThumbs" id="Thumb6" onClick="ChangeImage('Svartifoss')"></div>

			<div class="GalleryThumbs" id="Thumb7" onClick="ChangeImage('SoutheastCoast')"></div>

			<div class="GalleryThumbs" id="Thumb8" onClick="ChangeImage('StokkurGeysir')"></div>

			<div class="GalleryThumbs" id="Thumb9" onClick="ChangeImage('Reykjavik_Sunset')"></div>

			<div class="GalleryThumbs" id="Thumb10" onClick="ChangeImage('Solheimajokull')"></div>

			<div class="GalleryThumbs" id="Thumb11" onClick="ChangeImage('Saga')"></div>

			<div class="GalleryThumbs" id="Thumb12" onClick="ChangeImage('HarpaConcertHall')"></div>

		</div> <!-- End Column id=Thumbnails -->

	</div> <!-- End Row id=MainWrapperRow -->

</div> <!-- End class=GalleryPageBackground -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="../JavaScript/utils.js"></script>
<script src="../JavaScript/tether.js"></script>
<script src="../JavaScript/bootstrap.min.js"></script>
<script src="../JavaScript/Gallery.js" defer></script>
</body>

</html>
