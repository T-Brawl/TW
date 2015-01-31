<?php
class Livre {

 private $titre = "";

 private $auteur = array();

 private $editeur = "";

 function __construct($tit, $aut, $edi= "") {
 	$this->titre = $tit;
	$this->auteur = $aut;
	$this->editeur = $edi;
}
 

 public function titre() {
 	return $this->titre;
}

 public function auteur() {
 	return $this->auteur;
}

 public function editeur() {
 	return $this->editeur;
}


 public function imageTR() {
 	echo '<tr> <td align="center" >'. implode(' , ',$this->auteur) .'</td> <td align="center" >'. $this->titre .'</td> </tr>';
}

}

?>
