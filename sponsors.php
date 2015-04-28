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
        <!-- Technomedia -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/technomedia-logo.png" alt="Technomedia logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.technomedia.com/en/" target="_blank" title="Technomedia" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Technomedia']);">Technomedia <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Technomedia offers industry-leading integrated global talent management solutions that enable organizations to drive high-performance business results by unifying the collaboration between employees, managers and candidates. Hundreds of companies around the world rely on Technomedia's cloud based solutions to simplify talent management and align talent with business objectives. We care about our customers and are committed to the highest levels of customer satisfaction. Come see for yourself why Technomedia has a rich history in helping clients create the world’s most successful workplaces. </p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/TechnomediaNA" target="_blank" title="Technomedia - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Technomedia']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/TechnomediaNA" target="_blank" title="Technomedia - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Technomedia']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/technomedia" target="_blank" title="Technomedia - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Technomedia']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Technomedia --> 
        <!-- Thomsons Online Benefits -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/thomsons-online-benefits-logo.png" alt="Thomsons Online Benefits logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.thomsons.com/" target="_blank" title="Thomsons Online Benefits" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'ThomsonsOnlineBenefits']);">Thomsons Online Benefits <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Founded in 2000, Thomsons Online Benefits is the business behind Darwin™, the leading software for global employee benefits administration and engagement. Our mission is to use technology to revolutionise the employee benefits market.  Darwin™ enables employers to automate their end-to-end benefit administration whilst connecting employees with their benefits, throughout their lives. We work with the world’s leading employers including 7 of the top 10 technology companies, 4 of the world’s top pharmaceutical companies and 5 of the world’s leading banks to utilise the power of Darwin™ in 70 countries and 19 languages.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/ThomsonsOnline" target="_blank" title="Thomsons Online Benefits - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-ThomsonsOnlineBenefits']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="http://twitter.com/ThomsonsOnline" target="_blank" title="Thomsons Online Benefits - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-ThomsonsOnlineBenefits']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/thomsons-online-benefits" target="_blank" title="Thomsons Online Benefits - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-ThomsonsOnlineBenefits']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Thomsons Online Benefits --> 
        <!-- Jibe -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/jibe-logo.png" alt="Jibe logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.jibe.com/" target="_blank" title="Jibe" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Jibe']);">Jibe <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Founded in 2009, Jibe provides corporate talent acquisition teams a cloud-based, all-inclusive recruitment marketing platform -- Jibe Recruiting Intelligence(TM) -- to help identify, attract and engage candidates. Adopted by many of the world's top companies, the platform features an analytics engine at its core that pulls recruiting metrics from disparate back-end systems and turns them into actionable intelligence to guide hiring decisions. Jibe Recruiting Intelligence enables optimized mobile and desktop apply, simplifies job distribution, and streamlines employee referrals, significantly improving the candidate experience. Full integration with applicant tracking systems, combined with a SaaS delivery model, provides a seamless solution without disrupting processes or impacting IT resources. Jibe is headquartered in New York City and is backed by top investors, including Longworth Venture Partners, Polaris Partners, DFJ and Gotham Ventures. For more information, please visit www.jibe.com and follow us @JibePR. </p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/jibe" target="_blank" title="Jibe - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Jibe']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/JIBE" target="_blank" title="Jibe - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Jibe']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/jibe" target="_blank" title="Jibe - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Jibe']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Jibe -->
        <!-- Talentsoft  -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/talentsoft-logo.png" alt="Talentsoft logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.talentsoft.com/" target="_blank" title="Talentsoft" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Talentsoft']);">Talentsoft <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Talentsoft is a European leading developer of cloud-based talent-management software. Its application provides concrete results in recruitment, performance, career development, learning, as well as compensation management. Talentsoft’s application is 100% European compliant and globally ready. It provides unique functional depth and flexibility to support every step of all talent management processes. Talentsoft adapts to companies whatever their sector, size, organizational structure and HR processes, wherever companies are based. 3 million users are connected to Talentsoft in over 100 countries and 17 languages.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/legroupeTalentSoft" target="_blank" title="Talentsoft - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Talentsoft']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/TalentSoftGroup" target="_blank" title="Talentsoft - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Talentsoft']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/talentsoft" target="_blank" title="Talentsoft - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Talentsoft']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Talentsoft --> 
        <!-- Halogen Software --> 
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/halogen-logo.png" alt="Halogen Software logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.halogensoftware.com/uk" target="_blank" title="Halogen Software" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'HalogenSoftware']);">Halogen Software <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Halogen Software offers an organically built cloud-based talent management suite that reinforces and drives higher employee performance across all talent programs — whether it is recruiting, performance management, learning and development, succession planning or compensation. Endorsed by thousands of HR professionals worldwide, Halogen has been recognised as a market leader by major business analysts and has garnered the highest customer satisfaction ratings in the industry. The company’s powerful, yet simple-to-use solutions, which also include industry-vertical offerings, are used by organisations that want to build world-class workforces that are aligned, inspired and focused on delivering exceptional results. </p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/halogensoftware" target="_blank" title="Halogen Software - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-HalogenSoftware']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/halogensoftware" target="_blank" title="Halogen Software - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-HalogenSoftware']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="#" target="_blank" title="Halogen Software - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-HalogenSoftware']);"><div class="SponsorSocialIcon SponsorLinkedinIcon" style="display: none;"></div></a>
                </div>
            </div>
        </div>
        <!-- END Halogen Software --> 
        <!-- PageUp --> 
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/pageup-logo.png" alt="PageUp logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.pageuppeople.com/" target="_blank" title="PageUp" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'PageUp']);">PageUp <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">PageUp partners with organizations to help strategically acquire and manage their workforce, maximize the business impact and return on investment of their human capital and future proof organizations for global growth. Through our award-winning, single-platform talent management solution, predictive analytics dashboard technology, and consulting services, PageUp simplifies and aligns the management and measurement of human capital deliverables across the talent lifecycle. The PageUp Software as a Service solution (SaaS),consisting of modules for recruitment, development, performance, retention, career pathing and succession planning, supports Global Fortune 500 employers and more than 90,000 HR Practitioners in over 180 countries around the world. We provide expertise in a broad range of industries, including retail, finance, mining and refining, manufacturing, food & beverage, telecommunications and transportation.<br>
<br>
PageUp has offices in London, Melbourne, Sydney, Singapore, Hong Kong and New York. Learn more about how PageUp can help transform your company’s global HR initiatives by visiting http://www.pageuppeople.com</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/PageUpPeople" target="_blank" title="PageUp - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-PageUp']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/pageuppeople" target="_blank" title="PageUp - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-PageUp']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/pageup" target="_blank" title="PageUp - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-PageUp']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END PageUp --> 
        <!-- Saba --> 
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/saba-logo.png" alt="Saba logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.saba.com/us/" target="_blank" title="Saba" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Saba']);">Saba <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">
Saba is a global leader in 'intelligent' cloud solutions for learning and talent management. Saba helps organisations transform the way they work through continuous learning, engagement and development of employees, partners and customers.<br>
<br>
Supporting the new world of work, the Saba Cloud delivers easy to use learning, performance, succession, career development, workforce planning, recruitment and compensation solutions that harness social, collaboration, mobile and gamification technologies. Saba Cloud’s platform provides a highly scalable architecture that exceeds industry scalability, performance, and security standards. Designed to be easy to use, Saba Cloud encourages higher levels of employee engagement and agility enabling organisations to attract, develop and harness the power of each and every individual.<br>
<br>
Certified Workday Connector - Saba Cloud provides bi-directional data exchange connector between Workday and Saba Cloud Learning@Work to provide seamless integration between the two products to deliver a complete Talent Management solution.<br> 
<br>
Today Saba supports over 31 million users from 2,200 customers across 195 countries and in 37 languages. Saba is used by companies and organisations from all industry sectors and has been deployed in organisations ranging from 30 to 500,000 employees.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/SabaSoftware" target="_blank" title="Saba - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Saba']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/SabaSoftware" target="_blank" title="Saba - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Saba']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/saba" target="_blank" title="Saba - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Saba']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Saba -->                        
<!-- END Platinum Sponsors -->  

