<?php
function ZifferAlsWort($Ziffer){
	$WortZiffer=array('null','eins','zwei','drei','vier','fuenf','sechs','sieben');
		$i=1;
		$rechenschritt[0]=$Ziffer;
		$anzahl=strlen($Ziffer);
		echo $anzahl.'<br>';
	while($i<=$anzahl){
		$rechenschritt[$i]=$rechenschritt[$i-1]/10;
		echo $rechenschritt[$i].'<br>';
		$i=$i+1;
	}
	
	return $WortZiffer[$Ziffer];

	
}
echo ZifferAlsWort(3524);














/*
	if ($Ziffer<0){
		echo 'Fehlerhafter Wert! Wert zu niedrig.';
	}
	elseif ($Ziffer<=count($WortZiffer)){
	}
	else{
		echo 'Fehlerhafter Wert! Wert zu hoch.';
	}
	*/
?>