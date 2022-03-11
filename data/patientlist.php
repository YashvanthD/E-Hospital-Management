<?php

include '../assets/conn.php';


$sql = "select * 
		from patient
        order by pid; ";  

$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);

$errorr=mysqli_error($conn);
if ($errorr || $Nrow==0){
	if ($errorr) {
        echo '<h1 style="color:red">'.$errorr.'</h1><br>';
	}
        echo "Empty Patient list";
        $table='';
	}
else {

    $table="<center><table style='width:90%; 
   '>
    <tr  class='boar'>
        <td>
            ID
        </td>
        <td>
            Name
        </td>
        <td>
            aadhar
        </td>
        <td>
            gender
        </td>
        <td>
            Mobile
        </td>
		<td>
		View
	</td>
        <td>
            Delete
        </td>
    </tr>
	<tr><td colspan='7'><hr></td></tr>
	";
    $i=0;
while($i<$Nrow){

	$rows=mysqli_fetch_assoc($result);

	$did=$rows['pid'];
    $name=$rows['name'];
    $hos=$rows['aadhar'];
    $spe=$rows['gender'];
    $ph=$rows['mobile'];
    $table.="
    <tr>
    <td>
        $did
    </td>
    <td>
        $name
    </td>
    <td>
        $hos
    </td>
    <td>
  $spe
    </td>
    <td>
       $ph
    </td>
	<td>
	<form action='../data/viewpatient.php' method=POST><input type='text' name='did' hidden value='$did'> <input type='submit' style='width:100%;background-color:green' value='View'></form>
</td>

    <td>
        <form action='deletep' method=POST><input type='text' name='did' hidden value='$did'> <input type='submit' style='width:100%;background-color:red' value='Delete'></form>
    </td>
    </tr>";
    $i=$i+1;



        }
        $table.="</table></center>";

	}
?>


<style>
    tr{width: 100%;
    margin: 22px;}
    .boar{
        border: solid black 2px;
    }
</style>





