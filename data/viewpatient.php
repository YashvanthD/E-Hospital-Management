<?php


session_start();

$id=$_POST['did'];

echo $id;





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
</head>
<body>

<h1>
    <?php 
echo $id;
    ?>
</h1>
    
</body>
</html>