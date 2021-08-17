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
//ajoute contenu dans un fichier
/* version 1*/
//file_put_contents("test.txt", $fichier, FILE_APPEND);
/*version 2*/
 //file_put_contents("test.txt", PHP_EOL . $fichier, FILE_APPEND);

 //if(file_exists(test3.txt))

 /******renommer un fichier*****/
 //rename('test1.txt','test2.txt');
//  if(file_exists("test1.txt"))
//  {
//     rename('test1.txt','test2.txt');
//  }
 // supprimer un fichier
 //$test = unlink("test2.txt");

//PARSE DU JSON
//$fichierJSON = file_get_contents("data.json");
//parser en json
//$json = json_decode($fichierJSON);

//json_encode
//$jsonTxt = json_encode($fichierJSON);

//creer un répertoire

// if(!mkdir('toto2',0777,true))
// {
//     echo "erreur";
// }


//var_dump($jsonTxt);

?>



</body>
</html>