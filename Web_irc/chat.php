<?php

// On démarre la session AVANT d'écrire du code HTML

session_start();





?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style02.css" />
        <title> ATField 2501 - Chat - </title>
 
    </head>

    <body>
        <div id="conteneur0">
        <div class="element0">
        
             <h3>
             <a href="../page1.php" title="Home"> Retour </a></h3>
        </div>

        <div class="element0">
        
             <h3>
             <a href="chat.php" title="Home"> Rafraichir </a></h3>
        </div>

        <div class="element0">
        
             <h3>
                 <audio controls>
                     <source src="transcript.ogg">
                 </audio>
             </h3>
        </div>
        </div>
    
    
 
    <h5>
    <form action="chat_post.php" method="post">
        
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="<?php echo $_SESSION['pseudo'];?>"/><br />
        <label for="message">Message</label> :  <textarea name="message" rows="4" cols="55">

</textarea><br />

        <input type="submit" value="Envoyer" />
	
    </form>
    </h5><br />
  
<?php
try
{
         $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', 'mdp::^^');
}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}

$Date=date("d-m-Y");
// Récupération des 25 derniers messages
$reponse = $bdd->query('SELECT pseudo, message, date, heure FROM Chat ORDER BY ID DESC LIMIT 0, 25');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<h1><p>[' . $donnees['date'] . ' - ' . $donnees['heure'] . '] <strong>' . htmlspecialchars($donnees['pseudo']) . '</strong><br /><h7>  ' . htmlspecialchars($donnees['message']) . '</h7></p></h1>';
}

$reponse->closeCursor();

?>
    </body>
</html>
