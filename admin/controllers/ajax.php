<?php 
namespace HRNParis\ajax;
use HRNParis\main as main;
include_once('main.php');	
if(!isset($_SESSION)) {
	session_start();
}

/*///////////// 
Add new Sponsor
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'add_new_sponsor'){
	$the_main = new main\main;
	

    $result = $the_main->save_sponsor();
	if (isset($result)) {
	  $_SESSION['Result'] =  'Success';
	  echo 'Success';	
	}


}// new sponsor


/*///////////// 
Change sponsor image
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'edit_sponsor_image'){
	$the_main = new main\main;
	

    $result = $the_main->file_upload('sponsors/logos/', $_POST['sponsor_name']);
	
	if (isset($result['name'])) {
	    $the_main->pic_upload(2, $_POST['sponsor_id'], $result['name'], $_POST['sponsor_name'].' Logo');
	}


}// new sponsor


/*///////////// 
Edit Sponsor Data
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'edit_sponsor'){
	$the_main = new main\main;
	
   if(isset($_POST['sId']) && isset($_POST['edit_type'])){
	    $result = $the_main->edit_sponsor();
 
  
	if (isset($result)) {
	  $_SESSION['Result'] =  'Success';
	  echo 'Success';	
	}
	
  }

}// new sponsor

/*///////////// 
Sponsor Permission Request
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'sponsor_permission_request'){

	if (isset($_POST['sId'])) {
	  $_SESSION['Permission_Edit'] =  $_POST['sId'];
	}


}// new sponsor


 /*///////////// 
Sponsor Permission Delete
///////////////*/
 

 if(isset($_POST['action']) && $_POST['action'] == 'SponsorPermissionDelete' && isset($_POST['sId']) && isset($_POST['user_id'])){
	$the_main = new main\main;
    $the_main->sponsor_permission_delete($_POST['sId'], $_POST['user_id']);
	

}// delete sponsors permission 


 /*///////////// 
Sponsor Permission Add
///////////////*/
 

 if(isset($_POST['action']) && $_POST['action'] == 'SponsorPermissionAdd' && isset($_POST['sId']) && isset($_POST['user_id'])){
	$the_main = new main\main;
    $the_main->sponsor_permission_add($_POST['sId'], $_POST['user_id']);
	

}// delete sponsors permission 


/*///////////// 
Social Link Edit Request
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'social_link_edit_request'){

	if (isset($_POST['sId'])) {
	  $_SESSION['SocialLinkEntityId'] =  $_POST['sId'];
	  $_SESSION['SocialLinkEntityType'] =  $_POST['type'];
	}


}// new sponsor


 /*///////////// 
Social Link update
///////////////*/
 

 if(isset($_POST['action']) && $_POST['action'] == 'SocialLinkUpdate'){
	$the_main = new main\main;
    //$the_main->sponsor_permission_add($_POST['sId'], $_POST['user_id']);
	
	if(isset($_POST['sLinks'][0]) && isset($_POST['sURLs'][0]) && isset($_POST['sType']) && isset($_POST['sId'])) {
		$i = 0;
		
		foreach ($_POST['sLinks'] as $links){
		   $the_main->social_link_upload($_POST['sType'], $_POST['sId'], $links, $_POST['sURLs'][$i]);
		   $i++;	
		}
		$_SESSION['SocialResponse'] = "Success";
		echo 'Success';
	}
	

}// delete sponsors permission 

/*///////////// 
Sponsor Permission Request
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'sponsor_tag_request'){

	if (isset($_POST['sId'])) {
	  $_SESSION['Filter_Edit'] =  $_POST['sId'];
	}


}// new sponsor

/*///////////// 
Sponsor Permission Request
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'sponsor_tag_save'){
	 $the_main = new main\main;

	if (isset($_POST['sId'])) {
	  $the_main->save_sponsor_tags($_POST['sId'], $_POST['tags']);
	}


}// new sponsor


/*
**************************
Speakers
***************************
*/

/*///////////// 
Add new Sponsor
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'add_new_speaker'){
	$the_main = new main\main;
	

    $result = $the_main->save_speaker();
	if (isset($result)) {
	  $_SESSION['Result'] =  'Success';
	  echo 'Success';	
	}
 


}// new sponsor


/*///////////// 
Change sponsor image
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'add_new_speaker_company_logo'){
	$the_main = new main\main;
	
         if (isset($_SESSION['SpeakerCompanyId'])) {
			 
			    $result = $the_main->file_upload('speakers/CompanyLogos/', $_POST['Name']);
	
				  if (isset($result['name'])) {
					  $the_main->pic_upload(3, $_SESSION['SpeakerCompanyId'], $result['name'], $_POST['Name']);
				  }
			 
			 
		 }
 


}// new sponsor

/*///////////// 
Edit Speaker Data
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'edit_speakers'){
	$the_main = new main\main;
	
   if(isset($_POST['sId']) && isset($_POST['edit_type'])){
	    $result = $the_main->edit_speaker();
 
  
	if (isset($result) && $result != "Deleted") {
	  $_SESSION['Result'] =  'Success';
	  echo 'Success';	
	}
	
	header("Location: ../../speakers");
	
  }


}// new sponsor


/*///////////// 
Change speaker image
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'edit_speaker_image'){
	$the_main = new main\main;
	

    $result = $the_main->file_upload('speakers/SpeakerPhotos/', $_POST['speaker_name']);
	
	if (isset($result['name'])) {
	    $the_main->pic_upload(1, $_POST['speaker_id'], $result['name'], $_POST['speaker_name'].' Picture');
	}


}// new sponsor


/*///////////// 
Change company image
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'edit_company_image'){
	$the_main = new main\main;
	

    $result = $the_main->file_upload('speakers/CompanyLogos/', $_POST['company_name']);
	
	if (isset($result['name'])) {
	    $the_main->pic_upload(3, $_POST['company_id'], $result['name'], $_POST['company_name']);
	}


}// company image

/*///////////// 
Add new Sponsor
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'speaker_order'){
	$the_main = new main\main;
	
          foreach ($_POST['order'] as $order) {
			 $the_main->speaker_order($order[0], $order[1]);
			  
		  }

	/*
	if (isset($result)) {
	  $_SESSION['Result'] =  'Success';
	  echo 'Success';	
	}
 */


}// new sponsor

?>