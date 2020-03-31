<?php   
    session_start();  
    unset($_SESSION['sess_user']);  
    session_destroy(); 

    echo '<script>alert("You are now logged out.")</script>';
    /* Redirect browser */  
    echo '<script>location.href= "../login.html";</script>';      
?>