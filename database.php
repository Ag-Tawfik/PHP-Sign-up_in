<?php

$host = "localhost";
$dbname = "sample_login_db";
$username = "root";
$password = "2Ag/19920306";

$mysqli = new mysqli(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

?>