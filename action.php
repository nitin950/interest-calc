<?php
           $host = "localhost";
           $user = "root";
           $password = "";
           $dbname = "test";;
           $con = mysqli_connect($host, $user, $password, $dbname);
           if (!$con) {
             die("Connection failed: " . mysqli_connect_error());
           }
           else
           {
                  $sno = 0;
                  $amount = $_POST["amount"];
                  $rate = $_POST["rate"];
                  $time = $_POST["time"];
		  $int = ($amount*$rate*$time)/100;
                  $sql = "INSERT INTO interestcal(amount, rate, time, interest)
                  VALUES ($amount, $rate, $time, $int)";

                  if ($con->query($sql) === TRUE) {
                           

                             header("Location: http://127.0.0.1/projects/cal.php");
                      } else {
                           echo "Error: " . $sql . "<br>" . $con->error;
                      }
         }
?>  
