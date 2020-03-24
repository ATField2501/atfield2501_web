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
    include("../ConstantesSecretes.php");
    try
    {
         $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', $mdp_db);
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    } 

    // Decompte des lignes de la table qui liste les catégories...
    $rees = $bdd->query("select count(*) as nb from liste_tables");
    $data = $rees->fetch();
    $nb = $data['nb'];

    // Choix de la catégorie en générent un chiffre entre un et le nb max de lignes pour l'ID...
    $Numero=rand(1 , $nb);
    $reponssse=$bdd->query("SELECT nom as oba FROM liste_tables WHERE id=$Numero");
    $dataO = $reponssse->fetch();
    $nom = $dataO['oba'];



    // Générer un nb aléatoire pour selectionner l'ID dans la table selectionnée précedament et récuprer une url...
    $rrr = $bdd->query("select count(*) as nb1 from $nom");
    $da = $rrr->fetch();
    $nb1 = $da['nb1'];
    $Numeropp=rand(1 , $nb1);

//////////////////// debut pb
    $reponsxse=$bdd->query("SELECT url FROM $nom WHERE id=$Numeropp");


    while ($donnees = $reponsxse->fetch())
    {
	echo '<h2>' . "Total $nom : " . $nb1 . '</h2>';
        $Adresse='"'. $donnees['url'] .'"';
    }
    $reponsxse->closeCursor();

    include("touche_aleatoire.php"); 
 
    // Affichage de la vidéo et du total d'entrées de la catégorie en dessous...
    echo "<h2><iframe width='960' height='715' src=$Adresse; frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe></h2>";
    echo "<h2> $Numeropp </h2>";


    include("menu.php");
 
?>


