<?php



include './connection.php';
  $Industry = "";
  $Generic = "";
  $Date = "";
  $Autorisation = "";
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $Industry = $_POST["industry"];
    $Generic = $_POST["generic"];
    $Date = $_POST["date"];
    $Autorisation = $_POST["Autorisation"];


    $sql = "INSERT INTO medicament (Industry, Generic, Date, Autorisation)". 
    "VALUES ('$Industry', '$Generic', '$Date', '$Autorisation')";

   
    $result = $connection->query($sql);
            // check the query if excute or not
            if (!$result) {
                die ('not table'.$connection->error);
    }

  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Medicament</title>
</head>
<body>
<form method="POST">
  <div class="mb-3">
    <label for="Industry" class="form-label">Industry</label>
    <input name="industry" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="Generic" class="form-label">Generic</label>
    <input name="generic" type="text" class="form-control" >
  </div>

  <div class="mb-3">
    <label for="Date" class="form-label">Date</label>
    <input name="date" type="text" class="form-control" >
  </div>

  <!-- <div class="mb-3">
    <label for="Autorisation" class="form-label">Autorisation</label>
    <input name="Autorisation" type="text" class="form-control" >
  </div> -->

  <div class="mb-3">
      <label for="cars">Autorisation</label>
      <select name="Autorisation" id="cars">
        <option  value="Accept">Accept</option>
        <option value="Refuse">Refuse</option>
 
      </select>
  </div>

  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary"><input target="_parent" type="submit" class="text-white text-decoration-none" />Create</button>
  <button type="submit" class="btn btn-danger"><a class="text-white text-decoration-none" href="/Php-Mysql-website">Cancel</a></button>
</form>
</body>
</html>