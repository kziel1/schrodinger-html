<?php
	$befehle = array(
		"Baut eine Siedlung! Macht sie gro�!",
		"Baut mehr Schiffe!",
		"Bringt Gold nach Europa, die K�nigin braucht Schmuck!",
		"Sind die Eingeborenen endlich Christen? Wenn nicht, dann aber schnell jetzt!",
		"H�rt auf, wegen jeder Kleinigkeit nachzufragen!",
		"Zahlt mehr Steuern!",
		"Haltet die Portugiesen vom Gold fern! Und die Franzosen! Die Engl�nder sind okay.",
		"Baut eine gro�e Statue, als Symbol der Freiheit! Erz�hlt mir nichts von Anachronismus, wenn wir die zuerst bauen werden wir reich.",
		"Schickt mehr Gold, um Gottes Willen!"
	);
	header('Content-Type: text/plain; charset=iso-8859-1');
	echo $befehle[array_rand($befehle)];
?>