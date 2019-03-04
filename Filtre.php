<?php
    $ip_adresse = $_SERVER['REMOTE_ADDR'];
    $blacklist = fopen('../Black_Liste/atfield2501_Black-List.txt', 'r');
    if ($blacklist)
    {
        while (!feof($blacklist)) ## tans que le fichier n'est pas entièrement lu
        {
            $ligne = fgets($blacklist);
            # trim() pour effacer charactères invisibles
            if (trim($ligne) == $ip_adresse)
            {
                header('Location: ../index.php');
            }
        }
        fclose($blacklist);
    }


?>
