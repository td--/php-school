<?php
echo '<title>Tabellen</title>';
$zeile=1;
$spalte1=1;
$spalte2=10;
$summespalte1=0;
$summespalte2=0;
$summespalte3=0;
$summespalte4=0;
$summespalte5=0;
$summespalte6=0;
echo '<table style="background:grey" border="1">';//Hintergrund Tabelle Grau
echo '<tr><th><span style="color:#00FF00">#</th><th><span style="color:#00FF00">#</th><th><span style="color:#00FF00">+</th><th><span style="color:#00FF00">/</th><th><span style="color:#00FF00">*</th><th><span style="color:#00FF00">%</th></tr>';
while ($zeile<=10){
	$spalte3=$spalte1+$spalte2;
	$spalte4=$spalte1/$spalte2;
	$spalte5=$spalte1*$spalte2;
	$spalte6=$spalte1%$spalte2;
	$summespalte1=$summespalte1+$spalte1;
	$summespalte2=$summespalte2+$spalte2;
	$summespalte3=$summespalte3+$spalte3;
	$summespalte4=$summespalte4+$spalte4;
	$summespalte5=$summespalte5+$spalte5;
	$summespalte6=$summespalte6+$spalte6;
	//Zeilen Design Magenta
	if ($zeile%2==0){
		echo '<tr bgcolor=#FF00FF><td>'.$spalte1.'</td><td>'.$spalte2.'</td><td>'.$spalte3.'</td><td>'.$spalte4.'</td><td>'.$spalte5.'</td><td>'.$spalte6.'</td></tr>';
	}
	//Zeilen Design Blau
	else {
		echo '<tr bgcolor=#0000CD><td>'.$spalte1.'</td><td>'.$spalte2.'</td><td>'.$spalte3.'</td><td>'.$spalte4.'</td><td>'.$spalte5.'</td><td>'.$spalte6.'</td></tr>';
	}
	
	$spalte1=$spalte1+1;
	$spalte2=$spalte2-1;
	$zeile=$zeile+1;
	
	
	

	}
echo '<tr bgcolor=#654321><td>'.$summespalte1.'</td><td>'.$summespalte2.'</td><td>'.$summespalte3.'</td><td>'.$summespalte4.'</td><td>'.$summespalte5.'</td><td>'.$summespalte6.'</td></tr>';
echo '</table>';
?>