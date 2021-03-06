<!DOCTYPE html>
<html lang="en">

<head>
    <title> LitePass - Account </title>

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

            <div class="header">
                <h1>LitePass</h1>
                <p>Made for your password needs</p>
            </div>

            <div class="form">

                <ul class="tab-group">
                    <li class="tab active"><a href="#signup">Sign Up</a></li>
                    <li class="tab"><a href="#login">Log In</a></li>
                </ul>

                <div class="tab-content">
                    <div id="signup">
                        <h1>Sign Up for Free</h1>

                        <form action="scripts/register.php" method="post">

                            <div class="field-wrap">
                                <label>
                                    Email<span class="req">*</span>
                                </label>
                                <input type="email" required autocomplete="off" name= "email"/>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Password<span class="req">*</span>
                                </label>
                                <input type="password" required autocomplete="off" name= "pass"/>
                            </div>

                            <button type="submit" value= "Register" class="button button-block" name = "submit"/>Get Started</button>

                        </form>

                    </div>

                    <div id="login">
                        <h1>Welcome Back!</h1>

                        <form action="scripts/login.php" method="post">

                            <div class="field-wrap">
                                <label>
                                    Email<span class="req">*</span>
                                </label>
                                <input type="email" required autocomplete="off" name= "email"/>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Password<span class="req">*</span>
                                </label>
                                <input type="password" required autocomplete="off" name= "pass"/>
                            </div>

                            <p class="forgot"><a href="#">Forgot Password?</a></p>

                            <button type= "submit"  value= "Login" class="button button-block" name= "submit"/>Log In</button>
                        </form>
                    </div>
                </div><!-- tab-content -->
            </div> <!-- /form -->
        </div>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script id="rendered-js" type="text/javascript" src="scripts/LoginForm.js"></script>
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

</hmtl>