<html>
    <head>
        <title>Name Maker</title>

    <style>
        #myTitle{
            color: blue;
            text-align: center;
        }

        #contentDiv{
            width: 40%;
            background-color: aqua;
            height: 150px;
            margin: auto;
            border-style: solid;
            padding-top: 20px;
        }
        
    </style>

    </head>

    <body>
        
        <h1 id="myTitle">Name Maker</h1>

        <div id="contentDiv">


            <form action="process-name.php" method="POST">

                <table align="center"> 
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="fname" required > </td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="lname" required > </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td> <input type="radio" value="M" name="gender" checked />  Male
                        <input type="radio" value="F" name="gender"/>  Male  <br></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" value="Make Name" name="btnSubmit" > </td>
                    </tr>
                </table>


            </form>



        </div>


    </body>

</html>