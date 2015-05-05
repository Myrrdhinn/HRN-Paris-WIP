// Play video button

$(document).ready(function() {
	
	$('#VideoButton').bind('click', function (e) {
		e.preventDefault();
		 $('#FeaturedContentSection').fadeOut();
		 $('#VideoSection').fadeIn('slow');
		 $("html, body").animate({ scrollTop: $('#VideoSection').offset().top }, 1000);
		 
		    var slideTwo = $('#FadeTwo').attr('class');
			var slideOne = $('#FadeOne').attr('class');
			var slideThree = $('#FadeThree').attr('class');
			
			if (typeof slideTwo !="undefined" && slideTwo == "ActiveFadingControll") {
				 var myVideo = document.getElementById("HRNVideo");
				  $('#HRNVideoTwo').css('display','none');
				  $('#HRNVideo').css('display','block');
			} 
			
			if (typeof slideOne !="undefined" && slideOne == "ActiveFadingControll") {
				 var myVideo = document.getElementById("HRNVideoTwo"); 
				 $('#HRNVideo').css('display','none');
				 $('#HRNVideoTwo').css('display','block');
			}
			
			if (typeof slideThree !="undefined" && slideThree == "ActiveFadingControll") {
				 var myVideo = document.getElementById("HRNVideoThree"); 
				 $('#HRNVideo').css('display','none');
				 $('#HRNVideoTwo').css('display','none');
				 $('#HRNVideoThree').css('display','block');
			}
		   
		// var myVideo = document.getElementById("HRNVideo"); 
		 
         // myVideo.load();
		  myVideo.controls = true;
		  myVideo.play(); 
	  })

	$('#HRNVideoPause').bind('click', function (e) {
		
				e.preventDefault();
		 

		 
		    var slideTwo = $('#FadeTwo').attr('class');
			var slideOne = $('#FadeOne').attr('class');
			var slideThree = $('#FadeThree').attr('class');
			
			if (typeof slideTwo !="undefined" && slideTwo == "ActiveFadingControll") {
				 var myVideo = document.getElementById("HRNVideo"); 
			} 
			
			if (typeof slideOne !="undefined" && slideOne == "ActiveFadingControll") {
				 var myVideo = document.getElementById("HRNVideoTwo"); 
			}
			
		   if (typeof slideThree !="undefined" && slideThree == "ActiveFadingControll") {
				 var myVideo = document.getElementById("HRNVideoThree"); 
			}
		
	//var myVideo = document.getElementById("HRNVideo"); 
		 

           //myVideo.pause(); 
		   
		if (myVideo.paused) {
            myVideo.play(); 
	    } else {
           myVideo.pause(); 
       } 
	   
 
	   
	 })
	 

$('#HRNVideoClose').bind('click', function (e) {
	
			 var slideTwo = $('#FadeTwo').attr('class');
			var slideOne = $('#FadeOne').attr('class');
			var slideThree = $('#FadeThree').attr('class');
			
			if (typeof slideTwo !="undefined" && slideTwo == "ActiveFadingControll") {
				 var myVideo = document.getElementById("HRNVideo"); 
			} 
			
			if (typeof slideOne !="undefined" && slideOne == "ActiveFadingControll") {
				 var myVideo = document.getElementById("HRNVideoTwo"); 
			}
			
		   if (typeof slideThree !="undefined" && slideThree == "ActiveFadingControll") {
				 var myVideo = document.getElementById("HRNVideoThree"); 
			}
		
	
		 
	 	 $('#VideoSection').fadeOut();
		 $('#FeaturedContentSection').fadeIn('slow');
		 myVideo.pause();
		 myVideo.load();
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