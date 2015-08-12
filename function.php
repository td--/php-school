<?php
function male($Zeichen, $Anzahl, $br=false){
	for ($i=1;$i<=$Anzahl;$i=$i+1){
		echo $Zeichen;
	}
	if ($br){
		echo '<br>';
	}
}

$i=1;
$innen=36795;
$abstand=0;
echo '<pre>';
male('x',73591,true);
while($i<73590){
	male('x',1);
	male(' ',73589);
	male('x',1,true);
	$i=$i+1;
}
male('x',73951,true);
while($abstand<=36795/2){
	male(' ',$abstand);
	male('x',1);
	male(' ',$innen);
	male('x',1,true);
	$innen=$innen-2;
	$abstand=$abstand+1;
}
echo '</pre>';
?>