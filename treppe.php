<?php
$i=0;
$zeile=0;
$stufe=6;
echo '<pre>';
while ($zeile<6){
	while ($i<$stufe){
		echo ' ';
		$i=$i+1;
	}
	echo 'x<br>';
	$i=0;
	$stufe=$stufe-1;
	$zeile=$zeile+1;
}
echo '</pre>'
?>