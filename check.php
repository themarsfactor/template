<?php 
require"vendor/autoload.php";

use Matscode\Paystack\Transaction;
use Matscode\Paystack\Utility\Debug; // for Debugging purpose
use Matscode\Paystack\Utility\Http;


if (isset($_GET['trxref']) && isset($_GET['reference'])) {

	$trxref = $_GET['trxref'];
	$reference = $_GET['reference'];
	$secretKey = 'sk_test_e2a95d0e456eab47e24131115d7e05841b9a210a';


	echo $trxref;
	echo "and";

	echo $reference;
	// code...




	/*$Transaction = new Transaction($secretKey);
	$result = $transaction->($trxref);

	if ($result->status == true) {

		$trx_data = $result->data;
		$trx_id = $trx_data->id;
		$trx_reference = $trx_data->reference;
		$trx_amount = $trx_data->amount;//in kobo
		$trx_status = $trx_data->status;
		$trx_payment_channel = $trx_data->channel;
		$trx_currency = $trx_data->currency;
		$trx_ip_address = $trx_data->ip_address;

		$trx_customer_id = $trx_data->customer->id;
		$trx_customer_code = $trx_data->customer->customer_code;
			$customer_email = $trx_data->customer->email;
		// code...
	}*/
}
 


?>














<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome</title>
</head>
<body>
	<p>Welcome</p>

</body>
</html>