<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
	<body>
		<p>
			<?php
			$i=0;
			print( $i++ + "3 cochons" . " chiens\n");
			print("$i" . "3 cochons" . " chiens\n");
			print( $i + "4.1 cochons" + " chiens" . (3/2) . "\n");
			?>
		</p>
		<p>
			<?php
			/* quelques exemples de chaînes de caracteres */
			$a = 'PHP';
			$b = 'MySQL';
			echo "$a et $b " ;
			echo "<br/>\n";
			echo '$a et $b'; 
			echo "<br/>\n";
			echo "La cérémonie d’ouverture a lieu le . date('d')";
			echo "<br/>\n";
			echo "La cérémonie d’ouverture a lieu le " . date('d');
			echo "<br/>\n";
			echo 'La cérémonie d\’ouverture a lieu le ' . date("d"); 
			echo "<br/>\n";
			echo "Sa devise est \"Liberté Egalité Fraternité\" ";
			echo "<br/>\n";
			echo $a . " et " . $b ;
			echo "<br/>\n";
			echo $a , " et " , $b ;
			echo "<br/>\n";
			?>
		</p>
		<p>
			<?php
			/* tableau */
			$tab[0] = 2004 ;
			$tab[35] = ’MySQL’ ;
			$tab[1] = 31.14E7 ;
			$tab[2] = "PHP4";
			$tab[3] = 24 ;
			$tab[] = TRUE ;
			$longueur = 0;

			foreach($tab as $val) {
			echo "$val  <br/>";
			$longueur++;
			}
			echo "<br/> $longueur";
			echo "<br/> $tab[4]";
			echo "<br/> $tab[36]";
			?>
		</p>
	</body>
</html>
