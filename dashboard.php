<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- <div class="navbar">
        <-- <h1>Welcome, User!</h1> -->
        <!-- <a style="padding-left: 1000px; color: red;" href="#">Logout</a> -->
    <!-- </div> -->     
    <div class="sidebar " style="background-color: black;">
        <h2 style="color: green;">MicroInsurance</h2>
        <!-- <img src="logo.png"> -->
        <ul>
            <li><a href="dashboard_content.php">Dashboard</a></li>
           <!--  <li><a href="announcements.php">announcements</a></li> -->
            <!-- <li><a href="view_meetings.php">View Minutes</a></li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    claims
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="add_claim.php">Add new  claim</a></li>
                    <li><a class="dropdown-item" href="staff.php">update status claim</a></li>
                    <li><a class="dropdown-item" href="view_claim.php">View Sorted claim</a></li>
                   
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    CIC
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="cic.php">Add new CIC</a></li>
                    <li><a class="dropdown-item" href="View_cic.php">View CIC</a></li>
                    <li><a class="dropdown-item" href="cic_reminder.php">Reminders</a></li>
                   
                </ul>
            </li>


             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Nicogen
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="nicogen.php">Add new Nicogen</a></li>
                    <li><a class="dropdown-item" href="View_Nicogen.php">View Nicogen</a></li>
                    <li><a class="dropdown-item" href="nicogen_reminder.php">Reminders</a></li>
                   
                </ul>
            </li>

             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Reunion
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="reunion.php">Add new Reunion</a></li>
                    <li><a class="dropdown-item" href="view_reunion.php">View Reunion</a></li>
                    <li><a class="dropdown-item" href="reunion_reminder.php">reminders</a></li>
                   
                </ul>
            </li>
        </ul>
    </div>
    

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iRABdZLl6O5oVMWSktQOp6b7In1Zl3/Ji5dPiK3z2ZlEfa6Z1PGfn/NJ"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
