<html>
    <head>
        <title>Emplye Details</title>
    </head>
    <body>
        
<h2>Details</h2>
    

    <?php
  
      $fname =  $_POST['fname'];
      $lname = $_POST['lname'];
      $gender =  $_POST['gender'];
      $dob = $_POST['dob'];
      $age = $_POST['age'];
      $city = $_POST['city'];

      echo 'First Name:'.$fname;
      echo '<br>Last Name:'.$lname;
      echo '<br>Gender Name:'.$gender;
      echo '<br>Date Of Birth:'.$dob;
      echo '<br>Age:'.$age;
      echo '<br>city:'.$city;

      
      echo '<br>Employment:';
      if(isset($_POST['self'])){
        $self = $_POST['self'];
        echo $self;
      }

      if(isset($_POST['salary'])){
        $salary = $_POST['salary'];
        echo $salary;
      }


      $pword = $_POST['pword'];
      echo '<br>Password:'.$pword;

      $address = $_POST['address'];
      echo '<br>Address:'.$address;


    ?>






    </body>
</html>