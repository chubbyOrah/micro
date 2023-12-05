<?php
require_once '/path/to/vendor/autoload.php'; // Include Twilio PHP SDK

use Twilio\Rest\Client;

// Your Twilio credentials
$accountSid = 'AC25cb7eaabbab819c18f48e852b0df891';
$authToken = 'AuthToken';
$twilioNumber = '14092104564'; // Twilio phone number (must be purchased on Twilio)

// Recipient's phone number and the message you want to send
$recipientNumber = '+265886599453'; // Replace this with the recipient's phone number
$message = 'Hello, this is a test message from Twilio!';

// Initialize Twilio client
$client = new Client($accountSid, $authToken);

// Send the SMS
try {
    $client->messages->create(
        $recipientNumber,
        [
            'from' => $twilioNumber, // Your Twilio phone number
            'body' => $message,
        ]
    );

    echo 'SMS sent successfully!';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
