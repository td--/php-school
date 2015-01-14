<?php
/*
function Basis2hoch($potenz){
$i=0;
$ergebnis=0.5;
	while ($i<=$potenz){
		$ergebnis=$ergebnis*2;
		$i=$i+1;
	}
	return $ergebnis;
}
echo '2^5='.Basis2hoch(5).'<br>';
*/


function male($Zeichen, $Anzahl, $br=false){
	for ($i=1;$i<=$Anzahl;$i=$i+1){
		echo $Zeichen;
	}
	if ($br){
		echo '<br>';
	}
}
/*
$Zeile=1;
echo '<pre>';
male ('x',100,true);
$Zeile=$Zeile+1;
while ($Zeile<100){
	male('x',1,false);
	male(' ',$Zeile-2,false);
	male('x',1,false);
	male(' ',98-$Zeile,false);
	male('x',1,true);
	$Zeile=$Zeile+1;
}
male('x',100,false);
echo '</pre>';
*/
/*
function hoch($Exponent){
$Ergebnis=pow(2,$Exponent);
return $Ergebnis;
}
*/
/*
function hoch($base,$exponent){
	$ergebnis=$base
}

echo '<pre>';
for($i=-10; $i<=10; $i=$i+1){
	echo '2^'.$i.'= '.hoch($i).'<br>';
}

echo '</pre>';
*/

/*
echo '<pre>';
$Hoehe=1;
while($Hoehe<=2500){
male('x',1);
male(' ',2);
male('x',1);
male(' ',2);
male('x',1,true);	
$Hoehe=$Hoehe+1;
}
male('x',4);
male(' ',2);
male('x',1,true);
$Hoehe=$Hoehe+1;
while($Hoehe<=5000){
male('x',1);
male(' ',2);
male('x',1);
male(' ',2);
male('x',1,true);	
$Hoehe=$Hoehe+1;
}
male('x',1);
male(' ',2);
male('x',1);
male(' ',2);
male('x',3);
echo '</pre>'
*/

?>