<link rel="stylesheet" style="text/css" href="table.css"/>
<?php
// Tabelle.php von Tobias Schulze FISI14
echo'<table border="1">';
echo '<tr class="tablehead">';
echo '<th># &uarr;</th>';
echo '<th># &darr;</th>';
echo '<th># &uarr; + # &darr;</th>';
echo '<th># &uarr; - # &darr;</th>';
echo '<th># &uarr; * # &darr;</th>';
echo '<th># &uarr; / # &darr;</th>';
echo '<th># &uarr; % # &darr;</th>';
echo '</tr>';

$spalte1=1;
$spalte2=10;
$spalte3=0;
$spalte4=0;
$spalte5=0;
$spalte6=0;
$spalte7=0;

$summespalte1=0;
$summespalte2=0;
$summespalte3=0;
$summespalte4=0;
$summespalte5=0;
$summespalte6=0;
$summespalte7=0;

while($spalte1<=10){


	echo'<tr>';

	$spalte3=$spalte1+$spalte2;
	$spalte4=$spalte1-$spalte2;
	$spalte5=$spalte1*$spalte2;
	$spalte6=$spalte1/$spalte2;
	$spalte7=$spalte1%$spalte2;
	
	echo '<td class="red">'.$spalte1.'</td>';
	echo '<td class="blue">'.$spalte2.'</td>';
	echo '<td >'.$spalte3.'</td>';
	echo '<td >'.$spalte4.'</td>';
	echo '<td >'.$spalte5.'</td>';
	echo '<td >'.$spalte6.'</td>';
	echo '<td >'.$spalte7.'</td>';
	echo '</tr>';
	
	$summespalte1=$summespalte1+$spalte1;
	$summespalte2=$summespalte2+$spalte2;
	$summespalte3=$summespalte3+$spalte3;
	$summespalte4=$summespalte4+$spalte4;
	$summespalte5=$summespalte5+$spalte5;
	$summespalte6=$summespalte6+$spalte6;
	$summespalte7=$summespalte7+$spalte7;
	
	$spalte1=$spalte1+1;
	$spalte2=$spalte2-1;
}
echo '<tr class="tablehead">';
echo '<td> &sum;'.$summespalte1.'</td>';
echo '<td> &sum;'.$summespalte2.'</td>';
echo '<td> &sum;'.$summespalte3.'</td>';
echo '<td> &sum;'.$summespalte4.'</td>';
echo '<td> &sum;'.$summespalte5.'</td>';
echo '<td> &sum;'.$summespalte6.'</td>';
echo '<td> &sum;'.$summespalte7.'</td>';
echo '</tr>';
?>