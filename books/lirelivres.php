<?php
require_once 'Livre.class.php';

require_once 'bibLivre.php';


function lire_livres($fichier) {
$tableau = array();
$canal = fopen($fichier, "r");
$titre = fgets($canal);
while ($titre != FALSE)  {
$auteur = explode(',',fgets($canal));
$editeur = fgets($canal);
if(trim($editeur) != ""){
	   $tableau[]= new Livre($titre,$auteur,$editeur);
	   fgets($canal);
	   $titre = fgets($canal);
}
else{
	$tableau[]= new Livre($titre,$auteur);
	  $titre = fgets($canal);	
}
}
return $tableau;
}


?>
