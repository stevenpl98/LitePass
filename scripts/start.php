<?php   
    session_start();

    if( !isset( $_SESSION['sess_user']) )
    {
        echo '<script>alert("You are not authorized to view this page. Please click OK and Log in or Sign Up.")</script>';
        /* Redirect browser */  
        echo '<script>location.href= "login.html";</script>';
        //exit();
    }

    /*<? include 'scripts/start.php' ?> */ //Use in any page right under body tag - *Must convert html file to php*
?>