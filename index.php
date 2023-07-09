<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmVector</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<h1 class=" text-center">Welcome To Pharm Aviv</h1>
<section>
  
  <h3>Here Your Medicament </h1>
  
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>GENERIC</th>
          <th>End Date</th>
          <th>Arrangement</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
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

            $sql = "select * from Med_Table";
            // excute query sql
            $result = $connection->query($sql);
            // check the query if excute or not
            if (!$result) {
                die ('not table'.$connection->error);
            }

            // read data form table using while loop
            
            while ($row = $result->fetch_assoc() ) {
                echo  "<tr>
                            <td>$row[ID]</td>
                            <td>$row[NAME]</td>
                            <td>$row[GENERIC]</td>
                            <td>$row[END_DATE]</td>
                            <td>
                                <span class='rounded bg-success pt-1 pb-1 ps-2 pe-2'>accept</span>
                            </td> 
                            <td>
                                <a class='text-white bg-warning btn btn-sm  pt-1 pb-1 ps-2 pe-2'>Edit</a>
                                <a class='text-white bg-danger btn btn-sm  pt-1 pb-1 ps-2 pe-2'>Delete</a>
                            </td>
                            
                        </tr>
                        ";
            }


        ?>
        
        <!-- <tr>
            <td>AAC</td>
            <td>AUSTRALIAN COMPANY </td>
            <td>$1.38</td>
            <td>+2.01</td>
            <td>
                
            </td> 
            <td>
                <a class="btn btn-sm bg-white">Edit</a>
                <a class="btn btn-sm bg-white">Delete</a>
            </td>
        </tr>
         -->
        
      
        
      </tbody>
    </table>
  </div>
</section>
</body>
</html>