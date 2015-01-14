<?php
//1-4 Zaehlen
echo 
		'1<br>
		2<br>
		3<br>
		4<br>
		usw.>';
echo '<h1>Wiederholungen in PHP</h1>';
$zaehler=1;
$ende=10;
while ($zaehler <= $ende){
	echo $zaehler.'<br>';
	$zaehler=$zaehler + 1;
	}

//Platzhalter
echo '<br><br><br><br>';
//Addieren
$zaehlerX=1;
$ergebnis=0;

while ($zaehlerX <= $ende){
	$ergebnis=$ergebnis + $zaehlerX;
	$zaehlerX=$zaehlerX + 1;
	}
	echo '<a>Das ergbnis ist </a>'.$ergebnis;
	
//Platzhalter
echo '<br><br><br>';
//Das ganze Nochmal mit rechenschritten:

$zaehlerX=1;
$ergebis=0;

while ($zaehler <= $ende){
	$ergebnis=$ergebnis + $zaehlerX;
	$zaehlerX=$zaehlerX + 1;
	echo $zaehlerX.'<a>+</a>';
	}
?>