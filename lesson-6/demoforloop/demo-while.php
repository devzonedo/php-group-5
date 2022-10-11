<html>

<head>
    <title>Demo While</title>
</head>

<body>

    <h1>While / do Loop</h1>

    <form action="demo-while.php" method="post">
        <label for="">Enter Pet Name:</label>
        <input type="text" name="pet">
            <br>
        <label for="">Pet Age:</label>
        <input type="number" name="cnt">
            <br>
        <input type="submit" value="Submit Pet"  name="btnSubmit"/>
    </form>

    <?php

        if(isset($_POST['btnSubmit'])){

            $pet = $_POST['pet'];
            $cnt = $_POST['cnt'];


            $i = 1;
            do{

                echo  $i . '.' .  $pet;
                echo '<br>';
                $i++;

            }while($i <= $cnt);

            // $i = 1;
            // while($i <= $cnt ){
            //     echo  $i . '.' .  $pet;
            //     echo '<br>';
            //     $i++;
            // }


        }



        // $i = 0;
        // while($i < 10 ){
        //     echo 'This is while body';
        //     echo '<br>';
        //     $i++;
        // }



        // $i = 0;
        // do{

        // }while($i < 10); 





    ?>


</body>

</html>