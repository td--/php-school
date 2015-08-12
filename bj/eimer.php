<?php
	
	$eimer1 = '<span style="color:green;"> gr&uuml;n</span>';
	$eimer2 = '<span style="color:red;" >rot </span>';
	$eimer3 = '<span style="color:grey;">Leer</span>';
	

	echo '<h1>Eimer1-2-3</h1>';
	echo 'Eimer1 ist ' . $eimer1 . '<br>';
	echo 'Eimer2 ist ' . $eimer2 . '<br>';
	echo 'Eimer3 ist ' . $eimer3 . '<br>';
	
	

	$eimer3 = $eimer1;
	$eimer1 = $eimer2;
	$eimer2 = $eimer3;
	$eimer3 = '<span style="color:grey;">Leer</span>';

	
	echo '<h1>Eimer1-2-3 Refilled</h1>';
	echo 'Eimer1 ist ' . $eimer1 . '<br>';
	echo 'Eimer2 ist ' . $eimer2 . '<br>';
	echo 'Eimer3 ist ' . $eimer3 . '<br>';
	
	$eimerbundle = array($eimer1, $eimer2, $eimer3);
	print_r($eimerbundle);
	$eimerbundle = shuffle($eimerbundle);
	
	print_r($eimerbundle);
	
?>