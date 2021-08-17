<?php

$civilite = $_POST['Civilite'];
$nom = strtoupper($_POST['Nom']);
$prenom = ucwords($_POST['Prenom']);
$age = $_POST['Age'];
$commentaire =$_POST['Commentaire'];

printf("Bonjour %s %s %s,<br> vous avez %s ans et voici votre commentaire <br> %s ", $civilite,$nom,$prenom,$age,$commentaire);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row bg-dark text-white">
            Identité de la personne
        </div>
        <div class="row">
            <div class="col-4 bg-warning text-white">Civilité :</div>
            <div class="col-8"><input type="text" value ='<?php echo $civilite ?>'></div>
           
        </div>
        <div class="row">
            <div class="col-4 bg-warning text-white">Nom :</div>
            <div class="col-8"><input type="text" value ='<?php echo $nom ?>'></div>
           
        </div>
        <div class="row">
            <div class="col-4 bg-warning text-white">Prénom :</div>
            <div class="col">
            <input type="text" value ='<?php echo $prenom ?>'>
</div>
           
           
        </div>
        <div class="row ite">
            <div class="col-4 bg-warning text-white">Age :</div>
            <div class="col-8">
            <input type="number" value ='<?php echo $age ?>'> </div>
           
        </div>
        <div class="row ">
            <div class="col-4 bg-warning text-white">Commentaire :</div>
            <div class="col-8"><textarea rows='3' cols='100' ><?php echo $commentaire ?></textarea></div>
           
        </div>
    </div>
</body>
</html>

