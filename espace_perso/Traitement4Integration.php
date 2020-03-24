<?php
    # Récupération des valeurs du formulaire
    $style = $_POST["select"];
    $nazca = $_POST["nazca"];

    # Split du code entourant la cible
    $fruit= explode('src="' , $nazca , 2);
    $objet= $fruit[1];
    $fruit1= explode('"' , $objet);
    $url= $fruit1[0];


    # Connexxion à la bdd
    include('../ConstantesSecretes.php');
    try
    {
         $bdd = new PDO('mysql:host=localhost;dbname=atfield2501;charset=utf8', 'atfield2501', $mdp_db);
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    } 

    # Vérification d'une présence éventuelle de la valeur dans la bdd
#    $ether = $bdd->query("select url from hiphop");
#    while ($data = $ether->fetch())
#    {
#        $base = $data['url'];
#        # Si l valeur n'est pas déja présente dans la bdd 
#        if ($data != $url)
#        {
#            # Enregistrement de la valeur dans la bdd 
#            $bdd->exec("INSERT INTO $style (url) VALUES($dozo)");
#        } 
#    }	
    
    
            # Enregistrement de la valeur dans la bdd 
            $bdd->exec("INSERT INTO $style (url) VALUES('$url')");


    header('Location: Admin_JukeBox.php');

?>

