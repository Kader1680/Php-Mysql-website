<?php 
$server = "localhost";
$username = "root";
$password = "";
$db = "myshop";

$connection = new mysqli($server, $username, $password, $db);

// check the connection

if ($connection->connect_error) {

    die('faild connection').$connection->connect_error;
}

?>