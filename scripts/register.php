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
                    echo "Account Successfully Created";
                    /* Redirect browser */  
                    header("Location: ../login.html");  
                }
                //not complete 
                else 
                {  
                    echo "Failure!"; 
                    /* Redirect browser */  
                    header("Location: ../login.html");   
                }  
  
            } 
            //username already exists
            else 
            {  
                echo "That username already exists! Please try again with another.";
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