<?php

    try
    {
         $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', $mdp_db);
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    } 

$res1=$bdd->query('select count(*) as nb1 from bookmarks');             

$data=$res1->fetch();
$nb=$data['nb1'];

echo "<p> BookMarks : <a>$nb</a> </p>";

?>
