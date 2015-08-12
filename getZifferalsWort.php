<?php
function getZifferalsWort($Ziffer){
	$Wort='';
	switch ($Ziffer) {
    case '1':
		$Wort='Eins';
		return $Wort;
        break;
    case '2':
        $Wort='Zwei';
		return $Wort;
        break;
    case '3':
		$Wort='Drei';
		return $Wort;
		break;
	case '4':
		$Wort='Vier';
		return $Wort;
		break;
	case '5':
		$Wort='F&uumlnf';
		return $Wort;
		break;
	case '6':
		$Wort='Sechs';
		return $Wort;
		break;
	case '7':
		$Wort='Sieben';
		return $Wort;
		break;
	case '8':
		$Wort='Acht';
		return $Wort;
		break;
	case '9':
		$Wort='Neun';
		return $Wort;
		break;
	case '0':
		$Wort='Null';
		return $Wort;
		break;

	default:
		return 'Ung&uumlltige Eingabe!';
		break;
	}
		
}
echo '<pre>';
$i=0;
while ($i<=10){
	echo $i.' als Wort: ';
	echo getZifferalsWort($i);
	echo '<br><br>';
	$i=$i+1;
}
echo '</pre>';
?>