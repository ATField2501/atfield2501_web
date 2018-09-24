<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style33.css" />
        <title> ATField 2501 - Privée</title>
 
    </head>

    <body>
<?php
echo '<p><h2> Adresse du Serveur : ' . $_SERVER['SERVER_NAME'] . '</h2></p>';
echo '<p><h2>' . $_SERVER['HTTP_USER_AGENT'] . '</p></h2>';


if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "*****") // Si le mot de passe est bon
{


try
{
         $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', 'mdp::^^');
}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}

// Récupération des 50 derniers messages
$reponse = $bdd->query('SELECT id, ip_adresse, nb , date, heure, user_agent FROM Visiteurs ORDER BY ID DESC LIMIT 0, 50');


while ($donnees = $reponse->fetch())
{
	echo '<p><h1>' . $donnees['id'] . ' - ' . $donnees['ip_adresse'] .'- ' . '('.$donnees['nb'] .'X'.')'.' - '. '   le: ' . $donnees['date'] . '   à: '.$donnees['heure'] . ' sur-> ' . $donnees['user_agent']. '</h1></p>';
}

$reponse->closeCursor();

}

else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
?>
