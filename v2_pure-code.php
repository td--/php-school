<?php
$leerzeichen=7;
$leerzeichen2=0;
$i=1;
function male ($Zeichen,$Anzahl){
	for ($f_i=1;$f_i<=$Anzahl;$f_i=$f_i+1){
		echo $Zeichen;
	}
}
echo '<pre>';
while ($i<5){
	male(' ',$leerzeichen2);
	male('x',1);
	male(' ',$leerzeichen);
	male('x',1);
	
	echo '<br>';
	$leerzeichen=$leerzeichen-2;
	$leerzeichen2=$leerzeichen2+1;
	$i=$i+1;
}
male (' ',$leerzeichen2);	
male('x',1);
echo '</pre>';
?>