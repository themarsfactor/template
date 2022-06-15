<?php 

function getUserData($email){
require "connection/db.php";


$query = "SELECT * FROM `users` WHERE `email` = '$email' LIMIT 1";
$result = mysqli_query($conn, $query);

if ($result) {

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


	return[
			"data" => $row,
			"message" => "operation successful",
			"code" => "success"

			];
	// code...
}else{

	return[
			"data" => [],
			"message" => "operation failed".mysqli_error($conn),
			"code" => "error"

			];
	
}


//return "working";
 }




 function saveDepositName($email, $amount_in_kobo, $transaction_ref, $metadata){

 	require "connection/db.php";
 	//get user data
 	$user_data = getUserData($email);

 	if ($user_data['code'] == "successs") {
 		// code...

 		$user_id = $user_data["data"]["id"];

 		$query = "INSERT INTO `deposit` (`user_id`, `deposit_ref`, `amount`, `metadata`, `date_created`) VALUES ($user_id, '$transaction_ref', '$amount_in_kobo', '$metadata', NOW())";

 		$result = mysqli_query($conn, $query);
 		if ($result) {
 			// code...


 		}
 	}
 	//the user exit
 	




 }




/*function getLastUserBalance($id){
	require "connection/db.php";
	$query = "SELECT * `users_balances` WHERE `user_id` = $id ORDER BY `id` DESC"


}*/