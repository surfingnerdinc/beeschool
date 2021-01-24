<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UST-8">
    <meta name="viewport" content="width = device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/createpage.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body class="hero-img">
    <section>
        <nav id="overlay">
            <img src="../../assets/exit.svg" class="close-btn" id="close-menu">
            <ul>
                <li><a href="http://localhost/beeschool/main/pages/login.php">Sign in</a><span>Just log in and enjoy!</span></li>
                <li><a href="http://localhost/beeschool/index.html">Main page</a><span>Back to main page</span></li>
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
        <form class="loginform" method="POST" action="createacc.php">
            <fieldset>
                <legend>Fill the gaps to create account</legend>
                <div>
                    <label>Username or mail</label><br>
                    <input type="text" id="username" name="username" placeholder="User name..." />
                </div>
                <div>
                    <label>First name</label><br>
                    <input type="text" id="userfirstname" name="firstname" placeholder="Your first name..." />
                </div>
                <div>
                    <label>Last name</label><br>
                    <input type="text" id="userlastname" name="lastname" placeholder="Your last name..." />
                </div>
                <div>
                    <label>Password</label><br>
                    <input type="password" id="userpassword" name="password" placeholder="Password..." />
                </div>
                <div>
                    <label>Confrim Password</label><br>
                    <input type="password" id="userpassword2" name="password2" placeholder="Confrim password..." />
                </div>
                <div>
                    <div id="log_err_msg"></div><br>
                    <button type="submit" class="submit-btn">Click to register!</button>
                </div>
            </fieldset>


    </section>
    </form>
    <script type="text/javascript" src="../scripts/main.js"></script>
</body>

</html>