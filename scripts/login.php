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
            
            //lookup users
            $sql = "SELECT * FROM login WHERE email='".$email."' AND password='".$pass."'";  
            $sql = $conn->query($sql);
            $sql = $sql->fetch_assoc();
            
            if($sql)  
            { 
                $dbemail = $_POST['email'];  
                $dbpassword = $_POST['pass'];  
                 
                //email found
                if($email == $dbemail && $pass == $dbpassword)  
                {  
                    session_start();  
                    $_SESSION['sess_user']=$email;  
                    
                    echo '<script>alert("Welcome!")</script>';
                    /* Redirect browser */ 
                    echo '<script>location.href= "../credentials.php";</script>';  
                }  
            //wrong password
            } 
            else 
            {  
                echo '<script>alert("User not found!")</script>';
                /* Redirect browser */  
                echo '<script>location.href= "../login.php";</script>';
            }  
            close_db($conn);
        } 
        //empty fields
        else 
        {  
            echo "All fields are required!";  
            /* Redirect browser */  
            header("Location: ../login.php");  
        }  
    }  
?>