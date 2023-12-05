<?php
include ("db_connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cic</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	 <!-- Include the dashboard -->
    <?php include("dashboard.php"); ?>

    <div class="content">

<form action="cic_process.php"  method="Post">
	<fieldset>
   <legend style="font-weight: bold; "><center>CIC</center> </legend><br><br><br>
 <!--  <div class="container text-center" -->
  <div class="row">
    <div class="col">
      <label for="Officer_Responsible" class="form-label">Officer Responsible</label>
     <input type="text" name="Officer_Responsible" class="form-control" placeholder="enter the officer responsible">
    </div>
    <div class="col">
      <label for="Policy_No" class="form-label">Policy Number</label>
      <input type="text" name="Policy_No" class="form-control" placeholder="enter policy number">
    </div>
    <div class="col">
       <label for="Start_Date" class="form-label">Starting Date</label>
     <input type="date" name="Start_Date" class="form-control">
    </div>
  </div>

<br>

 <!-- <div class="container text-center"> -->
  <div class="row">
    <div class="col">
      <label for="Renewal_Date" class="form-label">Renewal Date</label>
     <input type="date" name="Renewal_Date" class="form-control" >
    </div>
    <div class="col">
      <label for="Policy_Holder" class="form-label">Policy Holder</label>
      <input type="text" name="Policy_Holder" class="form-control" placeholder="enter the one holding the policy">
    </div>
    <div class="col">
      <label for="Driver_Details" class="form-label">Driver Details</label>
     <input type="text" name="Driver_Details" class="form-control" placeholder="enter the  drivers details">
    </div>
  </div>
  <br>
<!-- </div> -->



  <div class="row">
    <div class="col">
      <label for="Contact_Details" class="form-label">Contact_Details</label>
     <input type="text" name="Contact_Details" class="form-control" placeholder="enter the contact details for the policy holder">
    </div>
    <div class="col">
      <label for="Regn_No" class="form-label">Registration Number</label>
      <input type="text" name="Regn_No" class="form-control" placeholder="enter the motor vehicle registration number">
    </div>
    <div class="col">
       <label for="Purpose_Type" class="form-label">Select the purpose type</label>
     <select name="Purpose_Type" class="form-select" aria-label="Default select example">
   <option selected>Purpose TYpe</option>

   <!-- <option value=""> -->
  <option value="Commercial">Commercial</option>
  <option value="Private">Private</option>
</select>
  </div>
</div>




  <div class="row">
    <div class="col">
      <label for="Vehicle_Make" class="form-label">Vehicle Make</label>
     <input type="type" name="Vehicle_Make" class="form-control" placeholder="enter the vehicle makee">
    </div>
    <div class="col">
       <label for="Type_of_Cover" class="form-label">Select the type of cover</label>
     <select name="Type_of_Cover" class="form-select" aria-label="Default select example">
   <option selected>type of cover</option>
   <!-- <option value=""> -->
  <option value="comprehensive">comprehensive</option>
  <option value="third party">third party</option>
</select>
  </div>
    <div class="col">
       <label for="Value_of_Vehicle" class="form-label">Value of vehicle</label>
     <input type="text" name="Value_of_Vehicle" class="form-control">
    </div>
  </div><br>


  <div class="row">
    <div class="col">
      <label for="Premium_Rate" class="form-label">Premium Rate</label>
     <input type="text" name="Premium_Rate" class="form-control" placeholder="enter the officer responsible">
    </div>
    <div class="col">
      <label for="Basic_Premium" class="form-label">Basic Premium</label>
      <input type="text" name="Basic_Premium" class="form-control" placeholder="enter policy number">
    </div>
    <div class="col">
       <label for="Public_liability" class="form-label">Public Liability</label>
     <input type="text" name="Public_liability" class="form-control">
    </div>
  </div><br>

<div class="row">
  <div class="col">
    <label for="VAT_Stamp_duty" class="form-label">VAT Stamp duty</label>
    <input type="text" name="VAT_Stamp_duty" class="form-control" id="VAT_Stamp_duty">
  </div>

  <div class="col">
    <label for="Total_Premium" class="form-label">Total Premium</label>
    <input type="text" name="Total_Premium" class="form-control" id="Total_Premium">
  </div>

  <div class="col">
    <label for="Premium_Paid" class="form-label">Premium Paid</label>
    <input type="text" name="Premium_Paid" class="form-control" id="Premium_Paid">
  </div>
</div>

  <div class="row">
  <div class="col">
    <label for="Outstanding_Bal" class="form-label">Outstanding Balance</label>
    <input type="text" name="Outstanding_Bal" class="form-control" id="Outstanding_Bal">
  </div>

  <div class="col">
    <label for="PhoneNumber" class="form-label">Phone Number</label>
    <input type="text" name="PhoneNumber" class="form-control" id="PhoneNumber">
  </div>
  <div class="col">
    <label for="CIC_OFFICER" class="form-label">CIC Officer</label>
    <input type="text" name="CIC_OFFICER" class="form-control" id="CIC_OFFICER">
  </div>
</div>
<br>
<br>

  
 <!--   <input type="file" name="Minutes" id="Minutes"> -->
  <button style="padding-left: 20px;" type="submit" name="submit" class=" btn btn-primary">Submit</button>
</fieldset>
</form>
</div>
</body>
</html>


