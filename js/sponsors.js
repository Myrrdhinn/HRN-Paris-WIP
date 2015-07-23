
$(function(){
	var myElement = document.getElementById('emptymodal');
	
	var hammertime = new Hammer(myElement);
    hammertime.on('swiperight', function(ev) {
      swipeHandler('left');
     });
    hammertime.on('swipeleft', function(ev) {
      swipeHandler('right');
     });	


 
  // Callback function references the event target and adds the 'swipe' class to it
  function swipeHandler(direction){
	  
	  
	var current = $('.ModalArrowLeftMobile').data('current');
	
	var type = direction;
	var i = 0;
	
	var order = [];
	
	var chosen = '';
	
if(alaCarteCheck.sponsor === 0){	
	$('.SponsorGridAnchor').each(function(index, element) {
		 
			  var id = $(this).data('sponsornum');
			  var carte = $(this).hasClass('AlaCarteAnchor');
			  
			  if (carte === false) {
				    order[i] = id;
		             i++; 
				  
			  }
		    
		
		

     });
	 
	 
 }		
 
 
 if(alaCarteCheck.sponsor === 1){
	 i = 0;	
	$('.AlaCarteAnchor').each(function(index, element) {
		 
			  var id = $(this).data('sponsornum');

				    order[i] = id;
		             i++; 


     });
	 
	 
 }	
	
			
			
			jQuery.each(order, function(index, element) {
			 

				if (element == current) {
					
					if (type === 'right') {
						index++;
						chosen = order[index];
					}
					
					if (type === 'left'){
						index--;
						 chosen = order[index];
					}
					
				}
				
			});
	
if (typeof chosen !== 'undefined' && chosen !== ''){
	var sId = chosen;
					  $.ajax({
                url: 'controllers/ajax.php',
                type: 'POST',
                data: {action:"get_sponsor", sId:sId},
                success: function(data) {
                    $('#emptymodal').html(data);
					
                   }
            });
	
	
}
	
	
			
  }
  
 
});






var alaCarteCheck = {};
alaCarteCheck.sponsor = 0;
<!-- Modal/list switcher -->

$(document).ready(function() {




$('.SponsorGridAnchor').bind('click', function (e) {
	var sId = $(this).data('sponsornum');
	$('#emptymodal').html('');
	var alacarte = $(this).hasClass('AlaCarteAnchor');

	
				  $.ajax({
                url: 'controllers/ajax.php',
                type: 'POST',
                data: {action:"get_sponsor", sId:sId},
                success: function(data) {
                    $('#emptymodal').html(data);

				 	if (alacarte === true){
                      alaCarteCheck.sponsor = 1;
					  }	 else {
						alaCarteCheck.sponsor = 0;
					  }
					  
                   }
            });
	
	
       //$('body').css("overflow-y","hidden");
		setTimeout(function () {
				 $('.SponsorModal').css("overflow-y","auto");

				 
		} , 200); //set timeout function end
	  

	  })
	  

$('body').on('click', '.ModalArrow', function(event) {
	
	
    var current = $(this).data('current');
	
	var type = $(this).data('arrowtype');
	var i = 0;
	
	var order = [];
	
	var chosen = '';
	
	

if(alaCarteCheck.sponsor === 0){	
	$('.SponsorGridAnchor').each(function(index, element) {
		 
			  var id = $(this).data('sponsornum');
			  var carte = $(this).hasClass('AlaCarteAnchor');
			  
			  if (carte === false) {
				    order[i] = id;
		             i++; 
				  
			  }
		    
		
		

     });
	 
	 
 }		
 
 
 if(alaCarteCheck.sponsor === 1){
	 i = 0;	
	$('.AlaCarteAnchor').each(function(index, element) {
		 
			  var id = $(this).data('sponsornum');

				    order[i] = id;
		             i++; 


     });
	 
	 
 }	
			
			
			jQuery.each(order, function(index, element) {
			 

				if (element === current) {
					
					if (type === 'right') {
						index++;
						chosen = order[index];
					}
					
					if (type === 'left'){
						index--;
						 chosen = order[index];
					}
					
				}
				
			});
	
if (typeof chosen !== 'undefined' && chosen !== ''){
	var sId = chosen;
					  $.ajax({
                url: 'controllers/ajax.php',
                type: 'POST',
                data: {action:"get_sponsor", sId:sId},
                success: function(data) {
                    $('#emptymodal').html(data);
					
                   }
            });
	
	
}
	
	
	  });	
	
	
	  
	  	
});

