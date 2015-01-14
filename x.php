<?php
//WHILE
echo '<h1>Wiederholung mit While</h1>';
$i=1;
$summe=0;
while ($i<=10){
	echo $i.'<br>';
	$summe=$summe+$i;
	$i=$i+1;
}
echo 'Summe von 1 bis 10= '.$summe.'<br>';
//FOR
echo '<h1>Wiederholung mit For</h1>';
$summe=0;
for ($i=1;$i<=10;$i=$i+1){
	echo $i.'<br>';
	$summe=$summe+$i;
}
echo 'Summe von 1 bis 10= '.$summe.'<br>';
//DO
echo '<h1>Wiederholung mit Do</h1>';
$summe=0;
$i=1;
do{
	echo $i.'<br>';
	$summe=$summe+$i;
	$i=$i+1;
} while($i<=10);
echo 'Summe von 1 bis 10= '.$summe.'<br>';
?>