<?php

    session_start();

    echo '<div class="element0">';
    echo '<legend><h4> Recherche</h4></legend>';
    echo '<form action="recherche.php" method="post">';
    echo '<h4>';

    echo '<input type="texte" name="recherche" />';           
    echo '<input type="submit" value="Valider" /><br />';

    echo '<input type="radio" id="recherche" name="recherche"  checked/>';
    echo '<label for="recherche">titre</label>';

    echo '<input type="radio" id="recherche" name="recherche"  />';
    echo '<label for="recherche">auteur</label>';

    echo '</h4>';
    echo '</form>';
    echo '</div>';

    try
    {
         $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', 'mdp:^(;,,;)^');
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query("SELECT titre, auteur FROM bibliographie ");

    while ($donnees = $reponse->fetch())
    {	 
         if ($_POST['recherche'] == $donnees['auteur'] or $donnees['titre']
             echo '<h1>'. $_POST['recherche'] .'trouvé dans la base de données'.'</h1>';
    }

?>
