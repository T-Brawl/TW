<html>
<body>
<?php

function sortieTable($table) {
echo '<table border="solid">' . "\n";
foreach($table as $tab=>$val) {
if (is_array($val)) {echo $tab . sortieTable($val);} else {
echo "({$tab},{$val})";}
}
echo "</table>\n";
}

$liste = array(3 => "Pi", 42 => "Reponse" , 100 => array(0 => "NULL", 1 => "TRUE", 4 => "FALSE") , 65536 => "2¹⁶");

sortieTable($liste);


?>
</body>
</html>
