<?php
include './connection.php';
include './index.php';


if (isset($_GET["id "])) {
    $ind = $_GET["id "];
    $sql = 'DELETE FROM medicament WHERE id = $id ';
    $result = $connection->query($sql);
    if (!$result) {
        $errormessage = "erroe". $connection->error;
    }
}



?>