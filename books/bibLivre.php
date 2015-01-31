<?php

function imageLivres($tableau) {
include_once 'Livre.class.php';
echo '<table>';
foreach($tableau as $tab)
$tab->imageTR();
echo '</table>';
}

?>
