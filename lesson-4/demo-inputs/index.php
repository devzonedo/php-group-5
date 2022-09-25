<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Demo Inputs </title>
    </head>

    <body>
        <h2>Demo Inputs</h2>



<!-- 

        <form action="emp-details.php" method="post">

        First Name :  <input type="text" name="fname"/> <br>
        Last Name  :  <input type="text" name="lname"/>  <br>
        Gender : <input type="radio" name="gender" value="M" checked> Male 
                 <input type="radio" name="gender" value="F"> Female  <br>
       
        Date of Birth : <input type="date" name="dob" /> <br>
        Age : <input type="number" name="age" /> <br>

        City : <select name="city">
                    <option value="Colombo">Colombo</option>
                    <option value="Gampaha">Gampaha</option>
               </select>

                 <br>
        Employment : <input type="checkbox" name="self" value="SELF">  Self 
        <input type="checkbox" name="salary" value="SALARY">  Salary
        <br>

        Password : <input type="password" name="pword" />

        <br>
        Address : <textarea name="address"> </textarea>

<br>
        <input type="submit"/>
        </form>

-->


    


        <hr>


        <form action="emp-details.php" method="POST">

        <table>
            <tr>
                <td>First Name</td>
                <td>: <input type="text" name="fname"/> </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>: <input type="text" name="lname"/> </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>: <input type="radio" name="gender" value="M" checked> Male 
                 <input type="radio" name="gender" value="F"> Female </td>
            </tr>
            <tr>
                <td> Date of Birth </td>
                <td>: <input type="date" name="dob" /> </td>
            </tr>
            <tr>
                <td> Age </td>
                <td>: <input type="number" name="age" /> </td>
            </tr>

            <tr>
                <td> City </td>
                <td>: <select name="city">
                    <option value="Colombo">Colombo</option>
                    <option value="Gampaha">Gampaha</option>
               </select> </td>
            </tr>


            <tr>
                <td> Employment </td>
                <td>: <input type="checkbox" name="self" value="SELF">  Self 
        <input type="checkbox" name="salary" value="SALARY">  Salary</td>
            </tr>

            <tr>
                <td>Password</td>
                <td>: <input type="password" name="pword" /> </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>: <textarea name="address"> </textarea> </td>
            </tr>
            <tr>
                <td></td>
                <td>: <input type="submit"/> </td>
            </tr>
        </table>

        </form>






    </body>
    
</html>