<!-- Gold Sponsors --> 
		<h2 class="SponsorHeadline FontRaleway"><span>Gold</span></h2>  
        <!-- Neocase Software -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/neocase-logo.png" alt="Neocase Software logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.neocasesoftware.com/" target="_blank" title="Neocase Software" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Neocase']);">Neocase Software <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Neocase Software is the global leader in enterprise-class, SaaS solutions for Employee Relationship Management (ERM) and Service Center Operations for Global Shared Service Centers (SSC), providing cost effective, innovative and powerful SSC applications. It empowers global businesses to manage and optimize their shared service and support operation performances and processes through its uniquely adaptive, flexible and unified solution designed to help the workforce deliver more for less. Delivered in the cloud leveraging its award-winning modern technology platform, Neocase Software offers a fresh, low cost alternative to legacy ERM systems. Over 250 customers, spanning large-sized to Fortune 500 businesses have selected Neocase Software i.e. Societe Generale, Baker Hughes, Sanofi, Thales Group, Merck, Renault, Air France, Canadian Tire, RBoS, PSA Citroen-Peugeot and many more…</p>
                <div class="SponsorSocialIcons">
                	<a href="#" target="_blank" title="Neocase - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Neocase']);"><div class="SponsorSocialIcon SponsorFacebookIcon" style="display: none;"></div></a>
                    <a href="https://twitter.com/neocase" target="_blank" title="Neocase - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Neocase']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/neocase-software-inc." target="_blank" title="Neocase - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Neocase']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Neocase Software --> 
        <!-- Avature -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/avature-logo.png" alt="Avature logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.avature.net/?utm_source=HRTechEurope&utm_medium=Logo&utm_campaign=Events" target="_blank" title="Avature" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Avature']);">Avature <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Launched in 2008 by Dimitri Boylan, co-founder and former CEO of HotJobs.com, Avature provides a highly flexible Web 2.0 social enterprise platform for Global Talent Acquisition and Talent Management. The Avature platform brings innovative social media solutions to recruiting, internal mobility, and performance challenges.<br>
