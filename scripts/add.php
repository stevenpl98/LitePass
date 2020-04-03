<?php
    include 'start.php';

    $sql_database="litepass-users";

    //post submitted
    if(isset($_POST["submit"]))
    {
        //user and pass fields not empty  
        if(!empty($_POST['siteApp']) && !empty($_POST['user']) && !empty($_POST['pass'])) 
        {  
            //credentials input from user
            $email = getSessionID();
            $siteApp = $_POST['siteApp'];
            $user = $_POST['user'];  
            $pass = $_POST['pass'];  

            //connect to db
            require 'db.php';
            $conn = connect_db($sql_database); 
  
            // attempt to add user
            $sql = "INSERT INTO credentials(email,siteApp,user,password) VALUES('$email','$siteApp','$user','$pass')";  
  
            $result = $conn->query($sql);  
            if($result)
            {  
                echo '<script>alert("Acccount Succesfully Added!")</script>';
                /* Redirect browser */  
                //echo '<script>location.href= "../home.php";</script>';  
            }
            //not complete 
            else 
            {  
                echo '<script>alert("Failure!")</script>';
                /* Redirect browser */  
                //echo '<script>location.href= "../home.php";</script>';  
            }  
        }
        close_db($conn);  
    }  
?>  