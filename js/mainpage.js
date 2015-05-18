// Play video button

$(document).ready(function() {
	
	$('#VideoButton').bind('click', function (e) {
		e.preventDefault();
		 $('#FeaturedContentSection').fadeOut();
		 $('#VideoSection').fadeIn('slow');
		 $("html, body").animate({ scrollTop: $('#VideoSection').offset().top }, 1000);
		 
		    var slide = $('#FadeTwo').attr('class');
			
			if (typeof slide !="undefined" && slide == "ActiveFadingControll") {
				 var myVideo = document.getElementById("HRNVideo");
				  $('#HRNVideoTwo').css('display','none');
				  $('#HRNVideo').css('display','block');
			} else {
				 var myVideo = document.getElementById("HRNVideoTwo"); 
				 $('#HRNVideo').css('display','none');
				 $('#HRNVideoTwo').css('display','block');
			}
		   
		// var myVideo = document.getElementById("HRNVideo"); 
		 
          myVideo.load();
		  myVideo.play(); 
	  })

	$('#HRNVideoPause').bind('click', function (e) {
		
				e.preventDefault();
		 
		 $('#VideoSection').fadeOut();
		 $('#FeaturedContentSection').fadeIn('slow');
		 
		 	 var slide = $('#FadeTwo').attr('class');
			
			if (typeof slide !="undefined" && slide == "ActiveFadingControll") {
				 var myVideo = document.getElementById("HRNVideo"); 
			} else {
				 var myVideo = document.getElementById("HRNVideoTwo"); 
			}
		
	//var myVideo = document.getElementById("HRNVideo"); 
		 

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