<br>
Avature was cited as a Gartner “Cool Vendor in HCM 2010,” and has over 300 customers, of which 47 are Fortune 500. Headquartered in Charlotte, Avature has offices in Chicago, Cleveland, Portland, London, Munich, Melbourne, Singapore, Hong Kong, and Buenos Aires.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/Avature" target="_blank" title="Avature - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Avature']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/Avature" target="_blank" title="Avature - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Avature']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/avature" target="_blank" title="Avature - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Avature']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Avature --> 
        <!-- Towers Watson -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/towers-watson-logo.png" alt="Towers Watson logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.towerswatson.com/" target="_blank" title="Towers Watson" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'TowersWatson']);">Towers Watson <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Towers Watson is a leading global professional services company that helps organizations improve performance through effective people, risk and financial management.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/towerswatson" target="_blank" title=" - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-TowersWatson']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/towerswatson" target="_blank" title=" - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-TowersWatson']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/3965?trk=vsrp_companies_hero_name&" target="_blank" title=" - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-TowersWatson']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Towers Watson --> 
        <!-- Appirio -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/appirio-logo.png" alt="Appirio logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://appirio.com/" target="_blank" title="Appirio" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Appirio']);">Appirio <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">
With a team of 700 HCM and Cloud strategy experts, Appirio is engaging in more conversations than ever before around topics beyond core HR, payroll, and process improvement. These conversations centre on workplace transformation with far-reaching implications across the organisation. Because of this reach, the effectiveness and rapid pace of change has typically caused HR to lag behind other areas of the business when it comes to things like the adoption of cloud, mobile and social technologies.<br>
<br>
Going forward, the pace of change in HR will need to accelerate and HR leaders must turn their attention from “go-live” to the functional and strategic extensions of their deployed HR strategy and technology. Process change, go-live and user adoption are no longer the end game. The traditional approach to HR technology deployment is replaced with new, agile methods that bring together the organisation’s strategy, technology and people.<br>
<br>
<strong>Appirio’s mission is simple:</strong> To help senior HR leaders drive more effective change, improve employee engagement, deliver business performance and understand how these new technologies deliver business results before selecting / deploying their talent management technology. Appirio specialises in overall vision and deployment of systems like Workday, Cornerstone and others.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/AppirioEMEA?ref=hl" target="_blank" title="Appirio - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Appirio']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/AppirioEmea" target="_blank" title="Appirio - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Appirio']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/appirio-emea" target="_blank" title="Appirio - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Appirio']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Appirio --> 
        <!-- Dovetail Software -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/dovetail-software-logo.png" alt="Dovetail Software logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.dovetailsoftware.com/" target="_blank" title="Dovetail Software" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'DovetailSoftware']);">Dovetail Software <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Dovetail Software delivers a SaaS-based HR case management and help desk solution that enables HR organisations and Shared Services Centres to track the way human resources engages with its employee population. Dovetail’s solution, Employee Engagement Suite (EES), combines case management, knowledge management, an employee service portal and powerful reporting capabilities to enable HR to seamlessly manage, document and report on all employees’ interactions with HR. Built for scalability, rapid deployment, frequent and easy updates, and affordable cost of ownership, EES is highly configurable and ideal for global deployments. Dovetail services users worldwide, including customers such as Sony, Motorola, NEC, Yara, Sykes and Brady Corporation, who cite increased efficiencies, access to complete records of employee interactions with HR, and the ability to analyse and track HR activities as key benefits of EES.</p>
                <div class="SponsorSocialIcons">
                	<a href="http://www.facebook.com/dovetailsoftware" target="_blank" title="Dovetail Software - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-DovetailSoftware']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="http://www.twitter.com/dovetail" target="_blank" title="Dovetail Software - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-DovetailSoftware']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/dovetail-software" target="_blank" title="Dovetail Software - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-DovetailSoftware']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Dovetail Software -->
        <!-- viasto  -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/viasto-logo.png" alt="viasto logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.viasto.com/en" target="_blank" title="viasto" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'viasto']);">viasto <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">viasto is one of the world’s leading providers of asynchronous video interviewing software. Our innovative and award-winning HR-Software - the interview suite - enables recruiters not only to gain a personal impression of an applicant, but to interview candidates in a competency-based process. So HR and hiring managers can easily identify the most talented candidates before meeting them in person. Our groundbreaking diagnostic research proves how valuable video interviews are for your recruiting. Our know-how in connecting the powerful world of modern video interviewing with proven HR expertise is parallel to none. </p>
                <div class="SponsorSocialIcons">
                	<a href="#" target="_blank" title="viasto - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-viasto']);"><div class="SponsorSocialIcon SponsorFacebookIcon" style="display: none;"></div></a>
                    <a href="https://twitter.com/viasto" target="_blank" title="viasto - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-viasto']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/viasto/" target="_blank" title="viasto - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-viasto']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END viasto --> 
        <!-- Lumesse -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/lumesse-logo.png" alt="Lumesse logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.lumesse.com/" target="_blank" title="Lumesse" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Lumesse']);">Lumesse <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Lumesse is the only global company making talent management solutions work locally. We help customers around the world to implement successful local talent management initiatives that identify, nurture and develop the right people, in the right place, at the right time. Our multi-cultural background and presence means we understand how to deliver talent solutions that work the way our customers work, as individuals and as teams, because no two people, organisations or cultures are the same. We regard differences as strengths, not as obstacles.<br>
