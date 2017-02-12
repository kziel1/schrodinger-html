<?php
	session_start();
	header("Content-Type: application/json; charset=iso-8859-1");
	if (!isset($_SESSION["count"]) || isset($_REQUEST["neuerVersuch"])){
		$_SESSION["count"] = 7;
		$_SESSION["zahl"] = rand(1, 100);
		echo '{"nachricht": "Wo bleiben meine Steuern, Bursche?", "versuche": ' . $_SESSION["count"] . '}';
	} else if (isset($_REQUEST["tipp"])) {
		$tipp = $_REQUEST["tipp"];
		$_SESSION["count"] = $_SESSION["count"] - 1;
		if ($tipp == $_SESSION["zahl"]){
			echo '{"nachricht": "Endlich jemand mit Verstand! Das ist genau richtig!", "nochEinTipp": false, "zahl": ' . $tipp . ', "versuche": ' . $_SESSION["count"] . '}';
		} elseif ($_SESSION["count"] == 0){
			echo '{"nachricht": "Das war deine letzte Chance, inkompetenter Narr!", "nochEinTipp": false, "zahl": ' . $tipp . ', "versuche": ' . $_SESSION["count"] . '}';
		} elseif ($tipp < $_SESSION["zahl"]) {
			echo '{"nachricht": "Willst du uns beleidigen? Das ist zu wenig!", "nochEinTipp": true, "zahl": ' . $tipp . ', "versuche": ' . $_SESSION["count"] . '}';
		} else {
			echo '{"nachricht": "Das ist zu viel, du wirst die Kolonie ruinieren!", "nochEinTipp": true, "zahl": ' . $tipp . ', "versuche": ' . $_SESSION["count"] . '}';
		}
	} else {
		header('Es fehlen Parameter: tipp oder neuerVersuch müssen angegeben sein!', true, 400);
	}
	
?>