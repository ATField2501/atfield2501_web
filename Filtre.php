<?php
    $ip_adresse = $_SERVER['REMOTE_ADDR'];
    $blacklist = fopen('../Black_Liste/atfield2501_Black-List.txt', 'r');
    if ($blacklist)
    {
        while (!feof($blacklist)) ## tans que le fichier n'est pas entièrement lu
        {
            $ligne = fgets($blacklist);

            if (trim($ligne) == $ip_adresse)
            {
                # Renseignement sur l'activitée du firewall
                $monfichier = fopen('../espace_perso/firewall_activite.txt', 'r+');
                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                $pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                fseek($monfichier, 0); // On remet le curseur au début du fichier
                fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
                fclose($monfichier);
                header('Location: ../index.php');
            }
        }
        fclose($blacklist);
    }


?>
