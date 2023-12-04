<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "a11202214213";
//CREATE CONNECTION
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}