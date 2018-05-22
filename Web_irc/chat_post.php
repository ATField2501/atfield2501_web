<?php

// On démarre la session AVANT d'écrire du code HTML

session_start();

$cible01="https://www.youtube.";


$_SESSION['pseudo']=$_POST['pseudo'];

try
{

       $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', 'mdp=^^');
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

//

//Structure conditionnel pour detecter url youtube et dailymotion
if (strpos($_POST['message'], $cible01) !== FALSE)
{
//ouverture du fichier
$monfichier1 = fopen('url.txt', 'w');

//fseek($monfichier1, 0);

$url=strstr($_POST['message'], $cible01);

//On ecrit l url dans le ficher.
fputs($monfichier1, $url);
//On remet le pointeur au debut
fseek($monfichier1, 0);
//On referme le fichier
fclose($monfichier1);
//split la chaine pour récuperer ID video
//$keywords = preg_split("/[\s,]+/", "$POST['message']");
}



// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO Chat (pseudo, message , date, heure) VALUES(?, ?, ?, ?)');

$req->execute(array($_POST['pseudo'], $_POST['message'], $_POST['date'] = date("d-m-Y"), $_POST['heure'] = date("H:i")));



//Envois d'un email à l'admin pour information sur nouveau post
include("fonction_mail.php");


header('Location: chat.php');
?>
