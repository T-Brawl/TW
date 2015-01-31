<html>
<body>
<?php

function creerPascal($entier) {
if ($entier <= 0) return;
$tableau = array(array(1));

for($i = 1; $i <= $entier ; $i++) {
$ligne = array();
for($j = 0; $j <= $i ; $j++) {
$ligne[$j] = $tableau[$i - 1][$j - 1] + $tableau[$i - 1][$j];
}
$tableau[]= $ligne;
}

return $tableau;
}


function pascalToHtml($tableau) {
echo '<table border="solid">' . "\n";
foreach($tableau as $tab) {
echo "\t<tr>\n";
foreach($tab as $val) {
echo "\t\t" . '<td align="center">' . "$val</td>\n";
}
echo "\t</tr>\n";
}
echo "</table>\n";

}

pascalToHtml(creerPascal(10));


?>
</body>
</html>
