<?php

function male ($h, $r){
	for($i=1;$i<=$h;$i=$i+1){
		for($j=1;$j<$r;$j=$j+1){
			echo' ';
	}
	echo'x';
	echo'<br>';
	$r=$r+1;
	}
}
function malenegative($h, $r){
	for($i=1;$i<=$h;$i=$i+1){
		for($j=1;$j<$r;$j=$j+1){
			echo' ';
	}
	echo'x';
	echo'<br>';
	$r=$r-1;
	}
}
function drawmiddleline($width){
	for($i= 0; $i < $width; $i++){
			echo'x';
			echo ' ';
	}
	echo '<br>';
}
echo '<pre>';

male(6, 1);
drawmiddleline(4);
malenegative(6, 6);

echo '</pre>';	
?>