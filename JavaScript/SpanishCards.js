var Request1 = false;
var Request2 = false;
var aWordArray = new Array(2);
var catURL;


function GetCategories() {
	var selectMain = document.getElementById("Categories");
	var optionMain = selectMain.options[selectMain.selectedIndex].text;

if (window.XMLHttpRequest) {
	Request1 = new XMLHttpRequest();
} else if (window.ActiveXObject) {
	Request1 = new ActiveXObject("Microsoft.XMLHTTP");
}

	if (Request1) {
		var URL = "categories.php?category=" + optionMain;
		Request1.open("GET", URL);
		Request1.onreadystatechange = function() {
			if (Request1.readyState == 4 && Request1.status == 200) {
				var responseString = Request1.responseText;
				eval(responseString);
			}
		}
		Request1.send(null);
	}
}

function PopulateSubCats(subCat1, subCat2, subCat3) {

	var makeCat = document.getElementById("Subcategories");
	var hideCat = document.getElementById("Subs");

	makeCat.style.visibility = "visible";
	hideCat.classList.add("fa-angle-down");

	makeCat.options[1] = new Option(subCat1);
	makeCat.options[2] = new Option(subCat2);
	makeCat.options[3] = new Option(subCat3);

}

function DisplayCategory() {

	var subCat = document.getElementById("Subcategories");
	var chosenCat = subCat.options[subCat.selectedIndex].text;

	document.getElementById("FinalCategory").innerHTML = chosenCat;
	document.getElementById("EnglishWord").innerHTML = " ";
	document.getElementById("SpanishWord").innerHTML = " ";

	catURL = chosenCat + ".php?x=" + Math.round(1 + Math.random() * 9);
	catURL = catURL.toLowerCase();
	return catURL;
}

function ShowNextWord() {
	document.getElementById("EnglishWord").innerHTML = " ";
	aWordArray = false;
	GetWord(catURL, "EnglishWord", "SpanishWord")
}

function GetWord(url, engDiv, spanDiv) {
	if (window.XMLHttpRequest) {
		Request2 = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		Request2 = new ActiveXObject(Microsoft.XMLHTTP);
	}

	if (Request2) {

		requestEng = document.getElementById(engDiv);
		requestSpan = document.getElementById(spanDiv);

		Request2.open("GET", url, true);
		Request2.onreadystatechange = function() {
			if(Request2.readyState == 4 && Request2.status == 200) {
				aWordArray = Request2.responseText.split("_");
				requestEng.innerHTML = aWordArray[0];
				requestSpan.innerHTML = aWordArray[1];
				requestSpan.style.visibility = "hidden";
				return aWordArray[1];
			}
		}
		Request2.send(null);
	}
}

function ShowSpanish() {
	finalSpan = document.getElementById("SpanishWord")
	finalSpan.innerHTML = aWordArray[1];
	finalSpan.style.visibility = "visible";
}
