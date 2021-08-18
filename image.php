<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .taille
        {
            width : 300px;
            height : 200px;
        }
</style>
</head>

<body>

    <form action="image.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <label>Sélectionnez votre image :</label>
            <input type='file' width='100px' name="utimage">
            <input type="text" name="nameOfImg">
            <input type="submit" value="Soumettre" name="upload">


            <div class="row">
                <div class="col bg-dark text-white">Liste des images dans le dossier</div>
            </div>

            <div class="row">
                <div class="col">Nom du fichier</div>
                <div class="col">Type de fichier</div>
                <div class="col">Taille du fichier</div>
                <div class="col">&nbsp;</div>
            </div>
            <?php
            $dir = 'images/';
            $file = scandir($dir);
            foreach ($file as $x) {
                if ($x == '..' || $x == '.') {
                    continue;
                } else {
                    $infosFichier = pathinfo($x);
            ?>
                    <div class="row p-2">
                        <div class="col"><?= $infosFichier["filename"] ?></div>
                        <div class="col m-2 bg-danger"><?= $infosFichier["extension"] ?></div>
                        <div class="col m-2 bg-warning"><?= round(filesize($dir . $infosFichier["basename"]) / 1024, 2) . 'Ko' ?></div>
                        <div class="col"><a href="image.php?img=<?= $infosFichier["filename"].'.'.$infosFichier["extension"]?>">Détails</a>
                        <a href="image.php?del=<?= $infosFichier["filename"].'.'.$infosFichier["extension"]?>">Supprimer</a></div>
                        <?php
                         if(isset($_GET['del']) && $_GET['del'] == $x)
                       { 
                           
                           unlink($dir.$x);
                           header("Location: image.php");
                       };
                        ?>
                    </div>
                    <div class="row">
                    <?php
            if(isset($_GET['img']) && $_GET['img'] == $x)
            {?>
            <div class="col">
                <img src='<?= $dir.$infosFichier["filename"].'.'.$infosFichier["extension"]?>' class="taille" />
            </div>
            <div class="col">
                <input type="text" name="txtRename" width="275" value="<?= $infosFichier["filename"] ?>">
                <input type="submit" name="rename" value="renommer">
               
            </div>
            <?php 
            }
            ?>
                    </div>
            <?php
                }
            }
            ?>
             <?php
               if(isset($_POST['rename']))
               {
                    rename($dir.$x, $dir.$_POST['txtRename'].'.'.$infosFichier["extension"]);
                    header("Location: image.php");  
               }
                ?>
        </div>
        </div>
    </form>
    <?php

    if (isset($_POST["upload"])) {
        if (isset($_FILES['utimage']) && $_FILES['utimage']['error'] == 0) {
            $infosFichier = pathinfo($_FILES['utimage']['name']);
            $extension = $infosFichier['extension'];
            $extension_autorisee = array("jpg", "jpeg", "png", "gif");

            if (in_array($extension, $extension_autorisee)) {
                //move et rename file
                move_uploaded_file($_FILES['utimage']['tmp_name'], 'images/' . $_POST['nameOfImg'] . '_' . microtime(true) * 10000 . '.' . $extension);
                //echo "L'envoi a bien été effectué !";
                //rename('images/' . basename($_FILES['utimage']['name']), 'images/' . $_POST['nameOfImg'] . '_' . microtime(true) * 10000 . '.' . $extension);
            }
            //rafraichir la page pour supprimer le post


        }
        header("Location: image.php");
    }
    ?>
</body>

</html>