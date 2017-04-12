<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<h1>Formulaire D'inscription</h1>
	<?php
		$prenom = 'Jean';
		echo '<b>Bonjour</b> ' . '<span>'.$prenom.'</span>';
		define('VILLE', 'Laval');
		echo '<p>Ville de départ est <b>'.VILLE.'</b></p>';

		$a = 5;
		$b = 2;
		$c = $a+$b;

		if ($c < 10 ) {
			echo $c." est plus petit que 10<br>";
		}else if ($c > 10) {
			echo $c." est plus grand que 10<br>";
		}else{
			echo $c." est égale à 10<br>";
		}
		/*
		while ($c <= 100) {
			$c++ ;
			echo '<p>'.$c.'</p>';
		}
		
		for ($i=0; $i <= 10; $i++) { 
			echo "<p>Ligne c'est n°".$i."</p>";
		}
		*/

		$tableau[1] = 'Case 1';
		$tableau[2] = 'Case 2';
		$tableau['A'] = 'Case A';
		$tableau[] = 'Case ?';
		$tableau2 = array(
			1 => 'Case 1',
			2 => 'Case 2',
			3 => 'Case 3',
			4 => 'Case 4',
			5 => 'Case 5'
			);

		foreach ($tableau2 as $key => $value) {
			echo $key.' '.$value.' ';
		}

		echo '<p>'.date('d/m/Y H:i:s').'</p>';
		$prix = 50;
		$tva = 20.6;

		/**
		 * *
		 * 
		 */
		function prixTTC($prix, $tva = 10.6)
		{

			$prixTTC = $prix + ($prix * $tva / 100);
			echo '<p>Le prix finale est de '.$prixTTC.'</p>';
		}

		prixTTC($prix,$tva);

		      votez
		 macron-enbourg
		attention ivresse

	?>

</body>
</html>