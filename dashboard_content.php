<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>minutes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>




<body>
     <!-- Include the dashboard -->
     <?php include("dashboard.php"); ?>



<div class="content" style=" padding:20 px; ">
    <center>
    <!-- <h1>REMINDERS</h1><br><br> -->
<div class="container overflow-hidden">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light"><span style="color:blue;"><h1>  nicogen reminder</h1></span>
<button type="button" class="btn btn-dark" style= "margin-right:0"; onclick="nicogen_reminder()"  > click here </button>


     </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light"><span style="color:green;"><h1> Reunion reminder</h1></span>

      
      <button type="button" class="btn btn-dark" onclick="reunion()" style= "margin-right:0";  > click here </button>
    </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light"><span style="color:purple;"><h1> CIC reminder</h1></span>
      <button type="button" class="btn btn-dark" onclick="cic()" style= "margin-right:0";  > click here </button>
    </div>
    </div>
  </div>
</div>
</center>

<script>
    function cic() {
        // Replace 'your_page.php' with the actual path and file name of the page you want to navigate to
        window.location.href = 'cic_reminder.php';
    }
</script>

<script>
    function nicogen() {
        // Replace 'your_page.php' with the actual path and file name of the page you want to navigate to
        window.location.href = 'nicogen_reminder.php';
    }
</script>

<script>
    function reunion() {
        // Replace 'your_page.php' with the actual path and file name of the page you want to navigate to
        window.location.href = 'reunion_reminder.php';
    }
</script>
</body>
</html>