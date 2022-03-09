<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
</head>
<body>
<!-- <link rel="stylesheet" href="style.css"> -->
<style>
body {
    font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  margin-top:20px;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}
.header {
    padding: 10px 16px;
    width:100%
    background: #555;
    color: #f1f1f1;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    margin-top:30px;
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.login{
    padding:30px;
    margin-left:300px;
    background-color:gray;
    width:50%;
    align-content:center;
    text-align:center;
}
</style>
</head>
<script src="js.js"></script>
<body>

<div class="header" id="myHeader">
  <center><h2>Siddaganga Instutute of Technology</h2></center>
</div>

<div class="tab">
<button class="tablinks" onclick="openCity(event, 'home')" id="defaultOpen">Home</button>
  <button class="tablinks" onclick="openCity(event, 'about')">About</button>
  <button class="tablinks" onclick="openCity(event, 'contact')">Contact </button>
</div>


<div class="tab" style="float:right;">
  <button class="tablinks" onclick="openCity(event, 'patient')" id="defaultOpen">Patient</button>
  <button class="tablinks" onclick="openCity(event, 'doctor')">Doctor</button>
  <button class="tablinks" onclick="openCity(event, 'admin')">Admin</button>

</div>

<div id="patient" class="tabcontent" >
  <h3>Patient</h3>
  <div class='login'>
      <table>
          <tr><td>
    <form action="main.php">
        <input type="text"> </td></tr>
        <tr><td><input type="password"></td></tr>
        <tr><td><input type="submit"></td></tr>

    </form>        <tr><td><a href="upform.php"><button>Logup</button></a></td></tr>
    </table>
</div>
</div>

<div id="doctor" class="tabcontent">
  <h3>Doctor</h3>
  <div class='login'>
      <table>
          <tr><td>
    <form action="main.php" method="POST">
        <input type="text"> </td></tr>
        <tr><td><input type="password"></td></tr>
        <tr><td><input type="submit"></td></tr>
    </form>
    </table>
    </div>
</div>
</div>

<div id="admin" class="tabcontent">
  <h3>Admin</h3>
  <div class='login'>
      <table>
          <tr><td>
    <form action="#">
        <input type="text"> </td></tr>
        <tr><td><input type="password"></td></tr>
        <tr><td><input type="submit"></td></tr>
    </form>
    </table>
</div>
</div>


<div id="about" class="tabcontent">
  <h3>Admin</h3>
  <div class='login'>
      <table>
          <tr><td>
    <form action="#">
        <input type="text"> </td></tr>
        <tr><td><input type="password"></td></tr>
        <tr><td><input type="submit"></td></tr>
    </form>
    </table>
</div>

</div><div id="contact" class="tabcontent">
  <h3>Admin</h3>
  <div class='login'>
      <table>
          <tr><td>
    <form action="#">
        <input type="text"> </td></tr>
        <tr><td><input type="password"></td></tr>
        <tr><td><input type="submit"></td></tr>
    </form>
    </table>
</div>
</div>






















<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 
