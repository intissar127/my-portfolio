<?php try {

$pdo = new PDO('mysql:host=localhost;dbname=vente', 'root', '0000');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
catch(Exception $e) {
  $msg = 'Erreur Connexion DATABASE ' ;
  die($msg);
  }
?>