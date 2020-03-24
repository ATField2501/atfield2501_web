<?php
    include('ConstantesSecretes.php');
    try
    {
         $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', $mdp_db);
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

$res = $bdd->query('select count(*) as nb from bookmarks');
$data = $res->fetch();
$nb = $data['nb'];
    $Numero=rand(1 , $nb);
    $reponssse=$bdd->query("SELECT url FROM bookmarks WHERE id=$Numero");

while ($donnees = $reponssse->fetch())
{

        $Adresse=''. $donnees['url'].'';
}

$reponssse->closeCursor();
 
header("Location: $Adresse");
exit();
?>

