<?php 
namespace HRNParis\speakers;
include_once('controllers/speakers_main.php');

$speakers = new speakers_main;
?>
<!doctype html>
<html lang="en">
<head>
<meta name="description" content="HR Tech World Congress">
<meta name="keywords" content="HR Conference, HR event, HR Tech, HRN Europe">
<meta name="author" content="HRN Europe - The Pan European HR Network">
<meta name="designer" content="Designed by: Judit Bernat - juditbernat.mail@gmail.com ">
<meta name="developer" content="Developed by: TesseracT - bottyan.tamas@web-developer.hu | Benedek Nagy - trialshock@gmail.com | Myrrdhinn - balazs.pentek@web-developer.hu">
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>HR Tech World Congress</title>

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
<link rel="shortcut icon" href="../../favicon.png">

<!-- Include General CSS Definitions -->
<link rel="stylesheet" href="../../css/general.css" />

<!-- Include the Navigation Menu`s CSS Definitions -->
<link rel="stylesheet" href="../../css/menu.css" />

<!-- Include Custom CSS Definitions -->
<link rel="stylesheet" href="../../css/speaker-profile.css" />

<!-- Include Footer CSS Definitions -->
<link rel="stylesheet" href="../../css/footer.css" />

<!-- Include jQuery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Scroll to top JS -->
<script src="../../js/gotopscroll.js"></script>

<!-- Mainpage JS -->
<script src="../../js/mainpage.js"></script>

<?php 
if(isset($_SESSION['admin'])){
	echo '
	<script src="../vendor/dropzone/dropzone.js"></script>
	<link rel="stylesheet" href="../vendor/dropzone/dropzone_edited.css" />
	<link rel="stylesheet" href="../css/speakers/admin_speakers.css" />
	<link rel="stylesheet" href="../css/admin_menu.css" />
	<link rel="stylesheet" href="../css/admin_socials.css" />
    <link rel="stylesheet" href="../css/admin_general.css" />
	
	<!-- Froala Editor -->
<link href="../vendor/froala/css/froala_editor.min.css" rel="stylesheet" type="text/css">
<link href="../vendor/froala/css/froala_style.min.css" rel="stylesheet" type="text/css">
  <script src="../vendor/froala/js/froala_editor.min.js"></script>
  <!--[if lt IE 9]>
    <script src="../vendor/froala/js/froala_editor_ie8.min.js"></script>
  <![endif]-->
  <script src="../vendor/froala/js/plugins/tables.min.js"></script>
  <script src="../vendor/froala/js/plugins/lists.min.js"></script>
  <script src="../vendor/froala/js/plugins/colors.min.js"></script>
	
	<script src="../js/admin_edit_speaker.js"></script>
	';
	
}
?>


<!-- Include Reveal Modal -->
<link rel="stylesheet" href="../../vendor/reveal/reveal.css">
<script src="../../vendor/reveal/jquery.min.js" type="text/javascript"></script>
<script src="../../vendor/reveal/jquery.reveal.js" type="text/javascript"></script>

<!-- Thank you modal -->
<script type="text/javascript">
$(document).ready(function() {
	if(window.location.href.indexOf('#ThankYouBrochureModal') != -1) {
   		jQuery("#ThankYouBrochureModal").reveal();
 	} 
});
</script>
<!-- END Thank you modal  -->

<!-- Collapsible Stage Panels -->
<script type="text/javascript">
$(document).ready(function(){
	$('.StageHeadline').bind('click', function () {
	  $(this).siblings(".StageContent").fadeToggle(600);
	  if(  $(this).children(".PlusIcon").hasClass("ShowIcon") ) {
		$(this).children(".PlusIcon").removeClass("ShowIcon");
		$(this).children(".PlusIcon").addClass("HideIcon");
		$(this).children(".MinusIcon").addClass("ShowIcon");
		$(this).children(".MinusIcon").removeClass("HideIcon");
	  } else if (  $(this).children(".MinusIcon").hasClass("ShowIcon") ) {
		$(this).children(".MinusIcon").removeClass("ShowIcon");
		$(this).children(".MinusIcon").addClass("HideIcon");
		$(this).children(".PlusIcon").addClass("ShowIcon");
		$(this).children(".PlusIcon").removeClass("HideIcon");
	  }

	});
});
</script>

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
<?php 
include_once('views/menu.php');
   show_menu('speakers-profile');
?>
  

<!-- Main Content -->
<div id="MainContent">
<!-- Back to Speakers -->
<div id="BackToSpeakersContainer">
	<div id="BackToSpeakersInnerContainer">
         <a href="../speakers" target="_parent" title="Back to Speakers">      
               <img src="../../img/speakers/back-icon.png" alt="<">
               <span class="FontLato">BACK TO SPEAKERS</span>
         </a>
    </div>
</div>
<!-- END Back to Speakers -->
<!-- Speaker Profile -->

<?php 
$link = explode("/",$_SERVER['REQUEST_URI']);

 if(isset($link[3])){
  $content = $speakers->speaker($link[3]); 
      if ($content != FALSE){
		  echo $content;	
	  } else {
		  if ($link[3] == "index"){
			  //if the back to index button pressed
			 $content = '';
			 $content .= '
			 <!-- Redirect to the Index page of HRN Europe -->
					<script type="text/javascript">
					
					  window.location.href = "../index";
	
					</script>
					';
			  
		  }else {
		       //if there is no such speaker
			 $content = '';
			 $content .= '
			 <!-- Redirect to the Index page of HRN Europe -->
					<script type="text/javascript">
					
					  window.location.href = "../404";
	
					</script>
					';
					
		  }
		echo $content;		
	  }
    
 } else {
	           //if there is no speaker tag specified
			 $content = '';
		 $content .= '
		 <!-- Redirect to the Index page of HRN Europe -->
				<script type="text/javascript">
				
				  window.location.href = "../404";
		
				</script>
				';
		echo $content;	 
 }
?>




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
        <div id="TransparentFooterImage"><img src="../../img/footer/footer-hrtech-logo.png" alt="HR Tech World Congress logo"></div>
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
<a href="#" class="GoTopButton FontLato">
    <div id="GoTopImg">
    	<i class="fa fa-caret-up"></i>
        <img src="../../img/back-to-top-mobile.png" alt="back to top"><br>
        <span>back to top</span>
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