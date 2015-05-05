<?php 
namespace HRNParis\main;
use HRNParis\config as config;
include_once('config.php');	
if(!isset($_SESSION)) {
	session_start();
}

class main extends config {

	 //strip strings from special characters
 public function clean_str($string) {

    $specialis_karekterek = array('Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ő'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ű'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ő'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ü'=>'u', 'ű'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f');
    $string = strtolower(strtr($string, $specialis_karekterek));
    $string = preg_replace("/[^a-z0-9-_\.]/i", '_', trim($string));
    if (strlen($string) == 0 || $string == '.' || $string == '..') {
    	$string = 'Invalid name';
    }
    return $string;
}



public function save_sponsor() {


	$date = date("j F Y");
	   try {
	      $this->pdo->beginTransaction();
		  
  		  if (isset($_POST['SponsorName'])){
			   //Sponsor
			   $sponsor_q = "INSERT INTO sponsors SET original_name = :name";
			   $sponsor = $this->pdo->prepare($sponsor_q);
			   
			   $sponsor->bindValue(':name', $_POST['SponsorName'], \PDO::PARAM_STR);	
			   
				   
			   $sponsor->execute();
			   $sponsor_id = $this->pdo->lastInsertId(); 
			   
		  } else {
			throw new Exception('Sponsor name is not set in the sponsor upload by:'.$_SESSION['user_id']);  
		  }

           
			

		 //Sponsor Name
		 $name_q = "INSERT INTO sponsors_name SET sponsor_name = :sponsor_name, sponsor_id = :id";
		 $name = $this->pdo->prepare($name_q);
		 
		 $name->bindValue(':sponsor_name', $_POST['SponsorName'], \PDO::PARAM_STR);
		 $name->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
		 $name->execute();

		    $name_id = $this->pdo->lastInsertId();
			
		
		
		if (isset($_POST['SponsorBio'])){	
		
			  //Sponsor Bio	
			   $bio_q = "INSERT INTO sponsors_bio SET sponsor_bio = :bio, sponsor_id = :id";
			   $bio = $this->pdo->prepare($bio_q);
			   
			  
			   $bio->bindValue(':bio', $_POST['SponsorBio'], \PDO::PARAM_STR);
	  
			   $bio->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
			   
			   $bio->execute();
			   
				  $bio_id = $this->pdo->lastInsertId();
			
		  }else {
			throw new Exception('Sponsor Bio is not set in the sponsor upload by:'.$_SESSION['user_id']);  
		  }
		  
		if (isset($_POST['SponsorURL'])){	
		
		        if (strpos($_POST['SponsorURL'], 'http') === FALSE && $_POST['SponsorURL'] != '') {
					$url = 'http://'.$_POST['SponsorURL'];
				} else {
					$url = $_POST['SponsorURL'];
				}
			
				//Sponsor URL	
				 $link_q = "INSERT INTO sponsors_links SET sponsor_link_url = :url, sponsor_id = :id";
				 $link = $this->pdo->prepare($link_q);
				 
				 $link->bindValue(':url', $url, \PDO::PARAM_STR);
				 $link->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
				 
				 $link->execute();
				 
					$link_id = $this->pdo->lastInsertId();
		
		  }else {
			throw new Exception('Sponsor URL is not set in the sponsor upload by:'.$_SESSION['user_id']);  
		  }
		  
		 
		 
		 if (isset($_POST['Category'])){	
		  
						//Sponsor Category
				 $category_q = "INSERT INTO sponsors_category SET category_id = :category, sponsor_id = :id";
				 $category = $this->pdo->prepare($category_q);
				 
				 $category->bindValue(':category', $_POST['Category'], \PDO::PARAM_INT);
				 $category->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
				 
				 $category->execute();
				 
					$category_id = $this->pdo->lastInsertId(); 	
			
			
		 }else {
			throw new Exception('Sponsor Category is not set in the sponsor upload by:'.$_SESSION['user_id']);  
		  }
		  	
			
				//Sponsor Status
		 $status_q = "INSERT INTO sponsors_status SET status_id = '1', sponsor_id = :id";
		 $status = $this->pdo->prepare($status_q);

		 $status->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
		 
		 $status->execute();
		 
		 
		 				//Sponsor edit permission
	             $this->sponsor_permission_add($sponsor_id, $_SESSION['user_id']);
		 
		 		
			 if (isset($sponsor_id) && isset($bio_id) && isset($name_id) && isset($category_id) && isset($link_id)){	
		 
				 //Sponsor date connection
				 $connection_q = "INSERT INTO sponsors_data_connection SET sponsor_id = :id, sponsor_bio_id = :bio, sponsor_name_id = :name, sponsor_category_id = :category, sponsor_link_id = :link";
				 $connection = $this->pdo->prepare($connection_q);
				 
				 $connection->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
				 $connection->bindValue(':bio', $bio_id, \PDO::PARAM_INT);
				 $connection->bindValue(':name', $name_id, \PDO::PARAM_INT);
				 $connection->bindValue(':category', $category_id, \PDO::PARAM_INT);
				 $connection->bindValue(':link', $link_id, \PDO::PARAM_INT);
				 
				 $connection->execute();
				 
					$connection_id = $this->pdo->lastInsertId();

		 }else {
			throw new Exception('Something is not set in the sponsor upload connection query by:'.$_SESSION['user_id']);  
		  }

		 
		 $this->pdo->commit();
		 
		 if (isset($connection_id)){
			 
			 //upload the logo if the database queries are done
			 $file_info = $this->file_upload('sponsors/logos/', $_POST['SponsorName']);
			 
			 //upload the name of the file to the database
			 $this->pic_upload(2, $sponsor_id, $file_info['name'], $_POST['SponsorName'].' Logo');
			 
			 //And now the social links:
			 if(isset($_POST['Facebook']) && $_POST['Facebook'] != ''){
				 $this->social_link_upload(2, $sponsor_id, 1, $_POST['Facebook']);
			 }

			 if(isset($_POST['Twitter']) && $_POST['Twitter'] != ''){
				 $this->social_link_upload(2, $sponsor_id, 2, $_POST['Twitter']);
			 }
			 
			 if(isset($_POST['Linkedin']) && $_POST['Linkedin'] != ''){
				 $this->social_link_upload(2, $sponsor_id, 3, $_POST['Linkedin']);
			 }
			 
			 if(isset($_POST['Flickr']) && $_POST['Flickr'] != ''){
				 $this->social_link_upload(2, $sponsor_id, 4, $_POST['Flickr']);
			 }
			     
			 if(isset($_POST['Google']) && $_POST['Google'] != ''){
				 $this->social_link_upload(2, $sponsor_id, 5, $_POST['Google']);
			 } 
			 
			 
			 
			  return $connection_id;
			
		 } else {
			throw new Exception('Sponsors_data_connection is not uploaded, by:'.$_SESSION['user_id']);   
		 }
		 
		 
		 
		 } catch (\PDOException $e) {
		   $this->log->addError($e->getMessage(), $e->getFile(), $e->getLine());
	          }
			  
			  
		 catch (\Exception $e) {
		   $this->log->addError($e->getMessage(), $e->getFile(), $e->getLine());
	          }

	
}

public function edit_sponsor() {

    $sponsor_id = $_POST['sId'];
	
	$date = date("j F Y");
	   try {
          if($_POST['edit_type'] == 'NameEdit'){
			   //Sponsor Name
			   $name_q = "INSERT INTO sponsors_name SET sponsor_name = :sponsor_name, sponsor_id = :id";
			   $name = $this->pdo->prepare($name_q);
			   
			   $name->bindValue(':sponsor_name', $_POST['new_data'], \PDO::PARAM_STR);
			   $name->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
			   $name->execute();
	  
				  $name_id = $this->pdo->lastInsertId();
		 }
		
		
		if ($_POST['edit_type'] == 'BioEdit'){	
		
			  //Sponsor Bio	
			   $bio_q = "INSERT INTO sponsors_bio SET sponsor_bio = :bio, sponsor_id = :id";
			   $bio = $this->pdo->prepare($bio_q);
			   
			  
			   $bio->bindValue(':bio', $_POST['body'], \PDO::PARAM_STR);
	  
			   $bio->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
			   
			   $bio->execute();
			   
				  $bio_id = $this->pdo->lastInsertId();
			
		  }
		  
		  
		if ($_POST['edit_type'] == 'LinkEdit'){	
		      if (strpos($_POST['new_data'], 'http') === FALSE && $_POST['new_data'] != '') {
					$url = 'http://'.$_POST['new_data'];
				} else {
					$url = $_POST['new_data'];
				}
			
				//Sponsor URL	
				 $link_q = "INSERT INTO sponsors_links SET sponsor_link_url = :url, sponsor_id = :id";
				 $link = $this->pdo->prepare($link_q);
				 
				 $link->bindValue(':url', $url, \PDO::PARAM_STR);
				 $link->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
				 
				 $link->execute();
				 
					$link_id = $this->pdo->lastInsertId();
		
		  }
		  
		 
		 
		 if ($_POST['edit_type'] == 'CategoryEdit'){	
		  
						//Sponsor Category
				 $category_q = "UPDATE sponsors_category SET category_id = :category WHERE sponsor_id = :id";
				 $category = $this->pdo->prepare($category_q);
				 
				 $category->bindValue(':category', $_POST['new_data'], \PDO::PARAM_INT);
				 $category->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
				 
				 $category->execute();
				 
				 						//Get Sponsor Category id
				 $category_q = "SELECT id FROM sponsors_category WHERE sponsor_id = :id";
				 $category = $this->pdo->prepare($category_q);
				 
				 $category->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
				 
				 $category->execute();
				 
				 if ($category->rowCount() > 0) {
					$cat = $category->fetch();
					$category_id = $cat['id'];
				 }
			
			
		 }
		 
		 
		  if ($_POST['edit_type'] == 'StatusEdit'){
			
					  //Sponsor Status
			   $status_q = "UPDATE sponsors_status SET status_id = '0' WHERE sponsor_id = :id";
			   $status = $this->pdo->prepare($status_q);
	  
			   $status->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
			   
			   $status->execute();
		 
		  }
		 		
		if (isset($bio_id) || isset($name_id) || isset($category_id) || isset($link_id)){	
		
		$CurrentPHPTimeStamp = date('Y-m-d G:i:s');
		 
				 //Sponsor date connection
				$connection_q = "UPDATE sponsors_data_connection SET date = :new_date";
				 
				 if (isset($bio_id)) {
					   $connection_q .=", sponsor_bio_id = :bio";
				 }
				 
				 if (isset($name_id)){
					   $connection_q .=", sponsor_name_id = :name";
				 }
				 
				 if (isset($category_id)){
					   $connection_q .=", sponsor_category_id = :category";
				 }
				 
				 if (isset($link_id)){
					   $connection_q .=", sponsor_link_id = :link";
				 }
				 
				 
				$connection_q .= " WHERE sponsor_id = :id";
				
				 $connection = $this->pdo->prepare($connection_q);
				 
				 $connection->bindValue(':new_date', $CurrentPHPTimeStamp, \PDO::PARAM_STR);
				 
				  if (isset($bio_id)) {
				     $connection->bindValue(':bio', $bio_id, \PDO::PARAM_INT);
				  }
				  
				  if (isset($name_id)){
				     $connection->bindValue(':name', $name_id, \PDO::PARAM_INT);
				  }
				  
				  if (isset($category_id)){
				     $connection->bindValue(':category', $category_id, \PDO::PARAM_INT);
				  }
				  
				  if (isset($link_id)){
				     $connection->bindValue(':link', $link_id, \PDO::PARAM_INT);
				  }
				 
				 $connection->bindValue(':id', $sponsor_id, \PDO::PARAM_INT);
				 
				 $connection->execute();
				 
					$connection_id = $sponsor_id;

		  }
		 
		 if (isset($connection_id)){
			 
			 
			  return $connection_id;
			
		 } else {
			throw new Exception('Sponsors_data_connection is not uploaded, by:'.$_SESSION['user_id']);   
		 }
		 
		 
		 
		 } catch (\PDOException $e) {
		   $this->log->addError($e->getMessage(), $e->getFile(), $e->getLine());
	          }
			  
			  
		 catch (\Exception $e) {
		   $this->log->addError($e->getMessage(), $e->getFile(), $e->getLine());
	          }

	
}


public function get_sponsors_permissions($sId) {
		$content = '';
		
						 						//Get Sponsor name
				 $name_q = "SELECT sn.sponsor_name FROM sponsors_name as sn, sponsors_data_connection as sdc WHERE sdc.sponsor_id = :id AND sdc.sponsor_name_id=sn.id";
				 $name = $this->pdo->prepare($name_q);
				 
				 $name->bindValue(':id', $sId, \PDO::PARAM_INT);
				 
				 $name->execute();
				 
				 if ($name->rowCount() > 0) {
					  while($sName = $name->fetch()){
					       $content .= '<h1 data-sponsorid="'.$sId.'" id="SponsorName">'.$sName['sponsor_name'].'</h1>';
				     }
				 }

		
				//Get users
				 $user_q = "SELECT username, id FROM users WHERE rank='11'";
				 $user = $this->pdo->prepare($user_q);
				 
				 $user->bindValue(':id', $sId, \PDO::PARAM_INT);
				 
				 $user->execute();
				 
				 if ($user->rowCount() > 0) {
					  while($data = $user->fetch()){
						  
								//Get permissions
									 $permission_q = "SELECT id FROM sponsors_user_connection WHERE sponsors_id = :sponsor_id AND users_id = :user ORDER BY date DESC LIMIT 0,1";
									 $permission = $this->pdo->prepare($permission_q);
									 
									 $permission->bindValue(':sponsor_id', $sId, \PDO::PARAM_INT);
									 $permission->bindValue(':user', $data['id'], \PDO::PARAM_INT);
									 
									 $permission->execute();
									 
									 if ($permission->rowCount() > 0) {
                                             $content .= '<div class="SponsorPermUser">'.$data['username'].': <span class="AccessGranted">Have Access</span></div><div class="PermissionButton PermRemove" data-sponsorpermission-user="'.$data['id'].'">Remove Permission</div> ';
									 } else {
											$content .= '<div class="SponsorPermUser">'.$data['username'].': <span class="AccessDenied">Do NOT Have Access</span></div><div class="PermissionButton PermAdd" data-sponsorpermission-user="'.$data['id'].'">Grant Permission</div>';
												}
						
	
						  
						  
						   
				     }
				 }

		
	return $content;	
}

