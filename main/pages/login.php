<?php

session_start();

if((isset($_SESSION['isLogged'])) && ($_SESSION['isLogged'] == true)) {
    header('Location: ../app/app.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UST-8">
        <meta name="viewport" content="width = device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/createpage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    </head>

    <body  class="hero-img">
        <section>
            <nav id="overlay">
                <img src="../../assets/exit.svg" class="close-btn" id="close-menu">
                <ul>
                    <li><a href="http://localhost/beeschool/index.html">Main page</a><span>Back to main page</span></li>
                    <li><a href="http://localhost/beeschool/main/pages/register.php">Sign up</a><span>Create account to use app!</span></li>
                    <li><a href="http://localhost/beeschool/main/pages/contact.php">Contact</a><span>Any question? feel free to contact me!</span></li>
                    <li><a href="http://localhost/beeschool/main/pages/aboutapp.html">About me</a><span>Few words about me!</span></li>
                </ul>
                <div class="bottom-menu">
                    <h5>Get in touch</h5>
                    <div class="social-media">
                        <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                        <a href="https://youtube.com"><i class="fa fa-youtube"></i></a>
                        <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                        <a href="https://linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </nav>
        </section>
        <header>
            <a href="http://localhost/beeschool/index.html"><img src="../../assets/own-logo.svg" alt="surfing nerd inc" class="logo"></a>
            <img src="../../assets/menu.svg" class="menu-btn" id="open-menu">
        </header>
        <section>
        <form class="loginform" method="POST" action="../php/zaloguj.php">
            <fieldset> 
                <legend>Fill the gaps to log in!</legend>
                <div>
                    <label>User mail</label><br>
                    <input type="mail" id="mail" name="mail" placeholder="Your mail..." />
                </div>
                <div>
                    <label>Password</label><br>
                    <input type="password" id="userpassword" name="password" placeholder="Password..." />
                </div>
                <div>
                    <button type="submit" class="submit-btn">Click to log in</button>
                    <div id="log_err_msg">
                </div>
            </fieldset>
        </section>
        </form>
        <script type="text/javascript" src="../scripts/main.js"></script>
    </body>

</html>
