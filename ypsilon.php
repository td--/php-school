<?php
function male($Zeichen, $Anzahl, $br=false){
	for ($i=1;$i<=$Anzahl;$i=$i+1){
		echo $Zeichen;
	}
	if ($br){
		echo '<br>';
	}
}

$hoehe=2000;
$hoehe8=2000/8;
$strich=$hoehe8*5;
$ypsilon=$hoehe8*3;
$rand=$ypsilon;
$mitte=1;
$i=1;

echo '<pre>';
while($i<=$strich){
	male(' ',$rand);
	male('x',1,true);
	$i=$i+1;
}
while($i<$hoehe){
	$rand=$rand-1;
	male(' ',$rand);
	male('x',1);
	male(' ',$mitte);
	male('x',1,true);
	$mitte=$mitte+2;
	$i=$i+1;
}
male(' ',$rand+1);
male(' ',$mitte);
male('x',1);
echo '</pre>';
?>