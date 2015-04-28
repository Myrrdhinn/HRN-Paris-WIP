<?php
namespace HRNSales;
if(!isset($_SESSION)) {
	session_start();
}
  $params = explode("/", $_SERVER['REQUEST_URI']);
  
     
if (!isset($params[3]) || $params[3] == '') {
 	include_once('views\mainpage.php');
} else {
	$extensions = array('.php'=>'','.html'=>'');
	$class = strtr($params[3], $extensions);
	if ($class == 'index'){
	   $class = 'mainpage';	
	}
	
	$base_dir = __DIR__ . '/views/';
	$file = $base_dir . str_replace('\\', '/', $class) . '.php';
	$errorPage = $base_dir . str_replace('\\', '/', '404') . '.php';
	
 if (file_exists($file)) {
    require $file;
 } else {
	require $errorPage;
 }
	
}


?>