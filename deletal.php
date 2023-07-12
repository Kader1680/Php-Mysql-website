<?php
include './connection.php';
include './index.php';


$sql = 'DELETE FROM medicament WHERE ind= 0 ';
    $result = $connection->query($sql);
    if (!$result) {
        $errormessage = "erroe". $connection->error;
    }

?>