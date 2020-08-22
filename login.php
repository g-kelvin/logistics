<?php
     $con= mysqli_connect("localhost","bwdscoke", "oZG)K#8y0r26hB","bwdscoke_bwds");
    if(!$con){
        echo "Connection Aborted";
    }
    else{

        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $qry =  "SELECT * FROM admin where email = '$email' AND pass = '$pass'";
        $res = mysqli_query($con,$qry);
        if(mysqli_num_rows($res)>0){
            while ($row= mysqli_fetch_assoc($res)){
                echo "Login Successful".header('refresh:0; url=dashboard.php');

                
            }

        }
        else{
            echo "<center style ='color: red'><h3><br><br>Kindly Try again</h3></center><br><br>".header('refresh:0; url=login.html');
        }
    }
    


  ?>
