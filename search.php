<?php
include("db_connection.php");

function searchItems($conn)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the 'search' key exists in the POST array
        if (isset($_POST["search"])) {
            $search = $_POST["search"];

            // Prevent SQL injection
            $search = mysqli_real_escape_string($conn, $search);

            // Query to search for items
            $sql = "SELECT * FROM reunion WHERE Policy_Holder LIKE '%$search%'";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Display search results
                echo '<table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Office Responsible</th>
                                <th>Policy Number</th>
                                <th>Start Date</th>
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
                        <tbody>';

                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                            <th scope="row">' . $row['cic_id'] . '</th>
                            <td>' . $row['Officer_Responsible'] . '</td>
                            <td>' . $row['Policy_No'] . '</td>
                            <td>' . $row['Start_Date'] . '</td>
                            <td>' . $row['Renewal_Date'] . '</td>
                            <td>' . $row['Policy_Holder'] . '</td>
                            <td>' . $row['Driver_Details'] . '</td>
                            <td>' . $row['Contact_Details'] . '</td>
                            <td>' . $row['Regn_No'] . '</td>
                            <td>' . $row['Purpose_Type'] . '</td>
                            <td>' . $row['Vehicle_Make'] . '</td>
                            <td>' . $row['Type_of_Cover'] . '</td>
                            <td>' . $row['Value_Of_Vehicle'] . '</td>
                            <td>' . $row['Premium_Rate'] . '</td>
                            <td>' . $row['Basic_Premium'] . '</td>
                        </tr>';
                }

                echo '</tbody></table>';
            } else {
                echo "No results found.";
            }
        }
    }
}

?>