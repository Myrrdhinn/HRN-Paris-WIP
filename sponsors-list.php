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
            <li><a title="Speakers" href="speakers" onClick=" HideMobileMenu(); _gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Speakers']);">Speakers</a></li>
            <li><a title="SponsorLists" href="sponsors" onClick="HideMobileMenu(); _gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'SponsorLists']);">SponsorLists</a></li>
            <li><a title="Highlights" href="http://hrtechcongress.com#HighlightsSection" onClick="HideMobileMenu(); _gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Highlights']);">Highlights</a></li>
            <li><a title="Venue" href="http://hrtechcongress.com#VenueSection" onClick="HideMobileMenu(); _gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Venue']);">Venue</a></li>
            <li><a title="Contacts" href="contact" onClick="HideMobileMenu(); _gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Contact']);">Get In Touch</a></li>
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
    <div id="MenuContainer"><a href="http://hrtechcongress.com" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'LogoHome']);"><img src="img/menu/horizontallogo.png" alt="HR Tech Congress Logo"  id="HorizontalLogo"/></a><a class="MainMenuItem" href="http://hrtechcongress.com#AboutSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'About']);">ABOUT</a><a class="MainMenuItem"  href="speakers" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Speakers']);">SPEAKERS</a><a class="MainMenuItem"  href="sponsors" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'SponsorLists']);">SPONSORS</a>
      <a class="MainMenuItem"  href="http://hrtechcongress.com#HighlightsSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Highlights']);">HIGHLIGHTS</a><a class="MainMenuItem"  href="http://hrtechcongress.com#VenueSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Venue']);">VENUE</a><a class="MainMenuItem"  href="contact" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Contact']);">GET IN TOUCH</a> <a class="MainMenuItem" href="tickets" id="GetTickets" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Tickets']);"><i class="fa fa-ticket"></i>GET TICKETS</a></div>
  </nav>
  
  <!-- END MAIN MENU -->
<!-- Header -->
<header>
  <h1>SPONSORS</h1>
  <p class="FontProximaNova">A Who's Who of HR Software, Service and Solution leaders offer the best solutions, services and products in the World for you to Optimise, Enable & Unleash Your People!</p>
  
  <span data-reveal-id="BecomeASponsorListModal" onClick="_gaq.push(['_trackEvent', 'SponsorListsPage', 'ModalOpen', 'BecomeASponsorList']);"><button class="FontRaleway">Become a SponsorList</button></span>
  <img id="HeaderWhosWhoLogo" src="img/sponsors/whos-who-logo-white.png" alt="Who's Who in HR">
</header>
<!-- END Header -->

<!-- SponsorLists -->
<section id="SponsorLists">
	<!-- SponsorLists List -->
	<div id="SponsorListsInnerContainer">
    	<div id="WhosWhoAndDiamondImageContainer">
            <img id="PoweredByWhosWhoLogo" src="img/sponsors/powered-by-whos-who.png" alt="Powered by Who's Who in HR">
        	<h2 class="SponsorListHeadline FontRaleway"><span>Diamond SponsorLists</span></h2>
    	</div>
<!-- Diamond SponsorLists -->

<?php 

  $content = $sponsors->sponsors(1); 
  echo $content;	

  
?>
       
 
<!-- END Diamond SponsorLists -->

<!-- Emerald SponsorLists -->
		<h2 class="SponsorListHeadline FontRaleway"><span>Emerald SponsorLists</span></h2>  
        
<?php 

  $content = $sponsors->sponsors(2); 
  echo $content;	

  
?>      
              
     
<!-- END Emerald SponsorLists -->  

<!-- Platinum SponsorLists --> 
		<h2 class="SponsorListHeadline FontRaleway"><span>Platinum SponsorLists</span></h2>
       <?php 

  $content = $sponsors->sponsors(3); 
  echo $content;	

  
?> 
<!-- END Platinum SponsorLists -->  

<!-- Gold SponsorLists --> 
		<h2 class="SponsorListHeadline FontRaleway"><span>Gold SponsorLists</span></h2>  
<?php 

  $content = $sponsors->sponsors(4); 
  echo $content;	

  
?> 
        
<!-- END Gold SponsorLists -->  

<!-- Silver SponsorLists --> 
		<h2 class="SponsorListHeadline FontRaleway"><span>Silver SponsorLists</span></h2>  
     <?php 

  $content = $sponsors->sponsors(5); 
  echo $content;	

  
?> 
        
               
<!-- END Silver SponsorLists --> 

<!-- Exhibitors --> 
		<h2 class="SponsorListHeadline FontRaleway"><span>Exhibitor SponsorLists</span></h2>
     <?php 

  $content = $sponsors->sponsors(6); 
  echo $content;	

  
?>  
               
<!-- END Exhibitors -->                                                   
    </div>         
    <!-- END SponsorLists List -->

</section>
<!--END SponsorLists --> 
<!-- FOOTER -->
<footer>
 <div id="FooterWrapper">
   <div id="FooterLeftWrapper">
    <h1 class="Contact FontRaleway">CONTACT</h1>
    <h2 class="Contact FontProximaNova"><i class="fa fa-phone"></i>+36 1 201 1469</h2>
    <h2 class="Contact FontProximaNova"><i class="fa fa-phone"></i>UK/IE +44 20 34 689 689</h2>
    <h2 class="Contact FontProximaNova"><i class="fa fa-envelope"></i>hrn@hrneurope.com</h2>
    <div id="GetInTouchButtonContainer">
      <span data-reveal-id="DownloadBrochureModal" onClick="_gaq.push(['_trackEvent', 'Footer', 'ModalOpen', 'DownloadBrochure']);"><button class="BlueButton FontRaleway" id="DownloadBrochureButton" >Request Brochure</button></span>
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



<!-- Become a SponsorList Modal -->
<div id="BecomeASponsorListModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Apply for SponsorListship</h2>
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
          <option selected="selected" value="HRTechParis2015-BecomeASponsorList">HRTechParis2015-BecomeASponsorList</option>
        </select>
        <input onClick="_gaq.push(['_trackEvent', 'BecomeASponsorListForm', 'FromSubmission', 'InquirySent']);" class="submitbutton" type="submit" name="submit" value="SEND">
  </form>
  <!-- END of : BECOME A SPONSOR MODAL FORM -->
</div>
<!-- END Become a SponsorList Modal -->

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
