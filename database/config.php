<?php

$server = "localhost";
$username = "rmis_user";
$password = "password";
$database = "rmis";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
