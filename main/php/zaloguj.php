<?php

session_start();

if((!isset($_POST['mail'])) || (!isset($_POST['password']))){
    header('Location: ../index.html');
    exit();
}

require_once "dbconnect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);


/* sprawdzamy polaczenie */ 

if ($connection -> connect_errno != 0) {
    echo "Error: ".$connection->connect_errno;
} else {
$login = htmlentities($mail, ENT_QUOTES, "UTF-8");
$upass = htmlentities($password, ENT_QUOTES, "UTF-8");



$sql = "SELECT * FROM users WHERE mail='$login' AND password='$upass'";

if($result = @$connection->query(sprintf("SELECT * FROM users WHERE mail='%s' AND password='%s'",
        mysqli_real_escape_string($connectionm, $mail),
        mysqli_real_escape_string($connection, $upass)))){
    $tmp = $result->num_rows;
    if($tmp > 0) {

        $_SESSION['isLogged'] = true;

        $krotka = $result->fetch_assoc();
        $_SESSION['fname'] = $krotka['fname'];
        $_SESSION['lname'] = $krotka['lname'];


        unset($_SESSION['error']);
        $result ->free_result();
        header('Location: ../app/app.php');


    } else {
        header('Location: ../pages/login.php');
    }
}


$connection ->close();
}


?>