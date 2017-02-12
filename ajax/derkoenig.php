<?php
	$befehle = array(
		"Baut eine Siedlung! Macht sie groß!",
		"Baut mehr Schiffe!",
		"Bringt Gold nach Europa, die Königin braucht Schmuck!",
		"Sind die Eingeborenen endlich Christen? Wenn nicht, dann aber schnell jetzt!",
		"Hört auf, wegen jeder Kleinigkeit nachzufragen!",
		"Zahlt mehr Steuern!",
		"Haltet die Portugiesen vom Gold fern! Und die Franzosen! Die Engländer sind okay.",
		"Baut eine große Statue, als Symbol der Freiheit! Erzählt mir nichts von Anachronismus, wenn wir die zuerst bauen werden wir reich.",
		"Schickt mehr Gold, um Gottes Willen!"
	);
	header('Content-Type: text/plain; charset=iso-8859-1');
	echo $befehle[array_rand($befehle)];
?>