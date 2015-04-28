<?php 
namespace HRNParis\ajax;
use HRNParis\main as main;
include_once('main.php');	
if(!isset($_SESSION)) {
	session_start();
}

/*///////////// 
Save pitch data
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'Save_Pitch'){
	$the_main = new main\main;
    $result = $the_main->save_pitch();
	if (isset($result)) {
	  $_SESSION['Result'] =  'Success';
	  echo 'Success';	
	}

}// save Pitch data


?>