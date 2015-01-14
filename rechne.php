<?php
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

echo '5+2='.rechne(5,'+',2).'<br>';
echo '5-3='.rechne(5,'-',3).'<br>';
echo '5*3='.rechne(5,'*',3).'<br>';
echo '4/2='.rechne(4,'/',2).'<br>';
echo '5%2='.rechne(5,'%',2).'<br>';
echo '5x3='.rechne(5,'x',3).'<br>';
echo '5/0='.rechne(5,'/',0).'<br>';
echo '0/5='.rechne(0,'/',5).'<br>';

?>