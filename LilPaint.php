<?php
$Farben = array('red', 'lime', 'white', 'black', 'yellow', 'blue', '#ff7f00', 'pink', '#500050', '#8B4513', 'green', 'cyan', '#aaaaaa', '#555555', '#b6ff8c', '#ffaa11', '#FBABAB');
$Farben_DE = array ('rot', 'hell grün', 'weiß', 'schwarz', 'gelb', 'dunkel blau', 'orange', 'rosa', 'lila', 'braun', 'dunkel grün', 'hell blau', 'hell grau', 'dunkel grau', 'pastel grün', 'pastel orange', 'grün');
$Breite = 600; //bereich zum Malen
$Hohe = 200;

if (! $_POST or isset($_POST['neu'])){
	$_POST['farbe'] = 'white'; //setzt neutralle Farbe
	$_POST['farbe_DE'] = 'keine Farbe';
	for ($i = 1; $i <= (($Breite/20)*($Hohe/20)) ; $i=$i+1){ //setzt die Farbe für jedes Feld auf weiß
		$_POST['bt_Farbe'][$i] = 'white';
	}
}
if(isset($_POST['Farbauswahl'])){ //ändert gespeicherte Farben
	$_POST['farbe_DE'] = $Farben_DE[key($_POST['Farbauswahl'])];
	$_POST['farbe'] = $Farben[key($_POST['Farbauswahl'])];
}
if(isset($_POST['Feld'])){ //merkt sich die Farbe für ein bestimmtes Feld
	$_POST['bt_Farbe'][key($_POST['Feld'])] = $_POST['farbe'];
}

echo '<form method="post">';
echo '<div style="width:'.$Breite.'px; height:'.$Hohe.'px; border:1px solid black;">'; //breich zum Malen
for ($i = 1; $i <= (round(($Breite/20),0) * round(($Hohe/20),0)) ; $i=$i+1){ //erstellt versteckter Text wo die Farbe für Button gespeichert ist und die Buttons
	echo '<input type="hidden" name="bt_Farbe['.$i.']" value="'.$_POST['bt_Farbe'][$i].'">'; //Text mit Farbe
	echo '<input type="submit" name="Feld['.$i.']" value="" style="width:20px; background-color:'.$_POST['bt_Farbe'][$i].'; border:1px solid black;">'; //Button
}
echo '</div>'; //ende des Mal-Bereiches
echo '<div style="width:'.$Breite.'px; border:1px solid black;">'; //Bereich mit Farbpalette
echo '<input type="submit" name="neu" value="NEU" style="width:40px; background-color:white; border:1px solid black;">'; //Reset Button
for ($i = 0; $i < count($Farben); $i=$i+1){ //erstellt für jede Farbe ein Button
	echo '<input type="submit" name="Farbauswahl['.$i.']" value="" style="width:40px; background-color:'.$Farben[$i].'; border:1px solid black;">';
}
echo '</div>'; //ende der Farbpalette
echo 'Sie haben '.$_POST['farbe_DE'].' gewählt.';
echo '<input type="hidden" name="farbe" value="'.$_POST['farbe'].'">'; 
echo '<input type="hidden" name="farbe_DE" value="'.$_POST['farbe_DE'].'">';
echo '</form>';
?>