
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
   Father Name <span style="color:red">*</span>
                </td>
                <td>
    <input type="text" name="fname" id="" required>
                </td>
        </tr>

        <tr>
                <td>
  Mother Name <span style="color:red">*</span>
                </td>
                <td>
    <input type="text" name="mname" id="" required>
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
                Height
                </td>
                <td>
             <input  type="number" name="height" >
                </td>
            </tr>
            <tr>
                <td>
                Weight
                </td>
                <td>
             <input  type="number" name="weight" >
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