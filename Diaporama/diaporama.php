
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styleXX.css" />
        <title> ATField 2501</title>
 
    </head>

    <body>
        
        <strong><h1>..:: Diaporama ::..</h1></strong>
    <h4>
        <a href="diaporama.php" title="diapo"> passe </a></h4>
<?php

    try
    {
         $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', 'mdp== ^^');
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $res = $bdd->query('select count(*) as nb from diaporama');
    $data = $res->fetch();
    $nb = $data['nb'];
    $Numero=rand(1 , $nb);
    $reponssse=$bdd->query("SELECT url FROM diaporama WHERE id=$Numero");

while ($donnees = $reponssse->fetch())
{
        $supraV='"'. $donnees['url'] .'"';
}


//$supraV = "https://www.babelio.com/users/Alan-lee-image.jpg";
//echo "<h2><a data-pin-do='embedPin' data-pin-width='large' href='https://www.pinterest.com/pin/419749627765976874/'></a></h2>";


  echo "<h2><iframe width='1200' height='1000' src=$supraV scrolling='no' allowfullscreen webkitallowfullscreen frameborder='0' style='border: 0 none transparent;'></iframe></h2>";

//<a data-pin-do="embedPin" data-pin-width="large" href="https://www.pinterest.com/pin/419749627765976874/"></a>
 //  echo "<h2><a data-pin-do='embedPin' data-pin-width='large' href='https://www.pinterest.com/pin/419749627765976874/'></a></h2>";

?>
