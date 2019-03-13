<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style11.css" />
        <title>Connexions</title>
 
    </head>

    <body>
<?php
    include("ajout_adresse.php");
    $aa='log.php';

    echo '<h2> FireWall </h2>';
    echo '<h1></h1>';
    #Filtre
    echo '<form action="ecran_Kontrol2.php" method="post"> <p>Adresse a filtree</p>';
    echo '<p><input type="text" name="adressefiltrée" /><input type="submit" value="Valider" /></p>';
    echo '</form>';
    # Effacement
    echo '<form action="effacement.php" method="post">';
    echo '<p><input type="submit" value="Effacement" /></p>';
    echo '</form>';

    # Lecture de la Black Liste
    $blacklist = fopen('../Black_Liste/atfield2501_Black-List.txt', 'r');
    if ($blacklist)
    {
        while (!feof($blacklist))
        {
            $ligne = fgets($blacklist);
            echo '<h1>'.$ligne.'</h1>';
        }
    }
    else
    {
        echo '<h2>Aucune Adresse Filtrée</h2>';
    }

    fclose($blacklist);

?>
