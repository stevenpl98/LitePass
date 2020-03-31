<?php  
    //post submitted
    if(isset($_POST["submit"]))
    {  
        //user and pass fields not empty
        if(!empty($_POST['user']) && !empty($_POST['pass'])) 
        {  
            //credentials input from user
            $user = $_POST['user'];  
            $pass = $_POST['pass'];  
            
            //connect to db
            require 'db.php';
            $conn = connect_db();  
            
            //lookup users
            $sql = "SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'";  
            $sql = $conn->query($sql);
            $sql = $sql->fetch_assoc();
            
            if($sql)  
            { 
                $dbusername = $_POST['user'];  
                $dbpassword = $_POST['pass'];  
                 
                //user found
                if($user == $dbusername && $pass == $dbpassword)  
                {  
                    session_start();  
                    $_SESSION['sess_user']=$user;  
                    
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
                echo '<script>location.href= "../login.html";</script>';
            }  
            //close_db($conn);
        } 
        //empty fields
        else 
        {  
            echo "All fields are required!";  
            /* Redirect browser */  
            header("Location: ../login.html");  
        }  
    }  
?>