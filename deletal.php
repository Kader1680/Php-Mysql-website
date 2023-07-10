<?php
include './connection.php';
include './index.php';


if (isset($_GET["ind"])) {
    $ind = $_GET["ind"];
    $sql = 'DELETE FROM medicament WHERE id= id ';
    $result = $connection->query($sql);
    if (!$result) {
        $errormessage = "erroe". $connection->error;
    }
}
header('location : /Php-Mysql-website/index.php');
exit;


?>