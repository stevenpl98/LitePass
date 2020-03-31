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
  
            //lookup username in case already exists
            $sql = "SELECT * FROM login WHERE username='".$user."'";  
            $sql = $conn->query($sql);
            $sql = $sql->fetch_assoc(); 
            
            //user not found 
            if(!$sql)
            {  
                // attempt to add user
                $sql = "INSERT INTO login(username,password) VALUES('$user','$pass')";  
  
                $result = $conn->query($sql);  
                if($result)
                {  
                    echo '<script>alert("Acccount Succesfully Created!")</script>';
                    /* Redirect browser */  
                    echo '<script>location.href= "../login.html";</script>';  
                }
                //not complete 
                else 
                {  
                    echo '<script>alert("Failure!")</script>';
                    /* Redirect browser */  
                    echo '<script>location.href= "../login.html";</script>';  
                }  
  
            } 
            //username already exists
            else 
            {  
                echo '<script>alert("That username already exists! Please try again with another.")</script>';
                /* Redirect browser */  
                echo '<script>location.href= "../login.html";</script>';    
            }  
            close_db($conn);
        } 
        //empty fields
        else 
        {  
            echo '<script>alert("All fields are required!")</script>';
            /* Redirect browser */  
            echo '<script>location.href= "../login.html";</script>';     
        }  
    }  
?>  