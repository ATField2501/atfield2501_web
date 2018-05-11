<?php

$User_agent=$_SERVER['HTTP_USER_AGENT'];
$ip_adresse = $_SERVER['REMOTE_ADDR'];
$Date=date("d-m-Y");
$Heure=date("H:i");

try
{

       $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', 'mdp==^^');
}  
  
catch(Exception $e)
{

       die('Erreur : '.$e->getMessage());

}

// Test de l'esxistence de l'IP du visiteur dans la table sql
$reponse = $bdd->query('SELECT * FROM Visiteurs WHERE ip_adresse=$ip_adresse');

// Si réponse négative, enregistrement complet
if ($reponse)
{
       $bdd->exec("UPDATE Visiteurs SET date=\"$Date\" , heure=\"$Heure\",user_agent=\"$User_agent\" WHERE ip_adresse=\"$ip_adresse\"") or die(print_r($bdd->errorInfo()));
}

// Sinon mise à jour des infos liées au champ ip_adresse
else 
{
       $req = $bdd->prepare('INSERT INTO Visiteurs (ip_adresse, date, heure, user_agent) VALUES(?,?,?,?)');

       $req->execute(array($_POST['ip_adresse'] = $ip_adresse , $_POST['date'] = date("d-m-Y"), $_POST['heure'] = date("H:i"), $_POST['user_agent'] =$User_agent));       
 
}
?>
