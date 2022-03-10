<?php
session_start();

if(! isset( $_SESSION['admin'])  ){
  echo '<meta http-equiv="refresh" content="0; url=/hospital">';
}
$u=$_SESSION['admin'];

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="header sticky-100" >
  <center><h2>Siddaganga Instutute of Technology</h2></center>
</div>
<div></div>
<div class="sidenav sticky-25 left" >
<button class="tablink" onclick="openCity('home', this, 'blue')" id="defaultOpen">Home</button><br>
<button class="tablink" onclick="openCity('profile', this, 'green')">Profile</button><br>
<button class="tablink" onclick="openCity('update', this, 'red')">Update</button><br>
<button class="tablink" onclick="openCity('viewapp', this, 'maroon')">view appointments</button>
<button class="tablink" onclick="openCity('adddoctors', this, 'gray')">Manage Doctors</button>
<button class="tablink" onclick="openCity('viewdoctors', this, 'pink')">Doctor list</button>
<button class="tablink" onclick="openCity('querry', this, 'purple')">querry</button>
<button class="tablink" onclick="openCity('patients', this, 'black')">Patient list</button>
<button class="tablink" onclick="window.location='logout.php';">Logout</button>
</div>

<div class="main ">
<h2>Hi <?php echo $u; ?></h2>
  <div class="content">
  <div id="home" class="tabcontent">
   Hi  <?php echo $u; ?>
</div>

<div id="profile" class="tabcontent">
  <h1>Profile</h1>
  <hr>
  <h3>I am <?php echo $u; ?> handling the Electronic Hospital Records. 
I am honarable on my Works. </h3> 
</div>

<div id="update" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <button style="border:unset;width:250px;height:40px;font-size:25px; background-color:white"onclick="openCity('passreset', this, 'white')">Update Password</button>
</div>

<div id="passreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
  <form action="">
      <table style="padding:20px;margin:15px;border:unset;background-color:white">
      <tr>
        <td> Password : </td><td><input type="text" name="pass"><br></td>
      </tr>
      <tr>
        <td> Reenter Password : </td> <td> <input type="text" name="pass2"><br></td>
      </tr>
    <tr>  <td colspan="2"><input  style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Reset"></td></tr>
      </table>
   
</form>
</center>
</div>



<div id="viewapp" class="tabcontent">
<h1>list Appointment</h1>
<?php include '../assets/listappointments.php';?>

</div>


<div id="viewdoctors" class="tabcontent">
<h1>View Doctors</h1>
<hr>
<?php include '../assets/listdoctors.php';?>
</div>


<div id="adddoctors" class="tabcontent">
<h1>Add Doctors</h1>
<hr>
<center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
<form action="">
    <tr>
      <td>Name</td><td><input type="text" name="dname"></td>
    </tr>
    <tr>
      <td>phone</td><td><input type="number" name="dnumber" ></td>
    </tr>
    <tr>
      <td>speacialization</td><td><input type="text" name="specialization"></td>
    </tr>
    <tr>
      <td>Hospital</td><td><input type="text" name="dhospital"></td>
    </tr>
    <tr>
      <td>address</td><td><input type="address" name="adress"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit"  style="width:100%;height:40px;font-size:20px; background-color:white" value="Add"> </td>
    </tr>
    </table>
    </form>

    </center>
</div>


<div id="querry" class="tabcontent">
<h1>Querries</h1>
<hr>
<?php include '../assets/queries.php';?>
</div>




<div id="patients" class="tabcontent">
<h1> Patients </h1>
<hr>
<?php include '../assets/listdoctors.php';?>
</div>


</div>
</div>








<script src="../js.js"></script>
<script>

</script>

</body>
</html>

   
</body>
</html> 
