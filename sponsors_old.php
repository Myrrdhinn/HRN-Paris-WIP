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
<meta name="developer" content="Developed by: TesseracT - bottyan.tamas@web-developer.hu, Myrrdhinn - balazs.pentek@web-developer.hu">
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


</head>
<body>
<nav>
  <div id="MobileMenuContainer">
    <div id="MobileMenuLogo"></div>
    <div id="MobileMenuButton" onClick='ShowMobileMenu()'></div>

  <div id="MobileNav" class="sidebar">

     <div id="MobileMenuListContainer"> <img id="MobileMenuCloseButton" src="img/menu/mobile-close-button.png" alt="X" onClick='HideMobileMenu()'>
        <ul id="MobileUl">
            <li><a href="http://hrtechcongress.com#AboutSection" onClick='HideMobileMenu()' title="About">About</a></li>
            <li><a href="http://hrtechcongress.com#SpeakersSection" onClick='HideMobileMenu()' title="Speakers">Speakers</a></li>
            <li><a href="http://hrtechcongress.com#SponsorsSection" onClick='HideMobileMenu()' title="Sponsors">Sponsors</a></li>
            <li><a href="http://hrtechcongress.com#HighlightsSection" onClick='HideMobileMenu()' title="Highlights">Highlights</a></li>
            <li><a href="http://hrtechcongress.com#VenueSection" onClick='HideMobileMenu()' title="Venue">Venue</a></li>
            <li><a href="http://hrtechcongress.com#GetInTouchSection" onClick='HideMobileMenu()' title="Get In Touch">Get In Touch</a></li>
            <li><a href="tickets" onClick='HideMobileMenu()' title="Get Tickets"><i class="fa fa-ticket"></i> Get Tickets</a></li>
        </ul>

    <div class="nav-social" style="display:none">
        <a class="ico-fb no-link" target="blank" href="https://www.facebook.com/hrtecheu" title="HR Tech Europe - Facebook"></a>
        <a class="ico-tw no-link" target="blank" href="https://twitter.com/hrtechworld" title="HR Tech World - Twitter"></a>
        <a class="ico-linkedin no-link" target="blank" href="http://www.linkedin.com/groups/HR-Technology-Europe-Human-Resources-3930182/about" title="HR Tech Europe - LinkedIn"></a>
        <a class="ico-flickr no-link" target="blank" href="https://www.flickr.com/photos/hrtecheurope/sets/72157648919068765/" title="HR Tech Europe - Flickr"></a>
        <a class="ico-slideshare no-link" target="blank" href="http://www.slideshare.net/hrtecheurope" title="HR Tech Europe - SlideShare"></a>
        
    </div>
</div>
</div>
  </div>
  </nav>

  <!-- MAIN MENU 
This section is controlled by the menu.css 
-->
  
  <nav id="SecondStateMainMenuContainer" class="FixedTop">
    <div id="MenuContainer"><a href="http://hrtechcongress.com" title="HR Tech World"><img src="img/menu/horizontallogo.png" alt="HR Tech Congress Logo"  id="HorizontalLogo"/></a><a class="MainMenuItem" href="http://hrtechcongress.com#AboutSection" title="About">ABOUT</a><a class="MainMenuItem"  href="http://hrtechcongress.com#SpeakersSection" title="Speakers">SPEAKERS</a><a class="MainMenuItem"  href="http://hrtechcongress.com#SponsorsSection" title="Sponsors">SPONSORS</a>
      <a class="MainMenuItem"  href="http://hrtechcongress.com#HighlightsSection" title="Highlights">HIGHLIGHTS</a><a class="MainMenuItem"  href="http://hrtechcongress.com#VenueSection" title="Venue">VENUE</a><a class="MainMenuItem"  href="http://hrtechcongress.com#GetInTouchSection" title="Get in Touch">GET IN TOUCH</a> <a class="MainMenuItem" href="#" id="GetTickets" title="Get Tickets"><i class="fa fa-ticket"></i>GET TICKETS</a></div>
  </nav>
  
  <!-- END MAIN MENU -->
<!-- Header -->
<header>
  <h1>SPONSORS</h1>
  <p class="FontProximaNova">Our sponsors comprise a Who's Who of HR software leaders who will showcase the best solutions, services and products on the market.</p>
  <a href="PDF/2015_HR_Tech_World_Congress_Paris_Sponsorship.pdf" target="_blank" title="Download Sponsorship Guide">Download Sponsorship Guide</a>
  <a href="#" data-reveal-id="BecomeASponsorModal" title="Become a Sponsor"><button>Become a Sponsor</button></a>
