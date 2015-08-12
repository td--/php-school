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
while($Hoehe<=2){
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
while($Hoehe<=4){
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
/*
$i=0;
$innen=0;
$aussen=97;

echo '<pre>';

while($i<=400){
	male('x',1);
	male(' ',$innen);
	male('x',1);
	male(' ',$aussen);
	male('x',1);
	male(' ',$innen);
	male('x',1,true);
	$i=$i+1;
	$innen=$innen+1;
	$aussen=$aussen-1;
}
while($i<=800){
	male(' ',799);
	male('x',1,true);
}
echo '</pre>';
*/


/*
echo '<br>';
echo summeArray($Array2);
*//*
echo '<form action="arraysumme.php" method="post">
 <p>Wert 1: <input type="text" name="wert1" /></p>
 <p>Wert 2: <input type="text" name="wert2" /></p>
 <p>Wert 3: <input type="text" name="wert3" /></p>
 <p>Wert 4: <input type="text" name="wert4" /></P>
 <p><input type="submit">Errechnen</input></p>
</form>';
$Array[0]=$_POST['wert1'];
$Array[1]=$_POST['wert2'];
$Array[2]=$_POST['wert3'];
$Array[3]=$_POST['wert4'];
echo '<br><br>';
*/
?>
<h1>PastePad</h1>
<h3>Ergibt selten Sinn!</h3>
	male('x',1);
	
	
	
	