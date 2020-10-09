<?php
$server = "localhost";
$username = "hussein";
$password = "hussein";
$dbname = "babab";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
