<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// $msisdn = ['+265999160640','+265990092704'];
// $message = "Your Being reminded that your insuarance will expire in 2 months, please renew";

// sendSMS($msisdn,$message);


function sendSMS($msisdn,$message){

$username   = "Computicket";
$apiKey     = "17eb87a7dfb26eb9fa11b189e54097167dabcb39451d899951d4c40942d99a76";

// Initialize the SDK
$AT         = new AfricasTalking($username, $apiKey);

// Get the SMS services
$sms        = $AT->sms();

// Set your shortCode or senderId
$from       = "CompAlert";

try {
    // Thats it, hit send and we'll take care of the rest
    $result = $sms->send([
        'to'      => $msisdn,
        'message' => $message,
        'from'    => $from
    ]);

    print_r($result);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}


}


?>