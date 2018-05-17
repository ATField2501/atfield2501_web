<?php

$monfichier1 = fopen('url.txt', 'r');

fseek($monfichier1, 32);

$url= fgets($monfichier1);

fseek($monfichier1, 0);

fclose($monfichier1);

echo"<div class='element0'><h4><iframe id='player' type='text/html' width='540' height='260'
  src='http://www.youtube.com/embed/$url?enablejsapi=1'
  frameborder='0'></iframe></h4></div>";


//partie à rajjouter à la fin de src pour proteger contre injection JS
//<&origin=http://atfield2501.free.fr>
?>


