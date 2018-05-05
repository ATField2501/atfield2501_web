<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style3.css" />
        <title>  ATField2501 </title>
    </head>
    
    <body>
        <div id="conteneur">
        <div class="element"><strong><h1> ATField 2501 </h1></strong></div>
        <div class="element"><p><a href="page1.php"><img src="yinyang.png" alt="yinyang" /></a></p></div> 
        </div> 
<?php

$monfichier = fopen('compteur.txt', 'r+');

$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)

$pages_vues += 1; // On augmente de 1 ce nombre de pages vues

fseek($monfichier, 0); // On remet le curseur au début du fichier

fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

fclose($monfichier);

echo '<h2>total   ' . $pages_vues . ' vues</h2>';



$ip_adresse = $_SERVER['REMOTE_ADDR'];

echo ' <h2>'. date("d-m-Y") .' </h2>';
$Date=date("d-m-Y");
$Heure=date("H:i");
$User_agent=$_SERVER['HTTP_USER_AGENT'];
?>
<?php
try
{

       $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', 'mdp::^^');
}  
  
catch(Exception $e)
{

       die('Erreur : '.$e->getMessage());

}

// Test de l'esxistence de l'IP du visiteur dans la table sql
$reponse = $bdd->query('SELECT * FROM Visiteurs WHERE ip_adresse=$ip_adresse');


// Si réponse négative, enregistrement complet
if ($reponse == true)
{
       $bdd->exec("UPDATE Visiteurs SET date=\"$Date\", heure=\"$Heure\" ,user_agent=\"$User_agent\" WHERE ip_adresse=\"$ip_adresse\"") or die(print_r($bdd->errorInfo()));

}

// Sinon mise à jour des infos liées au champ ip_adresse
else 
{
       
       $req = $bdd->prepare('INSERT INTO Visiteurs (ip_adresse, date, heure, user_agent) VALUES(?,?,?,?)');

       $req->execute(array($_POST['ip_adresse'] = $ip_adresse , $_POST['date'] = date("d-m-Y"), $_POST['heure'] = date("H:i"), $_POST['user_agent'] = $User_agent));
 
}
?>
    </body>
</html>
