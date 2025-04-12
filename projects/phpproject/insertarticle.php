<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  
</body>
</html>

<?php require "pdo.php"; 
if (!isset($_POST["libelle"]) || empty($_POST["libelle"])) { $libelle = ''; } else { $libelle = $_POST["libelle"]; } 
if (!isset($_POST["categorieid"]) || empty($_POST["categorieid"])) { $categorieid = ''; } else { $categorieid = $_POST["categorieid"]; } 
if (!isset($_POST["codeabarre"]) || empty($_POST["codeabarre"])) { $codeabarre = ''; } else { $codeabarre = $_POST["codeabarre"]; }
if (!isset($_POST["prix"]) || empty($_POST["prix"])) { $prix = ''; } else { $prix = $_POST["prix"]; } 
 $sql="insert into article (libelle,prix,codeabarre,categorieid) values (:libelle,:prix,:codeabarre,:categorieid)"; 
 $result=$pdo->prepare($sql); 
 $result->bindParam(':libelle', $libelle , PDO::PARAM_STR); 
 $result->bindParam(':prix', $prix , PDO::PARAM_STR); 
 $result->bindParam(':codeabarre', $codeabarre , PDO::PARAM_STR); 
 $result->bindParam(':categorieid', $categorieid, PDO::PARAM_STR); 
 $result->execute(); 
 header('location:article.php'); ?>

