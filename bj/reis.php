<?php

//Variablen Definieren
$GewichtReiskorn=(0.1/1000)/1000; //Gewicht Reiskörner in t
$WagonLaenge=20; //in m
$WagonLadung=30; //in t
$AnzahlKoerner=1; //Anzahl der Körner
$AnzahlWagons=0; //Anzahl der Wagons
$UmfangErde=40000*1000; //in m
$AnzahlFelder=64; //Schachbrett Felder
$i=1; 
$KoernerGesamt=0;


//Berechnung der Körner
echo '<h1>Rechenschritte:</h1><a><br>';
while ($i<=$AnzahlFelder){
$KoernerGesamt=$KoernerGesamt+$AnzahlKoerner;
$AnzahlKoerner=$AnzahlKoerner*2;
$i=$i+1;
echo 'Körner:'.$AnzahlKoerner.' Gesamt Anzahl Körner:'.$KoernerGesamt.' Schritt Nummer:'.$i.'<br><br>'; //Anzeigen der Zwischenschritte
}
echo '<br><h2>FINALES ERGEBNIS<h2><br>';
echo 'Anzahl der Körner: '.$KoernerGesamt.'<br>';
$i=$i-1;
echo 'Gebrauchte Schritte: '.$i.'<br>';


//Wagons Berechnen
$AnzahlWagons=($KoernerGesamt*$GewichtReiskorn)/$WagonLadung;
echo 'Es werden '.$AnzahlWagons.' ben&oumltigt.<br>';


//Wagon Länge
echo 'Bei einer Wagon L&aumlnge von '.$WagonLaenge.'m, ergibt das eine Gesamtl&aumlnge von '.(($WagonLaenge*$AnzahlWagons)/1000).'km.<br>';
echo 'Diese Länge reicht '.($UmfangErde/($WagonLaenge*$AnzahlWagons)).' mal um die Erde.';
?>