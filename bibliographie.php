
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

$res1=$bdd->query('select count(*) as nb1 from bibliographie');        
$data=$res1->fetch();
$nb=$data['nb1'];

$res2=$bdd->query('SELECT COUNT(DISTINCT auteur) as nb2 FROM bibliographie');        
$data=$res2->fetch();
$nb2=$data['nb2'];

echo "<h2>. . . . . . . ..:: atfield2501 Bibliographie ::..  . . . . . . .</h2>";                       
     
echo '<div id="conteneur0">';
echo '<div class="element0">';
while ($donnees = $reponse->fetch())
{

	echo '<h1>' . $donnees['id'] . $donnees['titre'] . ' - ' . $donnees['auteur'] . ' - ' . $donnees['description'] . '</h1>';

}
echo '</div>';                  

echo '<div class="element0">';
echo "<h3>Total des refferences : <a>$nb</a></h3>"; 
echo '</div>';
echo '<div class="element0">';
echo "<h3>Total des auteurs : <a>$nb2</a></h3>"; 
echo '</div>';

include("bibleRecherche.php");

?>
    </body>
