<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "tutorial";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed". mysqli_connect_error());

}

echo "Connected to db";