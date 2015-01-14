<?php
##HEADER
echo '<header>';
echo '<title>Taschenrechner</title>';
echo '</header>';


##FUNKTION
function rechne ($wert1,$operator,$wert2){

	switch ($operator) {
    case '+':
        $wert=$wert1+$wert2;
		return $wert;
        break;
    case '-':
        $wert=$wert1-$wert2;
		return $wert;
        break;
    case '/':
	if ($wert2==0){
	return 'Wer 2 ist Null! Nicht m&oumlglich!';
	}
	else{
        $wert=$wert1/$wert2;
		return $wert;
        break;
		}
	case '*':
        $wert=$wert1*$wert2;
		return $wert;
		break;
	case '%':
		$wert=$wert1%$wert2;
		return $wert;
		break;
    default:
       echo "<br>Kein Bekanntes Rechenparameter m&oumlgliche Parameter: +,-,/,*,%<br><br>";


	
	}
}
##FORMULAR
echo '<form action="mathe.php" method="post">
 <p>Wert 1: <input type="text" name="wert1" /></p>
 <p>Operator: <input type="text" name="operator" /></p>
 <p>Wert 2: <input type="text" name="wert2" /></p>
 <p><input type="submit" /></p>
</form>';
$wertX1=$_POST['wert1'];
$wertX2=$_POST['wert2'];
$operatorX=$_POST['operator'];
##AUSGABE
echo $wertX1.$operatorX.$wertX2.'='.rechne($wertX1,$operatorX,$wertX2).'<br>';

?>