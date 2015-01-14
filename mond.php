<?php
$mond=400000000000;
$papier=0.1;
$faltungen=0;
while ($papier <= $mond){
$papier = $papier * 2;
$faltungen = $faltungen + 1;
echo 'Das Papier ist '.$papier.' mm hoch und '.$faltungen.' mal gefaltet worden.<br><br>';
}

echo '<br><br><br>Das Blatt muss '.$faltungen.' mal gefaltet werden damit es so hoch wie der Mond ist.';
?>