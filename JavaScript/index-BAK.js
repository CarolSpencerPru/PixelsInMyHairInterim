
$(document).ready(function() {

//Height & Width
	var heightWindow = $(window).height();
	var widthWindow = $(window).width();
	
//How far each section is from the top 
	var offsetTravelSection = $('#TravelBlog').offset().top;
	var offsetGapSection = $('section.Gap').offset().top;
	var offsetGallerySection = $('#PhotoGallery').offset().top;
	var offsetResourcesSection = $('#ResourcesSection').offset().top;
	var offsetKSUSection = $('#KSU').offset().top;


	if (widthWindow >= 651) {

//Red button for A Hair Out of Place
		$(window).scroll(function() {
			var scrollPos = $(window).scrollTop();	

			if (scrollPos >= offsetTravelSection && scrollPos <= offsetGapSection-20) {

				$('#ButtonHair').addClass('Red');

			} else {

				$('#ButtonHair').removeClass('Red');

			}
		});

//Red button for A Dozen of Everywhere
		$(window).scroll(function() {
			var scrollPos = $(window).scrollTop();	

			if (scrollPos >= offsetGallerySection-20 && scrollPos <= offsetResourcesSection-20) {

				$('#ButtonGallery').addClass('Red');

			} else {

				$('#ButtonGallery').removeClass('Red');

			}
		});

//Red button for Resources
		$(window).scroll(function() {
			var scrollPos = $(window).scrollTop();	

			if (scrollPos >= offsetResourcesSection-20 && scrollPos <= offsetKSUSection-20) {

				$('#ButtonResources').addClass('Red');

			} else {

				$('#ButtonResources').removeClass('Red');

			}
		});

//Red button for KSU Work Examples
		$(window).scroll(function() {
			var scrollPos = $(window).scrollTop();	

			if (scrollPos >= offsetKSUSection-20) {

				$('#ButtonKSU').addClass('Red');

			} else {

				$('#ButtonKSU').removeClass('Red');

			}
		});

	}// End larger than 651	
	
	
  $("#MenuCollapse").click(function() {
    $(".navbar-collapse").collapse('hide');
  });



	
}); //End Document Ready