</header>
<!-- END Header -->
<!-- Sponsors -->
<section id="Sponsors">
	<!-- Sponsors List -->
	<div id="SponsorsInnerContainer">
    	<div id="WhosWhoAndDiamondImageContainer">
            <img id="PoweredByWhosWhoLogo" src="img/sponsors/powered-by-whos-who.png" alt="Powered by Who's Who in HR">
            <img id="DiamondSponsorHeadline" src="img/sponsors/diamond-headline.png" alt="Diamond">
            <img id="DiamondSponsorHeadlineTablet" src="img/sponsors/diamond-headline-tablet.png" alt="Diamond">
            <img id="DiamondSponsorHeadlineMobile" src="img/sponsors/diamond-headline-mobile.png" alt="Diamond">
    	</div>
        <h2 class="InvisibleHeadline FontRaleway">Diamond</h2>
<?php 
  $sponsor_data = $sponsors->sponsors(1);
  $content ='';
  /*
  						$data[$i][0] = $sponsors['sponsor_id'];
						$data[$i][1] = $sponsors['sponsor_name'];
						$data[$i][2] = $sponsors['sponsor_bio'];
						$data[$i][3] = $sponsors['category_id'];
						$data[$i][4] = $sponsors['sponsor_link_url'];
						$data[$i][5] = $sponsors['image_url'];
						$data[$i][6] = $sponsors['alt_name'];
						
						10-14 social links
  
  
  */
  
  
  foreach ($sponsor_data as $data) {
	$content .=  '
	        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/'.$data[5].');"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="'.$data[4].'" target="_blank" title="'.$data[1].'">'.$data[1].' <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">'.$data[2].'</p>
                
                <div class="SponsorSocialIcons">';
				if ($data[10] !='') {
					$content .= '<a href="'.$data[10].'" target="_blank" title="'.$data[1].' - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>';
				}
				
				if ($data[11] !='') {
					$content .= '<a href="'.$data[11].'" target="_blank" title="'.$data[1].' - Twitter"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>';
				}
				
				if ($data[13] !='') {
					$content .= '<a href="'.$data[13].'" target="_blank" title="'.$data[1].' - LinkedIn"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>';
				}

					
               $content .='</div>
            </div>
        </div>
        <!-- END Workday --> 
	';
	  
	  
  }	
  echo $content;	
?>
        
        
        <!-- Workday -->



        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/workday-logo.png);"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.workday.com/" target="_blank" title="Workday">Workday <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Workday is a leading provider of enterprise cloud applications for human resources and finance. Founded in 2005, Workday delivers human capital management, financial management, and analytics applications designed for the world’s largest organisations. Hundreds of companies, ranging from medium-sized businesses to Fortune 50 enterprises, have selected Workday. </p>
                
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/workday" target="_blank" title="Workday - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/workday" target="_blank" title="Workday - Twitter"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/groups/Workday-HCM-Group-163962" target="_blank" title="Workday - LinkedIn"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Workday --> 












           
        <!-- Cornerstone -->
        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/cornerstone-logo.png);"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.cornerstoneondemand.co.uk/" target="_blank" title="Cornerstone OnDemand">Cornerstone OnDemand <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Cornerstone OnDemand is a leader in cloud-based applications for talent management. The company’s solutions help organizations recruit, train, manage and connect their employees, empowering their people and increasing workforce productivity. Based in Santa Monica, California, the company’s solutions are used by more than 1700 clients worldwide, spanning over 14.5 million users across 191 countries and 41 languages. For more information about Cornerstone, visit cornerstoneondemand.co.uk.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/csodcommunity" target="_blank" title="Cornerstone OnDemand - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/CSODEMEA" target="_blank" title="Cornerstone OnDemand - Facebook"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/cornerstone-ondemand" target="_blank" title="Cornerstone OnDemand - LinkedIn"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Cornerstone -->
        <!-- SuccessFactors -->
        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/successfactors-logo.png);"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.successfactors.com/" target="_blank" title="SuccessFactors, an SAP company">SuccessFactors <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">SuccessFactors, an SAP company, is the leading provider of cloud-based HCM software that drives business execution, and delivers business alignment, team execution, people performance, and learning management solutions to organizations of all sizes across more than 60 industries. With approximately 27 million cloud application subscribers seats globally, we strive to delight our customers by delivering innovative solutions, content and analytics, process expertise and best practices insights from serving our broad and diverse customer base. Today, we have more than 4,000 customers in more than 177 countries using our application suite in 35 languages. </p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/successfactors" target="_blank" title="SuccessFactors - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/successfactors" target="_blank" title="SuccessFactors - Twitter"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/successfactors" target="_blank" title="SuccessFactors - LinkedIn"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END SuccessFactors -->                    
        <!-- ADP -->
        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/adp-logo.png);"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.adp.com/" target="_blank" title="ADP">ADP <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">From recruitment to retirement, ADP offers a comprehensive range of integrated Human Capital Management solutions and unparalleled global insights that allow you to unlock the potential of your business. Whether your company is large or small, domestic or international, ADP’s easy-to-use cloud-based human resource, payroll, time, talent management, tax and benefits administration solutions can help you comply with regulatory and legislative changes, such as the U.S. Affordable Care Act (ACA). You can count on ADP’s innovative technology and service excellence so you can simplify complexity, drive smarter decisions and achieve tangible outcomes.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/AutomaticDataProcessing" target="_blank" title="ADP - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/adp" target="_blank" title="ADP - Twitter"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/adp" title="ADP - LinkedIn" target="_blank"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END ADP --> 
        <!-- CrossKnowledge -->
        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/crossknowledge-logo.png);"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.crossknowledge.com/en_GB/elearning/home.html" target="_blank" title="CrossKnowledge">CrossKnowledge <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">CrossKnowledge is one of the world’s leading distance learning providers. Our solutions are full SaaS, cloud-based and built on exclusive learning technologies. We create our content with some of the most sought after experts in the world, and provide a range of accompanying services. CrossKnowledge’s solutions enable fast workforce empowerment and global strategic alignment, guaranteeing a unique learning experience for the individual and a real return on investment for the organization.<br>
