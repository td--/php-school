<?php

/*
echo '<form action="mathe.php" method="post">
 <p>Wert 1: <input type="text" name="wert1" /></p>
 <p>Operator: <input type="text" name="operator" /></p>
 <p>Wert 2: <input type="text" name="wert2" /></p>
 <p><input type="submit" /></p>
</form>';
$wertX1=$_POST['wert1'];
$wertX2=$_POST['wert2'];
$operatorX=$_POST['operator'];

*/

##FUNKTIONEN

/*
function addiere ($op1,$op2){
	echo $op1+$op2;
}
echo addiere(addiere(5,2),3).'<br>';
*/


function addiere ($wert1,$wert2){
	$wert=$wert1+$wert2;
	return $wert;
}

function subtract ($wert1,$wert2){
	$wert=$wert1-$wert2;
	return $wert;
}

function rechne ($wert1,$operator,$wert2){
	$wert=$wert1.$operator.$wert2;
	return $wert;
}

##AUSGABEN
/*
echo $wertX1.'+'.$wertX2.'='.addiere($wertX1,$wertX2).'<br>';

//echo addiere(addiere(5,2),3).'<br>';

echo $wertX1.'+'.$wertX2.'='.subtract($wertX1,$wertX2).'<br>';*/

echo '5+2='.rechne(5,'+',2).'<br>';
echo '5-3='.rechne(5,'-',3).'<br>';
?>