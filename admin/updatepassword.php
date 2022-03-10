<?php

include '../assets/conn.php';

$sql = "update admin set password='123' where name='name';";  

$result = mysqli_query($conn, $sql);

$errorr=mysqli_error($conn);
if ($errorr ){

        echo '<h1 style="color:red">'.$errorr.'</h1><br><h2>Check for Other way</h2>';
        
		}
else {
        echo 'SUCCESS';
	}
    
    
    ?>
