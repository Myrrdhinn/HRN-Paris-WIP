<?php 
namespace HRNParis\sponsors;
use HRNParis\config as config;
use HRNParis\main as main;
include_once('config.php');	
include_once('main.php');
	
class sponsors_main extends config {
	 
	//This is the function what collets all the sponsors to the content multi dimensional array.
  public function sponsors($category) {

          $main = new main\main;	
	  
		$content = '';
	
	//ORDER BY CASE sdc.sponsor_id WHEN 14 THEN 1 END DESC, rand()    :O  ilyenkor a 14-es id-jú lesz mindig az első a többi pedig random utána 
	//ha meg fix a sorrend akkor meg ORDER BY sdc.id DESC
	
		//Get basic date about a sponsors
		                    //Name                 Bio         Category              website         image       image alt       sponsor_id
		$stat_q = "SELECT sn.sponsor_name, sb.sponsor_bio, sc.category_id, sl.sponsor_link_url, idb.image_url, idb.alt_name, sdc.sponsor_id FROM sponsors_name as sn, sponsors_bio as sb, sponsors_data_connection as sdc, sponsors_status as ss, sponsors_category as sc, sponsors_links as sl, image_db as idb, image_connection as ic WHERE sdc.sponsor_name_id=sn.id AND sdc.sponsor_bio_id=sb.id AND sdc.sponsor_id=ss.sponsor_id AND ss.status_id='1' AND sdc.sponsor_link_id=sl.id AND ic.entity_type_id='2' AND ic.entity_id=sdc.sponsor_id AND idb.id=ic.image_db_id AND sdc.sponsor_category_id=sc.id AND sc.category_id= :category  ORDER BY sn.sponsor_name ASC";	
					
		$stat = $this->pdo->prepare($stat_q);
		$stat->bindValue(':category', $category, \PDO::PARAM_INT);
		$stat->execute();

			if ($stat->rowCount() > 0) {
					while($sponsors = $stat->fetch()){

						
		//Get the social link types
		$s = 10;
				
			               $social_type_q = "SELECT id, type FROM social_link_types";	
										  
							  $stype = $this->pdo->prepare($social_type_q);
							  $stype->execute();
							  
								if ($stype->rowCount() > 0) {	
									while($link_type = $stype->fetch()){ //facebook
									 
											  $social_q = "SELECT sl.social_link_url FROM social_links as sl, social_links_connection as slc WHERE slc.entity_type_id='2' AND slc.entity_id= :id AND slc.link_id=sl.id AND slc.social_link_type_id= :type ORDER BY slc.date DESC LIMIT 0,1";	
												  
									  $socials = $this->pdo->prepare($social_q);
									  $socials->bindValue(':id', $sponsors['sponsor_id'], \PDO::PARAM_INT);
									  $socials->bindValue(':type', $link_type['id'], \PDO::PARAM_INT);
									  $socials->execute();
									  
										if ($socials->rowCount() > 0) {	
											$link = $socials->fetch(); //facebook
											 
											 $data[$s] = $link['social_link_url'];
											 $s++;
										}else {
											 $data[$s] = '';
											 $s++;
										}
											 
									 
									}//link type fetch ends
								}//if stype row count end
								
								
				$permission = 0;
				
			 if (isset($_SESSION['user_id'])) {	
				
					  //Get permission
					   $name_q = "SELECT id FROM sponsors_user_connection WHERE sponsors_id = :sponsor AND users_id = :user ORDER BY date DESC LIMIT 0,1";
					   $name = $this->pdo->prepare($name_q);
					   
					   $name->bindValue(':sponsor', $sponsors['sponsor_id'], \PDO::PARAM_INT);
					   $name->bindValue(':user', $_SESSION['user_id'], \PDO::PARAM_INT);
					   
					   $name->execute();
					   
					   if ($name->rowCount() > 0) {
						  $permission = 1;
					   }
				
			 }
								
		if (isset($_SESSION['sponsors_admin']) && ($permission == 1 || isset($_SESSION['super_admin']))) {
		   /*
		  -----------------------------
		   Admin
		  --------------------------------- 
		  */
		  
		  $content .='<!-- '.$sponsors['sponsor_name'].' -->
        <div class="Sponsor">';
		
	
				$content .='<div class="ReturnValue" style="display:none"></div>';
		       $content .='<div class="SystemIcons">';
			   $content .=' <i data-sponsor="'.$sponsors['sponsor_id'].'" class="fa fa-pencil SysIcon SysCategories"></i>';
			  if (isset($_SESSION['super_admin'])) {
				    $content .='<i data-sponsor="'.$sponsors['sponsor_id'].'" class="fa fa-cog SysIcon SysOptions"></i>';
			   }
			          
			        
				    $content .=' <i data-sponsor="'.$sponsors['sponsor_id'].'" class="fa fa-times SysIcon SysDelete"></i>
				 </div>';
		
             $content .='<div class="SponsorLogo dropzone" data-sponsor="'.$sponsors['sponsor_id'].'" data-sname="'.$sponsors['sponsor_name'].'"><img src="../img/sponsors/logos/'.$sponsors['image_url'].'" alt="'.$sponsors['alt_name'].'"></div>
            <div class="SponsorDetails">';
			
                  //Sponsor name			
            	$content .='<h2 class="SponsorName Editable" data-type="NameEdit" data-sponsor="'.$sponsors['sponsor_id'].'">'.$sponsors['sponsor_name'].'</h2>';
				 //Name edit Field
				  $content .='<input class="NameEdit EditField" data-mainclass="SponsorName" style="display:none;" type="text" value="'.$sponsors['sponsor_name'].'">';
				 
				//Sponsor link
				 $content .='<i class="fa fa-external-link Editable" data-type="LinkEdit" data-sponsor="'.$sponsors['sponsor_id'].'"></i>';
				  
				 
				    //Link edit Field
				    $content .='<input class="LinkEdit EditField" data-mainclass="fa-external-link" style="display:none;" type="text" value="'.$sponsors['sponsor_link_url'].'">';
				 
				
				 
				    
					
				//Sponsor Bio	
                $content .='<div class="SponsorDescription" data-type="BioEdit"  data-sponsor="'.$sponsors['sponsor_id'].'">'.$sponsors['sponsor_bio'].'</div>';
				 $content .='<div class="HelpText"  data-sponsor="'.$sponsors['sponsor_id'].'">Press Esc to exit the editor!</div>';
                  //Bio Edit field
				   $content .='<textarea class="BioEdit" data-mainclass="SponsorDescription" style="display:none;">'.$sponsors['sponsor_bio'].'</textarea>';
				
				//Social icons
                 $content .='<div class="SponsorSocialIcons">';
				 

				$content .='<p><span data-entity_id="'.$sponsors['sponsor_id'].'" data-entity_type="2" class="SocialLinkEdit"><i class="fa fa-comment fa-2x"></i>Social Links</span></p>';
				
				$content .=' <select data-entity_id="'.$sponsors['sponsor_id'].'" data-entity_type="2" class="SelectClass" id="Category">';
		  $content .=
		   $main->sponsor_categories();
		$content .='</select>';
				
			
					
                $content .= '</div>
            </div>
        </div>
        <!-- END '.$sponsors['sponsor_name'].' --> ';
		  
			
		} else {
		  /*
		  -----------------------------
		   Normal user
		  --------------------------------- 
		  */
		$content .='<!-- '.$sponsors['sponsor_name'].' -->
        <div class="Sponsor">
            <div class="SponsorLogo"><img src="../img/sponsors/logos/'.$sponsors['image_url'].'" alt="'.$sponsors['alt_name'].'"></div>
            <div class="SponsorDetails">
            	<h2 class="SponsorName"><a class="CompanyLink" href="'.$sponsors['sponsor_link_url'].'" target="_blank" title="'.$sponsors['sponsor_name'].'"';
				
				    $content .=' onClick="_gaq.push([';
				
				    $content .="'_trackEvent', 'SponsorCompanySite', 'ExternalForward', '".$sponsors['sponsor_name']."']);";
				
					$content .='">';
					
					$content .= $sponsors['sponsor_name'].' <i class="fa fa-external-link"></i></a></h2>
                <div class="SponsorDescription">'.$sponsors['sponsor_bio'].'</div>
                
                <div class="SponsorSocialIcons">';
				
				 if ($data[10] !='') {
					$content .= '<a href="'.$data[10].'" target="_blank" title="'.$sponsors['sponsor_name'].' - Facebook"'; 
					
					$content .=' onClick="_gaq.push([';
				
				    $content .="'_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Facebook-".$sponsors['sponsor_name']."']);";
				
					$content .='">';

					$content .='<div class="SponsorSocialIcon SponsorFacebookIcon"></div></a>';
				}
				
				if ($data[11] !='') {
					$content .= '<a href="'.$data[11].'" target="_blank" title="'.$sponsors['sponsor_name'].' - Twitter"'; 
					
					$content .=' onClick="_gaq.push([';
				
				    $content .="'_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Twitter-".$sponsors['sponsor_name']."']);";
				
					$content .='">';
					
					
					$content .= '<div class="SponsorSocialIcon SponsorTwitterIcon"></div></a>';
				}
				
				if ($data[12] !='') {
					$content .= '<a href="'.$data[12].'" target="_blank" title="'.$sponsors['sponsor_name'].' - Linkedin"'; 
					
					$content .=' onClick="_gaq.push([';
				
				    $content .="'_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Linkedin-".$sponsors['sponsor_name']."']);";
				
					$content .='">';
					$content .= '<div class="SponsorSocialIcon SponsorLinkedinIcon"></div></a>';
				}

/*
				if ($data[13] !='') {
					$content .= '<a href="'.$data[13].'" target="_blank" title="'.$sponsors['sponsor_name'].' - Flickr"'; 
					
					$content .=' onClick="_gaq.push([';
				
				    $content .="'_trackEvent', 'SponsorSocialSite', 'ExternalForward', 'Flickr-".$sponsors['sponsor_name']."']);";
				
					$content .='">';
					$content .= '<div class="SponsorSocialIcon SponsorFlickrinIcon"></div></a>';
				}
				*/	
					
                $content .= '</div>
            </div>
        </div>
        <!-- END '.$sponsors['sponsor_name'].' --> ';
		
		}
        	

					}//while sponsors fetch  
			} //if num rows sponsors 
			
		return $content;
}

public function list_sub_filters($main_id) {
	 $content = '';
				$category_q = "SELECT sfsc.id, sfsc.sub_category FROM sponsors_filter_sub_categories as sfsc, sponsors_filter_category_connection as sfcc WHERE sfcc.filter_sub_id=sfsc.id AND sfcc.filter_main_id= :id";	
					
		$category = $this->pdo->prepare($category_q);
		$category->bindValue(':id', $main_id, \PDO::PARAM_INT);
		$category->execute();

			if ($category->rowCount() > 0) {
					while($cat = $category->fetch()){
						$content .='<li data-category="'.$cat['id'].'"><span>'.$cat['sub_category'].'</span></li>';
					}
			}
	
	return $content;
}
 

}
?>	