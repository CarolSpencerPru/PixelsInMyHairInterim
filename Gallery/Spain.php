<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Spain | Alhambra</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="CarolSpencerPru">
<link rel="stylesheet" href="../CSS/bootstrap.min.css">
<link href="../index.css" rel="stylesheet" type="text/css">
<link href="../CSS/Gallery.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Yeseva+One|Poiret+One" rel="stylesheet">  


</head>

<body onresize="checkWidth">

<div class="GalleryPageBackground">

<?php
include("../MainSiteMenu.inc.php");
?>

	<div id="MainWrapperRow" class="row no-gutters">
	
		<div id="PeelOffSiteTitle">
		</div> 
		<!-- End Columns id=PeelOffSiteTitle. This houses the logo. -->
		
		<div id="MainContentArea">
					
			<div id="MainPhotoDiv">
				<div id="ImageHolder"></div>
<!-- Maximum characters = 250 -->
				<p id="TextImageOne" class="MainText ExtraHeadRoom Readability">There are about 10 windmills from the Don Quixote period that survive in Spain today. A visit to Consuegra will give you the opportunity to see the remaining giants. Afterwards, stroll into the little town and get a slice of the local manchego from the little grocery store. </p>
				
				<p id="TextJohnBaptistCathedralSeville" class="MainText ExtraHeadRoom Readability">The Cathedral of Seville is one of the most disturbing places I've been in a while.  I'm sure the artwork and sculptures made sense back then, when people couldn't read but knew the horrible stories being portrayed. Look closely at some of the details and think about what you're looking at.<!--Sacrista--></p>
				
				<p id="TextPlazaDeEspana" class="MainText ExtraHeadRoom Readability">For those of you Star Wars fans, the Plaza de España should look familiar. It was built for the 1929 Ibero-American Exposition, but most recently starred in such roles as the city of Theed in "The Attack of the Clones" and as Aladeen's Palace in Sacha Baron Cohen's "The Dictator."</p>
							
				<p id="TextMezquitaCordoba" class="MainText ExtraHeadRoom Readability">This is my favorite place in all of Spain. The sense of peace I feel strolling among the repetition of symmetrical arches is overwhelming. The Mezquita was built by the Moors in 700-something. In 1200-something the Christians expelled the Moors and stuck a so-so cathedral in the middle, leaving me to wonder how breathtaking the unspoiled whole must have been.</p>
				
				<p id="TextAlcazarDeSeville" class="MainText ExtraHeadRoom Readability">The Alcázar of Seville is one of the prettiest palaces in Spain, and parts of it are still in use today. The palace is almost entirely assymetrical, which adds to its amazing beauty. Be sure to check out the tapestry room to see an unflinching look at midieval war and a map of the world as seen from Spain at the time.</p>
				
				<p id="TextSierraNevadaGranada" class="MainText ExtraHeadRoom Readability">At the foot of the Sierra Nevada Mountains, the Alhambra was the last holdout of the Moorish occupation of Spain. The palace is quite lovely, but the gardens are the real star of the show, where visitors can wander for hours in the sculptured landscape.</p>

				<p id="TextTempleOfDebod" class="MainText ExtraHeadRoom Readability">The Temple of Debod was built in Egypt in 200 BC and was brought to Madrid in the 1960s to save it from being destroyed by a new dam. Today, it sits atop a reflecting pond at the edge of the Parque del Oeste, within view of the Royal Palace. </p>
				
				<p id="TextSanSebastian" class="MainText ExtraHeadRoom Readability">San Sebastián is rather typical of a european resort town---a crowded beach surrounded by hotels and apartments. But what makes this town such a standout in the region is its world-famous pintxos, which are bite-sized basque country delicacies too diverse to describe. </p>
				
				<p id="TextMarquesDeRiscalAlavaBasqueCountry" class="MainText ExtraHeadRoom Readability">The Rioja Alavesa region of Spain is in the southern part of the basque country. Here, you will find several creative, modern vineyards and bodegas. One of my favorites, and by far the most beautiful, is the Marqués de Riscal. And the wine from this region is as beautiful as the architecture.</p>
				
				<p id="TextLasSetasDeSevilla" class="MainText ExtraHeadRoom Readability">In the middle of the old quarter of Seville is Las Setas, or mushrooms. It's a wooden structure of 6 parasols, almost 90 ft tall. The bottom level houses a museum of Moorish and Roman remains. The top 2 levels feature a restaurant and a winding walkway, where on a clear day, you might see all the way to Africa. </p>
				
				<p id="TextSegoviaAqueduct" class="MainText ExtraHeadRoom Readability">This roman aqueduct has been in Segovia since about the year 100, and carried water from the mountains over 10 miles away. It was destroyed by the Moors around the year 1000, but Isabella and Ferdinand restored it during their reign. It would be pretty cool if modern plumbing hadn't replaced it.</p>
				
				<p id="TextGaudiSagradaFamiliaBarcelonaBack" class="MainText ExtraHeadRoom Readability">The front face of Barcelona's La Sagrada Familia gets all the attention, but I prefer the sculpting on the back side of this basilica. It's curvy, angular, bold, and stark. The basilica, under perpetual construction, is projected to be finished in 2028.</p>			
				
			</div> <!-- End id=MainPhotoDiv -->

		</div> <!-- End id=MainContentArea -->

		
		<div id="Thumbnails">
			
			<div class="GalleryThumbs" id="Thumb1" onClick="ChangeImage('ImageOne')"></div>
			
			<div class="GalleryThumbs" id="Thumb2" onClick="ChangeImage('JohnBaptistCathedralSeville')"></div>
			
			<div class="GalleryThumbs" id="Thumb3" onClick="ChangeImage('PlazaDeEspana')"></div>
			
			<div class="GalleryThumbs" id="Thumb4" onClick="ChangeImage('MezquitaCordoba')"></div>
			
			<div class="GalleryThumbs" id="Thumb5" onClick="ChangeImage('AlcazarDeSeville')"></div>
			
			<div class="GalleryThumbs" id="Thumb6" onClick="ChangeImage('SierraNevadaGranada')"></div>
			
			<div class="GalleryThumbs" id="Thumb7" onClick="ChangeImage('TempleOfDebod')"></div>
			
			<div class="GalleryThumbs" id="Thumb8" onClick="ChangeImage('SanSebastian')"></div>
			
			<div class="GalleryThumbs" id="Thumb9" onClick="ChangeImage('MarquesDeRiscalAlavaBasqueCountry')"></div>
			
			<div class="GalleryThumbs" id="Thumb10" onClick="ChangeImage('LasSetasDeSevilla')"></div>
			
			<div class="GalleryThumbs" id="Thumb11" onClick="ChangeImage('SegoviaAqueduct')"></div>
			
			<div class="GalleryThumbs" id="Thumb12" onClick="ChangeImage('GaudiSagradaFamiliaBarcelonaBack')"></div>
			
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
