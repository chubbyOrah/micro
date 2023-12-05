<?php

// Recipient's email address and phone number
 $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];


// Your Twilio credentials
$twilio_sid = "AC25cb7eaabbab819c18f48e852b0df891";
$twilio_auth_token = "1cf424e15ead55f7afe288824c237ee0";
$twilio_phone_number = "+265886599453";

// Announcement message
// $announcement_message = "Hello! This is an important announcement.";

// Send email
$subject = "Important Announcement";
$headers = "From: oramachautsi719@gmail.com\r\n";
$headers .= "Reply-To: oramachautsi719@gmail.com\r\n";
mail($email,$phone, $subject, $message, $headers);

// Send SMS using Twilio
require __DIR__ . 'C:\xampp\htdocs\dc_portal\twilio-php-master\Twilio\autoload.php';
use Twilio\Rest\Client;

$client = new Client($twilio_sid, $twilio_auth_token);
$client->messages->create(
    $phone_number,
    array(
        'from' => $twilio_phone_number,
        'body' => $announcement_message
    )
);

echo "Announcement sent successfully.";

?>
