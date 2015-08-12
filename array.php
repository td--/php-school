<?php
function gibArrayaus($Feld){
	for($i=0; $i<count($Feld);$i=$i+1){
		echo 'Feld['.$i.']='.$Feld[$i].'<br>';
	}	
}

$Feld=array(7,-3,5);
$Feld2=array(1,7,5,3);
$Feld3[0]=7;
$Feld3[2]=6;
$i=0;

gibArrayaus($Feld);
echo '<br><br>';
gibArrayaus($Feld2);
echo '<br><br>';
gibArrayaus($Feld3);
/*
while ($i<=2){
	echo '$Feld['.$i.']='.$Feld[$i].'<br>';
	$i=$i+1;
}
*/

?>