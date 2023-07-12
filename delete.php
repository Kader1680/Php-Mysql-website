<?php
    include './index.php';
    include './connection.php';



if (isset($_GET["Id "])) {
    $id = $_GET["Id "];
    $sql = 'DELETE FROM medicament WHERE Id = $id ';
    $result = $connection->query($sql);
    
}



?>