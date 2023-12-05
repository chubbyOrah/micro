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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="datatables.min.css">  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="style.css">  
<link rel="stylesheet" type="text/css" href="datatable.css"></head>
<body>
	 <!-- Include the dashboard -->
    <?php include("dashboard.php"); ?>

    <div class="content">
        <!-- Main content of the page goes here -->
       <H1> <center>REUNION REMINDERS</center></H1> <br><br>
       <div class="container">
        <div class="row">
            <div class="col-12">
                
                <div class="data_table">
                    
                     <table id="example" class="table table-striped table-boardered">
            <thead class="table-dark">
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

                $sql = "SELECT * FROM cic WHERE TIMESTAMPDIFF(MONTH, NOW(), STR_TO_DATE(Renewal_Date, '%Y-%m-%d')) = 1
                ORDER BY TIMESTAMPDIFF(MONTH, NOW(), STR_TO_DATE(Renewal_Date, '%Y-%m-%d')) ASC
                LIMIT 15";
            
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="datatables.min.js"></script>
<script src="pdfmake.min.js"></script>
<script src="vfs_fonts.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<!-- <script src="js.js"></script> -->



<script type="text/javascript">
    $(document).ready(function() {
  var table =   $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
    } );

  table.buttons().containers()
  .appendTo('#example_wrapper .col-md-6:eq(0) ')
} );
</script>


        <?php 
        // include("cic_reminder.php"); 
        ?>

   


</body>
</html>