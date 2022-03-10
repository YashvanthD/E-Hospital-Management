<?php

session_start();
include '../assets/conn.php';


$sql = "select * 
		from patient
		";  

$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);

$errorr=mysqli_error($conn);
if ($errorr || $Nrow==0){
	if ($errorr) {
        echo '<h1 style="color:red">'.$errorr.'</h1><br>';
	}
        echo "Empty Patients";
	}
else {


	$rows=mysqli_fetch_assoc($result);
	$passF=$rows['password'];
	if($pass==$passF){
        $_SESSION['admin']=$rows['name'];

        echo '<meta http-equiv="refresh" content="0; url=./admin/admin.php">';
    	}
	else{
        echo $rows['name'],$rows['password'],$pass;
		echo '<h1 style="color:red">Invalid password</h1>';	

	    }


	}
?>