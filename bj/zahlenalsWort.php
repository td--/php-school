<?php
echo "<pre>";
function ZifferalsWort($Ziffer){
	$WortZiffer=array("null","eins","zwei","drei","vier","fuenf","sechs","sieben","acht","neun");
	if ($Ziffer>=0 and $Ziffer<=9){
		return $WortZiffer[$Ziffer];
	} /*else if ($Ziffer<=0 and $Ziffer>=-9){
		$Ziffer=$Ziffer*-1;
		return "-".$WortZiffer[$Ziffer];
	}*/ else {
		return "ungueltige Ziffer";
	}
}

function ZahlalsWort($Zahl){
	if (!is_int($Zahl)){
		return "ungueltige Zahl".$Zahl."<<";
	}
	$Vorzeichen="";
	$Ergebnis="";
	if($Zahl<0){
		$Vorzeichen=" minus";
		$Zahl=-$Zahl;
	}
	do {
		$Ergebnis=ZifferalsWort($Zahl%10)." ".$Ergebnis;
		$Zahl=$Zahl/10;
	} while ($Zahl>=1);
	return $Vorzeichen.$Ergebnis;
}

$zahl= 389569;
echo "Zahl als Wort: ".ZahlalsWort($zahl);

echo "</pre>";
?>