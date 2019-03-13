<?php
    $blacklist = fopen('../Black_Liste/atfield2501_Black-List.txt', 'w+');
    fclose($blacklist);
    header('location:ecran_Kontrol2.php');
?>
