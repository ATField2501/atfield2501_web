
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style04.css" />
        <title> Bibliographie</title>
 
    </head>

    <body>
<?php
    try
    {
         $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', 'mdp:^^');
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    } 
$reponse = $bdd->query("SELECT titre, auteur, description FROM bibliographie ORDER BY titre");


while ($donnees = $reponse->fetch())
{
	echo '<h1>' . $donnees['id'] . $donnees['titre'] . ' - ' . $donnees['auteur'] . ' - ' . $donnees['description'] . '</h1>';

}

?>
    </body>
