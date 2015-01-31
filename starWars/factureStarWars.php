<?php
echo "<html>\n<body>";

$tab = $_POST['fig'];
if($figurines!=0){
foreach($tab as $figurine) {
echo "$figurine<br/>";
}
}

$adhesion = $_POST['adhesion'];

$taxe = 1.196;

$prix = 0;

$prixadhesion = 5;

$frais = 7.5;

$figurines = count($tab);

$voie = $_POST['voie'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$commune = $_POST['cp'];
$cp = $_POST['commune'];

if (empty($voie) && empty($nom) && empty($prenom) && empty($cp) && empty($commune)) {
$erreur="Toutes les informations n'ont pas été données ou écrites correctement, veuillez réessayer svp.";
header("Location: starWars.php?error=$erreur"); }

echo $nom . "<br>";
echo $prenom . "<br/>";
echo $cp . "<br/>";
echo $commune . "<br/>";

if($figurines !=0){
if ($figurines != 12)
   {$prix = $figurines * 15;
   if ($figurines >= 5)
       {$prix = $prix * 0.8;
       echo "Réduction de 20% (prix de gros)<br/>";}
  }  	      	      	
else 
     {$prix = 135;}

echo "Prix hors taxe : $prix €<br/>";

if ($adhesion != "non")
   {$prix = $prix * 0.9;
    echo "Prix après réduction adhérant (-10%) : $prix €<br/>";
   if($adhesion == "oui")
   {$prix = $prix + $prixadhesion;
   echo "Adhésion membre : $prixadhesion €<br/>";} 
}


$prix = $prix + $frais;
echo "Frais de port: $frais €<br/>";

echo "Prix total HT : $prix €<br/>";
$prix = $prix * $taxe;
echo "Prix total TTC : $prix €<br/>";
}
else
	echo "Vous n'avez rien sélectionné";

echo "</body>\n</html>";
?>