    //Sponsor  user Permission delete
///----------------------------------------------
function sponsor_permission_delete($sId, $user_id) {
	
							 						//Get Sponsor name
				 $name_q = "SELECT id FROM sponsors_user_connection WHERE sponsors_id = :sponsor AND users_id = :user ORDER BY date DESC LIMIT 0,1";
				 $name = $this->pdo->prepare($name_q);
				 
				 $name->bindValue(':sponsor', $sId, \PDO::PARAM_INT);
				 $name->bindValue(':user', $user_id, \PDO::PARAM_INT);
				 
				 $name->execute();
				 
				 if ($name->rowCount() > 0) {
					  while($data = $name->fetch()){
									//Delete Permission
							   $delete_q = "DELETE FROM sponsors_user_connection WHERE id = :id";
							   $delete = $this->pdo->prepare($delete_q);
							   
							   $delete->bindValue(':id', $data['id'], \PDO::PARAM_INT);
							   $delete->execute();

						   
				     }
				 }
	
	
}


    //Sponsor  user Permission grant
///----------------------------------------------
function sponsor_permission_add($sId, $user_id) {
	
					//Sponsor URL	
				 $link_q = "INSERT INTO sponsors_user_connection SET sponsors_id = :sponsor, users_id = :user";
				 $link = $this->pdo->prepare($link_q);
				 
				 $link->bindValue(':sponsor', $sId, \PDO::PARAM_INT);
				 $link->bindValue(':user', $user_id, \PDO::PARAM_INT);
				 
				 $link->execute();
	
}
	 



function file_upload($location, $name){
	
	  $storage = new \Upload\Storage\FileSystem($this->basedir.'img/'.$location, true);
	  $file = new \Upload\File('file', $storage);
	  
	  // Optionally you can rename the file on upload
	  $new_filename = $this->clean_str($name);
	  $file->setName($new_filename);
	  
	  // Validate file upload
	  // MimeType List => http://www.webmaster-toolkit.com/mime-types.shtml
	  $file->addValidations(array(
		  // Ensure file is of type "image/png"
		  new \Upload\Validation\Mimetype(array('image/png', 'image/bmp', 'image/jpeg', 'image/pjpeg', 'image/gif')),
	  
		  //You can also add multi mimetype validation
		  //new \Upload\Validation\Mimetype(array('image/png', 'image/gif'))
	  
		  // Ensure file is no larger than 5M (use "B", "K", M", or "G")
		  new \Upload\Validation\Size('5M')
	  ));
	  
	  // Access data about the file that has been uploaded
	  $data = array(
		  'name'       => $file->getNameWithExtension(),
		  'extension'  => $file->getExtension(),
		  'mime'       => $file->getMimetype(),
		  'size'       => $file->getSize(),
		  'md5'        => $file->getMd5(),
		  'dimensions' => $file->getDimensions()
	  );
	  
	  // Try to upload file
	  try {
		  // Success!
		  $file->upload();
		  
		  return $data;
		  
	  } catch (\Exception $e) {
		  // Fail!
		  $errors = $file->getErrors();
		  $this->log->addError($e->getMessage(), $e->getFile(), $e->getLine());
	  }
	
}

public function pic_upload($entity_type, $entity_id, $file, $alt) {
	
								//upload the new image
				 $new_pic_q = "INSERT INTO image_db SET image_url = :url, alt_name = :alt";
				 $new_pic = $this->pdo->prepare($new_pic_q);
				 
				 $new_pic->bindValue(':url', $file, \PDO::PARAM_STR);
				 $new_pic->bindValue(':alt', $alt, \PDO::PARAM_STR);
				 
				 $new_pic->execute();
				 
					$new_pic_id = $this->pdo->lastInsertId(); 	
	
	
		 $picture_q = "SELECT image_db_id FROM image_connection WHERE entity_type_id = :type AND entity_id = :id";
		 $picture = $this->pdo->prepare($picture_q);
		 $picture->bindValue(':type', $entity_type, \PDO::PARAM_INT);
		 $picture->bindValue(':id', $entity_id, \PDO::PARAM_INT);
		 $picture->execute();
		 
				if ($picture->rowCount() > 0) {
					$current_pic = $picture->fetch();
					
					
					//updata the current connection
					 $new_pic_q = "UPDATE image_connection SET image_db_id = :image WHERE entity_type_id = :type AND entity_id = :id";
					 $new_pic = $this->pdo->prepare($new_pic_q);
					 
					 $new_pic->bindValue(':image', $new_pic_id, \PDO::PARAM_INT);
					 $new_pic->bindValue(':type', $entity_type, \PDO::PARAM_INT);
					 $new_pic->bindValue(':id', $entity_id, \PDO::PARAM_INT);
					 
					 $new_pic->execute();

					
				} else {
						//upload a new connection
						 $new_pic_q = "INSERT INTO image_connection SET image_db_id = :image, entity_type_id = :type, entity_id = :id";
						 $new_pic = $this->pdo->prepare($new_pic_q);
						 
						 $new_pic->bindValue(':image', $new_pic_id, \PDO::PARAM_INT);
						 $new_pic->bindValue(':type', $entity_type, \PDO::PARAM_INT);
						 $new_pic->bindValue(':id', $entity_id, \PDO::PARAM_INT);
						 
						 $new_pic->execute();
						 	
					
				}
	

	
}


public function sponsor_categories() {
	$content = '';
	

	  $content = '<option value="" hidden="hidden" selected="selected">Select a Category</option>'; 

	 
		 $cat_q = "SELECT id, name FROM sponsor_categories ORDER BY id ASC";
		 $cat = $this->pdo->prepare($cat_q);
		 $cat->execute();
		 
					if ($cat->rowCount() > 0) {
					while($category = $cat->fetch()){
						

                         $content .= '<option value="'.$category['id'].'">'.$category['name'].'</option>';
						 
						
					} //personal fetch assoc end
				}  //personal num rows if end
				
	return $content;	
}


public function social_link_upload($entity_type, $entity_id, $type_id, $url) {
	
	if($url == -1) {
	  $url = '';	
	}
	
			      if (strpos($url, 'http') === FALSE && $url != '') {
					$link = 'http://'.$url;
				} else {
					$link = $url;
				}
	
								//upload the new image
				 $new_link_q = "INSERT INTO social_links SET social_link_url = :url";
				 $new_link = $this->pdo->prepare($new_link_q);
				 
				 $new_link->bindValue(':url', $link, \PDO::PARAM_STR);
				 
				 $new_link->execute();
				 
					$new_link_id = $this->pdo->lastInsertId(); 	
	
	      //get if there's a social link is uploaded for this entity before
		 $old_link_q = "SELECT id FROM social_links_connection WHERE entity_type_id = :type AND entity_id = :id AND social_link_type_id= :link_type";
		 $old_link = $this->pdo->prepare($old_link_q);
		 $old_link->bindValue(':type', $entity_type, \PDO::PARAM_INT);
		 $old_link->bindValue(':id', $entity_id, \PDO::PARAM_INT);
		 $old_link->bindValue(':link_type', $type_id, \PDO::PARAM_INT);
		 $old_link->execute();
		 
				if ($old_link->rowCount() > 0) {
					$current_pic = $old_link->fetch();
					
					
					//updata the current connection
					 $new_link_q = "UPDATE social_links_connection SET link_id = :link WHERE entity_type_id = :type AND entity_id = :id AND social_link_type_id= :link_type";
					 $new_link = $this->pdo->prepare($new_link_q);
					 
					 $new_link->bindValue(':link', $new_link_id, \PDO::PARAM_INT);
					 $new_link->bindValue(':type', $entity_type, \PDO::PARAM_INT);
					 $new_link->bindValue(':id', $entity_id, \PDO::PARAM_INT);
					 $new_link->bindValue(':link_type', $type_id, \PDO::PARAM_INT);
					 
					 $new_link->execute();

					
				} else {
						//upload a new connection
						 $new_link_q = "INSERT INTO social_links_connection SET link_id = :link, entity_type_id = :type, entity_id = :id, social_link_type_id= :link_type";
						 $new_link = $this->pdo->prepare($new_link_q);
						 
						 $new_link->bindValue(':link', $new_link_id, \PDO::PARAM_INT);
						 $new_link->bindValue(':type', $entity_type, \PDO::PARAM_INT);
						 $new_link->bindValue(':id', $entity_id, \PDO::PARAM_INT);
						 $new_link->bindValue(':link_type', $type_id, \PDO::PARAM_INT);
						 
						 $new_link->execute();
						 	
					
				}
	

	
}

public function get_entity_name($sId, $type_raw) {
	$content = '';
	
	$type = $this->clean_str($type_raw);
	
	$entity_table ='';
	$entity_column = '';
	
	switch ($type) {
               case 2:
						 
					     $name_q = "SELECT sn.id, sn.sponsor_name FROM sponsors_name as sn, sponsors_data_connection as sdc WHERE sdc.sponsor_id = :sponsor AND sdc.sponsor_name_id = sn.id LIMIT 0,1";
						 $name = $this->pdo->prepare($name_q);
						   
						 $name->bindValue(':sponsor', $sId, \PDO::PARAM_INT);
		  
						 $name->execute();
						   
						   if ($name->rowCount() > 0) {
								while($sName = $name->fetch()){
		  
									   $content .= '<h1 data-socialLinkType="'.$type.'" data-socialLinkId="'.$sId.'" id="Name">'.$sName['sponsor_name'].'</h1>';
									 
							   }
						   }
	

      
                  break;
               case 1:

                  break;
               case 2:

                 break;
}
	
	

	

					  
	return $content;
}



public function get_socials($sId, $type_raw) {
		$content = '';
		
	   $type = $this->clean_str($type_raw);
	   
	   $link_q = "SELECT id, type FROM social_link_types ORDER BY id ASC";
	   $link = $this->pdo->prepare($link_q);

	   $link->execute();
		 
		 if ($link->rowCount() > 0) {
			  while($link_type = $link->fetch()){
				  
	   
					   $url_q = "SELECT sl.social_link_url FROM social_links as sl, social_links_connection as slc WHERE slc.entity_type_id= :type AND slc.entity_id= :id AND slc.social_link_type_id= :link_type AND slc.link_id=sl.id";
					   $url = $this->pdo->prepare($url_q);
					   
					   $url->bindValue(':type', $type, \PDO::PARAM_INT);	 
					   $url->bindValue(':id', $sId, \PDO::PARAM_INT);
					   $url->bindValue(':link_type', $link_type['id'], \PDO::PARAM_INT);
				
					   $url->execute();
						 
						 if ($url->rowCount() > 0) {
							  while($social_url = $url->fetch()){
								  
								  					 if($social_url['social_link_url'] == '') { //We check if there's an actual link or just empty string
													     //if the string empty:
														     $content .= '<input class="AdminInputField" data-sociallink-typeid="'.$link_type['id'].'" id="'.ucfirst($link_type['type']).'" type="text" placeholder="'.ucfirst($link_type['type']).'"/>';
														   
													  } else { //if there's a link, we display the value
													     //convert back the url
													// $url_raw = $this->social_link_decode($social_url['social_link_url']);
													$url_raw = $social_url['social_link_url'];
													 
														  $content .= '<input class="AdminInputField" data-sociallink-typeid="'.$link_type['id'].'" id="'.ucfirst($link_type['type']).'" type="text" value="'.$url_raw.'"/>';  
													  } //value empty else end
				
									
								   
							 }
						 }  else { //personal num rows if end  //There's no such link
										      $content .= '<input class="AdminInputField" data-sociallink-typeid="'.$link_type['id'].'" id="'.ucfirst($link_type['type']).'" type="text" placeholder="'.ucfirst($link_type['type']).'"/>';
										  } //no such thing else end

					
				   
			 }//while link type
		 } //if link row count


						  
	return $content;	
}


}
?>