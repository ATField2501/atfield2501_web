
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

?>



           <div id="conteneur0">
           <div class="element0"><h4><a href="atfield2501.jpg"><img src="atfield2501_mini.jpg" alt="atfield" title="atfield" /></a></h4></div>

           <div class="element0"><h7> Navigation </h7>
           <h3> 
           <a href="Web_irc/chat.php" title="Chat-Box" > Chat-BoX</a>
           </h3>

           <h3> 
           <a href="juke-box/jukebox.php" title="Juke-Box" > Juke-BoX</a>
           </h3>

           <h3> 
           <a href="espace_perso/formulaire.php" title="Lymbes" > Lymbes</a>
           </h3>


           <h3> 
           <a href="bookmarks.php" title="BookMark" target="_blank"> BookMark</a>
           </h3>


           <h3> 
           <a href="ascii-art/ascii_art.php" title="Ascii-Art" > Ascii-Art</a>
           </h3>

           <h3> 
           <a href="index.php" title="home" > ::(;,,;)::</a>
           </h3></div>

           <div class="element0"><hh><img src="shigurui.jpg"/></hh></div></div>           
          

       <h5> 
           <p> irc.epiknet.org #Cthulhu </p>
           <p>Cloud DEV git-hub <a href="https://github.com/ATField2501"target="_blank">ATField2501</a></p>
           <p><a href="mailto:atfield2501@gmail.com">Contacter ATField2501 par e-mail </a></p>
       </h5>
       
    </body>
</html>


