<?php 
namespace HRNParis\main;
use HRNParis\config as config;
include_once('config.php');	
if(!isset($_SESSION)) {
	session_start();
}

class main extends config {

/*
-------------------------------
New Pitch Functions
-------------------------------
*/	
public function get_countries() {
	$content = '';
	$content = '<option value="" hidden="hidden" selected="selected">Select a Country</option>';
		 $country_q = "SELECT id, country_code FROM countries ORDER BY country_code DESC";
		 $countries = $this->pdo->prepare($country_q);
		 $countries->execute();
		 
					if ($countries->rowCount() > 0) {
					while($country = $countries->fetch()){
                         $content .= '<option value="'.$country['id'].'">'.$country['country_code'].'</option>';
					} //personal fetch assoc end
				}  //personal num rows if end
				
         $content .= '<option value="Other">Other</option>';
	return $content;	
}


public function get_pitch_type() {
	$content = '';
	$content = '<option value="" hidden="hidden" selected="selected">Pitched</option>';
		 $type_q = "SELECT id, type FROM pitch_type ORDER BY id DESC";
		 $pitch = $this->pdo->prepare($type_q);
		 $pitch->execute();
		 
					if ($pitch->rowCount() > 0) {
					while($type = $pitch->fetch()){
                         $content .= '<option value="'.$type['id'].'">'.$type['type'].'</option>';
					} //personal fetch assoc end
				}  //personal num rows if end
				
	return $content;	
}

public function get_pitch_result() {
	$content = '';
	$content = '<option value="" hidden="hidden" selected="selected">Result</option>';
		 $type_q = "SELECT id, type FROM result_type ORDER BY id DESC";
		 $pitch = $this->pdo->prepare($type_q);
		 $pitch->execute();
		 
					if ($pitch->rowCount() > 0) {
					while($type = $pitch->fetch()){
                         $content .= '<option value="'.$type['id'].'">'.$type['type'].'</option>';
					} //personal fetch assoc end
				}  //personal num rows if end
				
	return $content;	
}

public function save_pitch() {
	
	if (isset($_POST['NewCountryName']) && isset($_POST['NewCountryCode'])) {
		
		 $country_q = "INSERT INTO countries SET country_name = :country_name, country_code = :country_code";
		 $country_insert = $this->pdo->prepare($country_q);
		 
		 $country_insert->bindValue(':country_name', $_POST['NewCountryName'], \PDO::PARAM_STR);
		 $country_insert->bindValue(':country_code', $_POST['NewCountryCode'], \PDO::PARAM_STR);
		 
		 $country_insert->execute();
		 
            $country = $this->pdo->lastInsertId();
		
		
		
	} else {
		$country = $_POST['Country'];
	}
	

	$date = date("j F Y");
	
	      $this->pdo->beginTransaction();

		 $delegate_q = "INSERT INTO delegates SET first_name = :first_name, last_name = :last_name, title = :title";
		 $delegate = $this->pdo->prepare($delegate_q);
		 
		 $delegate->bindValue(':first_name', $_POST['FirstName'], \PDO::PARAM_STR);
		 $delegate->bindValue(':last_name', $_POST['LastName'], \PDO::PARAM_STR);
		 $delegate->bindValue(':title', $_POST['DelegateTitle'], \PDO::PARAM_STR);
		 
		 $delegate->execute();
		 
            $delegate_id = $this->pdo->lastInsertId(); 
		 
		 $company_q = "INSERT INTO company SET company_name = :company_name";
		 $company = $this->pdo->prepare($company_q);
		 
		 $company->bindValue(':company_name', $_POST['CompanyName'], \PDO::PARAM_STR);
		 
		 $company->execute();

		    $company_id = $this->pdo->lastInsertId();
			
		 $connection_q = "INSERT INTO delegate_connection SET country_id = :country_id, delegate_id = :delegate_id, company_id = :company_id";
		 $connection = $this->pdo->prepare($connection_q);
		 
		 $connection->bindValue(':country_id', $country, \PDO::PARAM_INT);
		 $connection->bindValue(':delegate_id', $delegate_id, \PDO::PARAM_INT);
		 $connection->bindValue(':company_id', $company_id, \PDO::PARAM_INT);
		 
		 $connection->execute();
		 
		    $connection_id = $this->pdo->lastInsertId();
		 
		 
		 $pitch_data_q = "INSERT INTO pitch_data SET date_of_pitch = :pitch_date, user_id = :user_id, delegate_id = :delegate_id, pitch_type_id = :pitch_type";
		 $pitch_data = $this->pdo->prepare($pitch_data_q);
		 
		 $pitch_data->bindValue(':pitch_date', $date, \PDO::PARAM_STR);
		 $pitch_data->bindValue(':user_id', $_SESSION['user_id'], \PDO::PARAM_INT);
		 $pitch_data->bindValue(':delegate_id', $delegate_id, \PDO::PARAM_INT);
		 $pitch_data->bindValue(':pitch_type', $_POST['PitchType'], \PDO::PARAM_INT);
		 
		 $pitch_data->execute();
		 
		 	$pitch_data_id = $this->pdo->lastInsertId();
			
			
		 $pitch_result_q = "INSERT INTO pitch_result SET pitch_data_id = :data_id, result_type_id = :result_type, deals = :deal_nums, callback_date = :callback, reason = :reason";
		 $pitch_result = $this->pdo->prepare($pitch_result_q);
		 
		 $pitch_result->bindValue(':data_id', $pitch_data_id, \PDO::PARAM_INT);
		 $pitch_result->bindValue(':result_type', $_POST['PitchResult'], \PDO::PARAM_INT);
		 $pitch_result->bindValue(':deal_nums', $_POST['NumberOfDeals'], \PDO::PARAM_INT);
		 $pitch_result->bindValue(':callback', $_POST['CallBackDate'], \PDO::PARAM_STR);
		 $pitch_result->bindValue(':reason', $_POST['Reason'], \PDO::PARAM_STR);
		 
		 $pitch_result->execute();
		 
		    $pitch_result_id = $this->pdo->lastInsertId();
		 
		 $this->pdo->commit();
		 
		 return $pitch_result_id;
	
}

}
?>