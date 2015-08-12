<?php

function zifferalsWort($Ziffer){
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

function ZahlalsWort($Zahl){
	echo '<pre>';
	if(!is_int($Zahl)){
		return 'ung&uumlltige Zahl'.$Zahl.'<<';
	}
	$Ergebnis='';
	$Vorzeichen="; $Ergebnis=";
	if ($Zahl<0){
		$Vorzeichen=' minus';
		$Zahl=-$Zahl;
	}
	do{
		$Ergebnis=zifferalsWort($Zahl%10).' '.$Ergebnis;
		$Zahl=$Zahl/10;
	}while($Zahl>=1);
	return $Vorzeichen.$Ergebnis.'<br>';
	echo '</pre>';
}

echo ZahlalsWort(1);
?>