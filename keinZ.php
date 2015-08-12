<?php
function male($Zeichen, $Anzahl, $br=false){
	for ($i=1;$i<=$Anzahl;$i=$i+1){
		echo $Zeichen;
	}
	if ($br){
		echo '<br>';
	}
}

echo '<pre>';
$innen=99;
$i=1;
male ('x',100,true);
while($i<=101){
	male(' ',$innen);
	male('x',1,true);
	$innen=$innen-1;
	$i=$i+1;
}
male('x',100);
echo '</pre>';
?>