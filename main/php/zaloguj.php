<?php

session_start();
require_once "dbconnect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);


/* sprawdzamy polaczenie */ 

if ($connection -> connect_errno != 0) {
    echo "Error: ".$connection->connect_errno;
} else {
$login = $_POST['mail'];
$upass = $_POST['password'];

$sql = "SELECT * FROM users WHERE mail='$login' AND password='$upass'";

if($result = @$connection->query($sql)){
    $tmp = $result->num_rows;
    if($tmp > 0) {

        $_SESSION['isLogged'] = true;

        $krotka = $result->fetch_assoc();
        $_SESSION['fname'] = $krotka['fname'];
        $_SESSION['lname'] = $krotka['lname'];


        unset($_SESSION['error']);
        $result ->free_result();
        header('Location: ../../app/app.php');


    } else {
        header('Location: ../pages/login.php');
    }
}


$connection ->close();
}


?>