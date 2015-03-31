<html>
	<head>
		<title>liste de livres</title>
	</head>
	<body>
		<h1>Mes livres:</h1>
		<?php
		function tabLivres($auteur, $livre) {
			echo '<table border="solid">';
			echo "<tr>";
			foreach($auteur as $val) echo '<td align="center" >'  . $val . "</td>";
			echo "</tr>";
			echo "<tr>";
			foreach($livre as $var) echo '<td align="center" >'  . $var . "</td>";
			echo "</tr>";
		echo "</table>";
		}

		$auteurs = array('Mark Lutz', 'Gérard Swinnen');

		$titres = array('Python (en français)', 'Apprendre à programmer avec Python');

		tabLivres($auteurs,$titres);


		function tabLivres2($tableau) {
			echo '<table border="solid">';
			foreach($tableau as $tab) {
				echo "<tr>";
				foreach($tab as $val) echo '<td align="center" >'  . $val . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}

		$liste = array(
		array('auteur'=>'Mark Lutz','titre'=>'Python (en français)'),
		array('auteur'=>'Gérard Swinnen','titre'=>'Apprendre à programmer avec Python')
		);

		tabLivres2($liste);

		function tabLivres3($tableau) {
			echo '<table border="solid">';
			foreach($tableau as $tab) {
				echo "<tr>";
				foreach($tab as $val) echo '<td align="center" >'  . $val . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}

		?>
	</body>
</html>
