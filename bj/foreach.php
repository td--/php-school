<?php
$orte = array(
		array('HH','12h','7°'),
		array('HB','18h','5°'),
		array('HL','6h','-2°')
		);

echo '<h1>Orte mit for-Schleife</h1><br>';
for($i = 0; $i < count($orte); $i = $i+1){
	for($j = 0; $j < count($orte[$i]); $j = $j+1){
		echo $orte[$i][$j] . ' ';
	}
	echo '<br>';
}

echo '<h1>Orte mit foreach</h1><br>';
foreach($orte as $key){
	foreach ($key as $value) {
        echo $value . ' ';
    }
	echo '<br>';
}

$orte = array('Ort'=>'HH','Zeit'=>'12h','Temparatur'=>'7°');

echo '<h1>assoziative arrays</h1><br>';
echo $orte['Ort'] . ' ' .$orte['Zeit'] . ' ' . $orte['Temparatur'];

echo '<h1>assoziative arrays mit foreach</h1><br>';
foreach($orte as $key=>$value){
        echo $key . ' => ' . $value . '<br>';
}
?>