<?php 
namespace HRNParis\main;
use HRNParis\config as config;
include_once('config.php');	
	
class main extends config {
	 


public function speakers() {
	$content = "";
	
		   $mainpage_q = "SELECT sm.speaker_id FROM speakers_mainpage as sm, speakers_mainpage_order as smo WHERE smo.speaker_id=sm.speaker_id ORDER BY smo.order_id ASC";	
					  
		  $mainpage = $this->pdo->prepare($mainpage_q);
		  $mainpage->execute();
		  
			if ($mainpage->rowCount() > 0) {	
				while($main_id = $mainpage->fetch()){ 
	
	
			                    //Name                 Bio         Category              website         image       image alt       speaker_id
		$speaker_q = "SELECT sn.speaker_name, sb.speaker_bio, st.title, scn.company_name, idb.image_url, idb.alt_name, sdc.speaker_id, sdc.speaker_company_id, stag.speaker_tag FROM speakers_name as sn, speakers_bio as sb, speakers_data_connection as sdc, speakers_status as ss, speakers_title as st, speakers_company_name as scn, speakers_company_data_connection as scdc, image_db as idb, image_connection as ic, speakers_tag as stag WHERE sdc.speaker_name_id=sn.id AND sdc.speaker_bio_id=sb.id AND sdc.speaker_id=ss.speaker_id AND ss.speaker_status_id='1' AND ic.entity_type_id='1' AND ic.entity_id=sdc.speaker_id AND idb.id=ic.image_db_id AND sdc.speaker_company_id=scdc.speaker_company_id AND scdc.speaker_company_name_id=scn.id AND sdc.speaker_title_id=st.id AND stag.id=sdc.speaker_tag_id AND sdc.speaker_id = :id";	
		
		//company websited and company logo need to be separate
					
		$speaker = $this->pdo->prepare($speaker_q);
		$speaker->bindValue(':id', $main_id[0], \PDO::PARAM_INT);
		$speaker->execute();

			if ($speaker->rowCount() > 0) {
					while ($data = $speaker->fetch()) {
					
					
					//Logo
					$logo_q = "SELECT idb.image_url, idb.alt_name FROM image_db as idb, image_connection as ic WHERE ic.entity_type_id='3' AND ic.entity_id= :id AND ic.image_db_id=idb.id";	
			
					$logo = $this->pdo->prepare($logo_q);
					$logo->bindValue(':id', $data['speaker_company_id'], \PDO::PARAM_INT);
					$logo->execute();
			
						if ($logo->rowCount() > 0) {
								$CompanyLogo = $logo->fetch();
						} else {
							 $CompanyLogo['image_url'] = '';
							 $CompanyLogo['alt_name'] = '';
						}
								
						  
			         //Website
					 $website_q = "SELECT scw.company_website FROM speakers_company_website as scw, speakers_company_data_connection as scdc WHERE scdc.speaker_company_id= :id AND scdc.speaker_company_website_id=scw.id";	
				
					  //company websited and company logo need to be separate
								  
					  $website = $this->pdo->prepare($website_q);
					  $website->bindValue(':id', $data['speaker_company_id'], \PDO::PARAM_INT);
					  $website->execute();
			  
						  if ($website->rowCount() > 0) {
								  $CompanyWebsite = $website->fetch();
						  }
						  
						  
											//Mainpage bio
					$mpbio_q = "SELECT text FROM speakers_mainpage_bio WHERE speaker_id = :id";	
			
					$mpbio = $this->pdo->prepare($mpbio_q);
					$mpbio->bindValue(':id', $data['speaker_id'], \PDO::PARAM_INT);
					$mpbio->execute();
			
						if ($mpbio->rowCount() > 0) {
								$mpbio_text = $mpbio->fetch();
								
								    $tag = array('<p>'=>'', '</p>'=>'');
                                    $mpbio_text[0] = strtr($mpbio_text[0], $tag);
						} else {
							$mpbio_text[0] = '';
						}	  
								
								
					//Social Links
							//Get the social link types
		$s = 0;
				
			               $social_type_q = "SELECT id, type FROM social_link_types";	
										  
							  $stype = $this->pdo->prepare($social_type_q);
							  $stype->execute();
							  
								if ($stype->rowCount() > 0) {	
									while($link_type = $stype->fetch()){ //facebook
									 
											  $social_q = "SELECT sl.social_link_url FROM social_links as sl, social_links_connection as slc WHERE slc.entity_type_id='1' AND slc.entity_id= :id AND slc.link_id=sl.id AND slc.social_link_type_id= :type ORDER BY slc.date DESC LIMIT 0,1";	
												  
									  $socials = $this->pdo->prepare($social_q);
									  $socials->bindValue(':id', $data['speaker_id'], \PDO::PARAM_INT);
									  $socials->bindValue(':type', $link_type['id'], \PDO::PARAM_INT);
									  $socials->execute();
									  
										if ($socials->rowCount() > 0) {	
											$link = $socials->fetch(); //facebook
											 
											 $Socials[$s] = $link['social_link_url'];
											 $s++;
										}else {
											 $Socials[$s] = '';
											 $s++;
										}
											 
									 
									}//link type fetch ends
								}//if stype row count end
								


      $content .='<li id="Speakers'.$data['speaker_tag'].'">
        <div class="SpeakersImageContainer">
			  <div class="SpeakerOverlay">
	            <h3 class="FontRaleway">'.$data['speaker_name'].'</h3>
		        <h4 class="FontRaleway">'.$data['company_name'].'</h4>
	         </div>
	   <img class="Square" alt="'.$data['speaker_name'].'" src="img/speakers/SpeakerPhotos/'.$data['image_url'].'" title="'; 
		$content .= "<h3 class='SpeakerName'>".$data['speaker_name']."</h3><p class='SpeakerCompany'>".$data['company_name']."</p><p class='SpeakerInfo'>".$mpbio_text[0]."</p><p class='SpeakerHoverLinks'><a title='".$Socials[1]."' target='_blank' href='".$Socials[1]."'><i class='fa fa-twitter TwitterColor'></i></a><a title='".$data['company_name']."' target='_blank' href='".$CompanyWebsite['company_website']."'><i class='fa fa-link TwitterColor'></i></a></p>";
		$content .='" ></div>
      </li>';


					
		}//while fetch data
		
	}//While fetch mainpage 
} // if mainpage isset
/*
      $content .='</ul>
    <h3 class="BlueText FontRaleway" id="CallForSpeakers">Call for Speakers is Now Open</h3>
    <span data-reveal-id="BecomeASpeakerModal" onClick="_gaq.push([';
	
	
	$content .="'_trackEvent', 'FeaturedSection', 'ModalOpen', 'BecomeASpeaker']);";
	
	$content .='">
    <button title="Become a Speaker" class="BlueButton" id="BecomeASpeakerButton">Become a Speaker</button>
    </span> </div>
  <!-- Include and initiate sliphover, the directional hover effect engine --> 
  <script src="vendor/sliphover/jquery.sliphover.js"></script> 
  <script type="text/javascript">
          $(function(){
        
        $("#SpeakersContainer").sliphover({
           
        });
        })
        </script>';
*/

			return $content;		
					
			} else {
				return FALSE;
			}
	
	
	
}
 


}
?>	