<br>
CrossKnowledge operates worldwide and serves companies including global enterprises, mid-sized companies and the education sector spanning more than 4 million users. </p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/CrossKnowledge" target="_blank" title="CrossKnowledge - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/CrossKnowledge" target="_blank" title="CrossKnowledge - Twitter"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="https://www.linkedin.com/company/crossknowledge" target="_blank" title="CrossKnowledge - LinkedIn"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END CrossKnowledge -->
        
        <img id="EmeraldSponsorHeadline" src="img/sponsors/emerald-headline.png" alt="Emerald"> 
        <img id="EmeraldSponsorHeadlineTablet" src="img/sponsors/emerald-headline-tablet.png" alt="Emerald">
        <img id="EmeraldSponsorHeadlineMobile" src="img/sponsors/emerald-headline-mobile.png" alt="Emerald">  
        <!-- AppLearn -->
        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/applearn-logo.png);"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.applearn.tv/" target="_blank" title="AppLearn">AppLearn <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">AppLearn are at the forefront of innovation in the Talent Management adoption and engagement space. We provide products & services which enable organisations to impact their Talent and Performance software effectiveness by measuring, communicating and aligning their entire workforce towards a single goal: Success. AppLearn’s Product Developers understand the challenges involved in rolling out new employee review projects. Our products are constantly evolving alongside the innovative vendor software market to ensure your employees are fully equipped to adopt, engage with and complete their Talent & Performance processes superlatively.</p>
                <div class="SponsorSocialIcons" style="display: none;">
                	<a href="#" target="_blank" title="AppLearn - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="#" target="_blank" title="AppLearn - Twitter"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="#" target="_blank" title="AppLearn - LinkedIn"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END AppLearn --> 
        <!-- Haufe. -->
        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/haufe-logo.png);"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.umantis.com/en/" target="_blank" title="Haufe.">Haufe. <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Haufe, with umantis Talent Management, is the market leader in the German-speaking region and one of Europe's leading suppliers of talent management software. umantis Talent Management is used in by 1,000 companies with more than 4 million users, in 120 countries and 60 languages.<br>
<br>
With a belief that it is employees that run businesses, the Haufe brand stands for a European, culturally aware personnel management style that places trust in employees and empowers them. Haufe’s web-based solutions provide the support companies need to create a transparent culture in which knowledge is shared with speed and without complexity, and in which all those concerned are integrated into HR processes. </p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/ilovemyjob.initiative?ref=hl" target="_blank" title="Haufe. - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/umantis" target="_blank" title="Haufe. - Twitter"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="#" target="_blank" title="Haufe. - LinkedIn"><div class="SponsorSocialIcon SponsorLinkedinIcon" style="display: none;"></div></a>
                </div>
            </div>
        </div>
        <!-- END Haufe. -->  
        <!-- NGA -->
        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/nga-logo.png);"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.ngahr.com/" target="_blank" title="NGA Human Resources">NGA Human Resources <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">NGA Human Resources is a leading global Human Resources (HR) services provider offering innovative HR business solutions through HR Technology, HR Outsourcing (HRO/HR BPO), and HR Consulting. We focus on improving the quality and optimizing the cost of HR service delivery, resulting in superior business agility.<br>