<br>
2,000 customers work with us in over 70 countries because they recognise that commitment, innovation and value only come from people. We help customers to unlock and inspire that human potential in their businesses. Our integrated talent management solutions are comprehensive, intuitive, secure and fully internationalised into over 50 language.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/pages/Lumesse/146453778755966" target="_blank" title="Lumesse - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Lumesse']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/lumesse" target="_blank" title="Lumesse - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Lumesse']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/764805?trk=vsrp_companies_res_name&trkInfo=VSRPsearchId%3A129300431373891636367%2CVSRPtargetId%3A764805%2CVSRPcmpt%3Aprimary" target="_blank" title="Lumesse - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Lumesse']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Lumesse -->  
        
<!-- END Gold Sponsors -->  

<!-- Silver Sponsors --> 
		<h2 class="SponsorHeadline FontRaleway"><span>Silver</span></h2>  
        <!-- Ingentis -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/ingentis-logo.png" alt="Ingentis logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.ingentis.com/" target="_blank" title="Ingentis" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Ingentis']);">Ingentis <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Ingentis Launched in 1997, and has evolved into one of Germany's most innovative software solution companies within the IT sector. Ingentis provides individual software development as well as standard software products and consulting services that go with them. Our flagship product is Ingentis org.manager, a tool for automated organizational charting. It allows direct connections to all major personnel administration systems such as SAP®, Oracle®, PeopleSoft®, P&I etc.<br>
<br>
Other products include Ingentis easy.pes, a tool helping HR professionals to plan and evaluate assessment centres and personnel development seminars and Ingentis distribution.list for automating the process of email distribution in an organization.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/Ingentis" target="_blank" title="Ingentis - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Ingentis']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/ingentisgmbh" target="_blank" title="Ingentis - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Ingentis']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/ingentis-softwareentwicklung-gmbh?trk=prof-following-company-logo" target="_blank" title="Ingentis - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Ingentis']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Ingentis --> 
        <!-- Cammio -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/cammio-logo.png" alt="Cammio logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.cammio.me/en/" target="_blank" title="Cammio" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Cammio']);">Cammio <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Cammio is a powerful cloud-based video interview platform featuring live and automated interviews in one integrated online environment. We help candidates and employers alike towards a better first impression while reducing cost and time-to-hire. Market leaders including SONOS, NS (Dutch Railways) and AFAS rely on Cammio to power their daily search for the best candidate. Get rid of unnecessary travel and difficult scheduling.<br>
