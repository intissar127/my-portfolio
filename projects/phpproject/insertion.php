<?php 
require "pdo.php";
$sql="insert into categorie (id,libelle)
values ('PIERRE', 'PAUL', '1984-08-12', 'PARIS')";
try{
$pdo->exec($sql);
print("<b> Insertion faite avec succès</b>");
} catch(PDOException $e) {
$msg = 'Erreur ' . $e->getFile() . ' ligne ' . $e->getLine()
. ' : ' . $e->getMessage();
die($msg);
}
?>