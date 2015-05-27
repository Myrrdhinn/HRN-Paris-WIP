// Horizontal menu float in from the top
function menuLoad() {
	// Floats in the main menu from the top 
	$("#SecondStateMainMenuContainer").css("margin-top", "0");
	$("#FeaturedContentSection").css("padding-top", "4.1666666vw");
	// Floats in the menuitems from top after the menu float-in animation is finished
	setTimeout( function() {
            $("#MenuContainer a:nth-child(2)").css('top','1vw');}, 500);
	setTimeout( function() {
            $("#MenuContainer a:nth-child(3)").css('top','1vw');}, 800);
	setTimeout( function() {
            $("#MenuContainer a:nth-child(4)").css('top','1vw');}, 1100);
	setTimeout( function() {
            $("#MenuContainer a:nth-child(5)").css('top','1vw');}, 1400);
	setTimeout( function() {
            $("#MenuContainer a:nth-child(6)").css('top','1vw');}, 1700);
	setTimeout( function() {
            $("#MenuContainer a:nth-child(7)").css('top','1vw');}, 2000);
}

// Play video button

$(document).ready(function() {
	//Play the slide one video
	 var myVideo = document.getElementById("HRNVideoTwo"); 
	          myVideo.load();
		  myVideo.play(); 
	
	
	
	/* unused code for now
	
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
*/


	$('#HRNVideoPause').bind('click', function (e) {
		
				e.preventDefault();
		 
		 
		 	 var slide = $('#FadeTwo').attr('class');
			
			if (typeof slide !="undefined" && slide == "ActiveFadingControll") {
				 var myVideo = document.getElementById("HRNVideo"); 
			} else {
				 var slideThree = $('#FadeThree').attr('class');
				if (typeof slideThree !="undefined" && slideThree == "ActiveFadingControll") {
					 var myVideo = document.getElementById("HRNVideoThree");
				} else {
					var myVideo = document.getElementById("HRNVideoTwo"); 
				}
				 
			}
		
	//var myVideo = document.getElementById("HRNVideo"); 
		 

           myVideo.pause(); 
 
	   
	 })
	 	
		
});


