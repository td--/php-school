<?php
echo "<pre>";
function basis2hoch($Wert){
	$Ergebnis=1;
	if($Wert==0){
		return $Ergebnis=0;
	} else if ($Wert<0){
		$Wert=$Wert*(-1);
		for ($i=1; $i<=$Wert; $i=$i+1){
			$Ergebnis=$Ergebnis*2;
		}
		 return 1/$Ergebnis;
	}else {
		for ($i=1; $i<=$Wert; $i=$i+1){
			$Ergebnis=$Ergebnis*2;
		}
	return $Ergebnis;
	}
}
echo "2^5 = ".basis2hoch(5)."<br>";
echo "2^-3 = ".basis2hoch(-3)."<br>";
echo "2^0 = ".basis2hoch(-0)."<br>";
//echo "2^3 = ".pow(2, 3)."<br>";

echo "</pre>";
?>