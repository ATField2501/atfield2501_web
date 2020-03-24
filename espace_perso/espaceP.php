<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style33.css" />
        <title> ATField 2501 - Privée</title>
 
    </head>

    <body>
<?php
    echo '<h2> Adresse du Serveur : ' . $_SERVER['SERVER_NAME'] . '</h2>';
    echo '<h2>' . $_SERVER['HTTP_USER_AGENT'] . '</h2>';

    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "*********") // Si le mot de passe est bon
    {
        include('../ConstantesSecretes.php');
        try
        {
         $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', $mdp_db);
        }
        catch(Exception $e)
        {
        die('Erreur : '.$e->getMessage());
        }

        
        $res = $bdd->query('select sum(nb) as tnb from Visiteurs');
        $data = $res->fetch();
        $tnb = $data['tnb'];  
        echo '<h3> Total de connexions : ' . $tnb . '</h3>';    

        // Récupération des 50 derniers messages
        $reponse = $bdd->query('SELECT id, ip_adresse, nb , date, heure, user_agent FROM Visiteurs ORDER BY ID DESC LIMIT 0, 50');

        while ($donnees = $reponse->fetch())
        {
	    echo '<h1>' . $donnees['id'] . ' - ' . $donnees['ip_adresse'] .'- ' . '('.$donnees['nb'] .'X'.')'.' - '. '   le: ' . $donnees['date'] . '   à: '.$donnees['heure'] . ' sur-> ' . $donnees['user_agent']. '</h1>';
        }

        $reponse->closeCursor();
    }

    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
?>
