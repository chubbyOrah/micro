<?php
include("db_connection.php");




if (isset($_POST['submit'])) {
    $Officer_Responsible = $_POST['Officer_Responsible'];
    $Policy_No = $_POST['Policy_No'];
    $Start_Date = $_POST['Start_Date'];
    $Renewal_Date = $_POST['Renewal_Date'];
    $Policy_Holder = $_POST['Policy_Holder'];
    $Driver_Details = $_POST['Driver_Details'];
    $Contact_Details = $_POST['Contact_Details'];

    $Regn_No = $_POST['Regn_No'];
    $Purpose_Type = $_POST['Purpose_Type'];
    $Vehicle_Make = $_POST['Vehicle_Make'];
    $Type_of_Cover = $_POST['Type_of_Cover'];
    $Value_of_Vehicle = $_POST['Value_of_Vehicle'];
    $Premium_Rate = $_POST['Premium_Rate'];
    $Basic_Premium = $_POST['Basic_Premium'];

     $sql = "INSERT INTO cic (Officer_Responsible, Policy_No, Start_Date, Renewal_Date,Policy_Holder,Driver_Details,Contact_Details,  Regn_No, Purpose_Type, Vehicle_Make, Type_of_Cover,Value_of_Vehicle,Premium_Rate,Basic_Premium) VALUES ('$Officer_Responsible', '$Policy_No', '$Start_Date', '$Renewal_Date','$Policy_Holder','$Driver_Details','$Contact_Details',   '$Regn_No', '$Purpose_Type', '$Vehicle_Make', '$Type_of_Cover','$Value_of_Vehicle','$Premium_Rate','$Basic_Premium')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "
        <script>
            alert('Borrowed Book Added Successfully!');
            window.location.href = 'cic.php';
        </script>
    ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} 
   
   
    // Close the database connection
    $conn->close();

?>
