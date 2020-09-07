	var browserWidth = window.innerWidth;
	var docTitle = document.querySelector("title");
	var title = (docTitle.innerHTML);
	var splitTitle = title.split(" | ");
	var subDirectory = splitTitle[0];
	var jpgName = splitTitle[1];
	var bkgImagePath = "../Images/Around/" + subDirectory + "/" + jpgName + ".jpg";

	$('.GalleryPageBackground').css('background-image', 'url(' + bkgImagePath + ')');
	
	ChangeImage('ImageOne');
	checkWidth();

function ChangeImage(imageName) {

	var imageDiv = document.getElementById("ImageHolder");
	var newImagePath = "url(../Images/Around/" + subDirectory + "/" + imageName + ".jpg)";
	$(imageDiv).css('background-image', newImagePath);
	var imgDesc = "Text" + imageName;
	var newText = document.getElementById(imgDesc);
	$('#MainPhotoDiv p').css('display', 'none');
	newText.style.display = "block";
}

function smallPhone() {
	var pTags = document.querySelectorAll('#MainContentArea p');
	for (var i=0; i < pTags.length; i++) {
		var pTagIDs = pTags[i].getAttribute('id');
		var pTagImg = pTagIDs.slice(4);
		var pTagImgName = "../Images/Around/" + subDirectory + "/" + pTagImg + ".jpg";
		$(pTags[i]).before('<img src="' + pTagImgName + '" class="preImage" />');
	}	
}

function largeScreen() {
	var pTags = document.querySelectorAll('#MainContentArea p');
	var thumbDivs = document.querySelectorAll('#Thumbnails div');
	for (var i=0; i < pTags.length; i++) {
		var pTagIDs = pTags[i].getAttribute('id');
		var pTagImg = pTagIDs.slice(4);
		var pTagImgName = "../Images/Around/" + subDirectory + "/" + pTagImg + ".jpg";
		var divTagIDs = thumbDivs[i].getAttribute('id');
		console.log(divTagIDs + ", " + pTagImgName);
		document.getElementById(divTagIDs).style.backgroundImage = 'url(' + pTagImgName + ')';
		document.getElementById(divTagIDs).style.backgroundRepeat = 'no-repeat';
		document.getElementById(divTagIDs).style.backgroundSize = 'cover';
		document.getElementById(divTagIDs).style.backgroundImagePosition = 'center center';
	}	
}



function checkWidth() {
	if (browserWidth < 650) {
		smallPhone();
	} else {
		largeScreen();
	}
}