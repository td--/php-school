<?php
function summeArray($array){
	$Summe=0;
	for ($i=0;$i<count($array);$i=$i+1){
		$Summe=$Summe+$array[$i];
	}
	return $Summe;
}
function mittelwertArray($array){
	return summeArray($array)/count($array);
}

function maxArray($array){
	$anzahl=count($array);
	$max=0;
	for($i=0;$i<count($array);$i=$i+1){
		if ($array[$i]>$max){
			$max=$array[$i];
		}
	}
	return $max;
}
function minArray($array){
	$anzahl=count($array);
	$min=$array[0];
	for($i=0;$i<count($array);$i=$i+1){
		if ($array[$i]<$min){
			$min=$array[$i];
		}
	}
	return $min;
}


$ARRAY=array(12,45,4654,2);
echo '<br>';

echo summeArray($ARRAY);
echo '<br><br>';
echo mittelwertArray($ARRAY);
echo '<br><br>';
echo maxArray($ARRAY);
echo '<br><br>';
echo minArray($ARRAY);
?>