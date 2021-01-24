<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UST-8">
    <meta name="viewport" content="width = device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/contact.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body class="hero-img">
    <section>
        <nav id="overlay">
            <img src="../../assets/exit.svg" class="close-btn" id="close-menu">
            <ul>
                <li><a href="http://localhost/beeschool/main/pages/login.php">Sign in</a><span>Just log in and enjoy!</span></li>
                <li><a href="http://localhost/beeschool/main/pages/register.php">Sign up</a><span>Create account to use app!</span></li>
                <li><a href="http://localhost/beeschool/index.html">Back to main page</a><span>Main page!</span></li>
                <li><a href="http://localhost/beeschool/main/pages/aboutapp.html">About App</a><span>Few words about me!</span></li>
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
    <section class="hero">
        <h1>Let's write to us!</h1>
        <form>
            <div>
                <label>Mail</label><br>
                <input type="mail" name="contactmail" placeholder="Mail">
            </div>
            <div>
                <label>Subject</label><br>
                <input type="text" name="contactsubject" placeholder="Subject">
            </div>
            <div>
                <label>Your text</label><br>
                <textarea placeholder="Write here something">

                </textarea>
            </div>
            <div>
                <button type="submit" class="blueButton">Send it!</button>
            </div>
        </form>
    </section>
    <script type="text/javascript" src="../scripts/main.js"></script>
</body>

</html>