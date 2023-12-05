<?php
include ("db_connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>minutes</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	 <!-- Include the dashboard -->
    <?php
     include("dashboard.php");


      ?>

    <div class="content">
        <!-- Main content of the page goes here -->
        <H1> <center>NICOGEN REMINDERS</center></H1> <br><br>
        <table class="table">
            <thead>
                <tr>
                   <th>No</th>
                    <th>Office Responsible</th>
                    <th>Policy Number</th>
                    <th>Start Date</th>
                    <!-- <th>Date In 3 Months</th> -->
                    <th>Renewal Date</th>
                    <th>Policy Holder</th>
                    <th>Driver Details</th>
                    <th>Contact Details</th>
                    <th>Registration Number</th>
                    <th>Purpose Type</th>
                    <th>Vehicle Make</th>
                    <th>Type Of Cover</th>
                    <th>Value Of  Vehicle</th>
                     <th>Premium Rate</th>
                    <th>Basic Premium</th>
                </tr>
                </thead>
            <tbody>
                <?php

                
                $sql = "SELECT *
                        FROM cic
                        -- WHERE STR_TO_DATE(Renewal_Date, '%d-%m-%y') BETWEEN '16-11-2023' AND '16-12-2023';


                                 -- FROM cic
                                 WHERE TIMESTAMPDIFF( MONTH, NOW(), STR_TO_DATE(Renewal_Date, '%Y-%m-%d')) >= 1   
                                  ORDER BY TIMESTAMPDIFF( MONTH, NOW(), STR_TO_DATE(Renewal_Date, '%Y-%m-%d')) ASC LIMIT 15";

                        // WHERE TIMESTAMPDIFF(MONTH, NOW(), STR_TO_DATE(Renewal_Date, '%d-%m-%y')) <= 2
                                 // AND TIMESTAMPDIFF(year, NOW(), STR_TO_DATE(Renewal_Date, '%d-%m-%y')) >= 0
                        // ORDER BY TIMESTAMPDIFF(MONTH, NOW(), STR_TO_DATE(Renewal_Date, '%d-%m-%y')) DESC;


                $result=mysqli_query($conn,$sql);
                if ($result) {
                    while ($row = $result->fetch_assoc()) {

                        $cic_id = $row['cic_id'];
                         $Officer_Responsible = $row['Officer_Responsible'];
                        $Policy_No = $row['Policy_No'];
                        $Start_Date = $row['Start_Date'];
                        $Renewal_Date = $row['Renewal_Date'];
                        $Policy_Holder = $row['Policy_Holder'];
                        $Driver_Details = $row['Driver_Details'];
                        $Contact_Details = $row['Contact_Details'];

                         $Regn_No = $row['Regn_No'];
                        $Purpose_Type = $row['Purpose_Type'];
                        $Vehicle_Make = $row['Vehicle_Make'];
                        $Type_of_Cover = $row['Type_of_Cover'];
                        $Value_Of_Vehicle = $row['Value_Of_Vehicle'];
                        $Premium_Rate = $row['Premium_Rate'];
                        $Basic_Premium = $row['Basic_Premium'];

                          echo '<tr>
                                <th scope="row">' . $cic_id . '</th>
                                <td>' . $Officer_Responsible . '</td>
                                <td>' . $Policy_No . '</td>
                                <td>' . $Start_Date . '</td>
                                <td>' . $Renewal_Date . '</td>
                                <td>' . $Policy_Holder . '</td>
                                <td>' . $Driver_Details . '</td>
                                <td>' . $Contact_Details . '</td>

                                <td>' . $Regn_No . '</td>
                                <td>' . $Purpose_Type . '</td>
                                <td>' . $Vehicle_Make . '</td>
                                <td>' . $Type_of_Cover . '</td>
                                <td>' . $Value_Of_Vehicle . '</td>
                                <td>' . $Premium_Rate . '</td>
                                 <td>' . $Basic_Premium . '</td>
                                 </tr>';
                        // Add more <td> elements for other columns in your database
                    }
                } else {
                
    die("SQL error: " . mysqli_error($conn));
}

                
              
                ?>
            </tbody>
        </table>

    </div>

</body>
</html>