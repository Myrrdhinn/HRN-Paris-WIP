// Play video button

$(document).ready(function() {
	
	$('#VideoButton').bind('click', function (e) {
		e.preventDefault();
		 $('#FeaturedContentSection').fadeOut();
		 $('#VideoSection').fadeIn('slow');
		 $("html, body").animate({ scrollTop: $('#VideoSection').offset().top }, 1000);
		 var myVideo = document.getElementById("HRNVideo"); 
		 
          myVideo.load();
		  myVideo.play(); 
	  })

	$('#HRNVideoPause').bind('click', function (e) {
		
				e.preventDefault();
		 
		 $('#VideoSection').fadeOut();
		 $('#FeaturedContentSection').fadeIn('slow');
		
	var myVideo = document.getElementById("HRNVideo"); 
		 

           myVideo.pause(); 
 
	   
	 })	
	
		
});


function ShowMobileMenu () {
	/*$("#MobileUl").addClass("active");*/
	$(".sidebar").fadeIn(100);
	$("#MobileUl").addClass("active");
	$("#MobileNav").addClass("active");
	$(".nav-social").fadeIn(100);
	
}

function HideMobileMenu () {

	$("#MobileNav").fadeOut(500);
	
	  setTimeout(function () {
		 $("#MobileNav").removeClass("active");
		$(".nav-social").fadeOut(100);
		$("#MobileUl").removeClass("active");
	    $(".sidebar").fadeOut(100);


	 }, 800); //will call the function after 4 secs. 


}