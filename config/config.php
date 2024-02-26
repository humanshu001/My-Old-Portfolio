<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "portfolio";

$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Connection failed due to " . mysqli_connect_error());
}