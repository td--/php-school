<pre>
<?php
$Orte=array('HH','HB','HL');
for ($i=0;$i<count($Orte);$i=$i+1){
	echo $Orte[$i].' ';
}
echo '<br>';
foreach($Orte as $Ort){
	echo $Ort.' ';
}

echo '<br><br>';
$Messungen=array(
					array('HH','12h','7°'),
					array('HB','18h','5°'),
					array('HL','6h','-2°')
);
for($i=0;$i<count($Messungen);$i=$i+1){
	for($j=0;$j<count($Messungen[$i]);$j=$j+1){
		echo $Messungen[$i][$j].'  ';
	}
	echo '<br>';
}
echo '<br><br>';


foreach($Messungen as $Messung){
	foreach($Messung as $Wert){
		echo $Wert.'  ';
	}
	echo '<br>';
}
?>
</pre>

<br><br>
<pre>
<?php
$Messung=array('Ort'=>'HH','Zeit'=>'12h','Temperatur'=>'7°');
echo $Messung['Ort'].'  '.$Messung['Zeit'].'  '.$Messung['Temperatur'].'<br>';
?>
</pre>