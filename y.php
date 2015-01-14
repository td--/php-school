<?php
$i=1;
$teilbar=0;
$nichtteilbar=0;
while ($i<=10){
	if (($i%2)==0){
		if (($i%3)==0){
			$teilbar=$teilbar+1;
			echo '<font color="green">'.$i.' ist durch 2&3 Teilbar.<br><br>';
		}
	}
	
	//Nicht Anwendbar auf 2&3
#	else{
#		$nichtteilbar=$nichtteilbar+1;
#		echo '<font color="red">'.$i.' ist NICHT durch 2&3 Teilbar.<br><br>';
#	}

	$i=$i+1;
}
echo '<br><br><br>';
echo '<font color="green">'.'Es sind '.$teilbar.' Zahlen durch 2&3 teilbar.<br><br>';
	//Nicht anwendbar da Variable nicht hochgezählt wird
#echo '<font color="red">'.'Es sind '.$nichtteilbar.' Zahlen nicht durch 2&3 teilbar.';

?>