<br>
Simply interview and compare candidates around the world and around the clock through your web browser. Our interview solution includes the Cammio Recruiter TM mobile app for busy recruiters on the road and Cammio Connector TM for easy integrations in your existing recruitment software. </p>
                <div class="SponsorSocialIcons">
                	<a href="http://nl-nl.facebook.com/pages/Cammio/259231937435829" target="_blank" title="Cammio - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Cammio']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="http://twitter.com/Cammiome?" target="_blank" title="Cammio - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Cammio']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/3140358?trk=prof-0-ovw-curr_pos" target="_blank" title="Cammio - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Cammio']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Cammio --> 
        <!-- Intraworlds -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/intraworlds-logo.png" alt="Intraworlds logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.intraworlds.com/" target="_blank" title="Intraworlds" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Intraworlds']);">Intraworlds <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">With interactive solutions, IntraWorlds supports customers such as Accenture, Adidas, and BMW in sourcing the best talent for their global organizations. Based on our unique talent relationship management and engagement strategies, our customers hire the best candidates on the market while cutting the average cost per hire by 50%. In times when other companies struggle in the war for talent, our customers build a predictable talent pipeline and achieve a sustainable advantage in competitive job markets.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/intraworlds" target="_blank" title="Intraworlds - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Intraworlds']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/intraworlds" target="_blank" title="Intraworlds - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Intraworlds']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/441839?trk=tyah" target="_blank" title="Intraworlds - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Intraworlds']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Intraworlds --> 
        <!-- Adessa -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/adessa-logo.png" alt="Adessa logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.adessa-group.com/" target="_blank" title="Adessa" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Adessa']);">Adessa <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">As SAP and SuccessFactors partner, Adessa is a worldwide service provider specialized in global Human Resources processes and solutions. Through consulting, the Company is committed to deliver the finest expertise and to help its customers to quickly reach their business objectives. <br>
                <br>
Adessa’s core values have shaped the culture and defined the character of the company. At Adessa, we think that the commitment, the effectiveness, the quality, the proximity and the pragmatism testified by our consultants are key success factors to help our customers improve their performance.
</p>
                <div class="SponsorSocialIcons">
                	<a href="#" target="_blank" title="Adessa - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Adessa']);"><div class="SponsorSocialIcon SponsorFacebookIcon" style="display: none;"></div></a>
                    <a href="#" target="_blank" title="Adessa - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Adessa']);"><div class="SponsorSocialIcon SponsorTwitterIcon" style="display: none;"></div></a>
                    <a href="https://www.linkedin.com/company/875388?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A2-1-3%2CtarId%3A1428479058393%2Ctas%3Aadessa+gr" target="_blank" title="Adessa - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Adessa']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Adessa --> 
        
        <!-- Frontier Software -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/frontier-logo.png" alt="Frontier Software logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.frontiersoftware.com/" target="_blank" title="Frontier Software" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'FrontierSoftware']);">Frontier Software <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">
The internet has changed how people consume, share, discover and connect with software and data.  The browser interface of ichris, international comprehensive HR integrated software, delivers HR functions without the burden of deploying and managing a traditional desktop software application. ichris offers ease of use, a Report Designer, standard reports, security, user customisation and unlimited help, creating a centralised, virtual HR office with a comprehensive secure database.<br>
ichris provides a local, national or global environment for any organisation’s Human Capital Management software requirements.  Additional modules include payroll, HR dashboards, employee and manager self service, learning and development, time and attendance and performance management.</p>
                <div class="SponsorSocialIcons">
                	<a href="http://www.facebook.com/pages/Frontier-Software/188291772001" target="_blank" title="Frontier Software - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-FrontierSoftware']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="http://twitter.com/FrontierHR" target="_blank" title="Frontier Software - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-FrontierSoftware']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/28920" target="_blank" title="Frontier Software - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-FrontierSoftware']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Frontier Software --> 
        <!-- Textkernel -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/textkernel-logo.png" alt="Textkernel logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.textkernel.com/" target="_blank" title="Textkernel" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Textkernel']);">Textkernel <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Textkernel specialises in semantic recruitment technology offering multi-lingual CV parsing, job parsing and semantic search, sourcing and matching software. These tools, easily integrated into your system, help accelerate the process of matching people and jobs. <br> 
<br>
The company was founded in 2001 as a private commercial R&D spin-off of research in natural language processing and machine learning at the universities of Tilburg, Antwerp and Amsterdam. Textkernel now operates internationally as one of the market leaders in its segment.<br> 
<br>
Textkernel’s software allows you to offer a candidate-friendly application process and increase the conversion rate. By saving time on processing profiles and finding the best candidates in multiple databases, you are able to fill jobs faster.</p>
                <div class="SponsorSocialIcons">
                	<a href="#" target="_blank" title="Textkernel - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Textkernel']);"><div class="SponsorSocialIcon SponsorFacebookIcon" style="display: none;"></div></a>
                    <a href="https://twitter.com/Textkernel" target="_blank" title="Textkernel - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Textkernel']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/textkernel/" target="_blank" title="Textkernel - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Textkernel']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Textkernel --> 
        <!-- Beekeeper -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/beekeeper-logo.png" alt="Beekeeper logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://beekeeper.ch/" target="_blank" title="Beekeeper" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Beekeeper']);">Beekeeper <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Beekeeper is the leading mobile-first platform that helps organizations reach and engage blue-collar workers and employees "out in the field", in a simple and cost-effective way. Improving internal communication with mobile messaging, engagement streams and a communication dashboard increases your employee engagement and loyalty, reducing turnover costs and increasing productivity.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/BeekeeperSocial" target="_blank" title="Beekeeper - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Beekeeper']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/BeekeeperSocial" target="_blank" title="Beekeeper - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Beekeeper']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/3291475?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A3-1-7%2CtarId%3A1427972598428%2Ctas%3Abeekeepe" target="_blank" title="Beekeeper - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Beekeeper']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Beekeeper -->         
        <!-- Ataraxis -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/ataraxis-logo.png" alt="Ataraxis logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://ataraxis-services.com/home" target="_blank" title="Ataraxis" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Ataraxis']);">Ataraxis <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Ataraxis differentiates itself, by our in depth local – European - expertise. Within Ataraxis we have many years of experience in implementing HR solutions and we bring this experience into the world of implementing Workday and Talentsoft.<br>
