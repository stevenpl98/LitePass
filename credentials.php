<!DOCTYPE html>
<html lang="en">

<head>
    <title> LitePass - Credentials </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/dark-mode.css">

    <script type="text/javascript" src="scripts/Onload.js"></script>

</head>

<body>
    <? include 'scripts/start.php' ?>
    <? include 'scripts/greeting.php' ?>
    <div id="page-container">
        <div id="content-wrap">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="login.php">Login/Create Account</a>
                <a href="home.php">Home</a>
                <a href="credentials.php">Credentials</a>
                <a href="index.php">About</a>
                <a href="scripts/logout.php">Logout</a>
            </div>

            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

            <? include 'scripts/get.php' ?>
        </div>
    </div>
    <footer id="footer">
        <p id="copyright">Built by Lite Industries &copy 2020</p>

        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="darkSwitch">
            <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
        </div>

        <script src="scripts/Darkmode.js"></script>

        <p><a href="index.php" id="back-to-main">Back To Main</a></p>
    </footer>
</body>

</html>