<?php

// On démarre la session AVANT d'écrire du code HTML

session_start();



$_SESSION['pseudo']=$_POST['pseudo'];
?>
<?php
try
{

       $bdd = new PDO('mysql:host=localhost;dbname=Chat;charset=utf8', 'atfield2501', 'mdp::^^');
}  
  
catch(Exception $e)
{

       die('Erreur : '.$e->getMessage());

}

$Date=date("d-m-Y");
$heure = date("H:i");

//Structure conditionnel pour afficher "Anonymous" quant aucun pseudo n'est rentré
if ($_POST['pseudo'] == false)
{
    $_POST['pseudo'] = "-Anonymous-";
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO Chat (pseudo, message , date, heure) VALUES(?, ?, ?, ?)');

$req->execute(array($_POST['pseudo'], $_POST['message'], $_POST['date'] = date("d-m-Y"), $_POST['heure'] = date("H:i")));






// Redirection du visiteur vers la page du minichat
header('Location: chat.php');
?>