$(document).ready(function() {
	
	$('.SliderNavigationArrow').bind('click', function (e) {
		
		var  nextslide = $(this).data('next');
		var current = $(this).data('current');
		
			if (nextslide == 1) {
				   if (current == 3){ 				
						$('#AboutHRTechFadingContentThree').fadeOut('slow', function(){
						$('#AboutHRTechFadingContentOne').fadeIn('slow');
						
						$('#FadeThree').removeClass('ActiveFadingControll');
						$('#FadeOne').addClass('ActiveFadingControll');
					   });
					   
					   var myVideo = document.getElementById("HRNVideoThree");
		                     myVideo.pause();
							 
							  $('#HRNVideoThree').fadeOut();
						 
				   }
				   
				   if (current == 2){ 				   
						  $('#AboutHRTechFadingContentTwo').fadeOut('slow', function(){
						  $('#AboutHRTechFadingContentOne').fadeIn('slow');
						  
						  $('#FadeTwo').removeClass('ActiveFadingControll');
						  $('#FadeOne').addClass('ActiveFadingControll');
						  	 var myVideo = document.getElementById("HRNVideo");
		                     myVideo.pause();
							 
							  $('#HRNVideo').fadeOut();
						  
					  });
				   }
                $('#SliderArrowLeft').data('current','1');
				$('#SliderArrowRight').data('current','1');
				
				$('#SliderArrowLeft').data('next','3');
				$('#SliderArrowRight').data('next','2');
				
				$('#HRNVideoTwo').fadeIn();
					 var myVideo = document.getElementById("HRNVideoTwo");
	                 myVideo.load();
		             myVideo.play(); 
				
			} 
			
			if (nextslide == 2) {
				   if (current == 1){ 
			
						  $('#AboutHRTechFadingContentOne').fadeOut('slow', function(){
						  $('#AboutHRTechFadingContentTwo').fadeIn('slow');
						  
						  $('#FadeOne').removeClass('ActiveFadingControll');
						  $('#FadeTwo').addClass('ActiveFadingControll');
						  	 var myVideo = document.getElementById("HRNVideoTwo");
		                     myVideo.pause();
							 $('#HRNVideoTwo').fadeOut();
						  
						 });
			   
				   }
					
					
					 if (current == 3){ 	   
						 
							$('#AboutHRTechFadingContentThree').fadeOut('slow', function(){
							$('#AboutHRTechFadingContentTwo').fadeIn('slow');
							
							$('#FadeThree').removeClass('ActiveFadingControll');
							$('#FadeTwo').addClass('ActiveFadingControll');
							
							var myVideo = document.getElementById("HRNVideoThree");
		                     myVideo.pause();
							 
							  $('#HRNVideoThree').fadeOut();
						   });
						
					 }
					 
			    $('#SliderArrowLeft').data('current','2');
				$('#SliderArrowRight').data('current','2');
				
				$('#SliderArrowLeft').data('next','1');
				$('#SliderArrowRight').data('next','3');
				
				$('#HRNVideo').fadeIn();
				
					 var myVideo = document.getElementById("HRNVideo");
	                 myVideo.load();
		             myVideo.play(); 
					 			
			} 
			
			
			if (nextslide == 3) {
				   if (current == 1){ 
			
						$('#AboutHRTechFadingContentOne').fadeOut('slow', function(){
							$('#AboutHRTechFadingContentThree').fadeIn('slow');
							
							$('#FadeOne').removeClass('ActiveFadingControll');
							$('#FadeThree').addClass('ActiveFadingControll');
			                 var myVideo = document.getElementById("HRNVideoTwo");
		                     myVideo.pause();
							 
							  $('#HRNVideoTwo').fadeOut();
							
						});
			   
				   }
					
					
					 if (current == 2){ 	   
						 
						  $('#AboutHRTechFadingContentTwo').fadeOut('slow', function(){
						  $('#AboutHRTechFadingContentThree').fadeIn('slow');
						  
						  $('#FadeTwo').removeClass('ActiveFadingControll');
						  $('#FadeThree').addClass('ActiveFadingControll');
						  var myVideo = document.getElementById("HRNVideo");
		                     myVideo.pause();
							  $('#HRNVideo').fadeOut();
						  
						 });
						
					 }
				$('#SliderArrowLeft').data('current','3');
				$('#SliderArrowRight').data('current','3');
				
				$('#SliderArrowLeft').data('next','2');
				$('#SliderArrowRight').data('next','1');
				
				$('#HRNVideoThree').fadeIn();
				
					 var myVideo = document.getElementById("HRNVideoThree");
	                 myVideo.load();
		             myVideo.play(); 
					 
				
			} 
			
			
 
	   
	 })
	
	


$('#FadeTwo').click(function(e){ 
    var one = $('#FadeOne').attr('class');
	var three = $('#FadeThree').attr('class');
	         /*
	    $('#AboutButtonContainerTwo').fadeOut('slow');
		$('#AboutButtonContainer').fadeIn('slow');
	*/
	if (one == 'ActiveFadingControll') {
			$('#AboutHRTechFadingContentOne').fadeOut('slow', function(){
			$('#AboutHRTechFadingContentTwo').fadeIn('slow');
			$('#FadeOne').removeClass('ActiveFadingControll');
			$('#FadeTwo').addClass('ActiveFadingControll');
             var myVideo = document.getElementById("HRNVideoTwo");
		         myVideo.pause();
				 $('#HRNVideoTwo').fadeOut();
			
		   });
		
	} else if (three == 'ActiveFadingControll') {
			$('#AboutHRTechFadingContentThree').fadeOut('slow', function(){
			$('#AboutHRTechFadingContentTwo').fadeIn('slow');
			$('#FadeThree').removeClass('ActiveFadingControll');
			$('#FadeTwo').addClass('ActiveFadingControll');
			  var myVideo = document.getElementById("HRNVideoThree");
		         myVideo.pause();
				 $('#HRNVideoThree').fadeOut();
			
		   });
		
	}
	
					$('#HRNVideo').fadeIn();
				
					 var myVideo = document.getElementById("HRNVideo");
	                 myVideo.load();
		             myVideo.play(); 

});


$('#FadeOne').click(function(e){  
    var two = $('#FadeTwo').attr('class');
	var three = $('#FadeThree').attr('class');
	
	        /*
		$('#AboutButtonContainerTwo').fadeOut('slow');
		$('#AboutButtonContainer').fadeIn('slow');
        */
	
  if (two == 'ActiveFadingControll') {
    $('#AboutHRTechFadingContentTwo').fadeOut('slow', function(){
        $('#AboutHRTechFadingContentOne').fadeIn('slow');
		$('#FadeTwo').removeClass('ActiveFadingControll');
		$('#FadeOne').addClass('ActiveFadingControll');
		 var myVideo = document.getElementById("HRNVideo");
		         myVideo.pause();
				 $('#HRNVideo').fadeOut();
		
    });

   } else if (three == 'ActiveFadingControll') {
			$('#AboutHRTechFadingContentThree').fadeOut('slow', function(){
			$('#AboutHRTechFadingContentOne').fadeIn('slow');
			$('#FadeThree').removeClass('ActiveFadingControll');
			$('#FadeOne').addClass('ActiveFadingControll');
			var myVideo = document.getElementById("HRNVideoThree");
		         myVideo.pause();
				 $('#HRNVideoThree').fadeOut();
			
		   });
		
	}	
					$('#HRNVideoTwo').fadeIn();
				
					 var myVideo = document.getElementById("HRNVideoTwo");
	                 myVideo.load();
		             myVideo.play(); 	
	
	
});

$('#FadeThree').click(function(e){  
    var one = $('#FadeOne').attr('class');
	var two = $('#FadeTwo').attr('class');
           /*
	$('#AboutButtonContainer').fadeOut('slow');
	$('#AboutButtonContainerTwo').fadeIn('slow');
	*/
  if (one == 'ActiveFadingControll') {
    $('#AboutHRTechFadingContentOne').fadeOut('slow', function(){
        $('#AboutHRTechFadingContentThree').fadeIn('slow');
		$('#FadeOne').removeClass('ActiveFadingControll');
		$('#FadeThree').addClass('ActiveFadingControll');
		var myVideo = document.getElementById("HRNVideoTwo");
		         myVideo.pause();
				 $('#HRNVideoTwo').fadeOut();
    });

   } else if (two == 'ActiveFadingControll') {
			$('#AboutHRTechFadingContentTwo').fadeOut('slow', function(){
			$('#AboutHRTechFadingContentThree').fadeIn('slow');
			$('#FadeTwo').removeClass('ActiveFadingControll');
			$('#FadeThree').addClass('ActiveFadingControll');
			 var myVideo = document.getElementById("HRNVideo");
		         myVideo.pause();
				 $('#HRNVideo').fadeOut();
			
		   });
		   
		
	}
	
				   $('#HRNVideoThree').fadeIn();
				
					 var myVideo = document.getElementById("HRNVideoThree");
	                 myVideo.load();
		             myVideo.play(); 	
	
	
});


	 	
		
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