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
	makeCat.style.visibility = "visible";

	makeCat.options[1] = new Option(subCat1);
	makeCat.options[2] = new Option(subCat2);
	makeCat.options[3] = new Option(subCat3);

}

function DisplayCategory() {

	var subCat = document.getElementById("Subcategories");
	var chosenCat = subCat.options[subCat.selectedIndex].text;

	document.getElementById("FinalCategory").innerHTML = chosenCat;
	document.getElementById("EnglishWord").innerHTML = " ";
	document.getElementById("FrenchWord").innerHTML = " ";

	catURL = chosenCat + ".php?x=" + Math.round(1 + Math.random() * 9);
	catURL = catURL.toLowerCase();
	return catURL;
}

function ShowNextWord() {
	document.getElementById("EnglishWord").innerHTML = " ";
	aWordArray = false;
	GetWord(catURL, "EnglishWord", "FrenchWord")
}

function GetWord(url, engDiv, frenDiv) {
	if (window.XMLHttpRequest) {
		Request2 = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		Request2 = new ActiveXObject(Microsoft.XMLHTTP);
	}

	if (Request2) {

		requestEng = document.getElementById(engDiv);
		requestFren = document.getElementById(frenDiv);

		Request2.open("GET", url, true);
		Request2.onreadystatechange = function() {
			if(Request2.readyState == 4 && Request2.status == 200) {
				aWordArray = Request2.responseText.split("_");
				requestEng.innerHTML = aWordArray[0];
				requestFren.innerHTML = aWordArray[1];
				requestFren.style.visibility = "hidden";
				return aWordArray[1];
			}
		}
		Request2.send(null);
	}
}

function ShowFrench() {
	finalFren = document.getElementById("FrenchWord")
	finalFren.innerHTML = aWordArray[1];
	finalFren.style.visibility = "visible";
}


