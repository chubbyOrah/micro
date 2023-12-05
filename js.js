$(document).ready(function() {
    var table = $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        // Add column definitions based on the number of columns in your HTML table
        columns: [
            { data: 'cic_id' },
            { data: 'Officer_Responsible' },
            { data: 'Policy_No' },
            { data: 'Start_Date' },
            { data: 'Renewal_Date' },
            { data: 'Policy_Holder' },
            { data: 'Driver_Details' },
            { data: 'Contact_Details' },
            { data: 'Regn_No' },
            { data: 'Purpose_Type' },
            { data: 'Vehicle_Make' },
            { data: 'Type_of_Cover' },
            { data: 'Value_Of_Vehicle' },
            { data: 'Premium_Rate' },
            { data: 'Basic_Premium' },
            // Add more columns as needed
        ]
    });

    table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0) ');
});


// alert("Hello! I am an alert box!!");