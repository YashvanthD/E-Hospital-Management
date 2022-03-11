<?php
   session_start();
include 'conn.php';
$name=strtolower($_POST['dname']);
$aadhar=$_POST['daadhar'];
$gen=$_POST['dgender'];
$num=$_POST['dnumber'];
$mail=$_POST['dmail'];
$dob=$_POST['ddob'];
$add=$_POST['dadress'];


if(isset($_POST['pass']))
{
    $pass=$_POST['pass'];

}
else{
    $pass=$name[0].$name[1].$dob[0].$dob[1].$dob[2].$dob[3];
}
echo $pass;

$sql = "CREATE TABLE IF NOT EXISTS patient(
    pid int NOT NULL AUTO_INCREMENT,
    name varchar(128) NOT NULL,
    password varchar(128),
    gender varchar(128),
    mobile varchar(12) UNIQUE,
    mail varchar(128) UNIQUE,
    address varchar(512),
    aadhar varchar(256),
    dob date,
    primary key(pid))     ;  ";  

$result = mysqli_query($conn, $sql);

$sql="INSERT INTO patient(name,aadhar,dob,gender,mobile,mail,address) 
                VALUES ('$name','$aadhar','$dob','$gen','$num','$mail','$add');";

$result = mysqli_query($conn, $sql);

$errorr=mysqli_error($conn);

if ($errorr ){
        echo $errorr;
        $_SESSION['emsg']='Already Exists <br>'.$errorr;
        echo '<meta http-equiv="refresh" content="10; url=error.php">';
        
		}
else {
    $_SESSION['emsg']='Successfully Added Exists';
    echo '<meta http-equiv="refresh" content="0; url=success.php">';
	}
    
    
    ?>

