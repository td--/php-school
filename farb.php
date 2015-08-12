<?php
if(!$_POST){
	$_POST['Farbauswahlmerker']=2;
}
#print_r($_POST);
$Farben=array('red','green','white','black','blue');
$FarbenDE=array('Rot','Gr&uumln','Weiss','Schwarz','Blau');

echo '<form method="post">';
/*
echo '<div style="background-color:'.$Farben[key($_POST['Farbauswahl'])].';height:500px;width:600px;border:2px solid black">';
echo '</div>';
*/
/*
echo '<div style="height:500px;width:600px;border:2px solid black">';
echo
echo '</div>';
*/
echo '<div style="width:600px;border:1px solid black">';
for ($i=0; $i<count($Farben); $i=$i+1){
	echo '<input type="submit" name="Farbauswahl['.$i.']" value="" style="width:40px; background-color:'.$Farben[$i].'; border:1px solid black" />';
	
}
echo '</div>';
echo '<input type="hidden" name="Farbauswahlmerker" value="'.$_POST['Farbauswahlmerker'].'">';
echo '</form>';
if (isset($_POST['Farbauswahl'])){
	echo 'Sie haben '.$FarbenDE[key($_POST['Farbauswahl'])].' gew&aumlhlt.';
	$_POST['Farbauswahlmerker']=$Farben[key($_POST['Farbauswahl'])];
}
echo $_POST['Farbauswahlmerker'];
?>