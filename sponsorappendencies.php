<!doctype html>
<html lang="en">
<head>
<meta name="description" content="HR Tech World Congress">
<meta name="keywords" content="HR Conference, HR event, HR Tech, HRN Europe">
<meta name="author" content="HRN Europe - The Pan European HR Network">
<meta name="designer" content="Designed by: Judit Bernat - juditbernat.mail@gmail.com ">
<meta name="developer" content="Developed by: TesseracT - bottyan.tamas@web-developer.hu | Benedek Nagy - trialshock@gmail.com">
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>Sponsor Corner | HR Tech World Congress</title>

<!-- Favicon setting -->
<link rel="shortcut icon" href="favicon.png">

<!--Include Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,400,700' rel='stylesheet' type='text/css'>


<!-- Include jQuery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Include Tooltipster -->
<link rel="stylesheet" type="text/css" href="vendor/tooltipster/css/tooltipster.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>
<script type="text/javascript" src="vendor/tooltipster/js/jquery.tooltipster.min.js"></script>

<!--Include Font Awesome -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Include General CSS Definitions -->
<link rel="stylesheet" href="css/general.css" />

<!-- Include the Navigation Menu`s CSS Definitions -->
<link rel="stylesheet" href="css/menu.css" />

<!--	Include Custom CSS Definitions -->
<link rel="stylesheet" href="css/sponsor-appendencies.css" />

<!-- Footer -->
<link rel="stylesheet" href="css/footer.css" />

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
	if(window.location.href.indexOf('#ThankYouBrochureModal') != -1) {
   		jQuery("#ThankYouBrochureModal").reveal();
 	} 
});
</script>
<!-- END Thank you modal  -->

<!--Calendar show/hide-->
<script type="text/javascript">
   $(document).ready(function() {
			$("#FebruaryButton").addClass('ActiveMonth');			
			$( "#FebruaryButton" ).click(function() {
				$("#FebruaryCalendar").fadeIn('fast');
				$("#MarchCalendar").fadeOut('fast');
				$("#FebruaryButton").addClass('ActiveMonth');
				$("#MarchButton").removeClass('ActiveMonth');
			});
			$( "#MarchButton" ).click(function() {
				$("#FebruaryCalendar").fadeOut('fast');
				$("#MarchCalendar").fadeIn('fast');
				$("#MarchButton").addClass('ActiveMonth');
				$("#FebruaryButton").removeClass('ActiveMonth');
			});			
        });
</script>

<!-- Tooltipster Configurations -->
<script type="text/javascript">
  $(document).ready(function() {
			 $('.tooltipster').tooltipster({
				arrow: true,
				maxWidth: 500,
				offsetY: -40,
				contentAsHTML: true
				}); 
			});
      		
</script>

<script type="text/javascript">
$(document).ready(function() {
			if ( (screen.width < 640)  ) { 
    			document.getElementById("Monday1").innerHTML = "Mo";
				document.getElementById("Monday2").innerHTML = "Mo";
				
				document.getElementById("Tuesday1").innerHTML = "Tu";
				document.getElementById("Tuesday2").innerHTML = "Tu";
				
				document.getElementById("Wednesday1").innerHTML = "We";
				document.getElementById("Wednesday2").innerHTML = "Wed";
				
				document.getElementById("Thursday1").innerHTML = "Th";
				document.getElementById("Thursday2").innerHTML = "Th";
				
				document.getElementById("Friday1").innerHTML = "Fr";
				document.getElementById("Friday2").innerHTML = "Fr";
				
				document.getElementById("Saturday1").innerHTML = "Sa";
				document.getElementById("Saturday2").innerHTML = "Sa";

				document.getElementById("Sunday1").innerHTML = "Su";
				document.getElementById("Sunday2").innerHTML = "Su";
				
    		} 
});			
</script>



</head>
<body onload="BrwoserDetect()">

<nav>
  <div id="MobileMenuContainer">
    <a href="http://hrtechcongress.com" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'LogoHome']);"><div id="MobileMenuLogo"></div></a>
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
            <a title="Flickr" onClick="_gaq.push(['_trackEvent', 'Navigation', 'ExternalForward', 'Flickr']);" class="ico-flickr no-link" target="blank" href="https://www.flickr.com/photos/hrtecheurope/sets/72157651210562997/"></a>
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
    
<div id="ImageHeader">
   <h1>Sponsor Appendencies</h1>
</div>
    
<!--MAIN CONTENT -->
<div id="MainContent"> 
      
      <!-- Downloads -->
      <div id="DownloadsContainer">
        <div id="DownloadAllContainer">
          <div id="Downloads">
            <h2><i class="fa fa-cloud-download"></i> Download Links</h2>
            <ol>
              <a href="sponsor-appendencies/01_HR_Tech_Europe_Contact_List.pdf" target="_blank">
              <li>HR Tech Europe Contact List</li>
              </a> <a href="sponsor-appendencies/02_Frequently_Asked_Questions.pdf" target="_blank">
              <li>Frequently Asked Questions</li>
              </a> <a href="sponsor-appendencies/03_Whats_On.pdf" target="_blank">
              <li>What's On</li>
              </a> <a href="sponsor-appendencies/04_Furniture_Brochure_2015_Interactive.pdf" target="_blank">
              <li>Furniture brochure 2015 Interactive</li>
              </a> <a href="sponsor-appendencies/05_Furniture_Order_Form.pdf" target="_blank">
              <li>Furniture Order Form</li>
              </a> <a href="sponsor-appendencies/06_Electrical_Order_Form.pdf" target="_blank">
              <li>Electrical Order Form</li>
              </a> <a href="sponsor-appendencies/07_GES_Payment_Authorisation_Form.pdf" target="_blank">
              <li>GES Payment Authorisation Form</li>
              </a> <a href="sponsor-appendencies/08_GES_Shipping_Label.pdf" target="_blank">
              <li>GES Shipping Label</li>
              </a> <a href="sponsor-appendencies/09_Sponsors_Video_Interview_Guide.pdf" target="_blank">
              <li>Sponsors' Video Interview Guide</li>
              </a> <a href="sponsor-appendencies/10_Case_Study_Interview_Sample.pdf" target="_blank">
              <li>Case Study Interview Sample</li>
              </a> <a href="sponsor-appendencies/11_Case_Study_Oracle.pdf" target="_blank">
              <li>Case Study Oracle</li>
              </a> <a href="sponsor-appendencies/12_Giveaway_Ideas.pdf" target="_blank">
              <li>Giveaway Ideas</li>
              </a> <a href="sponsor-appendencies/13_HR_Tech_Europe_Badge_Scanners.pdf" target="_blank">
              <li>HR Tech Europe Badge Scanners</li>
              </a>
            </ol>
          </div>
          <a href="sponsor-appendencies/HR_Tech_Europe_2015_London_Sponsor_Appendencies.zip" target="_blank">
          <div id="DownloadAllButton" class="FontRoboto"> <i class="fa fa-download"></i> Download all </div>
          </a> </div>
        <div id="Recommendations">
          <h2 id="Compulsory">Compulsory</h2>
          <p>Please make sure you fill out and send back these forms. The furniture / electricity order form must be sent back directly to GES on the following address:<br>
            GES ServiCentre<br>
            customerservice@ges.com +44 2476 380 180</p>
          <ul id="Compulsory">
            <li>Furniture Brochure</li>
            <li>Furniture Order Form</li>
            <li>Electricity Order Form</li>
            <li>GES Payment Authorization Form</li>
            <li>What’s On? What’s New? Form</li>
          </ul>
          <h2>Recommended</h2>
          <p>Please read all documents carefully as they contain useful information about the event.</p>
          <ul>
            <li>HR Tech Europe Contact List</li>
            <li>GES Shipping Label</li>
            <li>Floor Plan</li>
            <li>HR Tech Europe Badge Scanners</li>
          </ul>
          <h2>Extra</h2>
          <p>Please see the frequently asked questions and some examples of previous case studies, etc.</p>
          <ul>
            <li>FAQ</li>
            <li>Sponsors Video Interview Guide</li>
            <li>Case Study Interview Sample</li>
            <li>Case Study Example</li>
            <li>Giveaway Ideas</li>
          </ul>
        </div>
      </div>
      <!-- end Downloads --> 
      
      <!-- Deadlines -->
      <div id="DeadlinesContainer">
        <h2>Deadlines</h2>
        <!-- Promotional items -->
        <table>
          <thead>
            <tr>
              <td colspan="2">Promotional items</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="ItemDeadline">Immediate submission</td>
              <td class="ItemDescription" colspan="3">Logos, urls, company profile, Speaker Nomination (for Diamond & Titanium)</td>
            </tr>
            <tr>
              <td class="ItemDeadline">18 February</td>
              <td class="ItemDescription" colspan="3">Adverts (for Diamond, Titanium, Platinum)</td>
            </tr>
            <tr>
              <td class="ItemDeadline">18 February</td>
              <td class="ItemDescription" colspan="3">Client Interview (for Diamond & Titanium)</td>
            </tr>
          </tbody>
        </table>
        <!-- end Promotional items --> 
        <!-- Stand & Supplies -->
        <table>
          <thead>
            <tr>
              <td colspan="2">Stand & Supplies</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="ItemDeadline">23 February</td>
              <td class="ItemDescription" colspan="3">Order badge scanners (optional) £115 / device / 2 days</td>
            </tr>
            <tr>
              <td class="ItemDeadline">23 February</td>
              <td class="ItemDescription" colspan="3">Stand picture / Design submitted</td>
            </tr>
            <tr>
              <td class="ItemDeadline">23 February</td>
              <td class="ItemDescription" colspan="3">Electricity ordered</td>
            </tr>
            <tr>
              <td class="ItemDeadline">3 March</td>
              <td class="ItemDescription" colspan="3">Internet / Stand furniture ordered (optional)</td>
            </tr>
            <tr>
              <td class="ItemDeadline">9 March</td>
              <td class="ItemDescription" colspan="3">Registration deadline for all conference passes</td>
            </tr>
            <tr>
              <td class="ItemDeadline">23 March</td>
              <td class="ItemDescription" colspan="3">Set-up (11 am – 7 pm)</td>
            </tr>
          </tbody>
        </table>
        <!-- end Stand & Supplies --> 
        <!-- Shipment -->
        <table>
          <thead>
            <tr>
              <td colspan="2">Shipment</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="ItemDeadline">16 March</td>
              <td class="ItemDescription" colspan="3">All conference bag materials (bag, pen, notepad, etc.) must arrive</td>
            </tr>
            <tr>
              <td class="ItemDeadline">20 March</td>
              <td class="ItemDescription" colspan="3">All shipments arrive</td>
            </tr>
          </tbody>
        </table>
        <!-- end Shipment --> 
      </div>
      <!-- end Deadlines --> 
      
      <!-- Calendar -->
      <div id="CalendarContainer">
        <h2><span id="FebruaryButton">September 2015</span>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;<span id="MarchButton">October 2015</span></h2>
        <!-- September 2015 -->
        <table class="Calendar" id="FebruaryCalendar">
          <thead>
            <tr>
              <td id="Monday1">Monday</td>
              <td id="Tuesday1">Tuesday</td>
              <td id="Wednesday1">Wednesday</td>
              <td id="Thursday1">Thursday</td>
              <td id="Friday1">Friday</td>
              <td id="Saturday1">Saturday</td>
              <td id="Sunday1">Sunday</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="NotDayOfTheMonth">31</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td>6</td>
            </tr>
            <tr>
              <td>7</td>
              <td>8</td>
              <td>9</td>
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
            </tr>
            <tr>
              <td>14</td>
              <td>15</td>
              <td>16</td>
              <td>17</td>
              <td>18</td>
              <td>19</td>
              <td>20</td>
            </tr>
            <tr>
              <td>20</td>
              <td>22</td>
              <td class="HighlightedDay tooltipster" title='<i class="fa fa-check"></i> Adverts (for Diamond, Titanium, Platinum) <br> <i class="fa fa-check"></i> Client Interview (for Diamond & Titanium)'>23</td>
              <td>24</td>
              <td>25</td>
              <td>26</td>
              <td>27</td>
            </tr>
            <tr>
              <td class="HighlightedDay tooltipster" title='<i class="fa fa-check"></i> Order badge scanners (optional) £115 / device / 2 days <br> <i class="fa fa-check"></i> Stand picture / Design submitted <br> <i class="fa fa-check"></i> Electricity ordered'>28</td>
              <td>29</td>
              <td>30</td>
              <td class="NotDayOfTheMonth">1 Oct.</td>
              <td class="NotDayOfTheMonth">2</td>
              <td class="NotDayOfTheMonth">3</td>
              <td class="NotDayOfTheMonth">4</td>
            </tr>
          </tbody>
        </table>
        <!-- end September 2015 --> 
        <!-- October 2015 -->
        <table class="Calendar" id="MarchCalendar">
          <thead>
            <tr>
              <td id="Monday2">Monday</td>
              <td id="Tuesday2">Tuesday</td>
              <td id="Wednesday2">Wednesday</td>
              <td id="Thursday2">Thursday</td>
              <td id="Friday2">Friday</td>
              <td id="Saturday2">Saturday</td>
              <td id="Sunday2">Sunday</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="NotDayOfTheMonth">28</td>
              <td class="NotDayOfTheMonth">29</td>
              <td class="NotDayOfTheMonth">30</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
            </tr>
            <tr>
              <td>5</td>
              <td class="HighlightedDay tooltipster" title='<i class="fa fa-check"></i> Internet / Stand furniture ordered (optional)'>6</td>
              <td>7</td>
              <td>8</td>
              <td>9</td>
              <td>10</td>
              <td>11</td>
            </tr>
            <tr>
              <td class="HighlightedDay tooltipster" title='<i class="fa fa-check"></i> Registration deadline for all conference passes'>12</td>
              <td>13</td>
              <td>14</td>
              <td>15</td>
              <td>16</td>
              <td>17</td>
              <td>18</td>
            </tr>
            <tr>
              <td class="HighlightedDay tooltipster" title='<i class="fa fa-check"></i> All conference bag materials (bag, pen, notepad, etc.) must arrive'>19</td>
              <td>20</td>
              <td>21</td>
              <td>22</td>
              <td class="HighlightedDay tooltipster" title='<i class="fa fa-check"></i> All shipments arrive'>23</td>
              <td>24</td>
              <td>25</td>
            </tr>
            <tr>
              <td class="HighlightedDay tooltipster" title='<i class="fa fa-check"></i> Set-up (11 am – 7 pm)'>26</td>
              <td>27</td>
              <td>28</td>
              <td>29</td>
              <td>30</td>
              <td>31</td>
              <td class="NotDayOfTheMonth">1 Nov.</td>
            </tr>
          </tbody>
        </table>
        <!-- end March 2015 --> 
      </div>
      <!-- end Calendar --> 
    
    <!-- Contact -->
    <div id="ContactMembersContainer">
      <div class="ContactMember">
        <div > <img src="img/contact/McCannV.jpg" alt="Victoria McCann picture"></div>
        <p class="ContactPosition" id="GreenTitle">Chief Operations Officer</p>
        <p>Viktoria McCann</p>
        <p class="ContactPhoneNumber">+36 70 331 3431 </p>
      </div>
      <div class="ContactMember">
        <div > <img src="img/contact/BoszB.jpg" alt="Brigi Bősz picture"></div>
        <p class="ContactPosition" id="RedTitle">Operations Manager</p>
        <p>Brigi Bősz</p>
        <p class="ContactPhoneNumber">+36 30 550 7059</p>
      </div>
      <div class="ContactMember">
        <div ><img src="img/contact/CsaderK.jpg" alt="Kata Csáder picture"></div>
        <p class="ContactPosition" id="OrangeTitle">Operations Coordinator</p>
        <p>Kata Csáder</p>
        <p class="ContactPhoneNumber">+36 70 200 8075</p>
      </div>
    </div>
    <!-- end Contact --> 

      
</div>
<!--END MAIN CONTENT--> 
    
<!--FOOTER-->
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
          </a> <a href="https://www.flickr.com/photos/hrtecheurope/sets/72157651210562997/" target="_blank" title="HR Tech Europe - Flickr" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'Flickr']);">
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
<!--END FOOTER--> 
    
<!-- Go to Top Button --> 
<a href="#" class="GoTopButton">
    <div id="GoTopImg">
    	<i class="fa fa-caret-up"></i>
    </div>
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
