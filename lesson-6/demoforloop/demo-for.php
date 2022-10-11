<html>

<head>
    <title>Demo For</title>
</head>

<body>

    <h1>For Loop</h1>


    <form action="demo-for.php" method="post">

        <label for="">Enter your Name:</label>
        <input type="text" name="stuname">
            <br>
        <label for="">Enter Count:</label>
        <input type="number" name="cnt">
            <br>
        <input type="submit" value="Submit Name"  name="btnSubmit"/>

    </form>

    <?php

        if(isset($_POST['btnSubmit'])){
            //echo 'Button Click found ';
            $stuname = $_POST['stuname'];
            $cnt = $_POST['cnt'];
            //echo $stuname  . $cnt ; 

            for($i = 1; $i <= $cnt ; $i++ ){
             echo $i . '.' . $stuname ; 
             echo '<br>';
            }


        }

        // for ($x = 0; $x < 5; $x++ ){
        //     echo 'This is loop body '.$x; 
        //     echo '<br>';
        // }

    ?>


</body>

</html>