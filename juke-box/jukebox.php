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

$res1=$bdd->query('select count(*) as nb1 from darkwave');             
$res2=$bdd->query('select count(*) as nb2 from hiphop');             
$res3=$bdd->query('select count(*) as nb3 from punk');
$res4=$bdd->query('select count(*) as nb4 from wtf'); 
$res5=$bdd->query('select count(*) as nb5 from raggae');                                                                                            
$res6=$bdd->query('select count(*) as nb6 from classique');  
$res7=$bdd->query('select count(*) as nb7 from chansons'); 
$res8=$bdd->query('select count(*) as nb8 from rockpsy');
$res9=$bdd->query('select count(*) as nb9 from hardteck');   
$res10=$bdd->query('select count(*) as nb10 from bluejazz');  
$res11=$bdd->query('select count(*) as nb11 from trancegoa');
$res12=$bdd->query('select count(*) as nb12 from hardcore'); 
$res13=$bdd->query('select count(*) as nb13 from folk');      
$res14=$bdd->query('select count(*) as nb14 from zeul');  
$res15=$bdd->query('select count(*) as nb15 from electro');    
                                                                                                                                                                                                                                                                   

$data=$res1->fetch();
$nb1=$data['nb1'];

$data=$res2->fetch();
$nb2=$data['nb2'];

$data=$res3->fetch();
$nb3=$data['nb3'];

$data=$res4->fetch();
$nb4=$data['nb4'];

$data=$res5->fetch();
$nb5=$data['nb5'];

$data=$res6->fetch();
$nb6=$data['nb6'];

$data=$res7->fetch();
$nb7=$data['nb7'];

$data=$res8->fetch();
$nb8=$data['nb8'];

$data=$res9->fetch();
$nb9=$data['nb9'];

$data=$res10->fetch();
$nb10=$data['nb10'];

$data=$res11->fetch();
$nb11=$data['nb11'];

$data=$res12->fetch();
$nb12=$data['nb12'];

$data=$res13->fetch();
$nb13=$data['nb13'];

$data=$res14->fetch();
$nb14=$data['nb14'];

$data=$res15->fetch();
$nb15=$data['nb15'];

$nb= $nb1 + $nb2 + $nb3 + $nb4 + $nb5 + $nb6 + $nb7 + $nb8 + $nb9 + $nb10 + $nb11 + $nb12 + $nb13 + $nb14 + $nb15;
 

echo "<h2> Le Juke-BoX contiends $nb titres </h2>";
include("../fonction_identification.php");   
?>
<tt><a><img src=ATField00102.JPG /></a></tt>
<?php include("menu.php"); ?>

   </body>
</html>
