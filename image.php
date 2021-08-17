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
    <form action="image.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <label>Sélectionnez votre image :</label>
            <input type='file' width='100px' name="utimage">
            <input type="text" name="nameOfImg">
            <input type="submit" value="Soumettre">

        </div>

        <?php
        // $nomDossier = 'images';
        // $dossier = file_exists($nomDossier);


        // if($dossier == true) 
        // {
        //     echo "dossier existe".'<br>';
        //  }
        //  else{
        // echo "création du dossier".'<br>';
        //   mkdir($nomDossier,0777,true);
        //  }

        // if(isset($_POST["submit"]))
        // {
        //     move_uploaded_file($_FILES["fileContent"], $nomDossier);

        //     echo 'file downloaded';
        // }
        // else{
        //     echo 'file no downloaded';
        // }

        if (isset($_FILES['utimage']) and $_FILES['utimage']['error'] == 0) {
            $infosFichier = pathinfo($_FILES['utimage']['name']);
            $extension = $infosFichier['extension'];
            $extension_auto = array("jpg", "jpeg", "png", "gif");

            if (in_array($extension, $extension_auto)) {
                move_uploaded_file($_FILES['utimage']['tmp_name'], 'images/' . basename($_FILES['utimage']['name']));
                echo "ok";
                rename('images/' . basename($_FILES['utimage']['name']), 'images/' . $_POST['nameOfImg'].microtime(true) * 10000 . '.' . $extension);
            }
        }

$dir = 'images/';
$file = scandir($dir);

foreach($file as $x)
{
    if($x == '..')
    { 
        continue; 
    }
    else
    {
        echo $x.'<br>';
    }
}


        ?>

    </form>


</body>

</html>