<br>
We help HR executives optimize their HR service delivery through smarter process and more efficient technology, supporting key HR areas like workforce administration, multi-country payroll, recruitment, learning, and any talent management process.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/NorthgateArinso" target="_blank" title="NGA Human Resources - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/NorthgateArinso" target="_blank" title="NGA Human Resources - Twitter"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/northgatearinso_4366" target="_blank" title="NGA Human Resources - LinkedIn"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END NGA -->  
        <!-- Globoforce -->
        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/globoforce-logo.png);"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.globoforce.com/" target="_blank" title="Globoforce">Globoforce <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">Globoforce is the world’s leading provider of social recognition solutions, redefining how companies understand, manage, and motivate their employees. Innovative companies around the world use Globoforce’s cloud-based social recognition software to reveal the true performance and influence of every employee and strengthen company culture. With Globoforce, HR and business leaders can take a strategic approach to recognition programs that result in measurable benefits to the bottom line driven by increases in employee engagement, retention, and productivity.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/Globoforce" target="_blank" title="Globoforce - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/Globoforce" target="_blank" title="Globoforce - Twitter"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="http://www.linkedin.com/company/globoforce" target="_blank" title="Globoforce - LinkedIn"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END Globoforce --> 
        <!-- Indeed -->
        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/indeed-logo.png);"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.indeed.com/" target="_blank" title="Indeed">Indeed <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">As the world's #1 job site, with over 150 million unique visitors every month from over 50 different countries, Indeed has become the catalyst for putting the world to work. Indeed is intensely passionate about delivering the right fit for every hire. Indeed helps companies of all sizes hire the best talent and offers the best opportunity for job seekers to get hired.</p>
                <div class="SponsorSocialIcons">
                	<a href="#" target="_blank" title="Indeed - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon" style="display: none;"></div></a>
                    <a href="https://twitter.com/indeed" target="_blank" title="Indeed - Twitter"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="#" target="_blank" title="Indeed - LinkedIn"><div class="SponsorSocialIcon SponsorLinkedinIcon" style="display: none;"></div></a>
                </div>
            </div>
        </div>
        <!-- END Indeed --> 
        <!-- CareerBuilder -->
        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/careerbuilder-logo.png);"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://hiring.careerbuilder.co.uk" target="_blank" title="CareerBuilder">CareerBuilder <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription">CareerBuilder1 is more than an ATS. It's a seamless pre-hire recruitment platform that simplifies the recruitment process – leaving you in charge of just one thing: choosing suitable candidates.<br>
