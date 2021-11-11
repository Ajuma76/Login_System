<?php

session_start();


$connection = mysqli_connect("localhost", "root", "");

mysqli_select_db($connection, "user_registration");

$name = $_POST["user"];
$pass = $_POST["password"];

$s = "SELECT * FROM `usertable` WHERE name = '$name' && password = '$pass'";

$results = mysqli_query($connection, $s);

$num = mysqli_num_rows($results);

if ($num==1){
    $_SESSION['username'] = $name;
    header('location:home.php');
}else{

    header('location:login.php');
}
