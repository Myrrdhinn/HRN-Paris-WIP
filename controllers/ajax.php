<?php 
namespace HRNParis\ajax;
use HRNParis\sponsors as sponsors;
include_once('sponsors_main.php');


/*///////////// 
Add new Sponsor
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'get_search_data'){
	$the_main = new sponsors\sponsors_main;
	

    $result = $the_main->get_search_data();
	if (isset($result)) {
	 
	 echo $result;	
	}


}// new sponsor



?>