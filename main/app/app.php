<?php

    session_start();

    if(!isset($_SESSION['isLogged'])){
        header('Location: ../index.html');
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UST-8">
    <meta name="viewport" content="width = device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/appstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body class="hero-img">
    <section>
        <nav id="overlay">
            <img src="../../assets/exit.svg" class="close-btn" id="close-menu">
            <ul>
                <li><a href="oceny.html">Marks</a></li>
                <li><a href="plan.html">Schedule</a></li>
                <li><a href="account.html">Account</a></li>
                <li><a href="php/wyloguj.php">Logout</a></li>
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
        <a href="#"><img src="../../assets/own-logo.svg" alt="surfing nerd inc" class="logo"></a>
        <img src="../../assets/menu.svg" class="menu-btn" id="open-menu">
    </header>
    <section class="hero">
        <h1>Bee school!</h1>
        <h3 id="creedsy">Imie i nazwisko</h3>
        <h5>Wybierz z menu co chcesz zrobic!</h5>
    </section> 
    <script type="text/javascript" src="scripts/main.js"></script>
</body>

</html>