<?php

    $sql_host="localhost";
    $sql_username="root";
    $sql_password='pass';
    $conn = "";

    function connect_db($sql_database) 
    {
        global $sql_host, $sql_username, $sql_password, $sql_database;
        global $conn;
        $conn = new mysqli($sql_host,$sql_username,$sql_password);

        if(mysqli_connect_error($conn) !== null) 
        {
            return false;
        }

        $conn -> select_db($sql_database);
        return $conn;
    }

    function close_db($myconn)
    {
        if($myconn)
        {
            mysqli_close($myconn);
        }
    }

?>