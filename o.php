
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form  method="post">
    
    <input name="name" type="text">name
    <input name ="age "type="text">age
    <input type="submit">
</form>

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

            
  $name = "";
  $Age = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = $_POST["name"];
    $Age = $_POST["age"];
   

    $sql = "INSERT INTO persons (name, age)". 
    "VALUES ('$name', '$Age')";

    $result = $connection->query($sql);
            // check the query if excute or not
            if (!$result) {
                die ('not table'.$connection->error);
    }

  }
            // read data form table

            $sql = "select * from persons";
            // excute query sql
            $result = $connection->query($sql);
            // check the query if excute or not
            if (!$result) {
                die ('not table'.$connection->error);
            }

            while ($row = $result->fetch_assoc() ) {
                echo  "
                <h2 class='text-danger'>$row[name]</h2>
                <h2>$row[age]</h2>
                
                ";
                
                
            }
            ?>

            
</body>
</html>