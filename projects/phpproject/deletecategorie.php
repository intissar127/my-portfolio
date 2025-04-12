<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
 body {
        background-image: linear-gradient(to right, rgba(250,0,0,0.6), rgba(200,0,0,.1)), url("bg.jpg");

        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      </style>
</head>
<body>
<form action="deletearticle.php"><div class="input-group flex-nowrap"> <span class="input-group-text" id="addon-wrapping">id</span>   <input type="text" name="id" value="<?php echo $_GET["idcategorie"];?>"/></div>
<button type="button" class="btn btn-danger">Delete</button></form>  
</body>

<?php
session_start();
require "pdo.php";

// Check if the idcategorie parameter is set in the URL
if (isset($_GET["idcategorie"])) {
    $id = $_GET["idcategorie"];

    // Prepare the SQL statement
    $sql = "DELETE  FROM categorie WHERE id = :id";
    $result = $pdo->prepare($sql);

    // Bind the id parameter and execute the query
    $result->bindParam(':id', $id, PDO::PARAM_STR);
    $result->execute();
} else {
    // Redirect the user to another page or display an error message
    header("Location: accueil.html");
    exit(); // Stop execution to prevent further code execution
}
?>

