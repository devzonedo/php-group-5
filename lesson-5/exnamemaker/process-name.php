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
            text-align: center;
        }
        
    </style>

    </head>

    <body>
        
        <h1 id="myTitle">Name Maker</h1>

        <div id="contentDiv">



        <?php
        
        if(isset($_POST['btnSubmit'])){

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];





        ?> 


            <h2> Hi  
                <?php echo  $fname;  ?>   <?php  echo  $lname; ?>
            </h2>


         <?php
        }
        ?>


        
        <a href="index.php">Back</a>






        </div>


    </body>

</html>