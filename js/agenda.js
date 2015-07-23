// JavaScript Document of the Agenda page

var ColorPalette = {};
ColorPalette.color = '#60A9E0';

$(document).ready(function() {
   $("#StageListButton").click(function() {
        $("#StageList").toggleClass("Clicked"); // when the StageListButton is clicked, sets the left margin to 0. Show agenda.css -> #StageList.Clicked
		$("#ShowSessions").toggleClass("invisible");
		$("#CloseStageList").toggleClass("invisible");
    }); 
	$("#StageApplyButton").click(function() {
		$("#StageList").toggleClass("Clicked");
		$("#ShowSessions").toggleClass("invisible");
		$("#CloseStageList").toggleClass("invisible");
	});
	
	$("#MobileStageListButton").click(function() {
		$("#StageList").toggleClass("MobileClicked");
		$("#StageMobileBar").toggleClass("invisible");
	});
	$("#MobileCloseButton01").click(function() {
		$("#StageList").toggleClass("MobileClicked");
	});	
	
	$("#MobileNextButton").click(function() {
		$("#StageList2").toggleClass("MobileNextClicked");
	});
	$("#MobileBackButton").click(function() {
		$("#StageList2").toggleClass("MobileNextClicked");
	});
	
	$("#MobileCloseButton02").click(function() {
		$("#StageList").toggleClass("MobileClicked");
		$("#StageList2").toggleClass("MobileNextClicked");
	});	
	
});

/* Stage menu 640px++ only: if a stage is selected, it keeps the hover state */
$(document).ready(function() {
	if ( screen.width > 640 ) {
		$(".StageButton").click(function() {
			var category = $(this).data('agenda_category');
			$("#StageApplyButton").data('agenda_category', category);
			
			$(".StageButton").attr("class", "StageButton"); // resets the added background-color classes (see 2nd line below) on EVERY button
			$("#" + this.id).toggleClass(this.id + "BgColor"); // when a button is clicked, toggles the specific stage background color on the selected stage button
			$("#" + this.id).toggleClass("StageButtonClicked"); // when a button is clicked, toggles the hover effect (just a color change) on the selected stage button
			
		});
	}
});

/* Opening, Confirming, Closing Stage Panels */
$(document).ready(function() {
    /* Open specific Panel */
	$(".StageButton").click(function() {
		$("#" + this.id + "Panel").addClass("PanelClicked");
	});
	
	// Close ALL panel
	$(".PanelCloseButton").click(function() {
		$(".Panel").removeClass("PanelClicked");
	});
	
	// Confirm specific panel
	$(".PanelConfirmButton").click(function() {
		$(".Panel").removeClass("PanelClicked");
		$("#StageList").removeClass("MobileClicked");
		$("#StageList2").removeClass("MobileNextClicked");
		$('html, body').animate({
			scrollTop: $("#StageDescriptionAnchor").offset().top
		}, 1000);
	});
	
});

/* Tab panel navigation */
$(document).ready(function() {
	// Default: DAY 1 stream is visible
	$("#Day1Button").addClass("ClickedTabButton");
	$("#Day2Button").removeClass("ClickedTabButton");
	$("#MoreButton").removeClass("ClickedTabButton");
	
	$("#Day1Button").click(function() {
		$("#Day1Button").addClass("ClickedTabButton");
		$("#Day2Button").removeClass("ClickedTabButton");
		$("#MoreButton").removeClass("ClickedTabButton");
		
		$("#SessionsDayTwo").fadeOut('slow');
		$("#SessionsDayOne").fadeIn('slow');
		
	});
	$("#Day2Button").click(function() {
		$("#Day1Button").removeClass("ClickedTabButton");
		$("#Day2Button").addClass("ClickedTabButton");
		$("#MoreButton").removeClass("ClickedTabButton");
		
		$("#SessionsDayOne").fadeOut('slow');
		$("#SessionsDayTwo").fadeIn('slow');
		
	});
	$("#MoreButton").click(function() {
		$("#Day1Button").removeClass("ClickedTabButton");
		$("#Day2Button").removeClass("ClickedTabButton");
		$("#MoreButton").addClass("ClickedTabButton");
	});    
});


/* Don't open modals 700px and below */

$(window).load(function() {
	
	if ($(window).width() < 700) {
		$("#SessionInfoModal").attr("id", "TurnedOffSessionInfoModal");
	}
	

});


