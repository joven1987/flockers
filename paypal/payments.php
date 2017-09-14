<?php
require '../db_connection.php';

// PayPal settings

$paypal_email = 'buyer_facilitator@gmail.com';
$return_url = 'http://localhost/flockers_final_final/flockers/paypal/payment-successful.html';
$cancel_url = 'http://localhost/flockers_final_final/flockers/paypal/payment-cancelled.html';
$notify_url = 'http://localhost/flockers_final_final/flockers/paypal/payments.php';

/*$item_name = 'Test Item';
$item_amount = $_REQUEST['subscribe'];*/

// Include Functions
include("functions.php");

// Check if paypal request or response
if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])){
	if (isset($_REQUEST['checkout'])) {
		$admin_user_id = 15;
		$date_posted = date("Y-m-d h:i:s");
		$event_id = uniqid();
		$city = $_REQUEST['city'];
		$cityLat = $_REQUEST['cityLat'];
		$cityLng = $_REQUEST['cityLng'];
		$topics = implode(",",$_REQUEST['topics']);
		$event_name= $_REQUEST['event_name'];
		$event_desc = $_REQUEST['event_desc'];
		$admission = $_REQUEST['admission_fee'];
		$amount= ($_REQUEST['subscribe'] * 500);
		$adver_status = 0;
		$payment_status = 0;

		$item_name = $event_id;
		$item_amount = $amount;


		$insert_event = $db->prepare("INSERT INTO `event` (`event_id`, `event_admin_user_id`,`interest_id`,`event_title`, `event_desc`, `reg_fee`, `payment_status`, `adver_status`) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
		$insert_event->bindParam(1, $event_id);
		$insert_event->bindParam(2, $admin_user_id);
		$insert_event->bindParam(3, $topics);
		$insert_event->bindParam(4, $event_name);
		$insert_event->bindParam(5, $event_desc);
		$insert_event->bindParam(6, $admission);
		$insert_event->bindParam(7, $payment_status);
		$insert_event->bindParam(8, $adver_status);
		$insert_event->execute();
		if($insert_event->rowCount() == 1) {
			$inser_venue = $db->prepare("INSERT INTO `venue`(`event_id`, `address`, `latitude`, `longitude`) VALUES(?, ?, ?, ?)");
			$inser_venue->bindParam(1, $event_id);
			$inser_venue->bindParam(2, $city);
			$inser_venue->bindParam(3, $cityLat);
			$inser_venue->bindParam(4, $cityLng);
			$inser_venue->execute();
		}

	}


	$querystring = '';
	// Firstly Append paypal account to querystring
	$querystring .= "?business=".urlencode($paypal_email)."&";
	
	// Append amount& currency (£) to quersytring so it cannot be edited in html
	
	//The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
	$querystring .= "item_name=".urlencode($item_name)."&";
	$querystring .= "amount=".urlencode($item_amount)."&";
	
	//loop for posted values and append to querystring
	foreach($_POST as $key => $value){
		$value = urlencode(stripslashes($value));
		$querystring .= "$key=$value&";
	}
	
	// Append paypal return addresses
	$querystring .= "return=".urlencode(stripslashes($return_url))."&";
	$querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
	$querystring .= "notify_url=".urlencode($notify_url);
	
	// Append querystring with custom field
	//$querystring .= "&custom=".USERID;
	
	// Redirect to paypal IPN
	header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
	exit();
} else {


	// Response from Paypal
	// read the post from PayPal system and add 'cmd'
	$req = 'cmd=_notify-validate';
	foreach ($_POST as $key => $value) {
		$value = urlencode(stripslashes($value));
		$value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix
		$req .= "&$key=$value";
	}
	
	// assign posted variables to local variables
	$data['item_name']			= $_POST['item_name'];
	$data['item_number'] 		= $_POST['item_number'];
	$data['payment_status'] 	= $_POST['payment_status'];
	$data['payment_amount'] 	= $_POST['mc_gross'];
	$data['payment_currency']	= $_POST['mc_currency'];
	$data['txn_id']				= $_POST['txn_id'];
	$data['receiver_email'] 	= $_POST['receiver_email'];
	$data['payer_email'] 		= $_POST['payer_email'];
	$data['custom'] 			= $_POST['custom'];

		
	// post back to PayPal system to validate
	$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
	
	$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);
	
	if (!$fp) {
		var_dump($fp);
		
	} else {
		fputs($fp, $header . $req);
		while (!feof($fp)) {
			$res = fgets ($fp, 1024);
			if (strcmp($res, "VERIFIED") == 0) {
				
				// Used for debugging
				// mail('user@domain.com', 'PAYPAL POST - VERIFIED RESPONSE', print_r($post, true));
						
				// Validate payment (Check unique txnid & correct price)
				$valid_txnid = check_txnid($data['txn_id']);
//				$valid_price = check_price($data['payment_amount'], $data['item_number']);
				// PAYMENT VALIDATED & VERIFIED!
				if ($valid_txnid) {
					
					$orderid = updatePayments($data);
					
					if ($orderid) {
						// Payment has been made & successfully inserted into the Database
					} else {
						// Error inserting into DB
						// E-mail admin or alert user
						// mail('user@domain.com', 'PAYPAL POST - INSERT INTO DB WENT WRONG', print_r($data, true));
					}
				} else {
					// Payment made but data has been changed
					// E-mail admin or alert user
				}
			
			} else if (strcmp ($res, "INVALID") == 0) {
			
				// PAYMENT INVALID & INVESTIGATE MANUALY!
				// E-mail admin or alert user
				
				// Used for debugging
				//@mail("user@domain.com", "PAYPAL DEBUGGING", "Invalid Response<br />data = <pre>".print_r($post, true)."</pre>");
			}
		}
	fclose ($fp);
	}
}
?>
