<?php   
    session_start();

    $file = basename($_SERVER['PHP_SELF']);

    if($file == "credentials.php" || $file == "home.php")
    {
        if( !isset( $_SESSION['sess_user']))
        {
            echo '<script>alert("You are not authorized to view this page. Please click OK and Log in or Sign Up.")</script>';
            /* Redirect browser */  
            echo '<script>location.href= "login.php";</script>';
            //exit();
        }
    }
    
    function getSessionID()
    {
        return $_SESSION['sess_user'];
    }

    /*<? include 'scripts/start.php' ?> */ //Use in any page right under body tag - *Must convert html file to php*
?>