$(document).ready(function() {

$('body').on('click', '.SessionDesktop, .Session', function(event) {		
	
	var agenda_id = $(this).data('agenda_id');
	var category = $(this).data('agenda_category');
	var day = $(this).data('agenda_day');
	
	//$('#SessionInfoModal').html('');

	
				  $.ajax({
                url: 'controllers/ajax.php',
                type: 'POST',
                data: {action:"agenda_session_modal", category:category, day:day,  agenda_id:agenda_id},
                success: function(data) {
					
                    $('#SessionInfoModal').html(data);
                    $( "#ModalBigContainer").fadeIn('fast');
					  
                   }
            });

	  

	  });
	  

$('body').on('click', '#SessionInfoModalCloseButton', function(event) {		
       $(this).trigger('reveal:close');
 });	  
	  
	  
$('body').on('click', '.PrevNextSession', function(event) {	  

	
	var agenda_id = $(this).data('agenda_id');
	var category = $(this).data('agenda_category');
	var day = $(this).data('agenda_day');

  //add possible fadeOut effect

	
				  $.ajax({
                url: 'controllers/ajax.php',
                type: 'POST',
                data: {action:"agenda_session_modal", category:category, day:day,  agenda_id:agenda_id},
                success: function(data) {
					
					
					$( "#ModalBigContainer" ).fadeOut( "fast", function() {
                              $('#SessionInfoModal').html(data);
							   $( "#ModalBigContainer").fadeIn('fast');
							   
                        });
					
                    

					  
                   }
            });

	  

	  });	  
	

$('#StageApplyButton').bind('click', function (e) {
		$('.TabPanelButton').each(function(index, element) {
         var clicked = $(this).hasClass('ClickedTabButton');
		 
		 if (clicked == true){
			var day = $(this).data('day');
		 }
		 
    });
	
	if (typeof day == "undefined"){
	   var day = 1;	
	}
	
	var category = $(this).data('agenda_category');

				  $.ajax({
                url: 'controllers/ajax.php',
                type: 'POST',
				dataType:"json",
                data: {action:"change_agenda_category_desktop", category:category, day:day},
                success: function(data) {
					
					
					
					  $( "#SessionsDayOne .AgendaSessionsContainerDesktop" ).fadeOut( "fast", function() {
                               $('#SessionsDayOne .AgendaSessionsContainerDesktop').html(data[0]);
							   $('#SessionsDayOne .AgendaSessionsContainerDesktop').fadeIn();
							   
                        });
					
                   
					$('#SessionsDayTwo .AgendaSessionsContainerDesktop').html(data[1]);
					
					$( "#SpeakersAndTestimonialsContainer" ).fadeOut( "fast", function() {
                               $('#SpeakersAndTestimonialsContainer').html(data[2]);
							   $('#SpeakersAndTestimonialsContainer').fadeIn();
							   
                        });
	
	
						$( "#SessionsDayOne .EventDayTitle" ).fadeOut( "fast", function() {
							   $(this).removeClass();
							   
							  $(this).addClass('EventDayTitle');
							  $(this).addClass(data[3]["color"]+'Color');
                              $(this).html(data[3]["category"]+' - Day 1'); 
							  $(this).fadeIn();
							   
                        });		
						
						
						$( "#SessionsDayTwo .EventDayTitle" ).fadeOut( "fast", function() {
							   $(this).removeClass();
							   
							  $(this).addClass('EventDayTitle');
							  $(this).addClass(data[3]["color"]+'Color');
                              $(this).html(data[3]["category"]+' - Day 2'); 
							  $(this).fadeIn();
							   
                        });		
					
					$( "#SelectedStageName" ).fadeOut( "slow", function() {
                              $(this).html(data[3]["category"]); 
							  $(this).fadeIn();
							   
                        });		
						
					$( "#SelectedStageText" ).fadeOut( "slow", function() {
                              $(this).html(data[4]); 
							  $(this).fadeIn();
							   
                        });							
					
					
					if (category > 3) {
						 $( ".TabPanelButton" ).removeClass('MainStageButton');
						
					} else {
						$( ".TabPanelButton" ).removeClass('MainStageButton');
						$( ".TabPanelButton" ).addClass('MainStageButton');
					}
					
/**********************
Color Transitions
************************/
					
					ColorPalette.color = data[3]["main_color"];
					
						//Bottom stripe color change animation
					   var CurrentMainRGB= $( "#StageDescription" ).css('background-color');
					   var CurrentMainColor = rgb2hex(CurrentMainRGB);
					  
					  
					   
						 $.keyframe.define({
						  name: 'MainColorChange',
						  from: {
							  'background-color': CurrentMainColor //Note that 'transform' will be autoprefixed for you
						  },
						  to: {
							  'background-color': data[3]["main_color"] //Note that 'transform' will be autoprefixed for you
						  }
						  
					  });
					  
					  
					  // top half color change animation
					   var CurrentSecondRGB= $( "#UpperStripe" ).css('border-top-color');
					   var CurrentSecondColor = rgb2hex(CurrentSecondRGB);
					  

					   
						 $.keyframe.define({
						  name: 'SecondColorChange',
						  from: {
							  'border-top-color': CurrentSecondColor //Note that 'transform' will be autoprefixed for you
						  },
						  to: {
							  'border-top-color': data[3]["second_color"] //Note that 'transform' will be autoprefixed for you
						  }
					  });
					  

						  // Clicked button animation
					   var CurrentButtonRGB= $( ".ClickedTabButton" ).css('background-color');
					   var CurrentButtonColor = rgb2hex(CurrentButtonRGB);
					  
					   
						 $.keyframe.define({
						  name: 'ButtonColorChange',
						  from: {
							  'background-color': CurrentButtonColor, //Note that 'transform' will be autoprefixed for you
							  'border-bottom' : '2px solid '+CurrentButtonColor
						  },
						  to: {
							  'background-color': data[3]["main_color"], //Note that 'transform' will be autoprefixed for you
							  'border-bottom' : '2px solid '+data[3]["main_color"]
						  }
					  });							
					  
					  

                    
 
					  
					  //trigger the animations
						   setTimeout(function () {


								$( "#StageDescription" ).playKeyframe({
								  name: 'MainColorChange',
								  duration: '1s',
								   complete: function(){
									   
									   $( "#StageDescription" ).removeAttr('style');
									   $( "#StageDescription" ).css('background-color',data[3]["main_color"]);
									   
									   }
								});
								
								$( "#UpperStripe" ).playKeyframe({
								  name: 'SecondColorChange',
								  duration: '1s',
								  complete: function(){
									   
									   $( "#UpperStripe" ).removeAttr('style');
									   $( "#UpperStripe" ).css('border-top-color',data[3]["second_color"]);
									   
									   }
								});
								
								
								 $( ".ClickedTabButton" ).playKeyframe({
								  name: 'ButtonColorChange',
								  duration: '1s',
								   complete: function(){
									   
									   $( ".ClickedTabButton" ).removeAttr('style');
									   $( ".ClickedTabButton" ).css('background-color',data[3]["main_color"]);
									   $( ".ClickedTabButton" ).css('border-bottom','2px solid '+data[3]["main_color"]);
									   
									   }
								});
									
									
									 	
						 } , 200); //set timeout function end
								

/**********************
END Color Transitions
************************/							
					

                   }
            });// ajax call end

	  
	 	if ($(window).width() < 1050) {
					$.ajax({
						  url: 'controllers/ajax.php',
						  type: 'POST',
						  dataType:"json",
						  data: {action:"change_agenda_category_mobile", category:category},
						  success: function(data) {
								   $( "#SessionsDayOneMobile" ).fadeOut( "fast", function() {
										   $('#SessionsDayOneMobile').html(data[0]);
										   $('#SessionsDayOneMobile').fadeIn();
										   
									});
								
							   
								$( "#SessionsDayTwoMobile" ).fadeOut( "fast", function() {
                               	$('#SessionsDayTwoMobile').html(data[1]);
							   $('#SessionsDayTwoMobile').fadeIn();
							   
                        });
					
					

			  
			  
  
								   }
						  });// ajax call end

       } //if screen < 1050
	  

	  });



$('.PanelConfirmButton').bind('click', function (e) {
	
	var category = $(this).data('agenda_category');

				  $.ajax({
                url: 'controllers/ajax.php',
                type: 'POST',
				dataType:"json",
                data: {action:"change_agenda_category_mobile", category:category},
                success: function(data) {
					
					  $( "#SessionsDayOne" ).fadeOut( "fast", function() {
                               $('#SessionsDayOne').html(data[0]);
							   $('#SessionsDayOne').fadeIn();
							   
                        });
					
					
						  $( "#SessionsDayTwo" ).fadeOut( "fast", function() {
                               	$('#SessionsDayTwo').html(data[1]);
							   $('#SessionsDayTwo').fadeIn();
							   
                        });
					
                   
				
					
					$( "#SpeakersAndTestimonialsContainer" ).fadeOut( "fast", function() {
                               $('#SpeakersAndTestimonialsContainer').html(data[2]);
							   $('#SpeakersAndTestimonialsContainer').fadeIn();
							   
                        });
	
	
						$( "#SessionsDayOne .EventDayTitle" ).fadeOut( "fast", function() {
							   $(this).removeClass();
							   
							  $(this).addClass('EventDayTitle');
							  $(this).addClass(data[3]["color"]);
                              $(this).html(data[3]["category"]+' - Day 1'); 
							  $(this).fadeIn();
							   
                        });		
						
						
						$( "#SessionsDayTwo .EventDayTitle" ).fadeOut( "fast", function() {
							   $(this).removeClass();
							   
							  $(this).addClass('EventDayTitle');
							  $(this).addClass(data[3]["color"]);
                              $(this).html(data[3]["category"]+' - Day 2'); 
							  $(this).fadeIn();
							   
                        });		
					
					$( "#MobileStageName" ).fadeOut( "fast", function() {
						      $(this).removeClass();
                              $(this).html(data[3]["category"]); 
							  $(this).addClass(data[3]["color"]+'Color');
							  $(this).fadeIn();
							   
                        });		
						
					$( "#SelectedStageText" ).fadeOut( "slow", function() {
                              $(this).html(data[4]); 
							  $(this).fadeIn();
							   
                        });			
					
					
					
					
											//Bottom stripe color change animation
					   var CurrentMainRGB= $( "#StageDescription" ).css('background-color');
					   var CurrentMainColor = rgb2hex(CurrentMainRGB);
					  
					  
					   
						 $.keyframe.define({
						  name: 'MainColorChange',
						  from: {
							  'background-color': CurrentMainColor //Note that 'transform' will be autoprefixed for you
						  },
						  to: {
							  'background-color': data[3]["main_color"] //Note that 'transform' will be autoprefixed for you
						  }
						  
					  });
					  
					  
					  // top half color change animation
					   var CurrentSecondRGB= $( "#UpperStripe" ).css('border-top-color');
					   var CurrentSecondColor = rgb2hex(CurrentSecondRGB);
					  

					   
						 $.keyframe.define({
						  name: 'SecondColorChange',
						  from: {
							  'border-top-color': CurrentSecondColor //Note that 'transform' will be autoprefixed for you
						  },
						  to: {
							  'border-top-color': data[3]["second_color"] //Note that 'transform' will be autoprefixed for you
						  }
					  });
		
							  //trigger the animations
						   setTimeout(function () {


								$( "#StageDescription" ).playKeyframe({
								  name: 'MainColorChange',
								  duration: '1s'
								  
								});
								
								$( "#UpperStripe" ).playKeyframe({
								  name: 'SecondColorChange',
								  duration: '1s',
								  complete: function(){
									   $( "#UpperStripe" ).css('border-top-color',data[3]["second_color"]);
									   $( "#UpperStripe" ).removeAttr('style');
									   $( "#UpperStripe" ).css('border-top-color',data[3]["second_color"]);
									   
									   }
								});
			 	
						 } , 200); //set timeout function end
		
		
					

                   }
            });// ajax call end

	  

	  });	
 
	
	
	$(".TabPanelButton").mouseover(function() {
       $(this).css("background-color",ColorPalette.color);
	   $(this).css("border-bottom","2px solid "+ColorPalette.color);
	   
     }); 
	 
	$(".TabPanelButton").mouseout(function() {
		var selected = $(this).hasClass('ClickedTabButton');
		
		if (selected == false){
			$(this).css("background-color","#E0E0E0");
			$(this).css("border-bottom","2px solid #E0E0E0");
		}
       
     }); 	
	 
	 
		$(".TabPanelButton").click(function() {
			$(".TabPanelButton").each(function(index, element) {
				$(this).removeAttr('style');
				var selected = $(this).hasClass('ClickedTabButton');
					if (selected == false){
			            $(this).css("background-color","#E0E0E0");
						$(this).css("border-bottom","2px solid #E0E0E0");
		            } else {
						$(this).css("background-color",ColorPalette.color);
	                    $(this).css("border-bottom","2px solid "+ColorPalette.color);
						
					}
                
            });
		
		

       
     });  

	  
});

var hexDigits = new Array
        ("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"); 

//Function to convert hex format to a rgb color
function rgb2hex(rgb) {
 rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
 return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

function hex(x) {
  return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
 }