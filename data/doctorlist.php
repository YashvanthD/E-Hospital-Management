<?php

include '../assets/conn.php';


$sql = "select * 
		from doctor
        order by did; ";  

$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);

$errorr=mysqli_error($conn);
if ($errorr || $Nrow==0){
	if ($errorr) {
        echo '<h1 style="color:red">'.$errorr.'</h1><br>';
	}
        echo "Empty Doctors";
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
            Specialist
        </td>
        <td>
            Hospital
        </td>
        <td>
            Mobile
        </td>
        <td>
            Delete
        </td>
    </tr>";
    $i=0;
while($i<$Nrow){

	$rows=mysqli_fetch_assoc($result);

	$did=$rows['did'];
    $name=$rows['name'];
    $hos=$rows['hospital'];
    $spe=$rows['specialization'];
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
        $spe
    </td>
    <td>
  $hos
    </td>
    <td>
       $ph
    </td>
    <td>
        <form action='deleted' method=POST><input type='text' name='did' hidden value='$did'> <input type='submit' style='width:100%' value='Delete'></form>
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





