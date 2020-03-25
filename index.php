<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style3.css" />
        <title>  ATField2501 </title>
    </head>
    
    <body>
        <div id="conteneur">
        <div class="element"><strong><h1> ATField 2501 </h1></strong></div>
        <div class="element"><p><a href="page1.php"><img src="yinyang.png" alt="yinyang" /></a></p></div> 
        </div> 
<?php

    $monfichier = fopen('compteur.txt', 'r+');
    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
    $pages_vues += 1; // On augmente de 1 ce nombre de pages vues
    fseek($monfichier, 0); // On remet le curseur au début du fichier
    fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
    fclose($monfichier);

    echo '<h2>total   ' . $pages_vues . ' vues</h2>';
    echo ' <h2>'. date("d-m-Y") .' </h2>';
    include("fonction_identification.php");
    echo '<h2><a href="donnation.php"><titre> Soutenez ce site </titre></a></h2>';
?>
    </body>
</html>