<br>
We know the complexity of doing HR in Multi country, Multi language, Multi currency environments and the potential impact this can have on you system setup. We know the complexity of country specific legal requirement as well as the many differences in payroll you will encounter in the different countries of Europe. At the start of an implementation we bring our experience to the table. This helps you to take the necessary decisions at the start of the implementation project and avoids costly rework. </p>
                <div class="SponsorSocialIcons">
                	<a href="#" target="_blank" title="Ataraxis - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Ataraxis']);"><div class="SponsorSocialIcon SponsorFacebookIcon" style="display: none;"></div></a>
                    <a href="https://twitter.com/ataraxisnv" target="_blank" title="Ataraxis - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Ataraxis']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/ataraxis-nv?trk=prof-exp-company-name" target="_blank" title="Ataraxis - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Ataraxis']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Ataraxis -->
        <!-- WorkForce Software -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/workforce-logo.png" alt="WorkForce Software logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.workforcesoftware.com/" target="_blank" title="WorkForce Software" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'WorkForceSoftware']);">WorkForce Software <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">For 15 years, WorkForce Software has been helping organisations to address their most complex labour policies and stringent compliance concerns via advanced, enterprise-grade workforce management solutions. Used daily by millions of employees from hundreds of organisations around the globe, WorkForce Software’s EmpCenter® suite automates and optimises critical HR and payroll functions such as time and attendance, scheduling, analysis and reporting, absence and leave management, and employee fatigue management. Clientele includes such notable organisations as Canon, Chevron Phillips, Newell Rubbermaid, Novo Nordisk, Ricoh and many others.</p>
                <div class="SponsorSocialIcons">
                	<a href="#" target="_blank" title="WorkForce Software - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-WorkForceSoftware']);"><div class="SponsorSocialIcon SponsorFacebookIcon" style="display: none;"></div></a>
                    <a href="https://twitter.com/WorkForceSW" target="_blank" title="WorkForce Software - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-WorkForceSoftware']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/31542?trk=vsrp_companies_cluster_name&trkInfo=VSRPsearchId%3A129300431427968851750%2CVSRPtargetId%3A31542%2CVSRPcmpt%3Acompanies_cluster" target="_blank" title="WorkForce Software - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-WorkForceSoftware']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END WorkForce Software --> 
        <!-- HireVue -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/hirevue-logo.png" alt="HireVue logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.hirevue.com/" target="_blank" title="HireVue" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'HireVue']);">HireVue <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">HireVue’s Digital Interview Platform™ removes unnecessary time, travel and hassle – making interviewing modern and amazing for everyone. It’s up to 10X faster, 9X cheaper, and 100% better than outdated ways, with the added benefit of reducing regulatory risk. Step out of the dark ages! Create online interview guides with scientifically proven questions, capture structured interview feedback in real-time, watch interviews on demand, share and compare responses amongst hiring teams,and build digital talent pools.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/hirevue" target="_blank" title="HireVue - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-HireVue']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/hirevue" target="_blank" title="HireVue - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-HireVue']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/hirevue" target="_blank" title="HireVue - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-HireVue']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END HireVue --> 
        <!-- AssessFirst -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/assessfirst-logo.png" alt="AssessFirst logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.assessfirst.com/" target="_blank" title="AssessFirst" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'AssessFirst']);">AssessFirst <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">"We Make Success Predictable"<br> 
