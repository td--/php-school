<?php
echo '<title>V-2</title>';
/*
Zeichnung
x       x 0|7
 x     x  1|5
  x   x   2|3
   x x    3|1
    x     4|0
*/
##Variablen
$leerzeichen=7;
$leerzeichen2=0;
$i=1;

##Funktion
function zeichne ($Zeichen,$Anzahl){
	for ($i=1;$i<=$Anzahl;$i=$i+1){
		echo $Zeichen;
	}
}

##SPACER
echo '<h1>V</h1>';

##V
echo '<pre>';
while ($i<5){
	zeichne(' ',$leerzeichen2);
	zeichne('x',1);
	zeichne(' ',$leerzeichen);
	zeichne('x',1);
	
	echo '<br>';
	$leerzeichen=$leerzeichen-2;
	$leerzeichen2=$leerzeichen2+1;
	$i=$i+1;

}
zeichne (' ',$leerzeichen2);
zeichne('x',1);
echo '</pre>';


##SPACER
zeichne('<br>',7);
echo '<h1>RAUTE</h1>';

	
#Raute
$leerzeichen2=3;
$leerzeichen=1;
$i=1;
echo '<pre>';
zeichne (' ',$leerzeichen2);
echo ' x';
echo '<br>';
while ($i<4){
	zeichne(' ',$leerzeichen2);
	zeichne('x',1);
	zeichne(' ',$leerzeichen);
	zeichne('x',1);
	echo '<br>';
	$i=$i+1;
	$leerzeichen=$leerzeichen+2;
	$leerzeichen2=$leerzeichen2-1;
}

$leerzeichen=7;
$leerzeichen2=0;
$i=1;
while ($i<5){
	zeichne(' ',$leerzeichen2);
	zeichne('x',1);
	zeichne(' ',$leerzeichen);
	zeichne('x',1);
	
	echo '<br>';
	$leerzeichen=$leerzeichen-2;
	$leerzeichen2=$leerzeichen2+1;
	$i=$i+1;

}
zeichne (' ',$leerzeichen2);
zeichne('x',1);
echo '</pre>';


?>