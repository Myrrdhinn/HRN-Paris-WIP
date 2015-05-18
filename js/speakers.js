<!-- Stage filter selector list based on Screen width -->

$(document).ready(function() {
	if ( (screen.width <= 640)  ) { 
		/* When the magnifyier glass icon is pressed, slides the hidden mobile stage filter menu from the right. */
		$( "#FilterSpeakersButton" ).bind( "click", function() {
			$("#SelectedFiltersContainer").slideToggle("fast"); 
			$("#FiltersContainerMobile").css("right", "0vw");
		});
		/* When the APPLY mobile button is pressed, slides the mobile stage filter menu outside the right side of the page */
		$( "#ApplyFiltersButtonMobile" ).bind( "click", function() {
			$("#SelectedFiltersContainer").slideToggle("fast"); 
			$("#FiltersContainerMobile").css("right", "-100vw");
			$('html,body').scrollTop(0);
		});	
	} else {
		/* When the magnifyier glass icon is pressed, shows the stage selectors and hides the selected filters */
		$( "#FilterSpeakersButton" ).bind( "click", function() {
			$("#SelectedFiltersContainer").slideToggle("fast"); 
			$("#FiltersContainer").slideToggle("fast");
		});
		/* When the APPLY button is pressed, hides the stage selectors and shows the selected filters */
		$( "#ApplyFiltersButton" ).bind( "click", function() {
			$("#SelectedFiltersContainer").slideToggle("fast"); 
			$("#FiltersContainer").slideToggle("fast");
		});
	}
});


<!-- Selecting filters (Desktop and tablet) -->

$(document).ready(function(){
	$( ".Filter" ).bind( "click", function() {
		
		/* Gets the ID of the selected Stage */
		var filterName = $(this)[0].id;
		
		/* Removes the "Filter" string(6 chars) from the end of the ID, we get the name of the Stage */
		var labelName = filterName.substr(0, filterName.length-6) + "Label";
		
		/* If a Stage is selected on the Stage Grid, keep the hover effect color on the Stage as background */
		if(  $(this).children(".FilterColor").hasClass("FilterColorSelected") ) {
				$(this).children(".FilterColor").removeClass("FilterColorSelected");
				$(this).children(".FilterStageName").removeClass("FilterStageNameSelected");
				document.getElementById(labelName).style.display = "none";
		} else {
		/* If a Stage is de-selected on the Stage Grid, remove the coloured background */	
				$(this).children(".FilterColor").addClass("FilterColorSelected");
				$(this).children(".FilterStageName").addClass("FilterStageNameSelected");
				document.getElementById(labelName).style.display = "inline-block";
				document.getElementById("ClearFilters").style.display = "inline";
				document.getElementById("AllLabel").style.display = "none";
		}
	});
});


<!-- Selecting filters (Mobile) -- STILL IN DEVELOPMENT -->

$(document).ready(function(){
	$( ".FilterMobile" ).bind( "click", function() {
		
		/* Gets the ID of the selected Stage */
		var filterName = $(this)[0].id;
		
		/* Removes the "FilterMobile" string(12 chars) from the end of the ID, we get the name of the Stage */
		var labelName = filterName.substr(0, filterName.length-12) + "Label";
		
		/* If a Stage is selected on the full-screen mobile Stage list, mark it with blue color */
		if(  $(this).children(".FilterCircleMobile").children(".FilterCircleMobileFill").hasClass("FilterMobileSelected") ) {
				$(this).children(".FilterCircleMobile").children(".FilterCircleMobileFill").removeClass("FilterMobileSelected");
				document.getElementById(labelName).style.display = "none";
		} else {
		/* if a Stage is de-selected on the full-screen mobile Stage list, remove the blue coloured marker */
				$(this).children(".FilterCircleMobile").children(".FilterCircleMobileFill").addClass("FilterMobileSelected");
				document.getElementById(labelName).style.display = "inline-block";
				document.getElementById("ClearFilters").style.display = "block";
				document.getElementById("AllLabel").style.display = "none";
		}
	});
});


<!-- Clear Filters -->

$(document).ready(function() {
		$( "#ClearFilters" ).bind( "click", function() {
			/* Removes all filtering labels and the Clear Filters button. Shows the "All" label. */
			$( "#FutureOfWorkforceLearningLabel" ).fadeOut();
			$( "#HRTechnologyLabel" ).fadeOut();
			$( "#ProductDemoLabel" ).fadeOut();
			$( "#PayrollAndRewardsLabel" ).fadeOut();
			$( "#FutureOfWorkLabel" ).fadeOut();
			$( "#UserAdoptionLabel" ).fadeOut();
			$( "#HRAnalyticsAndReportingLabel" ).fadeOut();
			$( "#MainStageLabel" ).fadeOut();
			$( "#CloudTechnologyLabel" ).fadeOut();
			$( "#LabsAndExecutiveBriefingsLabel" ).fadeOut();
			$( "#RoundTableLabel" ).fadeOut();
			$( "#TalentAndRecruitmentTechnologyLabel" ).fadeOut();
			$( "#SocialCollaborationLabel" ).fadeOut();
			$( "#HRSharedServicesAndPayrollLabel" ).fadeOut();
			$( "#AllLabel" ).fadeIn();
			$( "#ClearFilters" ).fadeOut();
		
			/* Removes all visual selection marker from the grid of Stages on desktop/tablet */
			$( ".Filter" ).children(".FilterColor").removeClass("FilterColorSelected");
			$( ".Filter" ).children(".FilterStageName").removeClass("FilterStageNameSelected");
			
			/* Removes all visual selection marker from the full-screen Stage list on mobile */
			$( ".FilterMobile" ).children(".FilterCircleMobile").children(".FilterCircleMobileFill").removeClass("FilterMobileSelected");
		});
});

