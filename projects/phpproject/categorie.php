<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>categorie</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    
</head>
<body>
<a
      href="insertcategorie.html"
      class="btn btn-primary"
      role="button"
      data-bs-toggle="button"
      >ADD</a
    >
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">libellé</th>
      
    </tr>
  </thead>
  
<?php 
include "cnx.php";



$response = $pdo->query('SELECT * FROM categorie');
//$donnees = $reponse->fetchAll(); renvoie tous les résultats dans un tableau
//var_dump($donnees);
foreach ($response as $row){

?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['libelle']?></td>
      <td> <a href="updatecategorie.php?idcategorie=<?php echo $row['id'];?>" type="button" class="btn btn-info">Modifier </a>
      
       <a href="deletecategorie.php?idcategorie=<?php echo $row['id'];?>" type="button" class="btn btn-warning">Supprimer </a></td>
      
     
    </tr>
    <?php } ?>
    
  </tbody>
</table>
</body>
</html>
