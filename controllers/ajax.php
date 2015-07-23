<?php 
namespace HRNParis\ajax;
use HRNParis\sponsors as sponsors;
use HRNParis\agenda as agenda;
include_once('sponsors_main.php');
include_once('agenda_main.php');


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

/*///////////// 
Display Sponsor
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'sponsor_display'){
	$the_main = new sponsors\sponsors_main;
	

    $result = $the_main->sponsors2($_POST['tag']);
	if (isset($result)) {
	 
	 echo $result;	
	}


}// new sponsor


/*///////////// 
Display Sponsor
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'get_sponsor'){
	$the_main = new sponsors\sponsors_main;
	

    $result = $the_main->sponsors_modal_first($_POST['sId']);
	if (isset($result)) {
	 
	 echo $result;	
	}


}// new sponsor


/*///////////// 
Display Agenda Modal
///////////////*/


 if(isset($_POST['action']) && $_POST['action'] == 'agenda_session_modal'){
	$the_main = new agenda\agenda_main;
	

    $result = $the_main->agenda_session_modal($_POST['category'], $_POST['day'], $_POST['agenda_id']);
	if (isset($result)) {
	 
	 echo $result;	
	}


}// new sponsor

 if(isset($_POST['action']) && $_POST['action'] == 'change_agenda_category_desktop'){
	$agenda = new agenda\agenda_main;
	
	$_SESSION['Category'] = $_POST['category'];
	
	     //Session table update
	    $data = $agenda->agenda_session($_POST['category'],1);
        $output[0] = $agenda->display_sessions($data); 
		
		$data2 = $agenda->agenda_session($_POST['category'],2);
        $output[1] = $agenda->display_sessions($data2);
		
		
		//Testimonial update
         $blocks = $agenda->block_display($_POST['category'],$_POST['day']);
		 
		 $output[2] = '';

        foreach ($blocks as $elems) {
	     $output[2] .= $agenda->get_block_data($elems[0], $elems[1]);	
      	}
		 

       //Get the new colors and styles
	  $colorData = $agenda->get_category_styles($_POST['category']);
	   
	   $output[3]['category'] = $colorData['category'];
	   $output[3]['color'] = $colorData['color_class'] ; 
	   $output[3]['main_color'] = $colorData['main_color'];
	   $output[3]['second_color'] = $colorData['second_color'] ; 
	   
	    $output[4][0] = $agenda->get_header_text($_POST['category']);

	if (isset($output[0]) && isset($output[1]) && isset($output[3]) && isset($output[4])) {
	   
	    echo json_encode($output);	
	}



}// new sponsor


 if(isset($_POST['action']) && $_POST['action'] == 'change_agenda_category_mobile'){
	$agenda = new agenda\agenda_main;
	
	$_SESSION['Category'] = $_POST['category'];
	
	     //Session table update
	    $data = $agenda->agenda_session($_POST['category'],1);
        $output[0] = $agenda->display_session_mobile($data); 
		
		$data2 = $agenda->agenda_session($_POST['category'],2);
        $output[1] = $agenda->display_session_mobile($data2);
		
		
		//Testimonial update
         $blocks = $agenda->block_display($_POST['category'],1);
		 
		 $output[2] = '';

        foreach ($blocks as $elems) {
	     $output[2] .= $agenda->get_block_data($elems[0], $elems[1]);	
      	}
		 

       //Get the new colors and styles
	  $colorData = $agenda->get_category_styles($_POST['category']);
	   
	   $output[3]['category'] = $colorData['category'];
	   $output[3]['color'] = $colorData['color_class'];
	   $output[3]['main_color'] = $colorData['main_color'];
	   $output[3]['second_color'] = $colorData['second_color'];  
	   
	   $output[4][0] = $agenda->get_header_text($_POST['category']);

	if (isset($output[0]) && isset($output[1]) && isset($output[3]) && isset($output[4])) {
	   
	    echo json_encode($output);	
	}



}// new sponsor




?>