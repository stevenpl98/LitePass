<?php 
    $sql_database="litepass-users";

    //post submitted
    if(isset($_POST["submit"]))
    {
        //email and pass fields not empty  
        if(!empty($_POST['email']) && !empty($_POST['pass'])) 
        {  
            //credentials input from email
            $email = $_POST['email'];  
            $pass = $_POST['pass'];  

            //connect to db
            require 'db.php';
            $conn = connect_db($sql_database); 
  
            //lookup username in case already exists
            $sql = "SELECT * FROM login WHERE email='".$email."'";  
            $sql = $conn->query($sql);
            $sql = $sql->fetch_assoc(); 
            
            //email not found 
            if(!$sql)
            {  
                // attempt to add email
                $sql = "INSERT INTO login(email,password) VALUES('$email','$pass')";  
  
                $result = $conn->query($sql);  
                if($result)
                {  
                    echo '<script>alert("Acccount Succesfully Added!")</script>';
                    /* Redirect browser */  
                    echo '<script>location.href= "../login.php";</script>';  
                }
                //not complete 
                else 
                {  
                    echo '<script>alert("Failure!")</script>';
                    /* Redirect browser */  
                    echo '<script>location.href= "../login.php";</script>';  
                }  
  
            } 
            //email already exists
            else 
            {  
                echo '<script>alert("That email already exists! Please try again with another.")</script>';
                /* Redirect browser */  
                echo '<script>location.href= "../login.php";</script>';    
            }  
            close_db($conn);
        } 
        //empty fields
        else 
        {  
            echo '<script>alert("All fields are required!")</script>';
            /* Redirect browser */  
            echo '<script>location.href= "../login.php";</script>';     
        }  
    }  
?>  