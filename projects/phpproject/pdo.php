<?php
try {
  #création d'un objet de type PDO
  $pdo = new PDO('mysql:host=localhost;dbname=vente', 'root', "0000");
  #ajouter cette instruction pour permettre l’affichage des

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e) {
  $msg = 'Erreur ' . $e->getFile() . ' ligne ' . $e->getLine() .
  ' : ' . $e->getMessage();
  die($msg);
  }
?>