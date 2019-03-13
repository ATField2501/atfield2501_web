<?php
    if (isset($_POST['adressefiltrée']))
    {
        $adresse = $_POST['adressefiltrée']."\n";
        $blacklist = fopen('../Black_Liste/atfield2501_Black-List.txt', 'a+');
        fputs($blacklist, $adresse);
        fclose($blacklist);
    }

?>
