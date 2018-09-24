<?php

$User_agent=$_SERVER['HTTP_USER_AGENT'];
$ip_adresse = $_SERVER['REMOTE_ADDR'];
$Date=date("d-m-Y");
$Heure=date("H:i");

try
{

       $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', 'mdp::^^');
}  
  
catch(Exception $e)
{

       die('Erreur : '.$e->getMessage());

}


$res = $bdd->query("SELECT COUNT(*) AS nb FROM Visiteurs WHERE ip_adresse='$ip_adresse'");
$data = $res->fetch();
$nb = $data['nb'];

if($nb == 0) 
{

        $req = $bdd->prepare('INSERT INTO Visiteurs (ip_adresse, nb, date, heure, user_agent) VALUES(?,?,?,?,?)');
        $req->execute(array($_POST['ip_adresse'] = $ip_adresse , $_POST['nb'] = 1 , $_POST['date'] = date("d-m-Y"), $_POST['heure'] = date("H:i"), $_POST['user_agent'] =$User_agent));
}

else
{
        $bdd->exec("UPDATE Visiteurs SET nb=nb+1, date=\"$Date\" , heure=\"$Heure\",user_agent=\"$User_agent\" WHERE ip_adresse=\"$ip_adresse\"") or die(print_r($bdd->errorInfo()));  
}





?>






