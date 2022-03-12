<?php 
session_start();

if(!isset($_SESSION['patient'])){

}
else{

  $u =ucwords($_SESSION['patient']);
  $dob =$_SESSION['pdob'];
  $add=$_SESSION['padd'];
  $mbl=$_SESSION['pmbl'];
  $gender=$_SESSION['pgender'];
  $mail=$_SESSION['pmail'];
include '../data/loadpatient.php';
  ?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>  <?php echo $u; ?></title>
<style>

</style>
<link rel="stylesheet" href="../style.css">
<script src="../js.js"></script>
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
<button class="tablink" onclick="openCity('app', this, 'orange')">Add New Appointment</button>
<button class="tablink" onclick="openCity('viewapp', this, '	#00008B')">view appointments</button>
<button class="tablink" onclick="openCity('prescription', this, 'maroon')">Prescription</button>
<button class="tablink" onclick="openCity('prescription', this, 'sky-blue')">My Analysis</button>
<button class="tablink" onclick="openCity('prescription', this, 'black')">My latest Report</button>
<button class="tablink" onclick="window.location='logout.php';">Logout</button>
</div>


<div class="main">
  <h2>Hi <?php echo $u; ?> </h2>
  <div class="content">

  <div id="home" class="tabcontent">
   Hi  
</div>


<div id="profile" class="tabcontent">
  <h2 >My Profile</h2>
<hr>
<center>
  <table style="border:unset;padding:20px;margin:15px;border:unset;background-color:white;width:40%;">
    <tr ><td >Name <td>:</td> </td><td><?php echo $u; ?></td></tr>
    <tr ><td >Patient Id <td>:</td> </td><td><?php echo $_SESSION['pid']; ?></td></tr>
    <tr ><td >Date of Birth <td>:</td> </td><td><?php echo $dob; ?></td></tr>
    <tr ><td >Gender <td>:</td> </td><td><?php echo $gender; ?></td></tr>
    <tr><td >Father Name <td>:</td> </td><td><?php echo $_SESSION['pfather']; ?></td></tr>
    <tr><td >Mother Name <td>:</td> </td><td><?php echo $_SESSION['pmother']; ?></td></tr>
    <tr><td >Address <td>:</td> </td><td><?php echo  $add; ?></td></tr>
    <tr><td >Mobile No <td>:</td> </td><td><?php echo $mbl; ?></td></tr>
    <tr ><td >Height <td>:</td> </td><td><?php echo $_SESSION['phgt'] ; ?></td></tr>
    <tr ><td >Weight <td>:</td> </td><td><?php echo $_SESSION['pwt']; ?></td></tr>
    <tr ><td >Blood Group <td>:</td> </td><td><?php echo $_SESSION['pblood']; ?></td></tr>
    <tr ><td >Password <td>:</td> </td><td><?php echo $_SESSION['ppassword']; ?></td></tr>
  </table>
  </center>
</div>


<div id="update" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('passreset', this, 'white')">Update Password</button><br>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('mblreset', this, 'white')">Update phone</button><br>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('addreset', this, 'white')">Update Address</button><br>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('wreset', this, 'white')">Update Weight</button><br>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('hreset', this, 'white')">Update Height</button><br>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('mreset', this, 'white')">Update mail</button><br>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('preset', this, 'white')">Update Parents details</button><br>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('breset', this, 'white')">Update Blood Group</button><br>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('licreset', this, 'white')">Update LIC</button><br>
</div>

<div id="passreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
  <form action="updatepassword" method=POST>
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

<div id="mblreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
    <form action="updatembl" method=POST>
    <tr>
  <td> New Mobile Number :</td><td><input type="number" required name=pass pattern="[0-9]{10}"></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
  <td colspan="2"> <input  style="width:100%;height:40px;font-size:20px; background-color:white"  type="submit" value="Update"></td>
    </tr>
    </form>
    </table>

</center>
</div>

<div id="addreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
    <form action="updateadd" method=POST>
    <tr>
  <td> Address :</td><td><textarea type="text" required name=pass cols="30" rows="10" ></textarea></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
  <td colspan="2"> <input  style="width:100%;height:40px;font-size:20px; background-color:white"  type="submit" value="Update"></td>
    </tr>
    </form>
    </table>

</center>
</div>


<div id="wreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
    <form action="updatewt" method=POST>
    <tr>
  <td> Weight :</td><td><input type="number" required name=pass></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
  <td colspan="2"> <input  style="width:100%;height:40px;font-size:20px; background-color:white"  type="submit" value="Update"></td>
    </tr>
    </form>
    </table>

</center>
</div>



<div id="hreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
    <form action="updateht" method=POST>
    <tr>
  <td> Height :</td><td><input type="text" required name=pass></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
  <td colspan="2"> <input  style="width:100%;height:40px;font-size:20px; background-color:white"  type="submit" value="Update"></td>
    </tr>
    </form>
    </table>
</center>
</div>


<div id="mreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
    <form action="updatem.php" method=POST>
    <tr>
  <td> Mail :</td><td><input type="mail" required name=pass></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
  <td colspan="2"> <input  style="width:100%;height:40px;font-size:20px; background-color:white"  type="submit" value="Update"></td>
    </tr>
    </form>
    </table>
</center>
</div>


<div id="preset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
  <form action="updateparents" method=POST>
      <table style="padding:20px;margin:15px;border:unset;background-color:white">
      <tr>
        <td> Father Name : </td><td><input type="text" name="pass"><br></td>
      </tr>
      <tr>
        <td> Mother Name : </td> <td> <input type="text" name="pass2"><br></td>
      </tr>
    <tr>  <td colspan="2"><input  style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Update"></td></tr>
      </table>
</form>
</center>
</div>



<div id="breset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
    <form action="updateb" method=POST>
    <tr>
  <td> Blood  group :</td><td><input type="text" required name=pass></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
  <td colspan="2"> <input  style="width:100%;height:40px;font-size:20px; background-color:white"  type="submit" value="Update"></td>
    </tr>
    </form>
    </table>
</center>
</div>




<div id="licreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
    <form action="updatelic" method=POST>
    <tr>
  <td> LIC :</td><td><input type="text" required name=pass></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
  <td colspan="2"> <input  style="width:100%;height:40px;font-size:20px; background-color:white"  type="submit" value="Update"></td>
    </tr>
    </form>
    </table>
</center>
</div>



<div id="app" class="tabcontent">
<h1>Add Appointment</h1>
Add Appointment

</div>


<div id="viewapp" class="tabcontent">
<h1>View Appointment</h1>



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





<script>

</script>

</body>
</html>

   
</body>
</html> 


<?php
}
?>