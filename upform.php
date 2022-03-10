<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <link rel="stylesheet" href="style.css">

    <style>
table,
td,
tr {
    padding: 5px;
    margin: 5px;
    border: 2px solid black;
    background-color: #f9f9fd;
}

table {
    box-shadow: 0 10px 50px 10px black;
}

a{
    text-decoration:unset;
    text-decoration:unset;
    color:black;
}
button{
    width: 150px;
    border-radius:8px;
    height: 30px;
    background-color: #1b9a50;;
    font-size: 20px;
    color:black;
    text-align: center;
}

td {
   
    padding: 10px;
}

input[type="submit"] {
    width: 150px;
    border-radius:8px;
    height: 30px;
    background-color: #1b9a50;;
    font-size: 20px;
 
    text-align: center;
}

body {
    background-color: #263238;
    color: black;
}
input[type="text"],input[type="date"],input[type="number"],textarea {
 width:100%;
}

h1,h2{
    text-shadow: 10px 10px 5px black;
}
</style>
</head>
<body>
<center>    
<h1 style="color:white">
    Siddaganga Institute of Technology
</h1>
<h2 style="color:yellow">
    Healthcare Center
</h2>
</center>
<br>


<center>
    <form action="add.php" method="POST">
        <table>
            <tr>
                <td>
    Name <span style="color:red">*</span>
                </td>
                <td>
    <input type="text" name="name" id="" required>
                </td>
        </tr>
            <tr>
                <td>
Adhaar <span style="color:red">*</span>
                </td>
                <td>
                <input type="text" name="usn" id="" pattern="[0-9]{12}" title="Give valid Aadhar No 8888-8888-8888" required>
                </td>
            </tr>
            <tr>
                <td>
DOB <span style="color:red">*</span>
                </td>
                <td>
<input type="date" name="dob" id="" required>
                </td>
            </tr><tr>
                <td>
Gender <span style="color:red">*</span>
                </td>
                <td>
                Male <input type="radio" name="gender" id="" value="male" checked> Female<input type="radio" name="gender" id="" value="female">
                </td>
            </tr>
<!--             
            <tr>
                <td>
Symptoms  <span style="color:red">*</span>
                </td>
                <td>
                <input type="checkbox" id="cough" name="sym[]" value="cough" > Cough      
                <input type="checkbox" id="cold" name="sym[]" value="cold"> Cold 
                <input type="checkbox" id="headache" name="sym[]" value="headache"> Headache 
                <input type="checkbox" id="abdominalpain" name="sym[]" value="abdominalpain"> Abdominal pain 
                <input type="checkbox" id="fever" name="sym[]" value="fever"> Fever  <br>
                <input type="checkbox" id="gastric" name="sym[]" value="gastric"> Gastric
                <input type="checkbox" id="vomiting" name="sym[]" value="vomiting"> Vomiting  
                <input type="checkbox" id="bodypain" name="sym[]" value="bodypain"> Body pain
                <input type="checkbox" id="runnynose" name="sym[]" value="runnynose"> Runny nose
                <input type="checkbox" id="soarthroat" name="sym[]" value="soarthroat"> Soar throat <br><br>
                Other Symptoms    <textarea  name="symarea"> </textarea> 


                </td>
            </tr> -->
            
            <!-- <tr>
                <td>
                Medicines <span style="color:red">*</span>
                </td>
                <td>
       <textarea  name="medicine" required> </textarea> 
            
    </td>
            </tr><tr>
                <td>
        Disease  <span style="color:red">*</span>
                </td>
                <td>
                <textarea  name="dieseas" required> </textarea> 
                </td>
            </tr> -->



            
            <tr>
                <td>
               gmail<span style="color:red">*</span>
                </td>
                <td>
             <input  type="gmail" name="gmail" >
                </td>
            </tr>
            <tr>
                <td>
             Phone <span style="color:red">*</span>
                </td>
                <td>
             <input type="number" name="phone" pattern="[0-9]{10}">
                </td>
            </tr>

           
            <tr>
                <td>
               Password<span style="color:red">*</span>
                </td>
                <td>
             <input  type="password" name="pass" >
                </td>
            </tr>
            <tr>
                <td>
             Reenter  Password <span style="color:red">*</span>
                </td>
                <td>
             <input type="password" name="passv" >
                </td>
            </tr>
            <tr>
                <td>
                Blood Group 
                </td>
                <td>
             <input  type="text" name="bloodgroup" >
                </td>
            </tr>
            <tr>
                <td>
                Address 
                </td>
                <td>
             <textarea name="address" id="" cols="3" rows="1"></textarea> 
                </td>
            </tr>


        <tr>

      <td colspan="2" style="text-align: center;"> <input  type="submit" value="Submit"></td> 
        </tr>
  
  
        </table>


    </form>

    </center>
</body>
</html>

