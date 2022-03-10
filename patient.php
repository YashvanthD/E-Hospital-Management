<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header" id="myHeader">
  <center><h2>Siddaganga Instutute of Technology</h2></center>
</div>
<div></div>
<div class="sidenav">
<button class="tablink" onclick="openCity('home', this, 'red')" id="defaultOpen">Home</button><br>
<button class="tablink" onclick="openCity('profile', this, 'green')">Profile</button><br>
<button class="tablink" onclick="openCity('update', this, 'blue')">Update</button><br>
<button class="tablink" onclick="openCity('app', this, 'orange')">Appointment</button>
<button class="tablink" onclick="openCity('viewapp', this, 'red')">view appointments</button>
<button class="tablink" onclick="openCity('prescription', this, 'green')">Prescription</button>
</div>


<div class="main">
  <h2>Hi Patient</h2>
  <div class="content">

  <div id="home" class="tabcontent">
   Hi  Patient
</div>

<div id="profile" class="tabcontent">
  <h1>Profile</h1>
  <p>Patient profile </p> 
</div>

<div id="update" class="tabcontent">
  <h1>Update</h1>
  <p>Your Profile Updation</p>
</div>

<div id="app" class="tabcontent">
<h1>Add Appointment</h1>
Add Appointment
<?php include 'addappointment.php'; ?>
</div>


<div id="viewapp" class="tabcontent">
<h1>View Appointment</h1>

<?php include 'applistpat.php'; ?>

</div>

<div id="prescription" class="tabcontent">
<h1>View prescription </h1>

</div>


</div>
</div>

<style>
  tr:hover{
background-color: white;
  }
</style>






<script src="js.js"></script>
<script>

</script>

</body>
</html>

   
</body>
</html> 
