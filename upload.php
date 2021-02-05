<!-- Système d'upload d'image sans utiliser une base de données -->
<!-- Bootstrap 4 -- PHP -->

<!-- upload.php se charge d'afficher le formulaire pour charger l'image et
par la suite d'affiche toutes les images stockées dans le fichier. -->

<!-- Par JoelDeoKL -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <form action="charger.php" method="POST">
                <div class="form-control">
                    <input type="file" name="image" id="image">
                    <input type="submit" value="uploader" name="uploader">
                </div>
            </form>
        </div>
    </div>

    <br>
    <div class="container">
        <div class="row">
            <?php
                $image = file_get_contents('image.txt');
                $reste = explode("*", $image);
                $taille = count($reste) - 1;
                while($taille > 0){
            ?> 
                
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="<?= $reste[$taille];?>" class="rounded-circle" alt="image" width="200px">
                </div>
                    
            <?php
                $taille -= 1;
                }
            ?>
        </div>
    </div>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
</body>
</html>