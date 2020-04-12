<?php
    include 'db.php';

    $sql_database="litepass-users";

    $conn = connect_db($sql_database); 
    $db_table = "credentials";

    $error = mysqli_connect_error();
    if($error != null)
    {
        $output = "<p>Unable to connect to database</p>".$error;
        exit($output);
    }
    
    else
    {
        $email = getSessionID();
        //Read Data
        $sql = "SELECT siteApp,user,password FROM credentials WHERE email Like ?";
        
        $statement = $conn->prepare($sql);
        $statement->bind_param("s", $email); 
        $statement->execute();
        $result = $statement->get_result();
        
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                echo "<br/>Site/App: ". $row['siteApp'] . "<br/>Username/Email: ". $row["user"]."<br/>Password: ".$row["password"] ."<br/>";
            }
        }
        else
        {
            echo "0 results";
        }
        mysqli_close($conn);
    }  
?>  