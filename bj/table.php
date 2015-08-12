<link rel="stylesheet" style="text/css" href="table.css"/>
<?php
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
if ($spalte1 % 2 == true ){
	echo'<tr class="red">';
}
else{
	echo'<tr class="blue">';
}
	$spalte3=$spalte1+$spalte2;
	$spalte4=$spalte1-$spalte2;
	$spalte5=$spalte1*$spalte2;
	$spalte6=$spalte1/$spalte2;
	$spalte7=$spalte1%$spalte2;
	
	echo '<td >'.$spalte1.'</td>';
	echo '<td >'.$spalte2.'</td>';
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

<?php

echo'<table id="sec" border="1">';
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
if($spalte1 % 2 == true){
$zaehlerspalte = 0;
}
else{
$zaehlerspalte = 1;
}
	echo'<tr>';

	$spalte3=$spalte1+$spalte2;
	$spalte4=$spalte1-$spalte2;
	$spalte5=$spalte1*$spalte2;
	$spalte6=$spalte1/$spalte2;
	$spalte7=$spalte1%$spalte2;
	//########SPALTE 1############
	if($zaehlerspalte == 0){
		echo '<td class="red" >'.$spalte1.'</td>';
	}
	else{
		echo '<td class="blue" >'.$spalte1.'</td>';
	}
	//########SPALTE 2############
	if($zaehlerspalte == 1){
		echo '<td class="red" >'.$spalte2.'</td>';
	}
	else{
		echo '<td class="blue" >'.$spalte2.'</td>';
	}
	//########SPALTE 3############
	if($zaehlerspalte == 0){
		echo '<td class="red" >'.$spalte3.'</td>';
	}
	else{
		echo '<td class="blue" >'.$spalte3.'</td>';
	}
	//########SPALTE 4############
	if($zaehlerspalte == 1){
		echo '<td class="red" >'.$spalte4.'</td>';
	}
	else{
		echo '<td class="blue" >'.$spalte4.'</td>';
	}
	//########SPALTE 5############
	if($zaehlerspalte == 0){
		echo '<td class="red" >'.$spalte5.'</td>';
	}
	else{
		echo '<td class="blue" >'.$spalte5.'</td>';
	}
	//########SPALTE 6############
	if($zaehlerspalte == 1){
		echo '<td class="red" >'.$spalte6.'</td>';
	}
	else{
		echo '<td class="blue" >'.$spalte6.'</td>';
	}
	//########SPALTE 7############
	if($zaehlerspalte == 0){
		echo '<td class="red" >'.$spalte7.'</td>';
	}
	else{
		echo '<td class="blue" >'.$spalte7.'</td>';
	}
	
	/*
	echo '<td class="blue">'.$spalte2.'</td>';
	echo '<td >'.$spalte3.'</td>';
	echo '<td >'.$spalte4.'</td>';
	echo '<td >'.$spalte5.'</td>';
	echo '<td >'.$spalte6.'</td>';
	echo '<td >'.$spalte7.'</td>';*/
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