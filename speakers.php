<?php 
namespace HRNParis\speakers;
include_once('controllers/speakers_main.php');

$speakers = new speakers_main;
?>

<!doctype html>
<html lang="en">
<head>
<meta name="description" content="The fastest growing HR event in the world. Paris October 24 - 25">
<meta name="keywords" content="HR Conference, HR Tech Europe, HR Tech Conference, HR Congress, HR Tech Congress, iRecruit, disruptHR ">
<meta name="author" content="HRN Europe - The Pan European HR Network">
<meta name="designer" content="Designed by: Judit Bernat - juditbernat.mail@gmail.com ">
<meta name="developer" content="Developed by: TesseracT - bottyan.tamas@web-developer.hu, Benedek Nagy - trialshock@gmail.com, Myrrdhinn - balazs.pentek@web-developer.hu">
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>HR Tech World Congress | Speakers</title>

<!-- Open Graph data -->
<meta property="og:site_name" content="HR Tech World Congress"/>
<meta property="og:title" content="HR Tech World Congress | Speakers"/>
<meta property="og:description" content="The fastest growing HR event in the world! Paris October 24 - 25"/>
<meta property="og:url" content="http://hrtechcongress.com/speakers">
<meta property="og:type" content="article"/>
<meta property="og:image" content="http://hrtechcongress.com/img/preview-images/preview-image-1.jpg" />
<meta property="og:image" content="http://hrtechcongress.com/img/preview-images/preview-image-2.jpg" />
<meta property="og:image" content="http://hrtechcongress.com/img/preview-images/preview-image-3.jpg" />

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="shortcut icon" href="favicon.ico">


<!--Include Raleway Google Font -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!-- Include Source Sans Prog Google Font -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!--Include Proxima Nova Font (Adobe Typekit) -->
<script src="//use.typekit.net/gku8ogo.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!-- Include Lato Google Font -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

<!--Include Font Awesome -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- Favicon setting -->
<link rel="shortcut icon" href="favicon.png">

<!-- Include General CSS Definitions -->
<link rel="stylesheet" href="css/general.css" />

