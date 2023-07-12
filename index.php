<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traid</title>
    <link rel="icon" href="./img/logo.png">

    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<h1 class=" text-center">Welcome To Traid</h1><img src="/img/logo.png" alt="">
<h4 class=" text-center">Best to Stock Medicament</h4>
<input type="hidden">
<section>
  
<div class="d-flex align-items-center">
  <p><a class="btn bg-primary" href="/Php-Mysql-website/create.php">New Medicament </a></p>
  <p><a href='/Php-Mysql-website/deletal.php' class='ms-2 text-white bg-danger btn'>Delete All Medicament</a></p>
</div>
  
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th><h4>Id</h4></th>
          <th><h4>Industry</h4></th>
          <th><h4>Generic</h4></th>
          <th><h4>Date</h4></th>
          <th><h4>Autorisation</h4></th>
          <th><h4>Action</h4></th>
          
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody class="bg-white">
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
                 
            // read data form table

            $sql = "select * from medicament";
            // excute query sql
            $result = $connection->query($sql);
            // check the query if excute or not
            if (!$result) {
                die ('not table'.$connection->error);
            }

            // read data form table using while loop
            
            while ($row = $result->fetch_assoc() ) {
                echo  "<tr>
                            <td><h4 class='text-black'>$row[Id]</h4></td>
                            <td><h4 class='text-black'>$row[Industry]</h4></td>
                            <td><h4 class='text-black'>$row[Generic]</h4></td>
                            <td><h4 class='text-black'>$row[Date]</h4></td>
                            <td><h4 class='text-black'>$row[Autorisation]</h4></td>
                            
                           
                            <td>
                                <a href='/Php-Mysql-website/edit.php' class='text-white bg-warning btn btn-sm  pt-1 pb-1 ps-2 pe-2'>Edit</a>
                                <a href='/Php-Mysql-website/deletal.php' class='text-white bg-danger btn btn-sm  pt-1 pb-1 ps-2 pe-2'>Delete</a>
                            </td>
                            
                        </tr>
                        ";
            }
        ?>
      </tbody>
    </table>
  </div>
</section>
</body>
</html>