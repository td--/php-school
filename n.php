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
$nl=0;
$nr=498;
echo '<pre>';
while ($i<=500){
	male('x',1);
	male(' ',$nl);
	male('x',1);
	male(' ',$nr);
	male('x',1,true);
	$nl=$nl+1;
	$nr=$nr-1;
	$i=$i+1;
}
echo '</pre>';
?>