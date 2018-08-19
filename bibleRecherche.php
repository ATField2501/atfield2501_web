<?php

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

?>
