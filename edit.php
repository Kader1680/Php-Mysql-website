
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Last Medicament</title>
</head>
<style>
  .fail{
    background-color: #ff7070;
    color: white;
  }
  .btn-close{
    color: white;
  }
</style>
<body>
<form class="container" method="POST">
  <!-- make hidden input that store id of client -->
  <?php 
  include './connection.php';
  $Id="";
  $Industry = "";
  $Generic = "";
  $Date = "";
  $Autorisation = "";
  $sucesss = "";
  $fail = "";
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // GET methods show the data of the client 

    // read the data of client from database
    $Id = $_GET["Id"];
    $sql = "SELECT * FROM medicament WHERE Id = $Id ";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    // check the query if excute or not
    if (!$result) {
        die ('not table'.$connection->$error);
        }
    
        $Id=$row["Id"];
        $Industry = $row["Industry"];
        $Generic = $row["Generic"];
        $Date = $row["Date"];
        $Autorisation = $row["Autorisation"];
    

}else {
    // POST METHOD THAT UPDATE DATA OF THE MEDICAMENT
    $Id = $_POST["Id"];
    $Industry = $_POST["industry"];
    $Generic = $_POST["generic"];
    $Date = $_POST["date"];
    $Autorisation = $_POST["Autorisation"];
    
    do {
        $sql = "UPDATE medicament ". "SET Industry = '$Industry'";
        $result = $connection->query($sql);
                // check the query if excute or not
                if (!$result) {
                    die ('not table'.$connection->$error);
        }
    } while (false);
}
     if (!empty($fail)) {

      // !empty(fail) => mean you have error message in variable
      
      
        echo 
          "
          <div class='fail container text-center fw-bolder alert alert-dismissible fade show' role='alert'>
              $fail
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>
          
          ";
             
        }
        // else{
        //   echo 
        //   "
        //   <div class='alert alert-primary alert-dismissible fade show' role='alert'>
        //      $sucesss
        //     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        //   </div>
        //   ";
        // }
  
  ?>


  <input type="hidden" value="<?php echo $Id ; ?>" />

  <div class="mb-3">
    <label for="Industry" class="form-label">Industry</label>
    <input value="<?php echo $Industry ; ?>" name="industry" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="Generic" class="form-label">Generic</label>
    <input value="<?php echo $Generic ; ?>" name="generic" type="text" class="form-control" >
  </div>

  <div class="mb-3">
    <label for="Date" class="form-label">Date</label>
    <input value="<?php echo $Date ; ?>" name="date" type="text" class="form-control" >
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

  
 
  <!-- <button type="submit" class="btn btn-primary"><input target="_parent" type="submit" class="text-white text-decoration-none" />Create</button> -->
  <input  target="_parent" type="submit" class="btn bg-primary text-white text-decoration-none" />
  <button type="submit" class="btn btn-danger"><a class="text-white text-decoration-none" href="/Php-Mysql-website">Cancel</a></button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>