<?php
##Variablen
$leerzeichen=7;
$leerzeichen2=0;
$i=1;

##Funktion
function male ($Zeichen,$Anzahl){
       for ($i=1;$i<=$Anzahl;$i++){
               echo $Zeichen;
       }
}

##V
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