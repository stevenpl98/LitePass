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
  
                    /* Redirect browser */  
                    header("Location: ../credentials.html");  
                }  
            //wrong password
            } 
            else 
            {  
                echo "Invalid username or password!"; 
                /* Redirect browser */  
                header("Location: ../login.html");   
            }  
  
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