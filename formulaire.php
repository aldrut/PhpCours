<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   
    <form action="action.php" method="post">
         <div class="container">
    <div class="form-group">
    <label for="lblCivilite">Civilité</label>
    <div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
    <label for="lblMr">Monsieur </label> <input type="radio" name="Civilite" value="Monsieur" id="lblMr" >
    <label for="lblMme">Madame </label> <input type="radio" name="Civilite" value ="Madame" id="lblMme" >
      
    </div>
  </div>
  </div>
  <div class="form-group">
    <label for="lblNom">Nom : </label>
    <input type="text" class="form-control" name="Nom" id="lblNom" placeholder="Votre nom" require>
  </div>
  <div class="form-group">
    <label for="lblPrenom">Prénom : </label>
    <input type="text" class="form-control" name="Prenom" id="lblPrenom" placeholder="Votre prénom" require>
  </div>
  <div class="form-group">
    <label for="lblAge">Age : </label>
    <input type="number" class="form-control" name="Age" id="lblAge" require>
  </div>
  <div class="form-group">
    <label for="txtCom">Commentaire : </label>
    <textarea class="form-control" name="Commentaire" id="txtCom" require></textarea>
  </div>
  <div class="form-group">
    
    <button type="submit" class="btn btn-info"> Soumettre</button>
  </div>
  
    
</form>
    </div>

<?php

$fichier = file_get_contents("cours.txt");
// var_dump($fichier);

file_put_contents("test.txt",$fichier, FILE_APPEND);


?>



</body>
</html>