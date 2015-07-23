// JavaScript Document of the Travel page

/* Tab panel navigation */
$(document).ready(function() {
	

  

$(".TabPanelButton").click(function() {
	  var target = $(this).data('targetpanel');
	 
        $(this).collapse({
          accordion: true,
          persist: true,
          open: function() {
            this.addClass("open");
            this.css({ height: $('#'+target).outerHeight() });
          },
          close: function() {
            this.css({ height: "0px" });
            this.removeClass("open");
          }
        });
	

	});

      


 
});