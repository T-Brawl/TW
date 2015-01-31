<html>
<body>
<?php
require_once 'Livre.class.php';

require_once 'bibLivre.php';

require_once 'lirelivres.php';


$pyhton = new Livre('Python (en français)',array('Mark Lutz'),'test');

$pyhton2 = new Livre('Apprendre à programmer avec Python',array('Gérard Swinnen','Jon Snow'),'lol');

$liste = array($pyhton, $pyhton2);

imageLivres($liste); 

imageLivres(lire_livres("livres.txt"));

?>
</body>
</html>
