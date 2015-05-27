<!doctype html>
<html lang="en">
<head>
<meta name="description" content="HR Tech World Congress">
<meta name="keywords" content="HR Conference, HR event, HR Tech, HRN Europe">
<meta name="author" content="HRN Europe - The Pan European HR Network">
<meta name="designer" content="Designed by: Judit Bernat - juditbernat.mail@gmail.com ">
<meta name="developer" content="Developed by: TesseracT - bottyan.tamas@web-developer.hu, Benedek Nagy - trialshock@gmail.com, Myrrdhinn - balazs.pentek@web-developer.hu">
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>HR Tech World Congress</title>


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

<!--Include Include Proxima Nova Font (Adobe Typekit) -->
<script src="//use.typekit.net/gku8ogo.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!--Include Font Awesome -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<!-- Include General CSS Definitions -->
<link rel="stylesheet" href="css/general.css" />

<!-- Include the Navigation Menu`s CSS Definitions -->
<link rel="stylesheet" href="css/menu.css" />

<!-- Include Custom CSS Definitions -->
<link rel="stylesheet" href="css/mainpage.css" />

<!-- Include jQuery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Mainpage JS -->
<script src="js/mainpage.js"></script>

<!-- Mobile menu JS -->
<script src="js/menu.js"></script>

<!-- Scroll to top JS -->
<script src="js/gotopscroll.js"></script>

<!-- Include Reveal Modal -->
<link rel="stylesheet" href="vendor/reveal/reveal.css">
<script src="vendor/reveal/jquery.min.js" type="text/javascript"></script>
<script src="vendor/reveal/jquery.reveal.js" type="text/javascript"></script>

<!-- Thank you modal -->
<script type="text/javascript">
$(document).ready(function() {
if(window.location.href.indexOf('#ThankYouModal') != -1) {
   jQuery("#ThankYouModal").reveal();
  }
  
if(window.location.href.indexOf('#ThankYouForApplyModal') != -1) {
   jQuery("#ThankYouForApplyModal").reveal();
  }
  
if(window.location.href.indexOf('#ThankYouBrochureModal') != -1) {
   jQuery("#ThankYouBrochureModal").reveal();
  }  
});
</script>
<!-- END Thank you modal  -->
<!-- Get Tickets Modal Open with # link -->
<script type="text/javascript">
$(document).ready(function() {
if(window.location.href.indexOf('#Get2For1Tickets') != -1) {
   jQuery("#Get2For1TicketsModal").reveal();
  }});</script>
<!-- END Get Tickets Modal Open with # link -->

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
<body onLoad="menuLoad();">
<nav>
  <div id="MobileMenuContainer"> <a href="#" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'LogoHome']);">
    <div id="MobileMenuLogo"></div>
    </a>
    <div id="MobileMenuButton" onClick='ShowMobileMenu()'></div>
    <div id="MobileNav" class="sidebar">
      <div id="MobileMenuListContainer"> <img id="MobileMenuCloseButton" src="img/menu/mobile-close-button.png" alt="X" onClick='HideMobileMenu()'>
        <ul id="MobileUl">
          <li><a href="#AboutSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'About']);" title="About">About</a></li>
          <li><a href="speakers" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Speakers']);" title="Speakers">Speakers</a></li>
          <li><a href="sponsors" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Sponsors']);" title="Sponsors">Sponsors</a></li>
          <li><a href="#HighlightsSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Highlights']);" title="Highlights">Highlights</a></li>
          <li><a href="#VenueSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Venue']);" title="Venue">Venue</a></li>
          <li><a href="contact" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Contact']);" title="Get In Touch">Get In Touch</a></li>
          <li><a href="tickets" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Tickets']);" title="Get Tickets"><i class="fa fa-ticket"></i> Get Tickets</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- MAIN MENU 
This section is controlled by the menu.css 
-->

<nav id="SecondStateMainMenuContainer">
  <div id="MenuContainer"><a href="http://hrtechcongress.com" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'LogoHome']);"><img src="img/menu/horizontallogo.png" alt="HR Tech Congress Logo"  id="HorizontalLogo"/></a><a class="MainMenuItem" href="#AboutSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'About']);">ABOUT</a><a class="MainMenuItem"  href="speakers" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Speakers']);">SPEAKERS</a><a class="MainMenuItem"  href="sponsors" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Sponsors']);">SPONSORS</a> <a class="MainMenuItem"  href="#HighlightsSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Highlights']);">HIGHLIGHTS</a><a class="MainMenuItem"  href="#VenueSection" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Venue']);">VENUE</a><a class="MainMenuItem"  href="contact" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Contact']);">GET IN TOUCH</a> <a class="MainMenuItem" href="tickets" id="GetTickets" onClick="_gaq.push(['_trackEvent', 'Navigation', 'InternalForward', 'Tickets']);"><i class="fa fa-ticket"></i>GET TICKETS</a></div>
</nav>

<!-- END MAIN MENU --> 



<!-- Featured Content 
@screen width < 1210px:  #FeaturediRecruit, #FeaturedDisruptHR are hidden .-->
<section id="FeaturedContentSection" style="display:none">
  <h6 class="InvisibleHeadline">Teaser</h6>
  <div id="FeaturedParisMobileBG"> <img src="img/mainpage/featuredcontent/hrcongress-logo.png" alt="HR Tech World Congress Logo">
    <div id="FeaturedParisMobileText">
      <h2>paris</h2>
      <p>27-28 october</p>
      <span data-reveal-id="DownloadBrochureModal" onClick="_gaq.push(['_trackEvent', 'FeaturedSection', 'ModalOpen', 'DownloadBrochure']);">
      <button class="FontRaleway BlueButton">REQUEST BROCHURE</button>
      </span> </div>
  </div>
  <div id="FeaturedLeftContainer">
    <div id="FeaturedParisBG"> <img src="img/mainpage/featuredcontent/hrcongress-logo.png" alt="HR Tech World Congress Logo">
      <div id="FeaturedParisText">
        <h2>paris</h2>
        <p>27-28 october</p>
        <span data-reveal-id="DownloadBrochureModal" onClick="_gaq.push(['_trackEvent', 'FeaturedSection', 'ModalOpen', 'DownloadBrochure']);">
        <button class="FontRaleway BlueButton">REQUEST BROCHURE</button>
        </span> </div>
    </div>
    <div id="FeaturediRecruitBG" class="FeaturedDojoClass">
      <div id="FeaturediRecruitText" class="FeaturedDojoTextClass"></div>
    </div>
    <div id="FeaturedCoderDojoBG" class="FeaturedShingyClass">
      <div id="FeaturedCoderDojoText" class="FeaturedShingyTextClass"></div>
    </div>
  </div>
  <div id="FeaturedRichardBG">
    <div id="FeaturedRichardText"></div>
  </div>
</section>
<!-- END Featured Content --> 

<!-- About HR Tech / iRecruit --> 
<a id="AboutSection"></a>
<section id="AboutHRTechiRecruit">
  <h2 class="InvisibleHeadline">About HR Tech Europe and iRecruit</h2>
 
  <img class="SliderNavigationArrow" id="SliderArrowLeft" data-next="3" data-current="1" src="img/mainpage/abouthrtechirecruitexpo/arrowleft.png">
   <img class="SliderNavigationArrow" id="SliderArrowRight" data-next="2" data-current="1" src="img/mainpage/abouthrtechirecruitexpo/arrowright.png">
   
   <i id="HRNVideoPause" class="fa fa-pause"></i>
   
  <div id="AboutHRTechFadingContentOne">
  
  <div class="SlideContentContainer">
    <img id="HRNCloudLogo" src="img/mainpage/abouthrtechirecruitexpo/hrnlogo.png">
    
    
    <div id="HRTechSlideContainer">

    
          <h2>HR Tech World</h2>
          <h1 class="FontRaleway">The Fastest Growing HR Event in the World!</h1>
          <p>HR Tech World opens in Paris this year. The world's foremost congress & expo for global HR leaders is the largest gathering of its kind on the Future of Work and Technology, playing host to buyers from over 80 countries worldwide enjoying a breath of 16 parallel events over two days. Our growing community has influenced over 40 million employees globally. No other community is having such a powerful impact on shaping the future of work.</p>
     </div>

</div>
              
  <video id="HRNVideoTwo">
    <source src="video/hrtech.ogv" type='video/ogg; codecs="theora, vorbis"'/>
    <source src="video/hrtech.webm" type='video/webm' >
    <source type="video/mp4" src="video/hrtech.mp4">
    Your browser does not support the video tag. I suggest you upgrade your browser. </video>


  </div>
  
  
  <div id="AboutHRTechFadingContentTwo">
    <div class="SlideContentContainer">
  
   <img id="iRecruitLogo" src="img/mainpage/abouthrtechirecruitexpo/irecruitlogo.png">
   <div id="iRecruitSlideContainer">
          <h2>iRecruit</h2>
          <h4 class="FontRaleway">Where the Talent World Meets</h4>
          <p>Connecting talent with opportunity, our 3rd Annual iRecruit Conference collocate’s with HR Tech in 2015. iRecruit is recognized as the World’s best conference on Recruitment & Talent where +800 Global Recruiter & Talent Leaders enjoy unprecedented access to the most exciting, compelling and disruptive characters in the industry. Learn what today's industry leaders are doing to find the right people and what trends are shaping their future plans. </p>
    </div>

  </div>
  
  <video id="HRNVideo" style="display:none">
    <source src="video/irecruit.ogv" type='video/ogg; codecs="theora, vorbis"'/>
    <source src="video/irecruit.webm" type='video/webm' >
    <source type="video/mp4" src="video/irecruit.mp4">
    Your browser does not support the video tag. I suggest you upgrade your browser. </video>
  
</div>
  
  
  <div id="AboutHRTechFadingContentThree">
  
   <div class="SlideContentContainer"> 
  
    <img id="disruptHRLogo" src="img/mainpage/abouthrtechirecruitexpo/disrupthrlogo.png">
    <div id="disruptHRSlideContainer">
              <h2>disruptHR</h2>
              <h4 class="FontRaleway">The Network Never Stops</h4>
              <p>disruptHR is the evolution of 3 years of our successful startup competition and this year our new standing exhibition and pitching stage. </p>
              <p>The disruptHR Zone provides an environment where startups have access to globally acknowledged venture capitalists, market analysts, international media and industry influencers.  disruptHR enjoys a track history of success including TalentBin our Winner 2012 was acquired by Monster in 2013, Zao finalists in 2013 were bought by Amris in 2014, Apploi in 2014 went on to raise $7m in series A funding this year. Our success rate in finding successful startups is unparralled (8 out of 10 startups fail!)</p>
     </div>
  </div>   
     
     
  <video id="HRNVideoThree" style="display:none">
    <source src="video/bruno.ogv" type='video/ogg; codecs="theora, vorbis"'/>
    <source src="video/bruno.webm" type='video/webm' >
    <source type="video/mp4" src="video/bruno.mp4">
    <div id="media-controls"></div>
    Your browser does not support the video tag. I suggest you upgrade your browser. </video>
     
  </div>
  
  
  <div id="AboutButtonContainer"> <span onClick="_gaq.push(['_trackEvent', 'AboutSection', 'ModalOpen', 'Register']);" data-reveal-id="Get2For1TicketsModal">
    <button id="TwoForOnebutton" class="FontRaleway">GET 2 FOR 1 TICKETS</button>
    </span>
    
  </div>
  <div id="AboutButtonContainerTwo"> <span onClick="_gaq.push(['_trackEvent', 'AboutSection', 'ModalOpen', 'DisruptHRModal']);" data-reveal-id="DisruptHRModal">
    <button id="DisruptHRbutton" class="FontRaleway">LEARN MORE</button>
    </span> </div>
  <div id="FadingControlls">
    <div id="FadeOne" class="ActiveFadingControll"></div>
    <div id="FadeTwo"></div>
    <div id="FadeThree"></div>
  </div>

</section>
<!-- END About HR Tech / iRecruit --> 

<!-- Speakers --> 
<a id="SpeakersSection"></a>
<section id="Speakers">
  <h2 class="BlueText">SPEAKERS</h2>
  <div id="SpeakersContainer">
    <ul>
      <li id="SpeakersBransonR">
        <div class="SpeakersImageContainer"> <img class="Square" alt="Richard Branson, Virgin Group" src="img/mainpage/speakers/speakers_richard_branson.jpg" title="<h3 class='SpeakerName'>Sir Richard Branson</h3><p class='SpeakerCompany'>Virgin Group</p><p class='SpeakerInfo'>Sir Richard Branson is Founder of the Virgin Group. Virgin is one of the world's most irresistible brands and has expanded into many diverse sectors from travel to telecommunications, health to financial services, and music to leisure.</p><p class='SpeakerHoverLinks'><a title='https://twitter.com/richardbranson' target='_blank' href='https://twitter.com/richardbranson'><i class='fa fa-twitter TwitterColor'></i></a><a title='Virgin Group' target='_blank' href='http://www.virgin.com/'><i class='fa fa-link TwitterColor'></i></a></p>" /></div>
      </li>
      <li id="SpeakersHumphreyA">
        <div class="SpeakersImageContainer"> <img class="Square" alt="Ambrosia Humphrey, Hootsuite" src="img/mainpage/speakers/speakers_ambrosia_humphrey.jpg" title="<h3 class='SpeakerName'>Ambrosia Humphrey</h3><p class='SpeakerCompany'>Hootsuite</p><p class='SpeakerInfo'>Ambrosia is the VP of Talent at Hootsuite. Since 2011 she’s spearheaded the company’s hypergrowth, bringing its employees from 20 to over 500—in under 3 years. She’s passionate about empowering others in her field to effectively align technology with their objectives, their people and their culture.
</p><p class='SpeakerHoverLinks'><a title='https://twitter.com/hambrody' target='_blank' href='https://twitter.com/hambrody'><i class='fa fa-twitter TwitterColor'></i></a><a title='Hootsuite' target='_blank' href='https://hootsuite.com/'><i class='fa fa-link TwitterColor'></i></a></p>" /> </div>
      </li>
      <li id="SpeakersShingD">
        <div class="SpeakersImageContainer"> <img class="Square" alt="David Shing, AOL" src="img/mainpage/speakers/speakers_david_shing.jpg" title="<h3 class='SpeakerName'>David Shing</h3><p class='SpeakerCompany'>AOL</p><p class='SpeakerInfo'>David Shing is AOL’s Digital Prophet. He spends most of his time watching the future take shape across the vast online landscape. The rest he spends talking to people about where things are headed and how to get the most out of it. He identifies opportunities for AOL and works with marketing teams to develop creative brand engagement.</p><p class='SpeakerHoverLinks'><a title='https://twitter.com/shingy' target='_blank' href='https://twitter.com/shingy'><i class='fa fa-twitter TwitterColor'></i></a><a title='www.shingy.com' target='_blank' href='http://www.shingy.com/'><i class='fa fa-link TwitterColor'></i></a></p>" /></div>
      </li>
      <li id="SpeakersRussoL">
        <div class="SpeakersImageContainer"> <img class="Square" alt="Lori Russo, Tripadvisor" src="img/mainpage/speakers/speakers_lori_russo.jpg" title="<h3 class='SpeakerName'>Lori Russo</h3><p class='SpeakerCompany'>Tripadvisor</p><p class='SpeakerInfo'>Lori Russo’s background is in marketing and adverstising and prior to her appointment as Head of Global Talent Acquisition at Tripadvisor Lori was Director of Advertising Solutions.  Having spent her career in marketing Lori brings a new perspective to the world of talent acquisition.</p><p class='SpeakerHoverLinks'><a title='https://twitter.com/TheLoriRusso' target='_blank' href='https://twitter.com/TheLoriRusso'><i class='fa fa-twitter TwitterColor'></i></a><a title='Tripadvisor' target='_blank' href='http://www.tripadvisor.com/'><i class='fa fa-link TwitterColor'></i></a></p>" /></div>
      </li>
      <li id="SpeakersBersinJ">
        <div class="SpeakersImageContainer"> <img class="Square" alt="Josh Bersin, Bersin by Deloitte" src="img/mainpage/speakers/speakers_josh_bersin.jpg" title="<h3 class='SpeakerName'>Josh Bersin</h3><p class='SpeakerCompany'>Bersin by Deloitte</p><p class='SpeakerInfo'>Listed in the Top 100 Influencers in HR globally and the Top 25 Influencers in Talent Management, Josh Bersin has made Bersin by Deloitte the “go to” source for learning and HR decision makers seeking product and market data, insight on trends, and expert advice on enterprise learning and talent management. 
</p><p class='SpeakerHoverLinks'><a title='https://twitter.com/josh_bersin' href='https://twitter.com/josh_bersin'><i class='fa fa-twitter TwitterColor'></i></a><a title='http://home.bersin.com/' href='http://home.bersin.com/' target='_blank'><i class='fa fa-link TwitterColor'></i></a></p>" /></div>
      </li>
      <li id="SpeakersMaloneyM">
        <div class="SpeakersImageContainer"> <img class="Square" alt="Mary Moloney, CoderDojo" src="img/mainpage/speakers/speakers_mary_moloney.jpg" title="<h3 class='SpeakerName'>Mary Moloney</h3><p class='SpeakerCompany'>CoderDojo</p><p class='SpeakerInfo'>In 2014, Mary was awarded as runner up CEO of the Year in the Image Business Awards & as one of the top 100 Women in STEM by Silicon Republic. CoderDojo currently operates 550 free of charge coding clubs in 56 countries globally, reaching approximately 35,000 kids & young people aged 7 to 17 on a weekly basis.
</p><p class='SpeakerHoverLinks'><a title='https://twitter.com/marydunph' href='https://twitter.com/marydunph' target='_blank'><i class='fa fa-twitter TwitterColor'></i></a><a title='Coderdojo' href='https://coderdojo.com/' target='_blank'><i class='fa fa-link TwitterColor'></i></a></p>" /></div>
      </li>
      <li id="SpeakersTernynckJ">
        <div class="SpeakersImageContainer"> <img class="Square" alt="Jerome Ternynck, SmartRecruiters" src="img/mainpage/speakers/speakers_jerome_ternynck.jpg" title="<h3 class='SpeakerName'>Jerome Ternynck</h3><p class='SpeakerCompany'>SmartRecruiters</p><p class='SpeakerInfo'>Jerome Ternynck is an entrepreneur with his heart in recruiting and his soul in technology. He is a SaaS evangelist and a strong believer in Open SaaS. Jerome’s passionate for what he does, hates the status quo, and loves innovation.</p><p class='SpeakerHoverLinks'><a title='https://twitter.com/jerometernynck' href='https://twitter.com/jerometernynck'><i class='fa fa-twitter TwitterColor'></i></a><a title='Smartrecruiters' href='https://www.smartrecruiters.com/' target='_blank'><i class='fa fa-link TwitterColor'></i></a></p>" /></div>
      </li>
      <li id="SpeakersNelsonL">
        <div class="SpeakersImageContainer"> <img class="Square" alt="Lisa Nelson, match.com" src="img/mainpage/speakers/speakers_lisa_nelson.jpg" title="<h3 class='SpeakerName'>Lisa Nelson</h3><p class='SpeakerCompany'>match.com</p><p class='SpeakerInfo'>Lisa Nelson is the VP of HR at match.com. Lisa has more than 18 years of experience in the industry, and previously led recruiting teams at Robert Walters, Michael Page International, Arnell Group and IAC.</p><p class='SpeakerHoverLinks'><a title='Match' href='http://www.europe.match.com/' target='_blank'><i class='fa fa-link TwitterColor'></i></a></p>" /></div>
      </li>
    </ul>
    <h3 class="BlueText FontRaleway" id="CallForSpeakers">Call for Speakers is Now Open</h3>
    <span data-reveal-id="BecomeASpeakerModal" onClick="_gaq.push(['_trackEvent', 'FeaturedSection', 'ModalOpen', 'BecomeASpeaker']);">
    <button title="Become a Speaker" class="BlueButton" id="BecomeASpeakerButton">Become a Speaker</button>
    </span> </div>
  <!-- Include and initiate sliphover, the directional hover effect engine --> 
  <script src="vendor/sliphover/jquery.sliphover.js"></script> 
  <script type="text/javascript">
          $(function(){
        
        $('#SpeakersContainer').sliphover({
           
        });
        })
        </script> 
  
  <!--END Speakers --> 
</section>
<!--END Speakers --> 
<!-- Marketing Message Section -->
<section id="MarketingMSG">
  <h2 id="MarketingText">Where else in the world will you find <span>€10 billion</span> of HR and Tech Budgets in the same room?</h2>
</section>
<!--END  Marketing Message Section --> 

<!-- Sponsors --> 
<a id="SponsorsSection"></a>
<section id="Sponsors">
  <h2 class="WhiteText">SPONSORS</h2>
  <h5 class="WhiteText FontRaleway">Diamond</h5>
  <div class="SponsorsWrapper" id="DiamondSponsorsWrapper"> <a title="SuccessFactors" href="http://www.successfactors.com/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'SuccessFactors']);">
    <div id="SF" class="SponsorSquare"></div>
    </a> <a title="Cornerstone" href="http://www.cornerstoneondemand.com/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'Cornerstone']);">
    <div id="CornerStone" class="SponsorSquare"></div>
    </a> <a title="Workday" href="http://www.workday.com/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'Workday']);">
    <div id="Workday" class="SponsorSquare"></div>
    </a> <a title="ADP" href="http://www.adp.com/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'ADP']);">
    <div id="ADP" class="SponsorSquare"></div>
    </a> <a title="CrossKnowledge" href="http://www.crossknowledge.com/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'CrossKnowledge']);">
    <div id="CrossKnowledge" class="SponsorSquare"></div>
    </a> <a title="Infor" href="http://www.infor.com/solutions/hcm/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'Infor']);">
    <div id="Infor" class="SponsorSquare"></div>
    </a> 
    <!--<div id="SpecialSquare" class="SponsorSquare"></div>
    <div class="SponsorSquare EmptySquare"></div>
    <div class="SponsorSquare EmptySquare SquareWithNoBorder"></div>--> 
    
  </div>
  <h5 class="WhiteText FontRaleway">Emerald</h5>
  <div class="SponsorsWrapper"> <a title="AppLearn" href="http://www.applearn.tv/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'AppLearn']);">
    <div id="AppLearn" class="SponsorSquare"></div>
    </a> <a title="Haufe" href="http://www.umantis.com/en/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'Haufe']);">
    <div id="Haufe" class="SponsorSquare"></div>
    </a> <a title="NGA" href="http://www.ngahr.com/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'NGA']);">
    <div id="NGA" class="SponsorSquare"></div>
    </a> <a title="GloboForce" href="http://www.globoforce.com/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'GloboForce']);">
    <div id="GloboForce" class="SponsorSquare"></div>
    </a> <a title="Indeed" href="http://www.indeed.com/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'Indeed']);">
    <div id="Indeed" class="SponsorSquare"></div>
    </a> <a title="Careerbuilder" href="http://www.careerbuilder.com/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'Careerbuilder']);">
    <div id="Careerbuilder" class="SponsorSquare"></div>
    </a> <a title="CEB" href="http://www.executiveboard.com/" target="_blank" onClick="_gaq.push(['_trackEvent', 'SponsorsSection', 'ExternalForward', 'CEB']);">
    <div id="CEB" class="SponsorSquare"></div>
    </a>
    <div class="SponsorSquare EmptySquareSpecial"></div>
  </div>
  <button onClick="window.open('sponsors', '_parent');_gaq.push(['_trackEvent', 'SponsorsSection', 'InternalForward', 'ViewAllSponsors']);" title="View All Sponsors" class="BlueButton" id="ViewAllSponsorsButton">View All Sponsors</button>
</section>
<!--END Sponsors --> 

<!-- Highlights --> 
<a id="HighlightsSection"></a>
<section id="Highlights">
  <h2 class="BlueText">HIGHLIGHTS</h2>
  
  <!-- Twitter Widget Box -->
  <div class="HighlightSmallWrapper" id="TwitterWidgetMainWrapper" >
    <div id="TwitterContainerHeader">#hrtechworld<img src="img/mainpage/highlights/sf-logo.png" alt="Sponsored by: SuccessFactoros"></div>
    <div id="TwitterWidgetHeader">Tweets <a href="https://twitter.com/HRTechWorld" target="_blank"><img alt="twitter-button" src="img/mainpage/highlights/twitter-button.png"></a></div>
    <a  class="twitter-timeline" 
     href="https://twitter.com/hashtag/hrtechworld" data-widget-id="600678375670308864" data-chrome="noheader nofooter noborders tansparent" 
>#hrtechworld Tweets</a> 
    <script><!-- Twitter Widget Code --> 
                    !function(d,s,id){
                        var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                        if(!d.getElementById(id)){
                            js=d.createElement(s);
                            js.id=id;
                            js.src=p+"://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js,fjs);
                        }
                    }
                    (document,"script","twitter-wjs");
                </script> 
  </div>
  <!-- END Twitter Widget Box --> 
  <!-- Video 1 -->
  <div class="HighlightVideo">
    <div class='embed-container'>
      <iframe src='http://www.youtube.com/embed/2ZCgi2L2eNU?rel=0&showinfo=0&controls=1&autohide=1' allowfullscreen></iframe>
    </div>
  </div>
  <!-- END Video 1 --> 
  <!-- HR Tech World Party -->
  <div class="HighlightSmallWrapper DescriptionBox">
    <div class="HighlightBox DescriptionContainer">
      <div class="DescriptionText" id="HRTechWoldPartyText">
        <p class="DescriptionHeadline">Networking by Night<br />
          HR Tech World Party</p>
        <p class="Description">Relax and network with thousands of your colleagues and counterparts in an informal setting.</p>
      </div>
    </div>
    <div class="DescriptionImage"><img class="ResponsiveHighlightImage" src="img/mainpage/highlights/party1.jpg" alt="HR Tech World Party"></div>
  </div>
  <!-- END HR Tech World Party --> 
  <!-- Testimonial -->
  <div class="HighlightSmallWrapper DescriptionBox">
    <div class="DescriptionImage" id="TestimonialMobileImage"><img class="ResponsiveHighlightImage" src="img/mainpage/highlights/testimonial.jpg" alt="TimeWarner Testimonial"></div>
    <div class="HighlightBox DescriptionContainer">
      <div class="TestimonialText"> <img src="img/mainpage/highlights/quote-sign.png" alt="TimeWarner" class="TestimonialQuoteSign">
        <p class="Testimonial">HR Tech World is in my eyes the best conference in the HR space globally.</p>
        <img src="img/mainpage/highlights/timewarner-logo.png" alt="TimeWarner" id="TimeWarnerLogo"> </div>
    </div>
    <div class="DescriptionImage" id="TestimonialDesktopImage"><img class="ResponsiveHighlightImage" src="img/mainpage/highlights/testimonial.jpg" alt="TimeWarner Testimonial"></div>
  </div>
  <!-- END Testimonial --> 
  <!-- Video 2 -->
  <div class="HighlightVideo">
    <div class='embed-container'>
      <iframe src='http://www.youtube.com/embed/CDqH6akVL1Q?rel=0&showinfo=0&controls=1&autohide=1' allowfullscreen></iframe>
    </div>
  </div>
  <!-- END Video 2 --> 
  <!-- Richard Branson - Leadership at 30.000 Feet -->
  <div class="HighlightSmallWrapper DescriptionBox">
    <div class="DescriptionImage"><img class="ResponsiveHighlightImage" src="img/mainpage/highlights/RichardBranson.jpg" alt="Richard Branson"></div>
    <div class="HighlightBox DescriptionContainer">
      <div class="DescriptionText" id="DescriptionTextRichardBranson">
        <p class="DescriptionHeadline">Richard Branson<br>
          Leadership at 30.000 Feet</p>
        <p class="Description">Richard Branson may be known as the world's greatest entrepeneur, but his innovative thinking in the field of travel sets him apart as a true visionary.</p>
      </div>
    </div>
  </div>
  <!-- END Richard Branson - Leadership at 30.000 Feet --> 
  <!-- Highlights: more items -->
  <div id="HighlightsMore"> 
    <!-- Talent Analytics -->
    <div class="HighlightSmallWrapper DescriptionBox">
      <div class="HighlightBox DescriptionContainer">
        <div class="DescriptionText">
          <p class="DescriptionHeadline">A Look at How New Analytics Tools Can Help Solve Workforce Challenges.</p>
          <p class="Description"></p>
        </div>
      </div>
      <div class="DescriptionImage"><img class="ResponsiveHighlightImage" src="img/mainpage/highlights/talent-analytics.jpg" alt="HR Tech Talent Analytics"></div>
    </div>
    <!-- END Talent Analytics --> 
    <!-- Video 3 -->
    <div class="HighlightVideo">
      <div class='embed-container'>
        <iframe src='http://www.youtube.com/embed/cTOyB3KJSuQ?rel=0&showinfo=0&controls=1&autohide=1' allowfullscreen></iframe>
      </div>
    </div>
    <!-- END Video 3 --> 
    <!-- Twitter box 1-again -->
    <div class="HighlightSmallWrapper TwitterBox">
      <div class="TwitterImage"><img class="ResponsiveHighlightImage" src="img/mainpage/highlights/twitter1.jpg" alt="HR Tech Twitter"></div>
      <div class="HighlightBox TwitterTextContainer">
        <div class="TwitterText"> <img class="TwitterIcon" src="img/mainpage/highlights/twitter-icon.png" alt="Twitter">
          <p class="TweetHeadline">@hrtechworld<br>
            <span class="TweetDate FontProximaNova">10 days ago</span></p>
          <p class="TweetTitle FontProximaNova">Achieving change – time for HR to be courageous via<br>
            @hrmagazine</p>
          <a class="TweetLink FontProximaNova" href="http://hubs.ly/y0sN0L0" target="_blank">http://hubs.ly/y0sN0L0</a> </div>
      </div>
    </div>
    <!-- END Twitter box 1-again --> 
    <!-- Product Demo -->
    <div class="HighlightSmallWrapper DescriptionBox">
      <div class="DescriptionImage"><img class="ResponsiveHighlightImage" src="img/mainpage/highlights/product-demo.jpg" alt="HR Tech Product Demo"></div>
      <div class="HighlightBox DescriptionContainer">
        <div class="DescriptionText">
          <p class="DescriptionHeadline">See Technology That's Shaping the Future of Work From the World's Leading Vendors.</p>
          <p class="Description"></p>
        </div>
      </div>
    </div>
    <!-- END Product Demo --> 
    <!-- Video 4 -->
    <div class="HighlightVideo">
      <div class='embed-container'>
        <iframe src='http://www.youtube.com/embed/dGlIEHuH6SA?rel=0&showinfo=0&controls=1&autohide=1' allowfullscreen></iframe>
      </div>
    </div>
    <!-- END Video 4 --> 
    <!-- SAAS and Cloud -->
    <div class="HighlightSmallWrapper DescriptionBox">
      <div class="HighlightBox DescriptionContainer">
        <div class="DescriptionText">
          <p class="DescriptionHeadline">Experiences of HR Solutions Delivered by Senior Enterprise Practitioners.</p>
          <p class="Description"></p>
        </div>
      </div>
      <div class="DescriptionImage"><img class="ResponsiveHighlightImage" src="img/mainpage/highlights/saas.jpg" alt="HR Tech SAAS and Cloud"></div>
    </div>
    <!-- END SAAS and Cloud --> 
  </div>
  <!-- END Highlights: more items -->
  <div style="clear: both;"></div>
  <button title="Load More" onClick="_gaq.push(['_trackEvent', 'Highlights', 'Show', 'LoadMore']);" class="BlueButton" id="HighlightsLoadMoreButton">Load More</button>
  <script type="text/javascript">
$(document).ready(function() {
	$("#HighlightsLoadMoreButton").click(function() {
		$("#HighlightsMore").fadeIn("slow");
		$("#HighlightsLoadMoreButton").fadeOut("slow");
	});
});
</script> 
</section>
<!-- END Highlights --> 
<!-- Venue --> 
<a id="VenueSection"></a>
<section id="Venue">
  <h2 class="WhiteText">VENUE</h2>
  <h5 class="YellowText FontSourceSansPro">Palais de Congrès paris</h5>
  <p class="WhiteText">Combining bold architecture, international renown, a strategic location enjoying ease of access and a wide range of nearby hotel accommodation, this venue has all it takes to be one of the world’s most significant conference centres.</p>
  <a title="Directions" onClick="_gaq.push(['_trackEvent', 'Venue', 'ExternalForward', 'ViewInGoogleMaps']);" id="GetDirections" href="https://www.google.com/maps/place/Le+Palais+des+Congr%C3%A8s+de+Paris/@48.879449,2.283712,17z/data=!3m1!4b1!4m2!3m1!1s0x47e66f8b41cac529:0x3c64b279efb84cbe" target="_blank"><i class="fa fa-map-marker"></i>
  <h6 class="YellowText FontRaleway">VIEW IN GOOGLE MAPS</h6>
  </a> </section>
<!-- END Venue --> 
<!-- Future of Work -->
<section id="FutureOfWork">
  <div id="FutureOfWorkWrapper" class="FontProximaNova">
    <h2 class="BlueText">FUTURE OF WORK</h2>
    <p class="BlueText">Your ticket opens up a door for you to the world of curated dinners, parties and events hosted by the World’s Leading Brands, Tech Companies, Service Providers, Investors and Media.</p>
    <div id="TicketPriceContainer">
      <div class="TicketPrice">
        <h3 id="FutureTicketsTwoForOne">2 FOR 1 TICKETS AVAILABLE</h3>
        <h3><span class="BlueText TicketSpan">€1,190 </span> <br>
          <span class="EachTicket">save </span><span class="EachTicket" id="TicketPastPrice">€1,190</span></h3>
      </div>
      <div style="clear: both;"></div>
    </div>
    <span onClick="_gaq.push(['_trackEvent', 'FutureOfWork', 'ModalOpen', 'Register']);" data-reveal-id="Get2For1TicketsModal">
    <button class="BlueButton">GET 2 FOR 1 TICKETS</button>
    </span> </div>
</section>
<!-- END Future of Work --> 

<!-- FOOTER 
The #WorldCongressTextMobile is visible only on mobile, on desktop it is hidden.
The .WordlCongressText in the TransparentFooter is visible only on tablet and desktop, on mobile it is hidden.
--> 
<a id="GetInTouchSection"></a>
<footer id="GetInTouch">
  <h2 class="FontProximaNova">GET IN TOUCH</h2>
  <div id="GetInTouchWrapper">
    <h2 class="Contact FontProximaNova"><i class="fa fa-phone"></i>+36 1 201 1469</h2>
    <h2 class="Contact FontProximaNova"><i class="fa fa-phone"></i>UK/IE +44 20 34 689 689</h2>
    <h2 class="Contact FontProximaNova"><i class="fa fa-envelope"></i><a href="mailto:hrn@hrneurope.com">hrn@hrneurope.com</a></h2>
    <div id="GetInTouchButtonContainer"> <span onClick="_gaq.push(['_trackEvent', 'Contact', 'ModalOpen', 'DownloadBrochure']);" data-reveal-id="DownloadBrochureModal">
      <button class="FontRaleway" id="DownloadBrochureButton" >Request Brochure</button>
      </span> <span onClick="_gaq.push(['_trackEvent', 'Contact', 'ModalOpen', 'Register']);" data-reveal-id="Get2For1TicketsModal">
      <button class="FontRaleway" id="RegisterTodayButton">Register Today</button>
      </span> </div>
    <div id="FooterSocialIconsContainer"> <a title="Twitter" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'Twitter']);" href="https://twitter.com/hrtechworld" target="_blank">
      <div id="FooterTwitter" class="FooterSocialIcon"></div>
      </a> <a title="Facebook" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'Facebook']);" href="https://www.facebook.com/hrtecheu" target="_blank">
      <div id="FooterFacebook" class="FooterSocialIcon"></div>
      </a> <a title="Linkedin" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'Linkedin']);" href="http://www.linkedin.com/groups/HR-Technology-Europe-Human-Resources-3930182/about" target="_blank">
      <div id="FooterLinkedIn" class="FooterSocialIcon"></div>
      </a> <a title="Slideshare" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'Slideshare']);" href="http://www.slideshare.net/hrtecheurope" target="_blank">
      <div id="FooterSlideShare" class="FooterSocialIcon"></div>
      </a> <a title="Flickr" onClick="_gaq.push(['_trackEvent', 'Footer', 'ExternalForward', 'Flickr']);" href="https://www.flickr.com/photos/hrtecheurope/sets/72157651210562997/" target="_blank">
      <div id="FooterFlickr" class="FooterSocialIcon"></div>
      </a> </div>
  </div>
  <h6 class="FontSourceSansPro" id="WorldCongressTextMobile">HR Tech World Congress</h6>
  <div id="TransparentFooter">
    <h6 class="TransparentFooterText FontSourceSansPro WorldCongressText">HR Tech World Congress</h6>
    <h6 class="TransparentFooterText FontRaleway" id="CopyrightText">Copyright &copy; 2015 HRN Europe. All Rights Reserved.</h6>
    <h6 class="TransparentFooterText FontRaleway" id="PrivacyText">Privacy Policy | Terms and Conditions</h6>
  </div>
</footer>
<!-- END FOOTER --> 

<!-- Go to Top Button --> 
<a href="#" class="GoTopButton">
<div id="GoTopImg"><i class="fa fa-caret-up"></i></div>
</a> 
<!-- END Go to Top Button --> 

<!-- Play Video Modal -->
<div class="reveal-modal" id="PlayVideoModal"  data-reveal> <a class="close-reveal-modal" id="CloseVideoModal" onclick="location.reload()">&#215;</a>
  <style>
.embed-container-modal { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container-modal iframe, .embed-container-modal object, .embed-container-modal embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
</style>
  <div class='embed-container-modal'>
    <iframe id="modal-video-player" src='http://www.youtube.com/embed/2ZCgi2L2eNU'  allowfullscreen></iframe>
  </div>
</div>
<!-- END Play Video Modal --> 

<!-- Get 2 For 1 Tickets Modal -->
<div id="Get2For1TicketsModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>GET 2 FOR 1 TICKETS</h2>
  <p>Thank you for your interest in 2 for 1 tickets. <br>
    Please leave us your details and we'll be in touch with your discount code.</p>
  <!-- BEGINING of : GET 2 FOR 1 TICKETS FORM -->
  
  <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
    <input type=hidden name="oid" value="00DD0000000nwgk">
    <input type=hidden name="retURL" value="http://dev.hrtechcongress.com/index.html#ThankYouModal">
    <input required placeholder="First Name *"  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
    <input required placeholder="Last Name *" id="last_name" maxlength="80" name="last_name" size="20" type="text" />
    <input required placeholder="Email Address *" id="email" maxlength="80" name="email" size="20" type="text" />
    <input required placeholder="Phone Number *" id="phone" maxlength="40" name="phone" size="20" type="text" />
    <input required placeholder="Company *" id="company" maxlength="40" name="company" size="20" type="text" />
    <input required placeholder="Job Title *" id="title" maxlength="40" name="title" size="20" type="text" />
    <select  style="display:none;"   id="lead_source" name="lead_source">
      <option selected="selected" value="HRTechParis2015-2for1">HRTechParis2015-2for1</option>
    </select>
    <input onClick="_gaq.push(['_trackEvent', 'Get2For1TicketsForm ', 'FromSubmission', 'InquirySent']);" class="submitbutton" type="submit" name="submit" value="SEND">
  </form>
  <!-- END of : GET 2 FOR 1 TICKETS FORM --> 
</div>
<!-- END Get 2 For 1 Tickets Modal --> 

<!-- DisruptHR Modal -->
<div id="DisruptHRModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>SEND ME MORE DETAILS ABOUT disruptHR</h2>
  <p>Leave us your details and we'll be in touch with information on disruptHR and how to apply.</p>
  <!-- BEGINING of : DisruptHR FORM -->
  
  <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
    <input type=hidden name="oid" value="00DD0000000nwgk">
    <input type=hidden name="retURL" value="http://hrtechcongress.com/index.html#ThankYouModal">
    <input required placeholder="First Name *"  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
    <input required placeholder="Last Name *" id="last_name" maxlength="80" name="last_name" size="20" type="text" />
    <input required placeholder="Email Address *" id="email" maxlength="80" name="email" size="20" type="text" />
    <input required placeholder="Phone Number *" id="phone" maxlength="40" name="phone" size="20" type="text" />
    <input required placeholder="Company *" id="company" maxlength="40" name="company" size="20" type="text" />
    <input required placeholder="Job Title *" id="title" maxlength="40" name="title" size="20" type="text" />
    <select  style="display:none;"   id="lead_source" name="lead_source">
      <option selected="selected" value="HRTechParis2015-disruptHR">HRTechParis2015-disruptHR</option>
    </select>
    <input onClick="_gaq.push(['_trackEvent', 'DisruptHRForm', 'FromSubmission', 'InquirySent']);" class="submitbutton" type="submit" name="submit" value="SEND">
  </form>
  <!-- END of : DisruptHR FORM --> 
</div>
<!-- END DisruptHR Modal --> 

<!-- Download Brochure Modal -->
<div id="DownloadBrochureModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Download Brochure</h2>
  <p>Thank you for downloading our brochure! Please fill in all the fields below.</p>
  <!-- BEGINING of : DOWNLOAD BROCHURE MODAL FORM -->
  <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
    <input type=hidden name="oid" value="00DD0000000nwgk">
    <input type=hidden name="retURL" value="http://hrtechcongress.com/index.html#ThankYouBrochureModal">
    <input required placeholder="First Name *"  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
    <input required placeholder="Last Name *" id="last_name" maxlength="80" name="last_name" size="20" type="text" />
    <input required placeholder="Email Address *" id="email" maxlength="80" name="email" size="20" type="text" />
    <input required placeholder="Phone Number *" id="phone" maxlength="40" name="phone" size="20" type="text" />
    <input required placeholder="Company *" id="company" maxlength="40" name="company" size="20" type="text" />
    <input required placeholder="Job Title *" id="title" maxlength="40" name="title" size="20" type="text" />
    <select  style="display:none;"   id="lead_source" name="lead_source">
      <option selected="selected" value="HRTechParis2015-DownloadPDF">HRTechParis2015-DownloadPDF</option>
    </select>
    <input onClick="_gaq.push(['_trackEvent', 'DownloadPDFForm', 'FromSubmission', 'InquirySent']);" class="submitbutton" type="submit" name="submit" value="SEND">
  </form>
  <!-- END of : DOWNLOAD BROCHURE MODAL FORM --> 
</div>
<!-- END Download Brochure Modal --> 

<!-- Become a Speaker Modal -->
<div id="BecomeASpeakerModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Call for Speakers</h2>
  <p>HR Tech World is seeking submissions from expert speakers who can offer key insights into areas of impact in HR, management, technology and the future of work.</p>
  <!-- BEGINING of : BECOME A SPEAKER MODAL FORM -->
  <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
    <input type=hidden name="oid" value="00DD0000000nwgk">
    <input type=hidden name="retURL" value="http://hrtechcongress.com/index.html#ThankYouForApplyModal">
    <input required placeholder="First Name *"  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
    <input required placeholder="Last Name *" id="last_name" maxlength="80" name="last_name" size="20" type="text" />
    <input required placeholder="Email Address *" id="email" maxlength="80" name="email" size="20" type="text" />
    <input required placeholder="Phone Number *" id="phone" maxlength="40" name="phone" size="20" type="text" />
    <input required placeholder="Company *" id="company" maxlength="40" name="company" size="20" type="text" />
    <input required placeholder="Job Title *" id="title" maxlength="40" name="title" size="20" type="text" />
    <select  style="display:none;"   id="lead_source" name="lead_source">
      <option selected="selected" value="HRTechParis2015-BecomeASpeaker">HRTechParis2015-BecomeASpeaker</option>
    </select>
    <input onClick="_gaq.push(['_trackEvent', 'BecomeASpeaker', 'FromSubmission', 'InquirySent']);" class="submitbutton" type="submit" name="submit" value="SEND">
  </form>
  <!-- END of : BECOME A SPEAKER MODAL FORM --> 
</div>
<!-- END Become a Speaker Modal --> 

<!-- Thank You Modal -->
<div id="ThankYouModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Thank you!</h2>
  <p>You have successfully applied for 2 for 1 tickets. Thank you.</p>
</div>
<!-- END Thank You Modal --> 

<!-- Thank You Brochure Modal -->
<div id="ThankYouBrochureModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Thank you!</h2>
  <p>You shall receive an email shortly from one of our team.</p>
</div>
<!-- END Thank You Modal --> 

<!-- Thank You For Apply Modal -->
<div id="ThankYouForApplyModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Thank you.</h2>
  <p>Someone from HRN Europe will be in touch regarding your application.</p>
</div>
<!-- END Thank You For Apply Modal --> 

<!-- Named anchor Hashtag script --> 
<script type="text/javascript">
$('a[href*=#]:not([href=#])').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 1000);
    return false;
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