<?php

session_start();
header ('location:login.php');

$connection = mysqli_connect("localhost", "root", "");

mysqli_select_db($connection, "user_registration");

$name = $_POST["user"];
$pass = $_POST["password"];

$s = "SELECT * FROM `usertable` WHERE name = '$name'";

$results = mysqli_query($connection, $s);

$num = mysqli_num_rows($results);

if ($num==1){
    echo "Username Already Taken";
}else{

    $reg = "INSERT INTO `usertable`(`name`, `password`) VALUES ('$name','$pass')";
    mysqli_query($connection, $reg);
    echo "Registration Successful";
}
