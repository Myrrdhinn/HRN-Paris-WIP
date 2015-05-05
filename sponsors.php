<?php 
namespace HRNParis\sponsors;
include_once('controllers/sponsors_main.php');

$sponsors = new sponsors_main;
?>
<!doctype html>
<html lang="en">
<head>
<meta name="description" content="HR Tech World Congress">
<meta name="keywords" content="HR Conference, HR event, HR Tech, HRN Europe">
<meta name="author" content="HRN Europe - The Pan European HR Network">
<meta name="designer" content="Designed by: Judit Bernat - juditbernat.mail@gmail.com ">
<meta name="developer" content="Developed by: TesseracT - bottyan.tamas@web-developer.hu">
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>HR Tech World Congress</title>
<!--Include Raleway Google Font -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!-- Include Source Sans Prog Google Font -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!--Include Include Proxima Nova Font (Adobe Typekit) -->
<script src="//use.typekit.net/gku8ogo.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!--Include Font Awesome -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- Favicon setting -->
<link rel="shortcut icon" href="favicon.png">

<!-- Include General CSS Definitions -->
<link rel="stylesheet" href="css/general.css" />

<!-- Include the Navigation Menu`s CSS Definitions -->
<link rel="stylesheet" href="css/menu.css" />

<!-- Include Custom CSS Definitions -->
<link rel="stylesheet" href="css/sponsors.css" />

<!-- Include Footer CSS Definitions -->
<link rel="stylesheet" href="css/footer.css" />

<!-- Include jQuery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Scroll to top JS -->
<script src="js/gotopscroll.js"></script>


<!-- Mainpage JS -->
<script src="js/mainpage.js"></script>


<!-- Include Reveal Modal -->
<link rel="stylesheet" href="vendor/reveal/reveal.css">
<script src="vendor/reveal/jquery.min.js" type="text/javascript"></script>
<script src="vendor/reveal/jquery.reveal.js" type="text/javascript"></script>

<!-- Thank you modal -->
<script type="text/javascript">
$(document).ready(function() {
	if(window.location.href.indexOf('#ThankYouForApplyModal') != -1) {
   		jQuery("#ThankYouForApplyModal").reveal();
  	}
	if(window.location.href.indexOf('#ThankYouBrochureModal') != -1) {
   		jQuery("#ThankYouBrochureModal").reveal();
 	} 
});
</script>
<!-- END Thank you modal  -->

<!-- GOOGLE ANALYTICS TRACKING SCRIPT -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-55976467-1']);
  _gaq.push(['_trackPageview']);

  (function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>
<nav>
  <div id="MobileMenuContainer">
    <div id="MobileMenuLogo"></div>
    <div id="MobileMenuButton" onClick='ShowMobileMenu()'></div>

  <div id="MobileNav" class="sidebar">

     <div id="MobileMenuListContainer"> <img id="MobileMenuCloseButton" src="img/menu/mobile-close-button.png" alt="X" onClick='HideMobileMenu()'>
        <ul id="MobileUl">
            <li><a title="About" href="http://hrtechcongress.com#AboutSection" onClick="HideMobileMenu(); _gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'About']);">About</a></li>
            <li><a title="Speakers" href="http://hrtechcongress.com#SpeakersSection" onClick=" HideMobileMenu(); _gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Speakers']);">Speakers</a></li>
            <li><a title="Sponsors" href="http://hrtechcongress.com#SponsorsSection" onClick="HideMobileMenu(); _gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Sponsors']);">Sponsors</a></li>
            <li><a title="Highlights" href="http://hrtechcongress.com#HighlightsSection" onClick="HideMobileMenu(); _gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Highlights']);">Highlights</a></li>
            <li><a title="Venue" href="http://hrtechcongress.com#VenueSection" onClick="HideMobileMenu(); _gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Venue']);">Venue</a></li>
            <li><a title="Contacts" href="http://hrtechcongress.com#GetInTouchSection" onClick="HideMobileMenu(); _gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Contact']);">Get In Touch</a></li>
            <li><a title="Tickets" href="tickets" onClick="HideMobileMenu(); _gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Tickets']);"><i class="fa fa-ticket"></i> Get Tickets</a></li>
        </ul>

    <div class="nav-social" style="display:none">
        <a title="Facebook" onClick="_gaq.push(['_trackEvent', 'Navigation', 'ExternalForward', 'Facebook']);" class="ico-fb no-link" target="blank" href="https://www.facebook.com/hrtecheu"></a>
        <a title="Twitter" onClick="_gaq.push(['_trackEvent', 'Navigation', 'ExternalForward', 'Twitter']);" class="ico-tw no-link" target="blank" href="https://twitter.com/hrtechworld"></a>
        <a title="Linkedin" onClick="_gaq.push(['_trackEvent', 'Navigation', 'ExternalForward', 'Linkedin']);" class="ico-linkedin no-link" target="blank" href="http://www.linkedin.com/groups/HR-Technology-Europe-Human-Resources-3930182/about"></a>
        <a title="Flickr" onClick="_gaq.push(['_trackEvent', 'Navigation', 'ExternalForward', 'Flickr']);" class="ico-flickr no-link" target="blank" href="https://www.flickr.com/photos/hrtecheurope/sets/72157648919068765/"></a>
        <a title="Slideshare" onClick="_gaq.push(['_trackEvent', 'Navigation', 'ExternalForward', 'Slideshare']);" class="ico-slideshare no-link" target="blank" href="http://www.slideshare.net/hrtecheurope"></a>
        
    </div>
</div>
</div>
  </div>
  </nav>

  <!-- MAIN MENU 
This section is controlled by the menu.css 
-->
  
  <nav id="SecondStateMainMenuContainer" class="FixedTop">
    <div id="MenuContainer"><a href="http://hrtechcongress.com" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'LogoHome']);"><img src="img/menu/horizontallogo.png" alt="HR Tech Congress Logo"  id="HorizontalLogo"/></a><a class="MainMenuItem" href="http://hrtechcongress.com#AboutSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'About']);">ABOUT</a><a class="MainMenuItem"  href="http://hrtechcongress.com#SpeakersSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Speakers']);">SPEAKERS</a><a class="MainMenuItem"  href="http://hrtechcongress.com#SponsorsSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Sponsors']);">SPONSORS</a>
      <a class="MainMenuItem"  href="http://hrtechcongress.com#HighlightsSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Highlights']);">HIGHLIGHTS</a><a class="MainMenuItem"  href="http://hrtechcongress.com#VenueSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Venue']);">VENUE</a><a class="MainMenuItem"  href="http://hrtechcongress.com#GetInTouchSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Contact']);">GET IN TOUCH</a> <a class="MainMenuItem" href="tickets" id="GetTickets" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Tickets']);"><i class="fa fa-ticket"></i>GET TICKETS</a></div>
  </nav>
  
  <!-- END MAIN MENU -->
<!-- Header -->
<header>
  <h1>SPONSORS</h1>
  <p class="FontProximaNova">Our sponsors comprise a Who's Who of HR software leaders who will showcase the best solutions, services and products on the market.</p>
  <a href="#" data-reveal-id="DownloadSponsorBrochureModal" target="_blank" title="Download Sponsorship Guide" onClick="_gaq.push(['_trackEvent', 'SponsorsPage', 'InternalForward', 'DownloadSponsorshipGuide']);">Request Sponsorship Guide</a>
  <a href="#" data-reveal-id="BecomeASponsorModal" title="Become a Sponsor" onClick="_gaq.push(['_trackEvent', 'SponsorsPage', 'ModalOpen', 'BecomeASponsor']);"><button>Become a Sponsor</button></a>
</header>
<!-- END Header -->
<!-- Sponsors -->
<section id="Sponsors">
	<!-- Sponsors List -->
	<div id="SponsorsInnerContainer">
    	<div id="WhosWhoAndDiamondImageContainer">
            <img id="PoweredByWhosWhoLogo" src="img/sponsors/powered-by-whos-who.png" alt="Powered by Who's Who in HR">
        	<h2 class="SponsorHeadline FontRaleway"><span>Diamond</span></h2>
    	</div>
<!-- Diamond Sponsors -->

<?php 

  $content = $sponsors->sponsors(1); 
  echo $content;	

  
?>
       
 
<!-- END Diamond Sponsors -->

<!-- Emerald Sponsors -->
		<h2 class="SponsorHeadline FontRaleway"><span>Emerald</span></h2>  
        
<?php 

  $content = $sponsors->sponsors(2); 
  echo $content;	

  
?>      
              
     
<!-- END Emerald Sponsors -->  

<!-- Platinum Sponsors --> 
		<h2 class="SponsorHeadline FontRaleway"><span>Platinum</span></h2>
       <?php 

  $content = $sponsors->sponsors(3); 
  echo $content;	

  
?> 
<!-- END Platinum Sponsors -->  

<!-- Gold Sponsors --> 
		<h2 class="SponsorHeadline FontRaleway"><span>Gold</span></h2>  
<?php 

  $content = $sponsors->sponsors(4); 
  echo $content;	

  
?> 
        
<!-- END Gold Sponsors -->  

<!-- Silver Sponsors --> 
		<h2 class="SponsorHeadline FontRaleway"><span>Silver</span></h2>  
     <?php 

  $content = $sponsors->sponsors(5); 
  echo $content;	

  
?> 
        
               
<!-- END Silver Sponsors --> 

<!-- Exhibitors --> 
		<h2 class="SponsorHeadline FontRaleway"><span>Exhibitors</span></h2>
        <!-- Social Talent -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/socialtalent-logo.png" alt="Social Talent logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.socialtalent.co/" target="_blank" title="Social Talent" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'SocialTalent']);">Social Talent <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Social Talent are the world's leading Recruitment Sourcing Training company, certifying sourcing ninjas worldwide with the Black Belt in Internet Recruitment. Social Talent train recruitment agencies and in-house teams alike in the art of sourcing the best talent using social media from LinkedIn to Twitter and job boards to internal databases, through a personalised on-demand online learning platform.<br>
<br>
We train the global Recruitment teams of Oracle, Randstad, CERN, BSkyB, Twitter, Dropbox and thousands more - find out how your team can dramatically improve their sourcing capabilities and hiring skills by visiting www.socialtalent.co</p>
                <div class="SponsorSocialIcons">
                	<a href="http://www.facebook.com/socialtalent" target="_blank" title="Social Talent - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-SocialTalent']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/socialtalent" target="_blank" title="Social Talent - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-SocialTalent']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/social-talent?trk=fc_badge" target="_blank" title="Social Talent - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-SocialTalent']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Social Talent -->  
        <!-- HR Path -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/hrpath-logo.png" alt="HR Path logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.hr-path.com" target="_blank" title="HR Path" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'HRPath']);">HR Path <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">HR Path is a leading, global provider of Human Capital Management (HCM) services and solutions. Our experience is unparalleled in the SAP EcoSystem; from Project Design & Delivery, to High-velocity Knowledge Transfer, and Support after the engagement, we have the critical skills needed to make your project successful, on-time, and on-budget</p>
                <div class="SponsorSocialIcons">
                	<a href="#" target="_blank" title="HR Path - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-HRPath']);"><div class="SponsorSocialIcon SponsorFacebookIcon" style="display: none;"></div></a>
                    <a href="https://twitter.com/HR_Path" target="_blank" title="HR Path - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-HRPath']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="#" target="_blank" title="HR Path - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-HRPath']);"><div class="SponsorSocialIcon SponsorLinkedinIcon" style="display: none;"></div></a>
                </div>
            </div>
        </div>
        <!-- END HR Path -->       
               
<!-- END Exhibitors -->                                                   
    </div>         
    <!-- END Sponsors List -->

</section>
<!--END Sponsors --> 
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
          </a> <a href="https://www.facebook.com/hrtecheu" target="_blank" title="HR Tech Europe - Facebook" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'Facebook']);">
          <div id="FooterFacebook" class="FooterSocialIcon"></div>
          </a> <a href="http://www.linkedin.com/groups/HR-Technology-Europe-Human-Resources-3930182/about" target="_blank" title="HR Tech Europe - LinkedIn" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'LinkedIn']);">
          <div id="FooterLinkedIn" class="FooterSocialIcon"></div>
          </a> <a href="http://www.slideshare.net/hrtecheurope" target="_blank" title="HR Tech Europe - SlideShare" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'SlideShare']);">
          <div id="FooterSlideShare" class="FooterSocialIcon"></div>
          </a> <a href="https://www.flickr.com/photos/hrtecheurope/sets/72157648919068765/" target="_blank" title="HR Tech Europe - Flickr" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'Flickr']);">
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



<!-- Become a Sponsor Modal -->
<div id="BecomeASponsorModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Apply for Sponsorship</h2>
  <p>Gain direct access to more than 4,000 enterprise HR decision makers.</p>
  <!-- BEGINING of : BECOME A SPONSOR MODAL FORM -->
  <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
    <input type=hidden name="oid" value="00DD0000000nwgk">
    <input type=hidden name="retURL" value="http://hrneurope.com/sponsorship-thankyou.html">

      <input required placeholder="First Name *"  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
      <input required placeholder="Last Name *" id="last_name" maxlength="80" name="last_name" size="20" type="text" />

        <input required placeholder="Email Address *" id="email" maxlength="80" name="email" size="20" type="text" />
        <input required placeholder="Phone Number *" id="phone" maxlength="40" name="phone" size="20" type="text" />
        <input required placeholder="Company *" id="company" maxlength="40" name="company" size="20" type="text" />
        <input required placeholder="Job Title *" id="title" maxlength="40" name="title" size="20" type="text" />
        <select  style="display:none;"   id="lead_source" name="lead_source" placeholder="Lead Source">
          <option selected="selected" value="HRTechParis2015-BecomeASponsor">HRTechParis2015-BecomeASponsor</option>
        </select>
        <input onClick="_gaq.push(['_trackEvent', 'BecomeASponsorForm', 'FromSubmission', 'InquirySent']);" class="submitbutton" type="submit" name="submit" value="SEND">
  </form>
  <!-- END of : BECOME A SPONSOR MODAL FORM -->
</div>
<!-- END Become a Sponsor Modal -->

<!-- Thank You For Apply Modal -->
<div id="ThankYouForApplyModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Thank you.</h2>
  <p>Someone from HRN Europe will be in touch regarding your application.</p>
</div>
<!-- END Thank You For Apply Modal -->

<!-- Thank You Brochure Modal -->
<div id="ThankYouBrochureModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Thank you!</h2>
   <p>You shall receive an email shortly from one of our team.</p>
</div>
<!-- END Thank You Modal -->

<!-- Named anchor Hashtag script --> 
<script type="text/javascript">
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
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
