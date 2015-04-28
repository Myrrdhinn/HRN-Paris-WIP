 $(document).ready(function(){
	 
	var dropzone =  new Dropzone("#DropDiv")({ 
    url: "controllers/ajax.php"
   }); 
	 
	 
	 var returnval = $('#ReturnValue').html();
	 
	 if (returnval == 'Success') {
		 
		 $("#ReturnValue").html('<i class="fa fa-check-circle"></i> The data have been saved!');
		 $("#ReturnValue").css("color","#0FB323");
		 $("#ReturnValue").fadeIn('slow');
		 
		 setTimeout(function () {
		$("#ReturnValue").fadeOut('slow');
       } , 3000); //set timeout function end
	 }
	 

	   
	       //if they are red (content is missing), but the content changes
	   $('.AdminInputField').bind('change', function () {
		   var content = $(this).val();
		   
		   if (content !== '' && typeof content != 'undefined') {
			   $(this).css("border","1px solid #cccccc");
		   }
	   
	   
	     }) 

	       	/*-----------------------
		 Change inside the element
	    ------------------------	*/
      $('#NewSponsorSave').bind('click', function (e) {
		    //if the save button pressed
			
			            //prevents the default form submit
		  			e.preventDefault();
		            e.stopPropagation(); 
		
		  //get the data
		  var SponsorName = $('#SponsorName').val();
		  var SponsorURL = $('#CompanyURL').val();
		  var SponsorBio = $('#SponsorBio').val();
		  var Facebook = $('#Facebook').val();
		  var Twitter = $('#Twitter').val();
		  var Linkedin = $('#Linkedin').val();
		  var Flickr = $('#Flickr').val();
		  var Google = $('#Google').val();
		  
		  
		  
		  
		  
		  	   //check if the fields are filled out or not
			if ((typeof SponsorName != "undefined") && SponsorName != '' && (typeof SponsorURL != "undefined") && SponsorURL != '' 
			&&  (typeof SponsorBio != "undefined") && SponsorBio != '') {
				
             return true;
				
			} else {
		
			    //if stuff is missing
				window.location.hash = '#ReturnValue';
				$("#ReturnValue").html('<i class="fa fa-exclamation-triangle"></i> Please, fill out the missing fields!');
				$("#ReturnValue").css("color","#9B1515");
				$("#ReturnValue").fadeIn('slow');

				
			    if (typeof SponsorName == "undefined" || SponsorName == '') {
					$('#SponsorName').css("border","1px solid #9B1515");
				} else {
					$('#SponsorName').css("border","1px solid #cccccc");
				}
	
	
				if (typeof SponsorURL == "undefined" || SponsorURL == '') {
					$('#CompanyURL').css("border","1px solid #9B1515");
				} else {
					$('#CompanyURL').css("border","1px solid #cccccc");
				}
	
	
			    if (typeof SponsorBio == "undefined" || SponsorBio == '') {
					$('#SponsorBio').css("border","1px solid #9B1515");
				} else {
					$('#SponsorBio').css("border","1px solid #cccccc");
				}
	
               return false;
			}
	   
	
  })  
	   
	   
      });


function save_check() {
		  
		  //get the data
		  var SponsorName = $('#SponsorName').val();
		  var SponsorURL = $('#CompanyURL').val();
		  var SponsorBio = $('#SponsorBio').val();
		  var Facebook = $('#Facebook').val();
		  var Twitter = $('#Twitter').val();
		  var Linkedin = $('#Linkedin').val();
		  var Flickr = $('#Flickr').val();
		  var Google = $('#Google').val();
		  
		  
		  
		  
		  
		  	   //check if the fields are filled out or not
			if ((typeof SponsorName != "undefined") && SponsorName != '' && (typeof SponsorURL != "undefined") && SponsorURL != '' 
			&&  (typeof SponsorBio != "undefined") && SponsorBio != '') {
				
            
				
			} else {
		
			    //if stuff is missing
				window.location.hash = '#ReturnValue';
				$("#ReturnValue").html('<i class="fa fa-exclamation-triangle"></i> Please, fill out the missing fields!');
				$("#ReturnValue").css("color","#9B1515");
				$("#ReturnValue").fadeIn('slow');

				
			    if (typeof SponsorName == "undefined" || SponsorName == '') {
					$('#SponsorName').css("border","1px solid #9B1515");
				} else {
					$('#SponsorName').css("border","1px solid #cccccc");
				}
	
	
				if (typeof SponsorURL == "undefined" || SponsorURL == '') {
					$('#CompanyURL').css("border","1px solid #9B1515");
				} else {
					$('#CompanyURL').css("border","1px solid #cccccc");
				}
	
	
			    if (typeof SponsorBio == "undefined" || SponsorBio == '') {
					$('#SponsorBio').css("border","1px solid #9B1515");
				} else {
					$('#SponsorBio').css("border","1px solid #cccccc");
				}
	
               return false;
			}
	
}


 // myDropzone is the configuration for the element that has an id attribute
  // with the value my-dropzone (or myDropzone)
  Dropzone.options.DropDiv = {
	   sending: function(file, xhr, formData) {    
        formData.append("SponsorName", $("#SponsorName").val());
		formData.append("SponsorURL", $("#SponsorURL").val());
		formData.append("SponsorBio", $("#SponsorBio").val());
		formData.append("Twitter", $("#Twitter").val());
		formData.append("Facebook", $("#Facebook").val());
		formData.append("Linkedin", $("#Linkedin").val());
		formData.append("Flickr", $("#Flickr").val());
		formData.append("Google", $("#Google").val());
    },
    init: function() {
      this.on("addedfile", function(file) {

        // Capture the Dropzone instance as closure.
        var dz = this;

        // Listen to the click event
        $('#sponsors').on("submit", function(e) {
          // Make sure the button click doesn't submit the form:
          // Remove the file preview.
		    e.preventDefault();
            e.stopPropagation();
			
			var Check = save_check();
			
			if (Check == true) {
				   dz.processQueue();
			       generate_response(0, 0);
			
          
			
		  //maybe we send aaaaaaaall the data with ajax instead of post
          // If you want to the delete the file on the server as well,
          // you can do the AJAX request here.
	  
		  setTimeout(function () {
        document.location.href="sponsors"; //will redirect to speakers
            }, 1000); //will call the function after 2 secs.
			
		 }
		 
		 
        });


      });
    }
  };
  