<br>
More than 10,000 recruiters worldwide use AssessFirst to assess the potential of their candidates and employees. Our solution is based on the science of personality assessment. The solution allows recruiters to measure and predict candidates' ability to succeed and thrive in a professional context. Whatever the size of your company, the industry in which you operate or type of profiles you recruit, AssessFirst has a solution for you to simplify and accelerate your recruitment by helping you make better recruitment decisions. 12 languages ​​- 3500 customers - 10,000 users - 5 million assessments completed</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/assessfirstplace" target="_blank" title="AssessFirst - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-AssessFirst']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/assessfirst" target="_blank" title="AssessFirst - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-AssessFirst']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/assessfirst" target="_blank" title="AssessFirst - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-AssessFirst']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END AssessFirst --> 
        <!-- OneSource Virtual -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/onesource-virtual-logo.png" alt="OneSource Virtual logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://onesourcevirtual.com/uploads/pages/euro" target="_blank" title="OneSource Virtual" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'OneSourceVirtual']);">OneSource Virtual <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">OneSource Virtual is the leading Business Process Outsourcing (BPO) provider servicing more than 30 percent of Workday’s entire customer base. Built on customer loyalty and satisfaction, OneSource’s unique Cloudsourcing model delivers an innovative and truly cloud-based alternative to traditional outsourcing. By offering services for payroll management, garnishments, payroll tax, benefits administration, and COBRA directly within the Workday application their customers gain greater data accuracy and better analytics without sacrificing efficiency. With proven implementation tools and their experienced Workday Deployment team, OneSource provides enterprises of all sizes with Human Capital Management (HCM) solutions. Founded in 2008, the company is headquartered in Dallas, Texas, and has more than 400 professionals focused on developing the highest quality solutions and services on the Workday technology.</p>
                <div class="SponsorSocialIcons">
                	<a href="http://www.facebook.com/OneSourceVirtual" target="_blank" title="OneSource Virtual - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-OneSourceVirtual']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/OneSourceV" target="_blank" title="OneSource Virtual - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-OneSourceVirtual']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/onesource-virtual" target="_blank" title="OneSource Virtual - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-OneSourceVirtual']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END OneSource Virtual --> 
        <!-- Promerit HR+IT Consulting -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/promerit-logo.png" alt="Promerit HR+IT Consulting logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://promerit.de/en/business-units/promerit-hr-it-consulting/" target="_blank" title="Promerit HR+IT Consulting" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Promerit']);">Promerit HR+IT Consulting <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription"><strong>Practice-oriented HR processes for IT-driven daily life</strong><br>
<br>
Information technology is changing our life fundamentally – but what role does it play in HR and IT consulting? The way we communicate and interact both in private and in business is particularly interesting and relevant to Human Resources, as this change creates opportunities that we can reflect in tailored IT and HR consulting. The change in communication and interaction also poses new challenges for HR processes and IT systems. Effective HR management takes these challenges into account and provides a robust platform for modern, IT-driven HR instruments!<br>
<br>
Promerit HR and IT Consulting develops and implements effective HR processes and systems that really work. Systems that don’t pose an additional obstacle for their users, but true relief. That accelerate recruitment. That make employee reviews an experience. That create transparency regarding potential within the company. We are one of the most distinguished consultants for IT-supported talent management and e-recruiting in Europe. Combining our HR expertise and technical know-how, we make our clients competitive in their HR-IT strategy.<br>
<br>
<strong>Innovative ideas for effective HR processes</strong><br>
<br>
We design effective HR processes that are synthesised and tailored to the requirements of different agents. In this respect, the acceptance of our HR IT system is the most important performance indicator for success. Many of our innovative ideas create a completely new experience of staffing processes, and link HR and IT consulting in a new, revolutionary way.<br>
<br>
Our formula for successful HR Management:<br>
<br>
<strong>Processes + Systems + Acceptance = Success.</strong> </p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/Promerit" target="_blank" title="Promerit HR+IT Consulting - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Promerit']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/promerit" target="_blank" title="Promerit HR+IT Consulting - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Promerit']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/promerit" target="_blank" title="Promerit HR+IT Consulting - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Promerit']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Promerit HR+IT Consulting --> 
        <!-- HR Smart -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/hrsmart-logo.png" alt="HR Smart logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.hrsmart.com/uk" target="_blank" title="HR Smart" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'HRSmart']);">HR Smart <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">HR Smart's mission is to provide technology, professional expertise and exceptional support services to companies, enabling them to effectively recruit, manage and retain top performers.<br>
