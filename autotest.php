<?php

#1. Block#
/*

include('autoclass.php'); //binde autoclass.php ein
$meinAuto=new Auto(); //definiere $meinAuto als Auto()
$meinAuto->Farbe='blau'; //definiere die Farbe von $meinAuto
echo 'Mein Auto ist '.$meinAuto->Farbe; //gebe die Farbe von $meinAuto aus
echo '<br>';
$deinAuto=new Auto(); //definiere $deinAuto als Auto()
$deinAuto->Farbe='rot'; //definiere die Farbe von $deinAuto
echo 'Dein Auto ist '.$deinAuto->Farbe; //gebe die Farbe von $deinAuto aus.
echo '<br>';
$meinAuto->Tankstand=50;
$meinAuto->fahren(50); //fahre 50km
$meinAuto->fahren(100); //fahre 100km
$meinAuto->fahren(-100); //fahre 100km rückwaärts
$meinAuto->fahren(-123456); //fahre 123456km rückwärts
$meinAuto->fahren(500); //fahre 500 km
echo 'Kilometerstand:'.$meinAuto->KMstand; //gebe Kilometerstand aus

echo '<br><br>';
$meinAuto->maxTank=150; //maximaler Tankstand
$meinAuto->Tankstand=50; //aktueller Tankstand
echo $meinAuto->Tankstand; //gebe Tankstand aus
echo '<br>';
$meinAuto->tanken(50); //tanke 50 Liter
echo $meinAuto->Tankstand; //gebe Tankstand aus
echo '<br>';
$meinAuto->tanken(1000); //tanke 1000 Liter
echo $meinAuto->Tankstand; //gebe Tankstand aus
echo '<br>';
echo $meinAuto->KMstand;
$meinAuto->Verbrauch=10;
$meinAuto->fahren(5000);
echo '<br><br>';
echo $meinAuto->KMstand;
*/

#2. Block#

include('autoclass.php'); //autoclass.php einbinden
$meinAuto=new Auto(); //$meinAuto als Auto() definieren
$meinAuto->Farbe='blau'; //Auto Farbe
$meinAuto->maxTank=60; //Auto Tankgröße
$meinAuto->Verbrauch=10; //Auto Verbrauch
$meinAuto->tanken(100); //Tankfüllung in Liter
$meinAuto->fahren(1000); //Fahren in KM
$meinAuto->fahren(-100); //Fahren in KM
$meinAuto->fahren(500);
echo 'Mein Auto ist '.$meinAuto->Farbe.'<br>'; //Farbausgabe
echo 'Kilometerstand: '.$meinAuto->getKMstand().'<br>'; //Kilometerstandausgabe
echo 'Tankstand: '.$meinAuto->Tankstand.'<br>'; //Tankstandausgabe
?>