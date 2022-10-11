<html>

<head>
    <title>Demo Switch</title>
</head>

<body>

    <h1>Switch</h1>

    <form action="demo-switch.php" method="post">
        <label for="">Select City Name:</label>

        <select name="cityname">
            <option value="">--Select the city--</option>
            <option value="NEGOMBO">Negombo</option>
            <option value="GAMPAHA">Gampaha</option>
            <option value="COLOMBO">Colombo</option>
            <option value="KANDY">Kandy</option>
        </select>

        <input type="submit" value="Submit" name="btnSubmit" />
    </form>



    <?php



    if (isset($_POST['btnSubmit'])) {

        $city = $_POST['cityname'];

        switch ($city) {
            case 'NEGOMBO':
    ?>

                <p>Negombo is one of the major commercial hubs in the country and the administrative centre of
                    Negombo Division. Negombo has about 142,136 population
                    within its divisional secretariat division</p>
                <img src="negombo-image.jpg" alt="">

            <?php

                break;

            case 'GAMPAHA':
            ?>
                <p> Gampaha is also the second largest municipal centre in Gampaha district,
                    after Negombo. Gampaha has a land area of
                    25.8 ha (64 acres) and is home to the offices of 75 government institution</p>
                <img src="gampaha-image.jpg" alt="">

    <?php
                break;

            case 'COLOMBO':



                break;
            case 'KANDY':



                break;
        }


        
    }

    ?>


</body>

</html>