<br>
Our current technology application suite includes Applicant Tracking, Performance Management, Learning Management, and Career Development and Succession Planning. Each component of HRsmart’s Talent Management Application Suite is organically grown and part of a unified system that provides users with a single point of access for all applications, as well as cross-functional reporting that delivers a birds-eye-view of an organisation’s entire human capital performance. </p>
                <div class="SponsorSocialIcons">
                	<a href="#" target="_blank" title="HR Smart - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-HRSmart']);"><div class="SponsorSocialIcon SponsorFacebookIcon" style="display: none;"></div></a>
                    <a href="https://twitter.com/HRsmartEMEA" target="_blank" title="HR Smart - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-HRSmart']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="#" target="_blank" title="HR Smart - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-HRSmart']);"><div class="SponsorSocialIcon SponsorLinkedinIcon" style="display: none;"></div></a>
                </div>
            </div>
        </div>
        <!-- END HR Smart --> 
        <!-- Meta4 --> 
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="img/sponsors/meta4-logo.png" alt="Meta4 logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.meta4.com/" target="_blank" title="Meta4" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'Meta4']);">Meta4 <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">
Meta4, a world-class Global HCM provider with 1,300 clients in 100 countries, manages more than 18 million people worldwide. Meta4 R&D and innovation centers in Europe and the Americas develop advanced applications to fully address both local and global needs for any company, regardless of size and complexity.<br>
<br>
Meta4 cloud solutions offer HR professionals state-of-the-art technology with the best possible user experience for managing the complete employee cycle, from payroll and personnel administration through to global talent management. These all-in-one solution exploit cloud benefits to overcome all the challenges of human capital management, while increasing business productivity and efficiencies.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/worldwide.meta4" target="_blank" title="Meta4 - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-Meta4']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/Meta4_GlobalHr/" target="_blank" title="Meta4 - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-Meta4']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/groups?mostPopular=&gid=80655" target="_blank" title="Meta4 - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-Meta4']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Meta4 --> 
        <!-- MOVE Guides -->
        <div class="Sponsor">
        	<div class="SponsorLogo"><img src="img/sponsors/moveguides-logo.png" alt="MOVE Guides logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.moveguides.com/" target="_blank" title="MOVE Guides" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'MOVE Guides']);">MOVE Guides <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">MOVE Guides makes it easy for organizations of any type to move their talent around the world. MOVE Guides’ award-winning Talent Mobility Cloud is a one-stop hub that enables employees to plan their move, connect with vendors and manage their budget, while HR and Finance departments streamline processes, policies and global payments across more than 150 locations and in 100 currencies. The result is a dramatically improved employee experience, global compliance and operational efficiencies.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/moveguides" target="_blank" title="MOVE Guides - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-MOVEGuides']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/moveguides" target="_blank" title="MOVE Guides - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-MOVEGuides']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/move-guides" target="_blank" title="MOVE Guides - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-MOVEGuides']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END MOVE Guides --> 
         <!-- OrgVue -->
        <div class="Sponsor">
        	<div class="SponsorLogo"><img src="img/sponsors/orgvue-logo.png" alt="OrgVue logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.orgvue.com/" target="_blank" title="OrgVue" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'OrgVue']);">OrgVue <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">OrgVue helps you see, plan and manage your organisation. A leading software platform for HR analytics, organisation design and strategic workforce planning, OrgVue gives you faster, better insights. OrgVue allows you to consolidate and visualise data from multiple sources to get answers in minutes and model what-if scenarios from any angle to plan for long term, sustainable change. A Gartner Cool Vendor in Human Capital Management, OrgVue is revolutionising the way organisations improve performance and gain competitive advantage, everyday.</p>
                <div class="SponsorSocialIcons">
                	<a href="" target="_blank" title="OrgVue - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-OrgVue']);"><div class="SponsorSocialIcon SponsorFacebookIcon" style="display: none;"></div></a>
                    <a href="https://twitter.com/OrgVue" target="_blank" title="OrgVue - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-OrgVue']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/orgvue" target="_blank" title="OrgVue - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-OrgVue']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END OrgVue --> 
         <!-- EASYRECRUE -->
        <div class="Sponsor">
        	<div class="SponsorLogo"><img src="img/sponsors/easyrecrue-logo.png" alt="EASYRECRUE logo"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.easyrecrue.com/" target="_blank" title="EASYRECRUE" onClick="_gaq.push(['_trackEvent', 'SponsorCompanySite', 'ExternalForward', 'EASYRECRUE']);">EASYRECRUE <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Leader of prerecorded and live video interview solutions in France, EASYRECRUE develops and markets innovative and digital recruitment solutions in SaaS. Using video, EASYRECRUE brings candidates and recruiters closer and optimizes screening process. Already in Madrid, Milan, Frankfurt and London, we are currently planning to continue on growing across Europe.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/pages/Easyrecrue/304738462986538" target="_blank" title="EASYRECRUE - Facebook" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-EASYRECRUE']);"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/easyRECrue" target="_blank" title="EASYRECRUE - Twitter" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-EASYRECRUE']);"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/3035410" target="_blank" title="EASYRECRUE - LinkedIn" onClick="_gaq.push(['_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'LinkedIn-EASYRECRUE']);"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END EASYRECRUE -->              
        
               
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
