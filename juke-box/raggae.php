<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style33.css" />
        <title> ATField 2501 - Juke-BoX</title>
 
    </head>

    <body>
        <strong><h1>Atfield 2501</h1></strong>

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

$res = $bdd->query('select count(*) as nb from raggae');
$data = $res->fetch();
$nb = $data['nb'];
    $Numero=rand(1 , $nb);
    $reponssse=$bdd->query("SELECT url FROM raggae WHERE id=$Numero");

while ($donnees = $reponssse->fetch())
{
	echo '<h2>' . 'Total Raggae : ' . $nb . '</h2>';
        $Adresse='"'. $donnees['url'] .'"';
}

$reponssse->closeCursor();
 

    echo "<h2><iframe width='960' height='715' src=$Adresse; frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe></h2>";
    echo "<h2> $Numero </h2>";
 
?>
<?php include("menu.php"); ?>

