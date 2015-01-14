<?php
/* //NOTIZEN&ARBEITSAUFTRAG//
Geldanlage: 1000€
Laufzeit: 7 Jahre
Zinsen: 3% Jahr
ab 4. Jahr: 0,5% jährlich mehr
Auszahlungsbetrag: ?
*/
//////////////////////////////
$geld=1000;
$zinsen=3;
$auszahlungsbetrag=0;
$i=1;


while ($i<=7){
	echo '<table border="yes">';
	if ($i<=3){
		$geld=$geld+(($geld/100)*$zinsen);
		echo '<tr><td>'.$i.'</td><td>'.$geld.'</td></tr>';
		$i=$i+1;
	}
	else {

		$zinsen=$zinsen+0.5;
		$geld=$geld+(($geld/100)*$zinsen);
		echo '<tr><td>'.$i.'</td><td>'.$geld.'</td></tr>';
		$i=$i+1;
		
	}
	echo '</table>';
}
?>