<br>
CareerBuilder1 combines the power of a Premium CareerSite, Candidate Management Software, Broadbean Multi-posting, and CareerBuilder in an elegant, user-friendly, on-line interface.<br>
<br>
CareerBuilder1 gives you the insight you need about your candidate attraction strategy and your internal recruitment process, in one simple platform.</p>
                <div class="SponsorSocialIcons">
                	<a href="https://www.facebook.com/careerbuilder.co.uk" target="_blank" title="CareerBuilder - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="https://twitter.com/CareerBuilderUK" target="_blank" title="CareerBuilder - Twitter"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="#" target="_blank" title="CareerBuilder - LinkedIn"><div class="SponsorSocialIcon SponsorLinkedinIcon" style="display: none;"></div></a>
                </div>
            </div>
        </div>
        <!-- END CareerBuilder --> 
        <!-- CEB -->
        <div class="Sponsor">
        	<div class="SponsorLogo" style="background-image: url(img/sponsors/ceb-logo.png);"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="http://www.executiveboard.com" target="_blank" title="CEB">CEB <i class="fa fa-external-link"></i></a></h2>
                <p class="SponsorDescription"></p>
                <div class="SponsorSocialIcons" style="display: none;">
                	<a href="#" target="_blank" title="CEB - Facebook"><div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>
                    <a href="#" target="_blank" title="CEB - Twitter"><div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>
                    <a href="#" target="_blank" title="CEB - LinkedIn"><div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>
                </div>
            </div>
        </div>
        <!-- END CareerBuilder -->                                              
                                                     
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
      <a href="#" data-reveal-id="DownloadBrochureModal" title="Download Brochure"><button class="BlueButton FontRaleway" id="DownloadBrochureButton" >Download Brochure</button></a>
    </div>
   </div>
   <div id="FooterRightWrapper">
        <form>
        	<h1>SIGN UP FOR NEWSLETTER</h1>
        	<input type="text"><input type="submit" value="SEND">
        </form>
        <div id="FooterSocialIconsContainer"> <a href="https://twitter.com/hrtechworld" target="_blank" title="HR Tech World - Twitter" >
          <div id="FooterTwitter" class="FooterSocialIcon"></div>
          </a> <a href="https://www.facebook.com/hrtecheu" target="_blank" title="HR Tech Europe - Facebook">
          <div id="FooterFacebook" class="FooterSocialIcon"></div>
          </a> <a href="http://www.linkedin.com/groups/HR-Technology-Europe-Human-Resources-3930182/about" target="_blank" title="HR Tech Europe - LinkedIn">
          <div id="FooterLinkedIn" class="FooterSocialIcon"></div>
          </a> <a href="http://www.slideshare.net/hrtecheurope" target="_blank" title="HR Tech Europe - SlideShare">
          <div id="FooterSlideShare" class="FooterSocialIcon"></div>
          </a> <a href="https://www.flickr.com/photos/hrtecheurope/sets/72157648919068765/" target="_blank" title="HR Tech Europe - Flickr">
          <div id="FooterFlickr" class="FooterSocialIcon"></div>
          </a> 
       </div>
    </div>
 </div>


 <div id="TransparentFooter">
 	<div id="TransparentFooterInnerContainer">
        <div id="TransparentFooterImage"><img src="img/tickets/footer-hrtech-logo.png" alt="HR Tech World Congress logo"></div>
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
  <p>The Paris HR Tech Congress brochure is almost ready. Please leave your details and we'll email it to you as soon as it's available.</p>
  <!-- BEGINING of : DOWNLOAD BROCHURE MODAL FORM -->
  <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
    <input type=hidden name="oid" value="00DD0000000nwgk">
    <!--<input type=hidden name="retURL" value="http://london.hrtecheurope.com/PDF/2015_HR_Tech_London_Delegates.pdf">-->

      <input required placeholder="First Name *"  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
      <input required placeholder="Last Name *" id="last_name" maxlength="80" name="last_name" size="20" type="text" />

        <input required placeholder="Email Address *" id="email" maxlength="80" name="email" size="20" type="text" />
        <input required placeholder="Phone Number *" id="phone" maxlength="40" name="phone" size="20" type="text" />
        <input required placeholder="Company *" id="company" maxlength="40" name="company" size="20" type="text" />
        <input required placeholder="Job Title *" id="title" maxlength="40" name="title" size="20" type="text" />
        <select  style="display:none;"   id="lead_source" name="lead_source" placeholder="Lead Source">
          <option selected="selected" value="HRTechParis2015-DownloadPDF">HRTechParis2015-DownloadPDF</option>
        </select>
        <input onClick="_gaq.push(['_trackEvent', 'DownloadPDFForm ', 'FromSubmission', 'InquirySent']);" class="submitbutton" type="submit" name="submit" value="SEND">
  </form>
  <!-- END of : DOWNLOAD BROCHURE MODAL FORM -->
</div>
<!-- END Download Brochure Modal -->

<!-- Become a Sponsor Modal -->
<div id="BecomeASponsorModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Become a Sponsor</h2>
  <!-- BEGINING of : BECOME A SPONSOR MODAL FORM -->
  <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
    <input type=hidden name="oid" value="00DD0000000nwgk">
    <!--<input type=hidden name="retURL" value="http://london.hrtecheurope.com/PDF/2015_HR_Tech_London_Delegates.pdf">-->

      <input required placeholder="First Name *"  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
      <input required placeholder="Last Name *" id="last_name" maxlength="80" name="last_name" size="20" type="text" />

        <input required placeholder="Email Address *" id="email" maxlength="80" name="email" size="20" type="text" />
        <input required placeholder="Phone Number *" id="phone" maxlength="40" name="phone" size="20" type="text" />
        <input required placeholder="Company *" id="company" maxlength="40" name="company" size="20" type="text" />
        <input required placeholder="Job Title *" id="title" maxlength="40" name="title" size="20" type="text" />
        <select  style="display:none;"   id="lead_source" name="lead_source" placeholder="Lead Source">
          <option selected="selected" value="HRTechParis2015-BecomeASponsor">HRTechParis2015-BecomeASponsor</option>
        </select>
        <input onClick="_gaq.push(['_trackEvent', 'BecomeASponsorForm ', 'FromSubmission', 'InquirySent']);" class="submitbutton" type="submit" name="submit" value="SEND">
  </form>
  <!-- END of : BECOME A SPONSOR MODAL FORM -->
</div>
<!-- END Become a Sponsor Modal -->

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
