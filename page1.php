
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style01.css" />
        <title> ATField 2501</title>
 
    </head>

    <body>
        
        <strong><h1>Atfield 2501</h1></strong>

<?php
    try
    {
         $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', 'mdp::^^');
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    } 

$res1=$bdd->query('select count(*) as nb from Citations');  
$data=$res1->fetch();
$nb=$data['nb'];
    $Numero=rand(1 , $nb);
    $reponssse=$bdd->query("SELECT citation FROM Citations WHERE id=$Numero");
           
while ($donnees = $reponssse->fetch())
{
        $citation=$donnees['citation'];
}

$reponssse->closeCursor();   

echo "<em><h6> $citation </h6></em><br >"; 
include("fonction_identification.php");  
?>


<?php include("menu_1.php"); ?>        

          

       <h5> 
           <?php include("fonction_total-bookmarks.php"); ?>
           <p> irc.epiknet.org #Cthulhu </p>
           <p>Compte git-hub <a href="https://github.com/ATField2501" target="_blank">ATField2501</a></p>
           <p><a href="mailto:atfield2501@gmail.com">Contacter ATField2501 par e-mail </a></p>
       </h5>
       
    </body>
</html>


