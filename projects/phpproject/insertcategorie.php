<?php
require "pdo.php";

if (isset($_POST["libelle"])){$libelle=$_POST["libelle"];}

$sql="insert into categorie ( libelle)
values (:libelle)";
$result=$pdo->prepare($sql);

$result->bindParam(':libelle', $libelle , PDO::PARAM_STR);

$result->execute();
print("<b> Insertion faite avec succès</b> <br/>");?>