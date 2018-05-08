<?php
    $destinataire = 'atfield2501@gmail.com';
    // Adresse email du destinataire
    $sujet = ':: (;,,;) ::';
    // Titre de l'email
    $message = 'Nouveau post dans la Chat-BoX';
    // Contenu du message de l'email
    mail($destinataire, $sujet, $message);
    // Fonction principale qui envoi l'email
    //echo 'Email envoyé!';
?>
