 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style05.css" />
        <title> Filmographie</title>
 
    </head>

    <body>
<?php
    include('../ConstantesSecretes.php');
    try
    {
         $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', $mdp_db);
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    } 
    $reponse = $bdd->query("SELECT titre, realisateur, description FROM filmographie ORDER BY titre");

    $res1=$bdd->query('select count(*) as nb1 from filmographie');       
    $data=$res1->fetch();
    $nb=$data['nb1'];

    $res2=$bdd->query('SELECT COUNT(DISTINCT realisateur) as nb2 FROM filmographie');        
    $data=$res2->fetch();
    $nb2=$data['nb2'];

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
    echo '<div class="element0">';
    echo "<h3>Total des realisateurs : <a>$nb2</a></h3>"; 
    echo '</div>';
?>
    </body>
