<?php   
    session_start();

    if( !isset( $_SESSION['username']) )
    {
        echo "You are not authorized to view this page. Go back <a href= 'home.html'>home</a>";
        exit();
    }

    /*<? include 'scripts/start.php' ?> */ //Use in any page right under body tag - *Must convert html file to php*
?>