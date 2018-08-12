
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style05.css" />
        <title> Filmographie</title>
 
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
$reponse = $bdd->query("SELECT titre, realisateur, description FROM filmographie ORDER BY titre");
$res1=$bdd->query('select count(*) as nb1 from filmographie');        


$data=$res1->fetch();
$nb=$data['nb1'];
echo "<h2>. . . . . . . ..:: atfield2501 Filmographie ::..  . . . . . . .</h2>";                       
     
echo '<div id="conteneur1">';
echo '<div class="element1">';
while ($donnees = $reponse->fetch())
{

	echo '<h4>' . $donnees['id'] . $donnees['titre'] . ' - ' . $donnees['realisateur'] . ' - ' . $donnees['description'] . '</h4>';

}
echo '</div>';                  

echo '<div class="element1">';
echo "<h3>Total des refferences : <a>$nb</a></h3>"; 
echo '</div>';
echo '</div>';
?>
    </body>
