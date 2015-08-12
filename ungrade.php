<?php
$i=1;
$teilbar=0;
$nichtteilbar=0;
for($i=0; $i<count($Feld);$i=$i+1){
	while ($i<=10){
		if (($i%2)==0){
			if (($i%2)==0){
				$teilbar=$teilbar+1;
				echo '<font color="green">'.$i.' ist durch 2&3 Teilbar.<br><br>';
			}
	}
}	

?>