<!-- Include the Navigation Menu`s CSS Definitions -->
<link rel="stylesheet" href="css/menu.css" />

<!-- Include Footer CSS Definitions -->
<link rel="stylesheet" href="css/footer.css" />

<!-- Include jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Scroll to top JS -->
<script src="js/gotopscroll.js"></script>

<!-- Mobile Menu JS -->
<script src="js/menu.js"></script>

<!-- Scroll to top JS -->
<script src="js/speakers.js"></script>

<!-- Include Reveal Modal -->
<link rel="stylesheet" href="vendor/reveal/reveal.css">
<script src="vendor/reveal/jquery.min.js" type="text/javascript"></script>
<script src="vendor/reveal/jquery.reveal.js" type="text/javascript"></script>

<!-- Include Custom CSS Definitions -->
<link rel="stylesheet" href="css/speaker-profile.css" />

<!-- Include Custom CSS Definitions -->
<link rel="stylesheet" href="css/speakers.css" />

<!-- Thank you modal -->
<script type="text/javascript">
$(document).ready(function() {
	if(window.location.href.indexOf('#ThankYouBrochureModal') != -1) {
   		jQuery("#ThankYouBrochureModal").reveal();
 	} 
});
</script>
<!-- END Thank you modal  -->

<!-- GOOGLE ANALYTICS TRACKING SCRIPT 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-55976467-1']);
  _gaq.push(['_trackPageview']);

  (function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->

</head>
<body>
<nav>
  <div id="MobileMenuContainer"> <a href="http://hrtechcongress.com" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'LogoHome']);">
    <div id="MobileMenuLogo"></div>
    </a>
    <div id="MobileMenuButton" onClick='ShowMobileMenu()'></div>
    <div id="MobileNav" class="sidebar">
      <div id="MobileMenuListContainer"> <img id="MobileMenuCloseButton" src="img/menu/mobile-close-button.png" alt="X" onClick='HideMobileMenu()'>
        <ul id="MobileUl">
          <li><a href="http://hrtechcongress.com#AboutSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'About']);" title="About">About</a></li>
          <li><a href="speakers" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Speakers']);" title="Speakers">Speakers</a></li>
          <li><a href="sponsors" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Sponsors']);" title="Sponsors">Sponsors</a></li>
          <li><a href="hotels" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Hotels']);" title="Hotels">Hotels</a></li>
          <li><a href="http://blog.hrtecheurope.com/" onClick="_gaq.push(['_trackEvent', 'Navigation', 'ExternalForward', 'Blog']);" title="Blog">Blog</a></li>
          <li><a href="contact" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Contact']);" title="Get In Touch">Get In Touch</a></li>
          <li><a href="tickets" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Tickets']);" title="Get Tickets"><i class="fa fa-ticket"></i> Get Tickets</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- MAIN MENU -->
<nav id="DesktopMenu">
	<a href="http://hrtechcongress.com" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'LogoHome']);"><div id="HRTechDesktopLogo">   </div></a>
	<ul id="DesktopMenuList">
    	<a href="http://hrtechcongress.com#AboutSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'About']);" title="About"><li class="DesktopMenuItem" id="MenuItemAbout">ABOUT</li></a>
        <a href="speakers" title="Speakers" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Speakers']);"><li class="DesktopMenuItem" id="MenuItemSpeakers">SPEAKERS</li></a>
        <a href="sponsors" title="Sponsors" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Sponsors']);"><li class="DesktopMenuItem" id="MenuItemSponsors">SPONSORS</li></a>
        <a href="hotels" title="Hotels" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Hotels']);"><li class="DesktopMenuItem" id="MenuItemHighlights">HOTELS</li></a>
        <a target="_blank"  href="http://blog.hrtecheurope.com/" title="Blog" onClick="_gaq.push(['_trackEvent', 'Navigation', ExternalForward', 'Blog']);"><li class="DesktopMenuItem" id="MenuItemVenue">BLOG</li></a>
        <a href="contact" title="Get in Touch" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Contact']);"><li class="DesktopMenuItem" id="MenuItemGetInTouch">GET IN TOUCH</li></a>
        <a href="tickets" title="Get Tickets" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Tickets']);"><li class="DesktopMenuItem" id="DesktopGetTickets"><i class="fa fa-ticket"></i> GET TICKETS</li></a>
    </ul>
    <div id="DesktopMenuSocialIcons">
    	<a href="https://twitter.com/hrtechworld" target="_blank" title="Twitter" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Twitter']);"><div id="DesktopMenuTwitterIcon" class="DesktopMenuSocialIcon"></div></a>
        <a href="https://www.linkedin.com/grp/home?gid=1909337" target="_blank" title="LinkedIn" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'LinkedIn']);"><div id="DesktopMenuLinkedInIcon" class="DesktopMenuSocialIcon"></div></a>
        <a href="https://www.facebook.com/worldhrtech?ref=hl" target="_blank" title="Facebook" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Facebook']);"><div id="DesktopMenuFacebookIcon" class="DesktopMenuSocialIcon"></div></a>
        <a href="http://www.slideshare.net/hrtecheurope/presentations" target="_blank" title="Slideshare" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Slideshare']);"><div id="DesktopMenuSlideShareIcon" class="DesktopMenuSocialIcon"></div></a>
        <a href="https://www.flickr.com/photos/hrtecheurope/sets/with/72157651210562997" target="_blank" title="Flickr" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Flickr']);"><div id="DesktopMenuFlickrIcon" class="DesktopMenuSocialIcon"></div></a>
    </div>
</nav>
<!-- END MAIN MENU -->

<!-- Header -->
<header>
  <!-- Place the header here -->
</header>
<!-- END Header -->


<!-- Main Content -->
<div id="MainContent">
<!-- Search bar -->
<div id="SearchBarContainer">
	<div id="SearchBarInnerContainer">
    	<h2 class="FontLato" id="SpeakersMobileHeadlineText">SPEAKERS</h2>
        <div id="FilterSpeakersButton" class="FontLato">
               <img src="img/speakers/search-icon.png" alt="Search">
               <span>FILTER SPEAKERS</span>
        </div>
    </div>
</div>
<!-- END Search bar -->
<!-- Filters -->
        <div id="FiltersContainer">
        	<!-- Filter Headline -->
        	<div id="FilterHeadline" class="FontLato">
            	<div id="FilteringSpeakers">Filtering Speakers</div>
                <div id="FiltersCloseButton" onClick='$("#FiltersContainer").slideUp("fast");$("#SelectedFiltersContainer").slideDown("fast");'>CLOSE <img src="img/speakers/close-icon.png" alt="X"></div>
            </div>
            <!-- END Filter Headline -->
            <!-- Filter Icons -->
            <div id="Filters">
            	<div class="Filter" id="FutureOfWorkforceLearningFilter">
                	<div class="FilterColor FutureOfWorkforceLearningColor"></div> <!-- Use the .FilterColorSelected class if a filter is selected.. -->
                    <img src="img/speakers/StageIcons/future-of-workforce-learning-icon.png" alt="Future of Workforce Learning icon">
                    <h6 class="FilterStageName FontLato">Future of Workforce Learning</h6> <!-- ...and use the .FilterStageNameSelected class as well to change the text color to #fff -->
                </div>
            	<div class="Filter" id="HRTechnologyFilter">
                	<div class="FilterColor HRTechnologyColor"></div>
                    <img src="img/speakers/StageIcons/hr-technology-icon.png" alt="HR Technology icon">
                    <h6 class="FilterStageName FontLato">HR Technology</h6>
                </div>
            	<div class="Filter" id="ProductDemoFilter">
                	<div class="FilterColor ProductDemoColor"></div>
                    <img src="img/speakers/StageIcons/product-demo-icon.png" alt="Product Demo icon">
                    <h6 class="FilterStageName FontLato">Product Demo</h6>
                </div>
            	<div class="Filter" id="PayrollAndRewardsFilter">
                	<div class="FilterColor PayrollAndRewardsColor"></div>
                    <img src="img/speakers/StageIcons/payroll-and-rewards-icon.png" alt="Payroll and Rewards icon">
                    <h6 class="FilterStageName FontLato">Payroll &amp; Rewards</h6>
                </div>
            	<div class="Filter" id="FutureOfWorkFilter">
                	<div class="FilterColor FutureOfWorkColor"></div>
                    <img src="img/speakers/StageIcons/future-of-work-icon.png" alt="Future of Work icon">
                    <h6 class="FilterStageName FontLato">Future of Work</h6>
                </div>
            	<div class="Filter" id="UserAdoptionFilter">
                	<div class="FilterColor UserAdoptionColor"></div>
                    <img src="img/speakers/StageIcons/user-adoption-icon.png" alt="User Adoption icon">
                    <h6 class="FilterStageName FontLato">User Adoption</h6>
                </div>
            	<div class="Filter" id="HRAnalyticsAndReportingFilter">
                	<div class="FilterColor HRAnalyticsAndReportingColor"></div>
                    <img src="img/speakers/StageIcons/hr-analytics-and-reporting-icon.png" alt="HR Analytics &amp; Reporting icon">
                    <h6 class="FilterStageName FontLato">HR Analytics<br>&amp; Reporting</h6>
                </div>
            	<div class="Filter" id="MainStageFilter">
                	<div class="FilterColor MainStageColor"></div>
                    <img src="img/speakers/StageIcons/main-stage-icon.png" alt="Main Stage icon">
                    <h6 class="FilterStageName FontLato">Main Stage</h6>
                </div>
            	<div class="Filter" id="CloudTechnologyFilter">
                	<div class="FilterColor CloudTechnologyColor"></div>
                    <img src="img/speakers/StageIcons/cloud-technology-icon.png" alt="Cloud Technology icon">
                    <h6 class="FilterStageName FontLato">Cloud Technology</h6>
                </div>
            	<div class="Filter" id="LabsAndExecutiveBriefingsFilter">
                	<div class="FilterColor LabsAndExecutiveBriefingsColor"></div>
                    <img src="img/speakers/StageIcons/labs-and-executive-briefings-icon.png" alt="Labs &amp; Executive Briefings icon">
                    <h6 class="FilterStageName FontLato">Labs &amp;<br> Executive Briefings</h6>
                </div>
            	<div class="Filter" id="RoundTableFilter">
                	<div class="FilterColor RoundTableColor"></div>
                    <img src="img/speakers/StageIcons/round-table-icon.png" alt="Round Table icon">
                    <h6 class="FilterStageName FontLato">Round Table</h6>
                </div>
            	<div class="Filter" id="TalentAndRecruitmentTechnologyFilter">
                	<div class="FilterColor TalentAndRecruitmentTechnologyColor"></div>
                    <img src="img/speakers/StageIcons/talent-and-recruitment-technology-icon.png" alt="Talent &amp; Recruitment Technology icon">
                    <h6 class="FilterStageName FontLato">Talent &amp; Recruitment Technology</h6>
                </div>
            	<div class="Filter" id="SocialCollaborationFilter">
                	<div class="FilterColor SocialCollaborationColor"></div>
                    <img src="img/speakers/StageIcons/social-collaboration-icon.png" alt="Social Collaboration icon">
                    <h6 class="FilterStageName FontLato">Social Collaboration</h6>
                </div>
            	<div class="Filter" id="HRSharedServicesAndPayrollFilter">
                	<div class="FilterColor HRSharedServicesAndPayrollColor"></div>
                    <img src="img/speakers/StageIcons/hr-shared-services-and-payroll-icon.png" alt="HR Shared Services &amp; Payroll icon">
                    <h6 class="FilterStageName FontLato">HR Shared Services <br>&amp; Payroll</h6>
                </div>
            </div>
            <!-- END Filter Icons -->
            <!-- Apply Button -->
            <div id="ApplyButtonContainer">
                <button title="Apply" class="BlueButton FontLato" id="ApplyFiltersButton">APPLY</button>
            </div>
            <!-- END Apply Button -->
        </div>        
<!-- END Filters --> 
<!-- Filters Mobile -->
        <div id="FiltersContainerMobile">
        	<div id="FilterHeadlineMobile" class="FontLato">
            	<div id="FilteringSpeakersMobile">Filtering Speakers</div>
                <div id="FiltersCloseButtonMobile" onClick='$("#SelectedFiltersContainer").slideToggle("fast"); $("#FiltersContainerMobile").css("right", "-100vw");'><img src="img/speakers/close-icon.png" alt="X"></div>
            </div>
            <ul>
                <li class="FilterMobile" id="FutureOfWorkforceLearningFilterMobile">
                    <div class="FilterColorMobile FutureOfWorkforceLearningColor"></div>
                    <img src="img/speakers/StageIcons/future-of-workforce-learning-icon.png" alt="icon">
                    <p class="FilterStageNameMobile">Future of Workforce Learning</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>
                <li class="FilterMobile" id="HRTechnologyFilterMobile">
                    <div class="FilterColorMobile HRTechnologyColor"></div>
                    <img src="img/speakers/StageIcons/hr-technology-icon.png" alt="icon">
                    <p class="FilterStageNameMobile ShortStageNameMobile">HR Technology</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>    
                <li class="FilterMobile" id="ProductDemoFilterMobile">
                    <div class="FilterColorMobile ProductDemoColor"></div>
                    <img src="img/speakers/StageIcons/product-demo-icon.png" alt="icon">
                    <p class="FilterStageNameMobile ShortStageNameMobile">Product Demo</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>                
                <li class="FilterMobile" id="PayrollAndRewardsFilterMobile">
                    <div class="FilterColorMobile PayrollAndRewardsColor"></div>
                    <img src="img/speakers/StageIcons/payroll-and-rewards-icon.png" alt="icon">
                    <p class="FilterStageNameMobile ShortStageNameMobile">Payroll & Rewards</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>                
                <li class="FilterMobile" id="FutureOfWorkFilterMobile">
                    <div class="FilterColorMobile FutureOfWorkColor"></div>
                    <img src="img/speakers/StageIcons/future-of-work-icon.png" alt="icon">
                    <p class="FilterStageNameMobile ShortStageNameMobile">Future of Work</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>                
                <li class="FilterMobile" id="UserAdoptionFilterMobile">
                    <div class="FilterColorMobile UserAdoptionColor"></div>
                    <img src="img/speakers/StageIcons/user-adoption-icon.png" alt="icon">
                    <p class="FilterStageNameMobile ShortStageNameMobile">User Adoption</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>                
                <li class="FilterMobile" id="HRAnalyticsAndReportingFilterMobile">
                    <div class="FilterColorMobile HRAnalyticsAndReportingColor"></div>
                    <img src="img/speakers/StageIcons/hr-analytics-and-reporting-icon.png" alt="icon">
                    <p class="FilterStageNameMobile">HR Analytics & Reporting</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>                
                <li class="FilterMobile" id="MainStageFilterMobile">
                    <div class="FilterColorMobile MainStageColor"></div>
                    <img src="img/speakers/StageIcons/main-stage-icon.png" alt="icon">
                    <p class="FilterStageNameMobile ShortStageNameMobile">Main Stage</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>                
                <li class="FilterMobile" id="CloudTechnologyFilterMobile">
                    <div class="FilterColorMobile CloudTechnologyColor"></div>
                    <img src="img/speakers/StageIcons/cloud-technology-icon.png" alt="icon">
                    <p class="FilterStageNameMobile ShortStageNameMobile">Cloud Technology</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>                
                <li class="FilterMobile" id="LabsAndExecutiveBriefingsFilterMobile">
                    <div class="FilterColorMobile LabsAndExecutiveBriefingsColor"></div>
                    <img src="img/speakers/StageIcons/labs-and-executive-briefings-icon.png" alt="icon">
                    <p class="FilterStageNameMobile">Labs & Executive Briefings</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>                
                <li class="FilterMobile" id="RoundTableFilterMobile">
                    <div class="FilterColorMobile RoundTableColor"></div>
                    <img src="img/speakers/StageIcons/round-table-icon.png" alt="icon">
                    <p class="FilterStageNameMobile ShortStageNameMobile">Round Table</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>                
                <li class="FilterMobile" id="TalentAndRecruitmentTechnologyFilterMobile">
                    <div class="FilterColorMobile TalentAndRecruitmentTechnologyColor"></div>
                    <img src="img/speakers/StageIcons/talent-and-recruitment-technology-icon.png" alt="icon">
                    <p class="FilterStageNameMobile">Talent & Recruitment Technology</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>                
                <li class="FilterMobile" id="SocialCollaborationFilterMobile">
                    <div class="FilterColorMobile SocialCollaborationColor"></div>
                    <img src="img/speakers/StageIcons/social-collaboration-icon.png" alt="icon">
                    <p class="FilterStageNameMobile ShortStageNameMobile">Social Collaboration</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li>                
                <li class="FilterMobile" id="HRSharedServicesAndPayrollFilterMobile">
                    <div class="FilterColorMobile HRSharedServicesAndPayrollColor"></div>
                    <img src="img/speakers/StageIcons/hr-shared-services-and-payroll-icon.png" alt="icon">
                    <p class="FilterStageNameMobile">HR Shared Services & Payroll</p>
                    <div class="FilterCircleMobile"><div class="FilterCircleMobileFill"></div></div>
                </li> 
            </ul>
           	<div id="MobileApplyButtonContainer">
	            <button title="Apply" class="BlueButton FontLato" id="ApplyFiltersButtonMobile">APPLY</button>
            </div>
        </div>
<!-- END Filters Mobile -->
<!-- Selected Filters -->
<div id="SelectedFiltersContainer" class="FontLato" style="display:none">
	<span id="Filter">filter: </span>
    <ul>
    	<li id="FutureOfWorkforceLearningLabel" class="FutureOfWorkforceLearningColor">Future of Workforce Learning</li>
        <li id="HRTechnologyLabel" class="HRTechnologyColor">HR Technology</li>
        <li id="ProductDemoLabel" class="ProductDemoColor">Product Demo</li>
        <li id="PayrollAndRewardsLabel" class="PayrollAndRewardsColor">Payroll & Rewards</li>
        <li id="FutureOfWorkLabel" class="FutureOfWorkColor">Future of Work</li>
        <li id="UserAdoptionLabel" class="UserAdoptionColor">User Adoption</li>
        <li id="HRAnalyticsAndReportingLabel" class="HRAnalyticsAndReportingColor">HR Analytics & Reporting</li>
        <li id="MainStageLabel" class="MainStageColor">Main Stage</li>
        <li id="CloudTechnologyLabel" class="CloudTechnologyColor">Cloud Technology</li>
        <li id="LabsAndExecutiveBriefingsLabel" class="LabsAndExecutiveBriefingsColor">Labs & Executive Briefings</li>
        <li id="RoundTableLabel" class="RoundTableColor">Round Table</li>
        <li id="TalentAndRecruitmentTechnologyLabel" class="TalentAndRecruitmentTechnologyColor">Talent & Recruitment Technology</li>  
        <li id="SocialCollaborationLabel" class="SocialCollaborationColor">Social Collaboration</li> 
        <li id="HRSharedServicesAndPayrollLabel" class="HRSharedServicesAndPayrollColor">HR Shared Services & Payroll</li>
        <li id="AllLabel" class="AllColor">All</li>
    </ul>
    <span id="ClearFilters">Clear filters</span>
</div>
<!-- END Selected Filters -->
<!-- Speakers -->
<section id="Speakers">
	<h2 class="InvisibleHeadline">Speakers</h2>               
        <!-- Speakers Grid -->
        <div id="SpeakersGrid">
        
<?php 



  $content = $speakers->speakers(); 
    if(isset($content)) {
		  echo $content;	
	}
   


?>
        
        </div>
    	<!-- END Speakers Grid -->
</section>
<!--END Speakers --> 


<!--Speaker List Section --> 
<div id="SpeakerListSection">
<?php

        


 $content = $speakers->speaker();  


echo $content;
?>
</div>
<!-- END Speaker List Section --> 


</div>
<!-- END Main Content -->
<!-- FOOTER -->
<footer>
 <div id="FooterWrapper">
   <div id="FooterLeftWrapper">
        <h1 class="Contact FontRaleway">CONTACT</h1>
        <h2 class="Contact FontProximaNova"><i class="fa fa-phone"></i>+36 1 201 1469</h2>
        <h2 class="Contact FontProximaNova"><i class="fa fa-phone"></i>UK/IE +44 20 34 689 689</h2>
        <h2 class="Contact FontProximaNova"><i class="fa fa-envelope"></i>hrn@hrneurope.com</h2>
        <div id="GetInTouchButtonContainer">
          <a href="#" data-reveal-id="DownloadBrochureModal" title="Download Brochure" onClick="_gaq.push(['_trackEvent', 'Footer', 'ModalOpen', 'DownloadBrochure']);"><button class="BlueButton FontRaleway" id="DownloadBrochureButton" >Request Brochure</button></a>
        </div>
   </div>
   <div id="FooterRightWrapper">
        <form>
        	<h1>SIGN UP FOR NEWSLETTER</h1>
        	<input type="text"><input type="submit" value="SEND" onClick="_gaq.push(['_trackEvent', 'Footer', 'FormSubmission', 'SignUpForNewsletter']);">
        </form>
        <div id="FooterSocialIconsContainer"> <a href="https://twitter.com/hrtechworld" target="_blank" title="HR Tech World - Twitter" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'Twitter']);">
          <div id="FooterTwitter" class="FooterSocialIcon"></div>
          </a> <a href="https://www.facebook.com/worldhrtech?ref=hl" target="_blank" title="HR Tech Europe - Facebook" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'Facebook']);">
          <div id="FooterFacebook" class="FooterSocialIcon"></div>
          </a> <a href="https://www.linkedin.com/grp/home?gid=1909337" target="_blank" title="HR Tech Europe - LinkedIn" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'LinkedIn']);">
          <div id="FooterLinkedIn" class="FooterSocialIcon"></div>
          </a> <a href="http://www.slideshare.net/hrtecheurope/presentations" target="_blank" title="HR Tech Europe - SlideShare" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'SlideShare']);">
          <div id="FooterSlideShare" class="FooterSocialIcon"></div>
          </a> <a href="https://www.flickr.com/photos/hrtecheurope/sets/with/72157651210562997" target="_blank" title="HR Tech Europe - Flickr" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'Flickr']);">
          <div id="FooterFlickr" class="FooterSocialIcon"></div>
          </a> 
       </div>
    </div>
 </div>
 <div id="TransparentFooter">
 	<div id="TransparentFooterInnerContainer">
        <div id="TransparentFooterImage"><img src="img/footer/footer-hrtech-logo.png" alt="HR Tech World Congress logo"></div>
        <div id="TransparentFooterTextContainer">
                <h6 class="TransparentFooterText FontRaleway" id="CopyrightText">Copyright &copy; 2015 HRN Europe. All Rights Reserved.</h6>
                <h6 class="TransparentFooterText FontRaleway" id="PrivacyText">Privacy Policy | Terms and Conditions</h6>
        </div>
        <div style="clear: both;"></div>   
    </div> 
 </div>
  
</footer>
<!-- END FOOTER --> 
<!-- Go to Top Button --> 
<a href="#" class="GoTopButton">
<div id="GoTopImg"><i class="fa fa-caret-up"></i></div>
</a> 
<!-- END Go to Top Button --> 

<!-- Speakers Modal -->
<div id="SpeakersModalContainer">
<?php 



  $content = $speakers->speaker_modals();
    if(isset($content)) {
		  echo $content;	
	}
   


?>
</div>

<!-- END Speakers Modal -->



<!-- Download Brochure Modal -->
<div id="DownloadBrochureModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Download Brochure</h2>
  <p>Thank you for downloading our brochure! Please fill in all the fields below.</p>
  <!-- BEGINING of : DOWNLOAD BROCHURE MODAL FORM -->
  <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
    <input type=hidden name="oid" value="00DD0000000nwgk">
    <input type=hidden name="retURL" value="http://hrtechcongress.com/sponsors.html#ThankYouBrochureModal">

      <input required placeholder="First Name *"  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
      <input required placeholder="Last Name *" id="last_name" maxlength="80" name="last_name" size="20" type="text" />

        <input required placeholder="Email Address *" id="email" maxlength="80" name="email" size="20" type="text" />
        <input required placeholder="Phone Number *" id="phone" maxlength="40" name="phone" size="20" type="text" />
        <input required placeholder="Company *" id="company" maxlength="40" name="company" size="20" type="text" />
        <input required placeholder="Job Title *" id="title" maxlength="40" name="title" size="20" type="text" />
        <select  style="display:none;"   id="lead_source" name="lead_source" placeholder="Lead Source">
          <option selected="selected" value="HRTechParis2015-DownloadPDF">HRTechParis2015-DownloadPDF</option>
        </select>
        <input onClick="_gaq.push(['_trackEvent', 'DownloadPDFForm', 'FromSubmission', 'InquirySent']);" class="submitbutton" type="submit" name="submit" value="SEND">
  </form>
  <!-- END of : DOWNLOAD BROCHURE MODAL FORM -->
</div>
<!-- END Download Brochure Modal -->

<!-- Thank You Brochure Modal -->
<div id="ThankYouBrochureModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Thank you!</h2>
   <p>You shall receive an email shortly from one of our team.</p>
</div>
<!-- END Thank You Modal -->

<!-- Start of Async HubSpot Analytics Code -->
  <script type="text/javascript">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/412210.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
  </script>
<!-- End of Async HubSpot Analytics Code -->

</body>
</html>
