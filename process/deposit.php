<?php 

require"../vendor/autoload.php";

use Matscode\Paystack\Transaction;
use Matscode\Paystack\Utility\Debug; // for Debugging purpose
use Matscode\Paystack\Utility\Http;


if (isset($_POST['amount']) && isset($_POST['email'])){
	// code...


	$amount = (int)$_POST['amount'];
	$amont_in_kobo = $amount * 100;
	$email = (string)$_POST['email'];
	//echo $amont_in_kobo;

	$secretKey = 'sk_test_e2a95d0e456eab47e24131115d7e05841b9a210a';

	$Transaction = new Transaction( $secretKey );

	//echo "<pre>";
	//print_r ($Transaction);
	//echo"</pre>";


	$user_data = [
    'email'  => $email,
    'amount' => $amont_in_kobo
];

$response = $Transaction->initialize($user_data);

//echo "<pre>";
//print_r($response);
//echo"</pre>";

$auth_url = $response->authorizationUrl;
$reference = $response->reference;


echo json_encode([
      "payment_url" => $auth_url,
      "ref" => $reference,
      "code" => "success"

      ]);

}else{

	echo json_encode([
      "payment_url" => null,
      "ref" => null,
      "code" => "error"

]);
}


?>