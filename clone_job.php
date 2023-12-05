<?php
include("db_connection.php");
include("./sms/index.php");
// Function to send SMS using Africa's Talking API
//  sendSMS($to, $message);



// Select administrator's phone number
$sqlAdmin = "SELECT Phone_Number FROM administrators WHERE Administrator_ID = 1"; // Replace 1 with the actual ID of your administrator

$resultAdmin = $conn->query($sqlAdmin);

if ($resultAdmin->num_rows > 0) {
    $rowAdmin = $resultAdmin->fetch_assoc();

    // Check for accounts with 2 months remaining to expire
    $sqlAccounts = "SELECT cic_id,Policy_Holder FROM cic WHERE TIMESTAMPDIFF(MONTH, NOW(), STR_TO_DATE(Renewal_Date, '%Y-%m-%d')) = 2";

    $resultAccounts = $conn->query($sqlAccounts);

    if ($resultAccounts->num_rows > 0) {
       $rowuser = $resultAccounts->fetch_assoc();

        // Compose SMS message
        // $message = "";
        // sendSMS($rowAdmin['Phone_Number'], $message);
         // Loop through expired accounts
    

        while ($row = $resultAccounts->fetch_assoc()) {
            // Compose SMS message
            $message = "Dear Administrator, Account with username {$row['Policy_Holder']} has expired.";

            // Send SMS to the administrator
            sendSMS($rowAdmin['Phone_Number'], $message);
        }



        // Send SMS to the administrator
        //sendSMS($rowAdmin['Phone_Number'], $message);

        echo "SMS sent to the administrator.";
    } else {
        echo "No accounts found with 2 months remaining.";
    }
} else {
    echo "Administrator not found.";
}

// Close the database connection
$conn->close();
?>
