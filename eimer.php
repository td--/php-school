<?php
echo '<title>Eimer Tausch</title>';
$Eimer1='<font size="22" color="#00FF00">grün</font>'; //Eimer 1 grün Färben
$Eimer2='<font size="22" color="#FF0000">rot</font>'; //Eimer 2 rot Färben
$Eimer3='<font size="22">leer</font>'; //Eimer 3 als Leer definieren
echo '<font color="#0080FF"><h1>Eimer Tausch</h1><br></font>';
echo '<font color="#0000FF"><h2>Eimerinhalt vor dem Tauschen</h2></font>';
echo '<font size="22">Eimer 1 ist </font>'.$Eimer1.'<br>';
echo '<font size="22">Eimer 2 ist </font>'.$Eimer2.'<br>';
echo '<font size="22">Eimer 3 ist </font>'.$Eimer3.'<br>';

$Eimer3=$Eimer1; //1. Schritt | Eimer 3 die Farbe von Eimer 1 geben
$Eimer1=$Eimer2; //2. Schritt | Eimer 1 die Farbe von Eimer 2 geben
$Eimer2=$Eimer3; //3. Schritt | Eimer 2 die Farbe von Eimer3 geben
$Eimer3='<font size="22">leer</font>'; //Eimer 3 als Leer definieren
echo '<font color="#0000FF"><h2>Eimerinhalt nach dem Tauschen</h2></font>';
echo '<font size="22">Eimer 1 ist </font>'.$Eimer1.'<br>';
echo '<font size="22">Eimer 2 ist </font>'.$Eimer2.'<br>';
echo '<font size="22">Eimer 3 ist </font>'.$Eimer3.'<br>';

//FARBCODES
//#FF0000 = ROT
//#00FF00 = GRÜN
//#000000 = SCHWARZ
//#0000FF = BLAU
//#0080FF = HELLERES BLAU
?>