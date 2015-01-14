<?php
/*
Funktionen
*/
function male ($Zeichen,$Anzahl){
	for ($i=1;$i<=$Anzahl;$i=$i+1){
		echo $Zeichen;
	}
}
/*
Funktion Testen
*/
male('x',10);
male('<br>',1);
male('hallo',2);

?>