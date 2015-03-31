<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Triangle de Pascal</title>
    	<link rel="stylesheet" type="text/css" href="../navbar.css" />
	</head>
	<body>
		<header>
		  <?php 
			include("../navbar.php");
		   ?>
		</header>
			<?php

			function creerPascal($entier) {
				$tableau = array(array(1));
				if ($entier <= 0) return $tableau;
				
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
				echo '<table>' . "\n";
				foreach($tableau as $tab) {
					echo "\t<tr>\n";
						foreach($tab as $val) {
							echo "\t\t" . '<td align="center">' . "$val</td>\n";
						}
					echo "\t</tr>\n";
				}
			
				echo "</table>\n";
			}

		  
	    	$number = (isset($_POST['nb']));
			if(!$number) { 
		   ?>		
		<form action="pascal.php" method = "POST">
			<fieldset>
				<input type="text" id="nb" name="nb" size="25" maxlength="100"  required="required" pattern="[0-9]+" />
				<button type="reset">Effacer</button>
				<button type="submit" name="valid" value="calculer">Calculer</button>
			</fieldset>
		</form>
		<?php 
		} else { 
		?>
		<a href="pascal.php">Reset ?</a>
		<?php
			$nb = $_POST['nb'];
			pascalToHtml(creerPascal($nb));
		  }
		?>
	</body>
</html>

		
