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
  <form action="updatearticle.php" method="POST">
    <?php 
    session_start();
    require "pdo.php";
    $sql1 = "SELECT * FROM article WHERE id=?";
    if (isset($_GET["idarticle"])) {
      $id = $_GET["idarticle"];
       }
    $result1 = $pdo->prepare($sql1);
    $result1->execute(array($id));
    $row = $result1->fetch();
    ?>

    <div class="input-group flex-nowrap"> 
      <span class="input-group-text" id="addon-wrapping">id</span>   
      <input type="text" name="id" value="<?php echo $row['id'];?>"/>
    </div>

    <div class="input-group flex-nowrap"> 
      <span class="input-group-text" id="addon-wrapping">libelle</span>   
      <input type="text" name="libelle" value="<?php echo $row['libelle'];?>"/>
    </div>

    <div class="input-group flex-nowrap"> 
      <span class="input-group-text" id="addon-wrapping">codeabarre</span>   
      <input type="text" name="codeabarre" value="<?php echo $row['codeabarre'];?>"/>
    </div>

    <div class="input-group flex-nowrap"> 
      <span class="input-group-text" id="addon-wrapping">prix</span> 
      <input type="text" name="prix" value="<?php echo $row['prix'];?>"/>
    </div>

    <div class="input-group flex-nowrap"> 
      <span class="input-group-text" id="addon-wrapping">categorieid</span> 
      <input type="text" name="categorieid" value="<?php echo $row['categorieid'];?>"/>
    </div>

    <button type="submit" class="btn btn-danger">Update</button>
  </form>

  <?php 

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $id = $_POST["id"];
    $libelle = $_POST["libelle"];
    $categorieid = $_POST["categorieid"];
    $codeabarre = $_POST["codeabarre"];
    $prix = $_POST["prix"];

    // Prepare and execute the SQL query
    $sql = "UPDATE article SET libelle=?, categorieid=?, codeabarre=?, prix=? WHERE id=?";
    $result = $pdo->prepare($sql);
    $result->execute([$libelle, $categorieid, $codeabarre, $prix, $id]);

    // Redirect to another page or display a success message
    // For example:
    header("Location: accueil.html");
    exit();
} else {
    // Display the form or handle the case when the form has not been submitted
    // Your HTML form code here
}
?>


</body>
</html>
