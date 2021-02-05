<!-- Système d'upload d'image sans utiliser une base de données -->

<!-- Bootstrap 4 -- PHP -->

<!-- charger.php a pour biut de recevoir l'image provenant du formulaire
et de le stocker dans un fichier image.txt en utilisant "*" comme séparateur -->

<!-- Par JoelDeoKL -->

<?php

    $texte = $_POST["image"];

    $image = file_get_contents('image.txt');
    $image .= '*'.$texte;
    file_put_contents('image.txt', $image);
    header('Location: upload.php');
?>
