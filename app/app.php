<?php
session_start();

if((isset($_SESSION['isLogged'])) && ($_SESSION['isLogged'] == true)){
    header('Location: ../../app/app.php');
    exit();
}

$_SESSION['creedsy'] = $_SESSION['lname'].", ".$_SESSION['fname'];
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/appstyle.scss" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <header>
        <a href="#"><img src="../assets/own-logo.svg" alt="surfing nerd inc" class="logo"></a>
        <div class="counter" id="counter"></div>
        <div class="credsy" id="credsy">
            <?php
            echo $_SESSION['creedsy'];
            ?>
        </div>
    </header>
    <section class="menu">
        <nav>
            <ul>
                <li><a href="#">Dzieci</a></li>
                <li><a href="#">Oceny</a></li>
                <li><a href="#">Plan lekcji</a></li>
                <li><a href="#">Konto</a></li>
                <li><a href="wyloguj.php">Wyloguj</a></li>
            </ul>
        </nav>
    </section>
    <script type="text/javascript" src="scripts/counter.js"></script>
</body>

</html>