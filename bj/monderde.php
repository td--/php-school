<?php
$i = 0;
$neutral = 1;
$paper = 0.1 / 1000;
while($paper <= 400000*1000){
	$paper = $paper * 2;
	$i++;
	echo 'papier = ' . $paper . '<br>';
	echo 'i = ' . $i . '<br>';
}

?>