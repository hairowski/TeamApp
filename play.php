<?php

include 'player.php';
include 'team.php';

$p1 = new player('1','Enric','Serra','Hairo','right','9','0');
$p2 = new player('2','Joan','Obrador','Johnnie','right','4','0');
$p3 = new player('3','Guillem','Crespi','Mito','left','7','0');
$p4 = new player('4','Pedro','Mari','Pedrito','right','10','0');

$equipo = new team ();

$equipo->addPlayer($p1);
$equipo->addPlayer($p2);
$equipo->addPlayer($p3);
$equipo->addPlayer($p4);

echo'
<!DOCTYPE html>
<html>
	<head>		
	</head>
	<body>	
		<main>'.$equipo->listPlayers().'
		</main>
	</body>
</html>';

?>