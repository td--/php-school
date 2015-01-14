<?php
$reiskoerner=0;
$counter=0;
$schachfelder=65;
$reisgw=0.00003;

while ($counter <= $schachfelder){

$reisgw = $reisgw * 2;
$reiskoerner = $reiskoerner * 2;
$counter++;
echo 'x'.$reisgw.'x'.$reiskoerner.'<br>';
}
echo '<br>Finales ergebniss: '.$reisgw.'kg und '.$reiskoerner.' Reiskörner';
?>
