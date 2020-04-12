<?php
    error_reporting(E_ALL ^ E_NOTICE);  
    
    date_default_timezone_set('EST');
    $hrs = date('G');

    $user= $_SESSION['sess_user'];

    if ($hrs < 12)
    {
        echo "Good Morning {$user}";
    }
    else if ($hrs >= 12 && $hrs <18)
    {
       echo "Good Afternoon {$user}";
    }
    else
    {
        echo "Good Evening {$user}";
    }

    /*<? include 'scripts/start.php' ?> */ //Use in any page right under body tag - *Must convert html file to php*
?>